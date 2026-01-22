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
            min-height: 100vh;
            background-color: #edddec;
        }
        .sidebar {
            width: 220px;
            min-height: 100vh;
            background-color: #1f0822; /* purple */
        }
        .sidebar a {
            color: #fff;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: rgba(255,255,255,0.15);
        }
    </style>
</head>
<body>

<div class="d-flex">

    {{-- USER SIDEBAR --}}
    <div class="sidebar p-3">
        <h4 class="text-white mb-4">InternStay</h4>

        <ul class="nav flex-column">
            <li class="nav-item mb-2">
                <a href="{{ url('/') }}" class="nav-link text-white">
                    Dashboard
                </a>
            </li>

            <li class="nav-item mb-2">
                <a href="{{ route('public.internships.index') }}" class="nav-link text-white">
                    Internships
                </a>
            </li>

            <li class="nav-item mb-2">
                <a href="{{ route('public.rentals.index') }}" class="nav-link text-white">
                    Rental Accommodations
                </a>
            </li>

            <li class="nav-item mb-2">
                <a href="#" class="nav-link text-white">
                    Favourites
                </a>
            </li>
        </ul>
    </div>

    {{-- MAIN CONTENT --}}
    <div class="flex-grow-1">

        {{-- TOP BAR --}}
        <nav class="navbar bg-white shadow-sm px-4">
            <!--
            <form class="d-flex w-50">
                <input class="form-control me-2" type="search" placeholder="Search your internship...">
                <button class="btn btn-outline-primary">Search</button>
            </form>
            -->

            <div class="ms-auto">
                <a href="{{ route('login') }}" class="btn btn-outline-secondary btn-sm">Login</a>
                <a href="{{ route('register') }}" class="btn btn-primary btn-sm ms-2">Sign Up</a>
            </div>
        </nav>

        {{-- PAGE CONTENT --}}
        <div class="container my-4">
            @yield('content')
        </div>

    </div>
</div>

</body>
</html>

