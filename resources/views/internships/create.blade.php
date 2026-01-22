@extends('layouts.sidebar')

@section('content')
<div class="container">
    <h2>Add Internship</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('internships.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="internship_name">Internship Name</label>
            <input type="text" name="internship_name" value="{{ old('internship_name') }}" placeholder="Internship Name" class="form-control" required>
            @error('internship_name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="company">Company</label>
            <input type="text" name="company" value="{{ old('company') }}" placeholder="Company" class="form-control" required>
            @error('company')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="industry">Industry</label>
            <input type="text" name="industry" value="{{ old('industry') }}" placeholder="Industry" class="form-control" required>
            @error('industry')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" name="location" value="{{ old('location') }}" placeholder="Location" class="form-control" required>
            @error('location')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="contact_email">Contact Email</label>
            <input type="text" name="contact_email" value="{{ old('contact_email') }}" placeholder="Email" class="form-control" placeholder="example@email.com or -">
            @error('contact_email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="contact_phone">Contact Phone</label>
            <input type="text" name="contact_phone" value="{{ old('contact_phone') }}" placeholder="Phone" class="form-control">
            @error('contact_phone')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" placeholder="Description" class="form-control" rows="5">{{ old('description') }}</textarea>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('internships.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
