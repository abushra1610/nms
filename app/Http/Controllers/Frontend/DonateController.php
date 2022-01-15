<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Donate;
use Illuminate\Http\Request;

class DonateController extends Controller
{
    public function Donate()
   {
       return view('frontend.layouts.donate');
   }

   public function store(Request $request)
   {
    //    dd($request->all());
           Donate::create([
          'name'=>$request->name,
          'division'=>$request->division,
          'district'=>$request->district,
          'city'=>$request->city,
          'state'=>$request->state,
          'pin_code'=>$request->pin_code,

          'nationality'=>$request->nationality,

          'email'=>$request->email,

          'phone'=>$request->phone,

          'donation'=>$request->donation,

          'nid'=>$request->nid,

          'credit_card'=>$request->credit_card,

          'card_number'=>$request->card_number,

                    'date'=>$request->date,



      ]);
      return redirect()->back();
    }


}
