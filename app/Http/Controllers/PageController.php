<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  // mostrare le pagine statiche

  // mostrate l'home page
  public function index()
  {
      return view('guests.index');
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
