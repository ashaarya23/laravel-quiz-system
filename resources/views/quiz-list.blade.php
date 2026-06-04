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
    
    <div class="bg-gray-100 flex flex-col items-center pt-10">
        <h2 class="text-2xl text-center text-gray-800 mb-6">Category Name : {{$category}}
          <a class = "text-yellow-500 text-sm" href="/add-quiz">Back</a>
        </h2>
     
    <div>
        
        <table border="2">
            <tr>
                <th class="p-3">Quiz Id</th>
                <th class="p-3">Name</th>
                <th class="p-3">Action</th>
            </tr>
            @foreach($quizData as $item)
            <tr class="odd:bg-white even:bg-gray-100 border-b">
                <td class="p-3">{{$item->id}}</td>
                <td class="p-3">{{$item->name}}</td> 
                <td class="p-3">
                    <a class="text-blue-500" href="/show-quiz/{{$item->id}}/{{$item->name}}">View</a>
                </td>  
            </tr>
            @endforeach
        </table>
        
    </div>
    </div>
    
</body>
</html>