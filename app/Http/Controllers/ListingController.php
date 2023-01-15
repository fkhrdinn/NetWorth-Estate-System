<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index()
    {
        return view('listing.listing');
    }

    public function lists()
    {
        return view("listing.list");
    }
}
