@extends('layouts.layout')

@section('content')

    @if (session('delete'))
        <div class="alert alert-success">
            {{ session('delete') }}
        </div>
    @endif 

    <div class="container">
        <div class="row">
                @foreach ($posts as $post)
                <div class="col-lg-4 col-md-6 col-xs-12"> 
                    <div class="card mb-3">
                        <img class="card-img-top" src="{{ $post->image }}" alt="Card image cap">
                        <div class="card-body">
                            <h2 class="card-title">{{ $post->title }}</h2>
                            <p class="card-text">{{ $post->body }}</p>
                            <p class="card-text"><small class="text-muted">by {{ $post->user->name }}</small></p>

                            {{-- SHOW BUTTON --}}
                            <a href="{{route('posts.show', $post)}}" class="btn btn-dark float-right mr-3">Read all</a>
                            
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    </div>

@endsection