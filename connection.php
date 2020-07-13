<?php
  $server="us-cdbr-east-02.cleardb.com";
  $username="b7f874d5e366ad";
  $password="f2f44323";
  $db="heroku_a5ff6984e7bd9fd";
$link = mysqli_connect($server,$username,$password,$db);
if(mysqli_connect_error()){
    die('ERROR: Unable to connect:' . mysqli_connect_error()); 
    echo "<script>window.alert('Hi!')</script>";
}
    ?>