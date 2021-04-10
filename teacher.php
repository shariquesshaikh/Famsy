<?php

  session_start();
  require("connection.php");

  if(isset($_POST['sign'])){
   // echo "skskl";
   $id = $_POST['id'];
   $password = $_POST['password'];
   $department = $_POST['dept'];

   if($id!="" and $password!="" and $department!="")
   {
      $q = "SELECT * FROM comp_teacher WHERE id='$id' and password='$password' and department='$department'";

      $result = $connect->query($q);

      if(!$row=$result->fetch_assoc())
      {
        header("Location:./SignInTeacher.php");
      }
      else{

          $_SESSION['name'] = $_POST['id'];

          if($id == 'Zphod01'){
            header("Location:Computer/ZainabPirani/own.php");
          }elseif($id == 'Faap11'){
            header("Location:Computer/FatimaAnees/own.php");
          }elseif($id == 'Npap02'){
            header("Location:Computer/NazneenPendhari/own.php");
          }else{
            header("Location:./SignInTeacher.php");
          }
      }

}else{
  header("Location:./SignInTeacher.php");

}
}
 ?>
