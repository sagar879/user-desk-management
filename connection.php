<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "formdata";
$con = mysqli_connect($servername, $username, $password, $database);
$sql = "CREATE DATABASE formdata";
$result = mysqli_query($con, $sql);
$sql = "CREATE TABLE Persons (
  id int(255) PRIMARY KEY AUTO_INCREMENT,
  Last_Name varchar(255),
  First_Name varchar(255),
  Gender varchar(255),
  Hobbies varchar(255),
  Mobile_No varchar(255),
  E_mail  varchar(255),
  Pasword varchar(255)
  )";
 $result = mysqli_query($con, $sql);
 ?>
