<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(){

        return "สวัสดีจากหน้า User index";
    }

    public function show($id1){

        return "เธอคือ id $id1";
    }

    public function update($id2){

        return "กำลัง update $id2";
    }
}
