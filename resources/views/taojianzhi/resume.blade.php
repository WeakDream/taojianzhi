<!DOCTYPE html >
<html >
<head lang="en">
    <meta charset="utf-8">
<title>简历</title>
<script type="text/javascript" src="../js/jquery-1.11.3.min.js" /></script>
<script type="text/javascript" src="../js/edit.js" ></script>
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
		
		$("#xiugai").hover(function(){
			$("#xg2").css("text-decoration","underline");
			$("#xg2").css("cursor","pointer");
		},function(){
			$("#xg2").css("text-decoration","none");
		});
		
		$(".gengduo").click(function(){
			if($(".gengduo").html()=="更多"){
				$(".san").animate({height:"500px"},1000);
				$(".gengduo").animate({marginTop:"240px"},1000);
				$(".gengduo").html("收回");
			}else{
				$(".san").animate({height:"260px"},1000);
				$(".gengduo").animate({marginTop:"0px"},1000);
				$(".gengduo").html("更多");
			}
		});
		
		$(".gengduo").hover(function(){
			$(".gengduo").css("background","#3F4249");
			$(".gengduo").css("color","white");
		},function(){
			$(".gengduo").css("background","#AFB5C6");
			$(".gengduo").css("color","black");
		});
		
		$(".gengduo2").click(function(){
			if($(".gengduo2").html()=="∨"){
				$(".gengduo2").text("∧");
				$(".jindu").animate({height:"120px"},1000);
				$(".gengduo2").animate({top:"200px"},1000);
			}else{
				$(".gengduo2").text("∨");
				$(".jindu").animate({height:"20px"},1000);
				$(".gengduo2").animate({top:"110px"},1000);
			}
		});
		
		$(function(){
		$(window).scroll(function(){  //只要窗口滚动,就触发下面代码 
		var scrollt = document.documentElement.scrollTop + document.body.scrollTop; //获取滚动后的高度 
		if( scrollt >200 ){  //判断滚动后高度超过200px,就显示  
			$("#gotop").fadeIn(400); //淡出     
		}else{      
			$("#gotop").stop().fadeOut(400); //如果返回或者没有超过,就淡入.必须加上stop()停止之前动画,否则会出现闪动   
		}
	});
	$("#gotop").click(function(){ //当点击标签的时候,使用animate在200毫秒的时间内,滚到顶部
			$("html,body").animate({scrollTop:"0px"},200);
	});
});

		
	});

</script>
<style>
body{
    font-family:微软雅黑;
    margin:0px;
    padding:0px;
    background-color:#FFF8DC;
}
.hui{
     background: #C1CDC1;
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
            color: black;
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

.lianxi li{
	line-height:30px;


}
#gotop{ 
	display:block;  
	width:40px; 
	height:40px;
	position:fixed;  
	bottom:50px;  
	right:40px; 
	border-radius:10px 10px 10px 10px;   
	text-decoration:none;  
	display:none;  
	background-color:#F5F5F5;     
}
#gotop span{ 
	display:block; 
	width:40px; 
	color:#dddddd; 
} 
#gotop span:hover{ 
	color:#cccccc; 
} 
#gotop span{ 
	font-size:40px; 
	text-align:center; 
	margin-top:-15px; 
}
</style>
</head>

<body>
<!--灰色导航栏-->
<a id="gotop" href="#">   
  <span><p style="color:#000000;font-size:15px;">返回顶部</p></span> 
</a>
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

        <div class="daohang4tan"><a href="{{url('personal_center')}}">个人中心</a><a href="#">添加修改简历</a><a href="#">查看招聘信息</a></div>
        <div class="daohang5tan"><a href="#">网站简介</a><a href="#">组织结构</a><a href="#">发展历程</a></div>
    </div>
