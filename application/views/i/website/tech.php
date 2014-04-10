<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>前沿技术 - 天旨信息咨询管理有限公司</title>
        <link href="/sources/core.css" rel="stylesheet" type="text/css" />
        <script src="/sources/jquery-1.10.1.min.js"></script>
        <script type="text/javascript">
            $(function(){
                var dur = 500;
                $('.metro-block').eq(0).animate({left:"0px",top:"0px"},dur);
                $('.metro-block').eq(1).animate({top:"0px",left:"250px"},dur);
                $('.metro-block').eq(2).animate({top:"0px",left:"500px"},dur);
                $('.metro-block').eq(3).animate({top:"0px",right:"0px",left:"750px"},dur);
                $('.metro-block').eq(4).css('top','250px').animate({bottom:"0px",left:"0px"},dur);
                $('.metro-block').eq(5).css('top','250px').animate({bottom:"0px",left:"250px"},dur);
                $('.metro-block').eq(6).animate({right:"0px",left:"750px"},dur);
                $('.sdCenter').css('marginTop',($(document).height() - $('.sdCenter').height())/2);
            });
        </script>
    </head>
    <body>
        <div class="sdCenter">
            <div class="nav-top" style="_margin-left:5px;">
                <a href="/i/website.html" class="nav-top-btn nav-top-btn-web"></a>
                <span class="nav-top-caption1">前沿技术</span>
            </div>
            <div style="height:500px;position:relative;">
                <div class="metro-block topleft" style="width:240px;height:240px;background:url('/sources/img/icon/HTML5.png') center no-repeat #f16529;">

                </div>
                <div class="metro-block topleft" style="width:240px;height:240px;background:url('/sources/img/icon/Adobe Photoshop.png') center no-repeat #0c5fa1;">

                </div>
                <div class="metro-block topleft" style="width:240px;height:240px;background:url('/sources/img/icon/Adobe Flash.png') center no-repeat #ce0a0a;">

                </div>
                <div class="metro-block topright" style="width:240px;height:240px;background:url('/sources/img/icon/js.png') center no-repeat #3399ff;">

                </div>
                <div class="metro-block bottomleft" style="width:240px;height:240px;background:url('/sources/img/icon/jQuery.png') center no-repeat #FFF;">

                </div>
                <div class="metro-block bottomleft" style="border:1px solid #ddd;width:488px;height:238px;background:url('/sources/img/icon/aliyun.png') center no-repeat #78b989;">

                </div>
                <div class="metro-block" style="right:-999px;top:250px;width:240px;height:240px;background:url('/sources/img/icon/codeigniter.png') center no-repeat #1b1b1b;">

                </div>
            </div>
        </div>
    </body>
</html>