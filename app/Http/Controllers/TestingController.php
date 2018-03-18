<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testing;

class TestingController extends Controller
{
    public function api()
    {
    	return Testing::all();
    } 
}
