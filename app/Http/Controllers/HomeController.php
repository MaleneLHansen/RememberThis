<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use \App\Qoute as Qoute;
use \App\Status; 
use \App\Project as Project; 

class HomeController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');
    }

    public function home(){
    	$qoutes = Qoute::orderByRaw('RAND()')->where('user_id', \Auth::user()->id)->where('active', 1)->take(4)->get();
        $statusfinished = Status::where('name', 'Finished')->first();
        $statusunfinished = Status::where('name', '!=', 'Finished')->get();

        $array = array(); 

        foreach($statusunfinished as $status){
            $array[] = $status->id; 
        }
    	$finishedproject = Project::where('status_id', $status->id)->count();
    	$unfinishedproject = Project::whereIn('status_id', $array)->count(); 


    	return view('welcome')->with(['qoutes' => $qoutes, 'finishedCount' => $finishedproject, 'unfinishedCount' => $unfinishedproject]);

    }
}
