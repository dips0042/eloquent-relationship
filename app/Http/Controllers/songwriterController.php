<?php

namespace App\Http\Controllers;

use App\Models\Songwriter;
use Illuminate\Http\Request;

class songwriterController extends Controller
{
    public function index() {
        $songwriters = songwriter::latest()->get(); //get all songwriters from model
        return view('homepage', compact('songwriters')); //passing songwriters to view
    }
}
