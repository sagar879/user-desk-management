<?php
include "connection.php";
$update = $_REQUEST['id'];
$sql = mysqli_query($con, "SELECT*FROM persons WHERE id = '$update'");
$result = mysqli_fetch_array($sql, MYSQLI_ASSOC);
$selectedhobbies = explode(',', $result['hobbies']);
if (isset($_POST['update'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $monumber = $_POST['monumber'];
    $mailaddress = $_POST['mailaddress'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $hobbies = $_POST['hobbies'];
    if (empty($hobbies)) {
    } else {
        $hobbie = implode(",", $_POST['hobbies']);
    }
    $sqlupdate = "UPDATE persons  SET first_name = '$fname', last_name ='$lname', mobile_no= '$monumber',e_mail= '$mailaddress',pasword= '$password',hobbies = '$hobbie',gender = '$gender'  WHERE id ='$update'";
    $resultofinsertquery = mysqli_query($con, $sqlupdate);
    header('Location: list.php');
    //print_r($resultofinsertquery);
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
            <td colspan="4">
                <form method="post">
                    <div>
                        <div class=labelcss>
                            <label for="fname">First name :</label>
                        </div>
                        <div class="inputcss">
                            <input type="text" id="fname" name="fname" value=<?php echo $result['first_name']; ?>><br>
                        </div>
                    </div>
                    <div>
                        <div class="labelcss">
                            <label for="lname">Last name :</label>
                        </div>
                        <div class="inputcss">
                            <input type="text" id="lname" name="lname" value=<?php echo $result['last_name']; ?>><br>
                        </div>
                    </div>

                    <div>
                        <div class="labelcss">
                            <label for="male">Male :</label>
                        </div>
                        <div class="inputcss">
                            <input type="radio" id="malegender" name="gender" value="male" <?php
                                                                                            if ($result['gender'] == 'male') {
                                                                                                echo "checked";
                                                                                            }
                                                                                            ?>><br>
                        </div>
                        <div class="labelcss">
                            <label for="female">Female :</label>
                        </div>
                        <div class="inputcss">
                            <input type="radio" id="femalegender" name="gender" value="female" <?php
                                                                                                if ($result['gender'] == 'female') {
                                                                                                    echo "checked";
                                                                                                }
                                                                                                ?>><br>
                        </div>
                    </div>

                    <div>
                        <div class="labelcss">
                            <label for="hobbies1">Music :</label>
                        </div>
                        <div class="inputcss">
                            <input type="checkbox" id="hobbies1" name="hobbies[]" value="music" <?php
                                                                                                if (in_array("music", $selectedhobbies)) {
                                                                                                    echo "checked";
                                                                                                }
                                                                                                ?>><br>

                            <div class="labelcss">
                                <label for="hobbies2">Sport :</label>
                            </div>
                            <div class="inputcss">
                            </div>
                            <input type="checkbox" id="hobbies2" name="hobbies[]" value="sport" <?php
                                                                                                if (in_array("sport", $selectedhobbies)) {
                                                                                                    echo "checked";
                                                                                                } else {
                                                                                                    echo 'sdfsdfdsf';
                                                                                                }
                                                                                                ?>><br>
                        </div>
                        <div class="labelcss">
                            <label for="hobbies3">Reading :</label>
                        </div>
                        <div class="inputcss">
                            <input type="checkbox" id="hobbies3" name="hobbies[]" value="reading" <?php
                                                                                                    if (in_array("reading", $selectedhobbies)) {
                                                                                                        echo "checked";
                                                                                                    }
                                                                                                    ?>><br>
                        </div>
                        <div class="labelcss">
                            <label for="hobbies4">Writing :</label>
                        </div>
                        <div class="inputcss">
                            <input type="checkbox" id="hobbies4" name="hobbies[]" value="writing" <?php
                                                                                                    if (in_array("writing", $selectedhobbies)) {
                                                                                                        echo "checked";
                                                                                                    }
                                                                                                    ?>>
                        </div>
                    </div>

                    <div>
                        <div class="labelcss">
                            <label for="monumber">Mobile number :</label>
                        </div>
                        <div class="inputcss">
                            <input type="text" id="monumber" name="monumber" value=" <?php echo $result['mobile_no']; ?>">
                        </div>
                    </div>

                    <div>
                        <div class="labelcss">
                            <label for="mailaddress">Email:</label>
                        </div>
                        <div class="inputcss">
                            <input type="text" id="mailaddress" name="mailaddress" value=<?php echo $result['e_mail']; ?>>
                        </div>
                    </div>

                    <div>
                        <div class="labelcss">
                            <label for="password">Password:</label>
                        </div>
                        <div class="inputcss">
                            <input type="text" id="password" name="password" value=<?php echo $result['pasword']; ?>><br>
                        </div>
                    </div>
                    <div>
                        <div class="labelcss">
                            <label for="confirmpassword">Confirm Password:</label>
                        </div>
                        <div class="inputcss">
                            <input type="text" id="confirmpassword" name="confirmpassword"><br>
                        </div>
                    </div>
                    <div class="inputcss">
                        <input type="submit" value="update" name="update">
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