<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DonatorController extends Controller
{
    public function index()
    {
        $donators = User::all();
        return view('admin.donator.index', compact('donators'));
    }
}
