<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Quiz Page</title>
     @vite('resources/css/app.css')
</head>
<body>
    <x-navbar name={{$name}}></x-navbar>
    <div class="bg-gray-100 flex flex-col items-center pt-10">
        <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">
         @if(!session('quizDetails'))   
        <h2 class="text-2xl text-center text-gray-800 mb-6">Add Quiz</h2>
            <form action="/add-quiz" method="get" class="space-y-4">
                <div>   
                    <input type="text" name="quiz" placeholder="Enter Quiz Name" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
                </div>
                <div>   
                    <select type="text" name="category_id"  class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
                        @foreach($categories as $category)
                          <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>    
                </div>
                
                <button type="submit" class="w-full bg-blue-500  text-white rounded-xl px-4 py-2">Add</button>
            </form>
            @else
            <span class="text-green-500 font bold">Quiz: {{session('quizDetails')->name}}</span>
            <h2 class="text-2xl text-center text-gray-800 mb-6">Add Quiz</h2>
            <form action="/add-quiz" method="get" class="space-y-4">
                <div>   
                    <textarea name="quiz" placeholder="Enter Your Question" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none"></textarea>
                </div>
                <div>   
                    <input type="text" name="quiz" placeholder="Enter First Option" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
                </div>
                <div>   
                    <input type="text" name="quiz" placeholder="Enter Second Option" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
                </div>
                <div>   
                    <input type="text" name="quiz" placeholder="Enter Third Option" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
                </div>
                <div>   
                    <input type="text" name="quiz" placeholder="Enter Fourth Option" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
                </div>
                <div>   
                    <select name="right answer" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
                        <option value="">Select Right Answer</option>
                        <option value="">A</option>
                        <option value="">B</option>
                        <option value="">C</option>
                        <option value="">D</option>
                    </select>
                </div>
                <button type="submit" class="w-full text-white bg-blue-500 rounded-xl px-4 py-2">Add More</button>
                <button type="submit" class="w-full text-white bg-green-500 rounded-xl px-4 py-2">Add and Submit</button>
            </form>    
            @endif
        </div>
    </div>
</body>    
