<?php require_once 'init.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0,user-scalable=no,minimal-ui">
    <?php echo GetHeader() ?>
    <link rel="stylesheet" href="css/webStyle.css">
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/public.js"></script>
</head>
<body>
    <?php require_once 'header.php' ?>
    <section class="banner">
        <img src="images/banner.jpg" />
    </section>
    <div class="pubMain">
        <section class="pubArt">
            <div class="pubTitle">
                <h2>高效混凝土预制件自动生产线</h2>
                <i></i>
                <p>AUTOMATIC PRODUCTION LINE</p>
            </div>
            <div class="pubMain">
                <div class="artBox">
                    <div class="pic">
                        <img src="images/pro1.jpg" />
                    </div>
                    <div class="txt">
                        <b>01</b>
                        <h3>设备功能</h3>
                        <i></i>
                        <p>高效混凝土预制件自动生产线，由混凝土滚装车上料，全自动生产各类小预制件，斜拉上料、平轨出料、振动成型、料盒辊推、叉车转晒，用于野外路桥...</p>
                    </div>
                </div>
                <div class="artBox">
                    <div class="pic">
                        <img src="images/pro2.jpg" />
                    </div>
                    <div class="txt">
                        <b>02</b>
                        <h3>设备优势</h3>
                        <i></i>
                        <p>高效混凝土预制件自动生产线，由混凝土滚装车上料，全自动生产各类小预制件，斜拉上料、平轨出料、振动成型、料盒辊推、叉车转晒，用于野外路桥...</p>
                    </div>
                </div>
                <div class="artBox">
                    <div class="pic">
                        <img src="images/pro3.jpg" />
                    </div>
                    <div class="txt">
                        <b>03</b>
                        <h3>设备特点</h3>
                        <i></i>
                        <p>高效混凝土预制件自动生产线，由混凝土滚装车上料，全自动生产各类小预制件，斜拉上料、平轨出料、振动成型、料盒辊推、叉车转晒，用于野外路桥...</p>
                    </div>
                </div>
            </div>
            <a href="###" class="pubBtn">查看全部</a>
        </section>
        <section class="about">
            <div class="pubTitle">
                <h2>公司简介</h2>
                <i></i>
                <p>Company profile</p>
            </div>
            <div class="txt">
                <?php echo Info(3,180); ?>
            </div>
            <a href="about.php" class="pubBtn">查看全部</a>
            <div class="pic">
                <img src="images/abtPic1.jpg" />
            </div>
            <div class="pubTitle" style="margin-top: 1.2rem">
                <h2>专利证书</h2>
                <i></i>
                <p>COMPANY PROFILE</p>
            </div>
            <div class="txt">
                <?php echo Info(22,180); ?>
            </div>
            <a href="about.php" class="pubBtn">查看全部</a>
            <div class="pic">
                <img src="images/abtPic2.jpg" />
            </div>
        </section>
        <section class="news">
            <div class="pubTitle">
                <h2>新闻中心</h2>
                <i></i>
                <p>News Information</p>
            </div>
            <ul>
                <?php
                    $dosql->Execute("select * from `#@__infolist` where (classid=4 or parentid=4) and checkinfo=true and delstate='' order by orderid desc limit 0,4");
                    while($row = $dosql->GetArray()){
                ?>
                <li>
                    <a href="#">
                        <time datetime="" class="time">
                            <span><?php echo MyDate('m-d',$row['posttime']); ?></span>
                            <?php echo MyDate('Y',$row['posttime']); ?>
                        </time>
                        <div class="txt">
                            <h4><?php echo ReStrLen($row['title'],20); ?></h4>
                            <p><?php echo ReStrLen($row['description'],40); ?></p>
                        </div>
                    </a>
                </li>
                <?php
                    }
                ?>
<!--                <li>-->
<!--                    <a href="#">-->
<!--                        <time datetime="" class="time">-->
<!--                            <span>08-01</span>-->
<!--                            2018-->
<!--                        </time>-->
<!--                        <div class="txt">-->
<!--                            <h4>中卫至兰州铁路项目（宁夏段）中标结果</h4>-->
<!--                            <p>新建中卫至兰州铁路（中卫-白银段）位于宁夏回族自治区和甘肃省境内，线路北起宁夏回族...</p>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </li>-->
            </ul>
            <a href="news.php" class="pubBtn">查看全部</a>
        </section>
        <?php require_once 'footer.php' ?>
    </div>
</body>
</html>