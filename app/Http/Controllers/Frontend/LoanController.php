<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Loan;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function Loan()
    {
        return view('frontend.layouts.loan');
    }



    public function store()
    {
        Loan::create([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'date of birth'=>$request->category,
            'image'=>$filename
        ]);
    }
}
