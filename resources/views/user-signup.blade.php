<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Signup</title>
    @vite('resources/css/app.css')
</head>
<body>
<x-user-navbar></x-user-navbar>
<div class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-sm">
      <h2 class="text-2xl text-center text-gray-800 mb-6">User Signup</h2>
      <form action="/user-signup" method="post" class="space-y-4">
        @csrf
        @error("user")
        <div class="text-red-500">{{$message}}</div>
        @enderror
        <div>
            <label for="name" class="text-gray-600 mb-1">User Name</label>
            <input type="text" name="name" placeholder="Enter User Name" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
            @error("name")
            <div class="text-red-500">{{$message}}</div>
            @enderror
        </div>
        <div>
            <label for="email" class="text-gray-600 mb-1">User Email</label>
            <input type="text" name="email" placeholder="Enter User Email" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
            @error("email")
            <div class="text-red-500">{{$message}}</div>
            @enderror
        </div>
        <div>
            <label for="password" class="text-gray-600 mb-1">Password</label>
            <input type="password" name="password" placeholder="Enter User Password" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
            @error("password")
            <div class="text-red-500">{{$message}}</div>
            @enderror
        </div>
        <div>
            <label for="password" class="text-gray-600 mb-1">Confirm Password</label>
            <input type="password" name="password_confirmation" placeholder="Confirm User Password" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
            
        </div>
        <button type="submit" class="w-full bg-blue-500 rounded-xl px-4 py-2">Signup</button>
      </form>
    </div>
</div>   
</body>
</html>
