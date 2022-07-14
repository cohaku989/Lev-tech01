<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>
    <body>
        <h1 class="title">
            Blog Name
        </h1>
        <form action="/posts" method="POST">
            {{ csrf_field() }}
            
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="post[title]" placeholder="タイトル"/>
            </div>
            
            <div class="Body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="ここに本文"></textarea>
            </div>
            
            <input type="submit" value="store"/>
            
        </form>
        
        <div class="footer">
            [<a href="/">戻る</a>]
        </div>
        
    </body>
</html>
