@extends('layouts.web')
@section('content')
<form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="form-controle">
            <div class="form-group">
                <label for="title">title</label>
                <input type="text" name="title" required>
            </div>
            <div class="form-group">
                <label for="exerpt">exerpt</label>
                <input type="text" name="exerpt" required>
            </div>
            <div class="form-group">
                <label for="description">description</label>
                <input type="text" name="description">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-default" value="create"> 
            </div>
        </div>
    </form>
@endsection