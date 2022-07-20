<?php
    include("connect.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/animate.css">
    <script src="JAVASCRIPT/jquerry.js"></script>
    <script src="JAVASCRIPT/wow.min.js"></script>
    <script src="CSS/fontawesome-free-6.0.0-beta3-web/js/all.min.js"></script>
    <script src="CSS/bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="JAVASCRIPT/javaScript.js"></script>
    <link rel="stylesheet" href="CSS/bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/fontawesome-free-6.0.0-beta3-web/css/fontawesome.min.css">
    <link rel="shortcut icon" type="image/png" href="IMAGES/SHORTCUT 2.png">
    <title>Document</title>
    <style>
        .bo {
            width: 400px;
            margin-top: 40px;
            border: 2px solid green;
            border-radius: 30px;
        }
        a{
            color: green;
        }
        a:hover{
            color: steelblue;
        }
    </style>
</head>

<body>
    <div class="container">
        <center>
            <div class="bo">
                <h1>Sign Up</h1>
                <form action="" method="POST" enctype="multipart/form-data">
                    <table class="table">
                        <tr>
                            <td><h6>Name</h6></td>
                            <td><input type="text" required name="txtname" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><h6>Email</h6></td>
                            <td><input type="email" required name="txtemail" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><h6>Phone</h6></td>
                            <td><input type="number" required name="txtnum" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><h6>Age</h6></td>
                            <td><input type="number" required name="txtage" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><h6>Profile</h6></td>
                            <td><input type="file" required name="txtprofile" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><h6>Password</h6></td>
                            <td><input type="password" required name="txtpass" class="form-control"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="Sign Up" name="btn" class="form-control btn btn-success"></td>
                        </tr>
                    </table>
                </form>
                <p style="margin-left:75px;">Already have an Account? <a href="login.php">Login</a></p>
            </div>
        </center>
    </div>

    <?php
    if(isset($_POST["btn"])){
        $name = $_POST["txtname"];
        $email = $_POST["txtemail"];
        $number = $_POST["txtnum"];
        $age = $_POST["txtage"];
        $profile = $_FILES["txtprofile"]["name"];
        $tmplocation = $_FILES["txtprofile"]["tmp_name"];
        $password = $_POST["txtpass"];
        $password = base64_encode($password);

        move_uploaded_file($tmplocation,"admin/profileimage/".$profile);

        $query = mysqli_query($con,"INSERT INTO user (uname,uemail,unumber,uage,uprofile,upassword) values ('$name','$email','$number','$age','$profile','$password')");

        if($query>0){
            echo '<h1>Registered</h1>';
        }
        else{
            echo '<h1>Please Insert Correct Information</h1>';
        }
    }
    ?>
</body>

</html>