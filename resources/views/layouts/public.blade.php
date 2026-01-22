<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>InternStay Compass</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #edddec;
        }

        .navbar {
            background-color: #1f0822;
        }

        .navbar-brand,
        .nav-link {
            color: #ffffff !important;
            font-weight: 500;
        }

        .nav-link:hover {
            text-decoration: underline;
        }

        .hero {
            background-color: #ffffff;
            border-radius: 12px;
            padding: 40px;
        }
    </style>
</head>
<body>

{{-- TOP NAVBAR --}}
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('public.dashboard') }}">
            InternStay Compass
        </a>

        <div class="collapse navbar-collapse">
    
    {{-- LEFT MENU --}}
    <ul class="navbar-nav me-auto">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('public.dashboard') }}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('public.internships.index') }}">Internships</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('public.rentals.index') }}">Rental Accommodation</a>
        </li>
    </ul>

    {{-- SEARCH BAR --}}
    <form method="GET" action="{{ route('public.internships.index') }}" class="d-flex w-50">
    <input
        class="form-control me-2"
        type="search"
        name="search"
        placeholder="Search internship..."
        value="{{ request('search') }}"
    >
    <button class="btn btn-primary">Search</button>
</form>


</div>

    </div>
</nav>

{{-- PAGE CONTENT --}}
<div class="container mt-5">
    @yield('content')
</div>

</body>
</html>
