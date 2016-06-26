<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use \App\Qoute as Qoute;

class HomeController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');
    }

    public function home(){
    	$qoutes = Qoute::orderByRaw('RAND()')->where('user_id', \Auth::user()->id)->where('active', 1)->take(4)->get();;

    	return view('welcome')->with(['qoutes' => $qoutes]);

    }
}
