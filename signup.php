<?php
$showPassError = false;
$showExistError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    //to check unique username
    $existSql = "SELECT * FROM `users` WHERE UserName='$username'";
    $result = mysqli_query($conn, $existSql);
    $numxistRows = mysqli_num_rows($result);
    if($numxistRows > 0){
        $showExistError = true;
    }

    //to check unique email
    $showExistError = false;
    $existSql = "SELECT * FROM `users` WHERE EMail='$email'";
    $result = mysqli_query($conn, $existSql);
    $numxistRows = mysqli_num_rows($result);
    if($numxistRows > 0){
        $showExistError = true;
    }

    //to check if passwords match
    if(($password == $cpassword)){
        $sql = "INSERT INTO `users` (`UserName`, `EMail`, `Password`) VALUES ('$username', '$email', '$password')";
        $result = mysqli_query($conn, $sql);
        header("location: signin.php");
    }
    else{
        $showPassError = true;
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>sign_up</title> 
        <link rel="stylesheet" href="css/signup.css">
    </head>
    <body>
        <?php
            if($showExistError){
                echo '<script>alert("Username or Email already exists");</script>';
            }
            if($showPassError){
                echo '<script>alert("Passwords do not match!!");</script>';
            }
        ?>
        <div class="center">
            <h1>Create Account</h1>
        <form name = "myform" action="/wdd_project/signup.php" onsubmit = "return validationForm()" method="POST" >
            <div class="txt_field">
                <label>User-name</label>
                <input type="text" maxlength = "15" name="username" id="username">
            </div>
            <div class="txt_field">
                <label>E-Mail</label>
                <input type="email" name="email">
            </div>
            <div class="txt_field">
                <label>Password</label>
                <input type="password" maxlength = "20" name="password" id ="password">
            </div>
            <div class="txt_field">
                <label>Confirm-Password</label>
                <input type="password" name="cpassword" id ="cpassword">
            </div>
            <div class = "txt-field"></div><button type = "submit">Submit</button>
            
            </div>
        </form>

        <!-- javascript validation -->
        <script>
            function validationForm(){
                let x = document.forms["myform"]["username"].value;
                let y = document.forms["myform"]["password"].value;
                let z = document.forms["myform"]["email"].value;
                let r = document.forms["myform"]["cpassword"].value;
                if(x == ""){
                    alert("You forget one of the required fields. Please try again.");
                    return false;
                }
                if(y == ""){
                    alert("You forget one of the required fields. Please try again.");
                   return false;
                }
                if(z == ""){
                    alert("You forget one of the required fields. Please try again.");
                   return false;
                }
                if(r == ""){
                    alert("You forget one of the required fields. Please try again.");
                   return false;
                }
            }
        </script>
    </body>
</html>