<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Z;

class ZZcontorller extends Controller
{
    public function index()
    {   
        //find 找主鍵資料
        $z=Z::all();
        //dd($z);
        return view('z.i',['z'=>$z]);
    }
    public function update(Request $request)
    {   
        //$z=new \App\Z();
        /*$z=new Z();
        $z->idd=$request->idd;
        $z->nam=$request->nam;
        $z->save();*/

        /*$z=new Z([
            'idd'=>$request->idd,
            'nam'=>$request->nam
        ]);
        $z->save();*/

        /*$z=Z::create([
            'idd'=>$request->idd,
            'nam'=>$request->nam
        ]);*/

        $z=Z::create($request->all());
        return redirect('z');
    }
}
