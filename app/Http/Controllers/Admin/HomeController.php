<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Relawan;
use App\Models\User;
use App\Models\Donasi;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $relawan = Relawan::count();
        $users = User::count();
        $donasi = Donasi::whereStatus(2)->sum('amount');
        $data = Donasi::select(
            DB::raw('sum(amount) as amount'),
            DB::raw("DATE_FORMAT(updated_at, '%d-%m-%Y') as date")
        )
            ->whereStatus(2)
            ->orderBy('date')
            ->groupBy(DB::raw("DATE_FORMAT(updated_at, '%d-%m-%Y')"))
            ->get();
        $label = [];
        $dataset = [];
        foreach ($data as $item) {
            $label[] = $item->date;
            $dataset[] = $item->amount;
        }

        return view('admin.home', compact('relawan', 'donasi', 'users', 'label', 'dataset'));
    }
}
