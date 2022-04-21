<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class datacontroller extends Controller
{
    function showform() {
        print_r("get method");
        return view('personal');
    }

    function signup(Request $req) {
        print_r("post method");
        
        //print_r($req->input());
        // print_r($req->input('moum')); 
        // print_r($req->input('msalary'));
        // print_r($req->input('nom'));
        // print_r($req->input('bonus'));

        print_r($req->moum);

        $req->flash();
        print_r($req->old('moum'));

        if ($req->has('moum')==1){

            print_r("unmarried");
        }
        elseif ($req->has('moum')==2){
            print_r("married");
        }

        return view('personal');
    }
}
