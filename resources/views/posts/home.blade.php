@extends('layouts.web')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($posts as $post)
            <div class="col-md-8 offset-md-2">
                <div class="home-post">
                    <h4><strong>{{ $post->id }}: </strong>{{$post->title}}</h4>
                    <div class="text-left">{{ $post->user->name }} <time class="text-muted">{{ $post->created_at->format('M d, Y') }}</time></div>
                    <div class="excerpt">
                        <p>{{ $post->excerpt }}</p>
                        <form action="">
                            <label for="comment"></label>
                            <input type="text" name="comment" placeholder="write a comment...">
                            <input class="btn btn-primary" type="submit" value="comment">
                        </form>
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
        @endforeach
        </div>
    </div>
@endsection