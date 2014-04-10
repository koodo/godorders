<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>在线预约 - 天旨信息咨询管理有限公司</title>
        <link href="/sources/core.css" rel="stylesheet" type="text/css" />
        <script src="/sources/jquery-1.10.1.min.js"></script>
        <script src="/sources/js/main.js"></script>
        <script type="text/javascript">
            $(function(){
                var dur = 500;
                $('.metro-block').eq(0).animate({left:"0px",top:"0px"},dur);
                $('.metro-block').eq(1).animate({top:"0px",right:"0px"},dur,function(){$(this).css('left',"500px");});
            });
        </script>
    </head>
    <body>
        <div class="sdCenter">
            <div class="nav-top" style="_margin-left:5px;">
                <a href="/" class="nav-top-btn nav-top-btn-web"></a>
                <span class="nav-top-caption1">在线预约</span>
                <span class="nav-top-caption2">Reservation</span>
            </div>
            <div style="height:250px;position:relative;">
                <a href="/reservation/models.html" class="pointer" title="点击预约模特服务">
                    <div class="metro-block left" style="width:490px;height:240px;background:url('/sources/img/Live-Messenger-alt-3.png') 20% center no-repeat #f39501;">
                        <div class="metro-block-caption-big">
                            <b class="metro-block-sdtext font28">预约模特服务</b>
                            <b class="metro-block-sdtext font-sub">Models Etiquette</b>
                        </div>
                    </div>
                </a>
                <a href="/reservation/website.html" class="pointer" title="点击预约网站建设">
                    <div class="metro-block right" style="width:490px;height:240px;background:url('/sources/img/Personalize.png') 20% center no-repeat #00a8ec;">
                        <div class="metro-block-caption-big">
                            <b class="metro-block-sdtext font28">预约网站建设</b>
                            <b class="metro-block-sdtext font-sub">WebSite Buliding</b>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <span class="hidden"><script src="http://s14.cnzz.com/stat.php?id=5566781&web_id=5566781" language="JavaScript"></script></span>
    </body>
</html>