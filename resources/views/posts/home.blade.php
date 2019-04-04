@extends('layouts.web')

@section('content')
<div class="container">
    <a  class="btn btn-primary" href="{{route('posts.index')}}">show all posts</a>
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
</div>
@endsection