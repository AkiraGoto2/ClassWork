<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Edit</title>
</head>
<body>
    <h1>Редакт продукта</h1>
    <form action="{{route('products.update', $product->id)}}" method="POST">
        @csrf
        @method('put')
        <input type="text" name="name" value="{{$product->name}}">
        <input type="text" name="prise" value="{{$product->prise}}">
        <textarea name="descripshion">{{$product->descripshion}}</textarea>    
        <br>  
        <input type="submit" value="Редактор товар">  
    </form>
</body>
</html>