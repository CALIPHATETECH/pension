<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pension @yield('title')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8fdf8; /* Light green background */
            color: #0d6a0d; /* Dark green text */
        }
        .navbar {
            background-color: #5bba79; /* Dark green navbar */
        }
        .navbar-brand, .nav-link, .dropdown-item {
            color: white !important;
        }
        .dropdown-item:hover {
            background-color: #095a09; /* Slightly darker green */
            color: white !important;
        }
        .hero {
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 40px;
            text-align: center;
            margin-top: 50px;
        }
        .hero h1 {
            font-weight: bold;
        }
        .btn-green {
            background-color: #0d6a0d;
            color: white;
            border: none;
        }
        .btn-green:hover {
            background-color: #095a09;
        }
        .feature-icon {
            font-size: 3rem;
            color: #0d6a0d;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fas fa-university"></i> Pension Management System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('member.index')}}">Members</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('salary.index')}}">Salary</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('salary.index')}}">Grade Levels</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('salary.index')}}">Minimum Wages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit(); ">Logout</a>
                    </li>
                    <form action="{{route('logout')}}" method="post" id="logout-form">@csrf</form>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="container">
    <br>
    <br>
        <div class="row justify-content-center">
        
            @yield('content')
        </div>
    </div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
