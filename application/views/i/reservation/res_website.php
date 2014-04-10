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
                $('#submit-btn').click(function(){
                    var form = $('#reser-form');
                    var loading = loadingWapper('reser-form');
                    $.post('/P/smReservation.html',form.serialize(),function(res){
                        loading.remove();
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
        <div class="sdCenter" style="width:600px;">
            <div class="nav-top" style="_margin-left:0px;">
                <a href="<?php if ($from == 1) echo "/i/website.html"; else echo "/reservation.html"; ?>" class="nav-top-btn nav-top-btn-web"></a>
                <span class="nav-top-caption1">在线预约</span>
                <span class="nav-top-caption2">Reservation</span>
            </div>
            <div style="position:relative;border:1px solid #ccc;">
                <div style="font-size:18px;color:#fff;background:#209efe;padding:20px 15px;height:45px;text-align:center;">
                    <img src="/sources/img/g-logo2.png" class="Fleft"/>
                    <img src="/sources/img/reservate/res-1.png" class="Fright"/>
                </div>
                <div style="border:3px solid #209efe;background:#fefefe;padding:5px 20px;border-top:none;">
                    <form id="reser-form" style="margin:20px 40px;">
                        <table style="width:100%">
                            <tr class="form-line">
                                <td width="20%" class="data-tip">公司/个人名</td>
                                <td width="80%">
                                    <span class="sdText">
                                        <input name="name"/>
                                    </span>
                                </td>
                            </tr>
                            <tr class="form-line">
                                <td width="20%" class="data-tip">联系电话</td>
                                <td width="80%">
                                    <span class="sdText">
                                        <input name="phone"/>
                                    </span>
                                </td>
                            </tr>
                            <tr class="form-line">
                                <td width="20%" class="data-tip">QQ</td>
                                <td width="80%">
                                    <span class="sdText">
                                        <input name="qq"/>
                                    </span>
                                </td>
                            </tr>
                            <tr class="form-line">
                                <td width="20%" class="data-tip">地址</td>
                                <td width="80%">
                                    <span class="sdText">
                                        <input name="address"/>
                                    </span>
                                </td>
                            </tr>
                        </table>
                        <a class="btn-submit" href="javascript:;" id="submit-btn"></a>
                    </form>
                </div>
            </div>
        </div>
        <span class="hidden"><script src="http://s14.cnzz.com/stat.php?id=5566781&web_id=5566781" language="JavaScript"></script></span>
    </body>
</html>