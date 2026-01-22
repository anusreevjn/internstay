@extends('layouts.template')

@section('content')
<div class="container">

    {{-- Page title --}}
    <div class="mb-4">
        <h3 class="fw-bold">Rental Accommodation</h3>
        <p class="text-muted">Find nearby accommodation suitable for interns</p>
    </div>

    <form method="GET" action="{{ route('public.rentals.index') }}" class="mb-4">
            <div class="input-group">
                <input
                    type="text"
                    name="search"
                    class="form-control"
                    placeholder="Search rentals..."
                    value="{{ request('search') }}"
                >
                <button class="btn btn-primary">Search</button>
            </div>
        </form>

    {{-- Rental list --}}
    <div class="row">

        @forelse ($rentals as $rental)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">

                    <div class="card-body d-flex flex-column">

                        {{-- Property name --}}
                        <h5 class="fw-bold mb-1">
                            {{ $rental->property_name }}
                        </h5>

                        {{-- Type & location --}}
                        <p class="text-muted small mb-2">
                            {{ $rental->property_type }} • {{ $rental->address }}
                        </p>

                        {{-- Price --}}
                        <p class="fw-semibold mb-2">
                            RM {{ number_format($rental->rent_amount, 2) }} / month
                        </p>

                        {{-- Quick info --}}
                        <p class="small text-muted mb-3">
                            🛏 {{ $rental->bedrooms ?? '-' }} beds • 
                            🚿 {{ $rental->bathrooms ?? '-' }} baths
                        </p>

                        {{-- View button --}}
                        <a href="{{ route('public.rentals.show', $rental->id) }}"
                           class="btn btn-primary mt-auto">
                            View Details
                        </a>

                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-secondary">
                    No rental accommodation available at the moment.
                </div>
            </div>
        @endforelse

    </div>

</div>
@endsection

