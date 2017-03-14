<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>淘兼职</title>
<script type="text/javascript" src="js/jquery-1.11.3.min.js" ></script>
<script type="text/javascript">
        $(document).ready(function(){
            $(".daohang4tan").hide();
            $(".daohang5tan").hide();
            $(".xinzijiesuan2").hide();
            $(".jianzhishijian2").hide();
            $(".gongzuodidian2").hide();
            $("#l1").show();
            $("#l2").hide();

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
                $(".jianzhizhiwei").css({"background":"url(img/pic1.jpg)","color":"white"});
                $(".jianzhijianli").css({"background":"white","color":"#3C3C3C"});
                $("#l1").show();
                $("#l2").hide();
            });

            $(".jianzhijianli").click(function(){
                $(".jianzhijianli").css({"background":"url(img/pic1.jpg)","color":"white"});
                $(".jianzhizhiwei").css({"background":"white","color":"#3C3C3C"});
                $("#l1").hide();
                $("#l2").show();
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

window.onload = function () {
    var Lis = document.getElementsByTagName("li");
    for (i = 0; i < Lis.length; i++) {
        Lis[i].onmouseover = function () {
            this.className = "lihover";
        }

        Lis[i].onmouseout = function () {
            this.className = "";
        }
    }
}

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
    background:url(img/mianfei.jpg);
    background-repeat:no-repeat;
    border:1px solid #FF5500;
    width:140px;
    height:38px;
    position:absolute;
    left:830px;
    top:26px;
    cursor:pointer;
}
.mianfei2{
    border:1px solid #FF5500;
    width:150px;
    height:30px;
    position:absolute;
    left:830px;
    top:26px;
    cursor:pointer;
    background-color: #FF5500;
    color:white;
    font-size:16px;
    font-weight:600;
    padding-left: 9px;
    padding-top: 7px;
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
    background:url(img/pic1.jpg);
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
    margin-left: 15px;
    position: absolute;
    font-size: 15px;
    color: blue;
}
.remen tr th a:hover{
    color: #ff5500;
    cursor:pointer;
}

.button1{
 margin-left: 500px;
    margin-top: -20px;;
}
.button1:hover{
    background: gray;
}
.button2:hover{
    background: gray;
}
.xiabu1 ul{
    list-style: none;

}
.xiabu1 ul li{
    float:left;
    line-height: 40px;
    text-align: center;

}

.kuang{

    position: relative;
    border: 2px solid #FF5500;
    height: 180px;
    width: 500px;
    margin-left: 220px;
    margin-top: -80px;
    display: none;
    z-index: 9;
    background:white;
}
#l2 .xiabu2 dl:hover div {
    display: block;

}
#l2 .xiabu2 dl:hover{
    background: #eaeaea;
}
#l1 .xiabu2 dl:hover{
    background: #eaeaea;
}
.topmenu
{
    display: block;
    width: 235px;
    border: 2px solid #e4393c;
    margin: 0;
    padding: 0;
}
.toptitle
{
    height: 40px;
    line-height: 40px;
    text-align: left;
    font-size: 11pt;
    font-weight: bold;
    color: White;
    background:#FF4706;
    padding-left: 20px;
}
.topmenu li
{
    height: 30px;
    line-height: 30px;
    font-size: 11pt;
    list-style-type: none;
    text-align: left;
    padding-left: 8px;
    z-index: 3;
    background-image: url(1.png);
    background-repeat: no-repeat;
    background-position: right;
}
.topmenu li a
{
    text-decoration: none;
    color: #313131;
}
.topmenu li a:hover
{
    text-decoration: underline;
    font-weight: bold;
    color: #FF4706;
}
.topmenu .lihover /*鼠标移动到上面时，应用的样式*/
        {
    border: 1px solid #DDD;
    border-right: 0;
    box-shadow: 0 0 8px #DDD;
    -moz-box-shadow: 0 0 8px #DDD;
    -webkit-box-shadow: 0 0 8px #DDD;
    background-image: none;
    height:30px;
    border-left:4px solid #FF4706;
}
.topmenu .lihover .submenu /*悬浮层*/
        {
    display: block;
}

.topmenu .lihover span /*白色小方框*/
        {
    background: white;
    display: inline-block;
    z-index: 20;
    width: 20px;
    height: 30px;
    float: right;
    position: relative;

}


.submenu
{
    display: none;
    width: 715px;
    left: 235px;
    position: absolute;
    top: 40px;
    border: 1px solid #DDD;
    z-index: 4;
    background: white;
    box-shadow: 0 0 8px #DDD;
    -moz-box-shadow: 0 0 8px #DDD;
    -webkit-box-shadow: 0 0 8px #DDD;
}
.leftdiv
{
    float: left;
    width: 490px;
    margin: 5px;
}
.rightdiv
{
    float: left;
    width: 200px;
    margin: 5px;
}

.leftdiv dl
{
    display: block;
    border-bottom: 1px solid #EEE;
    padding-bottom: 6px;
    overflow: hidden;
}
.leftdiv dl dt
{
    display: block;
    float: left;
    width: 60px;
    text-align: right;
    height: 22px;
    line-height: 22px;
    padding-right: 6px;
}

.leftdiv dl dt a
{
    color: #FF4706;
    font-weight: bold;
    text-decoration: underline;
    font-size: 10pt;
}
.leftdiv dl dd
{
    display: block;
    overflow: hidden;
}
.leftdiv dl dd a
{
    display: block;
    float: left;
    border-left: 1px solid #CCC;
    color: #737373;
    font-size: 9pt;
    padding: 0 8px;
    height: 14px;
    line-height: 14px;
    margin: 4px 0;
}

.rightdiv dl dd
{
    margin: 3px 0;
}

.rightdiv dl dt
{
    color: #FF4706;
    font-weight: bold;
    font-size: 10pt;
}

.rightdiv dl dd a
{
    font-size: 9pt;
    color: #737373;
    line-height: 22px;
}
.rightdiv dl dd a:hover
{
    color: #737373;
    font-weight: normal;
}

.topmenu li b
{
    display:none;
}

.rightPic
{
    position:relative;
    right:-35px;
    bottom:-20px;
}
    table td
    {
      border-bottom: solid 1px blue;
    }
</style>
</head>

<body>
<!--灰色导航栏-->
<div class="hui">
    <div class="daohang">
        <div class="daohang1"><a href={{url('index')}}>首页</a></div>
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

        <div class="daohang4tan"><a href="{{url('personal_center')}}">个人中心</a><a href="{{url('complate_personal_resume')}}">添加修改简历</a><a href="#">查看招聘信息</a></div>
        <div class="daohang5tan"><a href="#">网站简介</a><a href="#">组织结构</a><a href="#">发展历程</a></div>
    </div>
</div>

<div class="rongqi" style="border:0px solid red;width:1024px;top:20px;height:1800px;position:relative;margin:0 auto;cursor:default;">
<!--头部-->
<div class="header" style="width:100%;height:100px;border:1px solid white;position:absolute;cursor:default;">
    <!--LOGO-->
    <img src="img/taologo.jpg" style="width:160px;">
    <!--搜索-->
    <div class="sousuo">
        <form action="{{ url('search_handle') }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="zhiwei" align="center">职位</div>
            <div class="rencai" align="center">人才</div>
            <input name = "key" type="search" placeholder="" size="50" style="border:3px solid #FF5500;height:40px;top:20px;position:absolute;">
            <input type="submit" value="搜索" style="color:white;font-size:18px;font-weight:600;width:80px;height:40px;background:#FF5500;border:0px;left:455px;top:20px;position:absolute;cursor:pointer;">
        </form>
        <p style="color:black;position:absolute;font-size:13px;margin-top:62px;margin-left:10px;">打字员、销售员、客服…</p>
    </div>
    <!--免费发布信息-->

    <a href="{{url('announce',$role_id)}}">
        @if(isset($role_id))
         @if($role_id==1)
            <div class="mianfei"></div></a>
        @endif
         @if($role_id==2)
             <div class="mianfei2">申请账号，免费招聘</div></a>

            @endif
        @endif
    @if(!isset($role_id))
        <div class="mianfei2">申请账号，免费招聘</div></a>
        @endif
</div>

