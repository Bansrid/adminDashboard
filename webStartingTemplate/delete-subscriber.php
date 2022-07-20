<?php
require_once('logics/dbconnection.php');
$sqldeletemessage=mysqli_query($conn,"DELETE FROM subscribers WHERE no="'.$_GET['id'].'"");
if($sqldeletemessage)
{
    echo "user records deleted";
    header('location:subcribers.php');
}
else
{
    echo "Error occured"
}
?>