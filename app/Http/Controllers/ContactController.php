<?php

namespace App\Http\Controllers;
use App\Prospect;
use App\Candidate;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }
}
