<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\discount

class DiscountsController extends Controller
{
    public function index()
	{
	     $discounts = discount::all();

		 return view('home',compact('discounts'));
	}
}

