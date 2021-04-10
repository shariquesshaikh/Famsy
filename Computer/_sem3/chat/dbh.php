<?php

// Making Connection
$connect = mysqli_connect('localhost','root','');
if(!$connect)
{
  die("Error :". mysqli_error($connect));
}

//Selecting the target database
$select = mysqli_select_db($connect,'mhssce');
if(!$select)
{
  die("Error :". mysqli_error($connect));
}
 ?>
