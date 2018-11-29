<?php
$dsn = "localhost";
$user = "root" ; 
$password = "" ;
$d1= $_GET["d1"];
$d2= $_GET["d2"];
$d3= $_GET["d3"];
$conn = mysqli_connect($dsn,$user,$password);
mysqli_select_db($conn,"guess_game");
mysqli_query($conn,"SET NAMES 'UTF8'");
mysqli_query($conn,"INSERT INTO rank(No, Name, Time, Cnt) VALUES(NULL, '$d1', '$d2', '$d3');");
mysqli_close( $conn);
?>
