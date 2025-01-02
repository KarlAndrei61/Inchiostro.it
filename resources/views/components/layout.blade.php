<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inchiostro | La tua fonte di articoli creativi</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" href="{{ asset('storage/glizzi.webp') }}" type="image/x-icon">
</head>
<body>
    <x-navbar/>

    <div class="min-vh-100">
        {{$slot}}
    </div>
    <x-footer/>
</body>
</html>