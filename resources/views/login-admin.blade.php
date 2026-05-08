@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto">
    <div class="bg-white p-8 rounded-lg shadow-md border-t-4 border-gray-800">
        <h2 class="text-2xl font-bold mb-6 text-gray-800 text-center">Login Admin HMIT</h2>

        <form action="{{ route('login.admin.post') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block mb-1 font-semibold text-gray-700">Username</label>
                <input type="text" name="username" class="w-full border-2 border-gray-200 p-2 rounded focus:outline-none focus:border-gray-800" placeholder="Username" required>
            </div>
            
            <div>
                <label class="block mb-1 font-semibold text-gray-700">Password</label>
                <input type="password" name="password" class="w-full border-2 border-gray-200 p-2 rounded focus:outline-none focus:border-gray-800" placeholder="Password" required>
            </div>
            
            <div class="pt-2">
                <button type="submit" class="w-full bg-gray-800 text-white py-2 rounded-lg font-bold hover:bg-black transition duration-200">
                    Login Administrator
                </button>
            </div>
        </form>
    </div>
</div>
@endsection