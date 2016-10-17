<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>简历</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="../js/jquery-1.11.3.min.js" /></script>
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
        .lianxi li{
            line-height:30px;
        }
        .shijian li{
            line-height:30px;
        }
        .baocun{
            border:0px;
            background:#F5F5F5;
            color:blue;
            margin-left:540px;
            margin-top:45px;
            font-size:17px;
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

        <div class="daohang4tan"><a href="{{url('personal_center')}}">个人信息</a><a href="#">添加修改简历</a><a href="#">查看招聘信息</a></div>
        <div class="daohang5tan"><a href="#">网站简介</a><a href="#">组织结构</a><a href="#">发展历程</a></div>
    </div>
</div>
<!--容器-->
<div class="rongqi" style="border:0px solid red;width:1024px;top:20px;height:1920px;position:relative;margin:0 auto;cursor:default;">
    <!--头部-->
    <div style="width:500px;height:100px;border:0px solid green;position:absolute;">
        <img src="../img/taologo.jpg" style="width:160px;">
        <div style="background:#DEDEDE;width:1px;height:58px;margin-left:170px;margin-top:-65px;"></div>
        <p style="color:#666666;font-size:27px;margin-left:190px;margin-top:-48px;">我的简历</p>
        <a href="/zhanshi/{{$data[0]['uid']}}" style="display:block;margin-left:330px;margin-top:-38px;font-size:18px;">时间管理 go></a>
    </div>

    <!--第一块-->
    <div style="width:650px;height:270px;border:0px solid black;position:absolute;top:100px;background:#F5F5F5;-webkit-box-shadow:3px 3px 3px 0 #737171;box-shadow:3px 3px 3px 0 #737171;">
        <!--头像-->
        <div style="width:200px;height:200px;border:0px solid red;background:white;position:absolute;top:20px;left:20px">
            <img src="../img/touxiang.jpg" style="width:200px;height:200px;">
            <!--修改头像-->
            <div id="xiugai" style="width:200px;height:30px;background:white;opacity:0.9;margin-top:-30px;padding-top:5px;padding-left:65px;">
                <span class="glyphicon glyphicon-camera" aria-hidden="true"></span>
                <a id="xg2" herf="" style="color:#777777;">修改头像</a>
            </div><!--修改头像-->
        </div><!--头像-->
        <!--姓名-->
        <div style="width:300px;height:50px;border:0px solid red;position:absolute;top:20px;left:260px;font-size:30px;">
            胡佳敏
        </div><!--姓名-->
        <!--学校学院-->
        <div style="width:350px;height:55px;border:0px solid red;position:absolute;top:70px;left:260px;font-size:17px;">
            <span>杭州电子科技大学</span>
            <span>计算机学院</span>
            <p>计算机科学与技术</p>
        </div><!--学校学院-->
        <!--学历 城市-->
        <div style="width:350px;height:25px;border:0px solid red;position:absolute;top:130px;left:260px;font-size:15px;">
            <span>本科</span>
            <span>杭州</span>
        </div><!--学历 城市-->
        <!--编辑-->
        <div style="width:110px;height:26px;position:absolute;top:230px;left:510px;border:0px solid red;">
            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
            <a href="" style="color:#333333;">编辑基本信息</a>
        </div><!--编辑-->
    </div><!--第一块-->

    <!--第二块-->
    <div style="width:650px;height:620px;border:0px solid black;position:absolute;top:410px;background:#F5F5F5;-webkit-box-shadow:3px 3px 3px 0 #737171;box-shadow:3px 3px 3px 0 #737171;">
        <div style="background:#767474;width:130px;height:40px;color:white;font-size:18px;padding-top:5px;padding-left:25px;">档案资料</div>
        <!--关于我-->
        <div style="margin-top:40px;margin-left:30px;width:200px;height:40px;border:0px solid red;">
            <img src="../img/tub1.jpg" style="width:30px;height:35px;">
            &nbsp;<span style="font-size:18px;margin-top:20px;">关于我</span>
        </div><!--关于我-->
        <!--框-->
        <div style="background:white;width:590px;height:60px;border:1px dashed #767474;margin-top:20px;margin-left:30px;">
            <form action="/resume_complete/{{$data[0]['uid']}}" method="POST">
<textarea name="guanyu" style="width:588px;height:58px;border:0px;" >{{$data[0]['guanyu']}}
</textarea>
        </div><!--框-->
        <!--个人专长-->
        <div style="width:200px;height:40px;border:0px solid red;margin-top:50px;margin-left:30px;">
            <img src="../img/tub2.jpg" style="width:30px;height:35px;">
            &nbsp;<span style="font-size:18px;margin-top:20px;">个人专长</span>
        </div><!--个人专长-->
        <!--框-->
        <div style="background:white;width:590px;height:60px;border:1px dashed #767474;margin-top:20px;margin-left:30px;">
<textarea name="zhuanchang" style="width:588px;height:58px;border:0px;" >{{$data[0]['zhuanchang']}}
</textarea>
        </div><!--框-->
        <!--工作经验-->
        <div style="width:200px;height:40px;border:0px solid red;margin-top:50px;margin-left:30px;">
            <img src="../img/tub3.jpg" style="width:30px;height:37px;">
            &nbsp;<span style="font-size:18px;margin-top:20px;">工作经验</span>
        </div><!--工作经验-->
        <!--框-->
        <div style="background:white;width:590px;height:60px;border:1px dashed #767474;margin-top:20px;margin-left:30px;">

<textarea name="jingyan" style="width:588px;height:58px;border:0px;" >{{$data[0]['jingyan']}}
</textarea>
            <input type="submit" name="baocun" class="baocun" value="保存"/>
            <img src="../img/baocun.jpg" style="width:20px;height:20px;display:block;margin-left:520px;margin-top:-23px;">
            </form>
        </div><!--框-->
    </div><!--第二块-->

    <!--大的第三块-->
    <div style="width:650px;height:900px;border:0px solid black;position:absolute;top:1080px;">
        <div class="san" style="overflow:hidden;width:650px;height:260px;background:#F5F5F5;-webkit-box-shadow:3px 3px 3px 0 #737171;box-shadow:3px 3px 3px 0 #737171;">
            <div style="background:#767474;width:130px;height:40px;color:white;font-size:18px;padding-top:5px;padding-left:25px;">我的评价</div>
            <!--第一条-->
            <div style="width:550px;height:120px;border:0px solid black;margin-top:50px;margin-left:40px;">
                <img src="../img/ren1.jpg" style="width:90px;height:90px">
                <p style="margin-top:-90px;margin-left:110px;color:blue;font-size:16px;">宋果</p>
                <p style="margin-left:160px;margin-top:-32px;">去哪儿网</p>
                <p style="margin-left:110px;font-size:17px;margin-top:15px;">在一个月的工作中，适应能力强，工作积极，认真负责。</p>
                <p style="margin-left:110px;font-size:14px;margin-top:15px;">2016年1月3日</p>
            </div><!--第一条-->
            <!--第二条-->
            <div style="width:550px;height:120px;border:0px solid black;margin-top:50px;margin-left:40px;">
                <img src="../img/ren2.jpg" style="width:90px;height:90px">
                <p style="margin-top:-90px;margin-left:110px;color:blue;font-size:16px;">李历</p>
                <p style="margin-left:160px;margin-top:-32px;">中华教育</p>
                <p style="margin-left:110px;font-size:17px;margin-top:15px;">短短一星期的工作，完成的很好。</p>
                <p style="margin-left:110px;font-size:14px;margin-top:15px;">2016年3月6日</p>
            </div><!--第二条-->
            <!--更多-->
            <div class="gengduo" style="width:650px;height:30px;position:absolute;top:230px;opacity:0.5;background:#AFB5C6;color:black;padding-left:300px;padding-top:5px;cursor:pointer;">更多</div><!--更多-->
        </div><!--第三块-->



        <!--第四块-->
        <div style="width:650px;height:280px;border:0px solid black;margin-top:50px;background:#F5F5F5;-webkit-box-shadow:3px 3px 3px 0 #737171;box-shadow:3px 3px 3px 0 #737171;">
            <div style="background:#767474;width:130px;height:40px;color:white;font-size:18px;padding-top:5px;padding-left:25px;">联系方式</div>
            <ul class="shijian" style="list-style-type:none;margin-top:30px;">
                <li>手机：15988136744</li>
                <li>电话：<a href="">添加</a></li>
                <li>邮箱：<a href="">添加</a></li>
                <li>QQ：<a href="">添加</a></li>
            </ul>
        </div><!--第四块-->
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
            <div class="gengduo2" style="width:253px;height:20px;background:#FBE4E4;position:absolute;top:110px;padding-left:130px;cursor:pointer;">∨</div><!--更多-->
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
<div style="position:absolute;top:2300px;height:30px;width:100%;border-top:1px solid #D2D0D0;margin-top: 40px;">
    <div align="center"style="margin-top: 15px;">@Taojianzhi.com</div>
</div><!--底部-->
</body>
</html>

