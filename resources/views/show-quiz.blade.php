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
       <h2 class="text-2xl text-center text-gray-800 mb-6">Quiz Name : {{$quizName}} <a class = "text-yellow-500 text-sm" href="/add-quiz">Back</a></h2>
     
    <div>
        
        <table border="2">
            <tr>
                <th class="p-3">MCQ Id</th>
                <th class="p-3">Question</th>
            </tr>
            @foreach($mcqs as $mcq)
            <tr class="odd:bg-white even:bg-gray-100 border-b">
                <td class="p-3">{{$mcq->id}}</td>
                <td class="p-3">{{$mcq->question}}</td>   
            </tr>
            @endforeach
        </table>
        
    </div>
    </div>
    
</body>
</html>