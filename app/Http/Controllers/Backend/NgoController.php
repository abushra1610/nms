<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Models\Work;
use App\Http\Controllers\Controller;

class NgoController extends Controller
{
    public function create()
    {
        return view('admin.layouts.add-work');
    }


   public function store(Request $request)
   {
       dd($request->all());
           Work::create([
          'name'=>$request->name,
          'list'=>$request->list
      ]);
      return redirect()->back();
    }
}
