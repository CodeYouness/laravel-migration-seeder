<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    //

    public function index(){
        $trains= [];
        return view('pages.trains');
    }
}