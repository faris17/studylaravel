<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    public function index(){
        $data = Province::with(['regency' => function($query){
            $query->with(['district' => function($query){
                $query->with('village');
            }]);
        }])->where('id', 11)->get();

        return view('indexProvince', [
            'data'=> $data
        ]);
    }
}
