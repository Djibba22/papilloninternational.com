<?php

namespace PapillonInternational\Http\Controllers;

use PapillonInternational\Tours;
use Illuminate\Http\Request;

class ToursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //ToDo get some code in here to create tours

        $tours = Tours::get();
        $itinerary = Tours::selectRaw('itinerary')->get();

        return view('tours.itinerary', compact('itinerary'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \PapillonInternational\Tours  $tours
     * @return \Illuminate\Http\Response
     */
    public function show(Tours $tours)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \PapillonInternational\Tours  $tours
     * @return \Illuminate\Http\Response
     */
    public function edit(Tours $tours)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \PapillonInternational\Tours  $tours
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tours $tours)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \PapillonInternational\Tours  $tours
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tours $tours)
    {
        //
    }
}
