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
    $sql = "INSERT INTO student(Name,Lastname,Email,Password) VALUES('$data[name]','$data[lastname]','$data[email]','$data[password]')";
    mysqli_query($connect,$sql);
  }

  function listStudent(){
    $connect = config();
    $sql = "SELECT * FROM student";
    $row = mysqli_query($connect,$sql);
    while($res = mysqli_fetch_assoc($row)){
      $result[] = $res;
    }
    return $result;
  }

  function deleteStudent($id){
    $connect = config();
    $sql = "DELETE FROM student WHERE id='$id'";
    $row = mysqli_query($connect,$sql);
  }

  function showEditStudent($id){
    $connect = config();
    $sql = "SELECT * FROM student WHERE id='$id'";
    $row = mysqli_query($connect,$sql);
    $res = mysqli_fetch_assoc($row);
    return $res;
  }
  function editStudent($data,$id){
    $connect = config();
    $sql = "UPDATE student SET Name='$data[name]',Lastname='$data[lastname]',Email='$data[email]',Password='$data[password]' WHERE id='$id'";
    mysqli_query($connect,$sql);
  }


?>