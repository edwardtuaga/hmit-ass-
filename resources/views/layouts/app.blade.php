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
            <h1 class="text-xl font-bold">HMIT</h1>
            
            <div class="flex gap-6 items-center">
                <a href="{{ route('pendaftaran') }}" class="hover:text-blue-200">Pendaftaran</a>

                @if(request()->hasCookie('student_nim'))
                    <a href="{{ route('aspirasi') }}" class="hover:text-blue-200">Aspirasi</a>
                    <div class="flex items-center gap-2">
                        <span class="text-xs bg-blue-800 px-2 py-1 rounded">Mhs: {{ request()->cookie('student_nim') }}</span>
                        <a href="{{ route('logout.mahasiswa') }}" class="text-red-300 hover:text-red-100 underline text-sm">Logout</a>
                    </div>
                @else
                    <a href="{{ route('login.mahasiswa') }}" class="bg-blue-500 px-3 py-1 rounded hover:bg-blue-400">Login Mahasiswa</a>
                @endif

                @if(session()->has('admin_user'))
                    <a href="{{ route('admin') }}" class="font-bold hover:text-blue-200">Admin Panel</a>
                    <a href="{{ route('logout.admin') }}" class="text-yellow-300 hover:text-yellow-100 underline text-sm">Logout Admin</a>
                @else
                    <a href="{{ route('login.admin') }}" class="bg-gray-700 px-3 py-1 rounded hover:bg-gray-800 text-sm">Login Admin</a>
                @endif
            </div>
        </div>
    </nav>

    <div class="container mx-auto mt-10 p-6 bg-white rounded-lg shadow-md max-w-4xl">
        @if(session('success'))
            <div class="bg-green-200 text-green-800 p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="bg-red-200 text-red-800 p-3 rounded mb-4">
                <ul class="list-disc ml-5">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        @yield('content')
    </div>
</body>
</html>