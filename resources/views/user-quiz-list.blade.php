<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category : {{str_replace('-', ' ',$category)}}</title>
     @vite('resources/css/app.css')
</head>
<body>
    <x-user-navbar></x-user-navbar>
    
    <div class="bg-gray-100 flex flex-col items-center pt-10">
        <h2 class="text-2xl text-center text-green-900 mb-6">Category Name : {{str_replace('-', ' ',$category)}}</h2>
     
    <div>
        
        <table border="2">
            <tr>
                <th class="p-3">Quiz Id</th>
                <th class="p-3">Name</th>
                  <th class="p-3">Mcq Count</th>
                <th class="p-3">Action</th>
            </tr>
            @foreach($quizData as $item)
            <tr class="odd:bg-white even:bg-gray-100 border-b">
                <td class="p-3">{{$item->id}}</td>
                <td class="p-3">{{$item->name}}</td> 
                <td class="p-3">{{$item->mcq_count}}</td> 
                <td class="p-3">
                    <a  href= "/start-quiz/{{$item->id}}/{{str_replace('-',' ',$item->name)}}" class="text-green-900" href="">Attempt Quiz</a>
                </td>  
            </tr>
            @endforeach
        </table>
        
    </div>
    </div>
    
</body>
</html>