<?php
include("connection.php");
if(isset($_POST['sub']))
{
    $email=$_POST['email'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $age =$_POST['age'];
    $city=$_POST['city'];
    $gender=$_POST['gender'];
    $qual=$_POST['qual'];
    $percentage=$_POST['percen'];

    if(mysqli_query($conn,"insert into data (email,firstname,lastname,age,city,gender,qualification,percentage)
    values('$email','$fname','$lname','$age','$city','$gender','$qual','$percentage')"))
    {
        // echo "Details Added";
        header("Location:index.php");
    }
    else{
        echo "Already Exist";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body >
    <div class="container m-5">
        <h1 class="text-warning display-3 jumbotron">Add Details</h1>

        <form class="row " method="POST">

            <div class="col-12 p-2">
                <input type="email" name="email" class="form-control form-control-lg" placeholder="Enter email ID">
            </div>


            <div class="col-6 p-2">
                <input type="text" name="fname" class="form-control" placeholder="First Name">
            </div>


            <div class="col-6 p-2">
                <input type="text" name="lname" class="form-control" placeholder="Last Name">
            </div>


            <div class="col-6 p-2">
                <input type="text" name="age" class="form-control" placeholder="Age">
            </div>


            <div class="col-6 p-2">
                <input type="text" name="city" class="form-control" placeholder="City">
            </div>


            <div class="col-4 p-2 ">
                <div class="col form-control h6">Gender   &nbsp; &nbsp;
                
                Male &nbsp; <input type="radio" name="gender" value="Male" class=""> &nbsp; &nbsp; &nbsp; &nbsp;
                Female  &nbsp; <input type="radio" name="gender" value="Female" class="" > &nbsp; &nbsp;
                
                </div>
            </div>


            <div class="col-4 p-2">
                <input type="text" name="qual" class="form-control" placeholder="Qualification">
            </div>


            <div class="col-4 p-2">
                <input type="text" name="percen" class="form-control" placeholder="Percentage">
            </div>


<br><br><br>
            <input type="submit" class="btn btn-primary col-2 m-auto" value="Add data" name="sub">

        </form>
    </div>



</body>

</html>