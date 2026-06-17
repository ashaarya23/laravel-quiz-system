<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{str_replace('-',' ', $quizName)}}</title>
     @vite('resources/css/app.css')
</head>
<body>
    <x-user-navbar></x-user-navbar>
    @if(session('message-success'))
   <div>
      <p class="text-green-500 font-bold">{{session('message-success')}}</p>
   </div>
   @endif
    <div class="bg-gray-100 flex flex-col items-center min-h-screen pt-5">
        <h1 class="text-4xl text-center text-green-800 mb-6 font-bold">{{str_replace('-',' ', $quizName)}}</h1>
          <h2 class="text-lg text-center text-green-800 mb-6 font-bold">This Quiz container {{$quizCount}}  Questions and no limit to attempt this Quiz</h2>

        <h1 class="text-2xl text-center text-green-800 mb-6 font-bold">Good Luck</h1>
        @if(session('user'))
           <a href="/mcq/{{session('firstMCQ')->id.'/'.$quizName}}" class="bg-blue-500 rounded-md px-2 py-2 text-white">Start Quiz</a>
        @else
           <a href="/user-signup-quiz" class="bg-blue-500 rounded-md px-2 py-2 mb-5 text-white">Signup for Start Quiz</a>
           
           <a href="/user-login-quiz" class="bg-blue-500 rounded-md px-2 py-2  text-white">Login for Start Quiz</a>
        @endif
    </div>
</body>
