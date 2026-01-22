<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rentals = Rental::all();
        return view('rentals.index', compact('rentals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rentals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'property_name' => 'required',
            'property_type' => 'required',
            'address' => 'required',
            'rent_amount' => 'required|numeric|min:0',
        ]);

        Rental::create($request->all());

        return redirect()->route('rentals.index')
            ->with('success', 'Rental property created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rental $rental)
    {
        return view('rentals.show', compact('rental'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rental $rental)
    {
        return view('rentals.edit', compact('rental'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rental $rental)
    {
        $request->validate([
            'property_name' => 'required',
            'property_type' => 'required',
            'address' => 'required',
            'rent_amount' => 'required|numeric|min:0',
        ]);

        $rental->update($request->all());

        return redirect()->route('rentals.index')
            ->with('success', 'Rental property updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rental $rental)
    {
        $rental->delete();

        return redirect()->route('rentals.index')
            ->with('success', 'Rental property deleted successfully');
    }
}
