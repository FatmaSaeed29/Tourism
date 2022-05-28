<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="shortcut icon" href="images/TheLogo.ico" type="image/x-icon">
    <title>Book</title>
</head>
<body>
<form class="book" method="post" action="book">
    @csrf
    <div class="contain1 container">
        <h3 class="mx-auto text-primary my-4 text-center mt-3">Booking Form</h3>

    
        <div class="form-group mt-5">
            <label for="exampleInputEmail1" class="text-info font-weight-bold">Enter Name</label>
            <input type="text" class="form-control" id="exampleInputText" aria-describedby="emailHelp" placeholder="Enter Name">
        </div>
            <form class="form-group mt-5 "  >
                @csrf
                <label class="label1">Determine Whether The Travel Is Inside Or Outside</label>
                <div>
                    <input type="radio" id="exampleRadios1" name="exampleRadios"  value="option1" class="input1">
                    <label for="exampleRadios1">Inside</label>
                    <input type="radio" id="exampleRadios2" name="exampleRadios" value="option2" class="input2">
                    <label for="exampleRadios2">Outside</label>
                </div>
            </form>
            <div class="form-group mt-5">
                <label for="exampleInputEmail1" class="text-info font-weight-bold">Determine The Place Of Travel</label>
                <input type="text" class="form-control" id="exampleInputText"  placeholder="Enter The Place">
            </div>
            <div class="form-group mt-5">
                <label for="exampleInputEmail1" class="text-info font-weight-bold">Determine The Date And Time Of Travel</label>
                <input type="datetime-local" class="form-control" id="exampleInputText"  placeholder=" Enter The Date And Time">
            </div>
            <div class="form-group mt-5">
                <label for="exampleInputEmail1" class="text-info font-weight-bold">Determine The Number Of Passengers</label>
                <input type="number" class="form-control" id="exampleInputText"  placeholder=" Enter The Number Of Passengers">
            </div>
            <div class="form-group mt-5">
                <label for="exampleInputEmail1" class="text-info font-weight-bold">Determine The Class Of The Travel</label>
                <select class="custom-select last Gender" id="inputGroupSelect01"> 
                    <option selected>Bussines Class</option> 
                    <option value="1">VIP Class</option> 
                    <option value="2">Economy Class</option> 
                </select>
                <label class="label1">Determine The Services</label>
                <input type="text" class="form-control" id="exampleInputText"  placeholder="Enter The Services You Want">
            </div>
            <div class="btn-box"> 
            <button type="button" class="btn btn-warning btn-lg text-uppercase font-weight-bold" ><div><a  href='/success' target="blank">Submit</a></div></button>
            </div>
</form>
<script src="js/jquery-3.5.1.min.js"></script> 
    <script src="js/bootstrap.min.js"></script> 
    <script src="js/popper.min.js"></script> 
    <script src="js/script.js"></script> 
</body>
</html>