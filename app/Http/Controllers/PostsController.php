<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index($id)
    {

    }
    public function show($id)
    {
      return view('imiona', ['id' => $id]);
    }
}
