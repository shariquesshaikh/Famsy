<?php
$x = session_start();
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head><meta charset="utf-8" >
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

  <!-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"> -->
  <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">

    <title>Home</title>
  </head>
  <body>

    <br><br>
    <div id="main" class=" jumbotron container">
      <form class="" action="logout.php"  method="post">
        <input type="submit" class="btn btn-secondary"  style="border:1px solid black;" name="logout" value="Log Out">
      </form> <br> <br>

      <h1 style="background:white;height:60px" align="center" >Hello <?php echo $_SESSION['roll'] ?>!  <sub style="font-size:20px;color:green;">status: online</sub></h1>


      <!-- Display -->
      <div class="output jumbotron" style="overflow-y:auto; height: 500px; background:white">

        <?php

        include 'dbh.php';
        if($_SESSION['roll']!=""){
        $sql = "SELECT * FROM comps_chat where rollno LIKE '31190__'";
        $result = $connect->query($sql);

        if($result->num_rows > 0){

          while($row= $result->fetch_assoc()){
            // echo "".$row["name"]. "" .$row["date"]. " <br>" ."  " .$row["msg"]. "<br>" ;
          // "<div style="color:red;">"  echo "<h1>" .. "</h1>"; "</div>"
            // echo "<br>";
            echo "<font style='background-color:#52d962;color:white; border-radius:10px; font-size:20px;'>" ."&nbsp;". $row["rollno"] ."&nbsp;". "</font>";
            echo "<br>";
            echo "<font style='background-color:#292942;color:white; border-radius:10px; font-size:20px;'>" ."&nbsp;". $row["date"] ."&nbsp;". "</font>";
            echo "<br>";
            echo "<font style='background-color:#292942;color:white;border-radius:7px; font-size:20px;'>" ."&nbsp;". $row["message"] ."&nbsp;". "</font>";


            // echo $row["name"] ."<br>(". $row[ "date"] .")". "<br>" .$row["msg"]. "<br>" ;
            echo "<br> <br> <br>";
          }

        }else{
          echo "0 results";
        }

        $connect->close();

      }else{
        header("Location:index.php");
      }

        ?>

      </div>



      <form class="" action="send.php" method="post">
        <div class="container" align="center" >
          <textarea name="msg" style="height:50px;" align="center" placeholder="Type a message"></textarea> <br> <br>
          <input type="submit" class="btn btn-success" name="" style="width:100px; height:50px;" value="send">

        </div>
      </form>

      <br>



    </div>

  </body>
</html>
