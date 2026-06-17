<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Certificate</title>
     @vite('resources/css/app.css')
</head>
<body class="pt-10 text-center">
    <div class="flex justify-between w-200 ml-10">
        <a class="text-green-500 font-bold" href="/">Back</a>
        <a class="text-green-500 font-bold" href="/download-certificate">Download Certificate</a>
    </div>
    
    <div class="w-200 border-4 m-10 bg-gray-100 border-indigo-900 p-10 text-center">
      <h1 class="text-5xl flex"></h1>
      <span>Certification of complication</span>
      <p class="text-2xl mt-5">This is clarify data</p>
      <h2 class="text-4xl">{{$data['name']}}</h2>
      <p class="text-2xl mt-3">has successfully completed the</p>
      <h3 class="text-3xl">{{$data['quiz']}}</h3>
      <p class="text-2xl mt-5">{{date('y-m-d')}}</p>
    </div>
</body>
</html>