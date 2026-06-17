<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details Page</title>
     @vite('resources/css/app.css')
</head>
<body>
   <x-user-navbar></x-user-navbar>
   <div class ="flex flex-col min-h-screen items-center bg-gray-100">
    <h1 class="text-4xl font-bold text-green-900 p-5">Attempted Quiz</h1>
    
    <div>
        
        <table border="2">
            <tr>
                <th class="p-3">S.No</th>
                <th class="p-3">Name</th>               
                <th class="p-3">Status</th>
            </tr>
            @foreach($quizRecord as $key=> $record)
            <tr class="odd:bg-white even:bg-gray-100 border-b">
                <td class="p-3">{{$key+1}}</td>
                <td class="p-3">{{$record->name}}</td>
                <td class="p-3">
                    @if($record->status == 2)
                        <span class="text-green-500">Completed</span>
                    @else
                        <span class="text-red-500">Not completed</span>
                    @endif    
                </td>  
            </tr>
            @endforeach
        </table>
        
    </div>
   </div>
  <x-footer-user></x-footer-user>
</body>