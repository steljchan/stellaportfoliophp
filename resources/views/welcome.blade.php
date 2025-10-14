<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Stella</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        body {
            background-color: #fdfadb;
            color: #4b286d;
            font-family: "Poppins", sans-serif;
        }
        .navbar {
            background-color: #e2cbe2;
        }
        .navbar-brand {
            color: #4b286d !important;
            font-weight: bold;
        }
        .nav-link {
            color: #4b286d !important;
            transition: 0.3s;
        }
        .nav-link:hover {
            color: #be97c3 !important;
        }
        .hero {
            background-color: #fbccec;
            padding: 100px 0;
            text-align: center;
            border-radius: 20px;
            margin-top: 30px;
        }
        .btn-custom {
            background-color: #be97c3;
            color: white;
            border: none;
            transition: 0.3s;
        }
        .btn-custom:hover {
            background-color: #e2cbe2;
            color: #4b286d;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">Stella's Portofolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container hero">
        <h1>Welcome to Stella's Portofolio 💜</h1>
        <p>Explore my projects, ideas, and journey in tech.</p>
        <a href="#" class="btn btn-custom mt-3">See My Projects</a>
    </div>
</body>
</html>
