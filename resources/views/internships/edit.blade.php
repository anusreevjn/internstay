@extends('layouts.sidebar')

@section('content')
<div class="container">
    <h2>Edit Internship</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('internships.update', $internship->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="internship_name">Internship Name</label>
            <input type="text" name="internship_name" value="{{ old('internship_name', $internship->internship_name) }}" class="form-control" required>
            @error('internship_name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="company">Company</label>
            <input type="text" name="company" value="{{ old('company', $internship->company) }}" class="form-control" required>
            @error('company')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="industry">Industry</label>
            <input type="text" name="industry" value="{{ old('industry', $internship->industry) }}" class="form-control" required>
            @error('industry')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" name="location" value="{{ old('location', $internship->location) }}" class="form-control" required>
            @error('location')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="contact_email">Contact Email</label>
            <input type="text" name="contact_email" value="{{ old('contact_email', $internship->contact_email) }}" class="form-control">
            @error('contact_email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="contact_phone">Contact Phone</label>
            <input type="text" name="contact_phone" value="{{ old('contact_phone', $internship->contact_phone) }}" class="form-control">
            @error('contact_phone')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" rows="5">{{ old('description', $internship->description) }}</textarea>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('internships.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
