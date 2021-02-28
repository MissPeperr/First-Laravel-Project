<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- This is laravel's templating system's (blade) syntax -->
    <h1>This is escaped</h1>
    <h2>{{ $name }}</h2>
    <h1>This is NOT escaped</h1>
    <h2>{{!! $nono !!}}</h2>
</body>
</html>