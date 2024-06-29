<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index(){
        $users = [
            [
                'name' => 'Ahmed',
                'age'=> 20
            ],
            [
                'name' => 'Mohamed',
                'age'=> 21
            ]
            ];

        return view('dashboard',
    [
        'usersList' => $users
    ]);
    }
}