<!--中部-->
<div class="zhongbu" style="border:1px solid white;width:100%;height:400px;position:absolute;top:100px;cursor:default;">
    <!--左-->
    <div style="border:0px solid #FF4706;width:235px;height:400px;position:absolute;">
    <ul class="topmenu">
    <div class="toptitle">
        全部工作分类分类
    </div>
    <li><a href="#">酒店、旅游</a><span></span>
        <div class="submenu">
            <div class="leftdiv">
                <dl>
                    <dt><a href="#">酒店前台</a></dt>
                    <dd>
                        <a href="#">客房服务</a> <a href="#">楼面经理</a> <a href="#">行李员</a> <a href="#">救生员</a>
                        <a href="#">酒店管理</a> <a href="#">酒店管理</a> <a href="#">酒店管理</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">旅游</a></dt>
                    <dd>
                        <a href="#">售票员</a> <a href="#">导游</a> <a href="#">导游</a> <a href="#">旅游顾问</a>
                        <a href="#">旅游产品</a> <a href="#">线路规划</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">酒店前台</a></dt>
                    <dd>
                        <a href="#">客房服务</a> <a href="#">楼面经理</a> <a href="#">行李员</a> <a href="#">救生员</a>
                        <a href="#">酒店管理</a> <a href="#">酒店管理</a> <a href="#">酒店管理</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">旅游</a></dt>
                    <dd>
                        <a href="#">售票员</a> <a href="#">导游</a> <a href="#">导游</a> <a href="#">旅游顾问</a>
                        <a href="#">旅游产品</a> <a href="#">线路规划</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">酒店前台</a></dt>
                    <dd>
                        <a href="#">客房服务</a> <a href="#">楼面经理</a> <a href="#">行李员</a> <a href="#">救生员</a>
                        <a href="#">酒店管理</a> <a href="#">酒店管理</a> <a href="#">酒店管理</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">旅游</a></dt>
                    <dd>
                        <a href="#">售票员</a> <a href="#">导游</a> <a href="#">导游</a> <a href="#">旅游顾问</a>
                        <a href="#">旅游产品</a> <a href="#">线路规划</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">酒店前台</a></dt>
                    <dd>
                        <a href="#">客房服务</a> <a href="#">楼面经理</a> <a href="#">行李员</a> <a href="#">救生员</a>
                        <a href="#">酒店管理</a> <a href="#">酒店管理</a> <a href="#">酒店管理</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">旅游</a></dt>
                    <dd>
                        <a href="#">售票员</a> <a href="#">导游</a> <a href="#">导游</a> <a href="#">旅游顾问</a>
                        <a href="#">旅游产品</a> <a href="#">线路规划</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">酒店前台</a></dt>
                    <dd>
                        <a href="#">客房服务</a> <a href="#">楼面经理</a> <a href="#">行李员</a> <a href="#">救生员</a>
                        <a href="#">酒店管理</a> <a href="#">酒店管理</a> <a href="#">酒店管理</a>
                    </dd>
                </dl>

            </div>
            <div class="rightdiv">
                <dl>
                    <dd>
                        <a href="http://sale.jd.com/act/1XDZ6ShE5M7tTrl.html">
                            <img src="http://img30.360buyimg.com/erpVCAare/g16/M00/0B/1B/rBEbRlOCFcoIAAAAAAArMNB2tlkAACTlwDgVG8AACtI514.jpg"
                                 width="194" height="70" title="\家电">
                        </a>
                    </dd>
                    <dd>
                        <a href="http://sale.jd.com/act/v8kJIaPmsMGuebpH.html">
                            <img src="http://img30.360buyimg.com/erpVCAare/g16/M00/0B/19/rBEbRlOAiHUIAAAAAAAx8X2c6oIAACTCAP56A4AADIJ112.jpg"
                                 width="194" height="70" title="小家电--三请聚宝盆">
                        </a>
                    </dd>
                </dl>
                <dl>
                    <dt>推荐公司</dt>
                    <dd>
                        <a href="#">华住酒店管理公司</a>
                    </dd>
                    <dd>
                        <a href="#">杭州慈航酒店有限公司</a>
                    </dd>
                    <dd>
                        <a href="#">佛山七天酒店有限公司</a>
                    </dd>
                    <dd>
                        <a href="#">北京汉普文化发展有限公司</a>
                    </dd>
                    <dd>
                        <a href="#">橘子酒店有限公司</a>
                    </dd>
                    <dd>
                        <a href="#">杭州爱情酒店有限公司</a>
                    </dd>
                </dl>
                <img class="rightPic" src="wii.png" />
            </div>
        </div>
    </li>
    <li><a href="#">教育、培训</a> <span></span>
        <div class="submenu">
            <div class="leftdiv">
                <dl>
                    <dt><a href="#">教师助教</a></dt>
                    <dd>
                        <a href="#">家教</a> <a href="#">幼教</a> <a href="#">早教</a> <a href="#">英语教师</a> <a
                            href="#">美术教师</a> <a href="#">教育产品开发</a> <a href="#">教育产品开发</a> <a href="#">教育产品开发</a>
                        <a href="#">数学教师</a> <a href="#">教育产品开发</a> <a href="#">教育产品开发</a> <a href="#">教育产品开发</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">培训</a></dt>
                    <dd>
                        <a href="#">培训师</a> <a href="#">培训助理</a> <a href="#">培训策划</a> <a href="#">讲师</a>
                        <a href="#">培训师</a> <a href="#">培训助理</a> <a href="#">培训策划</a> <a href="#">讲师</a>
                        <a href="#">培训师</a> <a href="#">培训助理</a> <a href="#">培训策划</a> <a href="#">讲师</a>
                        <a href="#">培训师</a> <a href="#">培训助理</a> <a href="#">培训策划</a> <a href="#">讲师</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">教师助教</a></dt>
                    <dd>
                        <a href="#">家教</a> <a href="#">幼教</a> <a href="#">早教</a> <a href="#">英语教师</a> <a
                            href="#">美术教师</a> <a href="#">教育产品开发</a> <a href="#">教育产品开发</a> <a href="#">教育产品开发</a>
                        <a href="#">数学教师</a> <a href="#">教育产品开发</a> <a href="#">教育产品开发</a> <a href="#">教育产品开发</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">培训</a></dt>
                    <dd>
                        <a href="#">培训师</a> <a href="#">培训助理</a> <a href="#">培训策划</a> <a href="#">讲师</a>
                        <a href="#">培训师</a> <a href="#">培训助理</a> <a href="#">培训策划</a> <a href="#">讲师</a>
                        <a href="#">培训师</a> <a href="#">培训助理</a> <a href="#">培训策划</a> <a href="#">讲师</a>
                        <a href="#">培训师</a> <a href="#">培训助理</a> <a href="#">培训策划</a> <a href="#">讲师</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">教师助教</a></dt>
                    <dd>
                        <a href="#">家教</a> <a href="#">幼教</a> <a href="#">早教</a> <a href="#">英语教师</a> <a
                            href="#">美术教师</a> <a href="#">教育产品开发</a> <a href="#">教育产品开发</a> <a href="#">教育产品开发</a>
                        <a href="#">数学教师</a> <a href="#">教育产品开发</a> <a href="#">教育产品开发</a> <a href="#">教育产品开发</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">培训</a></dt>
                    <dd>
                        <a href="#">培训师</a> <a href="#">培训助理</a> <a href="#">培训策划</a> <a href="#">讲师</a>
                        <a href="#">培训师</a> <a href="#">培训助理</a> <a href="#">培训策划</a> <a href="#">讲师</a>
                        <a href="#">培训师</a> <a href="#">培训助理</a> <a href="#">培训策划</a> <a href="#">讲师</a>
                        <a href="#">培训师</a> <a href="#">培训助理</a> <a href="#">培训策划</a> <a href="#">讲师</a>
                    </dd>
                </dl>
            </div>
            <div class="rightdiv">
            </div>
        </div>
    </li>
    <li><a href="#">娱乐、休闲、音乐</a><span></span>
        <div class="submenu">
            <div class="leftdiv">
                <dl>
                    <dt><a href="#">手机通讯</a></dt>
                    <dd>
                        <a href="#">手机</a> <a href="#">对讲机</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">京东通信</a></dt>
                    <dd>
                        <a href="#">选号中心</a> <a href="#">自助服务</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">运营商</a></dt>
                    <dd>
                        <a href="#">购机送费</a> <a href="#">0元购机</a> <a href="#">选号入网</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">手机配件</a></dt>
                    <dd>
                        <a href="#">电池</a> <a href="#">蓝牙耳机</a> <a href="#">充电器/数据线</a> <a href="#">手机耳机</a>
                        <a href="#">贴膜</a> <a href="#">存储卡</a> <a href="#">保护套</a> <a href="#">车载</a> <a
                            href="#">iPhone配件</a> <a href="#">创意配件</a> <a href="#">便携/无线音箱</a> <a href="#">手机饰品</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">摄影摄像</a></dt>
                    <dd>
                        <a href="#">数码相机</a> <a href="#">单电/微单相机</a> <a href="#">单反相机</a> <a href="#">拍立得</a>
                        <a href="#">运动相机</a> <a href="#">摄像机</a> <a href="#">镜头</a> <a href="#">户外器材</a>
                        <a href="#">摄影器材</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">数码配件</a></dt>
                    <dd>
                        <a href="#">存储卡</a> <a href="#">读卡器</a> <a href="#">滤镜</a> <a href="#">闪光灯/手柄</a>
                        <a href="#">相机包</a> <a href="#">三脚架/云台</a> <a href="#">相机清洁</a> <a href="#">相机贴膜</a>
                        <a href="#">机身附件</a> <a href="#">镜头附件</a> <a href="#">电池/充电器</a> <a href="#">移动电源</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">时尚影音</a></dt>
                    <dd>
                        <a href="#">耳机/耳麦</a> <a href="#">音箱/音响</a> <a href="#">麦克风</a> <a href="#">MP3/MP4</a>
                        <a href="#">数码相框</a> <a href="#">专业音频</a> <a href="#">苹果周边</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">智能设备</a></dt>
                    <dd>
                        <a href="#">智能手环</a> <a href="#">智能手表</a> <a href="#">智能眼镜</a> <a href="#">运动跟踪器</a>
                        <a href="#">健康监测</a> <a href="#">智能配饰</a> <a href="#">智能家居</a> <a href="#">体感车</a>
                        <a href="#">其他配件</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">电子教育</a></dt>
                    <dd>
                        <a href="#">电子词典</a> <a href="#">电纸书</a> <a href="#">录音笔</a> <a href="#">复读机</a>
                        <a href="#">点读机/笔</a> <a href="#">学生平板</a> <a href="#">早教机</a>
                    </dd>
                </dl>
            </div>
            <div class="rightdiv">
            </div>
        </div>
    </li>
    <li><a href="#">计算机、网络</a><span></span>
        <div class="submenu">
            <div class="leftdiv">
                <dl>
                    <dt><a href="#">电脑整机</a></dt>
                    <dd>
                        <a href="#">笔记本</a> <a href="#">超极本</a> <a href="#">游戏本</a> <a href="#">平板电脑</a>
                        <a href="#">平板电脑配件</a> <a href="#">台式机</a> <a href="#">服务器/工作站</a> <a href="#">笔记本配件</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">电脑配件</a></dt>
                    <dd>
                        <a href="#">CPU</a> <a href="#">主板</a> <a href="#">显卡</a> <a href="#">硬盘</a> <a href="#">
                        SSD固态硬盘</a> <a href="#">内存</a> <a href="#">机箱</a> <a href="#">电源</a> <a href="#">显示器</a>
                        <a href="#">刻录机/光驱</a> <a href="#">声卡/扩展卡</a> <a href="#">散热器</a> <a href="#">装机配件</a>
                        <a href="#">组装电脑</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">外设产品</a></dt>
                    <dd>
                        <a href="#">鼠标</a> <a href="#">键盘</a> <a href="#">游戏设备</a> <a href="#">U盘</a> <a
                            href="#">移动硬盘</a> <a href="#">鼠标垫</a> <a href="#">摄像头</a> <a href="#">线缆</a>
                        <a href="#">电玩</a> <a href="#">手写板</a> <a href="#">外置盒</a> <a href="#">电脑工具</a>
                        <a href="#">电脑清洁</a> <a href="#">UPS</a> <a href="#">插座</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">网络产品</a></dt>
                    <dd>
                        <a href="#">路由器</a> <a href="#">网卡</a> <a href="#">交换机</a> <a href="#">网络存储</a>
                        <a href="#">4G/3G上网</a> <a href="#">网络盒子</a> <a href="#">网络配件</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">办公打印</a></dt>
                    <dd>
                        <a href="#">打印机</a> <a href="#">一体机</a> <a href="#">投影机</a> <a href="#">投影配件</a>
                        <a href="#">传真机</a> <a href="#">复合机</a> <a href="#">碎纸机</a> <a href="#">扫描仪</a>
                        <a href="#">墨盒</a> <a href="#">硒鼓</a> <a href="#">墨粉</a> <a href="#">色带</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">办公文仪</a></dt>
                    <dd>
                        <a href="#">办公文具</a> <a href="#">文件管理</a> <a href="#">笔类</a> <a href="#">纸类</a>
                        <a href="#">本册/便签</a> <a href="#">学生文具</a> <a href="#">财务用品</a> <a href="#">计算器</a>
                        <a href="#">激光笔</a> <a href="#">白板/封装</a> <a href="#">考勤机</a> <a href="#">刻录碟片/附件</a>
                        <a href="#">点钞机</a> <a href="#">支付设备/POS机</a> <a href="#">安防监控</a> <a href="#">呼叫/会议设备</a>
                        <a href="#">保险柜</a> <a href="#">办公家具</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">服务产品</a></dt>
                    <dd>
                        <a href="#">上门服务</a> <a href="#">远程服务</a> <a href="#">电脑软件</a>
                    </dd>
                </dl>
            </div>
            <div class="rightdiv">
            </div>
        </div>
    </li>
    <li><a href="#">运动、健身</a><span></span>
        <div class="submenu">
            <div class="leftdiv">
                <dl>
                    <dt><a href="#">厨具</a></dt>
                    <dd>
                        <a href="#">烹饪锅具</a> <a href="#">刀剪菜板</a> <a href="#">厨房配件</a> <a href="#">水具酒具</a>
                        <a href="#">餐具</a> <a href="#">茶具/咖啡具</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">家装建材</a></dt>
                    <dd>
                        <a href="#">灯饰照明</a> <a href="#">厨房卫浴</a> <a href="#">五金工具</a> <a href="#">电工电料</a>
                        <a href="#">墙地面材料</a> <a href="#">装饰材料</a> <a href="#">装修服务</a> <a href="#">吸顶灯</a>
                        <a href="#">淋浴花洒</a> <a href="#">开关插座</a> <a href="#">油漆涂料</a> <a href="#">龙头</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">家纺</a></dt>
                    <dd>
                        <a href="#">床品套件</a> <a href="#">被子</a> <a href="#">蚊帐</a> <a href="#">凉席</a> <a
                            href="#">床单被罩</a> <a href="#">枕芯</a> <a href="#">毛巾浴巾</a> <a href="#">布艺软饰</a>
                        <a href="#">毯子</a> <a href="#">抱枕靠垫</a> <a href="#">床垫/床褥</a> <a href="#">窗帘/窗纱</a>
                        <a href="#">电热毯</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">家具</a></dt>
                    <dd>
                        <a href="#">卧室家具</a> <a href="#">客厅家具</a> <a href="#">餐厅家具</a> <a href="#">书房家具</a>
                        <a href="#">储物家具</a> <a href="#">阳台/户外</a> <a href="#">商业办公</a> <a href="#">床</a>
                        <a href="#">床垫</a> <a href="#">沙发</a> <a href="#">电脑椅</a> <a href="#">衣柜</a> <a href="#">
                        茶几</a> <a href="#">电视柜</a> <a href="#">餐桌</a> <a href="#">电脑桌</a> <a href="#">鞋架/衣帽架</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">灯具</a></dt>
                    <dd>
                        <a href="#">台灯</a> <a href="#">吸顶灯</a> <a href="#">筒灯射灯</a> <a href="#">LED灯</a>
                        <a href="#">节能灯</a> <a href="#">落地灯</a> <a href="#">五金电器</a> <a href="#">应急灯/手电</a>
                        <a href="#">装饰灯</a> <a href="#">吊灯</a> <a href="#">氛围照明</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">生活日用</a></dt>
                    <dd>
                        <a href="#">收纳用品</a> <a href="#">雨伞雨具</a> <a href="#">浴室用品</a> <a href="#">缝纫/针织用品</a>
                        <a href="#">洗晒/熨烫</a> <a href="#">净化除味</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">家装软饰</a></dt>
                    <dd>
                        <a href="#">桌布/罩件</a> <a href="#">地毯地垫</a> <a href="#">沙发垫套/椅垫</a> <a href="#">帘艺隔断</a>
                        <a href="#">相框/照片墙</a> <a href="#">装饰字画</a> <a href="#">墙贴/装饰贴</a> <a href="#">节庆饰品</a>
                        <a href="#">手工/十字绣</a> <a href="#">钟饰</a> <a href="#">装饰摆件</a> <a href="#">花瓶花艺</a>
                        <a href="#">创意家居</a> <a href="#">保暖防护</a> <a href="#">香薰蜡烛</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">清洁用品</a></dt>
                    <dd>
                        <a href="#">纸品湿巾</a> <a href="#">衣物清洁</a> <a href="#">清洁工具</a> <a href="#">家庭清洁</a>
                        <a href="#">一次性用品</a> <a href="#">驱虫用品</a> <a href="#">皮具护理</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">宠物生活</a></dt>
                    <dd>
                        <a href="#">宠物主粮</a> <a href="#">宠物零食</a> <a href="#">洗护美容</a> <a href="#">家居日用</a>
                        <a href="#">医疗保健</a> <a href="#">出行装备</a> <a href="#">宠物玩具</a> <a href="#">水族用品</a>
                        <a href="#">猫砂/尿布</a> <a href="#">宠物牵引</a> <a href="#">宠物驱虫</a>
                    </dd>
                </dl>
            </div>
            <div class="rightdiv">
            </div>
        </div>
    </li>
    <li><a href="#">食品、安全、纺织</a><span></span>
        <div class="submenu">
            <div class="leftdiv">
                <dl>
                    <dt><a href="#">面部护肤</a></dt>
                    <dd>
                        <a href="#">清洁</a> <a href="#">护肤</a> <a href="#">面膜</a> <a href="#">剃须</a> <a href="#">
                        套装</a>
                    </dd>
                </dl>
                <!-- <dl>
                    <dt><a href="#">洗发护发</a></dt>
                    <dd>
                        <a href="#">洗发</a> <a href="#">护发</a> <a href="#">染发</a> <a href="#">造型</a> <a href="#">
                            假发</a> <a href="#">套装</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">身体护肤</a></dt>
                    <dd>
                        <a href="#">沐浴</a> <a href="#">润肤</a> <a href="#">颈部</a> <a href="#">手足</a> <a href="#">
                            纤体塑形</a> <a href="#">美胸</a> <a href="#">套装</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">口腔护理</a></dt>
                    <dd>
                        <a href="#">牙膏/牙粉</a> <a href="#">牙刷/牙线</a> <a href="#">漱口水</a> <a href="#">套装</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">女性护理</a></dt>
                    <dd>
                        <a href="#">卫生巾</a> <a href="#">卫生护垫</a> <a href="#">私密护理</a> <a href="#">脱毛膏</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">香水彩妆</a></dt>
                    <dd>
                        <a href="#">香水</a> <a href="#">底妆</a> <a href="#">腮红</a> <a href="#">眼部</a> <a href="#">
                            唇部</a> <a href="#">美甲</a> <a href="#">美容工具</a> <a href="#">套装</a>
                    </dd>
                </dl>-->
            </div>
            <div class="rightdiv">
            </div>
        </div>
    </li>
    <li><a href="#">市场、媒介、广告、新闻</a><span></span>
        <div class="submenu">
            <div class="leftdiv">
                <dl>
                    <dt><a href="#">时尚女鞋</a></dt>
                    <dd>
                        <a href="#">凉鞋</a> <a href="#">单鞋</a> <a href="#">高跟鞋</a> <a href="#">坡跟鞋</a> <a
                            href="#">松糕鞋</a> <a href="#">鱼嘴鞋</a> <a href="#">休闲鞋</a> <a href="#">帆布鞋</a>
                        <a href="#">拖鞋/人字拖</a> <a href="#">妈妈鞋</a> <a href="#">防水台</a> <a href="#">雨鞋/雨靴</a>
                        <a href="#">内增高</a> <a href="#">布鞋/绣花鞋</a> <a href="#">女靴</a> <a href="#">雪地靴</a>
                        <a href="#">踝靴</a> <a href="#">马丁靴</a> <a href="#">鞋配件</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">流行男鞋</a></dt>
                    <dd>
                        <a href="#">休闲鞋</a> <a href="#">凉鞋/沙滩鞋</a> <a href="#">帆布鞋</a> <a href="#">商务休闲鞋</a>
                        <a href="#">正装鞋</a> <a href="#">增高鞋</a> <a href="#">拖鞋/人字拖</a> <a href="#">工装鞋</a>
                        <a href="#">男靴</a> <a href="#">传统布鞋</a> <a href="#">功能鞋</a> <a href="#">鞋配件</a>
                        <a href="#">定制鞋</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">潮流女包</a></dt>
                    <dd>
                        <a href="#">单肩包</a> <a href="#">手提包</a> <a href="#">斜挎包</a> <a href="#">双肩包</a>
                        <a href="#">钱包</a> <a href="#">手拿包/晚宴包</a> <a href="#">卡包/零钱包</a> <a href="#">钥匙包</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">精品男包</a></dt>
                    <dd>
                        <a href="#">商务公文包</a> <a href="#">单肩/斜挎包</a> <a href="#">男士手包</a> <a href="#">双肩包</a>
                        <a href="#">钱包/卡包</a> <a href="#">钥匙包</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">功能箱包</a></dt>
                    <dd>
                        <a href="#">拉杆箱/拉杆包</a> <a href="#">旅行包</a> <a href="#">电脑包</a> <a href="#">休闲运动包</a>
                        <a href="#">相机包</a> <a href="#">腰包/胸包</a> <a href="#">登山包</a> <a href="#">旅行配件</a>
                        <a href="#">书包</a> <a href="#">妈咪包</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">奢侈品</a></dt>
                    <dd>
                        <a href="#">箱包</a> <a href="#">钱包</a> <a href="#">服饰</a> <a href="#">腰带</a> <a href="#">
                        鞋靴</a> <a href="#">太阳镜/眼镜框</a> <a href="#">饰品</a> <a href="#">配件</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">钟表</a></dt>
                    <dd>
                        <a href="#">男表</a> <a href="#">女表</a> <a href="#">儿童表</a> <a href="#">座钟挂钟</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">礼品</a></dt>
                    <dd>
                        <a href="#">火机烟具</a> <a href="#">军刀军具</a> <a href="#">美妆礼品</a> <a href="#">工艺礼品</a>
                        <a href="#">礼盒礼券</a> <a href="#">礼品文具</a> <a href="#">收藏品</a> <a href="#">古董把玩</a>
                        <a href="#">地方礼品</a> <a href="#">创意礼品</a> <a href="#">婚庆用品</a> <a href="#">鲜花绿植</a>
                        <a href="#">京东卡</a>
                    </dd>
                </dl>
            </div>
            <div class="rightdiv">
            </div>
        </div>
    </li>
    <li><a href="#">美容美发</a><span></span>
        <div class="submenu">
            <div class="leftdiv">
                <dl>
                    <dt><a href="#">运动鞋包</a></dt>
                    <dd>
                        <a href="#">休闲鞋</a> <a href="#">跑步鞋</a> <a href="#">板鞋</a> <a href="#">帆布鞋</a> <a
                            href="#">篮球鞋</a> <a href="#">足球鞋</a> <a href="#">乒羽网鞋</a> <a href="#">专项运动鞋</a>
                        <a href="#">训练鞋</a> <a href="#">拖鞋</a> <a href="#">运动包</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">运动服饰</a></dt>
                    <dd>
                        <a href="#">卫衣/套头衫</a> <a href="#">毛衫/线衫</a> <a href="#">夹克/风衣</a> <a href="#">棉服</a>
                        <a href="#">羽绒服</a> <a href="#">T恤</a> <a href="#">乒羽网服</a> <a href="#">训练服</a>
                        <a href="#">运动背心</a> <a href="#">运动裤</a> <a href="#">运动套装</a> <a href="#">运动配饰</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">健身训练</a></dt>
                    <dd>
                        <a href="#">跑步机</a> <a href="#">健身车/动感单车</a> <a href="#">综合训练器</a> <a href="#">其他大型器械</a>
                        <a href="#">哑铃</a> <a href="#">仰卧板/收腹机</a> <a href="#">其他中小型器材</a> <a href="#">武术搏击</a>
                        <a href="#">运动护具</a> <a href="#">瑜伽舞蹈</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">骑行运动</a></dt>
                    <dd>
                        <a href="#">山地车/公路车</a> <a href="#">折叠车</a> <a href="#">电动车</a> <a href="#">其他整车</a>
                        <a href="#">骑行装备</a> <a href="#">骑行服</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">体育用品</a></dt>
                    <dd>
                        <a href="#">乒乓球</a> <a href="#">羽毛球</a> <a href="#">网球</a> <a href="#">篮球</a> <a
                            href="#">足球</a> <a href="#">高尔夫</a> <a href="#">台球</a> <a href="#">轮滑滑板</a>
                        <a href="#">排球</a> <a href="#">棋牌麻将</a> <a href="#">其它</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">户外鞋服</a></dt>
                    <dd>
                        <a href="#">冲锋衣裤</a> <a href="#">速干衣裤</a> <a href="#">滑雪服</a> <a href="#">羽绒服/棉服</a>
                        <a href="#">休闲衣裤</a> <a href="#">抓绒衣裤</a> <a href="#">软壳衣裤</a> <a href="#">T恤</a>
                        <a href="#">户外风衣</a> <a href="#">功能内衣</a> <a href="#">军迷服饰</a> <a href="#">登山鞋</a>
                        <a href="#">徒步鞋</a> <a href="#">越野跑鞋</a> <a href="#">休闲鞋</a> <a href="#">雪地靴</a>
                        <a href="#">工装鞋</a> <a href="#">溯溪鞋</a> <a href="#">沙滩/凉拖</a> <a href="#">户外袜</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">户外装备</a></dt>
                    <dd>
                        <a href="#">背包</a> <a href="#">帐篷/垫子</a> <a href="#">睡袋/吊床</a> <a href="#">登山攀岩</a>
                        <a href="#">户外照明</a> <a href="#">野餐烧烤</a> <a href="#">便携桌椅床</a> <a href="#">户外工具</a>
                        <a href="#">望远镜</a> <a href="#">户外仪表</a> <a href="#">旅游用品</a> <a href="#">军迷用品</a>
                        <a href="#">救援装备</a> <a href="#">滑雪装备</a> <a href="#">极限户外</a> <a href="#">冲浪潜水</a>
                        <a href="#">户外配饰</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">垂钓用品</a></dt>
                    <dd>
                        <a href="#">鱼竿鱼线</a> <a href="#">浮漂鱼饵</a> <a href="#">钓鱼桌椅</a> <a href="#">钓鱼配件</a>
                        <a href="#">钓箱鱼包</a> <a href="#">其它</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">游泳用品</a></dt>
                    <dd>
                        <a href="#">泳镜</a> <a href="#">泳帽</a> <a href="#">游泳包防水包</a> <a href="#">男士泳衣</a>
                        <a href="#">女士泳衣</a> <a href="#">比基尼</a> <a href="#">其它</a>
                    </dd>
                </dl>
            </div>
            <div class="rightdiv">
            </div>
        </div>
    </li>
    <li><a href="#">汽车服务</a><span></span>
        <div class="submenu">
            <div class="leftdiv">
                <dl>
                    <dt><a href="#">维修保养</a></dt>
                    <dd>
                        <a href="#">润滑油</a> <a href="#">添加剂</a> <a href="#">防冻液</a> <a href="#">滤清器</a>
                        <a href="#">火花塞</a> <a href="#">雨刷</a> <a href="#">车灯</a> <a href="#">后视镜</a> <a
                            href="#">轮胎</a> <a href="#">轮毂</a> <a href="#">刹车片/盘</a> <a href="#">喇叭/皮带</a>
                        <a href="#">蓄电池</a> <a href="#">底盘装甲/护板</a> <a href="#">贴膜</a> <a href="#">汽修工具</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">车载电器</a></dt>
                    <dd>
                        <a href="#">导航仪</a> <a href="#">安全预警仪</a> <a href="#">行车记录仪</a> <a href="#">倒车雷达</a>
                        <a href="#">蓝牙设备</a> <a href="#">时尚影音</a> <a href="#">净化器</a> <a href="#">电源</a>
                        <a href="#">冰箱</a> <a href="#">吸尘器</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">美容清洗</a></dt>
                    <dd>
                        <a href="#">车蜡</a> <a href="#">补漆笔</a> <a href="#">玻璃水</a> <a href="#">清洁剂</a> <a
                            href="#">洗车工具</a> <a href="#">洗车配件</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">汽车装饰</a></dt>
                    <dd>
                        <a href="#">脚垫</a> <a href="#">座垫</a> <a href="#">座套</a> <a href="#">后备箱垫</a> <a
                            href="#">头枕腰靠</a> <a href="#">香水</a> <a href="#">空气净化</a> <a href="#">车内饰品</a>
                        <a href="#">功能小件</a> <a href="#">车身装饰件</a> <a href="#">车衣</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">安全自驾</a></dt>
                    <dd>
                        <a href="#">安全座椅</a> <a href="#">胎压充气</a> <a href="#">防盗设备</a> <a href="#">应急救援</a>
                        <a href="#">保温箱</a> <a href="#">储物箱</a> <a href="#">自驾野营</a> <a href="#">摩托车装备</a>
                    </dd>
                </dl>
            </div>
            <div class="rightdiv">
            </div>
        </div>
    </li>
    <li><a href="#">金融、银行</a><span></span>
        <div class="submenu">
            <div class="leftdiv">
                <dl>
                    <dt><a href="#">奶粉</a></dt>
                    <dd>
                        <a href="#">婴幼奶粉</a> <a href="#">成人奶粉</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">营养辅食</a></dt>
                    <dd>
                        <a href="#">DHA</a> <a href="#">钙铁锌/维生素</a> <a href="#">益生菌/初乳</a> <a href="#">清火/开胃</a>
                        <a href="#">米粉/菜粉</a> <a href="#">果泥/果汁</a> <a href="#">面条/粥</a> <a href="#">宝宝零食</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">尿裤湿巾</a></dt>
                    <dd>
                        <a href="#">婴儿尿裤</a> <a href="#">拉拉裤</a> <a href="#">成人尿裤</a> <a href="#">湿巾</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">洗护用品</a></dt>
                    <dd>
                        <a href="#">宝宝护肤</a> <a href="#">宝宝洗浴</a> <a href="#">理发器</a> <a href="#">洗衣液/皂</a>
                        <a href="#">奶瓶清洗</a> <a href="#">日常护理</a> <a href="#">座便器</a> <a href="#">驱蚊防蚊</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">喂养用品</a></dt>
                    <dd>
                        <a href="#">奶瓶奶嘴</a> <a href="#">吸奶器</a> <a href="#">牙胶安抚</a> <a href="#">暖奶消毒</a>
                        <a href="#">辅食料理机</a> <a href="#">碗盘叉勺</a> <a href="#">水壶/水杯</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">童车童床</a></dt>
                    <dd>
                        <a href="#">婴儿床</a> <a href="#">婴儿推车</a> <a href="#">餐椅摇椅</a> <a href="#">学步车</a>
                        <a href="#">三轮车</a> <a href="#">自行车</a> <a href="#">扭扭车</a> <a href="#">滑板车</a>
                        <a href="#">电动车</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">安全座椅</a></dt>
                    <dd>
                        <a href="#">提篮式</a> <a href="#">安全座椅</a> <a href="#">增高垫</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">寝居服饰</a></dt>
                    <dd>
                        <a href="#">婴儿外出服</a> <a href="#">婴儿内衣</a> <a href="#">婴儿礼盒</a> <a href="#">婴儿鞋帽袜</a>
                        <a href="#">家居床品</a> <a href="#">安全防护</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">妈妈专区</a></dt>
                    <dd>
                        <a href="#">妈咪包/背婴带</a> <a href="#">待产/新生</a> <a href="#">产后塑身</a> <a href="#">文胸/内裤</a>
                        <a href="#">防辐射服</a> <a href="#">孕妇装</a> <a href="#">月子装</a> <a href="#">孕期营养</a>
                        <a href="#">孕妈美容</a>
                    </dd>
                </dl>
                <dl class="0">
                    <dt><a href="#">童装童鞋</a></dt>
                    <dd>
                        <a href="#">套装</a> <a href="#">上衣</a> <a href="#">裤子</a> <a href="#">裙子</a> <a href="#">
                        内衣</a> <a href="#">羽绒服/棉服</a> <a href="#">亲子装</a> <a href="#">配饰</a> <a href="#">演出服</a>
                        <a href="#">运动服</a> <a href="#">运动鞋</a> <a href="#">皮鞋/帆布鞋</a> <a href="#">靴子</a>
                        <a href="#">凉鞋</a> <a href="#">功能鞋</a>
                    </dd>
                </dl>
                <dl class="1">
                    <dt><a href="#">玩具乐器</a></dt>
                    <dd>
                        <a href="#">适用年龄</a> <a href="#">遥控/电动</a> <a href="#">毛绒布艺</a> <a href="#">娃娃玩具</a>
                        <a href="#">模型玩具</a> <a href="#">健身玩具</a> <a href="#">动漫玩具</a> <a href="#">益智玩具</a>
                        <a href="#">积木拼插</a> <a href="#">DIY玩具</a> <a href="#">创意减压</a> <a href="#">乐器相关</a>
                    </dd>
                </dl>
            </div>
            <div class="rightdiv">
            </div>
        </div>
    </li>
    <li><a href="#">建筑</a><span></span>
        <div class="submenu">
            <div class="leftdiv">
                <dl>
                    <dt><a href="#">中外名酒</a></dt>
                    <dd>
                        <a href="#">白酒</a> <a href="#">葡萄酒</a> <a href="#">洋酒</a> <a href="#">啤酒</a> <a href="#">
                        黄酒/养生酒</a> <a href="#">收藏酒/陈年老酒</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">进口食品</a></dt>
                    <dd>
                        <a href="#">牛奶</a> <a href="#">饼干蛋糕</a> <a href="#">糖果/巧克力</a> <a href="#">休闲零食</a>
                        <a href="#">冲调饮品</a> <a href="#">粮油调味</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">休闲食品</a></dt>
                    <dd>
                        <a href="#">休闲零食</a> <a href="#">坚果炒货</a> <a href="#">肉干肉脯</a> <a href="#">蜜饯果干</a>
                        <a href="#">糖果/巧克力</a> <a href="#">饼干蛋糕</a> <a href="#">无糖食品</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">地方特产</a></dt>
                    <dd>
                        <a href="#">新疆</a> <a href="#">四川</a> <a href="#">云南</a> <a href="#">湖南</a> <a href="#">
                        内蒙</a> <a href="#">北京</a> <a href="#">山西</a> <a href="#">福建</a> <a href="#">东北</a>
                        <a href="#">其他</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">茗茶</a></dt>
                    <dd>
                        <a href="#">铁观音</a> <a href="#">普洱</a> <a href="#">龙井</a> <a href="#">绿茶</a> <a href="#">
                        红茶</a> <a href="#">乌龙茶</a> <a href="#">花草茶</a> <a href="#">花果茶</a> <a href="#">黑茶</a>
                        <a href="#">白茶</a> <a href="#">养生茶</a> <a href="#">其他茶</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">饮料冲调</a></dt>
                    <dd>
                        <a href="#">牛奶乳品</a> <a href="#">饮料</a> <a href="#">饮用水</a> <a href="#">咖啡/奶茶</a>
                        <a href="#">蜂蜜/柚子茶</a> <a href="#">冲饮谷物</a> <a href="#">成人奶粉</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">粮油调味</a></dt>
                    <dd>
                        <a href="#">米面杂粮</a> <a href="#">食用油</a> <a href="#">调味品</a> <a href="#">南北干货</a>
                        <a href="#">方便食品</a> <a href="#">有机食品</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">生鲜食品</a></dt>
                    <dd>
                        <a href="#">水果蔬菜</a> <a href="#">海鲜水产</a> <a href="#">海参</a> <a href="#">牛排</a>
                        <a href="#">肉禽蛋奶</a> <a href="#">熟食腊味</a> <a href="#">环球美食</a> <a href="#">产地直供</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">食品礼券</a></dt>
                    <dd>
                        <a href="#">大闸蟹</a> <a href="#">粽子</a> <a href="#">月饼</a> <a href="#">卡券</a>
                    </dd>
                </dl>
            </div>
            <div class="rightdiv">
            </div>
        </div>
    </li>
    <li><a href="#">医疗、护理</a><span></span>
        <div class="submenu">
            <div class="leftdiv">
                <dl>
                    <dt><a href="#">营养健康</a></dt>
                    <dd>
                        <a href="#">调节免疫</a> <a href="#">调节三高</a> <a href="#">缓解疲劳</a> <a href="#">美体塑身</a>
                        <a href="#">美容养颜</a> <a href="#">肝肾养护</a> <a href="#">肠胃养护</a> <a href="#">明目益智</a>
                        <a href="#">骨骼健康</a> <a href="#">改善睡眠</a> <a href="#">抗氧化</a> <a href="#">耐缺氧</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">营养成分</a></dt>
                    <dd>
                        <a href="#">维生素/矿物质</a> <a href="#">蛋白质</a> <a href="#">鱼油/磷脂</a> <a href="#">螺旋藻</a>
                        <a href="#">番茄红素</a> <a href="#">叶酸</a> <a href="#">葡萄籽</a> <a href="#">左旋肉碱</a>
                        <a href="#">辅酶Q10</a> <a href="#">益生菌</a> <a href="#">玛咖</a> <a href="#">膳食纤维</a>
                        <a href="#">牛初乳</a> <a href="#">胶原蛋白</a> <a href="#">大豆异黄酮</a> <a href="#">芦荟提取</a>
                        <a href="#">酵素</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">传统滋补</a></dt>
                    <dd>
                        <a href="#">蜂产品</a> <a href="#">阿胶</a> <a href="#">参类</a> <a href="#">冬虫夏草</a> <a
                            href="#">燕窝</a> <a href="#">海参</a> <a href="#">养生茶饮</a> <a href="#">鹿茸</a> <a href="#">
                        灵芝</a> <a href="#">药食同源</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">成人用品</a></dt>
                    <dd>
                        <a href="#">安全避孕</a> <a href="#">验孕测孕</a> <a href="#">人体润滑</a> <a href="#">情爱玩具</a>
                        <a href="#">情趣内衣</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">保健器械</a></dt>
                    <dd>
                        <a href="#">血压仪器</a> <a href="#">血糖用品</a> <a href="#">养生器械</a> <a href="#">康复辅助</a>
                        <a href="#">中医保健</a> <a href="#">家庭护理</a> <a href="#">呼吸制氧</a>
                    </dd>
                </dl>
                <dl>
                    <dt><a href="#">急救卫生</a></dt>
                    <dd>
                        <a href="#">口罩</a> <a href="#">跌打损伤</a> <a href="#">防裂抗冻</a> <a href="#">眼部保健</a>
                        <a href="#">鼻炎健康</a>
                    </dd>
                </dl>
            </div>
            <div class="rightdiv">
            </div>
        </div>
    </li>
    </ul>
    </div>
    <!--中-->
    <div class="zhong" style="border-top:3px solid #FF4706;;width:520px;height:400px;position:absolute;margin-left:250px;">
        <div class="tu">
            <ul>
                <li style="left:0px;"><img src="img/tu1.jpg"></li>
                <li><img src="img/tu2.jpg"></li>
                <li><img src="img/tu3.jpg"></li>
                <li><img src="img/tu4.jpg"></li>
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
            <table class="remen"width="230" height="200">
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
<div class="saixuan"style="top:520px;">
<form>
    <div class="jianzhizhiwei" align="center">我要找工作</div>
    <div class="jianzhijianli" align="center">我要找人</div>
