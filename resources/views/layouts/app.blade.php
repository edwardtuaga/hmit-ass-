<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMIT APP</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-blue-600 p-4 text-white shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">HMIT INFORMATIKA</h1>
            <div class="space-x-4">
                <a href="{{ route('pendaftaran') }}" class="hover:underline">Pendaftaran</a>
                <a href="{{ route('aspirasi') }}" class="hover:underline">Aspirasi</a>
                <a href="{{ route('admin') }}" class="hover:underline bg-blue-800 px-3 py-1 rounded">Admin</a>
            </div>
        </div>
    </nav>

    <div class="container mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
        @if(session('success'))
            <div class="bg-green-200 text-green-800 p-3 rounded mb-4">{{ session('success') }}</div>
        @endif
        
        @yield('content')
    </div>
</body>
</html>