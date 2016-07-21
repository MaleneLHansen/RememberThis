<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use \App\Qoute as Qoute;
use \App\Project as Project; 

class HomeController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');
    }

    public function home(){
    	$qoutes = Qoute::orderByRaw('RAND()')->where('user_id', \Auth::user()->id)->where('active', 1)->take(4)->get();
    	$finishedproject = Project::count();
    	$unfinishedproject = Project::count(); 


    	return view('welcome')->with(['qoutes' => $qoutes, 'finishedCount' => $finishedproject, 'unfinishedCount' => $unfinishedproject]);

    }
}
