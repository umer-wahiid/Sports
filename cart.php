<?php
    include("connect.php");
    session_start();
    // if(isset($_SESSION["userid"])==null){
    //     header("location:index.php");
    // }
    // else{
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
    <title>Cart/Youros Sports</title>
    <STYLE>
        .main-header{
            margin-top: 0px;
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
                Cart
            </h3>
        </div>
        <div class="row">
            <form class="col-9" action="" method="POST" enctype="multipart/form-data">
                <table width="100%" class="table">
                    <thead>
                        <tr>
                            <th width="50%">Products</th>
                            <th width="15%">Price</th>
                            <th width="12%">Qty.</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
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
                        <tr>
                        <td style="display:flex;">
                        <img src="IMAGES/shoe png.png" width="60px" height="60px" alt="">
                        <h6 class="p-3" style="font-weight: bold;">Sneakers <br><span style="font-weight: 450; opacity:85%;"> Brand : Nike </span></h6>
                        </td>
                            <td class="pt-3">
                                <h6 style="opacity:90%;" name="price">10000</h6>
                            </td>
                            <td class="pt-3">
                                <input type="button" name="sub" value="-" style="width:13px;background-color:transparent;border: none;">
                                <input type="number" name="number" style="width:40px; height:23px;font-size: 12px;">
                                <input type="button" name="add" value="+" style="width:13px;background-color:transparent;border: none;">
                            </td>
                            <td class="pt-3"> 
                                Rs. 1000
                            </td>
                        </tr>';}
                        ?>
                        <tr>
                            <td style="display:flex;">
                                <img src="IMAGES/shoe png.png" width="60px" height="60px" alt="">
                                <h6 class="p-3" style="font-weight: bold;">Sneakers <br><span style="font-weight: 450; opacity:85%;"> Brand : Nike </span></h6>
                            </td>
                            <td class="pt-3">
                                <h6 style="opacity:90%;">Rs. 10000</h6>
                            </td>
                            <td class="pt-3">
                                <input type="button" name="sub" value="-" style="width:13px;background-color:transparent;border: none;">
                                <input type="number" name="qty" style="width:40px; height:23px;font-size: 12px;">
                                <input type="button" name="add" value="+" style="width:13px;background-color:transparent;border: none;">
                            </td>
                            <td class="pt-3">
                                <h6 style="opacity:90%;">Rs. 10000</h6>
                            </td>
                        </tr>
                        <tr>
                            <td style="display:flex;">
                                <img src="IMAGES/shoe png.png" width="60px" height="60px" alt="">
                                <h6 class="p-3" style="font-weight: bold;">Sneakers <br><span style="font-weight: 450; opacity:85%;"> Brand : Nike </span></h6>
                            </td>
                            <td class="pt-3">
                                <h6 style="opacity:90%;">Rs. 10000</h6>
                            </td>
                            <td class="pt-3">
                                <input type="button" name="sub" value="-" style="width:13px;background-color:transparent;border: none;">
                                <input type="number" name="qty" style="width:40px; height:23px;font-size: 12px;">
                                <input type="button" name="add" value="+" style="width:13px;background-color:transparent;border: none;">
                            </td>
                            <td class="pt-3">
                                <h6 style="opacity:90%;">Rs. 10000</h6>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="button" name="shopping" value="Continue Shopping" class="form-control btn btn-success"></td>
                            <td><input type="button" name="clearcart" value="Clear Cart" class="form-control btn btn-danger"></td>
                            <td></td>
                            <td>Rs.<span style="font-weight:500;"> 30,000</span></td>
                        </tr>
                    </tbody>
                </table>
            </form>
            <div class="col-3 border" style="height: 200px;" >
                <h6 class="pt-4" style="padding-left:20px;">Subtotal : <span style="font-weight: 400;">Rs. 30,000</span></h6>
                <h6 class="pt-2" style="padding-left:20px;">Shipping : <span style="font-weight: 400;">Rs. 5,00</span></h6>
                <h6 class="pt-2" style="padding-left:20px;">Total : <span style="font-weight: 400;">Rs. 30,500</span></h6>
                <input type="button" name="checkout" value="Check Out" class="btn btn-success mt-2" style="margin-left: 20px;">
            </div>
        </div>

    </div>





        <?php
        include ("footer.php");
    ?>




        <script>
            new WOW().init();
        </script>

</body>

</html>
<?php
    // }
?>