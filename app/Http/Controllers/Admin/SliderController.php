<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Str;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = Slider::all();
        return view('admin.slider.index', compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'        => 'required',
            'subtitle'     => 'required',
            'image'        => 'required|mimes:png,jpg',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.slider.create')->with('error', $validator->errors()->first())->withInput();
        }

        $data = $request->only([
            'title',
            'subtitle',
            'is_button',
            'button_name',
            'button_link'
        ]);

        // if($request->has('is_button') ){
        //     $data['is_button'] = 1;
        // }

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = Uuid::uuid4() . '.' . $file->getClientOriginalExtension();
            move_uploaded_file($file, public_path('images/slider') . '/' . $name);
            $data['image'] = $name;
        }

        Slider::create($data);

        return redirect()->route('admin.slider.index')->with('success', 'Slider baru berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.slider.show', compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title'        => 'required',
            'subtitle'     => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.slider.edit', $id)->with('error', $validator->errors()->first())->withInput();
        }

        $slider = Slider::findOrFail($id);

        $data = $request->only([
            'title',
            'subtitle'
        ]);

        if( $request->has('is_button') ){
            $data['is_button'] = 1;
        }else{
            $data['is_button'] = 0;
        }

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = Uuid::uuid4() . '.' . $file->getClientOriginalExtension();
            move_uploaded_file($file, public_path('images/slider') . '/' . $name);
            $data['image'] = $name;
        }

        $slider->update($data);

        return redirect()->route('admin.slider.index')->with('success', 'Slider berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);

        $image = public_path('images/slider/' . $slider->image);
        if (file_exists($image)) {
            unlink($image);
        }

        $slider->delete();

        return redirect()->route('admin.slider.index')->with('success', 'Slider berhasil dihapus');
    }
}
