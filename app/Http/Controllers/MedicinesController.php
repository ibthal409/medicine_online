<?php

namespace App\Http\Controllers;

use App\Models\medicine;
use Illuminate\Http\Request;

class MedicinesController extends Controller
{

    public function search(Request $request)
    {
        $request->validate([
            'q' => 'required'
        ]);
        $q = $request->q;
        $filteredMedicines = medicine::where('medicine_name', 'like', '%' . $q . '%')->get();

        if ($filteredMedicines->count()) {
            return view('search')->with([
                'medicine_name' =>  $filteredMedicines
            ]);
        } else {
            return redirect('/search')->with([
                'status' => 'search failed , please try again'
            ]);
        }
    }
}
