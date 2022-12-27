<?php
include 'connect.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Read</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Actions</th>

                </tr>
            </thead>
            <tbody>
                <?php
                    $sql="select * from `crud`";
                    $result=mysqli_query($connection,$sql);
                    if($result){
                        while($row=mysqli_fetch_assoc($result)){
                            $id=$row['id'];
                            $name=$row['name'];
                            $email=$row['email'];
                            $mobile=$row['mobile'];
                            $password=$row['password'];
                            echo ' <tr>
                            <th scope="col">' .$id.'</th>
                            <td>'.$name.'</td>
                            <td>'.$email.'</td>
                            <td>'.$mobile.'</td>
                            <td> <button class="btn btn-primary"> <a href=""> update </a> </button> </td>
                            </tr>';
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>