<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnergyController extends Controller
{
    public function dbz($id, Request $request)
    {
        $energy = $id;

        return view('/dbz', compact('energy'));
            
    } 

}    
