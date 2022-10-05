<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 <div>Name: {{$name}}</div>
 <div>Age: {{$age}}</div>
 <div>City: {{$city}}</div>
 @if($age > 18)
    <div>Person is of legal age </div>
 @else
    <div>Person is not of legal age </div>
 @endif
</body>
</html>