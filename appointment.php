<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    include 'partials/_dbconnect.php';
    $date = $_POST["date"];
    $add = $_POST["address"];
    $user = $_SESSION['UserName'];
    $sql = "UPDATE `users` SET Address = '$add' , Date = '$date' WHERE UserName = '$user'";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo '<script>alert("Appontment Successsfully Booked!! THANK YOU");</script>';
        // header("location: index.html");
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/signin.css">
        <title>Appointment</title>
    </head>
    <body>
        <div class="center">
            <h1>Appointment</h1>
        <form name = "myform" action="appointment.php" onsubmit = "return validationForm()" method="POST" >
        <div class="txt_field">
            <label for="address">Address</label><br>
            <textarea name="address" id="address" cols="38" rows="3"></textarea>
        </div>
            <div class="txt_field">
                <label>Expected date for visit</label>
                
                <input type="date" name="date" id ="date">
            </div>
            <div class = "txt-field"><button type = "submit">Book An Appointment</button></div>
            </div>
            </div>
        </form>

        <script>
            function validationForm(){
                let x = document.forms["myform"]["depart"].value;
                let y = document.forms["myform"]["date"].value;
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