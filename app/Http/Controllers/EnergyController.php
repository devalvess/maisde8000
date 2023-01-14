<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnergyController extends Controller
{
    public function dbz($id, Request $request)
    {
        $energy = $id;

        if($energy > "8000") 
        { $energy = "Mais de 8000!";}
        else 
        {$energy = "Inseto!";}

        return view('/dbz', compact('energy'));
            
    } 

}    
