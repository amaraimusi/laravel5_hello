<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YagisController extends Controller
{
	public function bark() {
		
		$data = ['neko'=>'猫', 'yagi'=>'山羊'];
		
		return view('yagis.bark', compact('data'));
	}
}
