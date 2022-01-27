<?php
include "connection.php";
//$result = mysqli_query($con, $sql);
if (isset($_POST['submit'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $monumber = $_POST['monumber'];
  $mailaddress = $_POST['mailaddress'];
  $password = $_POST['password'];
  $gender = $_POST['gender'];
  $hobbies = $_POST['hobbies'];
  $id = 0;
  $password = md5($password);
  if (empty($hobbies)) {
  } else {
    $hobbie = implode(",", $_POST['hobbies']);
  }
  if (empty($fname)){
    echo"you have entered empty name";
  }
  $sqlinsert = "INSERT INTO persons (first_name,last_name,mobile_no,e_mail,pasword,gender,hobbies) values('$fname','$lname','$monumber','$mailaddress','$password','$gender','$hobbie')";
  $resultofinsertquery = mysqli_query($con, $sqlinsert);
  //print_r($resultofinsertquery);
  if($resultofinsertquery){
    header("Location: list.php");
  }else{
    header("Location: index.php");
  }
}
