<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Database Practicing</title>
</head>
<body>
    @foreach ( $user as $us)
    <h1>{{$us->name}}</h1>
    @endforeach

</body>
</html>
