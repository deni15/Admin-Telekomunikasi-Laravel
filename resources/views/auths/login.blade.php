<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{asset('/assets/admin/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/admin/vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/admin/vendor/linearicons/style.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/admin/vendor/chartist/css/chartist-custom.css')}}">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('/assets/admin/css/main.css')}}">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="{{asset('/assets/admin/css/demo.css')}}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/assets/admin/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('/assets/admin/img/favicon.png')}}">
    <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
    <script>
        $('document').ready(function() {
            $("#submit").click(function() {
                $(".fa-spin").show();
                $("#hilang").hide();
            });

        })
    </script>
</head>

<body class="bg-primary">
    <!-- WRAPPER -->
    <div id="wrapper">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle">
                <div class="auth-box p-5">
                    <div class="left">
                        <div class="content">
                            <div class="header">
                                <div class="logo text-center"><img src="{{asset('/assets/img/logo/Logo_Selnet.jpg')}}" style="width: 190px;" alt=""></div>
                            </div>
                            @if (session('status'))
                            <div class="alert alert-danger">
                                {{ session('status') }}
                            </div>
                            @endif
                            <form class="form-auth-small" action="/postlogin" method="POST">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="signin-email" class="control-label sr-only">Username</label>
                                    <input name="username" type="text" value="{{old('username')}}" class="form-control @error('username') is-invalid @enderror" id="signin-email" placeholder="Username">
                                    @error('username')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="signin-password" class="control-label sr-only">Password</label>
                                    <input name="password" type="password" value="{{old('password')}}" class="form-control @error('password') is-invalid  @enderror" id="signin-password" placeholder="Password">
                                    @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group clearfix">
                                    <label class="fancy-checkbox element-left">
                                        <input name="remember" type="checkbox">
                                        <span style="color: gray;">Remember me</span>
                                    </label>
                                </div>
                                <button type="submit" id="submit" class="btn btn-primary btn-lg btn-block"><b id="hilang">LOGIN</b><i style="display: none;" class="fa fa-spinner fa-spin"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="right bg-primary">
                        <div class="overlay"><img src="{{asset('/assets/img/logo/tower.png')}}" style="width: 624px;height:450px" alt=""></div>
                        <div class="content text">
                            <h1 class="heading">Selamat Datang di Sistem Admin :)</h1>
                            <p>by Muhamad Deni</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>

    </head>
    <!-- END WRAPPER -->
</body>

</html>