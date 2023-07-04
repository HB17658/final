<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DbController extends Controller
{

    public function login(Request $r){

        $data = [];

        return view('/',$data);
    }
    public function results(Request $r)
    {



        $data = [

        ];


        return view('results',$data);
    }

    public function createUser(Request $r)
    {

    }
}
