<?php

namespace App\Http\Controllers;

use App\Models\Internship;
use Illuminate\Http\Request;

class InternshipController extends Controller
{
    public function index()
    {
        $internships = Internship::all();
        return view('internships.index', compact('internships'));
    }

    public function create()
    {
        return view('internships.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'internship_name' => 'required|string|max:255',
            'company'         => 'required|string|max:255',
            'industry'        => 'required|string|max:255',
            'location'        => 'required|string|max:255',
            'contact_email'   => [
                'nullable',
                function ($attribute, $value, $fail) {
                    if ($value !== '-' && !filter_var($value, FILTER_VALIDATE_EMAIL)) {
                        $fail('Contact email must be a valid email or "-"');
                    }
                }
            ],
        ]);

        Internship::create([
            'internship_name' => $request->internship_name,
            'company'         => $request->company,
            'industry'        => $request->industry,
            'location'        => $request->location,
            'contact_email'   => $request->contact_email ?? '-',
            'contact_phone'   => $request->contact_phone,
            'description'     => $request->description,
        ]);

        return redirect()->route('internships.index')
            ->with('success', 'Internship created successfully');
    }

    public function show(Internship $internship)
    {
        return view('internships.show', compact('internship'));
    }

    public function edit(Internship $internship)
    {
        return view('internships.edit', compact('internship'));
    }

    public function update(Request $request, Internship $internship)
    {
        $request->validate([
            'internship_name' => 'required|string|max:255',
            'company'         => 'required|string|max:255',
            'industry'        => 'required|string|max:255',
            'location'        => 'required|string|max:255',
            'contact_email'   => [
                'nullable',
                function ($attribute, $value, $fail) {
                    if ($value !== '-' && !filter_var($value, FILTER_VALIDATE_EMAIL)) {
                        $fail('Contact email must be a valid email or "-"');
                    }
                }
            ],
        ]);

        $internship->update([
            'internship_name' => $request->internship_name,
            'company'         => $request->company,
            'industry'        => $request->industry,
            'location'        => $request->location,
            'contact_email'   => $request->contact_email ?? '-',
            'contact_phone'   => $request->contact_phone,
            'description'     => $request->description,
        ]);

        return redirect()->route('internships.index')
            ->with('success', 'Internship updated successfully');
    }

    public function destroy(Internship $internship)
    {
        $internship->delete();

        return redirect()->route('internships.index')
            ->with('success', 'Internship deleted successfully');
    }
}
