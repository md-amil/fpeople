<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css" />
    <link rel="stylesheet" href="http://beeknock.com/tools/bee-icon/beeicon-font.css" />
    <link rel="stylesheet" type="text/css" href="/css/main.css" />
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
                                <div class="login">
                                    <span class="bee-icon-arrow-square-right-0"></span>
                                    <a href="/login" title="">login</a>
                                </div>
                            </li>
                            <li>
                                <div class="register">
                                    <span class="user-icon bee-icon-stamp"></span>
                                    <a href="/register" title="">Registerd</a>
                                </div>
                            </li>
{{--                             <li>    
                                <span class="bee-icon-arrow-square-left-o"></span>
                                <a href="../lougout.php" title="">lougout</a>
                            </li> --}}
                        </ul>
                        <ul class="nav navbar-nav">  
                            <li class="active"><a href="../index.php" title="">Home</a></li>
                            <li><a href="../forms/submit_form.php" title="">Submit</a></li>
                            <li><a href="/posts" title="">blogs</a></li>
                            <li><a href="" title="">contacts</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    <script src="/js/jquery.min.css"></script>
    <script src="/js/app.js"></script>
    <script src="/js/handlebars-v4.1.1.js"></script>
    <script>
        $('#btn-write-comment').click(function(e) {
            e.preventDefault();
            $('#write-comment').slideToggle();
        })
    </script>
     @yield('scripts')
</body>
</html>
