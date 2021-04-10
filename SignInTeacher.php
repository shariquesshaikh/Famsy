<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Teacher</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <!-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">


  </head>

  <style media="screen">
    .One{
      background-image: url(https://66.media.tumblr.com/85beae914c6e1ca93ffae71136dbb0e8/tumblr_mj3qc827tt1qjndhyo1_400.gif);
    }

    input{
      border-radius: 5px;
    }
  </style>


  <body class="One">

      <br> <br>

    <h1 align="center" style="color:White;">Welcome Teacher</h1><br> <br> <br>

    <div class=" "  style="">
        <div class="" align="center">
          <form  align="center" class="jumbotron container" action="teacher.php" method="post">
            <label for="">Department <br>

              <select class="" name="dept">
                <option value="Automobile">Automobile</option>
                <option value="Civil">Civil</option>
                <option value="Computer">Computer</option>
                <option value="Electrical">Electrical</option>
                <option value="EXTC">EXTC</option>
                <option value="Information Technology">Information Technology</option>
                <option value="Instrumentation">Instrumentation</option>
                <option value="Mechanical">Mechanical</option>
             </select>

            </label>

            <br><br>


            <label for="">
             ID <br>
             <input type="text" name="id" placeholder="ID here">
            </label>

            <br><br>

            <label for="">
             Password <br>
             <input type="password" name="password" placeholder="Password">
            </label>

            <br><br>

            <input class="btn btn-secondary"  type="submit" name="sign" value="Sign In">



          </form>
          </div>
      </div>

  </body>
</html>
