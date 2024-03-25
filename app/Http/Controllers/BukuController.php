<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        return view('listbuku');
    }
    public function detailbuku()
    {
        return view('detail');
    }
}
