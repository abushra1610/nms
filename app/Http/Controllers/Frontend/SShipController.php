<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SShipController extends Controller
{
    public function sship()
    {
      return view('frontend.layouts.sship');
    }
}
