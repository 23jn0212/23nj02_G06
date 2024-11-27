<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="bootstrap-5.0.0-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.0.0-dist/js/bootstrap.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/slideshow.js"></script>
    <link rel="stylesheet" href="css/slideshow.css"/>

    <meta charset="utf-8">
    <title>デュエマメニュー</title>
</head>
<body>
    <?php include "header2.php" ?>

    <?php include "DhuemaHeader.php" ?>
    <div class="container">

        <div calss="row">
            <!-- スライドショーにする-->
            <ul id="slide-items">
                <li class="current"><img src="images/mslide_1.jpg" alt=""></li>
                <li><img src="images/mslide_2.jpg" alt=""></li>
                <li><img src="images/mslide_3.jpg" alt=""></li>
                <li><img src="images/mslide_4.jpg" alt=""></li>
            </ul>
        </div>

        <?php include "dSearch.php" ?>

        <div calss="row">
            <a href="">
                <img src="images/tyouhou.png" alt="トピック" class="col-md-5">
            </a>

            <a href="">
                <img src="images/トピックデュエマタイトル1号.jpg" alt="トピック" class="col-md-5">
            </a>

        </div>

        
    </div>
    
    
</body>
</html>