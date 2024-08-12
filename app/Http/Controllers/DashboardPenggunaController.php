<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardPenggunaController extends Controller
{
    //
    public function indexPengguna()
    {
        return view('dashboard.pengguna.pengguna');
    }
}
