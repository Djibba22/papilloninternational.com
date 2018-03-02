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
                          <h3>Tour Cost: ${{$tour->price}}</h3>
                        <p style="color: #0f9d58">Paid: ${{ ($tour->price) - ($tour->pivot->balance) }}</p>
                        <p style="color: #8b1014">Total Balance: ${{$tour->pivot->balance}}</p>
                        {{--<a href="{{ route('payment.index') }}" class="btn btn-right btn-success">Make Payment</a>--}}
                        <form >
                            <script src="https://checkout.stripe.com/checkout.js"></script>
                            {{--@if ($tour->price===$tour->pivot->balance)--}}
                            {{--<input type="number" class="form-control" name="amount" id="custom-payment-amount" placeholder="150.00"  min="150" step="5.00" />--}}
                            {{--@else--}}
                            {{--<input type="number" class="form-control" name="amount" id="custom-payment-amount" placeholder="{{ $tour->pivot->balance }}" min="100" step="5.00" />--}}
                            {{--@endif--}}
                            <button id="customButton">Make a Payment</button>
                                {{--<script--}}
                                    {{--src="https://checkout.stripe.com/checkout.js" class="stripe-button"--}}
                                    {{--data-key="pk_test_5n2qp9RPlpHXpBThK6cTRD48"--}}
                                    {{--data-name="Papillon International"--}}
                                    {{--data-description="Online course about integrating Stripe"--}}
                                    {{--data-image="https://stripe.com/img/documentation/checkout/marketplace.png"--}}
                                    {{--data-locale="auto"--}}
                                    {{--data-currency="usd"--}}
                                    {{--data-zip-code="true">--}}
                                {{--</script>--}}
                        </form>
                        <script>
                            var handler = StripeCheckout.configure({
                                key: 'pk_test_5n2qp9RPlpHXpBThK6cTRD48',
                                image: 'images/blue_plane.svg',
                                locale: 'auto',
                                token: function(token) {
                                    // You can access the token ID with `token.id`.
                                    // Get the token ID to your server-side code for use.
                                }
                            });

                            document.getElementById('customButton').addEventListener('click', function(e) {
                                var amountBalance = ({{ $tour->price }}*100);
                                // Open Checkout with further options:
                                handler.open({
                                    name: 'Papillon International',
                                    description: '{{ $tour->title }}',
                                    amount: amountBalance
                                });
                                e.preventDefault();
                            });

                            // Close Checkout on page navigation:
                            window.addEventListener('popstate', function() {
                                handler.close();
                            });
                        </script>
                        <hr />
                    @endforeach
                        <div class="text-center">
                             <h4>Select and sign up for a tour today!!</h4><a type="button" class="btn btn-info" style="margin:auto" href="/#education">Browse Tours</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
    {{--  <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Your Payments & Balance</div>

                <div class="panel-body">
                    @foreach($tours as $tour)  --}}
                        {{--<h2> {{$tour->user_id}}{{$tour->user->name}}{{$tour->user->id}}</h2>--}}
                        {{--  <h3>Tour Cost: {{$tour->pivot->balance}}</h3>
                        <p style="color: #0f9d58">Paid: $1,100</p>
                        <p style="color: #8b1014">Total Balance: $2,100</p>
                        <button class="btn btn-success">Make Payment</button>  --}}
                    {{--  @endforeach
                </div>
            </div>
        </div>
    </div>
</div>  --}}
@endsection
