<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {$categories=DB::table('main_categories')
                        ->select('main_categories.id','main_categories.maincategory','icons.icons')
                        ->join('icons','icons.id','=','main_categories.id')
                        ->get();
                        
                        return view('users.user',['categories'=>$categories]);
    }
}
