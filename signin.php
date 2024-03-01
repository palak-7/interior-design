<?php
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    include 'partials/_dbconnect.php';
    $user = $_POST["username"];
    $password = $_POST["password"];
    $sql = "Select * FROM users WHERE UserName='$user' AND Password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num > 0){
        session_start();
        $_SESSION['UserName'] = $user;
        $_SESSION['EMail'] = $email;
        $_SESSION['Password'] = $password;
        header("location: index.php");
    }
    else{
        echo '<script>alert("User does not exist kindly sign-in first!!");</script>';
        $showError = true;
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/signin.css">
        <title>Sign_in</title>
    </head>
    <body>
        <?php
            if($showError){
                header("location: signup.php");
            }
        ?>
        <div class="center">
            <h1>Log in</h1>
        <form name = "myform" action="/wdd_project/signin.php" onsubmit = "return validationForm()" method="post" >
            <div class="txt_field">
                <label>User-Name</label>
                <input type="text" name="username" id="username"><br>
            </div>
            <div class="txt_field">
                <label>Password</label>                
                <input type="password" name="password" id ="password">
            </div>

            <div class = "txt-field"><button type = "submit" name="btn-login">Log-in</button></div>
            <div class = "signup_link">
                Not a member? 
                <a href="signup.php">Signup</a>
            </div>
        </form>
        </div>

        <script>
            function validationForm(){
                let x = document.forms["myform"]["username"].value;
                let y = document.forms["myform"]["password"].value;
                if(x == ""){
                    alert("You forget one of the required fields. Please try again.");
                    return false;
                }
                if(y == ""){
                    alert("You forget one of the required fields. Please try again.");
                   return false;
                }
            }
        </script>
    </body>
</html>