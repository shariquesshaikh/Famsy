


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

    <title>SEM I CHAT</title>
  </head>
  <body>

    <br><br>

    <div id="main" class=" jumbotron container">
      <h1 align="center">Welcome Professor!</h1>

      <h2 class="jumbotron container" style="height:10px;color:black;margin-top:5px;" align="center" >This is SEM-III CHAT Page</h2>


      <!-- Display -->
      <div class="output jumbotron" style="overflow-y:auto; height: 500px; background:grey;">

        <?php

        include 'dbh.php';

        $sql = "SELECT * FROM comps_chat where rollno LIKE '31180__'";
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


        ?>

      </div>





      <br>



    </div>

  </body>
</html>
