<x-layout>
    <x-slot:title>Pagina welcome</x-slot>
    <x-navbar></x-navbar>
    @vite(['resources/css/app.css', 'resources/js/app.js','resources/css/style.css'])
    <h1>{{$nome_blog}}</h1>
</x-layout>
