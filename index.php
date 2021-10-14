<?php
include("connection.php");
$sel = mysqli_query($conn, "select * from data");



    
if(!empty($_GET['del']))
{ $id=$_GET['del'];
    if(mysqli_query($conn,"delete from data where sno=$id"))
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
    <title>INDEX</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <br><br><br>

    <table class="table table-light container border">
        <tr>
            <td class='display-4' colspan="10" align="center"> User Data </td>
        </tr>

        <tr>
                <th scope='col' >S.no.</th>
                <th scope='col' >Email</th>
                <th scope='col'>FirstName</th>
                <th scope='col'>Lastname</th>
                <th scope='col'>Age</th>
                <th scope='col'>City</th>
                <th scope='col'>Gender</th>
                <th scope='col'>Qualification</th>
                <th scope='col'>Percentage</th>
                <th scope='col'>Action</th>
        </tr>


    <?php
            if(mysqli_num_rows($sel)>0){
                $n=1;
            while($arr=mysqli_fetch_assoc($sel))
            {
                ?>
            <tr>
                <th scope='col'><?php echo $n; ?></th>
                <td><?php echo $arr['Email']; ?></td>
                <td><?php echo $arr['FirstName']; ?></td>
                <td><?php echo $arr['Lastname']; ?></td>
                <td><?php echo $arr['Age']; ?></td>
                <td><?php echo $arr['City']; ?></td>
                <td><?php echo $arr['Gender']; ?></td>
                <td><?php echo $arr['Qualification']; ?></td>
                <td><?php echo $arr['percentage']; ?></td>
                <td>
                   <a href="Edit.php?del='<?php echo $arr['sno'] ;?>'"  class="btn-sm btn-warning"  >Edit</a>
                   <a href="?del='<?php echo $arr['sno'] ;?>'"  class="btn-sm btn-danger"  >delete</a>
                </td>
            </tr>

            <?php
            $n+=1;
            }
        }
            else
            {
                ?>
                            <tr><td colspan="10" class="h4 text-center text-primary">NO Data Found</td></tr>
                <?php
            }
        
    ?>

    </table>

    <div class="container">
        <a href="add.php" class="m-auto btn btn-danger" >Add Detail</a>
    </div>


</body>

</html>