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
              </div>
           </div>    
        @endforeach
        </div>
    </div>
@endsection
<<<<<<< HEAD
=======
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
>>>>>>> 69f0fabbafcdc9a1664db03d31ad8ef83710bfae
