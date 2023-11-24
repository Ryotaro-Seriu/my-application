<x-app-layout>
    <x-slot name="header">
        <h1>詳細画面</h1>
        <h2>{{ Auth::user()->name }} さんこんにちは</h2>
    </x-slot>
    <h2 class='practice'>
        <a href="/typing/practice">練習する</a>
    </h2>
    <script>
        'use strict'
        
        const words = @json($words);
        console.log(words);
        
        const fruits = words.map((word)=>word.english_word);
        console.log(fruits);
    </script>
</x-app-layout>