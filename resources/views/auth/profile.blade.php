@extends('layouts.web')

@section('content')
<style>
    .profile-img {
        position: relative;
        border-radius: 90%;
        overflow: hidden;
    }
    .profile-img img {
        object-fit: cover;
    }
    .profile-img .profile-img-action {
        position: absolute;
        bottom: 0;
        left: 0;right: 0;
        height: 0;
        background: rgba(0,0,0,.6);
        transition: all .3s;
        display: flex;
        justify-content: space-around;
        font-size: 3em;
    }

    .profile-img:hover .profile-img-action {
        height: 45%;
    }

    .profile-img .close-icon, .profile-img .choose-file,  .profile-img a  {
        color: #fff;
        width: 80%;
    }

</style>
<div class="container">
    <div class="row justify-content-center">
            <div class="profile-header-container">
                <div class="rank-label-container text-center">
                    <span class="label label-default rank-label">{{$user->name}}</span>
                </div>
                <div class="profile-img">
                    <img width="300" height="300" id="avatar-img" src="{{ $user->avatar }}"  />
                    <div class="row profile-img-action">
                        <div>
                            <label class="choose-file">
                                <input type="file" style="display: none" id="image-selector" name="image">
                                <i class="glyphicon glyphicon-camera"></i>
                            </label>
                        </div>
                        <div>
                            <a href="#">&times;</a>
                        </div>
                    </div>
                    <!-- badge -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    $('#image-selector').change(function() {
        if(!this.files.length) return;
        var form = new FormData();
        form.append('avatar', this.files[0]);
        sendForm(form);
    });

    function sendForm(form) {
        $.ajax({
            url: '/profile/avatar?_token={{csrf_token()}}',
            method: 'post',
            processData: false,
            contentType: false,
            data: form,
            success: function(res) {
                console.log(res);
                $('#avatar-img').attr('src', res.avatar);
            }
        });
    }
</script>
@endsection