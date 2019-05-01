 @extends('layouts.web')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Submit
                    </div>
                    <div class="card-body">
                        <form action="{{ route('posts.store') }}" method="POST">
                            @csrf
                            <div class="form-controle">
                                <div class="form-group">
                                    <input type="text" name="title" class="form-input" placeholder="Title" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="excerpt" class="form-input" placeholder="Excerpt" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="description" class="form-input" placeholder="Description">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn-submit" value="create"> 
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection