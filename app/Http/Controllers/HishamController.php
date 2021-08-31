<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HishamController extends Controller
{
    //
    public function index(){
        
        return view('index');
    }

    public function show($id){
        
        return 'My id is '.$id;
    }
}
