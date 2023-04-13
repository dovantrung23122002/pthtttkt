<?php
session_start();
include("database.php");

if(isset($_POST["save"])) {
    // Check if email and password fields are set
    if(isset($_POST["email"]) && isset($_POST["pass"])) {
        $email = $_POST["email"];
        $pass = $_POST["pass"];

        // Get user information from the database based on email
        $stmt = $conn->prepare("SELECT * FROM register WHERE Email = ? LIMIT 1");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            $hashed_pass = $row["Password"];

            // Check if password is correct using password_verify()
            if(password_verify($pass, $hashed_pass)) {
                // Password is correct, start a new session
                $_SESSION["user_id"] = $row["ID"];
                $_SESSION["user_email"] = $row["Email"];
                // Redirect to time-att-mng page
                header("Location: time-att-mng.php");
                exit();
            } else {
                // Password is incorrect
                $error = "Invalid Password";
            }
        } else {
            // User does not exist
            $error = "User not found";
        }
    } else {
        // Email and password fields are required
        $error = "Email and Password are required";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Dang nhap</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/login.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="signup-form">
    <form action="login.php" method="post" enctype="multipart/form-data">
        <h1>Attendance Management System</h1>
        <h2>Login</h2>
        <h4>Email</h4>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
        <h4>Password</h4>
        <div class="form-group">
            <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Login</button>
        </div>
        <div class="text-center">Don't have an account? <a href="register.php">Register Here</a></div>
        </form>
    <?php if(isset($error)){ ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $error; ?>
    </div>
    <?php } ?>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<script>
$(document).ready(function () {
    $('#login-form').validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            pass: {
                required: true,
                minlength: 6
            }
        },
        messages: {
            email: {
                required: "Please enter your email",
                email: "Please enter valid email"
            },
            pass: {
                required: "Please enter your password",
                minlength: "Password must be at least 6 characters long"
            }
        },
        submitHandler: function (form) {
            form.submit();
        }
    });
});
</script>
</body>
</html>