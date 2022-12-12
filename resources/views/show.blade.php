<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <a href="">{{ $post->category->name }}</a>
        <h1 class= 'title'>
            {{$post->title}}
        </h1>
        <div class='content'>
            <div class='contetn_post'>
                <h3>honbun</h3>
                <p class='body'>{{ $post->body }}</p>
            </div>
        </div>
        <div class='footer'>
            <a href = "/">modoru</a>
        </div>
    </body>
</html>