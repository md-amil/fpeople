@extends('layouts.web')
@section('data')
  
@endsection
@section('content')
    
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <div id="index-content">
               
            </div>
          </div>
        </div>
      </div>

@endsection
@section('scripts')
<script type="text/html" id="tpl-blog">
   @include('posts.blog-hbs')
</script>
  <script>
    var tplBlog = Handlebars.compile($('#tpl-blog').html());
     $.ajax({
       url:"/api/posts",
       success:function(result) {
         console.log(result)
         console.log(result[0].excerpt)
         $("#index-content").html(tplBlog({posts : result }))
       }})
  </script>
@endsection

