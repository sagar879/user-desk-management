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
                <form action="" method="post" onsubmit = validationall() >
                    <div>
                        <div class="labelcss">
                            <label for="fname">First name: </label>


                        </div>
                        <div class="inputcss">
                            <input type="text" id="fname" name="fname"  onchange="validatefirstname()"><br>
                            <span id ="fnameerror"> </span>

                        </div>
                        <div class="error"><span></span></div>
                    </div>
                    <div>
                        <div class="labelcss">
                            <label for="lname">Last name :</label>
                        </div>
                        <div class="inputcss">
                            <input type="text" id="lname" name="lname" onchange="validatelastname()"><br>

                        </div>
                        <div id="lnameerror"><span></span></div>
                    </div>

                    <div>
                        <div class="labelcss">
                            <label for="male">Male :</label>
                        </div>
                        <div class="inputcss">
                            <input type="radio" id="malegender" name="gender"  value="male" onchange="validategender()"><br>
                        </div>
                        <div class="labelcss">
                            <label for="female">Female :</label>
                        </div>
                        <div class="inputcss">
                            <input type="radio" id="femalegender" name="gender" value="female" onchange="validategender()"><br>

                        </div>
                        <div id="gendererror"><span></span></div>
                    </div>

                    <div>
                        <div class="labelcss">
                            <label for="hobbies1">Music :</label>
                        </div>
                        <div class="inputcss">
                            <input type="checkbox" id="hobbies" name="hobbies[]" onchange="validatehobbies()"><br>
                        </div>
                        <div class="labelcss">
                            <label for="hobbies2">Sport :</label>
                        </div>
                        <div class="inputcss">
                            <input type="checkbox" id="hobbies" name="hobbies[]" onchange="validatehobbies()" ><br>
                        </div>
                        <div class="labelcss">
                            <label for="hobbies3">Reading :</label>
                        </div>
                        <div class="inputcss">
                            <input type="checkbox" id="hobbies" name="hobbies[]" onchange="validatehobbies()"><br>
                        </div>
                        <div class="labelcss">
                            <label for="hobbies[]">Writing :</label>
                        </div>
                        <div class="inputcss">
                            <input type="checkbox" id="hobbies" name="hobbies[]" onchange="validatehobbies()" >
                        </div>
                        <div>
                            <span id="hobbieserror"></span>
                        </div>
                    </div>

                    <div>
                        <div class="labelcss">
                            <label for="monumber">Mobile number :</label>
                        </div>
                        <div class="inputcss">
                            <input type="text" id="monumber" name="monumber"  onchange="validatemonumber()">
                        </div>
                        <div id="monumbererror"><span></span></div>
                    </div>

                    <div>
                        <div class="labelcss">
                            <label for="mailaddress">Email:</label>
                        </div>
                        <div class="inputcss">
                            <input type="text" id="mailaddress" name="mailaddress"  onchange="validatemailaddress()">
                        </div>
                        <div id="mailerror"><span></span></div>
                    </div>

                    <div>
                        <div class="labelcss">
                            <label for="password">Password:</label>
                        </div>
                        <div class="inputcss">
                            <input type="password" id="password" name="password" onchange="validatepassword()"><br>
                        </div>
                        <div id="passerror"><span></span>
                        </div>
                    </div>
                    <div>
                        <div class="labelcss">
                            <label for="password">Confirm Password:</label>
                        </div>
                        <div class="inputcss">
                            <input type="text" id="confirmpassword" name="confirmpassword" onchange="validateconfirmpassword()" onchange="matchpassword()"><br>
                        </div>
                        <div id='cpasserror'><span></span></div>
                    </div>
                    <div id="matcherror"><span></span> </div>
                    <div class="inputcss">
                        <input type="submit" id="submit" value="Submit" name="submit" disabled >
                    </div>

                </form>
            </td>
        </tr>
        <tr>
            <td colspan="5" class="footer">footer</td>
        </tr>
    </table>
    <script src ="js_val_form.js" ></script> 
</body>
<?php 
//echo $_SERVER['PHP_SELF']; 
?>

</html>