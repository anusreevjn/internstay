@extends('layouts.public')

@section('content')
<div class="hero shadow-sm">

    <h1 class="fw-bold mb-3">InternStay Compass</h1>

    <p class="lead">
        InternStay Compass is a centralized web platform designed to help students
        discover internship opportunities and nearby rental accommodations with ease.
    </p>

    <hr>

    <h5 class="fw-semibold mt-4">What can you do here?</h5>

    <ul>
        <li>🔍 Explore internship opportunities from various companies</li>
        <li>🏠 Find rental accommodations near internship locations</li>
        <li>📍 Make informed decisions using location-based information</li>
    </ul>

    <div class="mt-4">
        <a href="{{ route('public.internships.index') }}" class="btn btn-primary me-2">
            Browse Internships
        </a>
        <a href="{{ route('public.rentals.index') }}" class="btn btn-outline-secondary">
            Find Accommodation
        </a>
    </div>

</div>
@endsection
