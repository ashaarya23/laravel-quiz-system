<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Result</title>
     @vite('resources/css/app.css')
</head>
<body>
   <x-user-navbar></x-user-navbar>
   <div class ="flex flex-col min-h-screen items-center bg-gray-100">
    <h1 class="text-4xl font-bold text-green-900 p-5">Quiz Result</h1>
    @if(($correctAnswers*100/count($resultData))>70)
      <a class="text-green-500 font-bold" href="/certificate">View and download Certificate</a>
    @endif
    <div>
        <h1 class="text-2xl text-green-900 block">{{$correctAnswers}} out of {{count($resultData)}} correct.</h1>
        <table border="2">
            <tr>
                <th class="p-3">S.No</th>
                <th class="p-3">Question</th>
                <th class="p-3">Result</th> 
                
            </tr>
            @foreach($resultData as $key=> $item)
            <tr class="odd:bg-white even:bg-gray-100 border-b">
                <td class="p-3">{{$key+1}}</td>
                <td class="p-3">{{$item->question}}</td>
                @if($item->is_correct)
                    <td class="p-3 text-green-500">correct</li>
                @else
                    <td class="p-3 text-red-500">incorrect</li>
                @endif

            </tr>
            @endforeach
        </table>
        
    </div>
   </div>
  <x-footer-user></x-footer-user>
</body>