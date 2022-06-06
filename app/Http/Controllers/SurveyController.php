<?php

namespace App\Http\Controllers;
use App\Models\Survey;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function store(Request $request)
    {
        Survey::create($request->all());
        return view("surveys");
    }
}
