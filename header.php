<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youros Sports</title>
    <style>
        .lower-nav .right .social .svg1:hover {
            color: white;
            margin-top: 0px;
        }
    </style>
</head>

<body>
    <header  class="container-fluid main-header">
        <nav class="container">
            <div class="uper-nav">
                <div class="row">
                    <div class="col-lg-3  left">
                        <a href="https://web.whatsapp.com/"><i class="fa-solid fa-phone"> </i><b>Order On Call :</b>
                            0315-1113099</a>
                    </div>
                    <div class="col-lg-9 right">
                        <ul class="m-0">
                            <?php 
                            if(isset($_SESSION["userid"])!=null)
                            {
                              echo '<li><a href="#"><i class="fa-solid fa-user"></i> '.$_SESSION["name"].'</a></li>';        
                            }
                            else
                            {
                              echo '<li><a href="login.php"><i class="fa-solid fa-user"> </i> Login/Register</a></li>';
                            }
                        ?>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="cart.php"><i class="fa-solid fa-cart-shopping"> </i> Cart</a></li>
                            <li><a href="Categories.php"></i> Categories</a></li>
                            <li><a href="#"></i> About</a></li>
                            <li class="active"><a href="index.php"></i> Home</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="lower-nav">
                <div class="row">
                    <div class="col-lg-3 left">
                        <a href="index.php">
                            <div class="logo"><span>Y</span>ouros <p class="fa-solid fa-volleyball"
                                    style="color: white;"></p><span> S</span>ports</div>
                        </a>
                        <div class="col-lg-2 fr-phone">
                            <button class="bar-button">
                                <i class="fa-solid fa-bars"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-6 middle" id="demo">
                        <div class="row">
                            <ul class="up">
                                <li><a href="#">Cricket</a></li>
                                <li><a href="#">Football</a></li>
                                <li><a href="#">Hockey</a></li>
                                <li><a href="#">Tennis</a></li>
                                <li><a href="#">Basketball</a></li>
                                <li><a href="#">Gymming</a></li>
                            </ul>
                        </div>
                        <div class="row">
                            <ul class="mb-1">
                                <li><a href="#">Men</a></li>
                                <li><a href="#">Women</a></li>
                                <li><a href="#">Kids</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 right">
                        <div class="social">
                            <?php 
                                if(isset($_SESSION["userid"])!=null)
                                {
                                echo '<button type="text"
                                    style="width: 20px;height: 20px; font-size: 15px;background-color: transparent;border: none;color: white;margin-right: -18px;"
                                    id="increase">0</button>
                                <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
                                <button type="text"
                                    style="width: 20px;height: 20px; font-size: 15px;background-color: transparent;border: none;color: white;margin-right: -18px;"
                                    id="increase">0</button>
                                <a href="#"><i class="fa-solid fa-heart"> </i></a>';                            
                                }
                                else{
                                echo '
                                <button type="text"
                                    style="width: 20px;height: 20px; font-size: 15px;background-color: transparent;border: none;color: white;margin-right: -18px;"
                                    id="increase">0</button>
                                <a href="login.php"><i class="fa-solid fa-cart-shopping"></i></a>
                                <button type="text"
                                    style="width: 20px;height: 20px; font-size: 15px;background-color: transparent;border: none;color: white;margin-right: -18px;"
                                    id="increase">0</button>
                                <a href="#"><i class="fa-solid fa-heart"> </i></a>';
                                }
                            ?>
                            <?php
                                if(isset($_SESSION["userid"])!=null){
                                echo '                               
                                <a href="profile.php" style="margin-left:15px;margin-right: -15px;"><img src="admin/profileimage/'.$_SESSION["image"].'" style="margin-top: -15px;" class="rounded-circle" width="40px" height="40px" alt=""></a>
                                <button type="text" id="FeedButton"
                                    style="width: 20px;height: 20px; font-size: 17px;background-color: transparent;border: none;color: white;margin-right: -18px;padding-left: 10px;margin-top: -30px;"
                                    ><i class="fa-solid fa-sort-down svg1"></i>
                                    <ul class="list-unstyled" id="FeedContainer">
                                        <li class="list-group-item-action"><a href="profile.php">Profile</a></li>
                                        <li class="list-group-item-action"><a href="">Settings</a></li>
                                        <li class="list-group-item-action"><a href="logout.php">Logout</a></li>
                                    </ul>
                                </button>';}
                                else{
                                    echo '
                                    <a href="login.php" style="margin-left:15px;margin-right: -15px;"><img src="images/user.png" style="margin-top: -15px;" class="rounded-circle" width="34px" height="34px" alt=""></a>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <script>
        new WOW().init();
    </script>
</body>

</html>
