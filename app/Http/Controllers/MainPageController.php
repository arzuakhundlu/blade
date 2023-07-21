<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function getMainData(){
        $users = [
            "Ehmed",
            "Memmed",
            "Veli",
            "Eli",

        ];
        $categories = [
            [
                "name" => 'a',
                "count" => 12
            ],
            [
                "name" => 'b',
                "count" => 23
            ],
            [
                "name" => 'c',
                "count" => 34
            ],
        ];
        return view('welcome',['users'=>$users,'categories'=>$categories]);
    }
}
