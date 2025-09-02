<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukuku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #e9ecef;
        }
        .article-title {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }
        .article-content {
            line-height: 1.8;
            font-size: 1.1rem;
        }
        footer {
            margin-top: 50px;
            padding: 20px;
            background: #e9ecef;
            text-align: center;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg px-4">
        <a class="navbar-brand fw-bold" href="{{ route('articles.index') }}">Bukuku</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-3">
                <li class="nav-item"><a class="nav-link" href="{{ route('articles.index') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('articles.create') }}">Tambah Catatan</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <footer>
        <p>&copy; {{ date('Y') }} Bukuku </p>
    </footer>
    @yield('scripts')
</body>
</html>
