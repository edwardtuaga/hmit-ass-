<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas CRUD Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">Tugas Perbandingan CRUD</a>
            <div class="navbar-nav">
                <a class="nav-link {{ Request::is('raw-sql*') ? 'active' : '' }}" href="{{ route('raw-sql.index') }}">1. Raw SQL</a>
                <a class="nav-link {{ Request::is('query-builder*') ? 'active' : '' }}" href="{{ route('query-builder.index') }}">2. Query Builder</a>
            </div>
        </div>
    </nav>

    <div class="container">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>

</body>
</html>