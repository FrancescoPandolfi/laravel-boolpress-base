@extends('layouts.layout')

@section('content')
        
    <div class="container">
        <div class="row">
                @if (session('delete'))
                    <div class="alert alert-success">
                        {{ session('delete') }}
                    </div>
                @endif

                @foreach ($posts as $post)
                <div class="col-lg-4 col-md-6 col-xs-12"> 
                    <div class="card mb-3">
                        <img class="card-img-top" src="{{ $post->image }}" alt="Card image cap">
                        <div class="card-body">
                            <h2 class="card-title">{{ $post->title }}</h2>
                            <p class="card-text">{{ $post->body }}</p>
                            <p class="card-text"><small class="text-muted">by {{ $post->author }}</small></p>

                            <form action="{{route('posts.destroy', $post)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger float-right ">Delete</button>
                            </form>

                            <a href="{{route('posts.edit', $post)}}" class="btn btn-info float-right mr-3">Edit</a>
                            <a href="{{route('posts.show', $post)}}" class="btn btn-success float-right mr-3">Show</a>
                            
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    </div>

@endsection