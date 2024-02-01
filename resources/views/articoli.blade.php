
<x-layout>
    <x-slot:title>Articoli</x-slot>
    <x-navbar></x-navbar>
    <div class="container">
        <div class="row">
            @foreach ($articoli as $chiave=> $articolo)
            <x-card :articolo="$articolo" :$chiave></x-card>
            @endforeach
        </div>
    </div>

</x-layout>
