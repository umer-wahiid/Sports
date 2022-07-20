<?php
    include("connect.php");
    session_start();
    if(isset($_SESSION["userid"])==null){
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
    <title>Youros Sports</title>
    <STYLE>
        .main-header{
            margin-top: 0px;
        }
        .cat-card {
            width: 260px;
            height: 230px;
            box-shadow: 1px 1px 5px black;
        }
        .brand-item .col-lg-3 {
            margin-top: 25px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </STYLE>
</head>

<body>
    <?php
        include ("header.php")
    ?>

        <div class="container categories-brand">
            <div style="display: flex;justify-content: center;align-items: center;">
                <h3 style="text-align: center;position: relative;width: max-content;font-weight: bold;margin-top: 140px;">
                   EDIT PROFILE
                </h3>
            </div>
            <div class="row">
                <div class="col-8"> 
                <form style="width: 700px;" action="" method="POST" enctype="multipart/form-data">
                    <table class="table">
                        <?php
                        // $fetch_user = mysqli_query($con,'SELECT * FROM user where uid = $_SESSION["userid"]');
                        // $row = mysqli_fetch_array($fetch_user);
                        if(isset($_SESSION["userid"])!=null){
                        echo '
                        <tr>
                            <th>Name :</th>
                            <td><input type="text" name="txtname" value="'.$_SESSION["name"].'" class="form-control"></td>
                        </tr>
                        <tr>
                            <th>Email :</th>
                            <td><input type="text" name="txtemail" value="'.$_SESSION["email"].'" class="form-control"></td>
                        </tr>
                        <tr>
                            <th>Contact :</th>
                            <td><input type="text" name="txtcontact" value="'.$_SESSION["contact"].'" class="form-control"></td>
                        </tr>
                        <tr>
                            <th>Age :</th>
                            <td><input type="text" name="txtage" value="'.$_SESSION["age"].'" class="form-control"></td>
                        </tr>
                        <tr>
                            <th>Picture :</th>
                            <td><input type="file" name="txtimage" value="'.$_SESSION["image"].'" class="form-control"></td>                        
                        </tr>
                        <tr>
                            <th></th>
                            <td><input type="submit" name="btn" class="btn btn-success form-control"></td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="col-3">
                <img src="admin/profileimage/'.$_SESSION["image"].'" class="rounded-circle" style="width:350px;height:350px;" alt="">
            </div>
        </div>    
    </div>        
    ';
    if(isset($_POST["btn"])){
        $id = $_SESSION["userid"];
        $name = $_POST["txtname"];
        $email = $_POST["txtemail"];
        $contact = $_POST["txtcontact"];
        $age = $_POST["txtage"];
        $image = $_FILES["txtimage"]["name"];
        $tmplocation = $_FILES["txtimage"]["tmp_name"];

        move_uploaded_file($tmplocation,"admin/profileimage/".$image);

        $querry = mysqli_query($con,"UPDATE user set uname='$name' , uemail='$email' , unumber='$contact' , uage='$age' , uprofile='$image' where uid='$id' ");
        
        /*if ($querry > 0) {
            header("location:profile.php");
        } 
        else {
            echo "<h1>VALUES NOT Updated</h1>";
        }*/
    }
    }
    ?>
        




    <?php
        include ("footer.php");
    ?>




    <script>
        new WOW().init();
    </script>

</body>

</html>
<?php
    }
?>