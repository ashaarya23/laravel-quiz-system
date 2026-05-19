<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
     @vite('resources/css/app.css')
</head>
<body>
    <x-navbar name={{$name}}></x-navbar>
    @if(session('category'))
    <div class="bg-green-800 text-white pl-5">{{session('category')}}</div>
    @endif
    <div class="bg-gray-100 flex flex-col items-center pt-10">
       <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-sm">
      <h2 class="text-2xl text-center text-gray-800 mb-6">Add Category</h2>
      <form action="/add-category" method="post" class="space-y-4">
        @csrf
        
        <div>   
            <input type="text" name="category" placeholder="Enter Category Name" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
            @error('category')
            <div class="text-red-500">{{$message}}</div>
            @enderror
        </div>
        
        <button type="submit" class="w-full bg-blue-500 rounded-xl px-4 py-2">Add</button>
      </form>
    </div>
    <div>
        <h1 class="text-2xl text-blue-500">Category List</h1>
        <table border="2">
            <tr>
                <th class="p-3">S.No</th>
                <th class="p-3">Name</th>
                <th class="p-3">Creator</th>
                <th class="p-3">Action</th>
            </tr>
            @foreach($categories as $category)
            <tr class="odd:bg-white even:bg-gray-100 border-b">
                <td class="p-3">{{$category->id}}</td>
                <td class="p-3">{{$category->name}}</td>
                <td class="p-3">{{$category->creator}}</td>
                <td class="p-3"><a class="text-blue-500" href="category/delete/{{$category->id}}">Delete</a></td>
            </tr>
            @endforeach
        </table>
        
    </div>
    </div>
    
</body>
</html>