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
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <style>
        @font-face {
            font-family: 'msyh';
            font-style: normal;
            font-weight: normal;
            src: url(http://taojianzhi.com/fonts/msyh.ttf) format('truetype');
        }

        body {  margin: 0;
            padding: 0;
            width: 100%;
            font-weight: 100;
            font-family:'msyh';
        }
    </style>
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
                <div class="col-md-3" id="left_information">
                    <div id="head">
                        <img class="img-rounded center-block" id="user_head" src="../public/facebook/1031face.png">
                    </div>
                    <div id="personal_message">
                            <dl class="dl-horizontal">
                                <dt>姓名</dt>
                                    <dd>aasa</dd>
                                <dt>性别</dt>
                                <dd>bbbb</dd>
                                <dt>年龄</dt>
                                <dd></dd>
                                <dt>学历</dt>
                                <dd></dd>
                                <dt>籍贯</dt>
                                <dd></dd>
                                <dt>期望的工作地点</dt>
                                <dd></dd>
                            </dl>
                    </div>
                    <div id="history">
                        <h2 class="glyphicon glyphicon-eye-open open-eye" aria-hidden="true"></h2>
                        <span>查看人数</span>
                        <h2 class="glyphicon glyphicon-star-empty collect" aria-hidden="true"></h2>
                        <span>收藏人数</span>
                        <br>
                        <a href="{{url("import")}}">一键导出</a>
                    </div>
                </div>
                <div id="center_information"></div>
                <div class="col-md-8" id="right_information">
                    {{--<div id="experience"></div>--}}
                    <dl>
                        <dt>

                            <h2><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> 项目经历</h2>
                            <HR style="FILTER: alpha(opacity=100,finishopacity=0,style=1)" width="80%" color=#987cb9 SIZE=3>
                        </dt>
                        <dd>

                        </dd>
                    </dl>
                    <dl>
                        <dt>
                            <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 自我描述</h2>
                            <HR style="FILTER: alpha(opacity=100,finishopacity=0,style=1)" width="80%" color=#987cb9 SIZE=3>
                        </dt>
                        <dd>

                        </dd>
                    </dl>
                    <dl>
                        <dt>
                            <h2>
                                <span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span>
                                用户评价
                            </h2>
                            <HR style="FILTER: alpha(opacity=100,finishopacity=0,style=1)" width="80%" color=#987cb9 SIZE=3>
                            <div id="first_user" class="user_evaluate">
                                <img class="user_evaluate_head" src="/public/facebook/1031face.jpg">
                                <p>宋国</p>
                                <p>有责任心，干活踏实放心</p>
                            </div>
                        </dt>
                        <dd>

                        </dd>
                    </dl>
                    {{--<div id="evaluate">--}}
                        {{--用户评价--}}
                    {{--</div>--}}
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
        </div>

</body>
</html>