<?php
include "connection.php";
$fnameErr = '';
$lnameErr = '';
$monumberErr = '';
$mailaddressErr = '';
$passwordErr = '';
$hobbiesErr = '';
$genderErr = '';
$monumberdigitErr = '';
$hobbie = '';
$passwordmatchErr = '';
$confirmpasErr = '';
$errors = [];
$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $monumber = $_POST['monumber'];
    $mailaddress = $_POST['mailaddress'];
    $pasword = $_POST['password'];
    $id = 0;
    $password = md5($password);
    $confirmpassword = $_POST['confirmpassword'];
    static $flag = 0;

    if (isset($_POST['hobbies'])) {
        $hobbies = $_POST['hobbies'];
        $hobbie = implode(",", $_POST['hobbies']);
    } else {
        $hobbies = '';
    }
  //  $selectedhobbies = explode(',', ($_post['hobbies']));
    //print_r("$selectedhobbies");
    
    if (isset($_POST['gender'])) {
        $gender = $_POST['gender'];
    } else {
        $gender = '';
    }
    if (empty($fname)) {
        $fnameErr = "you have entered empty first name";
        $flag = 1;
    } else {
        $flag = 0;
    }
    if (empty($lname)) {
        $lnameErr = "you have entered empty last name";
        $flag = 1;
    } else {
        $flag = 0;
    }
    if (empty($gender)) {
        $genderErr = "you have not selected any gender";
        $flag = 1;
    } else {
        $flag = 0;
    }
    if (empty($hobbie)) {
        $hobbiesErr = "you have not selected any hobbie";
        $flag = 1;
    } else {
        $flag = 0;
    }
    if (empty($monumber)) {
        $monumberErr = 'monumber is empty ';
        $flag = 1;
    } else if (!strlen($monumber) == 10) {
        $monumberErr = 'mobile number must be an 10 digit';
        $flag = 1;
    } else if (!preg_match("/^[0-9]*$/", $monumber)) {
        $monumberErr = "Only numeric value is allowed.";
        $flag = 1;
    } else {
        $flag = 0;
    }
    if (empty($mailaddress)) {
        $mailaddressErr = "you have entered empty mail address";
        $flag = 1;
    } else if (!preg_match($pattern, $mailaddress)) {
        $mailaddressErr = "Email is not valid.";
        $flag = 1;
    } else {
        $flag = 0;
    }
    if (empty($pasword)) {
        $passwordErr = 'pasword is empty';
        $flag = 1;
    } else {
        $flag = 0;
    }
    if (empty($confirmpassword)) {
        $confirmpasErr = 'confirm password is empty';
        $flag = 1;
    } else {
        $flag = 0;
    }
    if ($confirmpassword != $pasword) {
        $passwordmatchErr = 'password is not matching ';
        $flag = 1;
    } else {
        $flag = 0;
    }
    if ($flag == 0) {
        $sqlinsert = "INSERT INTO persons (first_name,last_name,mobile_no,e_mail,pasword,gender,hobbies) values('$fname','$lname','$monumber','$mailaddress','$password','$gender','$hobbie')";
        $resultofinsertquery = mysqli_query($con, $sqlinsert);
    } else {
        echo "sorry";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task-one</title>
    <link rel="stylesheet" href="index.css">

</head>

<body>
    <table>
        <tr>

            <td class="raw1"><a href="index.php" target="_BLANK">HOME</a></td>
            <td class="raw1">about</td>
            <td class="raw1">contact</td>
            <td class="raw1">feedback</td>
            <td class="raw1">services</td>

        </tr>
        <tr>
            <td class="raw2" colspan="5">Task-one</td>
        </tr>
        <tr>
            <td class="sidebar">sidebar</td>
            <td colspan="4" class="maincontent">
                <form action="" method="post">
                    <div>
                        <div class=labelcss>
                            <label for="fname">First name: </label>


                        </div>
                        <div class="inputcss">
                            <input type="text" id="fname" name="fname" value="<?php echo isset($_POST["fname"]) ? $_POST["fname"] : '' ?> "><br>


                        </div>
                        <div class="error"><span><?php echo " $fnameErr" ?> </span></div>
                    </div>
                    <div>
                        <div class="labelcss">
                            <label for="lname">Last name :</label>
                        </div>
                        <div class="inputcss">
                            <input type="text" id="lname" name="lname" value="<?php echo isset($_POST["lname"]) ? $_POST["lname"] : '' ?>"><br>

                        </div>
                        <div class="error"><span><?php echo " $lnameErr " ?></span></div>
                    </div>

                    <div>
                        <div class="labelcss">
                            <label for="male">Male :</label>
                        </div>
                        <div class="inputcss">
                            <input type="radio" id="malegender" name="gender"><br>
                        </div>
                        <div class="labelcss">
                            <label for="female">Female :</label>
                        </div>
                        <div class="inputcss">
                            <input type="radio" id="femalegender" name="gender" value="female" ><br>

                        </div>
                        <div class="error"><span><?php echo "$genderErr " ?> </span></div>
                    </div>

                    <div>
                        <div class="labelcss">
                            <label for="hobbies1">Music :</label>
                        </div>
                        <div class="inputcss">
                            <input type="checkbox" id="hobbies" name="hobbies[]" value="music" ><br>
                        </div>
                        <div class="labelcss">
                            <label for="hobbies2">Sport :</label>
                        </div>
                        <div class="inputcss">
                            <input type="checkbox" id="hobbies" name="hobbies[]" value="sport" ><br>
                        </div>
                        <div class="labelcss">
                            <label for="hobbies3">Reading :</label>
                        </div>
                        <div class="inputcss">
                            <input type="checkbox" id="hobbies" name="hobbies[]" value="reading" ><br>
                        </div>
                        <div class="labelcss">
                            <label for="hobbies[]">Writing :</label>
                        </div>
                        <div class="inputcss">
                            <input type="checkbox" id="hobbies" name="hobbies[]" value="writing" >
                        </div>
                        <div>
                            <span class="error"><?php echo " $hobbiesErr " ?></span>
                        </div>
                    </div>

                    <div>
                        <div class="labelcss">
                            <label for="monumber">Mobile number :</label>
                        </div>
                        <div class="inputcss">
                            <input type="text" id="monumber" name="monumber" value="<?php echo isset($_POST["monumber"]) ? $_POST["monumber"] : '' ?>">

                        </div>
                        <div><span><?php echo "$monumberErr" ?> </span></div>
                    </div>

                    <div>
                        <div class="labelcss">
                            <label for="mailaddress">Email:</label>
                        </div>
                        <div class="inputcss">
                            <input type="text" id="mailaddress" name="mailaddress" value="<?php echo isset($_POST["mailaddress"]) ? $_POST["mailaddress"] : '' ?>">
                        </div>
                        <div class="error"><span><?php echo "$mailaddressErr" ?> </span></div>
                    </div>

                    <div>
                        <div class="labelcss">
                            <label for="password">Password:</label>
                        </div>
                        <div class="inputcss">
                            <input type="password" id="password" name="password" value="<?php echo isset($_POST["password"]) ? $_POST["password"] : '' ?>"><br>
                        </div>
                        <div class="error"><span><?php echo "$passwordErr" ?></span>
                        </div>
                    </div>
                    <div>
                        <div class="labelcss">
                            <label for="password">Confirm Password:</label>
                        </div>
                        <div class="inputcss">
                            <input type="text" id="confirmpassword" name="confirmpassword" value="<?php echo isset($_POST["confirmpassword"]) ? $_POST["confirmpassword"] : '' ?>"><br>
                        </div>
                        <div class='error'><span><?php echo "$confirmpasErr" ?></span></div>
                    </div>
                    <div class="error"><span><?php echo " $passwordmatchErr"; ?></span> </div>
                    <div class="inputcss">
                        <input type="submit" value="Submit" name="submit">
                    </div>

                </form>
            </td>
        </tr>
        <tr>
            <td colspan="5" class="footer">footer</td>
        </tr>
    </table>


</body>

</html>