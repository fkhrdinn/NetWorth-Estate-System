<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

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

    public function create()
    {
        $model = null;

        return view('listing.create', compact([
            'model'
        ]));
    }

    public function edit(Listing $model)
    {
        return view('listing.create', compact([
            'model'
        ]));
    }
}
