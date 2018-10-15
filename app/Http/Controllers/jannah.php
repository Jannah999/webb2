<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jannah extends Controller{
	function index(){
		return view('index');
	}
	function tambah(){
		echo 'controller jannah fx tambah';
	}
	function halamandua(){
		return view('halamandua');
	}
	function halamantiga(){
		return view('halamantiga');
	}
	function mahasiswa(){
		return view('mahasiswa');
	}
}
