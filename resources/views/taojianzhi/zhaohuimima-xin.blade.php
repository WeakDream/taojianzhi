<!DOCTYPE html>
<html>
<head lang="en">
<meta charset="utf-8">
<title>找回密码</title>
<script type="text/javascript" src="/js/jquery-1.11.3.min.js" /></script>
<script type="text/javascript">
        $(document).ready(function(){
            $(".daohang4tan").hide();
            $(".daohang5tan").hide();


            $(".daohang4,.daohang4tan").hover(function(){
                $(".daohang4").css({"background":"white","border":"1px solid #EEEEEE"});
                $(".daohang4tan").show();
            },function(){
                $(".daohang4").css({"background":"#C1CDC1","border":"0px"});
                $(".daohang4tan").hide();
            });

            $(".daohang5,.daohang5tan").hover(function(){
                $(".daohang5").css({"background":"white","border":"1px solid #EEEEEE"});
                $(".daohang5tan").show();
            },function(){
                $(".daohang5").css({"background":"#C1CDC1","border":"0px"});
                $(".daohang5tan").hide();
            });

        });
		
</script>
<style type="text/css">
    body{
        font-family:微软雅黑;
        margin:0px;
        padding:0px;
         background-color:#FFF8DC;
    }
    .hui{
        background:#C1CDC1;
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
    .mimaxq{
        margin-left: 250px;
        margin-top: 20px;
    }
    .mimaxq input{
        border-radius: 0px;
        margin-top: 20px;
        font-size: 16px;

    }
	.dibu a{
	color:#3C3C3C;
	text-decoration:none;
	font-size:17px;
	font-weight:700;
	display:block;
}
    
    <!--
    td,input {
        font-family: Verdana, Arial, Helvetica, sans-serif;
        font-size: 12px;
    }
	.button1{position:absolute;margin-top:30px;margin-left:100px;background:#FCE57F;width:60px;height:25px;border:1px solid #AF8E4E;}
	.button2{position:absolute;margin-top:30px;margin-left:200px;background:white;width:60px;height:25px;border:1px solid #AF8E4E;}
	.button3{position:absolute;margin-top:-40px;margin-left:345px;background:#FCE57F;width:80px;height:25px;border:1px solid #AF8E4E;}
		
    -->
	i{line-height:29px;vertical-align:middle;font-family:Tahoma;font-style:normal;color:#EE2200;padding-right:10px;}
</style>
</head>
<body>
<div class="hui">
    <div class="daohang">
        <div class="daohang1"><a href="#">首页</a></div>
        <div class="daohang2"><a href="#">登录</a></div>
        <div class="daohang3"><a href="#">注册</a></div>
        <div class="daohang4"><a href="#">我的淘兼职</a></div>
        <div class="daohang5"><a href="#">关于我们</a></div>

        <div class="daohang4tan"><a href="#">个人信息</a><a href="#">添加修改简历</a><a href="#">查看招聘信息</a></div>
        <div class="daohang5tan"><a href="#">网站简介</a><a href="#">组织结构</a><a href="#">发展历程</a></div>
    </div>
</div>
<div class="rongqi" style="border:0px solid red;width:1024px;top:20px;height:900px;position:relative;margin:0 auto;cursor:default;">
    <div style="width:300px;height:100px;border:0px solid green;">
        <img src="img/taologo.jpg" style="width:160px;">
        <div style="background:#DEDEDE;width:1px;height:58px;margin-left:170px;margin-top:-65px;"></div>
        <p style="color:#666666;font-size:27px;margin-left:185px;margin-top:-40px;">找回密码</p>
    </div>
	<img src="img/sm.png" style="width:16px;margin-left: 220px;margin-top: 30px;">
	<div style="margin-left: 245px;margin-top: -22px;font-size: 13px;color:#808080;">请输入你需要找回登录密码的账户名</div>
        <div class="mimaxq">
		    <p>登录名：<input type="text" id="mobile" placeholder="手机/邮箱/会员名" autofocus autocomplete="off" value=""></p>
            <p>已验证的手机/邮箱：<input type="text" id="tele" placeholder="已验证的手机/邮箱" autofocus autocomplete="off" value=""></p>
			<button class="button3">发送验证码</button>
            <p>验证码：<input type="text" id="email" placeholder="" autofocus autocomplete="off" value=""></p>
			<p>输入新的密码：<input type="text" id="email" placeholder="" autofocus autocomplete="off" value=""></p>
			<p>再次输入密码：<input type="text" id="email" placeholder="" autofocus autocomplete="off" value=""></p>
            <form  name="form1" method="post" action="">
                <button class="button1">确定</button>
                <button class="button2"><a href="denglu.html " style="text-decoration:none;color:black;">取消</a></button> 
            </form>
    </div>
</div>
<!--底部-->
<div class="dibu" style="width:100%;height:160px;border:1px solid white;position:absolute;top:1050px;">
        <div style="width:100%;height:12px;background:#FF5500"></div>
        <div style="width:100%;height:1px;border-top:1px dashed #FF5500;margin-top:3px;"></div> 
        <table style="width:80%;height:80%;text-align:center;margin-left:73px">
        <tr>
            <td rowspan=2><img src="img/taologo.jpg" style="width:170px;"></td>
            <td><a href="#">联系我们</a></td>
            <td><a href="#">加入我们</a></td>
            <td><a href="#">关注我们</a></td>
            <td rowspan=2><img src="img/erweima.jpg" style="width:110px;"></td>
        </tr>
        <tr>
            <td><a href="#">关于我们</a></td>
            <td><a href="#">友情链接</a></td>
            <td><a href="#">意见反馈</a></td>
        </tr>      
        </table>
        <p style="margin-left:550px;">www.taojianzhi.com</br>网络版权归淘兼职所有</p>
    </div><!--底部-->
   
</div>


</body>
</html>