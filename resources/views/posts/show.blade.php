<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">
            {{ $post->title }}
            <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
        </h1>
        <form action="/posts/{{ $post->id }}" id="form_delete" method="post">
            {{ csrf_field() }}
            {{ method_field('delete') }}
            <input type="submit" style="display:none">
            <p class='delete'>[<span onclick="return deletePost(this);">delete</span>]</p>
        </form>
        <div class="content">
            <div class="content__post">
                <h3>本文</h3>
                <p>{{ $post->body }}</p>  
            </div>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        <script>
        function deletePost(e) {
        'use script';
        if(confirm('削除後再度復元することはできません。\n削除しますか？')) {
            document.getElementById('form_delete').submit();
            }
        }
        </script>
    </body>
</html>