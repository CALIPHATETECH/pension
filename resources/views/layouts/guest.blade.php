<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pension ! @yield('title')</title>
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
    
    <!-- Hero Section -->
    <div class="container">
        <div class="row justify-content-center">
            
            <div class="col-md-4" >
            <br>
            <br>
            <br>
                <div class="card-body shadow p-4">

                    {{$slot}}
                </div>
            </div>
        </div>
    </div>

    

    <!-- Footer -->
    <

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
