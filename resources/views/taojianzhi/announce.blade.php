<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>发布信息</title>
    <script src="../js/laydate/laydate.js"></script>
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

    });


    </script>
    <style type="text/css">
        body{
            font-family:微软雅黑;
            margin:0px;
            padding:0px;
            font-size:14px;
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

        .clearfix:after { content:"."; display:block; height:0; clear:both; visibility:hidden; }
        .clearfix { display:inline-block; }
        /* Hide from IE Mac \*/
        .clearfix { display:block; }
        /* End hide from IE Mac */
        .del-con{ margin-left:auto; margin-right:auto; padding:20px 0 ; text-align:left;min-height:400px;  _height:400px; overflow:hidden;_overflow:visible;}
        .del-menu{ border:#d6dce1 1px solid; }
        .del-menu-bbg{ background:#f5f5f5; height:2px; overflow:hidden;}
        .del-menu .del-menu-title{ background-color:#fff; padding:1px; border-bottom:#d6dce1 1px solid; height:23px; line-height:23px;}
        .del-menu h2{ background-color:#f8f8f8; padding:0 10px; text-align:left; font-size:12px; font-weight:normal;}ul.del-menu-con{ height:228px; padding:30px 0px 10px 20px;}
        ul.del-menu-con li{ float:left; position:relative; display:block; padding:5px 50px 38px 80px; line-height:2; font-size:12px; color:#707070; white-space:nowrap; border-bottom: 1px dashed #e0e0e0}
        ul.del-menu-con li i{ position:absolute; display:block; width:57px; height:57px; left:10px; bottom:38px; }
        ul.del-menu-con li i.icon1{ background:url(../img/people2.png)}ul.del-menu-con li i.icon2{ background:url(../img/company.png)}ul.del-menu-con li i.icon3{ background-position:-134px -280px;}ul.del-menu-con li i.icon4{ background-position:-201px -280px;}
        ul.del-menu-con li a,ul.del-menu-con li span{ font-weight:bold; font-size:18px; font-family:'微软雅黑', '黑体'; }
        ul.del-menu-con li a{color:#0000cc; }ul.del-menu-con li span{ color:#000000;}
    </style>
</head>
<body  style=" padding-right: 16px;">
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
<div class="rongqi" style="border:0px solid red;width:1024px;top:20px;height:1300px;position:relative;margin:0 auto;cursor:default;">
    <img src="../img/taologo.jpg" style="width:160px;margin-left: 150px;margin-top: 10px;">
    <div style="margin-left: 350px;margin-top: -50px;font-size: 20px;">免费发布信息</div>
    <p style="margin-left: 160px;margin-top: 30px;font-weight: 700;">&nbsp</p>
    <div style="margin-left: 160px;border-top: 2px solid #eaeaea;width: 824;top:-10px;height:750px;position:relative;">

        <div class="del-con">
            <div class="del-menu">
                <div class="del-menu-title"><h2>选择发布兼职信息的身份：</h2></div>
                <ul class="del-menu-con clearfix">
                    <li style="padding-right:190px; margin-left:70px"><i class="icon1"></i><a href="{{url('person_announce/18')}}" title="">个人发布兼职信息</a><br>需要通过身份认证
                    </li>
                    <li style=" margin-left: 70px;"><i class="icon2"></i><a href="{{url('company_announce')}}" title="">公司发布兼职信息</a><br>第一次发布需用户验证公司信息</li>

                </ul>
            </div>
            <div class="del-menu-bbg"></div>
        </div><!--del con-->

    </div>
</div>


</body>
</html>