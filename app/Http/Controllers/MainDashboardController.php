<?php

namespace App\Http\Controllers;

use App\Models\Hasab;
use Illuminate\Http\Request;

class MainDashboardController extends Controller
{
    function index(){
        return view('main_dashboard',[
            'hasabs'=>Hasab::orderByDesc('created_at')->get()
        ]);
    }
}
