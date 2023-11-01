<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Typing</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body class="antialiased">
    <x-app-layout>
        <x-slot name="header">
            <h1>練習モード</h1>
            <h2>{{ Auth::user()->name }} さんこんにちは</h2>
        </x-slot>
        
    </x-app-layout>
    
    </body>
</html>
