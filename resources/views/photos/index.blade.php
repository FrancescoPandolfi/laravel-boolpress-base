@extends('layouts.layout')

@section('content')

    @if (session('delete'))
        <div class="alert alert-success">
            {{ session('delete') }}
        </div>
    @endif 

    <div class="container">
        <div class="row">
                @foreach ($photos as $photo)
                <div class="col-lg-4 col-md-6 col-xs-12"> 
                    <div class="card mb-3">
                        <a href="{{route('photos.show', $photo)}}"><img class="card-img-top" src="{{ $photo->image_path }}" alt="Card image cap"></a>
                        <div class="card-body">
                            <p class="card-text"><small class="text-muted">by {{ $photo->user->name }}</small></p>

                            {{-- SHOW BUTTON --}}
                            <a href="{{route('photos.show', $photo)}}" class="btn btn-dark float-right mr-3">Show</a>
                            
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    </div>

@endsection