@extends('layouts.web')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2">
            
        </div>
        <div class="col-md-8">
            <div class="div-post">
                <h1>This is the part of blogs</h1>
                <h3>This is the title of the posts</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
        <div class="col-md-2">
            
        </div>
    </div>
</div>














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