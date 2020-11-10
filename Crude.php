<?php 

function config(){
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "education";
    $connect = mysqli_connect($server,$username,$password,$db);
    mysqli_set_charset($connect, "utf8");
    mysqli_query($connect, "SET NAMES 'utf8'");
    return $connect;
  }


  function addStudent($data){
    $connect = config();
    $sql = "INSERT INTO student(Name,Lastname,Email,Password,chid) VALUES('$data[name]','$data[lastname]','$data[email]','$data[password]')";
    mysqli_query($connect,$sql);
  }


?>