<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="antialiased">
<div class="container m-0">
    <div class="col-sm-12 row">
        @foreach($posts as $post)
            <div class="card m-2 row" style="width: 18rem;">
                <img src="{{$post->img}}" class="card-img-top" alt="..." style="height: 238px;width: 262px;">
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p>{!! Str::limit($post->text, 20, ' ...') !!}</p>
                    <a href="{{route('show',['slug' => $post->slug])}}" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>
