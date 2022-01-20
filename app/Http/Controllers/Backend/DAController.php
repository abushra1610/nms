<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Donate;
use Illuminate\Http\Request;

class DAController extends Controller
{
    public function amount()
    {
        $donates=Donate::all();
        return view('admin.layouts.add-amount',compact('donates'));
    }

    public function approve ($id)
    {

        // dd($id);
        Donate::find($id)->update([
            'status'=>"approve"
        ]);
        return redirect()->back();
    }
}
