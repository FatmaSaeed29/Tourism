<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="/all.min.css"> 
    <link rel="stylesheet" href="/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="/css/style.css"> 
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon"> 
    
    <title>Registeration Form</title> 
</head> 
<body id="home" style="background-image: url(images/manar.jpg);background-repeat: no-repeat; background-size: cover;height: 100vh;overflow: hidden;" > 
     
    <div class="contain container"> 
        <form method="post" action="/register"> 

            @csrf
            
             <div class="one " id="one"> 
                 @if(session('erorr')) <p class ='erorr'>{{session('erorr')}}</p>@endif      
                <h3 class="mx-auto text-primary my-4 text-center">Sign up</h3> 
                <div class="form-group form2"> 
                
                    <label for="exampleInputName" class="text-info font-weight-bold name1 namee1">Name</label> 
                    <input required type="text" class="form-control first" id="exampleInputName" name="name" value="{{old('name')}}" 
                    aria-describedby="emailHelp" placeholder="Enter Name">
                     @error('name') <p class= "error"style="color:red">{{$message}} </p> @enderror
                </div>
                
                <div class="form-group"> 
                    <label for="exampleInputEmail1" class="text-info font-weight-bold">Email</label> 
                    <input required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email" name="email" value="{{old('email')}}" > 
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    @error('email') <p class= "error"style="color:red">{{$message}} </p> @enderror
                </div> 
                <div class="form-group"> 
                    <label for="exampleInputPassword1" class="text-info font-weight-bold">Password</label> 
                    <input required type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password"> 
                    @error('password') <p class= "error"style="color:red">{{$message}} </p> @enderror
                </div> 
                <div class="form-group"> 
                <label for="exampleInputPassword1" class="text-info font-weight-bold">Confirm Password</label> 
                <input required type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password" name="password_confirmation"> 
                </div> 
                <div class="btn-box"> 
                    <input type="submit"  class="btn font-weight-bold text-white mt-2 mb-3 btn-big register"  value="Register" style="width:200px"> 
                </div> 
            </div> 
        </form> 
     </div>      
 
    <script src="js/jquery-3.5.1.min.js"></script> 
    <script src="js/bootstrap.min.js"></script> 
    <script src="js/popper.min.js"></script> 
    <script src="js/script.js"></script> 
</body> 
</html> 