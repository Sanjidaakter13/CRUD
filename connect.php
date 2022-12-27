<?php
$connection=new mysqli('localhost','root','','crudoperation');
if(!$connection)
//{echo "Connection successful";}else
{
    die(mysqli_error($connection));
}
?>