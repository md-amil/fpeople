@extends('layouts.web')
@section('data')
    <div class="container">
        <div class="blog-div">
            <h1>This is simple blog posts</h1>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Perferendis cum nostrum optio vitae assumenda maiores placeat, beatae tempora pariatur id temporibus eum necessitatibus totam minus, voluptatem a quae. Dignissimos, quisquam?
        </div>
    </div>

@endsection





@section('content')

<div class="container">
    <a href="{{route('posts.create')}}" class="btn btn-default">create post</a>
    @foreach($posts as $post)
        <div>
            <div><strong>{{ $post->id }}: <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></strong></div>
            <div>{{ $post->excerpt }}</div>
            <div class="text-right">{{ $post->user->name }} <time class="text-muted">{{ $post->created_at->format('M d, Y') }}</time></div>
            @if($post->comments->count() > 0)
            <div class="card">
                <div class="card-body">
                    @foreach($post->comments as $comment)
                        <div>{{ $comment->comment }}
                            <small class="text-muted text-right">{{ $comment->user->name }}</small>
                        </div>
                    @endforeach
                </div>
            </div>
            @endif
            <hr class="hr" />
        </div>
    @endforeach
    {{ $posts->render() }}
</div>
@endsection