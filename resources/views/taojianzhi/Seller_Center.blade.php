<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>卖家中心</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script type="text/javascript" src="js/jquery-1.11.3.min.js" /></script>
<script src="js/menu.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".daohang4tan").hide();
        $(".daohang5tan").hide();
        $("#jujue").click(function () {
            $('#content1').hide();
            //alert("hello");
        })
        $("#big").click(function () {
            $("#content1").animate({
                height:"240px",
                width:"400px",
                marginLeft:"100px",
                marginBottom:"50px",
                paddingTop:"0px"})
            $("#content1>p").animate({
                fontSize:"18px"
            })
            $("#content1>button").animate({
                height:"20px",
                width:"40px"
            })
            $('#big').hide()
        });
        $("#jieshou").click(function () {
            $.ajax(
                    {
                        url:"send",
                        type:'POST',
                        success:function () {
                            alert("ok")
                        }
                    }
            )
        })

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

		$(".ajianli").click(function(){
			$(".jianli").show();
			$(".zhiwei").hide();
		});

		$(".azhiwei").click(function(){
			$(".jianli").hide();
			$(".zhiwei").show();
		});

	});
</script>
<style>
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
   li a {display:inline-block;}
   li a {display:block;}
.zuodaohang{
	position:absolute;
	top:110px;
	width:182px;
	height:350px;
	border:0px solid red;
}
.jianli{
	width:700px;
	height:1200px;
	border-top:2px solid #333333;
	position:absolute;
	top:110px;
	left:180px;
	background:#F5F5F5;
	padding-left:30px;
	padding-top:20px;
}
.question{
	width:160px;
	height:280px;
	border-top:2px solid #333333;
	position:absolute;
	top:110px;
	left:880px;
	background:#F5F5F5;
	padding-top:20px;
}
.enter{
	width:160px;
	height:920px;
	position:absolute;
	border:0px;
	top:390px;
	left:880px;
	background:#F5F5F5;
	padding-top:20px;
}
.zhiwei{
	width:700px;
	height:1200px;
	border-top:2px solid #333333;
	position:absolute;
	top:110px;
	left:180px;
	background:#F5F5F5;
	padding-top:20px;
	padding-left:30px;
}
.style1{
	overflow:hidden;
	text-overflow:ellipsis;
	white-space:nowrap;
}
.style2{
	overflow:hidden;
	text-overflow:ellipsis;
	white-space:nowrap;
	margin-top:-10px;
}
.content{
	background:white;
	width:150px;
	height:180px;
	margin-top:10px;
	margin-right:10px;
	display:inline-block;
}
.wenhao{
	display:inline-block;
	background:#FD4301;
	width:14px;
	height:14px;
	border-radius:7px;
	color:white;
	font-weight:900;
	padding-left:1px;
}
.kuaijie{
	display:inline-block;
	background:#FD4301;
	width:14px;
	height:14px;
	border-radius:7px;
	color:white;
	font-weight:900;
	padding-left:1px;
}
.ul{
	margin-left:7px;padding:0px;
}
.ul li{
	color:#BCB7B5;
	margin-bottom:5px;
}
.bu1:hover{
	text-decoration:none;
	color:#FD4301;
}
.bu2:hover{
	text-decoration:none;
	color:#FD4301;
}
.bu3:hover{
	text-decoration:none;
	color:#FD4301;
}
</style>
</head>

<body>
<!--灰色导航栏-->
<div class="hui">
    <div class="daohang">
    <div class="daohang1"><a href="{{url('index')}}">首页</a></div>
    @if(Session::get('username'))
    <div style="position:absolute;margin-left:50px;"><a href="{{url('personal_center')}}">你好{{Session::get('username')}}</a></div>
    <div style="position:absolute;margin-left:135px;"><a href="{{url('logout')}}">退出登录</a></div>
    @endif
    @if(!Session::get('username'))
        <div class="daohang2"><a href="{{url('login')}}">登录</a></div>
        <div class="daohang3"><a href="{{url('register')}}">注册</a></div>
    @endif
        <div class="daohang4"><a href="#">我的淘兼职</a></div>
        <div class="daohang5"><a href="#">关于我们</a></div>
        <div class="daohang4tan"><a href="/gerenzhongxin">个人中心</a><a href="#">添加修改简历</a><a href="#">查看招聘信息</a></div>
        <div class="daohang5tan"><a href="#">网站简介</a><a href="#">组织结构</a><a href="#">发展历程</a></div>

    </div>
