$('#btn-add-like').on('click', function(e) {
  $('#btn-add-like').on('click', function(e) {
    @extends('layouts.web')
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   <div class="show-post">
                       <h3 class="title">{{$post->title}}</h3>
                       <div class="img-user-time">
                           <div class="author-img"><img src="img" alt=""></div>
                           <div class="author-name">{{ $post->user->name }}
                                <div><time class="text-muted">{{ $post->created_at->format('M d, Y') }}</time></div>
                           </div>
                       </div>
                       <div class="description"><p>{{$post->post}}</p></div>
                       <div class="hr-like-upper"></div>
                       <div class="like-comment-share">
                          <form action="/posts/{post}/like" method="POST">
                            @csrf
                            <input type="hidden" name="post_id" value="{{$post->id}}">
                            <input type="submit" value="{{ $post->vote ? 'Unlike' : 'Like' }}">
                          </form>
                           <div class="like-button {{ $post->hasLike ? 'liked' : '' }}"><a id="btn-add-like" href="">Like <span class="glyphicon glyphicon-thumbs-up"></span></a></div>
                           <div class="action text-center"><a id="btn-write-comment" href="">Comment</a><span class="glyphicon glyphicon-comment"></span></div>
                          <div class="share-button"><span class="glyphicon glyphicon-share-alt"></span>share</div>
                       </div>
                        <div class="hr-like-lower"></div>
                       <div class="action text-right"><a id="btn-write-comment" href="">Comment</a></div>
                       <form method="POST" style="display: none" id="write-comment" action="/posts/{{$post->id}}/comments" class="text-right">
                            @csrf
                            <input type="hidden" name="post_id" value="{{$post->id}}">
                            <textarea name="comment" class="form-control" placeholder="Write your comment"></textarea>
                           <button type="submit" class="btn btn-primary">Post Comment</button>
                       </form>
                        <div id="comment-container"></div>
                   </div>
                </div>
            </div>
        </div>
<script type="text/handlerbar" id="comments-template">
  @include('posts.comments-tpl')
</script>
  
</template>
    @endsection

@section('scripts')
<script>
  (function() {
    var commentTemplate = Handlebars.compile($('#comments-template').html()),
      comments = {!!$post->comments()->latest()->with('user')->get()!!};
     function addComments() {
      commentsData = commentTemplate({comments: comments});
       $('#comment-container').html(commentsData);
    }

    addComments();

    $('#write-comment').submit(function(e) {
      e.preventDefault();
      var form = this;
      $.post($(this).attr('action'), $(this).serialize(), function(res) {
         comments.unshift(res);
         addComments();
         form.reset();
      })
    })

    $('btn-add-like').on('click',function(){
      $.ajax([
        url:'/post/like',
        method:'post',
        data:[post_id,user_id,]
      ])

    })
  })();
</script>
@endsection