@extends('layouts.app')

@section('content')
<div class="container">

    {{-- Page Title --}}
    <div class="mb-4">
        <h2 class="fw-bold">Dashboard</h2>
        <p class="text-muted">
            InternStay Compass – Internship & Rental Accommodation Discovery System
        </p>
    </div>

    {{-- Summary Cards --}}
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h6 class="text-muted">Total Internships</h6>
                    <h3 class="fw-bold">{{ $internships->count() }}</h3>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h6 class="text-muted">Available Rentals</h6>
                    <h3 class="fw-bold">{{ $rentals->where('is_available', true)->count() }}</h3>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h6 class="text-muted">Total Properties</h6>
                    <h3 class="fw-bold">{{ $rentals->count() }}</h3>
                </div>
            </div>
        </div>
    </div>

    {{-- Quick Actions --}}
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-body">
            <h5 class="fw-bold mb-3">Quick Actions</h5>

            <a href="{{ route('internships.index') }}" class="btn btn-primary me-2">
                View Internships
            </a>

            <a href="{{ route('internships.create') }}" class="btn btn-outline-primary me-2">
                Add Internship
            </a>

            <a href="{{ route('rentals.index') }}" class="btn btn-success me-2">
                View Rentals
            </a>

            <a href="{{ route('rentals.create') }}" class="btn btn-outline-success">
                Add Rental
            </a>
        </div>
    </div>

    {{-- Recent Internships --}}
    <div class="card shadow-sm border-0">
        <div class="card-body">
            <h5 class="fw-bold mb-3">Recent Internships</h5>

            <ul class="list-unstyled mb-0">
                @forelse ($recentInternships as $internship)
                    <li class="mb-2">
                        • <strong>{{ $internship->internship_name }}</strong>
                        <br>
                        <small class="text-muted">
                            {{ $internship->company }} — {{ $internship->location }}
                        </small>
                    </li>
                @empty
                    <li class="text-muted">No internships added yet.</li>
                @endforelse
            </ul>

        </div>
    </div>

</div>
@endsection
