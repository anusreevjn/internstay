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

        .container {
            background-color: transparent;
        }

        body {
            min-height: 100vh;
        }
        .sidebar {
            width: 220px;
            min-height: 100vh;
        }
        .sidebar a {
            text-decoration: none;
        }
        .sidebar .nav-link {
            color: #ffffff;
            border-radius: 8px;
            padding: 10px 12px;
        }

        .sidebar .nav-link:hover {
            background-color: rgba(255,255,255,0.2);
        }

        .sidebar .nav-link.active {
            background-color: rgba(255,255,255,0.35);
            font-weight: 600;
        }

        /* ===== PURPLE BUTTON THEME (ADMIN) ===== */

/* ADD / SAVE */
.btn-success {
    background-color: #725483 !important;
    border-color: #725483 !important;
    color: #ffffff !important;
}

.btn-success:hover {
    background-color: #5f3f70 !important;
    border-color: #5f3f70 !important;
}

/* PRIMARY (MAIN ACTIONS) */
.btn-primary {
    background-color: #8e79b9 !important;
    border-color: #8e79b9 !important;
    color: #ffffff !important;
}

.btn-primary:hover {
    background-color: #725483 !important;
    border-color: #725483 !important;
}

/* EDIT BUTTON (btn-warning) */
.btn-warning {
    background-color: #9c7ccf !important;
    border-color: #9c7ccf !important;
    color: #ffffff !important;
}

.btn-warning:hover {
    background-color: #725483 !important;
    border-color: #725483 !important;
}


/* SHOW / INFO */
.btn-info {
    background-color: #a594c8 !important;
    border-color: #a594c8 !important;
    color: #ffffff !important;
}

.btn-info:hover {
    background-color: #8e79b9 !important;
    border-color: #8e79b9 !important;
}

/* DELETE */
.btn-danger {
    background-color: #6a1b9a !important;
    border-color: #6a1b9a !important;
    color: #ffffff !important;
}

.btn-danger:hover {
    background-color: #4a148c !important;
    border-color: #4a148c !important;
}

/* SUCCESS ALERT */
.alert.custom-success {
    background-color: #725483 !important;
    color: #ffffff !important;
    border: none !important;
}


    </style>
</head>
<body>

<div class="d-flex">

    {{-- SIDEBAR --}}
    <div class="sidebar text-white p-3" style="background-color:#1f0822;">
        <h4 class="mb-4">InternStay</h4>

        <ul class="nav nav-pills flex-column">
            <li class="nav-item mb-2">
                <a href="{{ route('home') }}" class="nav-link text-white">
                    Dashboard
                </a>
            </li>

            <li class="nav-item mb-2">
                <a href="{{ route('internships.index') }}" class="nav-link text-white">
                    Internships
                </a>
            </li>

            <li class="nav-item mb-2">
                <a href="{{ route('rentals.index') }}" class="nav-link text-white">
                    Rental Accommodation
                </a>
            </li>

            <li class="nav-item mb-2">
                <a href="{{ route('users.index') }}" class="nav-link text-white">
                    Users
                </a>
            </li>
            </li>

            <li class="nav-item mt-4">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="btn btn-sm btn-danger w-100">Logout</button>
                </form>
            </li>
        </ul>
    </div>

    {{-- MAIN CONTENT --}}
    <div class="flex-grow-1">

        {{-- TOP BAR --}}
        <nav class="navbar px-4" style="background-color:#edddec;">
            <form class="d-flex w-50">
                <input class="form-control me-2" type="search" placeholder="Search...">
                <button class="btn" style="background-color:#75619d;color:white;">Search</button>
            </form>

            <span class="ms-auto fw-semibold text-muted">
                {{ Auth::user()->name }}
            </span>
        </nav>

        {{-- PAGE CONTENT --}}
        <div class="container mt-4">
            @yield('content')
        </div>

    </div>
</div>

</body>
</html>
