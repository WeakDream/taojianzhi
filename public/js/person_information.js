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
    $(".collect").click(function () {
        if($(".collect").hasClass("glyphicon glyphicon-star-empty")){

            $.ajax({
                url:'resumeCollect',
                type:'POST',
                data:{
                    isCollected:true,
                    bigName:'用户的真名',//发送用户的真实名字，暂时写到session
                },
                timeout:5000,
                dataType:'json',
                success:function (json) {
                    if(json.state == 'success'){
                        $(this).removeClass("glyphicon glyphicon-star-empty");
                        $(this).addClass("glyphicon glyphicon-star");
                    }else{
                        alert('error');
                    }
                },
                error:function (xhr,textStatues) {

                },
                complete:function () {
                    console.log('over');
                }


            })
        }else{
            $(".collect").removeClass("gglyphicon glyphicon-star");
            $(".collect").addClass("glyphicon glyphicon-star-empty");
        }
    })
});
addLoadEvent(dtLeft);