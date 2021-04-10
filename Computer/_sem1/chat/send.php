<?php
session_start();

include 'dbh.php';
$msg = $_POST['msg'];
$roll = $_SESSION['roll'];

if($msg!="")
{
   $q = "INSERT INTO comps_chat(message,rollno) values('$msg','$roll')";

   if(mysqli_query($connect,$q))
   {
     // echo "<script type='text/javascript'>alert('Success');</script>";
     header('Location:home.php');
   }else {
     echo $q;
   }

}else {
header('Location:home.php');
}


 ?>
