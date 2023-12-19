@extends('layouts.app')
@include('partials.header')
@include('partials.jumbotron')

<section id="show">
    <div class="bg-primary  position-relative ">
        <div class="container">
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" class="position-absolute top-50 w-25">
        </div>
    </div>
    <main class="container ">
        <h2 class="align-end">{{ $comic['title'] }}</h2>

    </main>
</section>
