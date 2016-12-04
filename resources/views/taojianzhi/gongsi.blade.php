<!DOCTYPE html>
<html>
<head lang="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>公司详情</title>
    <script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript">
            $(document).ready(function(){
                $(".daohang4tan").hide();
                $(".daohang5tan").hide();

                $(".daohang4,.daohang4tan").hover(function(){
                    $(".daohang4").css({"background":"white","border":"1px solid #EEEEEE"});
                    $(".daohang4tan").show();
                },function(){
                    $(".daohang4").css({"background":"white","border":"0px"});
                    $(".daohang4tan").hide();
                });

                $(".daohang5,.daohang5tan").hover(function(){
                    $(".daohang5").css({"background":"white","border":"1px solid #EEEEEE"});
                    $(".daohang5tan").show();
                },function(){
                    $(".daohang5").css({"background":"white","border":"0px"});
                    $(".daohang5tan").hide();
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
            background:#ffffff;
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
        .zuo1{
            border: 0px solid red;
            height:350px;
            width: 670px;
            background: #ffffff;
           position: absolute;
           margin-top: 50px;
            margin-left:10px;
        }
         span{
            color: gray;
        }
        .you1{
            border: 0px solid red;
            height:300px;
            width: 310px;
            background: #ffffff;
            margin-right: 10px;;
            margin-top: 50px;
            margin-left:10px;
            float: right;
        }
        .zuo2{
            border: 0px solid red;
            height:1080px;
            width: 670px;
            background: #ffffff;
            position: absolute;
            margin-top:430px;
            margin-left:10px;
        }
        .zuo3{
            border: 0px solid red;
            height:370px;
            width: 670px;
            background: #ffffff;
            position: absolute;
            margin-top:1530px;
            margin-left:10px;
            float: left;
        }
        .you2{
            border: 0px solid red;
            height:350px;
            width: 310px;
            background: #ffffff;
            margin-right: 10px;;
            margin-top: 380px;
            margin-left:705px;
           position: absolute;


        }
        .you3{
            border: 0px solid red;
            height:500px;
            width: 310px;
            background: #ffffff;
            margin-right: 10px;;
            margin-top:760px;
            margin-left:705px;
            position: absolute;

        }
        .dibu a{
            color:#3C3C3C;
            text-decoration:none;
            font-size:17px;
            font-weight:700;
            display:block;
        }
        .xiabu3 ul{
            margin-left:100px;
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
    </style>
</head>
<body>
<!--灰色导航栏-->
{{--<div class="hui">--}}
    {{--<div class="daohang">--}}
        {{--<div class="daohang1"><a href="{{url('index')}}">首页</a></div>--}}
        {{--<div class="daohang2"><a href="{{url('login')}}">登录</a></div>--}}
        {{--<div class="daohang3"><a href="{{url('register')}}">注册</a></div>--}}
        {{--<div class="daohang4"><a href="#">我的淘兼职</a></div>--}}
        {{--<div class="daohang5"><a href="#">关于我们</a></div>--}}
    {{--</div>--}}
{{--</div>--}}

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

        <div class="daohang4tan"><a href="{{url('personal_center')}}">个人中心</a><a href="#">添加修改简历</a><a href="#">查看招聘信息</a></div>
        <div class="daohang5tan"><a href="#">网站简介</a><a href="#">组织结构</a><a href="#">发展历程</a></div>
    </div>
</div>

<div class="rongqi" style="border:0px solid red;background:#f1f3f8;width:1024px;height:1920px;position:relative;margin:0 auto;cursor:default;">
    <div class="zuo1">
        <h2 style="margin-left: 30px;font-size: 30px;">{{$company->company_name}}发布的工作岗位：{{$company->name}}</h2>
        <div style="margin-left: 30px;">
            <span>公司地址：{{$company->address}}</span>
            <span style="margin-left: 30px;">性别不限</span>
            <span style="margin-left: 30px;">预计招聘人数：{{$company->number}}人</span>
        </div>
        <div style="margin-top: 40px;margin-left: -10px">
            <ul style="list-style-type:none;">
                <li><span>工作类型：</span>{{$company->work_type}}</li>
                <li style="margin-left: 220px;margin-top: -20px"><span>结算方式：</span>每月结算</li>
                <li style="margin-top: 10px;"><span>工作天数：</span>{{$company->time}}</li>
                <li style="margin-top: 10px;"><b style="color: orange">薪水：{{$company->salary}}</li>
                <li style="margin-top: 10px;"><b style="color: orange">联系人：{{$company->contact_person}}</li>
                <li style="margin-top: 10px;"><b style="color: orange">电话：{{$company->contact}}</li>
            </ul>
        </div>

    </div>
    <div class="you1">
     <a href="#"> <img style="height: 100px;width: 320px;margin-left: 0px;margin-top:0px;position: absolute;"src="/public/uploadfiles/{{$company->file_routrs}}"></a>
       <div style="margin-left: 20px;border-top:2px solid #eaeaea ;height: 200px;width: 290px;margin-top: 100px; ">
           <h3>{{$company->company_name}}</h3>
           <span>公司宣言：{{$company->description}}</span>
           <p>&nbsp;&nbsp;&nbsp;</p>
       </div>
    </div>
    <div class="zuo2">
        <h3 style="margin-left: 40px;">职位详情</h3>
        <div style="border-bottom:2px dotted #eaeaea;height: 100px;width: 570px;margin-left: 40px;margin-top:- 10px;position: absolute;">
          <p >工作时间</p>
           <p>8:00~11:00,13:00~14:00,16:00~20:00</p>
        </div>
        <div style="border-bottom:2px dotted #eaeaea;height: 100px;width: 570px;margin-left: 40px;margin-top:100px;position: absolute;">
            <p>薪资待遇</p>
            <p>每月结算：&nbsp;薪资：{{$company->salary}}&nbsp;薪资待遇-薪资半月结，15天结算一次，每月15号30结算一次</p>
        </div>
        <div style="border-bottom:2px dotted #eaeaea;height: 100px;width: 570px;margin-left: 40px;margin-top:210px;position: absolute;">
            <p>工作地点</p>
            <p>{{$company->address}}</p>
        </div>
        <div style="border-bottom:2px dotted #eaeaea;height: 150px;width: 570px;margin-left: 40px;margin-top:320px;position: absolute;">
            <p>岗位要求</p>
            <p>好工作来啦！通过率高！工作要求：男女不限，普通话标准，无责任，无销售。上岗人数：50人。上班时间：早9：00-12:00 下午13:30-18:00 中午休息一个半小时！周一至周日，每周最少做满三天。薪资发放：每月15日，30日各发放一次。</p>
        </div>
        <div style="border-bottom:2px dotted #eaeaea;height: 100px;width: 570px;margin-left: 40px;margin-top:480px;position: absolute;">
            <p>工作内容</p>
            <p>针对已办理贷款的客户，进行电话回访，并记录即可。工作简单，非常轻松！</p>
        </div>
        <div style="border-bottom:2px dotted #eaeaea;height: 170px;width: 570px;margin-left: 40px;margin-top:580px;position: absolute;">
            <p>面试信息</p>
            <p>面试时间:2015-11-28 上午9点10分    面试地点: {{$company->address}}C座1楼大厅 到了给负责人打电话</p>
            <p style="margin-top: -10px;"> 面试时间:2015-11-28    面试地点: {{$company->addsess}} 地铁4号线魏公村D口出向南400再向西150米即到</p>
        </div>
        <div style="border-bottom:2px dotted #eaeaea;height: 100px;width: 570px;margin-left: 40px;margin-top:750px;position: absolute;">
            <p>截止时间</p>
            <p>2016-06-01</p>
        </div>
        <div style="border-bottom:1px solid #eef8ed;background:#eef8ed;height: 100px;width: 570px;margin-left: 40px;margin-top:880px;position: absolute;">
            <div style="border: 1px solid #fd6000;height: 50px;width: 150px;margin-left:20px;margin-top: 30px;background: #fd6000;float:left"><a href="{{url('pay',$company->company_name)}}"style="text-decoration: none;font-size: 18px;color: #ffffff;margin-left: 15px;">购买岗位</a></div>

            <div style="border: 1px solid #fd6000;height: 50px;width: 150px;float:right;margin-right:20px;margin-top: 30px;background: #fd6000"><a href="{{url('personal_center',$company->company_name)}}" style="text-decoration: none;font-size: 18px;color: #ffffff;margin-left: 15px;margin-top: 5px;position: absolute">职位收藏</a></div>

           <!-- <p style="margin-top: -40px;margin-left: 180px;position: absolute">报名成功后可以查看联系电话</p>!-->
        </div>
    </div>
    <div class="zuo3">
        <h3 style="margin-left: 40px;">其他职位</h3>
        <div style="border-top: 2px dotted #eaeaea;height: 80px;width: 620px;margin-left: 20px">
         <p style="color: #369bce;font-size: 18px;">G1-国际U盟产品运营经理</p>
            <div style="border: 1px solid #fd6000;height: 40px;width: 130px;margin-left:450px;margin-top:-40px;background: #fd6000"><a href="#"style="text-decoration: none;font-size: 20px;color: #ffffff;margin-left: 15px;margin-top: 5px;position: absolute">查看详情</a></div>
            <p style="margin-top: -10px;"><span style="color: #000000">120元/天</span><span style="margin-left: 20px;color: #000000">杭州</span><span  style="margin-left: 20px;color: #000000">本科</span></p>
        </div>
        <div style="border-top: 2px dotted #eaeaea;height: 80px;width: 620px;margin-left: 20px">
            <p style="color: #369bce;font-size: 18px;">G1-国际U盟产品运营经理</p>
            <div style="border: 1px solid #fd6000;height: 40px;width: 130px;margin-left:450px;margin-top:-40px;background: #fd6000"><a href="#"style="text-decoration: none;font-size: 20px;color: #ffffff;margin-left: 15px;margin-top: 5px;position: absolute">查看详情</a></div>
            <p style="margin-top: -10px;"><span style="color: #000000">120元/天</span><span style="margin-left: 20px;color: #000000">杭州</span><span  style="margin-left: 20px;color: #000000">本科</span></p>
        </div>
        <div style="border-top: 2px dotted #eaeaea;border-bottom: 2px dotted #eaeaea;height: 80px;width: 620px;margin-left: 20px">
            <p style="color: #369bce;font-size: 18px;">G1-国际U盟产品运营经理</p>
            <div style="border: 1px solid #fd6000;height: 40px;width: 130px;margin-left:450px;margin-top:-40px;background: #fd6000"><a href="#"style="text-decoration: none;font-size: 20px;color: #ffffff;margin-left: 15px;margin-top: 5px;position: absolute">查看详情</a></div>
            <p style="margin-top: -10px;"><span style="color: #000000">120元/天</span><span style="margin-left: 20px;color: #000000">杭州</span><span  style="margin-left: 20px;color: #000000">本科</span></p>
        </div>
        <div class="xiabu3" style="border:0px solid blue;width:100%;height:70px;position:absolute;cursor:default;">
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
    <div class="you2">
        <div style="border: 1px solid #f1ffe7;background-color: #f1ffe7;height: 50px;width: 310px;">
            <h2 style="margin-left: 80px;margin-top: 8px;position: absolute">兼职担保职位</h2>
            <div style="height: 300px;width: 310px;border: 0px solid red;margin-top: 60px;">
            <a href="#"> <img style="height:300px;width: 300px;"src="/img/gongsi2.png"></a>
            </div>
        </div>
    </div>
    <div class="you3">
        <h3 style="margin-left: 40px;">你可能感兴趣的职位</h3>
        <div style="border-bottom: 2px dotted #eaeaea;height: 100px;margin-left: 40px;width: 250px;">
            <p style="margin-top: 0px;">兼职招生顾问</p>
            <p style="margin-top: -5px;"><b style="color: orange;">130</b>元/天</p>
            <p style="margin-top: -5px;">工作时间11.1-11.3</p>
        </div>
        <div style="border-bottom: 2px dotted #eaeaea;height: 100px;margin-left: 40px;width: 250px;">
            <p style="margin-top: 10px;">市场调研员</p>
            <p style="margin-top: -5px;"><b style="color: orange;">80</b>元/天</p>
            <p style="margin-top: -5px;">工作时间11.19-11.23p>
        </div>
        <div style="border-bottom: 2px dotted #eaeaea;height: 100px;margin-left: 40px;width: 250px;">
            <p style="margin-top:10px;">餐饮小时工</p>
            <p style="margin-top: -5px;"><b style="color: orange;">10</b>元/小时</p>
            <p style="margin-top: -5px;">工作时间11.12-11.26</p>
        </div>
        <div style="border-bottom: 2px dotted #eaeaea;height: 100px;margin-left: 40px;width: 250px;">
            <p style="margin-top: 10px;">北大青鸟信息采集员兼职</p>
            <p style="margin-top: -5px;"><b style="color: orange;">20</b>元/小时</p>
            <p style="margin-top: -5px;">工作时间11.24-12.11</p>
        </div>

    </div>
    <!--底部导航栏-->
    <div class="dibu" style="width:100%;height:140px;border:1px solid white;position:absolute;top:1950px;">
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