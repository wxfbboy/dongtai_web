<?php
require_once 'init.php';
$cid = empty($cid)?5:intval($cid);
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
            <?php
            $r = $dosql->GetOne("select * from `#@__infoclass` where id=$cid");
            $pid = $r['parentid'];
            if($pid == 0){
                $dosql->Execute("select * from `#@__infoclass` where parentid=$cid and checkinfo=true");
            }
            else {
                $dosql->Execute("select * from `#@__infoclass` where parentid=$pid and checkinfo=true");
            }
            while ($row = $dosql->getArray()){
                if($row['linkurl']!=''){
                    $gourl = $row['linkurl'];
                }
                else{
                    $gourl = '';
                }
            ?>
            <a href="<?php echo $gourl; ?>"><?php echo $row['classname']; ?></a>
<!--            <a href="#">产品分类2</a>-->
<!--            <a href="#">产品分类3</a>-->
<!--            <a href="#">产品分类4</a>-->
<!--            <a href="#">产品分类5</a>-->
<!--            <a href="#">产品分类6</a>-->
            <?php } ?>
        </div>
        <div class="smlMainPro">
            <ul>
                <?php
                    $dopage->GetPage("select * from `#@__infolist` where (classid=$cid or parentid=$cid) and checkinfo=true and delstate='' order by orderid desc",4);
                    while ($row = $dosql->GetArray()){
                        if($row['picurl']!=''){
                            $picurl = '../'.$row['picurl'];
                        }
                        else{
                            $picurl = '/m/images/nofoundpic.gif';
                        }
                ?>
                <li>
                    <img src="<?php echo $picurl;?>" />
                    <h3><?php echo ReStrLen($row['title'],12); ?></h3>
                </li>
                <?php
                    }
                ?>
<!--                <li>-->
<!--                    <img src="images/1532938590.jpg" />-->
<!--                    <h3>标题内容信息文字部分</h3>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <img src="images/1532938590.jpg" />-->
<!--                    <h3>标题内容信息文字部分</h3>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <img src="images/1532938590.jpg" />-->
<!--                    <h3>标题内容信息文字部分</h3>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <img src="images/1532938590.jpg" />-->
<!--                    <h3>标题内容信息文字部分</h3>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <img src="images/1532938590.jpg" />-->
<!--                    <h3>标题内容信息文字部分</h3>-->
<!--                </li>-->
            </ul>
            <?php echo $dopage->GetList(); ?>
        </div>
    </section>
    <?php require_once 'footer.php' ?>
</footer>
</body>
</html>