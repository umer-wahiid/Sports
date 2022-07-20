<?php
    include("connect.php");

    session_start();

    if(isset($_SESSION["userid"])!=null){
        header("location:index.php");
    }
    else{
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
    <title>Login</title>
    <style>
        .bo {
            width: 400px;
            height: 300px;
            margin-top: 100px;
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
                <h1>Login</h1>
                <form action="" method="POST">
                    <table class="table">
                        <tr>
                            <td><h6>User Name</h6></td>
                            <td><input type="text" required name="txtname" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><h6>Password</h6></td>
                            <td><input type="password" required name="txtpass" class="form-control"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="Login" name="btnlogin" class="form-control btn btn-success"></td>
                        </tr>
                    </table>
                </form>
                <p style="margin-left:85px;">Don't have an Account? <a href="signup.php">Sign Up</a></p>
            </div>
        </center>
        <?php
        if(isset($_POST["btnlogin"])){
            $name = $_POST["txtname"];
            $password = base64_encode($_POST["txtpass"]);


            $query = mysqli_query($con,"SELECT * from user where uname ='$name' AND upassword = '$password'");
            $rowNum = mysqli_num_rows($query);
            $fetchArray = mysqli_fetch_array($query);           

            if($rowNum>0){
                $_SESSION["name"] = $fetchArray[1];
                $_SESSION["image"] = $fetchArray[5];
                $_SESSION["email"] = $fetchArray[2];
                $_SESSION["contact"] = $fetchArray[3];
                $_SESSION["age"] = $fetchArray[4];
                $_SESSION["userid"] = $fetchArray[0];

                header("location:index.php");
            }
            else{
                echo "<h1>Please insert correct Email or password</h1>";
            }
        }
        ?>
    </div>
</body>

</html>
<?php
    }
?>