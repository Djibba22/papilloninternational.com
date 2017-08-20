@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in! Below are all of the tours you are scheduled to attend and/or need to make payments on.
                </div>
            </div>
        </div>
    </div>
    {{--Tours for now--}}
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Your Tours</div>

                <div class="panel-body">
                    @foreach($tours as $tour)
                        <h3>{{$tour->title}}</h3>
                        <p>Description: {{$tour->description}}</p>
                        <p>Start Date: {{$tour->start_date}}</p>
                        <p>Country: {{$tour->country}}</p>
                        <p>Tour Focus: {{$tour->tour_focus}}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
