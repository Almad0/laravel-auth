<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
  // mostrare le pagine statiche

  // mostrate l'home page
  public function index()
  {
    $posts = Post::all();
    return view('guests.index',  compact('posts'));
  }

  // about
  public function about()
  {
      return view('guests.about');
  }

  public function contacts()
  {
      return view('guests.contacts');
  }


}
