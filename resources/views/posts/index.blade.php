@extends('layouts.web')
@section('data')
  
@endsection
@section('content')
    <div class="container">
        <div class="row">
            @foreach($posts as $post)
            <div class="col-md-8 offset-md-2">
                <div class="show-post">
                   <h3 class="title"><a href="{{route('posts.show',$post)}}" title="">{{$post->title}}</a></h3>
                   <div class="excerpt">
                        <p>{{ $post->excerpt }}</p>
                    </div>
                   <div class="img-user-time">
                       <div class="author-img"><img src="img" alt=""></div>
                       <div class="author-name">{{ $post->user->name }}
                            <div><time class="text-muted">{{ $post->created_at->format('M d, Y') }}</time></div>
                       </div>

                   </div>
                   
                   <div class="hr-like-upper"></div>
                   <div class="like-comment-share">
                       <div class="like-button {{ $post->hasLike ? 'liked' : '' }}"><a id="btn-add-like" href="">Like <span class="glyphicon glyphicon-thumbs-up"></span></a></div>
                       <div class="action text-center"><a id="btn-write-comment" href="">Comment</a><span class="glyphicon glyphicon-comment"></span></div>
                       <div class="share-button"><span class="glyphicon glyphicon-share-alt"></span>share</div>
                   </div>
                    <div class="hr-like-lower"></div>
                   <form method="POST" style="display: none" id="write-comment" action="/posts/{{$post->id}}/comments" class="text-right">
                        @csrf   
                        <input type="hidden" name="post_id" value="{{$post->id}}">
                        <textarea name="comment" class="form-control" placeholder="Write your comment"></textarea>
                       <button type="submit" class="btn btn-primary">Post Comment</button>
                   </form>
                    @if($post->comments->count() > 0)
                    <div class="card">
                        <div class="card-body">
                            @foreach($post->comments as $comment)
                                <small class="text-muted text-left">{{ $comment->user->name }}</small>
                                <div>{{ $comment->comment }}
                                </div>
                            @endforeach
                        </div>
                        <div>
                          
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        @endforeach
        </div>
    </div>
@endsection
@section('script')

<script>
   (function() {
    $('#btn-add-like').on('click', function(e) {
       e.preventDefault();
       console.log("lidsklfaj");
     });
   })();
</script>
@endsection