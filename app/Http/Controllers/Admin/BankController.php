<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bank;
use App\Models\Donasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BankController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'bank' => 'required',
            'number' => 'required',
            'program_id' => 'required|exists:program,program_id',
        ]);
        if ($validator->fails()) {
            return redirect()->route('admin.bank.create')->with('error', $validator->errors()->first())->withInput();
        }

        $program_id = $request->program_id;

        Bank::create($request->only([
            'name',
            'bank',
            'number',
            'program_id'
        ]));

        return redirect()->route('admin.program.show', $program_id)->with('success', 'Rekening berhasil dibuat')->withInput();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'type' => 'required',
            'amount' => 'required',
            'program_id' => 'required|exists:program,program_id',
        ]);
        if ($validator->fails()) {
            return redirect()->route('admin.bank.edit', $id)->with('error', $validator->errors()->first())->withInput();
        }

        $program_id = $request->program_id;

        $bank = Bank::findOrFail($id);
        $bank->update($request->only([
            'name',
            'bank',
            'number'
        ]));

        return redirect()->route('admin.program.show', $program_id)->with('success', 'Rekening berhasil diubah')->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bank = Bank::findOrFail($id);
        if (Donasi::whereBankId($id)->exists()) {
            return redirect()->back()->with('error', 'Rekening gagal dihapus, rekening sudah dipakai')->withInput();
        }

        $bank->delete();
        return redirect()->back()->with('success', 'Rekening berhasil dihapus')->withInput();
    }
}
