<?php

namespace PapillonInternational\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Input;
use PapillonInternational\user_role;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
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

            $user->birthdate = $request->birthdate;
            $user->passport = $request->passport;
            $user->guardian = $request->guardian;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->terms_and_conditions = true;


            $user->save();


//        $request->input('passport');
//        $this->validate(request(), [
//            'name' => 'required',
//            'email'=> 'required|email'
//        ]);
//
//
//        DB::table('users')
//            ->where('id', $id)
//            ->update([
//
//            'passport' => request('passport')
//        ]);

//        $user->name = 'name';
//        $user->birthdate = ('birthdate');
//        $user->passport = ('passport');
//        $user->guardian = ('guardian');
//        $user->phone = ('phone');
//        $user->terms_and_conditions = ('terms_and_conditions');
//        $user->email = ('email');





    }

    public function destroy()
    {
        //
    }
}
