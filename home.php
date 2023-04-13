<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Welcome to Finance Portal</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
<div class="signup-form">
    <form>
		<h2>Welcome</h2>
        <br>
        <?php
            session_start();
            if(isset($_SESSION["ID"])){
                include 'database.php';
                $ID = $_SESSION["ID"];
                $sql = mysqli_query($conn,"SELECT * FROM register where ID='$ID' ");
                $row  = mysqli_fetch_array($sql);
                ?>
                <img src="upload/<?php echo $row['File'] ?>" height="150" width="150" style="border-radius:50%;display:block;margin-left:auto;margin-right:auto;" />
                <p class="hint-text"><br><b>Welcome </b><?php echo $row["First_Name"] ?> <?php echo $row["Last_Name"] ?></p>
                <div class="text-center">Want to Leave the Page? <br><a href="logout.php">Logout</a></div>
            <?php
            } else {
                header("Location:login.php");
            }
        ?>
    </form>
</div>
</body>
</html>
