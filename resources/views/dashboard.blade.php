<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{ $users[0]['name'] }}


        @foreach($users as $user)
            <h1>{{ $user['name'] }}</h1>
            <h2>{{ $user['age'] }}</h2>
            @if($user['age'] < 18)
                <p>User can't drive</p>
            @endif
            <hr>
        @endforeach
        @copyright 2024
</body>
</html>
