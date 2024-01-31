<x-layout>
<h1>I nostri film in catalogo</h1>
<h2>Ecco l'elenco</h2>

@foreach($films as $film)

    <x-card
    {{-- img="{{$film['img']}}" --}}
    title="{{$film['title']}}"
    author="{{$film['author']}}"
    />

@endforeach
</x-layout>