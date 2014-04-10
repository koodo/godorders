<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>模特礼仪 - 天旨信息咨询管理有限公司</title>
        <link href="/sources/core.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="/sources/jquery-min.js"></script>
        <script type="text/javascript" src="/sources/jquery-mousewheel/jquery.mousewheel.js"></script>
        <script type="text/javascript">
            $(function(){
                $('.metro-block').hover(function(){
                    $('.mb-cation-bottom',$(this)).css('display','block');
                },function(){
                    $('.mb-cation-bottom',$(this)).css('display','none');
                });
                $('#model-wapp').width(($('.model-items').length + 2) * 240);

                (function(){
                    var Models = $('.model-items');
                    var cur = 0;
                    var SlideF  = $('.fake-slidebar-h');

                    SlideF.width((((cur + 4) / Models.length) * 100) + "%");

                    $('#model-wapp').mousewheel(function(event,delta){
                        if(delta > 0){
                            // up
                            if(cur > 0) cur --;
                            $('.model-items').eq(cur).show(300);
                        } else {
                            // down
                            if(Models.length - cur >= 5){
                                $('.model-items').eq(cur++).hide(300);
                            }
                        }
                        SlideF.width((((cur + 4) / Models.length) * 100) + "%");
                    });
                })();
            });
        </script>
        <script src="/sources/js/main.js"></script>
        <style type="text/css">
            html body{
                padding-bottom:0;
            }
            .metro-block{
                position:relative;
            }
        </style>
    </head>
    <body>
        <div class="sdCenter noscroll" style="width:990px;">
            <div class="nav-top">
                <a href="/" class="nav-top-btn nav-top-btn-mod"></a>
                <span class="nav-top-caption1">模特礼仪</span>
                <span class="nav-top-caption2">Models</span>
                <span class="nav-top-caption3">etiquette</span>
            </div>
            <div id="model-wapp">
                <?php foreach ($model_list as $model) { ?>
                    <a href="/v/model/<?php echo $model['id'] ?>.html" class="pointer" title="点击查看 <?php echo $model['name'] ?> 的资料">
                        <div class="metro-block model-items" style="width:240px;float:left;height:480px;background:url('/sources/img/model-list/mod<?php echo $model['imgpath'] ?>') center no-repeat transparent;">
                            <b class="mb-cation-bottom"><?php echo $model['name'] ?></b>
                        </div>
                    </a>
                <?php } ?>
                <div class="clear"></div>
                <div class="fake-slidebar-f">
                    <a class="fake-slidebar-h" href="javascript:;"></a>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <span class="hidden"><script src="http://s14.cnzz.com/stat.php?id=5566781&web_id=5566781" language="JavaScript"></script></span>
    </body>
</html>
