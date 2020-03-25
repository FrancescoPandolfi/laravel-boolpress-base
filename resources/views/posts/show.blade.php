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

                         
                         {{-- DELETE BUTTON --}}
                         <form action="{{route('posts.destroy', $post)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger float-right ">Delete</button>
                        </form>
                        
                        {{-- EDIT BUTTON --}}
                        <a href="{{route('posts.edit', $post)}}" class="btn btn-warning float-right mr-3">Edit</a>
                    
                    </div>
                </div>

                </div>
        </div>
    </div>

@endsection