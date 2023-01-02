<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from `crud` where id=$id";
$result=mysqli_query($connection,$sql);
$row=mysqli_fetch_assoc($result);
    $uid=$row['id'];
    $uname=$row['name'];
    $uemail=$row['email'];
    $umobile=$row['mobile'];
    $upassword=$row['password'];
if(isset($_POST['sub'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $sql="update `crud` set id=$id, name='$name',email='$email', mobile='$mobile',password='$password'
    where id=$id";
    $result=mysqli_query($connection,$sql);
    if($result){
        //echo "Updated successfully";
        header("location:read.php");
    }else{
        die(mysqli_error($connection));
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <form method="post">
        <div style="background-color:cornsilk" class="container my-5">
            <div class="mb-3">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputPassword1" value="<?Php echo $uname?>">
                </div>
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1"  value="<?Php echo $uemail?>"
                    aria-describedby="emailHelp">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mobile</label>
                    <input type="number" name="mobile" class="form-control" id="exampleInputPassword1"  value="<?Php echo $umobile?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1"  value="<?Php echo $upassword?>">
                </div>
                <button type="submit" name="sub" class="btn btn-primary">Update</button>
    </form>
    </div>
</body>

</html>