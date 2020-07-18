<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
 public function index(){
     return "hi";
 }

     public function greeting($name)
     {
         return "hilo $name";
     }

    public function calculate($n1,$n2,$n3){

        return "ผลรวมของเลข $n1 , $n2 และ $n3 คือ " . ($n1+$n2+$n3) . " นะจ๊ะ";
    }
}
