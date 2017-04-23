<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>付款</title>
    <script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
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
                $(".daohang5").css({"background":"#c1cdc1","border":"0px"});
                $(".daohang5tan").hide();
            });
            $('#querenzhifu').click(function () {
                var content1=document.getElementsByTagName("p")[1].innerHTML;
                var password=$("#mima").val();
                var job=document.getElementsByTagName("p")[2].innerHTML;

                //alert(content2);
                $.ajax(
                        {
                            url : 'pay',
                            data:
                            {
                                //job:content2,
                                company:content1,
                                password:password,
                                job:job
                            },
                            type:"POST",
                            success:function (json) {
                                //alert("hello");
                                if(json.state=="success") {
                                   //window.location.href = '../pay_success';
                                    alert("购买成功");
                                    window.location.href='../sendsuccess';
                                }
                                if(json.state=="false")
                                {
                                    alert("支付密码错误");
                                }
                            }
                        }
                )
            })
        });
    </script>
    <style type="text/css">
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
        body{
            font-family:"微软雅黑";
            margin:0px;
            padding:0px;
        }
        li{
            list-style: none;
        }
        a{text-decoration: none;}
        .container{
            border: 0px solid red;
            width: 1024px;
            top:20px;
            height: 900px;
            position: relative;
            margin: 0 auto;
        }
        .header{
            margin-top: 20px;
        }
        .header img{
            width: 160px;
        }
        .header p{
            color: #666;
            font-size: 27px;
            margin-left: 190px;
            margin-top:-48px;
        }
        .stepInfo{position:relative;background:#f2f2f2;margin:-20px auto 0 400px;width:600px;}
        .stepInfo li{float:left;width:12%;height:0.8em;background:#bbb;}
        .stepIco{border-radius:1.8em;padding:0.03em;background:#bbb;text-align:center;line-height:3em;color:#fff; position:absolute;width:3em;height:3em;}
        .stepIco1{top:-0.9em;left:-1%;}
        .stepIco2{top:-0.9em;left:21%;}
        .stepIco3{top:-0.9em;left:46%;}
        .stepIco4{top:-0.9em;left:71%;}
        .stepIco5{top:-0.9em;left:95%;}
        .stepText{color:#666;margin-top:0.1em;width:6em;text-align:center;margin-left:-1.4em;}


        .content{
            margin-top: 130px;
            position: absolute;
            width: 100%;
        }
        .zhiwei{
            width: 100%;
        }
        .zhiwei img{
            width: 130px;
            height: 130px;
            cursor: pointer;
            margin-left: 30px;
        }
        .zhiwei p{
            margin-left: 200px;
            margin-top: -70px;
            font-size: 18px;
            font-weight: bold;
        }
        .zhifu{
            margin-top:140px ;
            border-top:4px solid #dcdcdc;
            border-bottom:4px solid #dcdcdc;
            width: 100%;
        }
        .yuebao{
            height: 60px;
            line-height: 60px;
            padding-left: 30px;
            border:4px solid blue;
            margin-right: 20px;
        }
        .zhifu a{
            height: 40px;
            line-height: 40px;
            width: 160px;
            text-align: center;
            border: 1px solid gray;
            display: inline-block;
            margin-top: 20px;
            color: #000000;
        }
        .zhifu button{
            width: 130px;
            height: 40px;
            line-height: 40px;
            font-size: 18px;
            color: #ffffff;
            background-color: #FF5500;
            margin-bottom: 30px;
            margin-top: 20px;
        }
        .footer{
            margin-top:900px;
            height: 50px;
            border-top:1px solid #D2D0D0;
        }
    </style>
</head>
<body>
<!--begin header-->
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
<!--container-->
<div class="container">
    <div class="header">
        <div>
            <img src="../img/taologo.jpg" >
            <div style="background:#DEDEDE;width:1px;height:58px;margin-left:170px;margin-top:-75px;"></div>
            <p >付款</p>
        </div>
        <div class="stepInfo ">
            <ul>
                <li style="background: red"></li>
                <li style="background: red"></li>
                <li style="background: red"></li>
                <li style="background: red"></li>
                <li style="background:#F22E00;"></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <div class="stepIco stepIco1" id="create" style="background:#F22E00;">1
                <div class="stepText" id="createText" style="color:#F22E00">确认订单信息</div>
            </div>
            <div class="stepIco stepIco2" id="check"style="background:#F22E00;">2
                <div class="stepText" id="checkText">等待卖家确认</div>
            </div>
            <div class="stepIco stepIco3" id="pay"style="background:#F22E00;">3
                <div class="stepText" id="payText">支付服务费</div>
            </div>
            <div class="stepIco stepIco4" id="received">4
                <div class="stepText" id="receivedText">确认兼职</div>
            </div>
            <div class="stepIco stepIco5" id="assess">5
                <div class="stepText" id="assessText">双方互评</div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="zhiwei">
            <img src="/img/taologo.jpg" >
            <p id="company_name">{{$outputs->company_name}}</p>
            <p>{{$outputs->name}}</p>
            <span style="float: right;margin-right: 40px;margin-top: -40px;"><b style="color: #FF5500;font-size: 27px;">10.0</b>元</span>
        </div>
        <div class="zhifu">
            <br/>
            <div style="margin-left: 20px;">
                <div class="yuebao">
                    <input type="radio"checked><span style="padding-left: 30px;">余额宝100.0元</span>
                    <span style="float: right;margin-right: 40px;">支付<b style="color: #FF5500;font-size: 24px;">10.0</b>元</span>
                </div>
                <a href="#" >其他付款方式</a>
                <a  href="#" style="border: 1px dashed gray;">添加快捷/网银支付</a>
                <br/><br/>
                <img src="../img/ok.png"style="width: 20px;">
                <span>您在安全的环境中，请放心使用！</span>
                <br/><br/>
                <p style="font-size: 18px" id="22">淘兼职支付密码：</p>
                <input type="password"style="width: 180px;height: 30px" id="mima">
                <a href="#" style="border: none;color: blue;display: inline">忘记密码？</a>
                <br/>
                <button id="querenzhifu">确认付款</button>
            </div>
        </div>
    </div>
    <div class="footer">
        <div align="center"style="margin-top: 15px;">@Taojianzhi.com</div>
    </div>
</div>
</body>
</html>