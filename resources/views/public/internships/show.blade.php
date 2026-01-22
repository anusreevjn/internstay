@extends('layouts.template')

@section('content')
<div class="container">
    <a href="{{ route('public.internships.index') }}" class="btn btn-link mb-3">
        ← Back to internships
    </a>

    <div class="card shadow-sm border-0">
        <div class="card-body">
            <h3 class="fw-bold">{{ $internship->internship_name }}</h3>
            <p class="text-muted">{{ $internship->company }}</p>

            <hr>

            <p><strong>Industry:</strong> {{ $internship->industry }}</p>
            <p><strong>Location:</strong> {{ $internship->location }}</p>
            <p><strong>Contact Email:</strong> {{ $internship->contact_email ?? '-' }}</p>

            <hr>

            <h6 class="fw-bold">Description</h6>
            <p style="white-space: pre-line;">
                {{ $internship->description }}
            </p>
        </div>
    </div>
</div>
@endsection
