@extends('layouts.layout')

@section('content')
        
    <div class="container">
        <div class="row">
            TEST
                {{-- @foreach ($articles as $article)
                <div class="col-lg-4 col-md-6 col-xs-12"> 
                    <div class="card mb-3">
                        <img class="card-img-top" src="{{ $article->img }}" alt="Card image cap">
                        <div class="card-body">
                            <h2 class="card-title">{{ $article->title }}</h2>
                            <p class="card-text">{{ $article->body }}</p>
                            <p class="card-text"><small class="text-muted">by {{ $article->author }}</small></p>

                            <form action="{{route('articles.destroy', $article)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger float-right ">Delete</button>
                            </form>

                            <a href="{{route('articles.edit', $article)}}" class="btn btn-info float-right mr-3">Edit</a>
                            <a href="{{route('articles.show', $article)}}" class="btn btn-success float-right mr-3">Show</a>
                            
                        </div>
                    </div>
                </div>
                @endforeach --}}
        </div>
    </div>

@endsection