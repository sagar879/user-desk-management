function validatefirstname() {
    validationall()
    document.getElementById('fname').style.color = "blue"
    document.getElementById('fname').style.backgroundColor = "red"
    var firstname = document.getElementById('fname').value;
    if (firstname == '') {
        document.getElementById("fnameerror").innerHTML = "you have entered empty firstname";

    }
}

function validatelastname() {
    validationall()
    document.getElementById('lname').style.color = "blue"
    document.getElementById('lname').style.backgroundColor = "red"
    var lastname = document.getElementById('lname').value;
    if (lastname == '') {
        document.getElementById("lnameerror").innerHTML = "you have entered empty lastname"

    }
}
function validatemonumber()
 {
    validationall()
    document.getElementById('monumber').style.color = "blue"
    document.getElementById('monumber').style.backgroundColor = "red"
    var monumber = document.getElementById('monumber').value;
    if (monumber == '') {
        document.getElementById("monumbererror").innerHTML = "you have entered empty mobilenumber ";

    } else if (isNaN(monumber)) {
        document.getElementById("monumbererror").innerHTML = "wrong mobilenumber";

    }
}
function validatepassword() {
    validationall()
    document.getElementById('password').style.color = "blue"
    document.getElementById('password').style.backgroundColor = "red"
    var password = document.getElementById('password').value;
    if (password == '') {
        document.getElementById("passerror").innerHTML = "you have entered empty password";


    } else {

    }
}
function validateconfirmpassword() {
    validationall()
    document.getElementById('confirmpassword').style.color = "blue"
    document.getElementById('confirmpassword').style.backgroundColor = "red"
    var cpassword = document.getElementById('confirmpassword').value;
    if (cpassword == '') {
        document.getElementById("cpasserror").innerHTML = "you have entered empty confirm password";
    }
}
// function matchpassword() {
//     var password = document.getElementById('password').value;
//     var cpassword = document.getElementById('confirmpassword').value;
//     if (cpassword != password) {
//         document.getElementById("matcherror").innerHTML = "password doesn't match";
//     }

// }
function validatemailaddress() {
    validationall()
    document.getElementById('mailaddress').style.color = "blue"
    document.getElementById('mailaddress').style.backgroundColor = "red"
    var pattern = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var mail = document.getElementById('mailaddress').value;
    if (mail == '') {
        document.getElementById("mailerror").innerHTML = "you have entered empty mailaddress";
    } else if (!mail.match(pattern)) {
        document.getElementById("mailerror").innerHTML = "mailaddress is incorrect";

    }
}
function validategender() {
    validationall()
    var gender = document.getElementsByName("gender").value;
    if (gender != '') {
        //console.log("hello")
    } else {
        document.getElementById("gendererror").innerHTML = "you have not entered gender";

    }
}
function validatehobbies() {
    validationall()
    var hobbies = document.getElementsByName('hobbies[]').value;
    if (hobbies != '') {
        // console.log("hellow")
    } else {
        document.getElementById('hobbieserror').innerHTML = "you have not selected";
    }
}
function validationall() {
    $is_valid = true;
    var pattern = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var mail = document.getElementById('mailaddress').value;
    if (mail == '') {
        $is_valid = false;

    } else if (!mail.match(pattern)) {
        $is_valid = false;
    }
    // var hobbies = document.getElementsByName('hobbies[]').value;
    // if (hobbies != '') {
    //     $is_valid = true;
    // } else {
    //     $is_valid = false;
    // }
    // var gender = document.getElementsByName("gender").value;
    // if (gender != '') {
    //     //console.log("hello")
    // } else {
    //     $is_valid = true;
    //     // document.getElementById("gendererror").innerHTML = "you have not entered gender";

    
    var cpassword = document.getElementById('confirmpassword').value;
    if (cpassword == '') {
        // document.getElementById("cpasserror").innerHTML = "you have entered empty confirm password";
        $is_valid = false;
    }
    var password = document.getElementById('password').value;
    if (password == '') {
        //document.getElementById("passerror").innerHTML = "you have entered empty password";
        $is_valid = false; 
    }
    var monumber = document.getElementById('monumber').value;
    if (monumber == '') {
        //  document.getElementById("monumbererror").innerHTML = "you have entered empty mobilenumber ";
        $is_valid = false;
    } else if (isNaN(monumber)) {
        //document.getElementById("monumbererror").innerHTML = "wrong mobilenumber";
        $is_valid = false;
    } 
    var lastname = document.getElementById('lname').value;
    if (lastname == '') {
        // document.getElementById("lnameerror").innerHTML = "you have entered empty lastname"
        $is_valid = false;
    }
    var firstname = document.getElementById('fname').value;
    if (firstname == '') {
       // document.getElementById("fnameerror").innerHTML = "you have entered empty firstname";
        $is_valid = false;  
    }
      console.log("hellow");
    if ($is_valid) {
        document.getElementById('submit').disabled = false;

        
    } else {
        document.getElementById('submit').disabled = true;
    }
}

