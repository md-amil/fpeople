@extends('layouts.web')
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   <div class="show-post">
                       <h3 class="title">{{$post->title}}</h3>
                       <div class="author-img"><img src="img" alt=""></div>
                       <div class="author-name">{{ $post->user->name }}
                            <div><time class="text-muted">{{ $post->created_at->format('M d, Y') }}</time></div>
                       </div>
                       <div class="description"><p>{{$post->post}}</p></div>
                        @if($post->comments->count() > 0)
                        <div class="card">
                            <div class="card-body">
                                @foreach($post->comments as $comment)
                                <div class="comment-sec">
                                    <div class="user">{{ $comment->user->name }}:</div>
                                    <div class="comment">{{ $comment->comment }}
                                      <hr />
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif
                   </div>
                </div>
            </div>
        </div>
    @endsection