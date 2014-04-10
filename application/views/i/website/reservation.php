<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>网站建设预约 - 天旨信息咨询管理有限公司</title>
        <link href="/sources/core.css" rel="stylesheet" type="text/css" />
        <script src="/sources/jquery-1.10.1.min.js"></script>
        <script src="/sources/js/main.js"></script>
        <script type="text/javascript">
            $(function(){
                $('.add-on-input').each(function(){
                    $(this).width($(this).parent().width() - $(this).siblings('.add-on').width() - 3);
                });
                $('.add-on-input').eq(0).focus();
                $('#submit-btn').click(function(){
                    var form = $('#reser-form');
                    $.post('/P/smReservation.html',form.serialize(),function(res){
                        console.log(res);
                        if(res == '1'){
                            alert('申请成功！');
                            window.location.href='/i/website.html';
                        }
                    });
                });
            });
        </script>
    </head>
    <body>
        <div class="sdCenter">
            <div class="nav-top" style="_margin-left:10px;">
                <a href="/" class="nav-top-btn nav-top-btn-web"></a>
                <span class="nav-top-caption1">在线预约</span>
                <span class="nav-top-caption2">Reservation</span>
            </div>
            <div style="height:250px;position:relative;">
                <a href="/reservation/models.html" class="pointer" title="点击预约模特服务">
                    <div class="metro-block" style="left:0;width:490px;height:240px;background:url('/sources/img/Live-Messenger-alt-3.png') 20% center no-repeat #f39501;">
                        <div class="metro-block-caption-big">
                            <b class="metro-block-sdtext font28">预约模特服务</b>
                            <b class="metro-block-sdtext font-sub">Models Etiquette</b>
                        </div>
                    </div>
                </a>
                <a href="/reservation/website.html" class="pointer" title="点击预约网站建设">
                    <div class="metro-block" style="left:500px;width:490px;height:240px;background:url('/sources/img/Personalize.png') 20% center no-repeat #00a8ec;">
                        <div class="metro-block-caption-big">
                            <b class="metro-block-sdtext font28">预约网站建设</b>
                            <b class="metro-block-sdtext font-sub">WebSite Buliding</b>
                        </div>
                    </div>
                </a>
                <!--<form class="metro-block" id="reser-form" style="width:410px;-width:405px;height:160px;padding:40px;background:#209efe;">
                    <span class="sdText">
                        <span class="add-on" style="width:87px;">公司/个人名</span>
                        <input class="add-on-input" name="name" autofocus="true"/>
                    </span>
                    <span class="sdText">
                        <span class="add-on" style="width:87px;">联系电话</span>
                        <input class="add-on-input" name="phone" />
                    </span>
                    <span class="sdText">
                        <span class="add-on" style="width:87px;">QQ</span>
                        <input class="add-on-input" name="qq" />
                    </span>
                    <span class="sdText">
                        <span class="add-on" style="width:87px;">地址</span>
                        <input class="add-on-input" name="address" />
                    </span>
                </form>-->
            </div>
            <!--<a class="metro-btn" href="javascript:;" id="submit-btn">提交申请</a>-->
            <div class="clear"></div>
        </div>
    </body>
</html>