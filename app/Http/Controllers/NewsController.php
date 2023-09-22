<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    //

    public function index()
    {
        return view('noticias.index');
    }

    public function create()
    {
        return view('noticias.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return view('noticias.show');
    }
}
