<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Update ToDoList</h1>

    <form method="post" action="/update-todo-action/{{$id}}">
        @csrf
        <input type="text" value="{{$title}}" name="title" placeholder="title">
        <br>
        <br>
        <input type="text" value="{{$description}}" name="description" placeholder="description">
        <br>
        <br>
        <input type="text" value="{{$name}}" name="name" placeholder="name">
        <br>
        <br>
        <button type="submit">Update</button>
    </form>

</body>
</html>
