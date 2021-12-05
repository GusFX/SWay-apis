<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Occurrence;

class OccurenceController extends Controller
{

    public function store()
    {   
        $attributes = request()->validate([
            'lat' => 'required',
            'long' => 'required',
            'neighbourhood' => 'required',
            'street' => 'required',
            'postal_code' => 'required',
            'data_hour' => 'required',
            'description' => 'required',
            'type' => 'required'
        ]);

        Occurrence::create($attributes);
    }

    //redirect to map

}
