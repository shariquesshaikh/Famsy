<?php

  session_start();
  include 'dbh.php';


  $rollno = $_POST['rollno'];
  $pass = $_POST['password'];

  $q = "SELECT * FROM comp_student where rollno like '31190__' AND password='$pass'";
  $result = $connect->query($q);

  if(!$row=$result->fetch_assoc())
  {
    echo "<script type='text/javascript'>alert('Invalid credentials');</script>";
    header('Location:index.php');
  }
  else{
      $_SESSION['roll'] = $_POST['rollno'];
      header('Location:home.php');
  }

?>
