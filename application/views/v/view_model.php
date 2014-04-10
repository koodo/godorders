<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo $info['name'] ?> - 模特经纪 - 天旨信息咨询管理有限公司</title>
        <link href="/sources/core.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="/sources/jquery-1.10.1.min.js"></script>
        <script type="text/javascript">
            $(function(){
                var dur = 500;
                $('#info-wapper').height($('.metro-block').eq(0).height() + Math.max($('.block-info').eq(0).height(),$('.metro-block').eq(3).height() + $('.metro-block').eq(4).height() + 100));
                $('.metro-block').eq(1).animate({left:"0px",top:"500px"},dur);
                $('.metro-block').eq(2).animate({left:"250px",top:"500px"},dur);
                $('.metro-block').eq(3).animate({left:"500px",top:"500px"},dur);
                $('.metro-block').eq(4).animate({left:"500px",top:540 + $('.metro-block').eq(3).height()},dur);
            });
        </script>
        <script src="/sources/js/main.js"></script>
    </head>
    <body style="*padding-bottom:30px;">
        <div class="sdCenter">
            <div class="nav-top" style="*margin-right:15px;*margin-left:5px;">
                <div class="Fleft">
                    <a href="/i/model.html" class="nav-top-btn nav-top-btn-mod"></a>
                    <span class="nav-top-caption1">模特资料</span>
                    <span class="nav-top-caption2">Models</span>
                    <span class="nav-top-caption3">infomation</span>
                </div>
                <?php if ($next_model) { ?>
                    <div style="text-align:right;" class="Fright">
                        <a href="/v/model/<?php echo $next_model['id'] ?>.html" class="nav-top-btn-next"></a>
                        <span class="nav-top-caption1"><?php echo $next_model['name'] ?></span>
                        <span class="nav-top-caption2">Next</span>
                    </div>
                <?php } ?>
            </div>
            <div id="info-wapper">
                <div class="metro-block" style="top:0;width:990px;height:490px;background:url('http://itsrcs.b0.upaiyun.com/gimg/model-in/mod<?php echo $info['id'] ?>.jpg') center #1958b7;"></div>
                <div class="metro-block block-info topleft" style="width:160px;height:160px;padding:25px 40px;background:rgb(0, 159, 60);">
                    <div class="model-infofield">
                        姓名：<b><?php echo $info['name'] ?></b>
                    </div>
                    <div class="model-infofield">
                        身高：<span class="infofield-digit"><?php echo $info['height'] ?> cm</span>
                    </div>
                    <div class="model-infofield">
                        体重：<span class="infofield-digit"><?php echo $info['weight'] ?> kg</span>
                    </div>
                    <div class="model-infofield">
                        三围：<span class="infofield-digit"><?php echo $info['chest'] ?> / <?php echo $info['waist'] ?> / <?php echo $info['hips'] ?></span>
                    </div>
                </div>

                <div class="metro-block topleft" style="width:160px;height:160px;padding:25px 40px;background:url('/sources/img/play.png') center #db532d;">

                </div>

                <a href="/i/model.html" class="pointer" title="点击马上预约<?php echo $info['name'] ?>">
                    <div class="metro-block topleft" style="width:490px;padding:15px 0;background:#00a9ec;">
                        <b class="metro-block-sdtext font28">马上预约<?php echo $info['name'] ?></b>
                    </div>
                </a>

                <div class="metro-block block-info bottom-right" style="width:410px;padding:30px 40px;background:#bb4e82;">
                    <div class="metro-block-caption">
                        详细介绍 / 工作经验
                    </div>
                    <?php
                    include sprintf('application/views/templates/model_jobinfo/mod%s.html', $info['id']);
                    ?>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <span class="hidden"><script src="http://s14.cnzz.com/stat.php?id=5566781&web_id=5566781" language="JavaScript"></script></span>
    </body>
</html>