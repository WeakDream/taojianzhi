<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <title>岗位详情</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/geren.css">
    <script src="js/laydate/laydate.js"></script>
    <script type="text/javascript" src="../js/jquery-1.11.3.min.js" /></script>
    <script type="text/javascript" src="../js/jquery-1.11.1.min.js" /></script>
    <script type="text/javascript">
        var check = 0;//该变量是记录当前选择的评分

        /*over()是鼠标移过事件的处理方法*/
        function over(param){
            if(param == 1){
                $("#star1").attr("src","img/star_red.png");//第一颗星星亮起来，下面以此类推
            }else if(param == 2){
                $("#star1").attr("src","img/star_red.png");
                $("#star2").attr("src","img/star_red.png");
            }else if(param == 3){
                $("#star1").attr("src","img/star_red.png");
                $("#star2").attr("src","img/star_red.png");
                $("#star3").attr("src","img/star_red.png");
            }else if(param == 4){
                $("#star1").attr("src","img/star_red.png");
                $("#star2").attr("src","img/star_red.png");
                $("#star3").attr("src","img/star_red.png");
                $("#star4").attr("src","img/star_red.png");
            }else if(param == 5){
                $("#star1").attr("src","img/star_red.png");
                $("#star2").attr("src","img/star_red.png");
                $("#star3").attr("src","img/star_red.png");
                $("#star4").attr("src","img/star_red.png");
                $("#star5").attr("src","img/star_red.png");
            }
        }
        /*out 方法是鼠标移除事件的处理方法，当鼠标移出时，恢复到我的打分情况*/
        function out(){
            if(check == 1){//打分是1，设置第一颗星星亮，其他星星暗，其他情况以此类推
                $("#star1").attr("src","img/star_red.png");
                $("#star2").attr("src","img/star.png");
                $("#star3").attr("src","img/star.png");
                $("#star4").attr("src","img/star.png");
                $("#star5").attr("src","img/star.png");
            }else if(check == 2){
                $("#star1").attr("src","img/star_red.png");
                $("#star2").attr("src","img/star_red.png");
                $("#star3").attr("src","img/star.png");
                $("#star4").attr("src","img/star.png");
                $("#star5").attr("src","img/star.png");
            }else if(check == 3){
                $("#star1").attr("src","img/star_red.png");
                $("#star2").attr("src","img/star_red.png");
                $("#star3").attr("src","img/star_red.png");
                $("#star4").attr("src","img/star.png");
                $("#star5").attr("src","img/star.png");
            }else if(check == 4){
                $("#star1").attr("src","img/star_red.png");
                $("#star2").attr("src","img/star_red.png");
                $("#star3").attr("src","img/star_red.png");
                $("#star4").attr("src","img/star_red.png");
                $("#star5").attr("src","img/star.png");
            }else if(check == 5){
                $("#star1").attr("src","img/star_red.png");
                $("#star2").attr("src","img/star_red.png");
                $("#star3").attr("src","img/star_red.png");
                $("#star4").attr("src","img/star_red.png");
                $("#star5").attr("src","img/star_red.png");
            }
        }
        /*click()点击事件处理，记录打分*/
        function click(param){
            check = param;//记录当前打分
            out();//设置星星数
        }
        $(document).ready(function(){
            $(".daohang4tan").hide();
            $(".daohang5tan").hide();
            $(".kuang3tan").hide();

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

            $(".kuang3,.kuang3tan").hover(function(){
                $(".kuang3").css({"background":"white","border":"1px solid #EEEEEE"});
                $(".kuang3tan").show();
            },function(){
                $(".kuang3").css({"background":"#FF5500","border":"0px"});
                $(".kuang3tan").hide();
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

            $(".n1tan").show();
            $(".n2tan").hide();
            $("#n1").css('background',' #FF5500');
            $("#n1").click(function(){
                $(".n2tan").hide();
                $(".n1tan").show();
                $("#n1").css('background',' #FF5500');
                $("#n2").css('background',' #C1CDC1');
            });
            $("#n2").click(function(){
                $(".n1tan").hide();
                $(".n2tan").show();
                $("#n2").css('background',' #FF5500');
                $("#n1").css('background',' #C1CDC1');
            });
        });
    </script>
    <style type="text/css">
        body{
            font-family:微软雅黑;
            margin:0px;
            padding:0px;
            background-color:#fcf9fd;
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

        .kuang{
            width:680px;
            height:58px;
            position:absolute;
            right:340px;
            top: 1525px;

        }
        .kuang div a{
            font-size:14px;
            margin-left:20px;
            margin-top:10px;
            text-decoration:none;
            display:block;
            color:black;
        }
        .kuang div a:hover{
            font-size:14px;
            margin-left:20px;
            margin-top:10px;
            text-decoration:none;
            display:block;
            color:#FF0000;
        }
        .kuang1{
            width:167px;
            height:56px;
            position:absolute;
        }
        .kuang2{
            width:144px;
            height:40px;
            position:absolute;
            margin-left:70px;
            left: 183px;
            top: 2px;
        }
        .kuang3{
            width:111px;
            height:55px;
            position:absolute;
            margin-left:140px;
            left: 384px;
            top: 3px;
        }
        .kuang3tan{
            width:110px;
            height:auto;
            border:1px solid #EEEEEE;
            margin-left:10px;
            margin-top:10px;
            position:absolute;
            background:white;
            z-index:9;
            left: 514px;
            top: 48px;
        }
        .tuijian{
            background:white;
        }
        .search-pannel{
            position: absolute;
            top:20px;
            left: 930px;
            width: 230px;
        }
        .search-button{float:right}
        .btn-search{
            width: 60px;
            height: 40px;
            background: #f50;
            border: 1;
            cursor: pointer;
        }
        .search-common-pannel input{
            height: 39px;
            line-height: 39px;
            background: #fff;
            outline: none;
            border: 0 none;
            width: 170px;
        }
        .search-common-pannel img{
            position: absolute;
            top:10px;
            left: 6px;
            z-index: 2;
        }
        .nav{
            height: 38px;

        }
        .nav li{
            width:80px;
            float:left;
            text-align: center;
            line-height: 30px;
            border: 1px solid black;
            border-radius:5px;

        }
        .nav li:hover{
            background: #FF5500;
            color: #ffffff;
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
        .you1{
            border: 0px solid red;
            height:300px;
            width: 310px;
            background: #ffffff;
            margin-right: 10px;;
            margin-top: 15px;
            margin-left:10px;
            float: right;
        }
        .you2{
            border: 0px solid red;
            height:350px;
            width: 310px;
            background: #ffffff;
            margin-right: 10px;;
            margin-top: 350px;
            margin-left:705px;
            position: absolute;


        }
        .zuo1{
            border: 0px solid red;
            height:690px;
            width: 670px;
            background: #ffffff;
            position: absolute;
            margin-top:15px;
            margin-left:10px;
        }
        .zuo2{
            border: 0px solid red;
            height:300px;
            width: 670px;
            background: #ffffff;
            position: absolute;
            margin-top:740px;
            margin-left:10px;
        }
        .zuo3{
            border: 0px solid red;
            height:450px;
            width: 670px;
            background: #ffffff;
            position: absolute;
            margin-top:1080px;
            margin-left:10px;
        }
        .pingjia{
            font-size: 20px;
            margin-left: 20px;
            margin-top: 20px;
            border: 0px solid red;
            height:30px;
        }
        .pingjia2{
            height: 30px;
            border: 0px solid red;
            margin-left: 35px;
            text-align: left;
            font-size: 17px;
            display: none;
            color:#666464;
        }
        .dibu a{
            color:#3C3C3C;
            text-decoration:none;
            font-size:17px;
            font-weight:700;
            display:block;
        }
        .xiabu3 ul{
            margin-left:0px;
            margin-top:10px;
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
<a id="gotop" href="#">
    <span><p style="color:#000000;font-size:15px;">返回顶部</p></span>
</a>
<!--灰色导航栏-->
<div id="nav1">
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
</div></div>

<div class="chen">
    <div class="chen1" style="width:1024px;height:100%;margin:0 auto;">
        <img src="/img/taologo2.jpg" style="width:140px;margin-left: 20px;margin-top:10px;">
        <div style="font-size:25px;color:#ffffff;margin-top:-55px;margin-left: 230px;position: absolute;font-weight:600;">岗位详情</div>
        <div class="search-pannel">
            <form>
                <div class="search-button">
                    <button class="btn-search" type="submit">搜索</button>
                </div>
                <div class="search-common-pannel">
                    <input type="text">
                    <!--<img src="img/sou.png">!-->
                </div>
            </form>
        </div>
        <div style="text-decoration:none;border:1px solid #ffffff;height:30px;width:80px;top:25px;margin-left:1050px;position:absolute;font-size:17px;color: #ffffff">&nbsp我要发布</div>
    </div>
</div>

<div class="rongqi" style="border:0px solid red;width:1024px;top:20px;height:1800px;position:relative;margin:0 auto;cursor:default;">
    <div class="you1">
        @if($company->job_type!=1)
        <a href="#"> <img style="height: 80px;width: 80px;margin-left: 120px;margin-top:10px;position: absolute;"src="/img/gongsi1.jpg"></a>
        <div style="margin-left: 20px;border-top:2px solid #eaeaea ;height: 200px;width: 290px;margin-top: 100px; ">

            <h3>{{$company->company_name}}</h3>
            <span>公司介绍</span>
            <p>&nbsp;&nbsp;&nbsp;{{$company->description}}</p>

        </div>
        @endif
        @if($company->job_type==1)
                <a href="#"> <img style="height: 80px;width: 200px;margin-left: 50px;margin-top:10px;position: absolute;"src="/img/home.jpg"></a>
                <div style="margin-left: 20px;border-top:2px solid #eaeaea ;height: 200px;width: 290px;margin-top: 100px; ">

                    <h3>主人承诺</h3>
                    <p>&nbsp;&nbsp;&nbsp;我们的工作简单而又轻松，我们将郑重承诺任何时候都不会拖欠您的任何的工资，...</p>

                </div>
            @endif
    </div>
    <div class="zuo1">
        <h3 style="margin-left: 40px;">职位详情</h3>
        <div style="border-bottom:2px dotted #eaeaea;height: 60px;width: 570px;margin-left: 40px;margin-top:- 20px;position: absolute;">
            <p >工作时间</p>
            <p>{{$company->work_time}}</p>
        </div>
        <div style="border-bottom:2px dotted #eaeaea;height: 70px;width: 570px;margin-left: 40px;margin-top:80px;position: absolute;">
            <p>薪资待遇</p>
            <p>每天结算：&nbsp;薪资：{{$company->salary}}元/天&nbsp;</p>
        </div>
        <div style="border-bottom:2px dotted #eaeaea;height: 70px;width: 570px;margin-left: 40px;margin-top:170px;position: absolute;">
            <p>工作地点</p>
            <p>{{$company->position}}</p>
        </div>
        <div style="border-bottom:2px dotted #eaeaea;height: 70px;width: 570px;margin-left: 40px;margin-top:260px;position: absolute;">
            <p>岗位要求</p>
            <p>{{$company->job_require}}</p>
        </div>
        <div style="border-bottom:2px dotted #eaeaea;height: 70px;width: 570px;margin-left: 40px;margin-top:350px;position: absolute;">
            <p>工作内容</p>
            <p>{{$company->type}}</p>
        </div>
        <!--<div style="border-bottom:2px dotted #eaeaea;height: 90px;width: 570px;margin-left: 40px;margin-top:440px;position: absolute;">
            <p>面试信息</p>
            <p>面试时间:2017-6-28 09:10  面试地点: 北京市 -海淀区 -魏公村 北京市海淀区韦伯时代中心C座1楼大厅 </p>
        </div>!-->
        <div style="border-bottom:2px dotted #eaeaea;height: 70px;width: 570px;margin-left: 40px;margin-top:450px;position: absolute;">
            <p>截止时间</p>
            <p>2017-06-01</p>
        </div>
    </div>
    <div class="you2">
        <div style="border: 1px solid #f1ffe7;background-color: #f1ffe7;height: 50px;width: 310px;">
            <h2 style="margin-left: 80px;margin-top: 8px;position: absolute">兼职担保职位</h2>
            <div style="height: 300px;width: 310px;border: 0px solid red;margin-top: 60px;">
                <a href="#"> <img style="height:300px;width: 300px;"src="/img/gongsi2.png"></a>
            </div>
        </div>
    </div>
    <div class="zuo2">
        <h3 style="margin-left: 40px;">发布者信息</h3>
        <a href="#"> <img style="height: 150px;width: 150px;margin-left: 50px;margin-top:20px;position: absolute;border-radius:50%"src="/img/touxiang.jpg"></a>
        <div style="margin-left: 240px;height: 200px;width: 290px;margin-top: 40px; ">
            <p>姓名：{{$company->creator_name}}</p>
            <p>性别：男</p>
            <p>联系电话：{{$company->contact}}</p>
            <p>介绍：担任北京风雨行国际广告传媒有限公司的人事部门总管</p>
            <p style="margin-left: 10px;margin-top: 20px;"><input type="button" name="button" value="找他聊聊" onclick=jump() style="background-color: #FF5500;height: 40px;width: 120px;font-size: 17px;color: #ffffff"></p>
            <p style="margin-left: 200px;margin-top: -50px;"><input type="button" name="button" value="举报他" onclick=jump() style="background-color: #8FBC8F;height: 40px;width: 120px;font-size: 17px;color: #ffffff"></p>
        </div>
    </div>
    <div class="zuo3">
        <h3 style="margin-left: 40px;">岗位评价</h3>
        <ul class="nav">
            <li id="n1" style="margin-left:200px;"><b>我要评价</b></li>
            <li id="n2" style="margin-left:100px;"><b>显示评价</b></li>
        </ul>
        <div class="n1tan" style="border: 0px solid blue;width: 800px;left: 50px;height:450px;margin-top:30px;margin-left: 50px;">
            <p>
               <!-- <label >评价</label>
            <div style="margin-top:-37px;margin-left: 100px;">
                <a href="javascript:click(1)"><img src="img/star.png" id="star1" onMouseOver="over(1)" onMouseOut="out(1)"/></a>
                <a href="javascript:click(2)"><img src="img/star.png" id="star2" onMouseOver="over(2)" onMouseOut="out(2)" /></a>
                <a href="javascript:click(3)"><img src="img/star.png" id="star3" onMouseOver="over(3)" onMouseOut="out(3)" /></a>
                <a href="javascript:click(4)"><img src="img/star.png" id="star4" onMouseOver="over(4)" onMouseOut="out(4)"/></a>
                <a href="javascript:click(5)"><img src="img/star.png" id="star5" onMouseOver="over(5)" onMouseOut="out(5)"/></a>
            </div>
            </p> </br>
            <p>>!-->
                <label >你的评语</label>
            </p>
            </br>
            <div style="margin-top:-30px;margin-left:50px;">
                <textarea cols=70 rows=5 style="margin-top:20px;margin-left:30px sition: absolute" placeholder="写出你对岗位的评价"></textarea>
            </div>
            </br>
            </br>
            <button style="margin-left: 200px;width: 80px;height: 30px;background: #f0ad4e;border-radius: 5px;"><b>提交</b></button>
            <button style="margin-left: 20px;;width: 80px;height: 30px;background:#f9f9f9;border-radius: 5px;"><b>取消</b></button>
        </div>
        <div class="n2tan" style="border: 0px solid red;width: 500px;left: 50px;height:450px;margin-left:80px;">
            <table width="500" height="300" border="2" frame="hsides"rules="rows">
                <tr>
                    <td>评价</td>
                    <td>评价人</td>
                    <td>操作</td>
                </tr>
                <tr>
                    <td><img src="/img/xing3.jpg"></td>
                    <td>王敏</td>
                    <td><button>查看详情</button></td>
                </tr>
                <tr>
                    <td><img src="/img/xing5.jpg"></td>
                    <td>赵杰</td>
                    <td><button>查看详情</button></td>
                </tr>
                <tr>
                    <td><img src="/img/xing4.jpg"></td>
                    <td>匿名</td>
                    <td><button>查看详情</button></td>
                </tr>
            </table>
            <div class="xiabu3" style="border:0px solid blue;width:100%;height:70px;position:absolute;top:400px;cursor:default;">
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

    <div class="kg">
        <div class="kuang" style="background:#FF5500;">
            <div class="kuang1"><a href="{{url('job_save',[$company->company_name,$company->name])}}"><span style="font-size:24px;"><strong>收藏岗位</strong></span></a></div>
            <div class="kuang2"><a href="{{url('job_buy',$company->company_name)}}"><span style="font-size:24px; "><strong>购买岗位</strong></span></a></div>
            <div class="kuang3"><a href="#"><span style="font-size:24px;"><strong>分享</strong></span></a></div>

            <div class="kuang3tan"> <div id="ckepop">
                    <a class="jiathis_button_qzone">QQ空间</a>
                    <a class="jiathis_button_tsina">新浪微博</a>
                    <a class="jiathis_button_t163">网易微博</a>
                    <a class="jiathis_button_tqq">腾讯微博</a>
                    <a class="jiathis_button_tsohu">搜狐微博</a>
                    <a class="jiathis_button_douban">豆瓣</a>
                    <a class="jiathis_button_renren">人人网</a>
                    <a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jiathis_separator jtico jtico_jiathis" target="_blank">更多</a>
                    <a class="jiathis_counter_style"></a>
                </div>
                <script type="text/javascript" src="http://v2.jiathis.com/code/jia.js" charset="utf-8"></script>

        </div>
    </div>

    <div class="tuijian" style="width:306px; height:702px; border:1px solid white; position:absolute; top:746px; left: 709px;">
        <h2 style="margin-left: 10px; margin-top: 8px; position: absolute; left: 4px; width: 289px; top: 7px;">你可能感兴趣的职位</h2>
        <div style="height: 70px; margin-left: 10px; margin-top:20px; position: absolute; left: 23px; top: 60px; width: 210px;">
            <p>兼职招生顾问</p>
            <p><span class="STYLE1">130</span>元/天</p>
            <p>工作时间 11.1-11.3 </p>
        </div>
        <div style="height: 70px; margin-left: 10px; margin-top:20px; position: absolute; left: 23px; top: 190px; width: 210px;">
            <p>市场调研员</p>
            <p><span class="STYLE1">80</span>元/天</p>
            <p>工作时间 11.19-11.23 </p>
        </div>
        <div style="height: 70px; margin-left: 10px; margin-top:20px; position: absolute; left: 23px; top: 320px; width: 210px;">
            <p>餐饮小时工</p>
            <p><span class="STYLE1">10</span>元/天</p>
            <p>工作时间 11.24-12.11 </p>
        </div>
    </div>
    <!--底部导航栏-->
    <div class="dibu" style="width:100%;height:140px;border:1px solid white;position:absolute;top:1700px;">
        <div style="width:100%;height:12px;background:#FF5500"></div>
        <div style="width:100%;height:1px;border-top:1px dashed #FF5500;margin-top:3px;"></div>
        <img src="/img/taologo.jpg" style="width:110px;border:1px solid #FF5500;margin-top:40px;margin-left:130px;">
        <a href="#" style="margin-top:-53px;margin-left:350px;">联系我们</a>
        <a href="#" style="margin-top:-22px;margin-left:470px;">加入我们</a>
        <a href="#" style="margin-top:-22px;margin-left:590px;">关注我们</a>
        <a href="#" style="margin-top:8px;margin-left:350px;">关于我们</a>
        <a href="#" style="margin-top:-22px;margin-left:470px;">友情链接</a>
        <a href="#" style="margin-top:-22px;margin-left:590px;">意见反馈</a>
        <img src="/img/erweima.jpg" style="width:70px;margin-left:800px;margin-top:-56px;">
        <p style="margin-left:440px;">www.taojianzhi.com</br>网络版权归淘兼职所有</p>
    </div>
</div>

</body>
</html>