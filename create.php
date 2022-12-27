<?php
include 'connect.php';
if(isset($_POST['sub'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $sql="insert into `crud`(name,email,mobile,password)
    values('$name','$email','$mobile','$password')";
    $result=mysqli_query($connection,$sql);
    if($result){
        echo "Data inserted successfully";
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
                    <input type="text" name="name" class="form-control" id="exampleInputPassword1">
                </div>
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mobile</label>
                    <input type="number" name="mobile" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" name="sub" class="btn btn-primary">Submit</button>
    </form>
    </div>
</body>

</html>