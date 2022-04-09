<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;



class PruebaController extends BaseController{
    public function index(){
        //return "bienvenido a mi mundo";
        return view('index');
    }
}
