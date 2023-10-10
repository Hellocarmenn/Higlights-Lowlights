<?php
function conectar(){
    $host="localhost";
    $user="root";
    $pass="";
    $bd="higlights&lowlights";

   $con=mysqli_connect($host,$user,$pass);
    $con = mysqli_connect("localhost","root","","higlights&lowlights");
    mysqli_select_db($con,$bd);
    return $con;
}
