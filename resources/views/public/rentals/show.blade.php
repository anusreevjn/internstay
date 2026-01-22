@extends('layouts.template')

@section('content')
<div class="container">

    {{-- Back button --}}
    <a href="{{ route('public.rentals.index') }}" class="btn btn-link mb-3">
        ← Back to Rental Accommodation
    </a>

    <div class="card shadow-sm border-0">
        <div class="card-body">

            {{-- Property title --}}
            <h3 class="fw-bold mb-1">{{ $rental->property_name }}</h3>
            <p class="text-muted mb-3">
                {{ $rental->property_type }} • {{ $rental->address }}
            </p>

            <hr>

            {{-- Basic info --}}
            <div class="row mb-3">
                <div class="col-md-4">
                    <strong>Rent:</strong><br>
                    RM {{ number_format($rental->rent_amount, 2) }}
                </div>

                <div class="col-md-4">
                    <strong>Bedrooms:</strong><br>
                    {{ $rental->bedrooms ?? '-' }}
                </div>

                <div class="col-md-4">
                    <strong>Bathrooms:</strong><br>
                    {{ $rental->bathrooms ?? '-' }}
                </div>
            </div>

            <hr>

            {{-- Description --}}
            <h6 class="fw-bold mb-2">Description</h6>
            <p style="white-space: pre-line;">
                {{ $rental->description }}
            </p>

            <hr>

            {{-- Contact info --}}
            <h6 class="fw-bold mb-2">Contact Information</h6>

            <p>
                <strong>Name:</strong>
                {{ $rental->contact_name ?? '-' }}
            </p>

            <p>
                <strong>Phone:</strong>
                {{ $rental->contact_phone ?? '-' }}
            </p>

            <p>
                <strong>Email:</strong>
                {{ $rental->contact_email ?? '-' }}
            </p>

        </div>
    </div>

</div>
@endsection
