<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$product->name}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1>{{$product->name}}</h1>
    <p>{{$product -> prise}}</p>
    <p>{{$product -> descripshion}}</p>

</body>
</html>