</form>
</div>
<div id="l1" style="border: 0px solid red;width: 1024px;height: 880px;position:absolute;top:545px;">
<div class="zhongbu" style="border:0px solid yellow;width:100%;height:170px;position:absolute;top:0px;">
        <div class="shai" style="border-top:3px solid #FF5500;border-bottom:1px solid #eaeaea;border-left:1px solid #eaeaea;border-right:1px solid #eaeaea;width:100%;height:170px;position:absolute;top:0px;">
            <dl style="width:1010px;height:90px;top:10px;border:0px solid blue;margin-left:10px">
                <dt style="width:50px;height:30px;border:0px solid blue;margin:0px;font-size:14px;color:black;">职位：</dt>
                <dd style="width:960px;height:90px;border:0px solid blue;margin-left: 50px;margin-top:-30px;font-size:14px;">
                    <a href="#">发传单</a>
                    <a href="#"style="margin-left:15px;position:relative;">促销</a>
                    <a href="#"style="margin-left:15px;position:relative;">家教</a>
                    <a href="#"style="margin-left:15px;position:relative;">服务员</a>
                    <a href="#"style="margin-left:15px;position:relative;">钟点工</a>
                    <a href="#"style="margin-left:15px;position:relative;">图片处理</a>
                    <a href="#"style="margin-left:15px;position:relative;">兼职测试</a>
                    <a href="#"style="margin-left:15px;position:relative;">软件开发</a>
                    <a href="#"style="margin-left:15px;position:relative;">汽车代驾</a>
                    <a href="#"style="margin-left:15px;position:relative;">美工</a>
                    <a href="#"style="margin-left:15px;position:relative;">技工</a>
                    <a href="#"style="margin-left:15px;position:relative;">写作</a>
                    <a href="#"style="margin-left:15px;position:relative;">导游</a>
                    <a href="#"style="margin-left:15px;position:relative;">摄影</a>
                    <a href="#"style="margin-left:15px;position:relative;">手绘/漫画</a>
                    <a href="#"style="margin-left:15px;position:relative;">视频剪辑/制作</a>
                    <a href="#"style="margin-left:15px;position:relative;">化妆师</a>
                    <a href="#"style="margin-left:15px;position:relative;">礼仪/模特</a>
                    <a href="#"style="margin-left:15px;position:relative;">志愿者</a>
                    <a href="#"style="margin-left:15px;position:relative;">活动策划</a>
                    <a href="#"style="margin-left:15px;position:relative;">导游</a>
                    <a href="#"style="margin-left:15px;margin-top:100px;position:relative;">写作</a>
                    <a href="#"style="margin-left:15px;position:relative;">会计</a>
                    <a href="#"style="margin-left:15px;position:relative;">家教</a>
                    <a href="#"style="margin-left:15px;position:relative;">健身教练</a>
                    <a href="#"style="margin-left:15px;position:relative;">汽车陪练</a>
                    <a href="#"style="margin-left:15px;position:relative;">汽车代驾</a>
                    <a href="#"style="margin-left:15px;position:relative;">游戏代练</a>
                    <a href="#"style="margin-left:15px;position:relative;">律师</a>

                </dd>

            </dl>
            <dl style="width:1010px;height:43px;top:105px;border:0px solid blue;margin-left: 10px">
                <dt style="width:50px;height:43px;border:0px solid blue;margin:0px;font-size:14px;">区域：</dt>
                <dd style="width:960;height:43px;border:0px solid blue;margin-left:50px;margin-top:-43px;font-size:14px;">
                    <a href="#"style="margin-left:15px;position:relative;">杭州</a>
                    <a href="#"style="margin-left:15px;position:relative;">西湖</a>
                    <a href="#"style="margin-left:15px;position:relative;">江干</a>
                    <a href="#"style="margin-left:15px;position:relative;">上城</a>
                    <a href="#"style="margin-left:15px;position:relative;">余杭</a>
                    <a href="#"style="margin-left:15px;position:relative;">萧山</a>
                    <a href="#"style="margin-left:15px;position:relative;">滨江</a>
                    <a href="#"style="margin-left:15px;position:relative;">建德</a>
                    <a href="#"style="margin-left:15px;position:relative;">富阳</a>
                    <a href="#"style="margin-left:15px;position:relative;">临安</a>
                    <a href="#"style="margin-left:15px;position:relative;">桐庐</a>
                    <a href="#"style="margin-left:15px;position:relative;">淳安</a>
                    <a href="#"style="margin-left:15px;position:relative;">杭州周边</a>
                </dd>
                <dl>
        </div>
    </div>


