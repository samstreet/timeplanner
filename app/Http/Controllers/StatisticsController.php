<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    function __construct()
    {
    }

    public function index(){
        return view('todo');
    }
}