</div>
<!--容器-->
<div class="rongqi" style="border:0px solid red;width:1024px;top:20px;height:1920px;position:relative;margin:0 auto;cursor:default;">
<!--头部-->
<div style="width:300px;height:100px;border:0px solid green;position:absolute;">
<img src="../img/taologo2.jpg" style="width:160px;">
<div style="background:#DEDEDE;width:1px;height:58px;margin-left:170px;margin-top:-65px;"></div>
<p style="color:#666666;font-size:27px;margin-left:190px;margin-top:-48px;">我的简历</p>
</div>
<!--第一块-->
<div style="width:650px;height:270px;border:0px solid black;position:absolute;top:100px;background:#F5F5F5;-webkit-box-shadow:3px 3px 3px 0 #737171;box-shadow:3px 3px 3px 0 #737171;">
<!--头像-->
<div style="width:200px;height:200px;border:0px solid red;background:white;position:absolute;top:20px;left:20px">
<img src="{{$resume->photo}}" style="width:200px;height:200px;">
<!--修改头像-->
    <div style="width:5px"></div>
<div id="xiugai" style="width:136px;height:30px;opacity:0.9;margin-top:-30px;padding-top:5px;padding-left:65px;">
<span></span>
<!--<a id="xg2" herf="" style="color:#777777;">修改头像</a>!-->
    <label for="xFile" style="width: 100px;color: white;font-size: 15px">修改头像</label>

    <form action="/update_user_head" method="post" enctype="multipart/form-data">
        <input type="file" id="xFile" name="user_head" style="position:absolute;clip:rect(0 0 0 0);">
        <input type="submit" value="保存" style="width: 60px;background-color: #FF5500;color: white;font-size: 15px">
    </form>
</div><!--修改头像-->
</div><!--头像-->
<!--姓名-->
<div style="width:300px;height:50px;border:0px solid red;position:absolute;top:20px;left:260px;font-size:30px;">
        {{$resume->name}}
        &nbsp&nbsp&nbsp&nbsp<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            简历的公开程度
        </button>

    <!-- 模态框（Modal） -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        请选择简历的公开程度
                    </h4>
                </div>
                <div class="modal-body">
                   <label style="font-size: 23px"><input name="type" type="radio" >&nbsp &nbsp完全公开</label>
                    <br>
                    &nbsp &nbsp  <span style="font-size: 16px">选择以后您的简历将被所有通过验证的用户看到</span>
                    <br>
                    <label style="font-size: 23px"><input name="type" type="radio" >&nbsp &nbsp不完全公开</label>
                    <br>
                    &nbsp &nbsp  <span style="font-size: 16px">选择以后您的简历将只被你所投递的用人单位看到</span>
                    <br>
                    <label style="font-size: 23px"><input name="type" type="radio" >&nbsp &nbsp不公开</label>
                    <br>
                    &nbsp &nbsp  <span style="font-size: 16px">选择以后您的简历将仅仅自己可以看到</span>
                    <br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                    </button>
                    <button type="button" class="btn btn-primary">
                        提交更改
                    </button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal -->
    </div>
</div><!--姓名-->
<!--学校学院-->
<div style="width:350px;height:55px;border:0px solid red;position:absolute;top:70px;left:260px;font-size:17px;">
<span>学校：{{$resume->school}}</span>


{{--<span>计算机学院</span>--}}
{{--<p>计算机科学与技术</p>--}}


</div><!--学校学院-->
<!--学历 城市-->
<div style="width:350px;height:25px;border:0px solid red;position:absolute;top:130px;left:260px;font-size:15px;">

{{--<span>本科</span>--}}
{{--<span>杭州</span>--}}

</div><!--学历 城市-->
<!--编辑-->
<div style="width:110px;height:26px;position:absolute;top:230px;left:510px;border:0px solid red;">
<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
<a href="/" style="color:#333333;">编辑个人简历</a>
</div><!--编辑-->
</div><!--第一块-->

<!--第四块-->
<div style="width:650px;height:230px;border:0px solid black;position:absolute;top:410px;margin-top:50px;background:#F5F5F5;-webkit-box-shadow:3px 3px 3px 0 #737171;box-shadow:3px 3px 3px 0 #737171;">
<div style="background:#767474;width:130px;height:30px;color:white;font-size:18px;padding-top:5px;padding-left:25px;">其他联系方式</div>
<ul class="lianxi" style="list-style-type:none;margin-top:30px;">
<form>
<p>电话：<b class="caname">{{$resume->contact}}</b></p>
<p>微信：<b class="caname">Hanyu Yuzuru</b></p>
<p> QQ&nbsp：<b class="caname">10001</b></p>
</form>
</ul>
</div><!--第四块-->

