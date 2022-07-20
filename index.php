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
    <style>
        .lower-nav .right .social .svg1:hover{
            color: white;
            margin-top: 0px;
        }
    </style>
</head>

<body>

    <?php
        include ("header.php");
    ?>
    










    <!-- bottom-nan -->
    <div class="container-fluid botton-nav">
        <div class="row">
            <div class="col-sm-3"><a href="#"><i class="fa-solid fa-house-chimney"></i></a></div>
            <div class="col-sm-3"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></div>
            <div class="col-sm-3"><a href="Categories.html"><i class="fa-solid fa-table-list"></i></a></div>
            <div class="col-sm-3"><a href="#"><i class="fa-solid fa-user"></i></a></div>
        </div>
    </div>











    <div class="container-fluid p-0 mt-2">
        <?php
            
        ?>
        <div class="container brands">
            <div class="row">
                <div class="col-lg-2 brandlogo brand_con">
                    <a href="#">
                        <img src="IMAGES/adidas.png" alt="..."></a>
                </div>
                <div class="col-lg-2 brandlogo brand_con">
                    <a href="#">
                        <img src="IMAGES/giant.png" alt="..."></a>
                </div>
                <div class="col-lg-2 brandlogo">
                    <a href="#">
                        <img src="IMAGES/jansport.png" alt="..."></a>
                </div>
                <div class="col-lg-2 brandlogo">
                    <a href="#">
                        <img src="IMAGES/puma.png" alt="..."></a>
                </div>
                <div class="col-lg-2 brandlogo">
                    <a href="#">
                        <img src="IMAGES/reebok.png" alt="..."></a>
                </div>
                <div class="col-lg-2 brandlogo">
                    <a href="#">
                        <img src="IMAGES/Yonex.png" alt="..."></a>
                </div>
            </div>
        </div>




        <div class="bootstrapslider container carousel-height p-0">
            <div id="carouselExampleCaptions" class="carousel slide carousel-height" data-bs-ride="carousel">
                <div class="carousel-indicators" style="height: 1vw;">
                    <button type="button" style="height: .25vw;width: 2.3vw;" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" style="height: .25vw;width: 2.3vw;" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" style="height: .25vw;width: 2.3vw;" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner carousel-height">
                    <div class="carousel-item active carousel-height">
                        <img src="IMAGES/First Slide.jpg" class="d-block w-100 carousel-height" alt="...">
                        <div class="carousel-caption  container"
                            style="padding-bottom: 5.8vw;text-align: left;margin-left: -3vw;">
                            <h1 style="font-size: 7.5vw;color: rgb(163, 41, 41);text-shadow: .2vw .2vw .4vw black;">
                                SALE !</h1>
                            <h1 style="font-size: 2.5vw;text-shadow: .2vw .2vw .4vw black;">UPTO <span
                                    style="font-size: 5.2vw;color: rgb(163, 41, 41);"> 20%</span> Off</h1>
                            <h1 style="font-size: 3vw;text-shadow: .2vw .2vw .4vw black;">On All
                                <span style="color: rgb(163, 41, 41);font-size: 6vw;">Sneakers</span>
                            </h1>
                            <button type="button"
                                style="background-color: white;color: rgb(163, 41, 41);width: 15vw; height: 4vw;font-size: 2vw;font-weight: bold;text-shadow: .1vw .1vw .1vw black;z-index: +2;">SHOP
                                NOW ></button>
                        </div>
                    </div>
                    <div class="carousel-item carousel-height">
                        <img src="IMAGES/cycling 2.jpg" class="d-block w-100 carousel-height" alt="...">
                        <div class="carousel-caption " style="margin-right: -6vw;text-align: right;padding: 9vw 0vw;">
                            <h1 style="font-size: 5vw;color: rgb(163, 41, 41);text-shadow: .2vw .2vw .4vw black;">
                                NEW ARRIVAL !</h1>
                            <h1 class="slide-h1" style="font-size: 3vw;text-shadow: .2vw .2vw .4vw black;">FOR ALL
                                <span style="font-size: 4.4vw;color: rgb(163, 41, 41);"> CYCLING </span> LOVERS
                            </h1>
                            <button type="button"
                                style="background-color: rgb(163, 41, 41);color: white;width: 16.5vw; height: 4vw;font-size: 1.8vw;font-weight: bold;text-shadow: .1vw .1vw .1vw black;">SHOP
                                NOW ></button>
                        </div>
                    </div>
                    <div class="carousel-item carousel-height">
                        <img src="IMAGES/GYMING SLIDE.jpg" class="d-block w-100 carousel-height" alt="...">
                        <div class="carousel-caption  container"
                            style="padding-bottom: 4vw;margin-left: -3vw;text-align: left;">
                            <h1 style="font-size: 5vw;color: rgb(163, 41, 41);text-shadow: .3vw .3vw .5vw black;">
                                Gymming Equipments Available!</h1>
                            <h1 style="font-size: 3vw;text-shadow: .2vw .2vw .4vw black;">UPTO <span
                                    style="font-size: 5vw;color: rgb(163, 41, 41);"> 20%</span> Off</h1>
                            <h1 style="font-size: 6vw;text-shadow: .2vw .2vw .4vw black;">For All
                                <span style="color: rgb(163, 41, 41);font-size: 8vw;">Gymmers</span>
                            </h1>
                            <button type="button"
                                style="margin-top: 2vw;background-color: rgb(163, 41, 41);color: white;width: 15vw; height: 4vw;font-size: 2vw;font-weight: bold;text-shadow: .1vw .1vw .1vw black;z-index: +2;">SHOP
                                NOW ></button>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>







        <div class="divider container pt-4">
            <div class="row">
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-3"><i class="fa-solid fa-credit-card"></i></div>
                        <div class="col-lg-9">
                            <h5 style="font-size: 1.5vw;margin-bottom: 0px;">Secure Payment</h5>
                            <h6 style="font-size: 1.2vw;">100% Secure Payment</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-3"><i class="fa-solid fa-comments"></i></div>
                        <div class="col-lg-9">
                            <h5 style="font-size: 1.5vw;margin-bottom: 0px;">Online Support</h5>
                            <h6 style="font-size: 1.2vw;">24 Houre Support</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-3"><i class="fa-solid fa-truck"></i></div>
                        <div class="col-lg-8">
                            <h5 style="font-size: 1.5vw;margin-bottom: 0px;">Free Delivery</h5>
                            <h6 style="font-size: 1.2vw;">Orders Over 2000</h6>
                        </div>
                    </div>
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










        <div class="categories container mt-4">
            <div class="row">
                <div class="col-lg-3 cat-item ">
                    <div class="cat-card">
                        <img src="IMAGES/women 2.jpg" style="width: 100%;height: 100%;" alt="">
                        <div class="cat-heading">
                            <h5>WOMEN</h5>
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
                <div class="col-lg-6 cat-item ">
                    <div class="cat-card">
                        <img src="IMAGES/men 2.jpg" style="width: 100%;height: 100%;" alt="">
                        <div class="cat-heading">
                            <h5>MEN</h5>
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
                <div class="col-lg-3 cat-item ">
                    <div class="cat-card">
                        <img src="IMAGES/Kid.jpg" style="width: 100%;height: 100%;" alt="">
                        <div class="cat-heading">
                            <h5>KIDS</h5>
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
            </div>
            <div class="row">
                <div class="col-lg-3 cat-item ">
                    <div class="cat-card">
                        <img src="IMAGES/apparel 3.jpg" style="width: 100%;height: 100%;" alt="">
                        <div class="cat-heading">
                            <h5>APPAREL</h5>
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
                <div class="col-lg-3 cat-item ">
                    <div class="cat-card">
                        <img src="IMAGES/equipments.jpg" style="width: 100%;height: 100%;" alt="">
                        <div class="cat-heading">
                            <h5>EQUIPMENTS</h5>
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
                <div class="col-lg-6 cat-item ">
                    <div class="cat-card">
                        <img src="IMAGES/footwear2.jpg" style="width: 100%;height: 100%;" alt="">
                        <div class="cat-heading">
                            <h5>FOOTWEAR</h5>
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
            </div>
        </div>






        <!-- The advertisment -->
        <center>
            <h4 class="adver" style="margin-bottom: -40px;opacity: .5;">Advertisement</h4>
            <section class="adver"
                style="display: flex;justify-content: center;align-items: center;position: relative;margin-top: -20px;">

                <div id="AdsDiv" class="container-fluid mt-5"
                    style="background-image: url(IMAGES/advertisement\ \(1\).jpg);height: max-content;width:max-content;background-size: cover;position: relative;">
                    <button id="AdsDivRemove" class="m-2 mt-1"
                        style="position: absolute;background-color: transparent;color: white;border: none;right: 0;"><i
                            class="fa-solid fa-xmark"></i></button>
                    <button class="m-2 mt-1"
                        style="position: absolute;background-color: transparent;color: white;border: none;right: 15px;"><i
                            class="fa-solid fa-question"></i></button>
                    <div class="row"
                        style="height: max-content;display: flex;justify-content: center;align-items: center;">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-12 mt-4"
                            style="text-shadow: 2px 2px rgba(0, 0, 0, 0.651);height: max-content;">
                            <h3 style="font-size: 2vw;color: white;font-weight: bolder;">AIRLINE
                                TICKETS
                            </h3>
                            <button class="downloadbutton" style="padding: 2px;border: 2px solid rgb(192, 27, 27);"><a
                                    id="readmore" style="color: white;" href="#">BOOK NOW</a></button>
                            <h6 style="color: white;">Cheapest packages for<br> Amaziest Tour</h6>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-12"
                            style="text-shadow: 2px 2px rgba(0, 0, 0, 0.651);height: max-content;">
                            <h3 style="font-size: 2vw;color: white;font-weight: bolder;line-height: 2.5vw;"
                                class="wow animate__animated animate__heartBeat" data-wow-duration="1s"
                                data-wow-delay=".5s">20%
                                DISCOUNT
                            </h3>
                            <h5 style="font-size: 1.8vw;color: white;font-weight: bolder;line-height: 2.5vw;">WITH
                            </h5>
                            <h6><a class="navbar-brand" href="https://www.amazingbridges.ml/" target="_blank"><span
                                        style="margin-left: -3vw;letter-spacing: 1px;"
                                        class="animate__animated animate__fadeIn" data-wow-duration="2s"
                                        data-wow-delay=".5s"><span class="lg" style="letter-spacing: 0px;">AMAZING
                                        </span><span class="go"
                                            style="letter-spacing: 0px;margin-left: -10px;">BRIDGES</span></span></a>
                            </h6>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-12"
                            style="display: flex;justify-content: center;align-items: center;">
                            <img src="IMAGES/Logo.png" style="width: 18vw;height: 17vwpx;">
                        </div>
                    </div>
                </div>
            </section>
        </center>























        <div class="container mt-4 p-0">
            <div class="march23" style="position: relative;">
                <img class="screen" src="IMAGES/23RD MARCH.jpg" style="width: 100%;height: 100%;height: 270px;" alt="">
                <img class="tab" src="IMAGES/23RD MARCH TABLET.jpg" style="width: 100%;height: 100%;height: 270px;"
                    alt="">
                <img class="phone" src="IMAGES/23RD MARCH TABLET PHONE.jpg"
                    style="width: 100%;height: 100%;height: 270px;" alt="">
                <div class="logo"
                    style="position: absolute;top: 10px;right: 40px;font-style: normal;display: flex;justify-content: center;align-items: center;flex-direction: column;">
                    <a href="index.html">
                        <div class="logo"><span>Y</span>ouros <i class="fa-solid fa-volleyball"
                                style="color: white;"></i><span> S</span>ports</div>
                    </a>
                    <h3 style="text-shadow: none;" class="wow animate__animated animate__heartBeat"
                        data-wow-duration="1s" data-wow-delay=".5s"><a href="#">Avail Offer Now !</a></h3>
                    <h2 style="text-shadow: none;margin-top: 25px;"><a href="#" style="color: rgb(253, 189, 63);">Apply
                            Code :</a></h2>
                    <h4 style="text-shadow: none;"><a href="#">Youros23sports</a></h4>
                </div>
            </div>
        </div>





        <!-- new arrivals -->
        <div class="container-fluid cards-container mt-5">
            <div class="container inner-container">
                <div>
                    <h1 style="font-variant: small-caps;font-weight: bolder;color: white;font-size: 50px;">NEW ARRIVALS
                        ! !</h1>
                    <h1 style="color: white;">For SUMMER</h1>
                    <h1 style="font-variant: small-caps;font-weight: bolder;color: white;font-size: 50px;">Buy Now
                        !</h1>
                </div>

                <?php
                $fetchproduct = mysqli_query($con,'SELECT * from product
                INNER JOIN category
                ON
                product.pcategory = category.cid
                INNER JOIN brand
                ON
                product.pbrand = brand.bid
                ');
                while($row = mysqli_fetch_array($fetchproduct)){
                    echo '
                        <div class="card container m-2 p-0" style="width: 200px;height:350px">
                            <img src="admin/pimagefolder/'.$row[6].'" class="card-img-top" alt="">
                            <button onclick="heartvalue()" class="heart-button" id="heart-button"><i class="fa-solid fa-heart">
                                </i></button>
                            <div class="card-body container-fluid">
                                <h5 class="card-title"><center>'.$row[1].'</center></h5>
                                <p class="card-text"><b>Price: </b><strike><small>1200</small></strike>'.$row[2].'</p>
                                <div class="forbtn" style="position: absolute;margin-bottom: -50%"><button style="width: 20%;margin-right: 2%;" onclick="cartvalue()"
                                        class="card-button"><i class="fa-solid fa-cart-shopping"> </i></button>
                                    <button style="width: 50%;" class="card-button">Buy Now</button><button
                                        style="width: 20%;margin-left: 2%;" class="card-button" data-bs-toggle="modal"
                                        data-bs-target="#modalId"><i class="fa fa-eye"></i></button>
                                </div>
                                <div class="modal" id="modalId">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">'.$row[1].'</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <img class="img-fluid" style="border-radius: 10px;"
                                                            src="admin/pimagefolder/'.$row[6].'" alt="">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <h3 class="mb-3">'.$row[1].'</h3>
                                                        <h6 class="m-0">Specifications :</h6>
                                                        <p style="font-size: small;">'.$row[3].'</p>
                                                        <h6 class="m-0">Price :</h6>
                                                        <p style="color: gray;">Rs: <strike><small>1200</small></strike> '.$row[2].'
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn" style="background-color: green;"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    ';
                }
                ?>    
            </div>
        </div>





        <?php
        include ("footer.php");
        ?>
    </div>












    <script>
        new WOW().init();
    </script>
</body>

</html>
