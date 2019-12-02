@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="main mt-5">
            <div id="jumbo-bg" class="jumbotron">
                <h1>A network to reduce <br>food waste</h1>
                <i>NATIT connects you to delicious reduced food in <br> 
                your area, updated in real-time</i><br><br>
                <a href="{{ route('seller.register') }}" class="btn btn-success">
                    Apply as seller
                </a>
            </div>

            <div class="about-natit">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                    <div class="card-title">
                                        <h1 class="text-center">How does NATIT work?</h1>
                                    </div>
                                    <ul>
                                        <li>
                                            NATIT connects you to delicious reduced food in your area, 
                                            updated in real-time.
                                        </li>
                                        <li>
                                            Personalised notification of products on your watchlistlist.
                                        </li>
                                        <li>
                                            Browse reduced items by store or location.
                                        </li>
                                    </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <h1 class="text-center">For retailers</h1>
                                </div>
                                <ul>
                                    <li>
                                        More reduced items sold increasing revenues.
                                    </li>
                                    <li>
                                        Customer coming to your stores to purchase reductions, 
                                        buying some incidental full priced items in the process.
                                    </li>
                                    <li>
                                        Browse reduced items by store or location.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection