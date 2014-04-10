<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>在线选版 - 网站建设 - 天旨信息咨询管理有限公司</title>
        <link href="/sources/core.css" rel="stylesheet" type="text/css" />
        <style type="text/css">
            .metro-block{
                position: relative !important;
            }
            .tpl-numbers{
                position:absolute;right:0;bottom:0;opacity:0.8;font-size:18px;padding:3px 5px;border-top-left-radius:5px;background:#900;
            }
        </style>
        <script src="/sources/jquery-1.10.1.min.js"></script>
        <script src="/sources/js/main.js"></script>
    </head>
    <body style="padding-bottom:30px;">
        <div class="sdCenter">
            <div class="nav-top" style="_margin-left:10px;">
                <a href="/i/website.html" class="nav-top-btn nav-top-btn-web"></a>
                <span class="nav-top-caption1">在线选版</span>
                <span class="nav-top-caption2">Templates</span>
            </div>
            <div>
                <?php for ($i = 1; $i <= 31; $i++) { ?>
                    <a class="pointer tpl-point" href="/sources/w_tpl/<?php echo $i; ?>/" target="_blank">
                        <div class="metro-block Fleft" style="width:240px;height:360px;background:url('/sources/w_tpl_img/<?php echo $i; ?>.png') center no-repeat #00a9ec;">
                            <div class="tpl-numbers" id="tpl<?php echo $i; ?>">#<?php echo $i; ?></div>
                        </div>
                    </a>
                <?php } ?>
                <div class="clear"></div>
            </div>
        </div>
    </body>
</html>