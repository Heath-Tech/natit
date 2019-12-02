@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h1>Seller Dashboard</h1>
                </div>

                <div class="row">
                    @foreach ($shop as $item)
                        <div class="col-md-3">
                            <label>Trading Name</label>
                            <p><strong>{{ $item->trading_name }}</strong></p>
                            
                            <label>Company Email</label>
                            <p><strong>{{ $item->email }}</strong></p>

                            <label>Registration Number</label>
                            <p><strong>{{ $item->ck_number }}</strong></p>

                            <label>Company Address</label>
                            <p>
                                <strong>{{ json_decode($item)->address->street_name }}</strong><br>
                                <strong>{{ json_decode($item)->address->suburb }}</strong><br>
                                <strong>{{ json_decode($item)->address->zipCode }}</strong>
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection