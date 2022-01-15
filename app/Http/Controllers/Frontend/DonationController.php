<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function Donation()
    {
        return view('frontend.layouts.donation');
    }
}
