<?php

namespace App\Http\Controllers;

use App\Models\Hasab;
use Illuminate\Http\Request;

class HasabController extends Controller
{
    public function store(){
        $createdHasab = Request()->get('created_hasab','');

        Hasab::create(['content'=>$createdHasab]);
        return redirect(route('dashboard'));
    }
}
