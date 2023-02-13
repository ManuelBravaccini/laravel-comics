@extends('layouts.app')

@section('title', 'Homepage')

@section('main-content')
    <main>
        <div class="jumbo">
        </div>
        <div class="comics">
            @foreach ($comics as $comic)
            <article class="comic-card">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                <div class="description">
                    <h3>
                        {{ $comic['series'] }}
                    </h3>
                </div>
            </article>
            @endforeach
        </div>
            
    </main>
@endsection