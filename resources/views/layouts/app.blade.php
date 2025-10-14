<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Stella</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --purple-main: #be97c3;
            --purple-light: #e2cbe2;
            --cream: #fdfadb;
            --pink: #fbccec;
            --purple-dark: #8b6b90;
            --shadow: 0 4px 20px rgba(190, 151, 195, 0.15);
        }

        [data-bs-theme="dark"] {
            --cream: #1a1a2e;
            --purple-main: #8b6b90;
            --purple-light: #4a4453;
            --pink: #b86b9a;
            --purple-dark: #e2cbe2;
        }

        body {
            background: linear-gradient(135deg, var(--cream) 0%, #fff9f0 100%);
            color: #3a2a3a;
            font-family: "Poppins", sans-serif;
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            transition: all 0.3s ease;
            padding-top: 80px; /* Account for fixed navbar */
        }

        [data-bs-theme="dark"] body {
            background: linear-gradient(135deg, var(--cream) 0%, #16213e 100%);
            color: #e2cbe2;
        }

        /* Remove old styles for theme toggle, language toggle, and music player */
    </style>
</head>
<body>
    <!-- Include Navbar (now with all controls) -->
    @include('partials.navbar')

    <!-- Main Content -->
    <main class="container">
        @yield('content')
    </main>

    <!-- Include Footer -->
    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    @yield('scripts')
</body>
</html>