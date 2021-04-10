<?php

  session_start();
  include 'dbh.php';


  $rollno = $_POST['rollno'];
  $pass = $_POST['password'];

  $q = "SELECT * FROM comp_student where rollno like '31180__' AND password='$pass'";
  $result = $connect->query($q);

  if(!$row=$result->fetch_assoc())
  {
    echo "<script type='text/javascript'>alert('Invalid credentials');</script>";
  }
  else{
      $_SESSION['roll'] = $_POST['rollno'];
      header('Location:home.php');
  }

?>
