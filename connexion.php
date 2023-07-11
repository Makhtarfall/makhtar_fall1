<?php 


    $host = "localhost";
    $user = "root";
    $pass = "";
    $base = "projet_exam2";
    $conn = mysqli_connect($host,$user,$pass,$base);

    if(!$conn){
        die("Connection echec : " . mysqli_connect_error());
    }




?>