<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class YagisController extends Controller
{
	public function bark() {
		
		
		//$data2 = DB::connection('mysql')->select('select * from nekos where id=2');
		$data2 = DB::select('select * from nekos where id=2');
		
		var_dump($data2);//■■■□□□■■■□□□■■■□□□)
		
		$data = ['neko'=>'猫', 'yagi'=>'山羊'];
		
		return view('yagis.bark', compact('data'));
	}
}
