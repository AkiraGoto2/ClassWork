<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>create</title>
</head>
<body>
    <h1>Создание продукта</h1>
    <form action="{{route('products.store')}}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Название товара">
        <input type="text" name="prise" placeholder="Цена товара">
        <textarea name="descripshion" placeholder="Описание товара" ></textarea>    
        <br>  
        <input type="submit" value="Создать товар">  
    </form>
</body>
</html>