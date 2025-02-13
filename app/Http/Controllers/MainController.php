<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MainController extends Controller
{
    public function top(){
        
        return view("top");
    }

    public function top_post(Request $request){

        $data = [
            'code' => $request->input('code'),
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];

        DB::table('materials')->insert($data);
        return view("top");
    }
}
