<?php

namespace PapillonInternational\Http\Controllers;

use Dompdf\Exception;
use Illuminate\Http\Request;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use PapillonInternational\Tours;
use PapillonInternational\User;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('payment');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=User::find($request->user_id);

        $tours = Tours::find($request->tour_id);

        $user->birthdate = $request->birthdate;
        $user->passport = $request->passport;
        $user->guardian = $request->guardian;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->terms_and_conditions = true;

        $user->save();

        $user->tours()->attach($tours, ['balance' => ($tours->price - $request->deposit)]);

        $tours = $user->tours;

//        dd($request->all());
        try {
            $charge = Stripe::charges()->create([
               'amount' => $request->deposit,
               'currency' => 'USD',
                'source' => $request->stripeToken,
                'description' => 'Deposit',
                'receipt_email' => $request->email,

            ]);
            return view('home', compact('tours'));


//            return back()->with('success_message', 'Thank you! Your payment is awesome!');
        } catch (Exception $e) {

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
