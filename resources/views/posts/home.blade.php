@extends('layouts.web')

@section('content')
jklejfgfjlk
   {{--  <div class="container">
        <div class="row">
            @foreach($posts as $post)
            <div class="col-md-8 offset-md-2">
                <div class="home-post">
                    <h4><strong>{{ $post->id }}: </strong>{{$post->title}}</h4>
                    <div class="text-left">{{ $post->user->name }} <time class="text-muted">{{ $post->created_at->format('M d, Y') }}</time></div>
                    <div class="excerpt">
                        <p>{{ $post->excerpt }}</p>
                    </div>
                    @if($post->comments->count() > 0)
                    <div class="card">
                        <div class="card-body">
                            @foreach($post->comments as $comment)
                                <small class="text-muted text-left">{{ $comment->user->name }}</small>
                                <div>{{ $comment->comment }}
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        @endforeach --}}

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div id="main-content"></div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<script type="text/html" id="tpl-posts">
    @include('posts.posts-hbs')
</script>
<script>
    console.log("amil");
    var tplPosts = Handlebars.compile($('#tpl-posts').html());
    $.ajax({
        url: "/api/posts",
        success: function(result) {
            console.log(result)
            console.log(result[0].comments[0])
            $('#main-content').html(tplPosts({ posts: result }));
        }});
 </script>

@endsection
