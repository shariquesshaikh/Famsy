
<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->

    <!-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
    <title>UPLOAD</title>



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
  <body class="One"> -->





<!-- <br><br><br><br> <br>
<div class="" align="center" >


  <div class="jumbotron container" align="center">
  <form class="" action="own.php" method="post"> <br>
    <label for="" ><b style="font-size:40px; ">Choose a File</b> <br> <br>
      <input type="file" class="btn btn-outline-secondary" name="files" value="">
    </label>

    <br><br>

    <div class="btn btn-secondary"

      <label for="">Your ID <br>
        <input type="text" name="id" value="">
      </label>

      <br><br>

      <label for="">For Which Semester?<br>
        <select class="" name="sem">
         <option value="I">I</option>
         <option value="II">II</option>
         <option value="III">III</option>
         <option value="IV">IV</option>
         <option value="V">V</option>
         <option value="VI">VI</option>
         <option value="VII">VII</option>
         <option value="VIII">VIII</option>
      </select>
     </label>

    </div>
    <br><br>

    <input type="submit" class="bgtn btn-success" name="success" value="Upload">
    </form>
</div>

</div>
  </body>
</html>
 -->

<?php
$connect = mysqli_connect("localhost", "root", "", "mhssce");
if(isset($_POST["insert"]))
{
     $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
     $query = "INSERT INTO uploads(files) VALUES ('$file')";
     if(mysqli_query($connect, $query))
     {
          echo '<script>alert("Image Inserted into Database")</script>';
     }
}
?>
<!DOCTYPE html>
<html>
     <head>
          <title>Webslesson Tutorial | Insert and Display Images From Mysql Database in PHP</title>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
     </head>
     <body>
          <br /><br />
          <div class="container" style="width:500px;">
               <h3 align="center">Insert and Display Images From Mysql Database in PHP</h3>
               <br />
               <form method="post" enctype="multipart/form-data">
                    <input type="file" name="image" id="image" />
                    <br />
                    <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />
               </form>
               <br />
               <br />
               <table class="table table-bordered">
                    <tr>
                         <th>Image</th>
                    </tr>
               <?php
               $query = "SELECT * FROM uploads ORDER BY id DESC";
               $result = mysqli_query($connect, $query);
               while($row = mysqli_fetch_array($result))
               {
                    echo '
                         <tr>
                              <td>
                                   <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" class="img-thumnail" />
                              </td>
                         </tr>
                    ';
               }
               ?>
               </table>
          </div>
     </body>
</html>
<script>
$(document).ready(function(){
     $('#insert').click(function(){
          var image_name = $('#image').val();
          if(image_name == '')
          {
               alert("Please Select Image");
               return false;
          }
          else
          {
               var extension = $('#image').val().split('.').pop().toLowerCase();
               if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
               {
                    alert('Invalid Image File');
                    $('#image').val('');
                    return false;
               }
          }
     });
});
</script>
