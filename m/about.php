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
<!--        <img src="images/abtPic2.jpg" />-->
        <div class="smlMainAbt">
            <?php echo Info($cid) ?>
        </div>
    </section>
    <?php require_once 'footer.php' ?>
</body>
</html>