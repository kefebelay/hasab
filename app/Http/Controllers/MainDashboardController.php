<?php

namespace App\Http\Controllers;

use App\Models\Hasab;
use Illuminate\Http\Request;

class MainDashboardController extends Controller
{
    function index(){
        //  $hasab = new Hasab(
        //      [
        //          'content'=>'This is the latest post'
        //      ]
        //      );
        //      $hasab->save();


        return view('main_dashboard',[
            'hasabs'=>Hasab::orderByDesc('created_at')->get()
        ]);
    }
}
