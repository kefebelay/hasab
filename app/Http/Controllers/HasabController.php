<?php

namespace App\Http\Controllers;

use App\Models\Hasab;
use Illuminate\Http\Request;

class HasabController extends Controller
{
    public function store(){

        Request()->validate([
            'hasab_form'=>'required|max:255',
        ]);

        $createdHasab = Request()->get('hasab_form','');

        Hasab::create(['content'=>$createdHasab]);
        return redirect()->route('dashboard')->with('success','Hasab created successfully');
    }
    public function destroy($id){
        Hasab::where('id',$id)->firstOrFail()->delete();
        return redirect()->route('dashboard')->with('success','Hasab deleted successfully');

    }
}