<!--下部-->
<div class="xiabu" style="border:1px solid #eaeaea;width:800px;height:700px;position:absolute;top:180px;">
    <div class="xiabu1">
        <form action="index_company_search" method="post" >
        <div class="xinzijiesuan"><a href="#">薪资结算</a></div>
        <div class="xinzijiesuan2 "><a href="#">日结</a><a href="#">周结</a><a href="#">月结</a><a href="#">完工结</a></div>
        <div class="jianzhishijian"><a href="#">兼职时间</a></div>
        <div class="jianzhishijian2">
            <table border="1px"width="500"height="100" cellpadding="0" cellspacing="0" style="border-collapse:collapse;"width="450" height="140" >
                <tr>
                    <td></td><td>星期一</td><td>星期二</td><td>星期三</td><td>星期四</td><td>星期五</td><td>星期六</td><td>星期日</td>
                </tr>
                <tr>
                    <td>上午</td>
                    <td><input type="checkbox"style="margin-left: 20px;"></td>
                    <td><input type="checkbox"style="margin-left: 20px;"></td>
                    <td><input type="checkbox"style="margin-left: 20px;"></td>
                    <td><input type="checkbox"style="margin-left: 20px;"></td>
                    <td><input type="checkbox"style="margin-left: 20px;"></td>
                    <td><input type="checkbox"style="margin-left: 20px;"></td>
                    <td><input type="checkbox"style="margin-left: 20px;"></td>
                </tr>
                <tr>
                    <td>下午</td>
                    <td><input type="checkbox"style="margin-left: 20px;"></td>
                    <td><input type="checkbox"style="margin-left: 20px;"></td>
                    <td><input type="checkbox"style="margin-left: 20px;"></td>
                    <td><input type="checkbox"style="margin-left: 20px;"></td>
                    <td><input type="checkbox"style="margin-left: 20px;"></td>
                    <td><input type="checkbox"style="margin-left: 20px;"></td>
                    <td><input type="checkbox"style="margin-left: 20px;"></td>
                </tr>
                <tr>
                    <td>晚上</td>
                    <td><input type="checkbox"style="margin-left: 20px;"></td>
                    <td><input type="checkbox"style="margin-left: 20px;"></td>
                    <td><input type="checkbox"style="margin-left: 20px;"></td>
                    <td><input type="checkbox"style="margin-left: 20px;"></td>
                    <td><input type="checkbox"style="margin-left: 20px;"></td>
                    <td><input type="checkbox"style="margin-left: 20px;"></td>
                    <td><input type="checkbox"style="margin-left: 20px;"></td>
                </tr>
                <tr>
                    <td colspan="4"align="right"><input type="button"value="确定"></td>
                    <td colspan="4"><input type="button"value="取消"></td>
                </tr>
            </table>
        </div>
        <div class="gongzuodidian"><a href="#">工作地点</a> </div>
        <div class="gongzuodidian2">
            <table border="0px"width="500"height="100" >
                <tr>
                    <td><a href="#">杭州</a></td>
                    <td><a href="#">西湖</a></td>
                    <td><a href="#">杭州</a></td>
                    <td><a href="#">江干</a></td>
                    <td><a href="#">上城</a></td>
                </tr>
                <tr>
                    <td><a href="#">富阳</a></td>
                    <td><a href="#">临安</a></td>
                    <td><a href="#">萧山</a></td>
                    <td><a href="#">建德</a></td>
                    <td><a href="#">滨江</a></td>
                </tr>
                <tr>
                    <td><a href="#">杭州</a></td>
                    <td><a href="#">杭州</a></td>
                    <td><a href="#">杭州</a></td>
                    <td><a href="#">杭州</a></td>
                    <td><a href="#">杭州</a></td>
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
    <div class="xiabu2" style="border:1px solid #f5f5f5;width:100%;height:auto;position:absolute;top:40px;">
        <div style="border-bottom: 1px solid blue;height: 60px;width: 100%;">
            <div style="width: 30px;display: inline-block;height: 40px"></div>
            <div style="width: 260px;display: inline-block;font-size: 20px">公司名称</div>
            <div style="width: 150px;display: inline-block;font-size: 20px">联系人</div>
            <div style="width: 170px;display: inline-block;font-size: 20px">联系电话</div>
            <div style="width: 150px;display: inline-block;font-size: 20px">发布时间</div>
        </div>
        @if(isset($inputs))
            @if(!empty($inputs))
                @foreach($inputs as $input)
                    <table>
                        <tr height="40">
                            <td width="30"></td>
                            <td width="340"><a href="{{url('company',$input->name)}}">{{$input->name}}</a></td>
                            <td width="150">{{$input->contact_person}}</td>
                            <td width="200">{{$input->contact}}</td>
                            <td width="200">{{$input->created_at}}</td>
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
                    <td width="340"><a href="{{url('company',$n->name)}}">{{$n->name}}</a></td>
                    <td width="150">{{$n->contact_person}}</td>
                    <td width="200">{{$n->contact}}</td>
                    <td width="200">{{$n->updated_at}}</td>
                </tr>
            </table>
        @endforeach
    @endif
    @if(isset($inputs))
        <div style="position: absolute;width: 800px;height: 30px;top: 600px;left: 240px">
            {!! $inputs->render() !!}
        </div>
    @endif
    </div>
