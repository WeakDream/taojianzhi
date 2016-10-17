<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>淘兼职</title>
    <script type="text/javascript" src="js/jquery-1.11.3.min.js" /></script>
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
        $(".xinzijiesuan ,.xinzijiesuan2 ").hover(function(){
            $(".xinzijiesuan").css({"background":"white","border":"1px solid #EEEEEE"});
            $(".xinzijiesuan2").show();
        },function(){
            $(".xinzijiesuan").css({"background":"#F5F5F5","border":"0px"});
            $(".xinzijiesuan2").hide();
        });
        $(".jianzhishijian ,.jianzhishijian2 ").hover(function(){
            $(".jianzhishijian").css({"background":"white","border":"1px solid #EEEEEE"});
            $(".jianzhishijian2").show();
        },function(){
            $(".jianzhishijian").css({"background":"#F5F5F5","border":"0px"});
            $(".jianzhishijian2").hide();
        });
        $(".gongzuodidian ,.gongzuodidian2 ").hover(function(){
            $(".gongzuodidian").css({"background":"white","border":"1px solid #EEEEEE"});
            $(".gongzuodidian2").show();
        },function(){
            $(".gongzuodidian").css({"background":"#F5F5F5","border":"0px"});
            $(".gongzuodidian2").hide();
        });

        $(".zhiwei").click(function(){
            $(".zhiwei").css({"background":"#FF5500","color":"white"});
            $(".rencai").css({"background":"white","color":"black"});
        });

        $(".rencai").click(function(){
            $(".rencai").css({"background":"#FF5500","color":"white"});
            $(".zhiwei").css({"background":"white","color":"black"});
        });


        $(".jianzhizhiwei").click(function(){
            $(".jianzhizhiwei").css({"background":"url(../img/pic1.jpg)","color":"white"});
            $(".jianzhijianli").css({"background":"white","color":"#3C3C3C"});
        });

        $(".jianzhijianli").click(function(){
            $(".jianzhijianli").css({"background":"url(../img/pic1.jpg)","color":"white"});
            $(".jianzhizhiwei").css({"background":"white","color":"#3C3C3C"});
        });



        var d=0;
        var z=0;
        $(".yuan ul li").click(function(){
            z=d;
            d=$(this).index();
            $(this).find("div").css("background","black");
            if(d!=z)
                $(".yuan ul li").eq(z).find("div").css("background","#717171");
            if(d>z)
            {
                $(".tu ul li").eq(z).animate({left:"-100%"},500);
                $(".tu ul li").eq(d).css("left","100%");
                $(".tu ul li").eq(d).animate({left:"0px"},500);
            }
            if(d<z)
            {
                $(".tu ul li").eq(z).animate({left:"100%"},500);
                $(".tu ul li").eq(d).css("left","-100%");
                $(".tu ul li").eq(d).animate({left:"0px"},500);
            }
        });

        (function() {
            var $backToTopTxt = "返回顶部", $backToTopEle = $('<div class="backToTop"></div>').appendTo($("body"))
                    .text($backToTopTxt).attr("title", $backToTopTxt).click(function() {
                        $("html, body").animate({ scrollTop: 0 }, 120);
                    }), $backToTopFun = function() {
                var st = $(document).scrollTop(), winh = $(window).height();
                (st > 0)? $backToTopEle.show(): $backToTopEle.hide();
                //IE6下的定位
                if (!window.XMLHttpRequest) {
                    $backToTopEle.css("top", st + winh - 166);
                }
            };
            $(window).bind("scroll", $backToTopFun);
            $(function() { $backToTopFun(); });
        })();


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
        .sousuo{
            border:0px solid red;
            width:700px;
            height:60px;
            position:absolute;
            left:250px;
            top:5px;
        }
        .zhiwei{
            background:#FF5500;
            width:50px;
            height:20px;
            color:white;
            font-size:14px;
            position:absolute;
            cursor:pointer;
        }
        .rencai{
            background:white;
            width:50px;
            height:20px;
            color:black ;
            font-size:14px;
            margin-left:50px;
            position:absolute;
            cursor:pointer;
        }
        .mianfei{
            background:url(../img/mianfei.jpg);
            background-repeat:no-repeat;
            border:1px solid #FF5500;
            width:140px;
            height:36px;
            position:absolute;
            left:830px;
            top:26px;
            cursor:pointer;
        }
        .tu{
            position:absolute;
            width:520px;
            height:390px;
            overflow:hidden;
            margin-top:10px;
        }
        .tu ul{
            margin:0px;
            padding:0px;
        }
        .tu ul li{
            list-style-type:none;
            left:-100%;
            float:left;
            position:absolute;
        }
        .tu ul li img{
            width:520px;
            height:390px;
        }
        .yuan{
            position:absolute;
            width:90px;
            height:20px;
            background:white;
            opacity:0.5;
            margin-top:335px;
            margin-left:220px;
            border-radius:5px;
            cursor:default;
        }
        .yuan ul{
            margin-top:4px;
            margin-left:8px;
            padding:0px;
            position:absolute;
        }
        .yuan ul li{
            list-style-type:none;
            float:left;
            margin-right:8px;
            cursor:pointer;
        }
        .saixuan{
            border:0px solid red;
            width:100%;
            height:200px;
            position:absolute;
            top:0px;
        }
        .jianzhizhiwei{
            background:url(../img/pic1.jpg);
            width:150px;
            height:28px;
            color:white;
            font-size:17px;
            position:absolute;
            cursor:pointer;
            font-weight:600;

        }
        .jianzhijianli{
            background:white;
            width:150px;
            height:28px;
            color:#3C3C3C;
            font-size:17px;
            margin-left:150px;
            position:absolute;
            cursor:pointer;
            font-weight:600;
        }
        .xinzijiesuan{
            width:85px;
            height:40px;
            position:absolute;
            margin-left:20px;
            border:1px;
        }
        .xinzijiesuan2{
            width:85px;
            height:120px;
            border:1px solid #EEEEEE;
            margin-left:20px;
            margin-top:40px;
            position:absolute;
            background:white;
            z-index:9;
        }
        .jianzhishijian{
            width:100px;
            height:40px;
            position:absolute;
            margin-left:110px;
            border:1px;
        }
        .jianzhishijian2{
            width:500px;
            height:140px;
            border:1px solid #EEEEEE;
            margin-left:110px;
            margin-top:40px;
            position:absolute;
            background:white;
            z-index:9;
        }
        .gongzuodidian{
            width:80px;
            height:40px;
            position:absolute;
            margin-left:200px;
            border:1px;
        }
        .gongzuodidian2{
            width:500px;
            height:100px;
            border:1px solid gray;
            margin-left:200px;
            margin-top:40px;
            position:absolute;
            background:white;
            z-index:9;
        }
        .xiabu1 {
            width:100%;
            height:40px;
            position:absolute;
            border: 0px solid red ;
            background-color: #f5f5f5 ;
        }
        .xiabu1 div a{
            font-size:14px;
            margin-left:20px;
            margin-top:10px;
            text-decoration:none;
            display:block;
            color:black;
        }
        .xiabu1 div a:hover {
            font-size: 14px;
            margin-left: 20px;
            margin-top: 10px;
            text-decoration: none;
            display: block;
            color: #F22E00;
        }
        .shai dl dd a{
            text-decoration:none;
            color:blue;
        }
        .shai dl dd a:hover{
            text-decoration:none;
            color:black;
        }
        .xiabu3 ul{
            margin-left:200px;
            margin-top:40px;
        }
        .xiabu3 ul li{
            list-style-type:none;
            float:left;
            cursor:pointer;
        }
        .xiabu3 ul li div{
            width:28px;
            height:28px;
            border:1px solid grey;
            font-size:18px;
        }
        .xiabu3 ul li div:hover{
            width:28px;
            height:28px;
            border:1px solid grey;
            font-size:18px;
            color:black;
        }
        .dibu a{
            color:#3C3C3C;
            text-decoration:none;
            font-size:17px;
            font-weight:700;
            display:block;
        }

        .backToTop {
            display: none;
            width: 18px;
            line-height: 1.2;
            padding: 5px 0;
            background-color: #000;
            color: #fff;
            font-size: 12px;
            text-align: center;
            position: fixed;
            _position: absolute;
            right: 10px;
            bottom: 100px;
            _bottom: "auto";
            cursor: pointer;
            opacity: .6;
            filter: Alpha(opacity=60);
        }
        .movie{
            width:242px;
            height:50px;
            border:1px solid #f5f5f5;
            position:relative;
            font-size:14px;
            text-align:center;
            top:40px;
            margin-left:10px;
        }
        .remen{
            margin-top: 40px;
            margin-left: 0px;
            position: absolute;
            font-size: 15px;
        }
        .remen tr th a{
            color:blue;
        }
        .remen tr th a:hover{
            color: #ff5500;
            cursor:pointer;
        }
        .shaizhiwei ul{
            list-style-type:none;
            border:1px solid white;
            margin-top:-5px;
            margin-left:-30px;
        }
        .shaizhiwei ul li{
            float:left;
            width:100px;
            margin-bottom:4px;
        }
        .shaiquyu ul{
            list-style-type:none;
            border:1px solid white;
            margin-top:-5px;
            margin-left:-30px;
        }
        .shaiquyu ul li{
            float:left;
            width:100px;
            margin-bottom:4px;
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
        <div class="daohang4tan"><a href="{{url('personal_center')}}">个人中心</a><a href="#">添加修改简历</a><a href="#">查看招聘信息</a></div>
        <div class="daohang5tan"><a href="#">网站简介</a><a href="#">组织结构</a><a href="#">发展历程</a></div>

    </div>
</div>



<div class="rongqi" style="border:0px solid red;width:1024px;top:20px;height:1800px;position:relative;margin:0 auto;cursor:default;">
    <!--头部-->
    <div class="header" style="width:100%;height:100px;border:1px solid white;position:absolute;cursor:default;">
        <!--LOGO-->
        <img src="../img/taologo.jpg" style="width:160px;">
        <!--搜索-->
        <div class="sousuo">
            <form action="search_handle" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="zhiwei" align="center">职位</div>
                <div class="rencai" align="center">人才</div>

                <input name='key' type="text" placeholder="" size="60" style="border:3px solid #FF5500;height:32px;top:20px;position:absolute;">
                <input name='submit' type="submit" value="搜索" style="color:white;font-size:18px;font-weight:600;width:80px;height:40px;background:#FF5500;border:0px;left:455px;top:20px;position:absolute;cursor:pointer;">
            </form>
            <p style="color:black;position:absolute;font-size:13px;margin-top:62px;margin-left:10px;">打字员、销售员、客服…</p>
        </div>
        <!--免费发布信息-->

        <a href="{{url('announce')}}"><div class="mianfei"></div></a>
    </div>

    <!--中部-->
    <div class="zhongbu" style="border:1px solid white;width:100%;height:400px;position:absolute;top:100px;cursor:default;">
        <!--左-->
        <div style="border:1px solid #FF4706;width:235px;height:400px;position:absolute;">
            <div style="width:235px;height:29px;color:white;font-size:17px;background:url(../img/pic1.jpg);font-weight:600;">&nbsp;&nbsp;&nbsp;积分榜</div>
            <!--公司积分-->
            <div style="border:0px solid green;width:233px;height:180px;">
                <img src="http://localhost/cao_taojianzhi/public/img/biao2.jpg/img/biao1.jpg" style="margin:6px;">
                <p style="margin-top:-28px;margin-left:40px;color:#3C3C3C;font-size:16px;font-weight:600;">公司积分</p>
                <p style="color:#3C3C3C;margin-left:25px;font-size:15px;">杭州博轩轩有限公司</br>杭州亚悦文化艺术公司</br>浙江一周健身器材有限公司</br>杭州小猪猪餐饮公司</br>德信地产集团有限公司</p>

            </div>
            <!--职位热度-->
            <div style="border:0px solid green;width:233px;height:190px;">
                <img src="http://localhost/cao_taojianzhi/public/img/biao2.jpg" style="margin:6px;">
                <p style="margin-top:-30px;margin-left:40px;color:#3C3C3C;font-size:16px;font-weight:600;">职位热度</p>
                <p style="color:#3C3C3C;margin-left:25px;font-size:15px;">促销/导购</br>传单派单</br>钟点工</br>服装员</br>图片处理</p>
            </div>

        </div>

        <!--中-->
        <div class="zhong" style="border-top:3px solid #FF4706;;width:520px;height:400px;position:absolute;margin-left:250px;">
            <div class="tu">
                <ul>
                    <li style="left:0px;"><img src="http://localhost/cao_taojianzhi/public/img/tu7.jpg"></li>
                    <li><img src="../img/tu8.jpg"></li>
                    <li><img src="../img/tu9.jpg"></li>
                    <li><img src="../img/tu10.jpg"></li>
                </ul>
            </div>
            <div class="yuan">
                <ul>
                    <li><div style="width:12px;height:12px;border-radius:6px;background:black;"></div></li>
                    <li><div style="width:12px;height:12px;border-radius:6px;background:#717171;"></div></li>
                    <li><div style="width:12px;height:12px;border-radius:6px;background:#717171;"></div></li>
                    <li><div style="width:12px;height:12px;border-radius:6px;background:#717171;"></div></li>
                </ul>
            </div>
        </div>
        <!--右-->
        <div style="border-top:3px solid #FF4706;width:250px;height:400px;position:absolute;margin-left:770px;">
            <div style="margin-top:10px;width:242px;height:29px;position:absolute;color:#FF4706;font-size:17px;font-weight:600;border:1px solid #eaeaea;margin-left: 10px;background-color: #f5f5f5">&nbsp;&nbsp;&nbsp;最新发布</div>
            <div class="movie">
                <marquee direction="up" behavior="scroll"scrollamount="2"width="100%"height="50px">
                    <p>手机APP推广专员招聘</p>
                    <p>电脑打字员招聘</p>
                    <p>酒店招聘学生兼职服务员</p>
                    <p>诚聘天猫淘宝客服</p>
                    <p>招聘周末话务员学生兼职</p>
                    <p>淘宝平面模特兼职</p>
                </marquee>
            </div>
            <div style="border:1px solid #eaeaea;height: 295px;width: 245px;margin-top: 50px;margin-left: 10px;position: absolute">
                <div style="margin-left: 10px;margin-top: 10px;position: absolute;"><b>热门行业</b><a href="#"style="text-decoration: none;margin-left: 20px;color: #000000">杭州招聘会</a> </div>
                <table class="remen" width="230" height="200">
                    <tr>
                        <th><a href="#"style="text-decoration: none;"> 酒店</a></th>
                        <th ><a href="#"style="text-decoration: none;margin-left: 15px;"> 物流</a></th>
                        <th><a href="#"style="text-decoration: none;margin-left: 17px;"> 教育/培训</a></th>
                    </tr>
                    <tr>
                        <th><a href="#"style="text-decoration: none;"> 餐饮</a></th>
                        <th ><a href="#"style="text-decoration: none;margin-left: 17px;"> 建筑</a></th>
                        <th><a href="#"style="text-decoration: none;margin-left: 17px;"> 计算机/网络</a></th>
                    </tr>
                    <tr>
                        <th><a href="#"style="text-decoration: none;"> 娱乐</a></th>
                        <th ><a href="#"style="text-decoration: none;margin-left: 17px;"> 汽车服务</a></th>
                        <th><a href="#"style="text-decoration: none;margin-left: 17px;"> 金融/银行</a></th>
                    </tr>
                    <tr >
                        <th><a href="#"style="text-decoration: none;"> 超市</a></th>
                        <th ><a href="#"style="text-decoration: none;margin-left: 17px;"> 医疗</a></th>
                        <th><a href="#"style="text-decoration: none;margin-left: 17px;"> 市场/媒介</a></th>
                    </tr>
                    <tr>
                        <th><a href="#"style="text-decoration: none;"> 旅游</a></th>
                        <th ><a href="#"style="text-decoration: none;margin-left: 17px;"> 美容</a></th>
                        <th><a href="#"style="text-decoration: none;margin-left: 17px;"> 电气</a></th>
                    </tr>
                    <tr>
                        <th><a href="#"style="text-decoration: none;"> 运动健身</a></th>
                        <th ><a href="#"style="text-decoration: none;margin-left: 17px;"> 食品</a></th>
                        <th><a href="#"style="text-decoration: none;margin-left: 17px;"> 纺织</a></th>
                    </tr>
                    <tr>
                        <th><a href="#"style="text-decoration: none;"> 广告</a></th>
                        <th ><a href="#"style="text-decoration: none;margin-left: 17px;"> 制药</a></th>
                        <th><a href="#"style="text-decoration: none;margin-left: 17px;"> 保健</a></th>
                    </tr>
                </table>
            </div>

        </div>
    </div>

    <!--中部-->
    <div class="zhongbu" style="border:0px solid yellow;width:100%;height:200px;position:absolute;top:520px;">
        <div class="saixuan">
            <form>
                <div class="jianzhizhiwei" align="center">学生兼职职位</div>
                <div class="jianzhijianli" align="center">学生兼职简历</div>
            </form>
            <div class="shai" style="border-top:3px solid #FF5500;border-bottom:1px solid #eaeaea;border-left:1px solid #eaeaea;border-right:1px solid #eaeaea;width:100%;height:172px;position:absolute;top:28px;">
                <dl style="width:1010px;height:90px;top:10px;border:0px solid blue;margin-left:10px">
                    <dt style="width:50px;height:30px;border:0px solid blue;margin:0px;font-size:14px;color:black;">职位：</dt>
                    <dd class="shaizhiwei" style="width:960px;height:90px;border:0px solid blue;margin-left: 50px;margin-top:-30px;font-size:14px;">
                        <ul>
                            <li><a href="#">发传单</a></li>
                            <li><a href="#">促销</a></li>
                            <li><a href="#">家教</a></li>
                            <li><a href="#">服务员</a></li>
                            <li><a href="#">钟点工</a></li>
                            <li><a href="#">图片处理</a></li>
                            <li><a href="#">兼职测试</a></li>
                            <li><a href="#">软件开发</a></li>
                            <li><a href="#">汽车代驾</a></li>
                            <li><a href="#">美工</a></li>
                            <li><a href="#">技工</a></li>
                            <li><a href="#">写作</a></li>
                            <li><a href="#">导游</a></li>
                            <li><a href="#">摄影</a></li>
                            <li><a href="#">手绘/漫画</a></li>
                            <li><a href="#">视频剪辑/制作</a></li>
                            <li><a href="#">化妆师</a></li>
                            <li><a href="#">礼仪/模特</a></li>
                            <li><a href="#">志愿者</a></li>
                            <li><a href="#">活动策划</a></li>
                            <li><a href="#">导游</a></li>
                            <li><a href="#">会计</a></li>
                            <li><a href="#">家教</a></li>
                            <li><a href="#">健身教练</a></li>
                            <li><a href="#">汽车陪练</a></li>
                            <li><a href="#">汽车代驾</a></li>
                            <li><a href="#">游戏代练</a></li>
                            <li><a href="#">律师</a></li>

                    </dd>

                </dl>
                <dl style="width:1010px;height:43px;top:105px;border:0px solid blue;margin-left: 10px">
                    <dt style="width:50px;height:43px;border:0px solid blue;margin:0px;font-size:14px;">区域：</dt>
                    <dd class="shaiquyu" style="width:960;height:43px;border:0px solid blue;margin-left:50px;margin-top:-43px;font-size:14px;">
                        <ul>
                            <li><a href="#">杭州</a></li>
                            <li><a href="#">西湖</a></li>
                            <li><a href="#">江干</a></li>
                            <li><a href="#">上城</a></li>
                            <li><a href="#">余杭</a></li>
                            <li><a href="#">萧山</a></li>
                            <li><a href="#">滨江</a></li>
                            <li><a href="#">建德</a></li>
                            <li><a href="#">富阳</a></li>
                            <li><a href="#">临安</a></li>
                            <li><a href="#">桐庐</a></li>
                            <li><a href="#">淳安</a></li>
                            <li><a href="#">杭州周边</a></li>
                        </ul>
                    </dd>
                    <dl>
            </div>
        </div>
    </div>

    <!--下部-->
    <div class="xiabu" style="border:1px solid #eaeaea;width:800px;height:700px;position:absolute;top:730px;">
        <div class="xiabu1">
            <form action="filtration" method="post" >
                <div class="xinzijiesuan"><a href="#">薪资结算</a></div>
                <div class="xinzijiesuan2 ">日结<input type="checkbox" name="rijie" value="日结"><br>月结<input type="checkbox" name="yuejie" value="月结"></div>
                <div class="jianzhishijian"><a href="#">兼职时间</a></div>
                <div class="jianzhishijian2">
                    <table border="1px"width="500"height="100" cellpadding="0" cellspacing="0" style="border-collapse:collapse;"width="450" height="140" >
                        <tr>
                            <td></td><td>星期一</td><td>星期二</td><td>星期三</td><td>星期四</td><td>星期五</td><td>星期六</td><td>星期日</td>
                        </tr>
                        <tr>
                            <td>上午</td>
                            <td><input name="a1" value="1" type="checkbox" style="margin-left: 20px;"></td>
                            <td><input name="a2" value="1" type="checkbox" style="margin-left: 20px;"></td>
                            <td><input name="a3" value="1" type="checkbox" style="margin-left: 20px;"></td>
                            <td><input name="a4" value="1" type="checkbox" style="margin-left: 20px;"></td>
                            <td><input name="a5" value="1" type="checkbox" style="margin-left: 20px;"></td>
                            <td><input name="a6" value="1" type="checkbox" style="margin-left: 20px;"></td>
                            <td><input name="a7" value="1" type="checkbox" style="margin-left: 20px;"></td>
                        </tr>
                        <tr>
                            <td>下午</td>
                            <td><input name="p1" value="1" type="checkbox"style="margin-left: 20px;"></td>
                            <td><input name="p2" value="1" type="checkbox"style="margin-left: 20px;"></td>
                            <td><input name="p3" value="1" type="checkbox"style="margin-left: 20px;"></td>
                            <td><input name="p4" value="1" type="checkbox"style="margin-left: 20px;"></td>
                            <td><input name="p5" value="1" type="checkbox"style="margin-left: 20px;"></td>
                            <td><input name="p6" value="1" type="checkbox"style="margin-left: 20px;"></td>
                            <td><input name="p7" value="1" type="checkbox"style="margin-left: 20px;"></td>
                        </tr>
                        <tr>
                            <td colspan="4"align="right"><input name="makesure" type="button"value="确定"></td>
                            <td colspan="4"><input type="reset" value="取消"></td>
                        </tr>
                    </table>
                </div>
                <div class="gongzuodidian"><a href="#">工作地点</a> </div>
                <div class="gongzuodidian2">
                    <table border="0px"width="500"height="100" >
                        <tr>
                            <td>下沙<input name="f1" value="下沙" type="checkbox" style="margin-left: 20px;"></td>
                            <td>西湖<input name="f1" value="西湖" type="checkbox" style="margin-left: 20px;"></td>
                            <td>江干<input name="f1" value="江干" type="checkbox" style="margin-left: 20px;"></td>
                            <td>滨江<input name="f1" value="滨江" type="checkbox" style="margin-left: 20px;"></td>
                            <td>临安<input name="f1" value="临安" type="checkbox" style="margin-left: 20px;"></td>
                        </tr>
                        <tr>
                            <td>建德<input name="f1" value="建德" type="checkbox" style="margin-left: 20px;"></td>
                            <td>富阳<input name="f1" value="富阳" type="checkbox" style="margin-left: 20px;"></td>
                            <td>高沙<input name="f1" value="高沙" type="checkbox" style="margin-left: 20px;"></td>
                            <td>临平<input name="f1" value="临平" type="checkbox" style="margin-left: 20px;"></td>
                            <td>云水<input name="f1" value="云水" type="checkbox" style="margin-left: 20px;"></td>
                        </tr>
                    </table>
                </div>
                <input name="i_key" type="text" style="margin-left: 300px;margin-top: 10px;width:90px;height:20px;">
                <input name="i_select" type="submit" value="筛选" style="height:25px;">
                <select style="margin-left: 270px;margin-top: 10px;position: absolute;">
                    <option selected>默认排序</option>
                    <option>最新消息</option>
                </select>
            </form>
        </div>
        <div class="xiabu2" style="border:1px solid #f5f5f5;width:100%;height:600px;position:absolute;top:40px;">

            <table>
                <tr height="40">
                    <td width="30"></td>
                    <td width="340">求职意向</td>
                    <td width="80">姓名</td>
                    <td width="80">性别</td>
                    <td width="80">电话</td>
                    <td width="80">学历</td>
                    <td width="80">更新时间</td>
                </tr>
            </table>
             @if(isset($inputs))
                @if(!empty($inputs))
            @foreach($inputs as $input)
            <table>
                <tr height="40">
                    <td width="30"></td>
                    <td width="340"><a href="{{url('gongsi',$input->company_name)}}">{{$input->company_name}}</a></td>
                    <td width="80">{{$input->contact_person}}</td>
                    <td width="80">1</td>
                    <td width="80">{{$input->contact}}</td>
                    <td width="80">1</td>
                    <td width="80">{{$input->updated_at}}</td>
                </tr>
            </table>
            @endforeach
                @endif
            @endif

            @if(isset($m))
                @foreach($m as $n)
                    <table>
                        <tr height="40">
                            <td width="30"></td>
                            <td width="340"><a href="{{url('gongsi',$n->company_name)}}">{{$n->company_name}}</a></td>
                            <td width="80">{{$n->contact_person}}</td>
                            <td width="80">1</td>
                            <td width="80">{{$n->contact}}</td>
                            <td width="80">1</td>
                            <td width="80">{{$n->updated_at}}</td>
                        </tr>
                    </table>
                @endforeach
            @endif
            @if(isset($inputs))
                {!! $inputs->render() !!}
                @endif






        </div>
        <div class="xiabu3" style="border:0px solid blue;width:100%;height:70px;position:absolute;top:630px;cursor:default;">



        </div>
    </div>
    <div class="xiabuyou"style="border: 1px solid #eaeaea;height: 700px;width: 210px;margin-left: 815px;position: absolute;top:730px;">
        <div style="border: 1px solid #eaeaea;height: 40px;width: 210px;background: #eaeaea;font-size: 18px;"align="center">智能推广</div>
        <div style="border: 1px solid #eaeaea;height: 80px;">
            <p style="margin-top: 2px;margin-left:5px;color:blue;font-size: 15px;">月薪6000淘宝客服</p>
            <p style="margin-top: -5px;margin-left:5px;color:#000000;font-size: 13px;">工作区域：杭州</p>
            <p style="margin-top: -5px;margin-left:5px;color:#000000;font-size: 13px;">薪资：<spam style="color: red;">面议</spam></p>
        </div>
        <div style="border: 1px solid #eaeaea;height: 80px;">
            <p style="margin-top: 2px;margin-left:5px;color:blue;font-size: 15px;">高薪诚聘英语教师</p>
            <p style="margin-top: -5px;margin-left:5px;color:#000000;font-size: 13px;">工作区域：杭州</p>
            <p style="margin-top: -5px;margin-left:5px;color:#000000;font-size: 13px;">薪资：<span style="color: red;">5000—8000</span>元/月</p>
        </div>
        <div style="border: 1px solid #eaeaea;height: 80px;">
            <p style="margin-top: 2px;margin-left:5px;color:blue;font-size: 15px;">奥尔夫相关启蒙老师</p>
            <p style="margin-top: -5px;margin-left:5px;color:#000000;font-size: 13px;">工作区域：杭州</p>
            <p style="margin-top: -5px;margin-left:5px;color:#000000;font-size: 13px;">薪资：<spam style="color: red;">2000-3000</spam>元/月</p>
        </div>
        <div style="border: 1px solid #eaeaea;height: 80px;">
            <p style="margin-top: 2px;margin-left:5px;color:blue;font-size: 15px;">专业的兼职平台招人员</p>
            <p style="margin-top: -5px;margin-left:5px;color:#000000;font-size: 13px;">工作区域：杭州</p>
            <p style="margin-top: -5px;margin-left:5px;color:#000000;font-size: 13px;">薪资：<spam style="color: red;">面议</spam></p>
        </div>
        <div style="border: 1px solid #eaeaea;height: 80px;">
            <p style="margin-top: 2px;margin-left:5px;color:blue;font-size: 15px;">酒店直招男女服务员</p>
            <p style="margin-top: -5px;margin-left:5px;color:#000000;font-size: 13px;">工作区域：杭州</p>
            <p style="margin-top: -5px;margin-left:5px;color:#000000;font-size: 13px;">薪资：<spam style="color: red;">4000-6000</spam>元/月</p>
        </div>
        <div style="border: 1px solid #eaeaea;height: 80px;">
            <p style="margin-top: 2px;margin-left:5px;color:blue;font-size: 15px;">课程销售月薪过万</p>
            <p style="margin-top: -5px;margin-left:5px;color:#000000;font-size: 13px;">工作区域：杭州</p>
            <p style="margin-top: -5px;margin-left:5px;color:#000000;font-size: 13px;">薪资：<spam style="color: red;">面议</spam></p>
        </div>
        <div style="border: 1px solid #eaeaea;height: 80px;">
            <p style="margin-top: 2px;margin-left:5px;color:blue;font-size: 15px;">招聘超市收营员</p>
            <p style="margin-top: -5px;margin-left:5px;color:#000000;font-size: 13px;">工作区域：杭州</p>
            <p style="margin-top: -5px;margin-left:5px;color:#000000;font-size: 13px;">薪资：<spam style="color: red;">面议</spam></p>
        </div>
        <div style="border: 1px solid #eaeaea;height: 84px;">
            <p style="margin-top: 2px;margin-left:5px;color:blue;font-size: 15px;">幼儿教师</p>
            <p style="margin-top: -5px;margin-left:5px;color:#000000;font-size: 13px;">工作区域：杭州</p>
            <p style="margin-top: -5px;margin-left:5px;color:#000000;font-size: 13px;">薪资：<spam style="color: red;">2000-5000</spam>元/月</p>
        </div>
    </div>
    <!--留言栏-->
    <div style="background:#ECE9E9;width:1024px;height:250px;position:absolute;top:1450px;margin-left:0px;cursor:default;">
        <p style="color:black;font-size:17px;margin-left:30px;">发表评论</p>
        <p style="color:black;font-size:17px;margin-left:880px;margin-top:-38px;font-size:14px;">意见反馈</p>
        <form>
            <textarea style="width:920px;height:135px;left:30px;position:absolute;" placeholder="畅所欲言，表达你那热衷的想法吧~"></textarea>
            <input type="submit" value="上传" style="position:absolute;top:205px;left:800px;background:#FF5500;border:0px;width:60px;height:22px;color:white;">
            <input type="submit" value="取消" style="position:absolute;top:205px;left:880px;background:#FF5500;border:0px;width:60px;height:22px;color:white;">
        </form>
    </div>
    <!--底部导航栏-->
    <div class="dibu" style="width:100%;height:140px;border:1px solid white;position:absolute;top:1750px;">
        <div style="width:100%;height:12px;background:#FF5500"></div>
        <div style="width:100%;height:1px;border-top:1px dashed #FF5500;margin-top:3px;"></div>
        <img src="../img/taologo.jpg" style="width:110px;border:1px solid #FF5500;margin-top:40px;margin-left:130px;">
        <a href="#" style="margin-top:-53px;margin-left:350px;">联系我们</a>
        <a href="#" style="margin-top:-22px;margin-left:470px;">加入我们</a>
        <a href="#" style="margin-top:-22px;margin-left:590px;">关注我们</a>
        <a href="#" style="margin-top:8px;margin-left:350px;">关于我们</a>
        <a href="#" style="margin-top:-22px;margin-left:470px;">友情链接</a>
        <a href="#" style="margin-top:-22px;margin-left:590px;">意见反馈</a>
        <img src="../img/erweima.jpg" style="width:70px;margin-left:800px;margin-top:-56px;">
        <p style="margin-left:440px;">www.taojianzhi.com</br>网络版权归淘兼职所有</p>
    </div>


</div>


</body>
</html>
