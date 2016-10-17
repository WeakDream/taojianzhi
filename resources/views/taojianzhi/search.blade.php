<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>搜索</title>
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
        .kuang{
            width:530px;
        }
        .fabu{
            border:1px solid #FFB38C;
            background:#FFF6EE;
            width:200px;
            height:35px;
            margin-left:820px;
            margin-top:-45px;
        }
        .fabu a{
            color:#FD4705;
            margin-left:15px;
            margin-top:5px;
            font-size:16px;
            font-family:黑体;
            display:inline-block;
        }
        .zhiwei{
            list-style-type:none;
            margin-top:-33px;

        }
        .zhiwei li{
            width:100px;
            margin-top:5px;
            margin-left:20px;
            float:left;
            font-size:13px;
        }
        .zhiwei li a{
            color:#1155CC;
        }
        .zhiwei li a:hover{
            text-decoration:none;
            color:#FA041C;
        }
        .quyu{
            list-style-type:none;
            margin-top:-33px;
        }
        .quyu li{
            width:40px;
            margin-top:5px;
            margin-left:20px;
            float:left;
            font-size:13px;
        }
        .quyu li a{
            color:#1155CC;
        }
        .quyu li a:hover{
            text-decoration:none;
            color:#FA041C;
        }
        .nianling{
            list-style-type:none;
            margin-top:-33px;
        }
        .nianling li{
            width:55px;
            margin-top:5px;
            margin-left:20px;
            float:left;
            font-size:13px;
        }
        .nianling li a{
            color:#1155CC;
        }
        .nianling li a:hover{
            text-decoration:none;
            color:#FA041C;
        }
        .xingbie{
            list-style-type:none;
            margin-top:-33px;
        }
        .xingbie li{
            width:20px;
            margin-top:5px;
            margin-left:20px;
            float:left;
            font-size:13px;
        }
        .xingbie li a{
            color:#1155CC;
        }
        .xingbie li a:hover{
            text-decoration:none;
            color:#FA041C;
        }
        .jingyan{
            list-style-type:none;
            margin-top:-33px;
            margin-left:20px;
        }
        .jingyan li{
            width:55px;
            margin-top:5px;
            margin-left:20px;
            float:left;
            font-size:13px;
        }
        .jingyan li a{
            color:#1155CC;
        }
        .jingyan li a:hover{
            text-decoration:none;
            color:#FA041C;
        }
        .xueli{
            list-style-type:none;
            margin-top:-33px;
        }
        .xueli li{
            width:60px;
            margin-top:5px;
            margin-left:20px;
            float:left;
            font-size:13px;
        }
        .xueli li a{
            color:#1155CC;
        }
        .xueli li a:hover{
            text-decoration:none;
            color:#FA041C;
        }
        .xinzi{
            list-style-type:none;
            margin-top:-33px;
            margin-left:20px;
        }
        .xinzi li{
            width:90px;
            margin-top:5px;
            margin-left:20px;
            float:left;
            font-size:13px;
        }
        .xinzi li a{
            color:#1155CC;
        }
        .xinzi li a:hover{
            text-decoration:none;
            color:#FA041C;
        }
        .xiangguan{
            width:100px;
            height:20px;
            background:#9699A0;
            padding-left:12px;
            margin-left:780px;
        }
        .shijian{
            width:100px;
            height:20px;
            background:white;
            padding-left:20px;
            margin-left:880px;
            margin-top:-20px;
        }
        .xiangguan a:hover{
            text-decoration:none;
        }
        .shijian a:hover{
            text-decoration:none;
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
<div class="rongqi" style="border:1px solid white;width:1024px;top:20px;height:1500px;position:relative;margin:0 auto;cursor:default;">
    <!--上部-->
    <div class="shang" style="width:100%;height:100px;border:1px solid white;cursor:default;">
        <!--LOGO-->
        <img src="../img/taologo.jpg" style="width:160px;">
        <!--搜索-->
        <div style="border:0px solid red;width:450px;height:45px;margin-left:220px;margin-top:-57px;">
            <form action="search_handle" method="post" >
                <div class="row">
                    <div class="col-lg-6">
                        <div class="input-group kuang">
                            <input type="text" name="key" class="form-control" placeholder="Search for...">
                         <span class="input-group-btn">
                             <input type='submit' class="btn btn-default" name='submit'/>
                         </span>
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                </div>
            </form>
        </div>
        <!--发布-->
        <div class="fabu">
            <a href="#">发布招聘</a>
            <div style="width:1px;height:33px;border-left:1px dashed #FFB38C;margin-top:-27px;margin-left:100px;"></div>
            <a href="jianlitianxie.html" style="margin-left:118px;margin-top:-28px;display:block;">登记简历</a>
        </div>
    </div>

    <!--中部-->
    <div class="zhong" style="width:100%;height:370px;border:1px solid #DFE0E4;cursor:default;">
        <!--招聘信息或者简历信息-->
        <div style="width:100%;height:40px;border:1px solid #DFE0E4;background:#FAFAFA;">
            <div style="border:1px solid white;width:125px;height:40px;"><a href="sousuo1.html" style="font-size:16px;color:black;display:inline-block;margin-top:7px;margin-left:30px;">招聘信息</a></div>
            <div style="border-top:3px solid #FF5500;background:white;width:125px;height:42px;margin-left:125px;margin-top:-42px;"><a href="sousuo2.html" style="font-size:16px;color:black;display:inline-block;margin-top:7px;margin-left:30px;">求职简历</a></div>
        </div>
        <!--筛选-->
        <div style="width:970px;height:320px;border:1px solid white;margin:0 auto;">
            <dl style="width:970px;height:100px;border:1px solid white;margin-top:10px;">
                <dt>职位：</dt>
                <dd>
                    <ul class="zhiwei">
                        <li><a href="" style="font-weight:600;color:black;">全部</a></li>
                        <li><a href="">促销</a></li>
                        <li><a href="">家教</a></li>
                        <li><a href="">服务员</a></li>
                        <li><a href="">家政保洁</a></li>
                        <li><a href="">图片处理</a></li>
                        <li><a href="">兼职测试</a></li>
                        <li><a href="">软件开发</a></li>
                        <li><a href="">汽车代驾</a></li>
                        <li><a href="">美工</a></li>
                        <li><a href="">技工</a></li>
                        <li><a href="">写作</a></li>
                        <li><a href="">导游</a></li>
                        <li><a href="">摄影</a></li>
                        <li><a href="">手绘/漫画</a></li>
                        <li><a href="">视频剪辑/制作</a></li>
                        <li><a href="">化妆师</a></li>
                        <li><a href="">礼仪/模特</a></li>
                        <li><a href="">志愿者</a></li>
                        <li><a href="">淘宝职位</a></li>
                        <li><a href="">会计</a></li>
                        <li><a href="">家教</a></li>
                        <li><a href="">健身教练</a></li>
                        <li><a href="">汽车陪驾</a></li>
                        <li><a href="">游戏代练</a></li>
                        <li><a href="">律师</a></li>
                        <li><a href="">物业管理</a></li>
                    </ul>
                </dd>
            </dl>
            <dl style="width:970px;height:30px;border:1px solid white;margin-top:-18px;">
                <dt>区域：</dt>
                <dd>
                    <ul class="quyu">
                        <li><a href="" style="font-weight:600;color:black;">全杭州</a></li>
                        <li><a href="">西湖</a></li>
                        <li><a href="">江干</a></li>
                        <li><a href="">上城</a></li>
                        <li><a href="">余杭</a></li>
                        <li><a href="">萧山</a></li>
                        <li><a href="">滨江</a></li>
                        <li><a href="">建德</a></li>
                        <li><a href="">富阳</a></li>
                        <li><a href="">临安</a></li>
                        <li><a href="">桐庐</a></li>
                        <li><a href="">淳安</a></li>
                    </ul>
                </dd>
            </dl>
            <dl style="width:970px;height:30px;border:1px solid white;margin-top:-18px;">
                <dt>年龄：</dt>
                <dd>
                    <ul class="nianling">
                        <li style="width:30px;"><a href="" style="font-weight:600;color:black;">全部</a></li>
                        <li><a href="">16-20岁</a></li>
                        <li><a href="">21-30岁</a></li>
                        <li><a href="">31-40岁</a></li>
                        <li><a href="">41-50岁</a></li>
                        <li><a href="">50岁以上</a></li>
                    </ul>
                </dd>
            </dl>
            <dl style="width:970px;height:30px;border:1px solid white;margin-top:-18px;">
                <dt>性别：</dt>
                <dd>
                    <ul class="xingbie">
                        <li style="width:30px;"><a href="" style="font-weight:600;color:black;">不限</a></li>
                        <li><a href="">男</a></li>
                        <li><a href="">女</a></li>
                    </ul>
                </dd>
            </dl>
            <dl style="width:970px;height:30px;border:1px solid white;margin-top:-18px;">
                <dt>工作经验：</dt>
                <dd>
                    <ul class="jingyan">
                        <li style="width:40px;"><a href="" style="font-weight:600;color:black;">不限</a></li>
                        <li><a href="">无经验</a></li>
                        <li><a href="">1年以下</a></li>
                        <li><a href="">1-2年</a></li>
                        <li><a href="">3-5年</a></li>
                        <li><a href="">6-10年</a></li>
                        <li><a href="">10年以上</a></li>
                    </ul>
                </dd>
            </dl>
            <dl style="width:970px;height:30px;border:1px solid white;margin-top:-18px;">
                <dt>学历：</dt>
                <dd>
                    <ul class="xueli">
                        <li style="width:45px;"><a href="" style="font-weight:600;color:black;">不限</a></li>
                        <li><a href="">高中以下</a></li>
                        <li><a href="">高中</a></li>
                        <li><a href="">中专/技校</a></li>
                        <li><a href="">大专</a></li>
                        <li><a href="">本科</a></li>
                        <li><a href="">硕士</a></li>
                        <li><a href="">博士</a></li>
                    </ul>
                </dd>
            </dl>
            <dl style="width:970px;height:30px;border:1px solid white;margin-top:-18px;">
                <dt>期望薪资：</dt>
                <dd>
                    <ul class="xinzi">
                        <li style="width:50px;"><a href="" style="font-weight:600;color:black;">不限</a></li>
                        <li style="width:50px;"><a href="">面议</a></li>
                        <li><a href="">1000以下</a></li>
                        <li><a href="">1000-2000</a></li>
                        <li><a href="">2000-3000</a></li>
                        <li><a href="">3000-5000</a></li>
                        <li><a href="">5000-8000</a></li>
                        <li><a href="">8000-12000</a></li>
                        <li><a href="">12000-20000</a></li>
                        <li><a href="">20000-25000</a></li>
                    </ul>
                </dd>
            </dl>

        </div>
    </div>
    <!--显示的搜索结果-->
    <div style="width:100%;height:1000px;border:1px solid #DFE0E4;border-top:2px solid #FF5500;margin-top:15px; ">
        <div style="width:100%;height:40px;background:#EFEFEF;padding-top:10px;">
            <div class="xiangguan"><a href="" style="color:white;font-size:13px">按相关性排序</a></div>
            <div class="shijian"><a href="" style="color:black;font-size:13px">按时间排序</a></div>
        </div>
        <table>
            <tr height="40" style="background:#FAFAFA;">
                <td width="30"></td>
                <td width="440">岗位名称</td>
                <td width="110">工作内容</td>
                <td width="110">报酬</td>
                <td width="110">工作地点</td>
                <td width="110">开始时间</td>
                <td width="110">要求工作的时间</td>

            </tr>
        </table>
      @if(isset($result))
      @foreach($result as $input)
        <table>
            <tr height="40" style="border-bottom:1px solid #EDEEF0;">
                <td width="30"></td>
                <td width="435"><a>{{$input->name}}</a></td>
                <td width="120">{{$input->duty}}</td>
                <td width="120">{{$input->wage}}</td>
                <td width="90">{{$input->place}}</td>
                <td width="125">{{$input->start_time}}</td>
                <td width="100">{{$input->during_time}}</td>

            </tr>
        </table>
     @endforeach
     @endif

     @if(isset($message))
     <table>
            <tr height="40" style="border-bottom:1px solid #EDEEF0;">
                <td width="30"></td>
                <td width="435"><a>{{$message}}</a></td>
                <td width="120">？</td>
                <td width="120">？</td>
                <td width="90">？</td>
                <td width="125">？</td>
                <td width="100">？</td>

            </tr>
        </table>
     @endif

        <tr><td></td></tr>

    </div>
</div>


<!--底部-->
<div style="top:0px;height: 60px;width:100%;border:0px solid #eaeaea;margin-top: 40px;">
    <div align="center"style="margin-top: 20px;">@Taojianzhi.com</div>
</div>

</body>
</html>
