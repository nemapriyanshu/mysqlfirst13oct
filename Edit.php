<?php

include("connection.php");
$sel = mysqli_query($conn, "select * from data");

$arr=mysqli_fetch_assoc($sel);

/*Not use of this much*/
$a1=$arr['Email'];
$a2 =$arr['FirstName'];
$a3=$arr['Lastname'];
$a4=$arr['Age'];
$a5=$arr['City'];
$a6=$arr['Gender'];
$a7=$arr['Qualification'];
$a8=$arr['percentage'];

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

$id=$_GET['del'];

if(mysqli_query($conn,"update data set email='$email',
firstname='$fname',
lastname='$lname',
age='$age',
city='$city',
gender='$gender',
qualification='$qual',
percentage='$percentage'
"))
{
    header("Location:index.php");
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
        <h1 class="text-warning display-3 jumbotron">Edit Details</h1>

        <form class="row " method="POST">

            <div class="col-12 p-2">
                <input type="email" name="email" class="form-control form-control-lg" placeholder="Enter email ID" value="<?php echo $a1; ?>">
            </div>


            <div class="col-6 p-2">
                <input type="text" name="fname" class="form-control" placeholder="First Name" value="<?php echo $a2; ?>">
            </div>


            <div class="col-6 p-2">
                <input type="text" name="lname" class="form-control" placeholder="Last Name" value="<?php echo $a3; ?>">
            </div>


            <div class="col-6 p-2">
                <input type="text" name="age" class="form-control" placeholder="Age" value="<?php echo $a4; ?>">
            </div>


            <div class="col-6 p-2">
                <input type="text" name="city" class="form-control" placeholder="City" value="<?php echo $a5; ?>">
            </div>


            <div class="col-4 p-2 ">
                <div class="col form-control h6">Gender   &nbsp; &nbsp;
                
                Male &nbsp; <input type="radio" name="gender" checked=<?php if($arr['Gender'] = "Male") { echo "true"; }?>  value="Male" > &nbsp; &nbsp; &nbsp; &nbsp;
                Female  &nbsp; <input type="radio" name="gender" checked=<?php if($arr['Gender'] = "Female") { echo "true"; }?>  value="Female"> &nbsp; &nbsp;
                
                </div>
            </div>


            <div class="col-4 p-2">
                <input type="text" name="qual" class="form-control" placeholder="Qualification" value="<?php echo $a7; ?>">
            </div>


            <div class="col-4 p-2">
                <input type="text" name="percen" class="form-control" placeholder="Percentage" value="<?php echo $a8; ?>">
            </div>


<br><br><br>
            <input type="submit" class="btn btn-primary col-2 m-auto" value="Save Changes" name="sub" >

        </form>
    </div>



    


</body>

</html>