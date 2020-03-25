<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>BoolPress</title>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <nav class="navbar navbar-expand navbar-dark bg-dark mb-5">
        <a class="navbar-brand" href="/posts"> <h1>BoolPress</h1></a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
          {{-- <a class="nav-item nav-link" href="{{asset('articles/create')}}">Add new article</a> --}}
          <a href="{{asset('posts/create')}}"><button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Add new post</button>
          </a>
        </div>
        </div>
    </nav>

@yield('content')

</body>
</html>