</div>
<div class="xiabuyou"style="border: 1px solid #eaeaea;height: 700px;width: 210px;margin-left: 815px;position: absolute;top:180px;">
    <div style="border: 1px solid #eaeaea;height: 40px;width: 210px;background: #eaeaea;font-size: 18px;"align="center">智能推广</div>
    <div style="border: 1px solid #eaeaea;height: 80px;">
        <p style="margin-top: 2px;margin-left:5px;color:blue;font-size: 15px;">月薪6000淘宝客服</p>
        <p style="margin-top: -5px;margin-left:5px;color:#000000;font-size: 13px;">工作区域：杭州</p>
        <p style="margin-top: -5px;margin-left:5px;color:#000000;font-size: 13px;">薪资：<spam style="color: red;">面议</spam></p>
    </div>
    <div style="border: 1px solid #eaeaea;height: 80px;">
        <p style="margin-top: 2px;margin-left:5px;color:blue;font-size: 15px;">高薪诚聘英语教师</p>
        <p style="margin-top: -5px;margin-left:5px;color:#000000;font-size: 13px;">工作区域：杭州</p>
        <p style="margin-top: -5px;margin-left:5px;color:#000000;font-size: 13px;">薪资：<spam style="color: red;">5000—8000</spam>元/月</p>
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
</div>
<div id="l2" style="border:0px solid blue;width: 1024px;height: 880px;position:absolute;top:545px;">
<div class="zhongbu" style="border:0px solid yellow;width:100%;height:230px;position:absolute;top:0px;">
    <div class="shai" style="border-top:3px solid #FF5500;border-bottom:1px solid #eaeaea;border-left:1px solid #eaeaea;border-right:1px solid #eaeaea;width:100%;height:230px;position:absolute;top:0px;">
        <dl style="width:1010px;height:90px;top:10px;border:0px solid blue;margin-left:10px">
            <dt style="width:50px;height:30px;border:0px solid blue;margin:0px;font-size:14px;color:black;">职位：</dt>
            <dd style="width:960px;height:90px;border:0px solid blue;margin-left: 50px;margin-top:-30px;font-size:14px;">
                <a href="#">发传单</a>
                <a href="#"style="margin-left:15px;position:relative;">促销</a>
                <a href="#"style="margin-left:15px;position:relative;">家教</a>
                <a href="#"style="margin-left:15px;position:relative;">服务员</a>
                <a href="#"style="margin-left:15px;position:relative;">钟点工</a>
                <a href="#"style="margin-left:15px;position:relative;">图片处理</a>
                <a href="#"style="margin-left:15px;position:relative;">兼职测试</a>
                <a href="#"style="margin-left:15px;position:relative;">软件开发</a>
                <a href="#"style="margin-left:15px;position:relative;">汽车代驾</a>
                <a href="#"style="margin-left:15px;position:relative;">美工</a>
                <a href="#"style="margin-left:15px;position:relative;">技工</a>
                <a href="#"style="margin-left:15px;position:relative;">写作</a>
                <a href="#"style="margin-left:15px;position:relative;">导游</a>
                <a href="#"style="margin-left:15px;position:relative;">摄影</a>
                <a href="#"style="margin-left:15px;position:relative;">手绘/漫画</a>
                <a href="#"style="margin-left:15px;position:relative;">视频剪辑/制作</a>
                <a href="#"style="margin-left:15px;position:relative;">化妆师</a>
                <a href="#"style="margin-left:15px;position:relative;">礼仪/模特</a>
                <a href="#"style="margin-left:15px;position:relative;">志愿者</a>
                <a href="#"style="margin-left:15px;position:relative;">活动策划</a>
                <a href="#"style="margin-left:15px;position:relative;">导游</a>
                <a href="#"style="margin-left:15px;margin-top:100px;position:relative;">写作</a>
                <a href="#"style="margin-left:15px;position:relative;">会计</a>
                <a href="#"style="margin-left:15px;position:relative;">家教</a>
                <a href="#"style="margin-left:15px;position:relative;">健身教练</a>
                <a href="#"style="margin-left:15px;position:relative;">汽车陪练</a>
                <a href="#"style="margin-left:15px;position:relative;">汽车代驾</a>
                <a href="#"style="margin-left:15px;position:relative;">游戏代练</a>
                <a href="#"style="margin-left:15px;position:relative;">律师</a>

            </dd>

        </dl>
        <dl style="width:1010px;height:43px;top:105px;border:0px solid blue;margin-left: 10px">
            <dt style="width:50px;height:43px;border:0px solid blue;margin:0px;font-size:14px;">区域：</dt>
            <dd style="width:960;height:43px;border:0px solid blue;margin-left:50px;margin-top:-43px;font-size:14px;">
                <a href="#"style="margin-left:15px;position:relative;">杭州</a>
                <a href="#"style="margin-left:15px;position:relative;">西湖</a>
                <a href="#"style="margin-left:15px;position:relative;">江干</a>
                <a href="#"style="margin-left:15px;position:relative;">上城</a>
                <a href="#"style="margin-left:15px;position:relative;">余杭</a>
                <a href="#"style="margin-left:15px;position:relative;">萧山</a>
                <a href="#"style="margin-left:15px;position:relative;">滨江</a>
                <a href="#"style="margin-left:15px;position:relative;">建德</a>
                <a href="#"style="margin-left:15px;position:relative;">富阳</a>
                <a href="#"style="margin-left:15px;position:relative;">临安</a>
                <a href="#"style="margin-left:15px;position:relative;">桐庐</a>
                <a href="#"style="margin-left:15px;position:relative;">淳安</a>
                <a href="#"style="margin-left:15px;position:relative;">杭州周边</a>
            </dd>
            <dl>
                <dl style="width:1010px;height:23px;border:0px solid blue;margin-left:-10px;margin-top: -20px;position: absolute">
                    <dd style="width:50px;height:23px;border:0px solid blue;font-size:14px;margin-left:10px;">年龄：</dd>
                    <dd style="width:960;height:23px;border:0px solid blue;margin-left:50px;margin-top:-23px;font-size:14px;">
                        <a href="#"style="margin-left:15px;position:relative;">16-20岁</a>
                        <a href="#"style="margin-left:15px;position:relative;">21-30岁</a>
                        <a href="#"style="margin-left:15px;position:relative;">31-40岁</a>
                        <a href="#"style="margin-left:15px;position:relative;">41-50岁</a>
                        <a href="#"style="margin-left:15px;position:relative;">50岁以上</a>
                    </dd>
                 <dl>
           <p style="margin-left: 10px;">更多：</p>
          <select style="margin-left: 60px;margin-top: -30px;position: absolute;height: 30px;">
              <option selected>--人才类型--</option>
              <option>不限</option>
              <option>社会人才</option>
              <option>在校学生</option>
          </select>
          <select style="margin-left: 160px;margin-top: -30px;position: absolute;height: 30px;">
               <option selected>--性别--</option>
               <option>不限</option>
               <option>男</option>
               <option>女</option>
          </select>
          <select style="margin-left: 235px;margin-top: -30px;position: absolute;height: 30px;">
                <option selected>--更新时间--</option>
                <option>一天以内</option>
                <option>三天以内</option>
                <option>七天以内</option>
          </select>
    </div>
