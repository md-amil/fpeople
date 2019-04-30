<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css" />
    <link rel="stylesheet" href="http://beeknock.com/tools/bee-icon/beeicon-font.css" />
    <link rel="stylesheet" type="text/css" href="/css/main.css" />
    <style>
        body {
            font-size: 14px;
        }
    </style>
    <title>Posts</title>
</head>
<body>
    <header id="header" class="">
        <div class="main-nav">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <span class="india bee-icon-india-map"></span>
                    </div> 
                    <div class="col-md-10">
                        <ul class="icon">
                            <li>
                            @if(auth()->check())
                             <div id="some" class="auth-name">{{auth()->user()->name}}</div>
                                <div class="h-dropdown" id="toggle">
                                    <div><a href="/profile">profile</a></div>
                                    <div><a href="/logout">logout</a></div>
                                </div>
                            @else
                                <a href="/login" title="" class="a">Login & Register</a>
                            @endif
                                
                            </li>
                       
                        </ul>
                        <ul class="nav navbar-nav">  
                            <li class="active"><a href="../index.php" title="">Home</a></li>
                            @if(auth()->user())
                                <li><a href="/posts/create" title="">create post</a></li>
                            @endif
                            <li><a href="/posts" title="">blogs</a></li>
                            <li><a href="" title="">contacts</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
    <script src="/js/app.js"></script>
    <script src="/js/handlebars-v4.1.1.js"></script>
    <script>
        $('#btn-write-comment').click(function(e) {
            e.preventDefault();
            $('#write-comment').slideToggle();
        });

        (function() {
            $('.like-button').click(function(e) {
                e.preventDefault();
                $(this).toggleClass('liked');
            });
        })();
        $("#some").on("click", function() {
            console.log("skdfjls")
            $("#toggle").slideToggle()
        })
    </script>
     @yield('scripts')
</body>
</html>
