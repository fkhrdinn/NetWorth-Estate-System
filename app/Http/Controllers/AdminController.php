<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function train()
    {
        return view('admin.train');
    }

    public function request()
    {
        return view('admin.request');
    }

    public function index()
    {
        $user = User::query()->where('role', 0)->count();
        $pending = Listing::query()->where('status', 'Processed')->count();
        $accepted = Listing::query()->where('status', 'Accepted')->count();
        $bungalow = Listing::query()->where('house_type', 'Bungalow')->avg('price');
        $studio = Listing::query()->where('house_type', 'Studio')->avg('price');
        $terrace = Listing::query()->where('house_type', 'Terrace')->avg('price');
        $semi = Listing::query()->where('house_type', 'Semi-D')->avg('price'); 
        $townhouse = Listing::query()->where('house_type', 'Townhouse')->avg('price');
        $penthouse = Listing::query()->where('house_type', 'Penthouse')->avg('price');
        $condo = Listing::query()->where('house_type', 'Condominium')->avg('price');
        $apartment = Listing::query()->where('house_type', 'Apartment')->avg('price');

        return view('admin.index', compact([
            'user',
            'pending',
            'accepted',
            'bungalow',
            'studio',
            'terrace',
            'semi',
            'townhouse',
            'penthouse',
            'condo',
            'apartment'
        ]));
    }
}