<!--大的第三块-->
<div style="width:650px;height:900px;border:0px solid black;position:absolute;top:750px;">
<div class="san" style="overflow:hidden;width:650px;height:260px;background:#F5F5F5;-webkit-box-shadow:3px 3px 3px 0 #737171;box-shadow:3px 3px 3px 0 #737171;">
<div style="background:#767474;width:130px;height:30px;color:white;font-size:18px;padding-top:5px;padding-left:25px;">我的评价</div>
<!--第一条-->
    @if(isset($evaluates))
        @if(!empty($evaluates))
            <div style="width:550px;height:120px;border:0px solid black;margin-top:50px;margin-left:40px;">
                <img src="{{$evaluates->pictures}}" style="width:90px;height:90px">
                <p style="margin-top:-90px;margin-left:110px;color:blue;font-size:16px;">{{$evaluates->user_name}}</p>
                {{--<p style="margin-left:160px;margin-top:-32px;">去哪儿网</p>--}}
                <p style="margin-left:110px;font-size:17px;margin-top:15px;">{{$evaluates->comment}}</p>
                <p style="margin-left:110px;font-size:14px;margin-top:15px;">2016年1月3日</p>
            </div><!--第一条-->
    @endif
@endif

<!--第二条-->
{{--<div style="width:550px;height:120px;border:0px solid black;margin-top:50px;margin-left:40px;">--}}
{{--<img src="../img/ren2.jpg" style="width:90px;height:90px">--}}
{{--<p style="margin-top:-90px;margin-left:110px;color:blue;font-size:16px;">李历</p>--}}
{{--<p style="margin-left:160px;margin-top:-32px;">中华教育</p>--}}
{{--<p style="margin-left:110px;font-size:17px;margin-top:15px;">短短一星期的工作，完成的很好。</p>--}}
{{--<p style="margin-left:110px;font-size:14px;margin-top:15px;">2016年3月6日</p>--}}
{{--</div><!--第二条-->--}}
<!--更多-->
<div class="gengduo" style="width:650px;height:30px;position:absolute;top:230px;opacity:0.5;background:#AFB5C6;color:black;padding-left:300px;padding-top:5px;cursor:pointer;">更多</div><!--更多-->
</div><!--第三块-->


<!--第二块-->
<div style="width:650px;height:460px;border:0px solid black;position:absolute;top:500px;background:#F5F5F5;-webkit-box-shadow:3px 3px 3px 0 #737171;box-shadow:3px 3px 3px 0 #737171;">
<div style="background:#767474;width:130px;height:30px;color:white;font-size:18px;padding-top:5px;padding-left:25px;">更多信息</div>
<!--个人专长-->
<div style="width:200px;height:40px;border:0px solid red;margin-top:50px;margin-left:30px;">
<img src="../img/tub2.jpg" style="width:30px;height:35px;">
&nbsp;<span style="font-size:18px;margin-top:20px;">个人专长</span>
</div><!--个人专长-->
<!--框-->
<div style="background:white;width:597px;height:66px;border:1px dashed #767474;margin-top:20px;margin-left:30px;">
<p class="caname" style="margin-top:0px;margin-left:30px sition: absolute" >1.电脑应用熟练，熟练操作Word,Excel,,Outlook, ERP等各种办公软件;
　　2.勤奋上进好学，工作细心，条理清晰，踏实肯干，有很强的责任心;</p>
</div><!--框-->
<!--工作经验-->
<div style="width:200px;height:40px;border:0px solid red;margin-top:50px;margin-left:30px;">
<img src="../img/tub3.jpg" style="width:30px;height:37px;">
&nbsp;<span style="font-size:18px;margin-top:20px;">工作经验</span>
</div><!--工作经验-->
<!--框-->
<div style="background:white;width:597px;height:66px;border:1px dashed #767474;margin-top:20px;margin-left:30px;">
<p class="caname" style="margin-top:0px;margin-left:30px sition: absolute" >暂无</p>
</div><!--框-->
</div><!--第二块-->
</div><!--大的第三块-->





