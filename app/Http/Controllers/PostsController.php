<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    // public function index($id)
    // {
    //
    // }
    //
    // public function show($id)
    // {
    //   return view('imiona', ['id' => $id]);
    // }
    //
    // public function showView()
    // {
    //   return view('contact');
    // }

    public function showPost($id)
    {
      return view('post', compact('id'));
      // return view('post')->with('id',$id);
    }
}
