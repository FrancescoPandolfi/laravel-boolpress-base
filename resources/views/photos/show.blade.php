@extends('layouts.layout')

@section('content')
        
    <div class="container">
        <div class="row">
            <div class="col-12">  

                <div class="card mb-3">
                    <img class="card-img-top" src="{{ $photo->image_path }}" alt="">
                    <div class="card-body">
                         <p class="card-text"><small class="text-muted">by {{ $photo->user->name }}</small></p>

                         
                         {{-- DELETE BUTTON --}}
                         {{-- <form action="{{route('photos.destroy', $post)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger float-right ">Delete</button>
                        </form> --}}
                        
                        {{-- EDIT BUTTON --}}
                        {{-- <a href="{{route('posts.edit', $post)}}" class="btn btn-warning float-right mr-3">Edit</a> --}}
                    
                    </div>
                </div>

                </div>
        </div>
    </div>

@endsection