</div>
<!--容器-->
<div class="rongqi" style="border:0px solid red;width:1024px;top:20px;height:1500px;position:relative;margin:0 auto;cursor:default;">
<!--头部-->
<div style="width:300px;height:100px;border:0px solid green;position:absolute;">
<img src="img/taologo.jpg" style="width:160px;">
<div style="background:#DEDEDE;width:1px;height:58px;margin-left:170px;margin-top:-65px;"></div>
<p style="color:#666666;font-size:27px;margin-left:190px;margin-top:-48px;">卖家中心</p>
</div>
<!--导航-->
<div class="zuodaohang">
	<ul id="menu">
   	    <li>
			<a href="#">我的招聘</a>
			<ul>
				<li class="azhiwei"><a href="#">职位管理</a></li>
				<li class="ajianli"><a href="#">简历管理</a></li>
				<li><a href="#">快速招人</a></li>
				<li><a href="#">公司资料</a></li>
			</ul>
		</li>
		<li>
			<a href="#">我的上架</a>
		</li>
		<li>
			<a href="#">我的交易</a>
			<ul>
				<li><a href="#">订单管理</a></li>
				<li><a href="#">退款管理</a></li>
				<li><a href="#">提现管理</a></li>
			</ul>
		</li>
		<li><a href="#" target="_blank">我的收藏夹</a></li>
	</ul>
</div><!--导航-->

<!--职位管理-->
<div class="zhiwei">
<p style="font-size:16px;">职位管理</p>
<div style="background:#A9A7A6;width:640px;height:1px;"></div>
<br>
<img src="img/eye.jpg" style="width:30px;height:20px;">
<h4 style="margin-top:-18px;margin-left:40px;">正在上架中的职位</h4>
<br>
<table border="1" bordercolor="#A9A7A6" style="font-size:14px;">
	<tr bgcolor="#DFDFDF">
    	<td width="200">职位名称</td>
        <td width="120">上架时间</td>
        <td width="120">下架时间</td>
        <td width="70">申请人数</td>
        <td width="70">接受人数</td>
        <td width="60">操作</td>
    </tr>
	<tr bgcolor="white">
    	<td width="200"><a href="gangweigoumai.html">BARONET COFFEE咖啡制作师</a></td>
        <td width="120">2016年3月20日</td>
        <td width="120">2016年6月20日</td>
        <td width="70">2人</td>
        <td width="70">0人</td>
        <td width="60"><input type="submit" name="xiajia" value="下架" style="border:0px;background:white;color:#FD4301;"/></td>
    </tr>
    <tr bgcolor="#F7F7F7">
    	<td width="200"><a href="gangweigoumai.html">二丫头甜品店店员</a></td>
        <td width="120">2016年3月20日</td>
        <td width="120">2016年6月20日</td>
        <td width="70">2人</td>
        <td width="70">0人</td>
        <td width="60"><input type="submit" name="xiajia" value="下架" style="border:0px;background:#F7F7F7;color:#FD4301;"/></td>
    </tr>
    <tr bgcolor="white">
    	<td width="200"><a href="gangweigoumai.html">sodois有限公司</a></td>
        <td width="120">2016年5月20日</td>
        <td width="120">2016年6月20日</td>
        <td width="70">5人</td>
        <td width="70">1人</td>
        <td width="60"><input type="submit" name="xiajia" value="下架" style="border:0px;background:white;color:#FD4301;"/></td>
    </tr>
    <tr bgcolor="#F7F7F7">
    	<td width="200"><a href="gangweigoumai.html">娃哈哈店店员</a></td>
        <td width="120">2016年3月14日</td>
        <td width="120">2016年6月14日</td>
        <td width="70">4人</td>
        <td width="70">0人</td>
        <td width="60"><input type="submit" name="xiajia" value="下架" style="border:0px;background:#F7F7F7;color:#FD4301;"/></td>
    </tr>
</table>


<br><br><br><br>
<img src="img/huixingzhen.jpg" style="width:30px;height:25px;">
<h4 style="margin-top:-18px;margin-left:40px;">已下架的职位</h4>
<br>
<table border="1" bordercolor="#A9A7A6" style="font-size:14px;">
	<tr bgcolor="#DFDFDF">
    	<td width="200">职位名称</td>
        <td width="120">上架时间</td>
        <td width="120">下架时间</td>
        <td width="70">申请人数</td>
        <td width="70">接受人数</td>
        <td width="60">操作</td>
    </tr>
	<tr bgcolor="white">
    	<td width="200"><a href="gangweigoumai.html">香格里拉面包房面包师</a></td>
        <td width="120">2016年3月20日</td>
        <td width="120">2016年4月20日</td>
        <td width="70">5人</td>
        <td width="70">5人</td>
        <td width="60"><input type="submit" name="xiajia" value="删除" style="border:0px;background:white;color:#FD4301;"/></td>
    </tr>
</table>
</div>


