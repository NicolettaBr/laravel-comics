@extends('layouts.app')

@section('main-content')

    <div class="current-series">
        current series
    </div>

    <section class="comics-list">

        <div class="container">
            
            <div class="comics-container">
                @foreach( $comics as $comic)
                
                <div class="comic">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                    <div class="series">{{$comic['series']}}</div>
                </div>
                
                @endforeach
            </div>
        </div>
    
    </section>
@endsection