<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>时间管理</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="../js/jquery-1.11.3.min.js" /></script>
    <script type="text/javascript">
$(document).ready(function(){
	$(".daohang4tan").hide();
	$(".daohang5tan").hide();
    $(".xinzijiesuan2").hide();
    $(".jianzhishijian2").hide();
    $(".gongzuodidian2").hide();

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
	
	
	
	
	$(".riqi ul li").click(function(){
		$(this).css({"background":"white","color":"#FEA251"});
		$(this).siblings().css({"background":"#FEA251","color":"white"});
	});
	
	var num=0;
	$(".you").click(function(){
		if(num>2){
			return;
		}
		if(num==-1){
			num=0;
		}
		num++;
	    $('.riqi ul').animate({marginLeft:'-'+num*800+'px'});
	});
	$(".zuo").click(function(){	
	    if(num<0){
			return;
		}
		num--;
	    $('.riqi ul').animate({marginLeft:'-'+num*800+'px'});
	});
	
	var sum=0;
	$(".right").click(function(){
		if(sum>0){
			return;
		}
		if(sum==-1){
			sum=0;
		}
		sum++;
	    $('.jianli ul').animate({marginLeft:'-'+sum*810+'px'});
	});
	$(".left").click(function(){	
	    if(sum<0){
			return;
		}
		sum--;
	    $('.jianli ul').animate({marginLeft:'-'+sum*810+'px'});
	});


	$("#ri2tan").hide();
	$("#ri3tan").hide();
	$("#ri4tan").hide();
	$("#ri5tan").hide();
    $("#ri6tan").hide();
    $("#ri7tan").hide();
    $("#ri8tan").hide();
    $("#ri9tan").hide();
    $("#ri10tan").hide();
    $("#ri11tan").hide();
    $("#ri12tan").hide();
    $("#ri13tan").hide();
    $("#ri14tan").hide();
    $("#ri15tan").hide();
    $("#ri16tan").hide();
    $("#ri17tan").hide();
    $("#ri18tan").hide();
    $("#ri19tan").hide();
    $("#ri20tan").hide();
    $("#ri21tan").hide();
    $("#ri22tan").hide();
    $("#ri23tan").hide();
    $("#ri24tan").hide();
    $("#ri25tan").hide();
    $("#ri26tan").hide();
    $("#ri27tan").hide();
    $("#ri28tan").hide();
    $("#ri29tan").hide();
    $("#ri30tan").hide();
    $("#ri31tan").hide();


    $(".ri1").click(function(){
		$("#ri1tan").fadeIn();
		$("#ri1tan").siblings().hide();
	});
	$(".ri2").click(function(){
		$("#ri2tan").fadeIn();
		$("#ri2tan").siblings().hide();
	});
	$(".ri3").click(function(){
		$("#ri3tan").fadeIn();
		$("#ri3tan").siblings().hide();
	});
	$(".ri4").click(function(){
		$("#ri4tan").fadeIn();
		$("#ri4tan").siblings().hide();
	});
	$(".ri5").click(function(){
		$("#ri5tan").fadeIn();
		$("#ri5tan").siblings().hide();
	});
    $(".ri6").click(function(){
        $("#ri6tan").fadeIn();
        $("#ri6tan").siblings().hide();
    });
    $(".ri7").click(function(){
        $("#ri7tan").fadeIn();
        $("#ri7tan").siblings().hide();
    });
    $(".ri8").click(function(){
        $("#ri8tan").fadeIn();
        $("#ri8tan").siblings().hide();
    });
    $(".ri9").click(function(){
        $("#ri9tan").fadeIn();
        $("#ri9tan").siblings().hide();
    });
    $(".ri10").click(function(){
        $("#ri10tan").fadeIn();
        $("#ri10tan").siblings().hide();
    });
    $(".ri11").click(function(){
        $("#ri11tan").fadeIn();
        $("#ri11tan").siblings().hide();
    });
    $(".ri12").click(function(){
        $("#ri12tan").fadeIn();
        $("#ri12tan").siblings().hide();
    });
    $(".ri13").click(function(){
        $("#ri13tan").fadeIn();
        $("#ri13tan").siblings().hide();
    });
    $(".ri14").click(function(){
        $("#ri14tan").fadeIn();
        $("#ri14tan").siblings().hide();
    });
    $(".ri15").click(function(){
        $("#ri15tan").fadeIn();
        $("#ri15tan").siblings().hide();
    });
    $(".ri16").click(function(){
        $("#ri16tan").fadeIn();
        $("#ri16tan").siblings().hide();
    });
    $(".ri17").click(function(){
        $("#ri17tan").fadeIn();
        $("#ri17tan").siblings().hide();
    });
    $(".ri18").click(function(){
        $("#ri18tan").fadeIn();
        $("#ri18tan").siblings().hide();
    });
    $(".ri19").click(function(){
        $("#ri19tan").fadeIn();
        $("#ri19tan").siblings().hide();
    });
    $(".ri20").click(function(){
        $("#ri20tan").fadeIn();
        $("#ri20tan").siblings().hide();
    });
    $(".ri21").click(function(){
        $("#ri21tan").fadeIn();
        $("#ri21tan").siblings().hide();
    });
    $(".ri22").click(function(){
        $("#ri22tan").fadeIn();
        $("#ri22tan").siblings().hide();
    });
    $(".ri23").click(function(){
        $("#ri23tan").fadeIn();
        $("#ri23tan").siblings().hide();
    });
    $(".ri24").click(function(){
        $("#ri24tan").fadeIn();
        $("#ri24tan").siblings().hide();
    });
    $(".ri25").click(function(){
        $("#ri25tan").fadeIn();
        $("#ri25tan").siblings().hide();
    });
    $(".ri26").click(function(){
        $("#ri26tan").fadeIn();
        $("#ri26tan").siblings().hide();
    });
    $(".ri27").click(function(){
        $("#ri27tan").fadeIn();
        $("#ri27tan").siblings().hide();
    });
    $(".ri28").click(function(){
        $("#ri28tan").fadeIn();
        $("#ri28tan").siblings().hide();
    });
    $(".ri29").click(function(){
        $("#ri29tan").fadeIn();
        $("#ri29tan").siblings().hide();
    });
    $(".ri30").click(function(){
        $("#ri30tan").fadeIn();
        $("#ri30tan").siblings().hide();
    });
    $(".ri31").click(function(){
        $("#ri31tan").fadeIn();
        $("#ri31tan").siblings().hide();
    });
});
	</script>
