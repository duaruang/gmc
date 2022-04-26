<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Exports\KategoriExport;
use App\Exports\ProgramExport;
use App\Exports\DonaturExport;
use App\Exports\DonasiExport;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function kategori(Request $request)
	{
		return Excel::download(new KategoriExport($request->date), 'kategori.xlsx');
	}
    public function program(Request $request)
	{
		return Excel::download(new ProgramExport($request->date), 'program.xlsx');
	}
    public function donatur(Request $request)
	{
		return Excel::download(new DonaturExport($request->date), 'donatur.xlsx');
	}
    public function donasi(Request $request)
	{
		return Excel::download(new DonasiExport($request->date), 'donasi.xlsx');
	}
}
