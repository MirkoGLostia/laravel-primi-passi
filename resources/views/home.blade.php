<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel test</title>
</head>
<body>
    
    <header>
        <h1>
            hello {{ $utente }}
        </h1>
    </header>

    <body>
        
        <ul>
            @foreach ($data as $dat)
                <li>username:  {{ $dat -> name }}</li>
            @endforeach
        </ul>

    </body>


</body>
</html>