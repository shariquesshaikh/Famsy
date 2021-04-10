<?php

session_start();

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <!-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
    <title>SEM FIVE</title>
  </head>
  <body style="background-image: url(https://66.media.tumblr.com/85beae914c6e1ca93ffae71136dbb0e8/tumblr_mj3qc827tt1qjndhyo1_400.gif);">

    <?php
      if($_SESSION['name']!=""){
        if(isset($_POST['logout'])){
        header("Location:indexlogout.php");
        }

      }else{

        header("Location:../../SignInStudent.php");

      }



     ?>


<div class="" style="margin-top:7%;">

<div class="" align="center">
<form class=""  method="post">
  <h4><input type="submit" style="width:200px;" name="logout"  class="btn btn-outline-danger" value="Log Out"></h4> <br>
</form>
</div>

<div class="jumbotron container" align="center">
    <a class="btn btn-primary" style="font-size:40px;" href="..\ComputerTeacher.html">Know About Your Teachers</a>
</div>

<div class="jumbotron container" align="center">
  <a class="btn btn-primary" style="font-size:40px;" href="student.html">Student Section</a>
</div>

<div class="jumbotron container" align="center">
  <a class="btn btn-primary" style="font-size:40px;" href="chat/">Chat With Classmates</a>
</div>

</div>

  </body>
</html>
