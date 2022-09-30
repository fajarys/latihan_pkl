<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{ asset('vendor/assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/assets/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/assets/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/assets/scss/style.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="bg-dark">


  <script src="{{ asset('vendor/assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
  <script src="{{ asset('vendor/assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('vendor/assets/js/plugins.js') }}"></script>
  <script src="{{ asset('vendor/assets/js/main.js') }}"></script>


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="{{ asset('vendor/images/logo.png') }}" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form action="" method="post"> 
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="email" class="form-control" placeholder="User Name">
                        </div>
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Agree the terms and policy
                            </label>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                        </br>
                        <div class="register-link m-t-15 text-center">
                        <br>
                            <p>Already have account ? <a href="{{ url('login') }}"> Sign in</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>
</html>