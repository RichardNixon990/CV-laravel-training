<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CvController extends Controller
{
    public function about() {
        return view('about');
    }
    public function experinece() {
        return view('experinece');
    }
    public function education() {
        return view('education');
    }
    public function skills() {
        return view('skills');
    }
    public function interests() {
        return view('interests');
    }
    public function awards() {
        return view('awards');
    }
}
