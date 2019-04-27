@extends('layouts.web')

@section('content')
    <div id="main-content"></div>
@endsection

@section('scripts')
<script>
    $.ajax({
        url: "/api/posts",
        success: function(result) {
            result.forEach(function(element) {
                $('#main-content').append(showPost(element));
            });
        }});
      function showPost(post) {
        return `
        <div> ${post.title} </div>
        <div>${post.post}</div>
        <div> ${post.id}</div>
        `
      }
    </script>
@endsection
