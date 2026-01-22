<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use Illuminate\Http\Request;

class PublicRentalController extends Controller
{
    // Show all available rentals (user view)
    public function index()
    {
        $rentals = Rental::where('is_available', 1)->get();

        return view('public.rentals.index', compact('rentals'));
    }

    // Show single rental details
    public function show(Rental $rental)
    {
        return view('public.rentals.show', compact('rental'));
    }
}
