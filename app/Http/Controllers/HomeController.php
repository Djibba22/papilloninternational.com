<?php

namespace PapillonInternational\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use  PapillonInternational\Tours;
use  PapillonInternational\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;




class HomeController extends Controller
{
    /**
     * HomeController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request ,Tours $tour)
    {
        //Pass an array with the user roles you want to grant access
        $request->user()->authorizeRoles(['Traveler', 'Group Leader','admin','user']);
        //Get all the tours for this user
        $user = $request->user();
        $tours = $tour->where("user_id", "=", $user->id)->get();

        return view('home',compact('tours'));
    }
}

//Example use of a function with roles
/*
public function someAdminStuff(Request $request)
{
  $request->user()->authorizeRoles('manager');
  return view(‘some.view’);
}
*/