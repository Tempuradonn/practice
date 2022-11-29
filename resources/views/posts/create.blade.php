<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body class = "antialiased">
        <h1>Blog Name</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class = "title">
                <h2>Title</h2>
                <input type="text" name=post[title] placeholder="たいとる">
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="otukarei"></textarea>
            </div>
            
            <input type="submit" value="store">
        </form>
            <div class='footer'>
                <a href ="/">modor></a>
            </div>
        </body>
</html>