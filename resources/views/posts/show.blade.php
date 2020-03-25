@extends('layouts.layout')

@section('content')
        
    <div class="container">
        <div class="row">
            <div class="col-12">  

                <div class="card mb-3">
                    <img class="card-img-top" src="{{ $post->image }}" alt="{{ $post->title }}">
                    <div class="card-body">
                        <h2 class="card-title">{{ $post->title }}</h2>
                        <p class="card-text">{{ $post->body }}</p>
                         <p class="card-text"><small class="text-muted">by {{ $post->author }}</small></p>
                     </div>
                </div>

                </div>
        </div>
    </div>

@endsection