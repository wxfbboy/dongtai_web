<?php require_once(dirname(__FILE__).'/include/config.inc.php'); ?>
<script type="text/javascript">
    var mobileAgent = new Array("iphone", "ipod", "ipad", "android", "mobile", "blackberry", "webos", "incognito", "webmate", "bada", "nokia", "lg", "ucweb", "skyfire");
    var browser = navigator.userAgent.toLowerCase();
    var isMobile = false;
    for (var i=0; i<mobileAgent.length; i++){
        if (browser.indexOf(mobileAgent[i])!=-1){
            isMobile = true;
            break;
        }
    }
    if(isMobile == true){
        location.href = 'm/index.php';
    }else {

    }
</script>