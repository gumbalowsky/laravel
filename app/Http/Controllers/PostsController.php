<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {

    }
    public function podajimie($imie)
    {
      $data['imie'] = $imie;
      return View::make('imiona', $data);
    }
}
