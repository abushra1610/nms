<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\ABook;
use Illuminate\Http\Request;

class ABookController extends Controller
{
    public function ABook()
    {
        return view('frontend.layouts.abook');
    }
}