</div>


<!--下部-->
<div class="xiabu" style="border:1px solid #eaeaea;width:1024px;height:640px;position:absolute;top:240px;">
    <div class="xiabu1">
        <form>
            <input style="width: 15px;height: 15px;margin-top: 10px;" type="checkbox">全选
            <input style="width: 15px;height: 15px;margin-left: 20px;margin-top: 10px;" type="checkbox">有手机认证
            <input style="width: 15px;height: 15px;margin-left: 20px;margin-top: 10px;" type="checkbox">有照片/作品
            <button class="button1">按相关性排序</button>
            <button class="button2">按时间排序</button>
        </form>
        <ul >
            <li style="margin-left: 20px;">应聘职位</li>
            <li style="margin-left: 250px;">姓名</li>
            <li style="margin-left: 60px;">性别</li>
            <li style="margin-left: 60px;">年龄</li>
            <li style="margin-left: 60px;">现居住地</li>
            <li style="margin-left: 80px;">人才类型</li>
            <li style="margin-left: 80px;">更新时间</li>
        </ul>
      </div>
    <div class="xiabu2" style="border:1px solid #f5f5f5;width:100%;height:550px;position:absolute;top:80px;">
        <dl  style="border:1px solid #f5f5f5;width:100%;height:50px;position:absolute;top:-10px;">
            <dd style="margin-top: 10px;color:#ff5500;font-size: 18px; "><input  type="checkbox"name="reg"style="margin-left:-20px;position:absolute;top:10px"><b>淘宝美工</b></dd>
            <dd style="margin-left: 360px;position: absolute;top:10px;color: #000000">刘艳柯</dd>
            <dd style="margin-left: 450px;position: absolute;top:10px;color: #000000">男</dd>
            <dd style="margin-left: 530px;position: absolute;top:10px;color: #000000">23岁</dd>
            <dd style="margin-left: 620px;position: absolute;top:10px;color: #000000">杭州江干区</dd>
            <dd style="margin-left: 750px;position: absolute;top:10px;color: #000000">在校学生</dd>
            <dd style="margin-left: 880px;position: absolute;top:10px;color: #000000">1分钟</dd>
            <div class="kuang">
                <h2 style="margin-left: 30px;">刘艳柯(男，24岁)</h2>
                <p style="margin-left: 30px;">期望职位：<b style="color: #000000">淘宝美工</b></p>
                <p style="margin-left: 30px;">求职地区：<b style="color: #000000">杭州西湖区</b></p>
                <p style="margin-left: 30px;">期望月薪：<b style="color: #000000">2000-3000</b></p>
                <p style="margin-left: 30px;">本人性格温善，待人友好，普通话标准，具有良好的沟通能力。工作认真，有耐心，能吃苦耐劳。</p>
            </div>
        </dl>

        <dl style="border:1px solid #f5f5f5;width:100%;height:50px;position:absolute;top:40px;">
            <dd style="margin-top: 10px;color:#ff5500;font-size: 18px; "><input  type="checkbox"name="reg"style="margin-left:-20px;position:absolute;top:10px"><b>行政文员</b></dd>
            <dd style="margin-left: 360px;position: absolute;top:10px;color: #000000">汪娴雅</dd>
            <dd style="margin-left: 450px;position: absolute;top:10px;color: #000000">女</dd>
            <dd style="margin-left: 530px;position: absolute;top:10px;color: #000000">21岁</dd>
            <dd style="margin-left: 620px;position: absolute;top:10px;color: #000000">杭州西湖区文一路</dd>
            <dd style="margin-left: 750px;position: absolute;top:10px;color: #000000">在校学生</dd>
            <dd style="margin-left: 880px;position: absolute;top:10px;color: #000000">15分钟</dd>
            <div class="kuang">
                <h2 style="margin-left: 30px;">汪娴雅(女，21岁)</h2>
                <p style="margin-left: 30px;">期望职位：<b style="color: #000000">行政文员</b></p>
                <p style="margin-left: 30px;">求职地区：<b style="color: #000000">杭州西湖区</b></p>
                <p style="margin-left: 30px;">期望月薪：<b style="color: #000000">2000-3000</b></p>
                <p style="margin-left: 30px;">本人性格温善，待人友好，普通话标准，具有良好的沟通能力。工作认真，有耐心，能吃苦耐劳。</p>
            </div>
        </dl>
        <dl style="border:1px solid #f5f5f5;width:100%;height:50px;position:absolute;top:90px;">
            <dd style="margin-top: 10px;color:#ff5500;font-size: 18px; "><input  type="checkbox"name="reg"style="margin-left:-20px;position:absolute;top:10px"><b>接电话</b></dd>
            <dd style="margin-left: 360px;position: absolute;top:10px;color: #000000">叶法松</dd>
            <dd style="margin-left: 450px;position: absolute;top:10px;color: #000000">男</dd>
            <dd style="margin-left: 530px;position: absolute;top:10px;color: #000000">24岁</dd>
            <dd style="margin-left: 620px;position: absolute;top:10px;color: #000000">杭州江干区九堡</dd>
            <dd style="margin-left: 750px;position: absolute;top:10px;color: #000000">在校学生</dd>
            <dd style="margin-left: 880px;position: absolute;top:10px;color: #000000">30分钟</dd>
            <div class="kuang">
                <h2 style="margin-left: 30px;">叶法松(男，24岁)</h2>
                <p style="margin-left: 30px;">期望职位：<b style="color: #000000">接电话</b></p>
                <p style="margin-left: 30px;">求职地区：<b style="color: #000000">杭州西湖区</b></p>
                <p style="margin-left: 30px;">期望月薪：<b style="color: #000000">2000-3000</b></p>
                <p style="margin-left: 30px;">本人性格温善，待人友好，普通话标准，具有良好的沟通能力。工作认真，有耐心，能吃苦耐劳。</p>
            </div>
        </dl>
        <dl style="border:1px solid #f5f5f5;width:100%;height:50px;position:absolute;top:140px;">
            <dd style="margin-top: 10px;color:#ff5500;font-size: 18px; "><input  type="checkbox"name="reg"style="margin-left:-20px;position:absolute;top:10px"><b>英语家教</b></dd>
            <dd style="margin-left: 360px;position: absolute;top:10px;color: #000000">李晓波</dd>
            <dd style="margin-left: 450px;position: absolute;top:10px;color: #000000">男</dd>
            <dd style="margin-left: 530px;position: absolute;top:10px;color: #000000">20岁</dd>
            <dd style="margin-left: 620px;position: absolute;top:10px;color: #000000">丽水莲都区</dd>
            <dd style="margin-left: 750px;position: absolute;top:10px;color: #000000">在校学生</dd>
            <dd style="margin-left: 880px;position: absolute;top:10px;color: #000000">50分钟</dd>
            <div class="kuang">
                <h2 style="margin-left: 30px;">李晓波(男，20岁)</h2>
                <p style="margin-left: 30px;">期望职位：<b style="color: #000000">英语家教</b></p>
                <p style="margin-left: 30px;">求职地区：<b style="color: #000000">杭州西湖区</b></p>
                <p style="margin-left: 30px;">期望月薪：<b style="color: #000000">2000-3000</b></p>
                <p style="margin-left: 30px;">本人性格温善，待人友好，普通话标准，具有良好的沟通能力。工作认真，有耐心，能吃苦耐劳。</p>
            </div>
        </dl>
        <dl style="border:1px solid #f5f5f5;width:100%;height:50px;position:absolute;top:190px;">
            <dd style="margin-top: 10px;color:#ff5500;font-size: 18px; "><input  type="checkbox"name="reg"style="margin-left:-20px;position:absolute;top:10px"><b>学生兼职</b></dd>
            <dd style="margin-left: 360px;position: absolute;top:10px;color: #000000">肖玉婷</dd>
            <dd style="margin-left: 450px;position: absolute;top:10px;color: #000000">女</dd>
            <dd style="margin-left: 530px;position: absolute;top:10px;color: #000000">23岁</dd>
            <dd style="margin-left: 620px;position: absolute;top:10px;color: #000000">杭州拱墅区大关</dd>
            <dd style="margin-left: 750px;position: absolute;top:10px;color: #000000">在校学生</dd>
            <dd style="margin-left: 880px;position: absolute;top:10px;color: #000000">60分钟</dd>
            <div class="kuang">
                <h2 style="margin-left: 30px;">肖玉婷(女，23岁)</h2>
                <p style="margin-left: 30px;">期望职位：<b style="color: #000000">学生兼职</b></p>
                <p style="margin-left: 30px;">求职地区：<b style="color: #000000">杭州西湖区</b></p>
                <p style="margin-left: 30px;">期望月薪：<b style="color: #000000">2000-3000</b></p>
                <p style="margin-left: 30px;">本人性格温善，待人友好，普通话标准，具有良好的沟通能力。工作认真，有耐心，能吃苦耐劳。</p>
            </div>
        </dl>
        <dl style="border:1px solid #f5f5f5;width:100%;height:50px;position:absolute;top:240px;">
            <dd style="margin-top: 10px;color:#ff5500;font-size: 18px; "><input  type="checkbox"name="reg"style="margin-left:-20px;position:absolute;top:10px"><b>淘宝美工</b></dd>
            <dd style="margin-left: 360px;position: absolute;top:10px;color: #000000">马玉</dd>
            <dd style="margin-left: 450px;position: absolute;top:10px;color: #000000">女</dd>
            <dd style="margin-left: 530px;position: absolute;top:10px;color: #000000">22岁</dd>
            <dd style="margin-left: 620px;position: absolute;top:10px;color: #000000">杭州萧山区城厢</dd>
            <dd style="margin-left: 750px;position: absolute;top:10px;color: #000000">在校学生</dd>
            <dd style="margin-left: 880px;position: absolute;top:10px;color: #000000">12分钟</dd>
            <div class="kuang">
                <h2 style="margin-left: 30px;">马玉(女，22岁)</h2>
                <p style="margin-left: 30px;">期望职位：<b style="color: #000000">淘宝美工</b></p>
                <p style="margin-left: 30px;">求职地区：<b style="color: #000000">杭州西湖区</b></p>
                <p style="margin-left: 30px;">期望月薪：<b style="color: #000000">2000-3000</b></p>
                <p style="margin-left: 30px;">本人性格温善，待人友好，普通话标准，具有良好的沟通能力。工作认真，有耐心，能吃苦耐劳。</p>
            </div>
        </dl>
        <dl style="border:1px solid #f5f5f5;width:100%;height:50px;position:absolute;top:290px;">
            <dd style="margin-top: 10px;color:#ff5500;font-size: 18px; "><input  type="checkbox"name="reg"style="margin-left:-20px;position:absolute;top:10px"><b>寒假兼职</b></dd>
            <dd style="margin-left: 360px;position: absolute;top:10px;color: #000000">俞虹</dd>
            <dd style="margin-left: 450px;position: absolute;top:10px;color: #000000">女</dd>
            <dd style="margin-left: 530px;position: absolute;top:10px;color: #000000">21岁</dd>
            <dd style="margin-left: 620px;position: absolute;top:10px;color: #000000">绍兴越城区东浦</dd>
            <dd style="margin-left: 750px;position: absolute;top:10px;color: #000000">在校学生</dd>
            <dd style="margin-left: 880px;position: absolute;top:10px;color: #000000">18分钟</dd>
            <div class="kuang">
                <h2 style="margin-left: 30px;">俞虹(女，21岁)</h2>
                <p style="margin-left: 30px;">期望职位：<b style="color: #000000">寒假兼职</b></p>
                <p style="margin-left: 30px;">求职地区：<b style="color: #000000">杭州西湖区</b></p>
                <p style="margin-left: 30px;">期望月薪：<b style="color: #000000">2000-3000</b></p>
                <p style="margin-left: 30px;">本人性格温善，待人友好，普通话标准，具有良好的沟通能力。工作认真，有耐心，能吃苦耐劳。</p>
            </div>
        </dl>
        <dl style="border:1px solid #f5f5f5;width:100%;height:50px;position:absolute;top:340px;">
            <dd style="margin-top: 10px;color:#ff5500;font-size: 18px; "><input  type="checkbox"name="reg"style="margin-left:-20px;position:absolute;top:10px"><b>服务员</b></dd>
            <dd style="margin-left: 360px;position: absolute;top:10px;color: #000000">梁世快</dd>
            <dd style="margin-left: 450px;position: absolute;top:10px;color: #000000">男</dd>
            <dd style="margin-left: 530px;position: absolute;top:10px;color: #000000">23岁</dd>
            <dd style="margin-left: 620px;position: absolute;top:10px;color: #000000">杭州西湖区文三路</dd>
            <dd style="margin-left: 750px;position: absolute;top:10px;color: #000000">在校学生</dd>
            <dd style="margin-left: 880px;position: absolute;top:10px;color: #000000">1小时</dd>
            <div class="kuang">
                <h2 style="margin-left: 30px;">梁世快(男，23岁)</h2>
                <p style="margin-left: 30px;">期望职位：<b style="color: #000000">服务员</b></p>
                <p style="margin-left: 30px;">求职地区：<b style="color: #000000">杭州西湖区</b></p>
                <p style="margin-left: 30px;">期望月薪：<b style="color: #000000">2000-3000</b></p>
                <p style="margin-left: 30px;">本人性格温善，待人友好，普通话标准，具有良好的沟通能力。工作认真，有耐心，能吃苦耐劳。</p>
            </div>
        </dl>
        <dl style="border:1px solid #f5f5f5;width:100%;height:50px;position:absolute;top:390px;">
            <dd style="margin-top: 10px;color:#ff5500;font-size: 18px; "><input  type="checkbox"name="reg"style="margin-left:-20px;position:absolute;top:10px"><b>打印员</b></dd>
            <dd style="margin-left: 360px;position: absolute;top:10px;color: #000000">毛烨烨</dd>
            <dd style="margin-left: 450px;position: absolute;top:10px;color: #000000">女</dd>
            <dd style="margin-left: 530px;position: absolute;top:10px;color: #000000">25岁</dd>
            <dd style="margin-left: 620px;position: absolute;top:10px;color: #000000">杭州余杭区勾庄</dd>
            <dd style="margin-left: 750px;position: absolute;top:10px;color: #000000">在校学生</dd>
            <dd style="margin-left: 880px;position: absolute;top:10px;color: #000000">2小时</dd>
            <div class="kuang">
                <h2 style="margin-left: 30px;">毛烨烨(女，25岁)</h2>
                <p style="margin-left: 30px;">期望职位：<b style="color: #000000">打印员</b></p>
                <p style="margin-left: 30px;">求职地区：<b style="color: #000000">杭州西湖区</b></p>
                <p style="margin-left: 30px;">期望月薪：<b style="color: #000000">2000-3000</b></p>
                <p style="margin-left: 30px;">本人性格温善，待人友好，普通话标准，具有良好的沟通能力。工作认真，有耐心，能吃苦耐劳。</p>
            </div>
        </dl>
        <dl style="border:1px solid #f5f5f5;width:100%;height:50px;position:absolute;top:440px;">
            <dd style="margin-top: 10px;color:#ff5500;font-size: 18px; "><input  type="checkbox"name="reg"style="margin-left:-20px;position:absolute;top:10px"><b>淘宝客服</b></dd>
            <dd style="margin-left: 360px;position: absolute;top:10px;color: #000000">傅朝江</dd>
            <dd style="margin-left: 450px;position: absolute;top:10px;color: #000000">男</dd>
            <dd style="margin-left: 530px;position: absolute;top:10px;color: #000000">19岁</dd>
            <dd style="margin-left: 620px;position: absolute;top:10px;color: #000000">杭州江干区</dd>
            <dd style="margin-left: 750px;position: absolute;top:10px;color: #000000">在校学生</dd>
            <dd style="margin-left: 880px;position: absolute;top:10px;color: #000000">44分钟</dd>
            <div class="kuang">
                <h2 style="margin-left: 30px;">傅朝江(男，19岁)</h2>
                <p style="margin-left: 30px;">期望职位：<b style="color: #000000">淘宝客服</b></p>
                <p style="margin-left: 30px;">求职地区：<b style="color: #000000">杭州西湖区</b></p>
                <p style="margin-left: 30px;">期望月薪：<b style="color: #000000">2000-3000</b></p>
                <p style="margin-left: 30px;">本人性格温善，待人友好，普通话标准，具有良好的沟通能力。工作认真，有耐心，能吃苦耐劳。</p>
            </div>
        </dl>
    </div>
    <div class="xiabu3" style="border:0px solid blue;width:100%;height:70px;position:absolute;top:550px;cursor:default;">
        <ul>
            <li><div align="center" style="width:80px;height:28px;border:1px solid grey;font-size:18px;">上一页</div></li>
            <li><div align="center">1</div></li>
            <li><div align="center">2</div></li>
            <li><div align="center">3</div></li>
            <li><div align="center">4</div></li>
            <li><div align="center">5</div></li>
            <li><div align="center">6</div></li>
            <li><div align="center">7</div></li>
            <li><div align="center">8</div></li>
            <li><div align="center">....</div></li>
            <li><div align="center" style="width:80px;height:28px;border:1px solid grey;font-size:18px;">下一页</div></li>
        </ul>
    </div>
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
