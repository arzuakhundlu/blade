<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        h1{
            color: red
        }
        .min{
            color: red
        }
        .mid{
            color: blue
        }
        .max{
            color: green
        }
    </style>
</head>
<body>


    <h1>Main Page</h1>
    <ul>
        @foreach ($users as $user)
        <li>{{$user}}</li>
        @endforeach
    </ul>

    <ul>
        @foreach ($categories as $cat)
            @if ($cat['count'] < 20)
                <li class="min">{{$cat['name']}}</li>
            @elseif($cat['count'] > 20 && $cat['count'] < 30)
                <li class="mid">{{$cat['name']}}</li>
            @else
                <li class="max">{{$cat['name']}}</li>
            @endif
        @endforeach
    </ul>

</body>
</html>
