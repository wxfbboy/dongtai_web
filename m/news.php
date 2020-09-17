<?php
require_once 'init.php';
$cid = empty($cid)?2:intval($cid);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0,user-scalable=no,minimal-ui">
    <?php echo GetHeader(1,$cid) ?>
    <link rel="stylesheet" href="css/webStyle.css">
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/public.js"></script>
</head>
<body>
<?php require_once 'header.php' ?>
<section class="smlBanner">
    <img src="images/banner1.jpg" />
</section>
<section class="smlMain">
    <div class="smlMainBtn">
        <a href="#">产品分类1</a>
        <a href="#">产品分类2</a>
        <a href="#">产品分类3</a>
        <a href="#">产品分类4</a>
        <a href="#">产品分类5</a>
        <a href="#">产品分类6</a>
    </div>
    <div class="smlMainNw">
        <ul>
            <li>
            <a href="#">
                <time datetime="" class="time">
                    <span>08-01</span>
                    2018
                </time>
                <div class="txt">
                    <h4>中卫至兰州铁路项目（宁夏段）中标结果</h4>
                    <p>新建中卫至兰州铁路（中卫-白银段）位于宁夏回族自治区和甘肃省境内，线路北起宁夏回族...</p>
                </div>
            </a>
        </li>
            <li>
            <a href="#">
                <time datetime="" class="time">
                    <span>08-01</span>
                    2018
                </time>
                <div class="txt">
                    <h4>中卫至兰州铁路项目（宁夏段）中标结果</h4>
                    <p>新建中卫至兰州铁路（中卫-白银段）位于宁夏回族自治区和甘肃省境内，线路北起宁夏回族...</p>
                </div>
            </a>
        </li>
        </ul>
    </div>
</section>
<?php require_once 'footer.php' ?>
</body>
</html>