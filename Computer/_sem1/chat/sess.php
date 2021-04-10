<?php

session_start();

if(issset($_SESSION['roll'])){
echo $_SESSION['roll'];
}

 ?>
