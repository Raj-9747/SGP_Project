<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $showalert=false;
    $showerror=false;
    $server="localhost";
    $username="root";
    $password="";
    $database="sgp";
    $conn=mysqli_connect($server,$username,$password,$database);
    if($conn){
        //echo "successfully connected";
    }
    else{
        die("Error".mysqli_connect_error());
    }
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $mnum=$_POST["number"];
    $email=$_POST["email"];
    $password1=$_POST["password"];
    $cpassword=$_POST["cpassword"];
    $exitsc = false;
    if($password1==$cpassword&&$exits==false){
        $sql="INSERT INTO `sgp_login` (`f_name`, `l_name`, `m_num`, `email`, `password`) VALUES ('$fname', '$lname', '$mnum', '$email', '$password1')";
        $result=mysqli_query($conn,$sql);
        if($result){
            $showalert = true;
        }
        header("location: login.php");
    }
    else{
        $showerror = "password do not match";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../SGP/newacc.css">
    <link rel="icon" type="image/x-icon" href="./SGP/logo.jpeg">
    <link rel="apple-touch-icon" sizes="180x180" href="../SGP/logo.jpeg">
    <link rel="icon" type="image/png" sizes="32x32" href="../SGP/logo.jpeg">
    <link rel="icon" type="image/png" sizes="16x16" href="../SGP/logo.jpeg">
    <title>New Account | Travellies</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <img src="../SGP/main.jpeg">
    <div class="main">

        <div class="container">
            <label for="" class="icon">
                <a href="../SGP/demo.html">
                    <i class="fa fa-home" aria-hidden="true"></i>
                </a>
            </label>
            <form action="/web development/sgp/newacc.php" method= "post">
               <h1 style="color:rgb(106, 188, 250);">Create New Account</h1>
                <hr>
                <p> First Name:
                    <input type="text" name="fname" required placeholder="Aryan">
                </p>
                <p> Last Name:
                    <input type="text" name="lname" required placeholder="Mishra">
                </p>
                <p> Mobile Number:
                    <input type="number" name="number" id="number" placeholder="9999999999">
                </p>
                <p> Email:
                    <input type="email" name="email" id="email" required placeholder="aryanmishra@gmail.com">
                </p>
                <p> Password:
                    <input type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                        title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                        required placeholder="Minimum 8 Charractor required">

                </p>
                <p> Confirm Password
                <input type="password" id="cpassword" name="cpassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                        title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                        required placeholder="reenter password">

                </p>
                <p>
                    <!-- <a href="../SGP/OTP.html"> -->
                        <input style="width: 200px; margin-left: 9px;"
                            type="submit" id="submit" value="Sign In">
                    <!-- </a> -->
                </p>
            </form>
        </div>

        <!-- <hr> -->

        <!-- <div class="Foot" style="background: rgba(10, 10, 10, 0.842);">

        <br>
            <h4 onclick="alert('We are working on that...')">&nbsp;&nbsp;&nbsp;Contact Us</h4>
        </a>
            <h4 onclick="alert('We are working on that...')">&nbsp;&nbsp;&nbsp;Privacy Policy</h4>
        </a>
            <h4 onclick="alert('We are working on that...')">&nbsp;&nbsp;&nbsp;Terms And Condition</h4>
        </a>

        <p style="color: gray;"> &nbsp;&nbsp;&nbsp; &copy;2021 Apna Web </p>

        <br>

        <p style="color: gray;"> &nbsp;&nbsp;&nbsp; We accepted: </p>

        &nbsp;&nbsp;&nbsp;<img style="border-radius: 4px;" src="../img/visa1.png" alt="" width="50px">

        <img src="../img/mastercard.png" alt="" width="50px" height="35px">

        <img src="../img/rupay.jpeg" alt="" width="50px" height="35px">

        <p style="color:gray;"> &nbsp;&nbsp;&nbsp; Follow Us On:</p>

        <a href="#"> &nbsp;&nbsp;&nbsp; <img style="border-radius: 50%;" src="../img/twitter2.png" alt="" width="50px"
                height="40px"> </a>

        <a href="https://www.instagram.com/jyot_delvadiya0706/"><img style="border-radius: 10px;"
                src="../img/instagram1.png" alt="" width="50px" height="40px"> </a>

        <a href="#"><img style="border-radius: 4px;" src="../img/facebook1.png" alt="" width="50px" height="40px"> </a>

        <a href="#"><img style="border-radius: 4px;" src="../img/linkedin.png" alt="" width="50px" height="40px"></a>

        <a href="#"><img style="border-radius: 50%;" src="../img/telegram.png" alt="" width="50px" height="40px"></a>

        <a href="https://www.youtube.com/channel/UCIaDP90_Izgt1dTN2N02ItA"><img style="border-radius: 12px;"
                src="../img/youtube.png" alt="" width="50px" height="40px"> </a>

    </div> -->
    </div>
</body>

</html>