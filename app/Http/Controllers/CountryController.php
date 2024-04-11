<?php

namespace App\Http\Controllers;

use App\Country;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::with(['cities'=>function($query){
            $query->orderBy('population', 'asc');
        }])->get();
        return view('countries.index',compact('countries'));
    }
}
