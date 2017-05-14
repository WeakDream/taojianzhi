<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gbk" />
    <title>用户登录</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery-1.11.3.min.js" /></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $(".daohang4tan").hide();
        $(".daohang5tan").hide();
        $(".xinzijiesuan2").hide();

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
        $(".wang1").hover(function(){
            $(".wang1").css("color","#FF4400");
        },function(){
            $(".wang1").css("color","#333333");
        });
        $(".wang2").hover(function(){
            $(".wang2").css("color","#FF4400");
        },function(){
            $(".wang2").css("color","#333333");
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
        .denglu{
            width:320px;
            height:320px;
            border-top:3px solid #FF4400;
            border-bottom:1px solid #DEDEDE;
            border-left:1px solid #DEDEDE;
            border-right:1px solid #DEDEDE;
            position:absolute;
            top:130px;
            left:630px;"
        }
        .dibu a{
            color:#3C3C3C;
            text-decoration:none;
            font-size:17px;
            font-weight:700;
            display:block;
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
        <div class="daohang4tan"><a href="{{url("personal_center")}}">个人中心</a><a href="#">添加修改简历</a><a href="#">查看招聘信息</a></div>
        <div class="daohang5tan"><a href="#">网站简介</a><a href="#">组织结构</a><a href="#">发展历程</a></div>

    </div>
</div>
<!--容器-->
<div class="rongqi" style="border:1px solid white;width:1024px;top:20px;height:950px;position:relative;margin:0 auto;cursor:default;">
    <img src="img/taologo.jpg" style="width:160px;">
    <!--图片-->
    <div style="width:430px;height:320px;border:0px solid red;position:absolute;top:130px;left:80px;">
        <img style="width:430px;height:320px;" src="img/denglu2.jpg">
    </div>
    <!--登录框-->
    <div class="denglu">
        <p style="margin-left:30px;margin-top:20px;font-size:16px;">用户登录</p>
        <div style="border-top:1px solid #DEDEDE;width:255px;margin-left:30px;margin-top:10px;"></div>
        <div style="border:0px solid red;width:255px;height:250px;margin-left:30px;margin-top:30px;">
            <form action="login_check" method="post">
               <input type='hidden' name='_token' value='{{csrf_token()}}'>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                    <input type="text" name="username" class="form-control" placeholder="用户名/邮箱" aria-describedby="basic-addon1">
                </div>
                @if($errors->any())
                    <div class=' alert-danger' style="margin-top: 8px;padding-left: 40px" >
                        @foreach($errors->all() as $error)
                           <p>{{$error}}</p>
                        @endforeach
                    </div>
                @endif
                <div class="input-group" style="margin-top:20px;">
                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
                    <input type="password" name="password" class="form-control" placeholder="密码" aria-describedby="basic-addon1">
                </div>

                <a href="{{url('forgetPassword')}}" class="wang1" style="text-decoration:none;color:#333333;margin-top:30px;display:inline-block;">忘记登录密码？</a>
                <a href="{{url('register')}}" class="wang2" style="text-decoration:none;color:#333333;margin-left:90px;">免费注册</a>

                <input type="submit" name="submit" value="提交" class="btn btn-warning" style="background:#FF4400;width:100%;margin-top:20px;">
            </form>
        </div>
    </div>

    <div class="dibu" style="width:100%;height:140px;border:1px solid white;position:absolute;top:650px;">
        <div style="width:100%;height:12px;background:#FF5500"></div>
        <div style="width:100%;height:1px;border-top:1px dashed #FF5500;margin-top:3px;"></div>
        <img src="img/taologo.jpg" style="width:110px;border:1px solid #FF5500;margin-top:40px;margin-left:130px;">
        <a href="#" style="margin-top:-53px;margin-left:350px;">联系我们</a>
        <a href="#" style="margin-top:-22px;margin-left:470px;">加入我们</a>
        <a href="#" style="margin-top:-22px;margin-left:590px;">关注我们</a>
        <a href="#" style="margin-top:8px;margin-left:350px;">关于我们</a>
        <a href="#" style="margin-top:-22px;margin-left:470px;">友情链接</a>
        <a href="#" style="margin-top:-22px;margin-left:590px;">意见反馈</a>
        <img src="img/erweima.jpg" style="width:70px;margin-left:800px;margin-top:-56px;">
        <p style="margin-left:440px;">www.taojianzhi.com</br>网络版权归淘兼职所有</p>
    </div>


</div>

</body>
</html>
