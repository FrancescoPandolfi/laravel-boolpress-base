@extends('layouts.layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">

            <h1>Add new post</h1>

        <form method="POST" action="{{route('posts.store')}}">
                @csrf
        
                <div class="form-group">
                    <label for="title">Title</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}">
                    @error('title')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror

                </div>

                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" name="author" class="form-control @error('author') is-invalid @enderror" value="{{old('author')}}">
                    @error('author')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control @error('body') is-invalid @enderror" name="body" rows="5">{{old('body')}}</textarea>
                @error('body')
                    <small class="form-text text-danger">{{$message}}</small>
                @enderror
                </div>

                <div class="form-group">
                    <label for="image">Image path</label>
                    <input type="text" name="image" class="form-control @error('image') is-invalid @enderror" value="{{old('image')}}">
                    @error('image')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" value="{{old('slug')}}">
                    @error('slug')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Send</button>

            </form>

        </div>
    </div>
</div>

@endsection