<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {

        $doctors = Doctor::all(); // Fetch all doctors' data from the database

        return view('components.about_us', compact('doctors'));
    }
}
