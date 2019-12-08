<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index($id)
    {

    }
    // public function podajimie($imie)
    // {
    //   return view('imiona', ['imie' => $imie]);
    // }
    public function show($id)
    {
      return view('imiona', ['id' => $id]);
    }
}
