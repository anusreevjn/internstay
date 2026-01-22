@extends('layouts.sidebar')

@section('content')
<div class="container">
    <h2>Internships</h2>

    <a href="{{ route('internships.create') }}" class="btn btn-primary mb-3">
        Add Internship
    </a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Internship Name</th>
            <th>Company</th>
            <th>Industry</th>
            <th>Location</th>
            <th>Action</th>
        </tr>

        @foreach($internships as $internship)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $internship->internship_name }}</td>
            <td>{{ $internship->company }}</td>
            <td>{{ $internship->industry }}</td>
            <td>{{ $internship->location }}</td>
            <td>
                <a class="btn btn-info btn-sm" href="{{ route('internships.show',$internship->id) }}">Show</a>
                <a class="btn btn-warning btn-sm" href="{{ route('internships.edit',$internship->id) }}">Edit</a>

                <form action="{{ route('internships.destroy',$internship->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