<style type="text/css">
body{
	font-family:微软雅黑;
	margin:0px;
	padding:0px;
}
.hui{
	background: #f5f5f5;
	width:100%;
	height:40px;
	position:relative;
	margin:0px;	
	border:1px solid #EEEEEE;
}
.daohang{

	width:420px;
	height:40px;
	position:absolute;
	right:162px;
}
.daohang div a{
	font-size:14px;
	margin-left:20px;
	margin-top:10px;
	text-decoration:none;
	display:block;
	color:black;
}
.daohang div a:hover{
	font-size:14px;
	margin-left:20px;
	margin-top:10px;
	text-decoration:none;
	display:block;
	color:#F22E00;
}
.daohang1{
	width:70px;
	height:40px;
	position:absolute;
}
.daohang2{
	width:70px;
	height:40px;
	position:absolute;
	margin-left:70px;
}
.daohang3{
	width:70px;
	height:40px;
	position:absolute;
	margin-left:140px;
}
.daohang4{
	width:110px;
	height:40px;
	position:absolute;
	margin-left:210px;
	border:0px;
}
.daohang5{
	width:100px;
	height:40px;
	position:absolute;
	margin-left:320px;
}
.daohang4tan{
	width:110px;
	height:100px;
	border:1px solid #EEEEEE;
	margin-left:210px;
	margin-top:40px;
	position:absolute;
	background:white;
	z-index:9;
}
.daohang5tan{
	width:100px;
	height:100px;
	border:1px solid #EEEEEE;
	margin-left:320px;
	margin-top:40px;
	position:absolute;
	background:white;
	z-index:9;
}
.riqi{
    overflow:hidden;
}
.riqi ul{
	list-style-type:none;
	width:30000px;
	padding:0px;
}
.riqi ul li{
	float:left;
	color:white;
	width:100px;
	border-right:1px solid white;
	
}
.riqi ul li p{
    cursor:pointer;
	width:100px;
	text-decoration:none;
	padding-left:16px;
	padding-top:5px;
	font-size:15px;
}
.riqi ul li span{
	cursor:pointer;
	padding-left:25px;
	margin-top:-10px;
	display:block;
	font-size:14px;
}
.ri1tan{
	background:white;
	width:800px;
	height:350px;
	margin-left:100px;
	margin-top:30px;
	overflow-y:auto; 
	overflow-x:auto;
}
.ri1tan table tr{
    height:40px;
	border-bottom:1px solid #CCCCCC;
}
.ri1tan table tr:hover{
    background:#E8F4FF;
}

