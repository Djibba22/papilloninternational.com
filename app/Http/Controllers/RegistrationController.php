<?php

namespace PapillonInternational\Http\Controllers;

use Illuminate\Http\Request;
use PapillonInternational\Tours;
use PapillonInternational\User;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store()
    {
        //
    }

    public function show()
    {
        //
    }

    public function edit()
    {
        //
    }

    public function update(Request $request, $id)
    {

        $user = User::find($id);

        $tours = Tours::where('title', $request->tour)->first();

        $user->birthdate = $request->birthdate;
        $user->passport = $request->passport;
        $user->guardian = $request->guardian;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->terms_and_conditions = true;

        $user->save();

        $user->tours()->attach($tours, ['balance' => $tours->price]);

        $tours = $user->tours;


        return view('home', compact('tours'));

    }

    public function destroy()
    {
        //
    }
}
