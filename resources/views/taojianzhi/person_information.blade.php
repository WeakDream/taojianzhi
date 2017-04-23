<!DOCTYPE html>
<html>
<head lang="en">
<meta charset="utf-8">
    <title>
        查看个人信息
    </title>
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/person_information.css">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/addLoadEvent.js"></script>
    <script type="text/javascript" src="../js/person_information.js"></script>
</head>
<body>
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
</div>
        <div class="container" id="information_body">
            <div class="row">
                <div class="col-md-3 bg-primary" id="left_information">
                    <div id="head">
                        <img class="img-rounded center-block" id="user_head" src="../public/facebook/1031face.jpeg">
                    </div>
                    <div id="personal_message">
                            <dl class="dl-horizontal">
                                <dt style="text-align: left">姓名</dt>
                                <dd>aasa</dd>
                                <dt><p>性别</p></dt>
                                <dd>bbbb</dd>
                                <dt><p>年龄</p></dt>
                                <dd></dd>
                                <dt><p>学历</p></dt>
                                <dd></dd>
                                <dt><p>籍贯</p></dt>
                                <dd></dd>
                                <dt><p>期望的工作地点</p></dt>
                                <dd></dd>
                            </dl>
                    </div>
                    <div id="history">

                    </div>
                </div>
                <div id="center_information"></div>
                <div class="col-md-8" id="right_information">
                    {{--<div id="experience"></div>--}}
                    <dl>
                        <dt>
                            <h2>项目经历</h2>
                        </dt>
                        <dd>

                        </dd>
                    </dl>
                    <dl>
                        <dt>
                            <h2>自我描述</h2>
                        </dt>
                        <dd>

                        </dd>
                    </dl>
                    <div id="evaluate">
                        用户评价
                    </div>
                </div>
            </div>
        </div>

<div class="row">
    <div class="dibu" style="width:100%;height:160px;border:1px solid white;top:1024px;position: absolute;">
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
    </div>
</div>
</body>
</html>