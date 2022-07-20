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
        .contact-box{
            display: flex;
            margin-top: 40px;
        }
        .contact-left{
            flex-basis: 70%;
            padding: 40px 60px;
        }
        .contact-right{
            height: 445px;
            flex-basis: 40%;
            padding: 40px;
            background: green;
            color: white;
        }
        .input-row{
            display: flex;
            justify-content: space-between;
        }

        .input-row .input-group{
            flex-basis: 45%;
        }
        input{
            width: 100%;
            border: none;
            border-bottom: 1px solid #ccc;
            outline: none;
            padding-bottom: 5px;
        }
        textarea{
            width: 100%;
            border: 1px solid #ccc;
            outline: none;
            padding: 10px;
            box-sizing: border-box;
            resize: none;
        }

        label{
            margin-bottom: 6px;
            display: block;
        }
        .contact-left h3{
            font-weight: 600;
            margin-bottom: 30px;
        }
        .contact-right h3{
            font-weight: 600;
            margin-bottom: 30px;
        }
        tr td:first-child{
            padding-right: 20px;
        }
        tr td{
            padding: 20px;
        }

    </STYLE>
</head>

<body>
        <?php
            include ("header.php")
        ?>





        <!--CONTACT US-->
        <div class="container categories-brand">
            <div style="display: flex;justify-content: center;align-items: center;">
                <h3 style="text-align: center;position: relative;width: max-content;font-weight: bold;margin-top: 140px;">
                    PROFILE
                </h3>
            </div>
            <center><p style="padding: 10px;padding-top: 0px;">We would love to respond to your queries and help you!<br>Feel free to get
            in touch with us.</p></center>
            <div class="contact-box">
                <div class="contact-left">
                    <form action="" method="POST"></form>
                        <div class="input-row">
                            <div class="input-group">
                                <label>Name</label>
                                <input type="text" name="txtname" required="required" pattern="[A-Za-z]{1,}" title="Use Only Letters"
                                    placeholder="Enter your Name">
                            </div>
                            <div class="input-group">
                                <label>Phone</label>
                                <input type="text"  name="txtcontact" required="required" pattern=".{13}" title="+92**********"
                                    placeholder="Enter your Number">
                            </div>
                        </div>
                        <div class="input-row" style="margin-top: 20px;">
                            <div class="input-group">
                                <label>Email</label>
                                <input type="email" name="txtemail" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                                    placeholder="Enter your email">
                            </div>
                            <div class="input-group">
                                <label>Subject</label>
                                <input required="required"  name="txtsubject" type="text" placeholder="Your Subject">
                            </div>
                        </div>
                        <label style="margin-top: 20px;">Message</label>
                        <textarea required="required" name="txtmsg" rows="5" placeholder="Your Message"></textarea>
                        <input type="submit" name="send" class="btn btn-success" value="Send" />
                    </form>
                </div>
                <div class="contact-right">
                    <h4>Reach us</h4>
                    <table>
                        <tr>
                            <td>Email</td>
                            <td>umerwahiid48@gmail.com</td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td>+92 315-1113099</td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>Street No.91 Floor No.6 Near Mobile Market Saddar</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>


        <?php    
            if(isset($_POST["send"])){
                $to = "umerwahiid48@gmail.com";
                $sub = $_POST["txtsubject"];
                $msg = $_POST["txtmsg"];
                $from = $_POST["txtemail"];

                if(mail($to,$sub,$msg,$from)){
                    echo "<h1>Sent !</h1>";
                }
                else{
                    echo "<h1>Error !</h1>";
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