<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz System Home Page</title>
     @vite('resources/css/app.css')
</head>
<body>
   <x-user-navbar></x-user-navbar>
   @if(session('message-success'))
   <div>
      <p class="text-green-500 font-bold">{{session('message-success')}}</p>
   </div>
   @endif
   <div class ="flex flex-col min-h-screen items-center bg-gray-100">
    <h1 class="text-4xl font-bold text-green-900 p-5">Check Your Skills</h1>
    <div class="w-full max-w-md">
        <div class="relative">
            <form action="/search-quiz" method="get">
                <input class="w-full px-4 py-3 text-gray-700 border border-gray-300 rounded-2xl shadow" type="text" placeholder="Search quiz..." name="search">
                <button class="absolute right-3 top-4">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"><path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z"/></svg>
                </button>
            </form>
        </div>
    </div>
    <div>
        <h1 class="text-2xl text-green-900">Top Categories</h1>
        <table border="2">
            <tr>
                <th class="p-3">S.No</th>
                <th class="p-3">Name</th> 
                <th class="p-3">Quiz Count</th>              
                <th class="p-3">Action</th>
            </tr>
            @foreach($categories as $key=> $category)
            <tr class="odd:bg-white even:bg-gray-100 border-b">
                <td class="p-3">{{$key+1}}</td>
                <td class="p-3">{{$category->name}}</td>
                <td class="p-3">{{$category->quizzes_count}}</td>
                <td class="p-3"><a class="text-blue-500" href="/user-quiz-list/{{$category->id}}/{{str_replace(' ','-',$category->name)}}">View</a></td>
            </tr>
            @endforeach
        </table>
        <div class="mb-10 mt-5">
            {{ $categories->links() }}
        </div>
    </div>
    
   </div>
  <x-footer-user></x-footer-user>
</body>