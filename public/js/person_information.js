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
        var url=window.location.href;
        var urls=url.split('/');
        var bigName=decodeURIComponent(urls[4],"utf-8");
        //console.log(urls);
        // $(this.data(urls))
        //var url = 'resume'+bigName+'resumeCollect';

        if($(this).hasClass("glyphicon glyphicon-star-empty")){

            $.ajax({
                url:urls[0]+"//"+urls[2]+"/"+urls[3]+"/"+bigName+"/resumeCollect",
                type:'POST',
                data:{
                    isCollected:true
                    //bigName:'用户的真名',//发送用户的真实名字，暂时写到session
                },
                timeout:5000,
                dataType:'json',

                success:function (json) {
                    if(json.state == 'success'){
                        $(".collect").removeClass("glyphicon glyphicon-star-empty");
                        $(".collect").addClass("glyphicon glyphicon-star");
                        alert('收藏成功');
                    }else{
                        alert('error');
                    }
                }
            })
        }else{
            $.ajax({
                url:urls[0]+"//"+urls[2]+"/"+urls[3]+"/"+bigName+"/removeCollect",
                type:'GET',
                data:{
                    isCollected:false
                    //bigName:'用户的真名',//发送用户的真实名字，暂时写到session
                },
                timeout:5000,
                dataType:'json',
                success:function (json) {
                    if(json.state == 'success'){
                        $(".collect").removeClass("glyphicon glyphicon-star");
                        $(".collect").addClass("glyphicon glyphicon-star-empty");
                        alert('取消收藏');
                    }else{
                        alert('error');
                    }
                }
                // error:function (xhr,textStatues) {
                //
                // },
                // complete:function () {
                //     console.log('over');
                // }
            })
        }
    })
});
addLoadEvent(dtLeft);