<!--简历管理-->
<div class="jianli">
<p style="font-size:16px;">简历管理</p>
<div style="background:#A9A7A6;width:640px;height:1px;"></div>
<br>
<a href="gangweigoumai.html" style="font-size:16px;">BARONET COFFEE咖啡制作师</a>
<br>
<div id="content1" class="content">
<p class="style1">姓名：张三</p>
<p class="style2">学校：杭州电子科技大学</p>
<p class="style2">专业：计算机科学与技术</p>
<p class="style2">学历：本科</p>
<p class="style2">关于我：来自杭州电子科技大学</p>
<p class="style2">个人专长：有工作经验</p>
<p class="style2">工作经验：在星巴克打工3个月</p>
<a href="#" id="big">查看详细简历</a><br>
<!--<input type="submit" name="" value="&radic;接受" style="background:#FD4301;border:0px;color:white;border-radius:5px;">&nbsp;
<input type="submit" name="" value="&times;拒绝" style="background:#FD4301;border:0px;color:white;border-radius:5px;">!-->
<button style="background:#FD4301;border:0px;color:white;border-radius:5px;" id="jieshou">接受</button>
    <button style="background:#FD4301;border:0px;color:white;border-radius:5px;" id="jujue">拒绝</button>
</div>

<div id="content" class="content">
<p class="style1">姓名：王五</p>
<p class="style2">学校：杭州电子科技大学</p>
<p class="style2">专业：网络工程</p>
<p class="style2">学历：本科</p>
<p class="style2">关于我：</p>
<p class="style2">个人专长：</p>
<p class="style2">工作经验：</p>
<a href="">查看详细简历</a><br>
<input type="submit" name="" value="&radic;接受" style="background:#FD4301;border:0px;color:white;border-radius:5px;">&nbsp;
<input type="submit" name="" value="&times;拒绝" style="background:#FD4301;border:0px;color:white;border-radius:5px;">
</div>

<div id="content" class="content">
<p class="style1">姓名：王五</p>
<p class="style2">学校：杭州电子科技大学</p>
<p class="style2">专业：网络工程</p>
<p class="style2">学历：本科</p>
<p class="style2">关于我：</p>
<p class="style2">个人专长：</p>
<p class="style2">工作经验：</p>
<a href="">查看详细简历</a><br>
<input type="submit" name="" value="&radic;接受" style="background:#FD4301;border:0px;color:white;border-radius:5px;">&nbsp;
<input type="submit" name="" value="&times;拒绝" style="background:#FD4301;border:0px;color:white;border-radius:5px;">
</div>

<div id="content" class="content">
<p class="style1">姓名：hh</p>
<p class="style2">学校：杭州电子科技大学</p>
<p class="style2">专业：网络工程</p>
<p class="style2">学历：本科</p>
<p class="style2">关于我：</p>
<p class="style2">个人专长：</p>
<p class="style2">工作经验：</p>
<a href="">查看详细简历</a><br>
<input type="submit" name="" value="&radic;接受" style="background:#FD4301;border:0px;color:white;border-radius:5px;">&nbsp;
<input type="submit" name="" value="&times;拒绝" style="background:#FD4301;border:0px;color:white;border-radius:5px;">
</div>
<br><br>
<a href="gangweigoumai.html" style="font-size:16px;">二丫头甜品店店员</a>
<br>
<div id="content" class="content">
<p class="style1">姓名：李四</p>
<p class="style2">学校：杭州电子科技大学</p>
<p class="style2">专业：网络工程</p>
<p class="style2">学历：本科</p>
<p class="style2">关于我：</p>
<p class="style2">个人专长：会做雪花冰、会打咖啡</p>
<p class="style2">工作经验：</p>
<a href="">查看详细简历</a><br>
<input type="submit" name="" value="&radic;接受" style="background:#FD4301;border:0px;color:white;border-radius:5px;">&nbsp;
<input type="submit" name="" value="&times;拒绝" style="background:#FD4301;border:0px;color:white;border-radius:5px;">
</div>
</div>

<div class="question">
<div class="wenhao">&nbsp;?</div>
<p style="font-size:16px;display:inline-block">常见问题</p>
<div style="background:#A9A7A6;width:150px;height:1px;"></div>
<br>
<ul class="ul">
	<li>忘记淘兼职的帐号密码？</li>
    <li>怎样修改账户？</li>
    <li>开店时提示身份证被占用怎么办？</li>
    <li>如何上架职位？</li>
    <li>如何计费？</li>
    <li>可以评价吗？</li>
    <li>下架的职位还可以上架吗？</li>
</ul>
</div>

<div class="enter">
<div class="kuaijie">&rarr;</div>
<p style="font-size:16px;display:inline-block">快捷入口</p>
<div style="width:58px;height:25px;border:1px solid #BCB7B5;padding:3px;"><a href="" class="bu1">支付中心</a></div>
<div style="width:58px;height:25px;border:1px solid #BCB7B5;padding:3px;margin-left:70px;margin-top:-25px;"><a class="bu2" href="">规则中心</a></div>
<div style="width:85px;height:25px;border:1px solid #BCB7B5;padding:3px;margin-top:10px;"><a href="" class="bu3">账户违规记录</a></div>
</div>

<!--底部-->
<div style="position:absolute;top:1470px;height:30px;width:100%;border-top:1px solid #D2D0D0;margin-top: 40px;">
    <div align="center"style="margin-top: 15px;">@Taojianzhi.com</div>
</div><!--底部-->

</div><!--容器-->
</body>
</html>
