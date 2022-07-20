<?php
    include("connect.php");
    session_start();
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
                BRAND
            </h3>
        </div>
        <div class="brand-item">
            <div class="row"
                style="display: flex;justify-content: center;align-items: center;flex-direction: row;flex-wrap: wrap;">
                <?php
                $fetch_brand = mysqli_query($con,"select * from brand");
                while($row = mysqli_fetch_array($fetch_brand)){
                    echo '
                <div class="col-lg-3">
                    <div class="cat-card">
                        <img src="admin/bimagefolder/'.$row[2].'" style="width: 100%;height: 100%;" alt="">
                        <div class="cat-heading">
                            <h5>'.$row[1].'</h5>
                            <hr>
                        </div>
                        <div class="cat-hover">
                            <ul>
                                <li class="cat-hover-item"><a href="#">Mens</a></li>
                                <li class="cat-hover-item"><a href="#">Womens</a></li>
                                <li class="cat-hover-item"><a href="#">Kids</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                    ';
                }
                ?>
                <!-- <div class="col-lg-3">
                    <div class="cat-card">
                        <img src="IMAGES/adiddas 2.jpg" style="width: 100%;height: 100%;" alt="">
                        <div class="cat-heading">
                            <h5>ADDIDAS</h5>
                            <hr>
                        </div>
                        <div class="cat-hover">
                            <ul>
                                <li class="cat-hover-item"><a href="#">Mens</a></li>
                                <li class="cat-hover-item"><a href="#">Womens</a></li>
                                <li class="cat-hover-item"><a href="#">Kids</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cat-card">
                        <img src="IMAGES/nike 2.jpg" style="width: 100%;height: 100%;" alt="">
                        <div class="cat-heading">
                            <h5>NIKE</h5>
                            <hr>
                        </div>
                        <div class="cat-hover">
                            <ul>
                                <li class="cat-hover-item"><a href="#">Mens</a></li>
                                <li class="cat-hover-item"><a href="#">Womens</a></li>
                                <li class="cat-hover-item"><a href="#">Kids</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cat-card">
                        <img src="IMAGES/reebok 2.png" style="width: 100%;height: 100%;" alt="">
                        <div class="cat-heading">
                            <h5>REEBOK</h5>
                            <hr>
                        </div>
                        <div class="cat-hover">
                            <ul>
                                <li class="cat-hover-item"><a href="#">Mens</a></li>
                                <li class="cat-hover-item"><a href="#">Womens</a></li>
                                <li class="cat-hover-item"><a href="#">Kids</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cat-card">
                        <img src="IMAGES/under armor 2.jpg" style="width: 100%;height: 100%;" alt="">
                        <div class="cat-heading">
                            <h5>UNDER ARMOR</h5>
                            <hr>
                        </div>
                        <div class="cat-hover">
                            <ul>
                                <li class="cat-hover-item"><a href="#">Mens</a></li>
                                <li class="cat-hover-item"><a href="#">Womens</a></li>
                                <li class="cat-hover-item"><a href="#">Kids</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cat-card">
                        <img src="IMAGES/puma 2.jpg" style="width: 100%;height: 100%;" alt="">
                        <div class="cat-heading">
                            <h5>PUMA</h5>
                            <hr>
                        </div>
                        <div class="cat-hover">
                            <ul>
                                <li class="cat-hover-item"><a href="#">Mens</a></li>
                                <li class="cat-hover-item"><a href="#">Womens</a></li>
                                <li class="cat-hover-item"><a href="#">Kids</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cat-card">
                        <img src="IMAGES/asics 2.jpg" style="width: 100%;height: 100%;" alt="">
                        <div class="cat-heading">
                            <h5>ASICS</h5>
                            <hr>
                        </div>
                        <div class="cat-hover">
                            <ul>
                                <li class="cat-hover-item"><a href="#">Mens</a></li>
                                <li class="cat-hover-item"><a href="#">Womens</a></li>
                                <li class="cat-hover-item"><a href="#">Kids</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cat-card">
                        <img src="IMAGES/fila 2.jpg" style="width: 100%;height: 100%;" alt="">
                        <div class="cat-heading">
                            <h5>FILA</h5>
                            <hr>
                        </div>
                        <div class="cat-hover">
                            <ul>
                                <li class="cat-hover-item"><a href="#">Mens</a></li>
                                <li class="cat-hover-item"><a href="#">Womens</a></li>
                                <li class="cat-hover-item"><a href="#">Kids</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cat-card">
                        <img src="IMAGES/champion 2.jpg" style="width: 100%;height: 100%;" alt="">
                        <div class="cat-heading">
                            <h5>CHAMPION</h5>
                            <hr>
                        </div>
                        <div class="cat-hover">
                            <ul>
                                <li class="cat-hover-item"><a href="#">Mens</a></li>
                                <li class="cat-hover-item"><a href="#">Womens</a></li>
                                <li class="cat-hover-item"><a href="#">Kids</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cat-card">
                        <img src="IMAGES/everlast 2.jpg" style="width: 100%;height: 100%;" alt="">
                        <div class="cat-heading">
                            <h5>EVERLAST</h5>
                            <hr>
                        </div>
                        <div class="cat-hover">
                            <ul>
                                <li class="cat-hover-item"><a href="#">Mens</a></li>
                                <li class="cat-hover-item"><a href="#">Womens</a></li>
                                <li class="cat-hover-item"><a href="#">Kids</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cat-card">
                        <img src="IMAGES/skechers 2.jpg" style="width: 100%;height: 100%;" alt="">
                        <div class="cat-heading">
                            <h5>SKECHER</h5>
                            <hr>
                        </div>
                        <div class="cat-hover">
                            <ul>
                                <li class="cat-hover-item"><a href="#">Mens</a></li>
                                <li class="cat-hover-item"><a href="#">Womens</a></li>
                                <li class="cat-hover-item"><a href="#">Kids</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cat-card">
                        <img src="IMAGES/ellesse 2.jpg" style="width: 100%;height: 100%;" alt="">
                        <div class="cat-heading">
                            <h5>ELLESSE</h5>
                            <hr>
                        </div>
                        <div class="cat-hover">
                            <ul>
                                <li class="cat-hover-item"><a href="#">Mens</a></li>
                                <li class="cat-hover-item"><a href="#">Womens</a></li>
                                <li class="cat-hover-item"><a href="#">Kids</a></li>
                            </ul>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>




    

    <div class="container-sticky-social">
        <div>
            <ul style="padding: 0;margin: 0;">
                <li class="sticky-social" style="background-color: rgba(0, 136, 0, 0.904);"><a
                        href="https://web.whatsapp.com/"><i class="fa-brands fa-whatsapp"></i></a>
                </li>
                <li class="sticky-social" style="background-color: rgb(57, 57, 245);"> <a href="#"><i
                            class="fa-brands fa-facebook-f"></i></a>
                </li>
                <li class="sticky-social" style="background-color: rgb(50, 122, 182);"><a
                        href="https://web.whatsapp.com/"><i class="fa-brands fa-twitter"></i></a>
                </li>
            </ul>
        </div>
    </div>






    <div class="container categories-brand">
        <div style="display: flex;justify-content: center;align-items: center;">
            <h3 style="text-align: center;position: relative;width: max-content;font-weight: bold;margin-top: 80px;">
                SPORTS
            </h3>
        </div>
        <div class="brand-item">
            <div class="row"
                style="display: flex;justify-content: center;align-items: center;flex-direction: row;flex-wrap: wrap;">
                <?php
                    $fetch_cat = mysqli_query($con,"select * from category");
                    while($row = mysqli_fetch_array($fetch_cat)){
                        echo '
                            <div class="col-lg-3">
                                <div class="cat-card">
                                    <img src="admin/cimagefolder/'.$row[2].'" style="width: 100%;height: 100%;" alt="">
                                    <div class="cat-heading">
                                        <h5>'.$row[1].'</h5>
                                        <hr>
                                    </div>
                                    <div class="cat-hover">
                                        <ul>
                                            <li class="cat-hover-item"><a href="#">Footwear</a></li>
                                            <li class="cat-hover-item"><a href="#">Apparel</a></li>
                                            <li class="cat-hover-item"><a href="#">Equipments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        ';
                    }
                ?>
                <!-- <div class="col-lg-3">
                    <div class="cat-card">
                        <img src="IMAGES/football 2.jpeg" style="width: 100%;height: 100%;" alt="">
                        <div class="cat-heading">
                            <h5>FOOTBALL</h5>
                            <hr>
                        </div>
                        <div class="cat-hover">
                            <ul>
                                <li class="cat-hover-item"><a href="#">Footwear</a></li>
                                <li class="cat-hover-item"><a href="#">Apparel</a></li>
                                <li class="cat-hover-item"><a href="#">Equipments</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cat-card">
                        <img src="IMAGES/cricket 2.jpg" style="width: 100%;height: 100%;" alt="">
                        <div class="cat-heading">
                            <h5>CRICKET</h5>
                            <hr>
                        </div>
                        <div class="cat-hover">
                            <ul>
                                <li class="cat-hover-item"><a href="#">Footwear</a></li>
                                <li class="cat-hover-item"><a href="#">Apparel</a></li>
                                <li class="cat-hover-item"><a href="#">Equipments</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cat-card">
                        <img src="IMAGES/tennis 2.jpg" style="width: 100%;height: 100%;" alt="">
                        <div class="cat-heading">
                            <h5>TENNIS</h5>
                            <hr>
                        </div>
                        <div class="cat-hover">
                            <ul>
                                <li class="cat-hover-item"><a href="#">Footwear</a></li>
                                <li class="cat-hover-item"><a href="#">Apparel</a></li>
                                <li class="cat-hover-item"><a href="#">Equipments</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cat-card">
                        <img src="IMAGES/hockey 2.jpg" style="width: 100%;height: 100%;" alt="">
                        <div class="cat-heading">
                            <h5>HOCKEY</h5>
                            <hr>
                        </div>
                        <div class="cat-hover">
                            <ul>
                                <li class="cat-hover-item"><a href="#">Footwear</a></li>
                                <li class="cat-hover-item"><a href="#">Apparel</a></li>
                                <li class="cat-hover-item"><a href="#">Equipments</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cat-card">
                        <img src="IMAGES/basketball 2.jpg" style="width: 100%;height: 100%;" alt="">
                        <div class="cat-heading">
                            <h5>BASKETBALL</h5>
                            <hr>
                        </div>
                        <div class="cat-hover">
                            <ul>
                                <li class="cat-hover-item"><a href="#">Footwear</a></li>
                                <li class="cat-hover-item"><a href="#">Apparel</a></li>
                                <li class="cat-hover-item"><a href="#">Equipments</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cat-card">
                        <img src="IMAGES/gymming 3.jpeg" style="width: 100%;height: 100%;" alt="">
                        <div class="cat-heading">
                            <h5>GYMMING</h5>
                            <hr>
                        </div>
                        <div class="cat-hover">
                            <ul>
                                <li class="cat-hover-item"><a href="#">Footwear</a></li>
                                <li class="cat-hover-item"><a href="#">Apparel</a></li>
                                <li class="cat-hover-item"><a href="#">Equipments</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cat-card">
                        <img src="IMAGES/golf 2.jpg" style="width: 100%;height: 100%;" alt="">
                        <div class="cat-heading">
                            <h5>GOLF</h5>
                            <hr>
                        </div>
                        <div class="cat-hover">
                            <ul>
                                <li class="cat-hover-item"><a href="#">Footwear</a></li>
                                <li class="cat-hover-item"><a href="#">Apparel</a></li>
                                <li class="cat-hover-item"><a href="#">Equipments</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cat-card">
                        <img src="IMAGES/baseball 2.jpg" style="width: 100%;height: 100%;" alt="">
                        <div class="cat-heading">
                            <h5>BASEBALL</h5>
                            <hr>
                        </div>
                        <div class="cat-hover">
                            <ul>
                                <li class="cat-hover-item"><a href="#">Footwear</a></li>
                                <li class="cat-hover-item"><a href="#">Apparel</a></li>
                                <li class="cat-hover-item"><a href="#">Equipments</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cat-card">
                        <img src="IMAGES/cycling 3.jpg" style="width: 100%;height: 100%;" alt="">
                        <div class="cat-heading">
                            <h5>CYCLING</h5>
                            <hr>
                        </div>
                        <div class="cat-hover">
                            <ul>
                                <li class="cat-hover-item"><a href="#">Footwear</a></li>
                                <li class="cat-hover-item"><a href="#">Apparel</a></li>
                                <li class="cat-hover-item"><a href="#">Equipments</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cat-card">
                        <img src="IMAGES/swimming.jpeg" style="width: 100%;height: 100%;" alt="">
                        <div class="cat-heading">
                            <h5>SWIMMING</h5>
                            <hr>
                        </div>
                        <div class="cat-hover">
                            <ul>
                                <li class="cat-hover-item"><a href="#">Footwear</a></li>
                                <li class="cat-hover-item"><a href="#">Apparel</a></li>
                                <li class="cat-hover-item"><a href="#">Equipments</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cat-card">
                        <img src="IMAGES/scatting.jpeg" style="width: 100%;height: 100%;" alt="">
                        <div class="cat-heading">
                            <h5>SCATING</h5>
                            <hr>
                        </div>
                        <div class="cat-hover">
                            <ul>
                                <li class="cat-hover-item"><a href="#">Footwear</a></li>
                                <li class="cat-hover-item"><a href="#">Apparel</a></li>
                                <li class="cat-hover-item"><a href="#">Equipments</a></li>
                            </ul>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>








    <!-- <div class="container categories-brand">
        <div style="display: flex;justify-content: center;align-items: center;">
            <h3 style="text-align: center;position: relative;width: max-content;font-weight: bold;margin-top: 80px;">
                INDOOR GAMES
            </h3>
        </div>
        <div class="brand-item">
            <div class="row"
                style="display: flex;justify-content: center;align-items: center;flex-direction: row;flex-wrap: wrap;">
                <div class="col-lg-3">
                    <div class="cat-card">
                        <img src="IMAGES/ludo.jpeg" style="width: 100%;height: 100%;" alt="">
                        <div class="cat-heading">
                            <h5>LUDO</h5>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cat-card">
                        <img src="IMAGES/carrom 2.jpg" style="width: 100%;height: 100%;" alt="">
                        <div class="cat-heading">
                            <h5>CARROM</h5>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cat-card">
                        <img src="IMAGES/table tennis 2.jpg" style="width: 100%;height: 100%;" alt="">
                        <div class="cat-heading">
                            <h5>TABLE TENNIS</h5>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cat-card">
                        <img src="IMAGES/snooker.jpeg" style="width: 100%;height: 100%;" alt="">
                        <div class="cat-heading">
                            <h5>SNOOKER</h5>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cat-card">
                        <img src="IMAGES/cards.jpg" style="width: 100%;height: 100%;" alt="">
                        <div class="cat-heading">
                            <h5>CARDS</h5>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cat-card">
                        <img src="IMAGES/chess.jpg" style="width: 100%;height: 100%;" alt="">
                        <div class="cat-heading">
                            <h5>CHESS</h5>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cat-card">
                        <img src="IMAGES/Draft.jpeg" style="width: 100%;height: 100%;" alt="">
                        <div class="cat-heading">
                            <h5>DRAFT</h5>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cat-card">
                        <img src="IMAGES/puzzles.jpeg" style="width: 100%;height: 100%;" alt="">
                        <div class="cat-heading">
                            <h5>PUZZLES</h5>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cat-card">
                        <img src="IMAGES/psp 2.png" style="width: 100%;height: 100%;" alt="">
                        <div class="cat-heading">
                            <h5>PSP</h5>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cat-card">
                        <img src="IMAGES/Taboo.jpg" style="width: 100%;height: 100%;" alt="">
                        <div class="cat-heading">
                            <h5>TABOO</h5>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->










  
    </div>


    <?php
        include ("footer.php");
    ?>




    <script>
        new WOW().init();
    </script>

</body>

</html>
