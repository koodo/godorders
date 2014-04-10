$(function(){
    window.onresize = resize;
    resize();
    $('.sdText input').focus(function(){
        $('.sdText-focus').removeClass('sdText-focus');
        $(this).parent().toggleClass('sdText-focus');
    });
});
function resize(){
    if($('.footer')[0]){
        $('.sdCenter').animate({marginTop:($(document).height() - $('.sdCenter').height() - 75)/2},350);
    } else {
        $('.sdCenter').animate({marginTop:($(document).height() - $('.sdCenter').height())/2},350);
    }
}

function loadingWapper(_node_id){
    _node_id = "#" + _node_id;
    $(_node_id).css('position','relative');
    var _loading_node = $('<div class="_loading-wapper opacity05" style="position:absolute;top:0;left:0;right:0;bottom:0;background:url(\'/sources/img/spiner.gif\') center #FEFEFE no-repeat;"></div>');
    $(_node_id).append(_loading_node);
    return _loading_node;
}