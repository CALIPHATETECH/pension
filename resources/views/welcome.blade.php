<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Pension Management System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8fdf8; /* Light green background */
            color: #5bba79; /* Dark green text */
        }
        .navbar {
            background-color: #5bba79; /* Dark green navbar */
        }
        .navbar-brand, .nav-link {
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
            background-color: #5bba79;
            color: white;
            border: none;
        }
        .btn-green:hover {
            background-color: #095a09;
        }
        .feature-icon {
            font-size: 3rem;
            color: #5bba79;
        }
        a:focus, button:focus {
            outline: 2px solid #5bba79; /* Green outline for focused elements */
            outline-offset: 2px;
        }

    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fas fa-university"></i> Pension Management System</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="containers" style="background-color: white;">
        <div class="row justify-content-center">
            <div class="col-md-1"></div>
            <div class="col-md-5">
            <img src="{{asset('images/welcome.png')}}" alt="">
            </div>
            <div class="col-md-5 text-left" style="height: 400px; padding-top: 150px;">
                <h1>Sokoto South, Pension Management System</h1>
                <p class="lead mt-3">Secure your future with ease and transparency. Manage contributions, track funds, and access benefits all in one place.</p>
                <div class="mt-4">
                    <a href="{{route('login')}}" class="btn btn-green btn-lg"><i class="fas fa-sign-in-alt"></i> Login</a>
                    <a href="{{route('register')}}" class="btn btn-outline-green btn-lg"><i class="fas fa-user-plus"></i> Register</a>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="container mt-5">
        <div class="row text-center">
            <div class="col-md-4">
                <div class="card-body shadow p-4">
                    <i class="fas fa-users feature-icon"></i>
                    <h4 class="mt-3">Member Management</h4>
                    <p>Efficiently manage member details and track their contributions effortlessly.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-body shadow p-4">
                    <i class="fas fa-wallet feature-icon"></i>
                    <h4 class="mt-3">Secure Contributions</h4>
                    <p>Track employee and employer contributions with complete transparency.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-body shadow p-4">
                    <i class="fas fa-chart-line feature-icon"></i>
                    <h4 class="mt-3">Real-Time Insights</h4>
                    <p>Get detailed analytics and reports on fund growth and projections.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center py-3 mt-5" style="background-color: #5bba79; color: white;">
        <p>&copy; 2025 Pension Management System. All Rights Reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
