<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Occurrence;

class OccurrenceController extends Controller
{

    public function index(){
        return Occurrence::all();
    }
    public function store(Request $request)
    {   
        $attributes = $request->validate([
            'lat' => 'required',
            'long' => 'required',
            'neighbourhood' => 'required',
            'street' => 'required',
            'postal_code' => 'required',
            'date_hour' => 'required',
            'description' => 'required',
            'type' => 'required',
            'user_id' => 'required'
        ]);

        $occurrence =  Occurrence::create($attributes);
        return response($occurrence, 200);
    }

    //redirect to map

}
