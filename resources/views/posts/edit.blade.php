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
            編集画面
        </h1>
        <form action='/posts/{{ $post->id }}' method="POST">
            {{ csrf_field() }}
            @method('PUT')
            
            <div class="content__title">
                <h2>Title</h2>
                <input type="text" name="post[title]" value="{{ $post->title }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            
            <div class="content__body">
                <h2>Body</h2>
                <textarea name="post[body]">{{ $post->body }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            
            <input type="submit" value="Update"/>
            
        </form>
        
        <div class="footer">
            [<a href="/posts/{{ $post->id }}">戻る</a>]
        </div>
        
    </body>
</html>
