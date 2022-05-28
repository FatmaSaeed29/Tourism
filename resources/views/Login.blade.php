<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/all.min.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style1.css">
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <title>Login Form </title>
</head>
<body>
    <form method="post" action="{{ route('login') }}">
        @csrf
        <div class="contain1 container">
            
            <h3 class="mx-auto text-primary my-4 text-center mt-3">Login Form</h3>
            @if(session('erorr')) <p class ='erorr'>{{session('erorr')}}</p>@endif    
            <div class="form-group mt-5">
                <label for="exampleInputEmail1" class="text-info font-weight-bold">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
            </div>

            <div class="form-group mt-5">
                <label for="exampleInputPassword1" class="text-info font-weight-bold">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>

            <div class="form-check mt-4">
                <input type="checkbox" class="form-check-input " id="exampleCheck1">
                <label class="form-check-label text-info font-weight-bold " for="exampleCheck1">Remember Me</label>
            </div>

            <div class="btn-box">
             <a href="/">     
            <input type="submit"  class="btn font-weight-bold text-white mt-2 mb-3 btn-big register" 
             value="Log In" style="width:200px; background-color:#73a7d1 !important; margin-left: 100px;"> </a>
            </div>
            
            <div class="TheEnd text-center ">
                <h4>
                    Don't Have An Account? <a href="{{ route('ShowRegister') }}">Sign Up</a>
                </h4>
            </div>

        </div>
    </form>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>