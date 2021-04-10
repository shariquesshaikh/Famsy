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

        <style media="screen">
          .One{
            background-image: url(https://66.media.tumblr.com/85beae914c6e1ca93ffae71136dbb0e8/tumblr_mj3qc827tt1qjndhyo1_400.gif);
          }

          input{
            border-radius: 5px;
          }
        </style>

    </head>
    <body class="One">

      <?php
        include 'C:\xampp\htdocs\TeacherDetails\connection.php';

        if($_SESSION['name']!=""){
        if(isset($_POST['A'])){

           header("Location:upload.php");

          }elseif(isset($_POST['B'])) {
              $semester = $_POST['sem'];

              if($semester!='')
              {
                if($semester=='I' || $semester==1 || strtolower($semester)=='one')
                {
                  header("Location:../_sem1/chat/teacheraccess.php");
                }
                if($semester=='III' || $semester==3 || strtolower($semester)=='three')
                {
                  header("Location:../_sem3/chat/teacheraccess.php");
                }
                if($semester=='V' || $semester==5 || strtolower($semester)=='five')
                {
                  header("Location:../_sem5/chat/teacheraccess.php");
                }
              }else{
              header("Location:own.php");
              }
        }
      }else{
        header("Location:../../SignInTeacher.php");
      }

       ?>



   <div class="container" align="center" style="margin-top:7%;">
    <br>



    <br><br>

    <div class="container" align="center">
    <form class="" action="own.php" method="post">
      <label  for=""><input type="submit" class="btn btn-primary" name="A" style="height:60px;width:280px;font-size :30px;border-radius:20px;" value=" Upload Files"> </label> <br><br>

    </form>
    </div>

  <div class="container"  align="center">
      <form class="btn btn-secondary" style="height:250px;width:300px;border-radius:20px;" action="own.php" method="post"> <br>
        <label for=""><span style="font-size:20px;">Enter the semester of interest</span> <br> <br>  <input style="width:100px" type="text" name="sem" value="" placeholder="I, II, III, etc."> </label> <br><br>
        <label  for=""><input type="submit" class="btn btn-primary" name="B" style="height:50px;width:200px;font-size:20px;border-radius:20px;" value=" Enter Chat Section"> </label> <br><br>
      </form>
  </div> <br>

  <div class="" align="center">
    <h4><a href="ownlogout.php" style="width:200px;" class="btn btn-danger"  >Log Out</a> </h4>
  </div>




  </div>

    </body>
  </html>
