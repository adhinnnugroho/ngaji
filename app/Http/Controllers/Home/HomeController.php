<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }

    public function list_ayat($id){
        $data = [
            'code' => $id
        ];
        return view('home.list_ayat', $data);
    }
}
