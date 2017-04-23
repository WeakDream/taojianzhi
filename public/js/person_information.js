/**
 * Created by syswing on 17/4/22.
 */
function dtLeft() {
    var dts = document.getElementsByTagName('p');
    for(var i=0;i<dts.length;i++){
        dts[i].setAttribute("class","text-left");
    }
}
$(document).ready(function(){
    $(".daohang4tan").hide();
    $(".daohang5tan").hide();
    $(".daohang4,.daohang4tan").hover(function(){
        $(".daohang4").css({"background":"white","border":"1px solid #EEEEEE"});
        $(".daohang4tan").show();
    },function(){
        $(".daohang4").css({"background":"#F5F5F5","border":"0px"});
        $(".daohang4tan").hide();
    });

    $(".daohang5,.daohang5tan").hover(function(){
        $(".daohang5").css({"background":"white","border":"1px solid #EEEEEE"});
        $(".daohang5tan").show();
    },function(){
        $(".daohang5").css({"background":"#F5F5F5","border":"0px"});
        $(".daohang5tan").hide();
    });
});
addLoadEvent(dtLeft);