<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>成功加入购物车</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script type="text/javascript" src="js/jquery-1.11.3.min.js" /></script>
<script type="text/javascript">
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
</script>

<style>
    li{
        list-style: none;
    }
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
.bj{
	width:200px;
	height:25px;
	opacity:0.7;
	background:black;
	margin-top:-25px;
	position:relative;
	z-index:1;
}
.shangpin{
	display:block;
	cursor:pointer;
	color:white;
	height:22px;
	font-size:13px;
	opacity:1;
	position:relative;
	z-index:2;
	padding-top:3px;
	padding-left:10px;
	padding-right:10px;
	overflow:hidden;
}
.shangpin:hover{
	color:white;
}

.tuijian li{
   float: left;
   width: 25%;
    padding-left: 10px;
    padding-top: 20px;

 }
.tuijian li span{
    font-size: 16px;
    padding-left: 40px;
    color:black;
}
.tuijian li img{
    height:200px;
    width: 200px;
}

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
<!--容器-->
<div class="rongqi" style="border:1px solid white;width:1024px;top:20px;height:1200px;position:relative;margin:0 auto;cursor:default;">
<!--头部-->
<div style="width:300px;height:100px;border:0px solid green;position:absolute;">
<img src="img/taologo.jpg" style="width:160px;">
<div style="background:#DEDEDE;width:1px;height:58px;margin-left:170px;margin-top:-65px;"></div>
<p style="color:#666666;font-size:27px;margin-left:190px;margin-top:-48px;">购物车</p>
</div><!--头部-->
<!--第一块-->
<div style="width:990px;height:210px;border:0px solid red;position:absolute;top:100px;">
<img src="img/coffee.jpg" style="width:200px;height:200px;">
<div class="bj">
<a class="shangpin">BARONET COFFEE咖啡制作师</a>
</div>
<p style="margin-left:220px;margin-top:-190px;color:#808080;">BARONET COFFEE西湖分店</p>
<p style="margin-left:220px;">已添加职位：BARONET COFFEE咖啡制作师</p>
<!--提示-->
<div style="width:220px;height:80px;position:absolute;border:0px solid blue;top:8px;left:780px;">
<img src="img/gou.jpg" style="width:60px;height:60px;">
<span style="font-size:18px;">已成功加入购物车</span>
</div><!--提示-->
<ul style="float:right;list-style-type:none;margin-top:40px;">
<li style="color:#FF4400;">小计：<b>¥0.50</b></li>
<li>购物车共有<span style="color:#FF4400;">2件</span>商品</li>
</ul>
<a href="gangweigoumai.html" style="text-align:center;padding-top:6px;display:block;cursor:pointer;margin-left:670px;margin-top:95px;border:1px solid #FF4400;background:white;color:#FF4400;width:150px;height:35px;"><b>&lt</b>&nbsp;返回职位详情</a>
<a href="gouwuche.html" style="text-align:center;display:block;cursor:pointer;margin-left:840px;margin-top:-36px;border:0px;background:#FF4400;color:white;width:150px;height:35px;">去购物车结算</a>

</div><!--第一块-->
<div style="border: 1px solid #E5E5E5;width: 100%;height: 840px;margin-top: 340px;">
   <div style="border-top: 1px solid  #f1cab4;width: 100%;height: 60px;background: #fff2e8;">
       <p style="font-size: 18px;line-height: 60px;padding-left: 40px;color: #FF5500;font-weight: bold">为我推荐</p>
   </div>
    <ul class="tuijian">
        <li ><img src="img/jiajiao.jpg" alt="英语家教"></br><span>英语家教</span></li>
        <li><img src="img/milk.jpg"></br><span>牛奶促销员</span></li>
        <li><img src="img/sofa.jpg"></br><span>鄞州宜家家居销售员</span></li>
        <li><img src="img/jiajiao.jpg"></br><span>英语家教</span></li>
        <li ><img src="img/jiajiao.jpg" alt="英语家教"></br><span>英语家教</span></li>
        <li><img src="img/milk.jpg"></br><span>牛奶促销员</span></li>
        <li><img src="img/sofa.jpg"></br><span>鄞州宜家家居销售员</span></li>
        <li><img src="img/jiajiao.jpg"></br><span>英语家教</span></li>
        <li ><img src="img/jiajiao.jpg" alt="英语家教"></br><span>英语家教</span></li>
        <li><img src="img/milk.jpg"></br><span>牛奶促销员</span></li>
        <li><img src="img/sofa.jpg"></br><span>鄞州宜家家居销售员</span></li>
        <li><img src="img/jiajiao.jpg"></br><span>英语家教</span></li>
    </ul>
</div>
</div><!--容器-->

<!--底部-->
<div style="position:absolute;top:1225px;height:50px;width:100%;border-top:1px solid #D2D0D0;margin-top: 40px;">
    <div align="center"style="margin-top: 15px;">@Taojianzhi.com</div>
</div><!--底部-->

</body>
</html>
