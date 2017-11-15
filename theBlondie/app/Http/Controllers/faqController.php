<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class faqController extends Controller
{
    public function show(){
        return view('faq');
    }
}
