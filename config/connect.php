<?php 
$connect = new mysqli("localhost", "root", "","kids-funstation");


session_start();


function redirect($page){
    echo "<script>window.open('$page','_self')</script>";
}
function msg($msg){
    echo "<script>alert('$msg')</script>";
}

  

?>

