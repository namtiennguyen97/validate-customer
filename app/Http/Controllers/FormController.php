<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function checkValidation(Request $request){
        echo 'Name:'.$request->name.'.Age.'.$request->age;
    }
}
