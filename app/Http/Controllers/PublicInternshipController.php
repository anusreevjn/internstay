<?php

namespace App\Http\Controllers;

use App\Models\Internship;
use Illuminate\Http\Request;

class PublicInternshipController extends Controller
{
    public function index(Request $request)
    {
        $query = Internship::query();

        if ($request->filled('search')) {
            $query->where('internship_name', 'like', '%' . $request->search . '%')
                  ->orWhere('company', 'like', '%' . $request->search . '%')
                  ->orWhere('industry', 'like', '%' . $request->search . '%')
                  ->orWhere('location', 'like', '%' . $request->search . '%');
        }

        $internships = $query->latest()->get();

        return view('public.internships.index', compact('internships'));
    }

    public function show(Internship $internship)
    {
        return view('public.internships.show', compact('internship'));
    }
}

