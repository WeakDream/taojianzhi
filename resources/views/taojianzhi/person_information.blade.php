<!DOCTYPE html>
<html>
<head lang="en">
<meta charset="utf-8">
    <title>
        查看个人信息
    </title>
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/person_information.css">
    {{--<script type="text/javascript" src="../js/addLoadEvent.js"></script>--}}
    {{--<script type="text/javascript" src="../js/person_information.js"></script>--}}
</head>
<body>
        {{--这里yeild jqrey还没看，只会原生的--}}
        @yield('nav_bar')
        <div class="container" id="information_body">
            <div class="row">
                <div class="col-md-4 bg-primary" id="left_information">
                    <div id="head">
                        <img class="img-rounded center-block" id="user_head" src="../public/facebook/1031face.jpeg">
                    </div>
                    <div id="personal_message">
                        <dl class="dl-horizontal">
                            <dt><p>姓名</p></dt>
                            <dd></dd>
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
                </div>
                <div id="center_information"></div>
                <div class="col-lg-8" id="right_information">
                    {{--<div id="experience"></div>--}}
                    <dl>
                        <dt>
                            项目经历
                        </dt>
                        <dd>

                        </dd>
                    </dl>
                    <div id="evaluate"></div>
                </div>
            </div>
        </div>


</body>
</html>