<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('web');
    }
    public function dashboard()
    {
        
         //return view('dashboard.app');
         //return Redirect::to('/')
 

    if (Auth::user()->role_id==1) {

         return view('dashboard.admin.app');

        } else if (Auth::user()->role_id==2) {

            return view('dashboard.user.user');

        } else if (Auth::user()->role_id==3) {   //user is un-verified and they want to get to verification

            
        } else if (Auth::user()->role_id==4) { 
        
            return redirect('/verification');

        } else {}

    }
}
