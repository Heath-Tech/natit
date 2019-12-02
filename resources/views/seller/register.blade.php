@extends('layouts.app')

@section('content')
    <div class="container seller-register mt-5">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h1>
                        Seller <br>
                        Application    
                    </h1>    
                </div>

                <form action="{{ route('seller.store') }}" method="POST">
                    @csrf
                    {{-- @method('GET') --}}

                    <div class="form-group">
                        <label for="name">Company Trading Name</label>
                        <input type="text" class="form-control" name="trading_name" id="name" placeholder="Company Name"/>
                    </div>
                    <div class="form-group">
                        <label for="email">Company Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Company Email"/>
                    </div>
                    
                    <div class="form-group">
                        <label for="ck-number">CK Number</label>
                        <input type="text" class="form-control" name="ck_number" id="ck-number" placeholder="Company Registration Number"/>
                    </div>
    
                    <div class="form-group">
                        <label for="ck_number">Company Address</label>
                        <input type="text" class="form-control" name="street-name" id="street-name" placeholder="Street Name"/>
                        <input type="text" class="form-control mt-2" name="surbub" id="surbub" placeholder="Surbub/Town"/>
                    </div>
    
                    <div class="form-group">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term mr-2" />
                        <label for="agree-term">I agree all statements in  
                        <a href="#" class="term-service">Terms of service</a>
                        </label>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" class="btn btn-success" name="signup" id="signup" value="Register"/>
                    </div>
                </form>

                <div class="login-link pb-3">
                    <div class="d-flex justify-content-center text-center">
                        <a href="#" class="l-link">Already have account?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <section class="main mt-5">
        <div class="container">
            <form method="POST" autocomplete="off" class="main-form mx-auto" id="register-form">
                <h1 class="mb-4">SELLER<br /> APPLICATION</h1>

                <div class="form-group">
                    <label for="name">Company Trading Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Company Name"/>
                </div>
                <div class="form-group">
                    <label for="email">Company Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Company Email"/>
                </div>
                
                <div class="form-group">
                    <label for="ck-number">CK Number</label>
                    <input type="text" class="form-control" name="ck-number" id="ck-number" placeholder="Company Registration Number"/>
                </div>

                <div class="form-group">
                    <label for="ck_number">Company Address</label>
                    <input type="text" class="form-control" name="street-name" id="street-name" placeholder="Street Name"/>
                    <input type="text" class="form-control mt-2" name="surbub" id="surbub" placeholder="Surbub/Town"/>
                </div>

                <div class="form-group">
                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term mr-2" />
                    <label for="agree-term">I agree all statements in  
                    <a href="#" class="term-service">Terms of service</a>
                    </label>
                </div>
                <div class="form-group form-button">
                    <input type="submit" class="btn btn-success" name="signup" id="signup" value="Register"/>
                </div>
            </form>

            <div class="login-link pb-3">
                <div class="d-flex justify-content-center text-center">
                    <a href="#" class="l-link">Already have account?</a>
                </div>
            </div>
        </div>
    </section> --}}
@endsection