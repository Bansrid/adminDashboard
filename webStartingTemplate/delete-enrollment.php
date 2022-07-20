<?php
require_once('logics/dbconnection.php');
$sqldeletestudent=mysqli_query($conn,"DELETE FROM enrollment WHERE no="'.$_GET['id'].'"");
if($sqldeletestudent)
{
    echo "user records deleted";
    header('location:students.php');
}
else
{
    echo "Error occured"
}
?>