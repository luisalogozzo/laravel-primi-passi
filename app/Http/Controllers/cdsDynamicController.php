<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cdsDynamicController extends Controller
{
  public function prova() {
    $cds = [
      ['https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg', 'Live at Wembley 86', 'Queen', '1992']
    ]
    return view('cdsDynamic');
  }
}
