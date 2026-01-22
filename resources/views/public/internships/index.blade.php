@extends('layouts.template')

@section('content')
<div class="container">
    <h2 class="mb-4 fw-bold">Available Internships</h2>

    <div class="row">
        <form method="GET" action="{{ route('public.internships.index') }}" class="mb-4">
            <div class="input-group">
                <input
                    type="text"
                    name="search"
                    class="form-control"
                    placeholder="Search internships..."
                    value="{{ request('search') }}"
                >
                <button class="btn btn-primary">Search</button>
            </div>
        </form>

        @if($internships->isEmpty())
            <div class="col-12">
                <div class="alert alert-light text-center">
                    No internships found.
                </div>
            </div>
        @endif

        @foreach($internships as $internship)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="fw-bold">{{ $internship->internship_name }}</h5>
                        <p class="text-muted mb-1">{{ $internship->company }}</p>
                        <p class="mb-3">{{ $internship->location }}</p>

                        <a href="{{ route('public.internships.show', $internship->id) }}"
                           class="btn btn-sm btn-primary mt-auto">
                            View Details
                        </a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
@endsection

