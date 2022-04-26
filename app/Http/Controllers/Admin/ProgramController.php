<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Program;
use App\Models\Kategori;
use App\Models\ProgramGalery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Str;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = Program::all();

        return view('admin.program.index', compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('admin.program.create', compact('kategori'));
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
            'title' => 'required',
            'subtitle' => 'required',
            'image' => 'required|mimes:png,jpg',
            'image_icon' => 'required|mimes:png,jpg',
            'description' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.program.create')->with('error', $validator->errors()->first())->withInput();
        }

        if (empty($request->file('images'))) {
            return redirect()->route('admin.program.create')->with('error', 'Galeri minimal satu')->withInput();
        }

        $data = $request->only([
            'title',
            'subtitle',
            'description',
            'kode'
        ]);
        $data['slug'] = Str::slug($request->title);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = Uuid::uuid4() . '.' . $file->getClientOriginalExtension();
            move_uploaded_file($file, public_path('images/program') . '/' . $name);
            $data['image'] = $name;
        }

        if ($request->hasFile('image_icon')) {
            $file = $request->file('image_icon');
            $name = Uuid::uuid4() . '.' . $file->getClientOriginalExtension();
            move_uploaded_file($file, public_path('images/program') . '/' . $name);
            $data['icon'] = $name;
        }

        if ($request->hasFile('imageThumb')) {
            $file = $request->file('imageThumb');
            $name = Uuid::uuid4() . '.' . $file->getClientOriginalExtension();
            move_uploaded_file($file, public_path('images/program') . '/' . $name);
            $data['img_thumb'] = $name;
        }

        $program = Program::create($data);

        foreach ($request->file('images') as $image) {
            $name = Uuid::uuid4() . '.' . $image->getClientOriginalExtension();
            move_uploaded_file($image, public_path('images/galery') . '/' . $name);
            $program->galeries()->create([
                'image' => $name
            ]);
        }

        return redirect()->route('admin.program.index')->with('success', 'Program baru berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $program = Program::findOrFail($id);
        return view('admin.program.show', compact('program'));
    }

    public function getGaleries($id)
    {
        $program = Program::findOrFail($id);
        $program_galeries = $program->galeries;
        $galeries = [];
        foreach ($program_galeries as $galery) {
            $galeries[] = [
                'id' => $galery->program_galery_id,
                'src' => $galery->image_url
            ];
        }

        return response()->json($galeries);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $program = Program::findOrFail($id);
        return view('admin.program.edit', compact('program'));
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
            'title' => 'required',
            'subtitle' => 'required',
            'image' => 'required|mimes:png,jpg',
            'image_icon' => 'required|mimes:png,jpg',
            'description' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.program.edit', $id)->with('error', $validator->errors()->first())->withInput();
        }

        if (empty($request->file('images')) && empty($request->old)) {
            return redirect()->route('admin.program.edit', $id)->with('<er></er>ror', 'Galeri minimal satu')->withInput();
        }

        $program = Program::findOrFail($id);

        $data = $request->only([
            'title',
            'subtitle',
            'description',
        ]);
        $data['slug'] = Str::slug($request->title);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = Uuid::uuid4() . '.' . $file->getClientOriginalExtension();
            move_uploaded_file($file, public_path('images/program') . '/' . $name);
            $data['image'] = $name;
        }

        if ($request->hasFile('image_icon')) {
            $file = $request->file('image_icon');
            $name = Uuid::uuid4() . '.' . $file->getClientOriginalExtension();
            move_uploaded_file($file, public_path('images/program') . '/' . $name);
            $data['icon'] = $name;
        }

        if ($request->hasFile('imageThumb')) {
            $file = $request->file('imageThumb');
            $name = Uuid::uuid4() . '.' . $file->getClientOriginalExtension();
            move_uploaded_file($file, public_path('images/program') . '/' . $name);
            $data['img_thumb'] = $name;
        }

        $program->update($data);

        $galeries = [];
        if ($request->old) {
            $galeries = ProgramGalery::whereProgramId($id)
                ->whereNotIn('program_galery_id', $request->old)->get();
        }

        foreach ($galeries as $galery) {
            $image = public_path('images/galery/' . $galery->image);
            if (file_exists($image)) {
                unlink($image);
            }
            $galery->delete();
        }

        if ($request->file('images')) {
            foreach ($request->file('images') as $image) {
                $name = Uuid::uuid4() . '.' . $image->getClientOriginalExtension();
                move_uploaded_file($image, public_path('images/galery') . '/' . $name);
                $program->galeries()->create([
                    'image' => $name
                ]);
            }
        }

        return redirect()->route('admin.program.index')->with('success', 'Program berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $program = Program::findOrFail($id);

        $image = public_path('images/program/' . $program->image);
        if (file_exists($image)) {
            unlink($image);
        }

        foreach ($program->galeries as $galery) {
            $image = public_path('images/galery/' . $galery->image);
            if (file_exists($image)) {
                unlink($image);
            }
        }

        $program->galeries()->delete();
        $program->delete();

        return redirect()->route('admin.program.index')->with('success', 'Program berhasil dihapus');
    }
}
