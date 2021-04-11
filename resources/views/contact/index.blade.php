<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>

@foreach ($email as $emailDetail)
    <ul style="display: flex; justify-content: space-between; list-style-type: none;    background-color: khaki;">
       <li>
            {{ $emailDetail->id }}
       </li> 
       <li>
            {{ $emailDetail->name }}
       </li> 
       <li>
            {{ $emailDetail->surname }}
       </li> 
       <li>
            <img src="{{ asset('storage/images/' . $emailDetail->photo) }}" style="width: 80px; height: 80px;" alt="img"/>
       </li> 
    </ul>
@endforeach
   
</body>
</html>