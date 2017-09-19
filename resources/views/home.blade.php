@extends('layouts.app')

@section('content')
<div class="container">

    {{--Tours for now--}}
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Your Tours</div>

                <div class="panel-body">
                    @foreach($tours as $tour)
                        {{--<h2> {{$tour->user_id}}{{$tour->user->name}}{{$tour->user->id}}</h2>--}}
                        <h2>{{$tour->title}}</h2>
                        <p>Description: {{$tour->description}}</p>
                        <p>Start Date: {{$tour->start_date}}</p>
                        <p>Country: {{$tour->country}}</p>
                        <p>Tour Focus: {{$tour->tour_focus}}</p>
                        <hr />
                    @endforeach
                        <div class="text-center">
                             <h4>Select and sign up for a tour today!!</h4><button class="btn btn-info" style="margin:auto">Browse Tours</button>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Your Payments & Balance</div>

                <div class="panel-body">
                    @foreach($tours as $tour)
                        {{--<h2> {{$tour->user_id}}{{$tour->user->name}}{{$tour->user->id}}</h2>--}}
                        <h3>Tour Cost: $3,200</h3>
                        <p style="color: #0f9d58">Paid: $1,100</p>
                        <p style="color: #8b1014">Total Balance: $2,100</p>
                        <button class="btn btn-success">Make Payment</button>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
