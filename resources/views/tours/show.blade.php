@extends('layouts.app')


@section('content')

    <div class="container">
        <header id="{{ $tour->country }}">
            <h1>{{ $tour->title }}</h1>
            <h4>{{ Carbon\Carbon::parse($tour->start_date)->toFormattedDateString() }}</h4>
             <a class="btn btn-primary  btn-flat pull-right" href="/tours/{{ $tour->id }}/register" >Register</a>
            <h4>{{ $tour->preferred_length }}</h4>

        </header>

        <section id="overview">
            <div class="description col-md-8">

                    {{ $tour->itinerary }}
            </div>

        </section>

    </div>

@endsection



