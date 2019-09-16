<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @yield('content')

    {{-- On inclus la variable titre transmise à la vue en second paramètre --}}
<h1>{{ $title }}</h1>
    Test de l'affichage du default.blade
</body>
</html>


