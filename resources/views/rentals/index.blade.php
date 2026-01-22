@extends('layouts.sidebar')

@section('content')
<div class="container">
    <h2>Rental Accommodation</h2>

    <a href="{{ route('rentals.create') }}" class="btn btn-primary mb-3">
        Add Rental Property
    </a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Property Name</th>
            <th>Type</th>
            <th>Address</th>
            <th>Rent Amount</th>
            <th>Status</th>
            <th>Action</th>
        </tr>

        @foreach($rentals as $rental)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $rental->property_name }}</td>
            <td>{{ $rental->property_type }}</td>
            <td>{{ $rental->address }}</td>
            <td>{{ $rental->currency }} {{ number_format($rental->rent_amount, 2) }}</td>
            <td>
                @if($rental->is_available)
                    <span class="badge bg-success">Available</span>
                @else
                    <span class="badge bg-danger">Occupied</span>
                @endif
            </td>
            <td>
                <a class="btn btn-info btn-sm" href="{{ route('rentals.show',$rental->id) }}">Show</a>
                <a class="btn btn-warning btn-sm" href="{{ route('rentals.edit',$rental->id) }}">Edit</a>

                <form action="{{ route('rentals.destroy',$rental->id) }}" method="POST" style="display:inline">
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