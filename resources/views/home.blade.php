@extends("layouts.layout")


@section("titolo")
    Home
@endsection

@section("contenuto")
<h1> Laravel comics </h1>
<x-card>
    <x-slot:title>
        Titolo card
    </x-slot>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt labore praesentium, odio nihil dolore quos alias. Totam illo explicabo asperiores aut, eligendi hic sapiente, ducimus quo iure omnis veniam. Necessitatibus.
</x-card>
<hr>

@endsection
