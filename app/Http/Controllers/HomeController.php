<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /*public function __invoke(){
        return view('home');
    }*/

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        return view('xamapa');
    }

    public function show(){
        return view('xamapan');
    }

    public function data(){
        $data['eventos']=Event::all();
        return response()->json($data['eventos']);   
    }

}
