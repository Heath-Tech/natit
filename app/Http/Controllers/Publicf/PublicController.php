<?php

namespace App\Http\Controllers\Publicf;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    function index() {
        return view('public.index');
    }
}