<!--右边第一块-->
<div style="position:absolute;margin-left:690px;background:#F5F5F5;width:320px;height:1000px;top:100px;-webkit-box-shadow:0 0 3px 0 #737171;box-shadow:0 0 3px 0 #737171;">
<p style="margin-top:20px;margin-left:30px;font-size:17px;">简历完成度</p>
<!--进度条-->
<div style="width:255px;height:22px;background:white;border:1px solid #CCCCCC;margin-left:30px;">
<div style="background:#91CF38;width:30%;height:20px;"></div>
<p style="margin-top:-20px;margin-left:220px;">30%</p>
</div><!--进度条-->
<!--加进度-->
<div class="jindu" style="width:255px;overflow:hidden;height:20px;border:0px solid red;margin-left:30px;margin-top:15px;">
<ul style="list-style-type:none;border:0px solid red;padding:0;">
<li><span>填写基本资料</span>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:green;">已完成</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>+30%</span></li>
<li><span>上传头像</span>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:red;">未完成</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>+10%</span></li>
<li><span>关于我</span>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:red;">未完成</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>+20%</span></li>
<li><span>个人专长</span>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:red;">未完成</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>+20%</span></li>
<li><span>工作经验</span>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:red;">未完成</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>+20%</span></li>
</ul>
<!--更多-->
<div class="gengduo2" style="width:153px;height:20px;background:#FBE4E4;position:absolute;top:110px;padding-left:130px;cursor:pointer;">∨</div><!--更多-->
</div><!--加进度-->

<!--收藏-->
<div style="margin-top:70px;margin-left:30px;width:255px;height:180px;border:0px solid red;">
<p style="font-size:17px;">他们收藏了你</p>
<img src="../img/ren1.jpg" style="margin-top:10px;width:70px;height:70px;">
<p style="margin-left:80px;margin-top:-70px;color:blue;">宋果</p>
<p style="margin-left:80px;margin-top:-5px;">旅游体验师  去哪儿网</p>
<p style="font-size:15px;margin-left:150px;margin-top:-57px;">2015-12-01</p>
<p style="color:red;margin-left:200px;margin-top:30px;cursor:pointer;">收藏</p>

<img src="../img/ren3.jpg" style="margin-top:10px;width:70px;height:70px;">
<p style="margin-left:80px;margin-top:-70px;color:blue;">叶新</p>
<p style="margin-left:80px;margin-top:-5px;">HR  花瓣网</p>
<p style="font-size:15px;margin-left:150px;margin-top:-57px;">2016-2-15</p>
<p style="color:red;margin-left:200px;margin-top:30px;cursor:pointer;">收藏</p>
</div><!--收藏-->

<p style="margin-top:20px;margin-left:30px;font-size:17px;margin-top:80px;">简历人气</p>
<p style="margin-left:60px;">近7天有0人浏览了你的简历</p>
<img src="../img/tub4.png" style="margin-left:20px;">
</div><!--右边第一块-->
</div><!--容器-->


<!--底部-->
<div class="dibu" style="width:100%;height:160px;border:1px solid white;position:absolute;top:2050px;">
        <div style="width:100%;height:12px;background:#FF5500"></div>
        <div style="width:100%;height:1px;border-top:1px dashed #FF5500;margin-top:3px;"></div> 
        <table style="width:80%;height:80%;text-align:center;margin-left:73px">
        <tr>
            <td rowspan=2><img src="../img/taologo.jpg" style="width:170px;"></td>
            <td><a href="#">联系我们</a></td>
            <td><a href="#">加入我们</a></td>
            <td><a href="#">关注我们</a></td>
            <td rowspan=2><img src="../img/erweima.jpg" style="width:110px;"></td>
        </tr>
        <tr>
            <td><a href="#">关于我们</a></td>
            <td><a href="#">友情链接</a></td>
            <td><a href="#">意见反馈</a></td>
        </tr>      
        </table>
        <p style="margin-left:550px;">www.taojianzhi.com</br>网络版权归淘兼职所有</p>
    </div><!--底部-->
</body>
</html>
