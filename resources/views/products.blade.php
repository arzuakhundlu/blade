<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Products</h1>

    <form method="POST" action="insert-product">
        @csrf
        <input type="text" name="title" placeholder="title">
        <br>
        <br>
        <input type="number" name="price" placeholder="price">
        <br>
        <br>
        <button type="submit">Add</button>
    </form>

    <ul>
        @foreach ($allproducts as $data)
            <li>
                <span>Title: {{$data['title']}}</span>
                <br>
                <span>Price: {{$data['price']}}</span>
                <br>
                <a href="delete_product?id={{ $data['id'] }}">Delete</a>
                <a href="update_product?id={{ $data['id'] }}">update</a>
                <hr>
            </li>
        @endforeach
    </ul>


</body>
</html>
