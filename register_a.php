<?php
include("database.php");

if(isset($_POST["register_submit"]) && isset($_POST["register_token"]) && $_POST["register_token"] === "register_token") {
    // Sanitize input data
    $first_name = mysqli_real_escape_string($conn, trim($_POST["first_name"]));
    $last_name = mysqli_real_escape_string($conn, trim($_POST["last_name"]));
    $email = mysqli_real_escape_string($conn, trim($_POST["email"]));
    $pass = mysqli_real_escape_string($conn, $_POST["pass"]);
    $confirm_pass = mysqli_real_escape_string($conn, $_POST["confirm_pass"]);

    // Check if all required fields are set
    if(!empty($first_name) && !empty($last_name) && !empty($email) && !empty($pass) && !empty($confirm_pass)) {

        // Check if email already exists
        $query = "SELECT * FROM register WHERE Email='$email'";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0) {
            echo "Email Id Already Exists"; 
            exit;
        } else {
            // Check if password and confirm password match
            if ($pass === $confirm_pass) {
                // Hash the password using password_hash()
                $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);
                // Insert new user information into the database
                $query = "INSERT INTO register(First_Name, Last_Name, Email, Password) 
                VALUES ('$first_name', '$last_name', '$email', '$hashed_pass')";
                $result = mysqli_query($conn, $query) or die("Could Not Perform the Query");
                // Redirect to login page with success status
                header("Location: login.php?status=success");
                exit;
            } else {
                echo "Password and Confirm Password do not match";
                exit;
            }
        }
    } else {
        echo "All fields are required";
        exit;
    }   
}
?>