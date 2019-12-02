<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    function index() {
        $data = [
            'shop' => Seller::orderBy('created_at','DESC')->get(),
        ];
        // dd($data);
        // json_decode($data);
        return view('seller.index')->with($data);
    }

    function register() {
        return view('seller.register');
    }

    function store(Request $request) {
        $register = new Seller();

        $register->trading_name = $request->input('trading_name');
        $register->email = $request->input('email');
        $register->ck_number = $request->input('ck_number');
        $register->address = [
            'street_name' => $request->input('street_name'),
            'suburb' => $request->input('suburb'),
            'zipCode' => 'ZA',
        ];

        $register->save();

        return redirect()->route('seller.index')->with('success', 'Seller successfully added');
    }
}
