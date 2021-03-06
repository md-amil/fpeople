
    @extends('layouts.web')
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   <div class="show-post" id="show-full-post">
                       <h3 class="title">{{$post->title}}</h3>
                       <div class="img-user-time">
                           <div class="author"></div>
                           <div class="author-name"><img height="50px" width="50px" style="border-radius:50%" src="{{$post->user->avatar}}" alt="avatar">{{ $post->user->name }}
                                <div><time class="text-muted"><small>{{ $post->created_at->format('M d, Y') }}</small></time></div>
                           </div>
                       </div>
                       <div class="description"><p>{{$post->post}}</p></div>
                       <div class="hr-like-upper"></div>
                       <div class="like-comment-share">
                       <div class="like-button" id="like_button"><a class="{{ $post->myVote() ? 'liked' : '' }}" data-post_id="{{$post->id}}"id="btn-add-like" href=""> <span id="like-count"></span> Like <span class="glyphicon glyphicon-thumbs-up"></span></a></div>
                           <div class="action text-center"><a id="btn-write-comment" href="">Comment</a><span class="glyphicon glyphicon-comment"></span></div>
                           <div class="share-button"><span class="glyphicon glyphicon-share-alt"></span>share</div>
                           <form method="POST" style="display: none" id="write-comment" action="/posts/{{$post->id}}/comments" class="text-right">
                                @csrf
                                <input type="hidden" name="post_id" value="{{$post->id}}">
                                <textarea name="comment" class="form-control" placeholder="Write your comment"></textarea>
                                <button type="submit" class="btn btn-primary">Post Comment</button>
                           </form>
                       </div>
                       <div class="hr-like-lower"></div>
                       <div id="comment-container"></div>
                   </div>
                </div>
            </div>
        </div>
<script type="text/handlerbar" id="comments-template">
  @include('posts.comments-tpl')
</script>
 
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
      });
    });
});
  var i = 0;


    $('#btn-add-like').on('click', function(e) { 
      e.preventDefault();
      $.ajax({
        url:'/posts/'+$(this).data('post_id')+'/like',
        success:function(res){
          console.log(res['vote_count']);
          $('#like-count').html(res['vote_count']);
          if(res['liked']==false){
            $('#btn-add-like').removeClass('liked');
          }else{
            $('#btn-add-like').addClass('liked');
          }
        }
      })
         
    });
       
   
  

</script>
@endsection