<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Administrator Panel</title>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
        

    </head>
    <body class="mx-auto max-w bg-white text-slate-700">
        {{ $slot }}
        
    </body>
</html>