#add{
	cursor:pointer;
}
#add_all{
	cursor:pointer;
}
#remove{
	cursor:pointer;
}
#remove_all{
	cursor:pointer;
}
.jianli{
	width:820px;
	height:355px;
	border:0px solid white;
	margin-top:-195px;
	margin-left:100px;
	overflow:hidden;
}
.jianli ul{
	list-style-type:none;
	margin-left:0px;
	padding-left:10px;
	width:1660px;
}
.jianli ul li{
	float:left;
	margin-right:22px;
}
.jianli ul li div{
	background:white;
	width:250px;
	height:350px;
	padding-top:20px;
	padding-left:40px;
}
.jianli ul li div table

</style>
</head>

<body>
<!--灰色导航栏-->
<div class="hui">
<div class="daohang">
<div class="daohang1"><a href="{{url('index')}}">首页</a></div>
<div class="daohang2"><a href="{{url('login')}}">登录</a></div>
<div class="daohang3"><a href="{{url('register')}}">注册</a></div>
<div class="daohang4"><a href="#">我的淘兼职</a></div>
<div class="daohang5"><a href="#">关于我们</a></div>

<div class="daohang4tan"><a href="{{url('personal_center')}}">个人中心</a><a href="#">添加修改简历</a><a href="#">查看招聘信息</a></div>
<div class="daohang5tan"><a href="#">网站简介</a><a href="#">组织结构</a><a href="#">发展历程</a></div>
</div>
</div>

<div class="rongqi" style="border:1px solid white;width:1024px;top:20px;height:1200px;position:relative;margin:0 auto;cursor:default;">

<div class="header" style="width:100%;height:100px;border-bottom:3px solid #EAEAEA;position:absolute;cursor:default;">
<!--LOGO-->
<img src="../img/taologo.jpg" style="width:160px;">
<div style="background:#DEDEDE;width:1px;height:58px;margin-left:170px;margin-top:-65px;"></div>
<p style="color:#666666;font-size:27px;margin-left:190px;margin-top:-48px;">时间管理</p>

</div>

<!--身体-->

<div class="shenti" style="top:120px;background:#FEA251;width:100%;height:550px;border:1px solid white;position:absolute;cursor:default;">

<b style="color:white;font-size:20px;margin-left:450px;margin-top:20px;display:block;">我的时间轴</b>
<div style="position:absolute;width:50px;height:48px;left:50px;top:78px;padding-left:8px;padding-top:4px;cursor:pointer;border:1px solid white;"><img class="zuo" src="../img/zzuo.jpg" style="width:30px;"></div>
<div style="position:absolute;width:50px;height:48px;left:900px;top:78px;padding-left:8px;padding-top:7px;cursor:pointer;border:1px solid white;"><img class="you" src="../img/yyou.jpg" style="width:30px;"></div>

<div class="riqi" style="width:800px;height:48px;border:1px solid white;margin-left:100px;margin-top:30px;">
    <ul>
        @foreach($data['day'] as $me)
        <li class="ri{{$me}}" style="background:white;color:#F85337;"><p>{{$data['month']}}月{{$me}}日</p></li>
       @endforeach
    </ul>
</div>
<div style="border:0px solid yellow;width:1000px;height:400px;">
    @foreach($data['day'] as $day)
<div class="ri1tan" id="ri{{$day}}tan">
    <table>
        @foreach($data['hour'] as $hour)
        <tr>
            <td width="30"></td>
            <td width="100" style="font-size:16px;">{{$hour+7}}:00~{{$hour+8}}:00</td>
            @if($data['time'][$day][$hour]==0)
            <td width="100" style="color:green;font-size:16px;">空闲</td>
            <td width="200"></td>
            <td width="280"></td>
            <td width="100"><button  style="background:#FFB000;border:1px solid #FF9913;color:white;width:70px;height:30px;border-radius:3px;">可选择</button></td>
                @else
                <td width="100" style="color:green;font-size:16px;">不空闲</td>
                <td width="200">在马路上发传单</td>
                <td width="280">CCC奶茶店</td>
                <td width="100"></td>
                @endif
        </tr>
        @endforeach
    </table>
</div> 
@endforeach




</div>

</div>



<!--身体2-->

</div> 

        <div style="height:60px;width:100%;border-top:1px solid #eaeaea;top:1330px;position:absolute;padding-top:20px;">
           <p align="center">@Taojianzhi.com</p>
        </div>
</div>



</body>
</html>
