<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    @vite('resources/css/app.css')
</head>
<body>
<x-user-navbar></x-user-navbar>
@if(session('message-success'))
   <div>
      <p class="text-green-500 font-bold">{{session('message-success')}}</p>
   </div>
   @endif
<div class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-sm">
      <h2 class="text-2xl text-center text-gray-800 mb-6">Forgot Password</h2>
      <form action="/user-forgot-password" method="post" class="space-y-4">
        @csrf
        @error("user")
        <div class="text-red-500">{{$message}}</div>
        @enderror
        
        <div>

            <input type="text" name="email" placeholder="Enter User Email" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
            @error("email")
            <div class="text-red-500">{{$message}}</div>
            @enderror
        </div>
         
        <button type="submit" class="w-full bg-blue-500 rounded-xl px-4 py-2">Submit</button>
        
      </form>
    </div>
</div>   
</body>
</html>
