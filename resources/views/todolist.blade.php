<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>ToDoList</h1>

    <form method="post" action="insert-todo">
        @csrf
        <input type="text"  name="title" placeholder="title">
        <br>
        <br>
        <input type="text" name="description" placeholder="description">
        <br>
        <br>
        <input type="text" name="name" placeholder="name">
        <br>
        <br>
        <button type="submit">Add</button>
    </form>

    <ul>
        @foreach ($alltodo as $todo)
            <li>
                <span>Title: {{$todo['title']}}</span>
                <br>
                <span>Description: {{$todo['description']}}</span>
                <br>
                <span>Name: {{$todo['name']}}</span>
                <br>
                <a href="delete_todo?id={{ $todo['id'] }}">Delete</a>
                <a href="update_todo?id={{ $todo['id'] }}">update</a>
                <hr>
            </li>
        @endforeach
    </ul>


</body>
</html>
