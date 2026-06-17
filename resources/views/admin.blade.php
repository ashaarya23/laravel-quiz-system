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
    <div class="bg-gray-100 flex flex-col items-center min-h-screen pt-5">
       
        <h1 class="text-2xl text-blue-500">Users List</h1>
        <table border="2">
            <tr>
                <th class="p-3">S.No</th>
                <th class="p-3">Name</th>
                <th class="p-3">Email</th>
                
            </tr>
            @foreach($users as $key=>$user)
            <tr class="odd:bg-white even:bg-gray-100 border-b">
                <td class="p-3">{{$key+1}}</td>
                <td class="p-3">{{$user->name}}</td>
                <td class="p-3">{{$user->email}}</td>
                
            </tr>
            @endforeach
        </table>
        <div class="mt-5">
            {{ $users->links() }}
        </div>
        
    
    </div>
</body>
</html>
