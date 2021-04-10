<?php
$x = session_start();

?>

<!DOCTYPE html>
<html lang="'en'" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <!-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">

<style media="screen">
input{
  border-radius: 5px;
}
</style>

  </head>
  <body style="background:#f0f0f0;">



    <?php
    require("connection.php");

    if($_SESSION['name']!=""){
    if(isset($_POST['addstudent'])){
      $roll = $_POST['rollno'];
      $name = $_POST['s_name'];
      $email = $_POST['mail'];
      $password = $_POST['password'];
      $semester = $_POST['sem'];
      $department = $_POST['dept'];


      if($roll!="" and $name!="" and $email!="" and $password!="" and $semester!="" and $department!=""  )
      {
           $q = "INSERT INTO `comp_student` (rollno,name,email,password,semester,department) VALUES( '$roll','$name','$email','$password','$semester','$department')";
         if(mysqli_query($connect,$q))
         {
           echo "<script type='text/javascript'>alert('Student added successfully');</script>";
           // header('location:adminrights.php');
         }else {
           echo $q;
         }

      }else {
        echo "<script type='text/javascript'>alert('Enter valid details. One or more field is empty!');</script>";
      }
    }


    if(isset($_POST['deletestudent'])){

        $roll = $_POST['rollno'];
        $semester = $_POST['sem'];
        $department = $_POST['dept'];

        if($roll!="" and $semester!="" and $department!=""  )
        {
             // $q = "INSERT INTO `comp_student` (rollno,name,email,password,semester,department) VALUES( '$roll','$name','$email','$password','$semester','$department')";
             $q= "DELETE FROM `comp_student` WHERE rollno='$roll' and semester='$semester' and department='$department'";
           if(mysqli_query($connect,$q))
           {
             echo "<script type='text/javascript'>alert('Student deleted successfully');</script>";
             // header('location:adminrights.php');
           }else {
             echo $q;
           }

        }else {
          echo "<script type='text/javascript'>alert('Enter valid details. One or more field is empty!');</script>";
        }



    }

  }else{
    header("Location:SignInAdmin.php");
  }

     ?>






    <br><br>

    <h1 align="center" style="color:black;">Hello Admin! <br> Let's manipulate the database </h1> <br> <br> <br>

    <div class="" align="center">
      <h4><a href="adminlogout.php" class="btn btn-secondary"  >Log Out</a> </h4>


    </div>

<!-- <div class="jumbotron container"> -->

          <div class=" "  style="margin-top:2%;">
              <div class="" align="center">

                  <form  align="center" class="jumbotron container"  method="post" style="color:white;  background-image:url(https://66.media.tumblr.com/85beae914c6e1ca93ffae71136dbb0e8/tumblr_mj3qc827tt1qjndhyo1_400.gif">

                              <div class="jumbotron" style="margin-top:0px;">

                          <h1 align="center" class="" style="color:black;">Add Students</h1>

                              </div>
                              <br>


                           <label for="">Student's Department <br>

                                    <!--array -->
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

                           <label for="">Student's Semester <br>

                             <!-- //array -->
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

                          <br><br>

                          <label for="">Student's Name <br>
                           <input type="text" name="s_name" placeholder="Name here" required>
                          </label>

                          <br><br>

                          <label for="">Student's Email <br>
                           <input type="email" name="mail" placeholder="abc@gmail.com" required>
                          </label>

                          <br><br>

                          <label for="">Student's Roll Number <br>
                           <input type="text" name="rollno" placeholder="Student's rollno" required>
                          </label>
                          <br><br>

                          <label for="">Student's Password <br>
                           <input type="password" name="password" placeholder="Student's password" required>
                          </label>

                          <br><br>

                          <input class="btn btn-success" type="submit" style=""name="addstudent" value="Add" required>


                        </form>
                  </div>
              </div>





                <div class=" "  style="margin-top:2%;)">
                      <div class="" align="center">

                                <form  align="center" class="jumbotron container"  method="post" style="color:white;  background-image:url(https://66.media.tumblr.com/85beae914c6e1ca93ffae71136dbb0e8/tumblr_mj3qc827tt1qjndhyo1_400.gif">

                                  <div class="jumbotron">

                                  <h1 align="center" class="" style="color:black;">Delete Students</h1>

                                  </div>
                                  <br>



                                  <label for="">Student's Department <br>

                                           <!--array -->
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

                                  <label for="">Student's Semester <br>

                                    <!-- //array -->
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

                                 <br><br>


                                  <label for="">Student's Roll Number <br>
                                   <input type="text" name="rollno" placeholder="Enter roll number" required>
                                  </label>
                                  <br><br>




                                  <input class="btn btn-danger" type="submit" style=""name="deletestudent" value="Delete" required>


                                </form>
                                </div>
                          </div>



  </body>
</html>
