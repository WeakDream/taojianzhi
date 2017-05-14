<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>收藏夹1</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery-1.11.3.min.js" /></script>
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
                $(".daohang5").css({"background":"#C1CDC1","border":"0px"});
                $(".daohang5tan").hide();
            });
            $("#liebiao").show();
            $("#resume-save").hide();
            $("#company").click(function(){
                $("#liebiao").show();
                $("#resume-save").hide();
            });
            $("#resume").click(function () {
                $("#liebiao").hide();
                $("#resume-save").show();
            });

            var cartTable = document.getElementById('liebiao');
            var tr = cartTable.children[1].rows;
            var checkInputs = document.getElementsByClassName('check');
            var checkAllInputs = document.getElementsByClassName('check-all');
            var selectedTotal = document.getElementById('selectedTotal');
            var priceTotal = document.getElementById('priceTotal');

            function getTotal(){
                var selected = 0;
                var price = 0;
                for(var i=0,len=tr.length;i<len;i++){
                    if (tr[i].getElementsByTagName('input')[0].checked){
                        tr[i].className="on";
                        selected = parseInt(selected+1);
                        price += parseFloat(tr[i].cells[4].innerHTML)
                    }
                    else{
                        tr[i].className="";
                    }
                }
                selectedTotal.innerHTML = selected;
                priceTotal.innerHTML = price.toFixed(2);
            }

            for(var i = 0,len = checkInputs.length;i<len;i++){
                checkInputs[i].onclick = function(){
                    if(this.className === 'check-all check'){
                        for(var j=0;j<checkInputs.length;j++){
                            checkInputs[j].checked = this.checked;//每个框的状态都要跟全选框一样
                        }
                    }
                    if(this.checked == false){
                        for(var k = 0;k<checkAllInputs.length;k++){
                            checkAllInputs[k].checked = false;
                        }
                    }
                    getTotal();
                }
            }

            $(".delete").click(function(){
                var conf = confirm('确定要删除吗？');
                if(conf){
                    $(this).parent().parent().remove();
                }
            });

            $(".deleteAll").click(function(){
                if(selectedTotal.innerHTML!='0'){
                    var conf = confirm('确定要删除吗？');
                    if(conf){
                        for(var i=0;i<tr.length;i++){
                            var input = tr[i].getElementsByTagName('input')[0];
                            if(input.checked){
                                tr[i].parentNode.removeChild(tr[i]);
                                i--;
                            }
                        }
                    }
                }
            });
        });
    </script>

    <style>
        body{
            font-family:微软雅黑;
            margin:0px;
            padding:0px;
            background-color:#FFF8DC;
        }
        #nav1{
            width:100%;
            margin:0px auto;
            position:fixed;/*固定作用*/
            top:0px;
            left:0px;
            /*ie6下样式，加下划线表示只针对ie6 的hack */
            z-index:9999; /* 让导航栏浮在网页的最外层 */
            _position:absolute;
            _background-attachment:fixed;
            _top:expression(eval(document.documentElement.scrollTop));
            _bottom:auto;
        }
        #nav2{
            width:100%;
            margin:0px auto;
            position:fixed;/*固定作用*/
            top:0px;
            left:0px;
            /*ie6下样式，加下划线表示只针对ie6 的hack */
            z-index:1; /* 让导航栏浮在网页的最外层 */
            _position:absolute;
            _background-attachment:fixed;
            _top:expression(eval(document.documentElement.scrollTop));
            _bottom:auto;
        }
        .hui{
            background:#C1CDC1;
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
            width:500px;
            height:60px;
            position:relative;
            left:550px;
            top:0px;
        }
        .zhiwei{
            cursor:pointer;
        }
        .zhiwei:hover{
            color:#FF4400;
            text-decoration:underline;
        }
        .qian{
            color:#FF4400;
            font-weight:600;
        }

        .on{
            background:#E1EAEA;
        }
        .delete{
            cursor:pointer;
        }
        .delete:hover{
            text-decoration:underline;
            color:#FF4400;
        }

        ul,li{
            margin:0px;
            padding:0px;
        }
        li{
            display:block;
            list-style:none;
            list-style-position:outside;
            text-align:center;
            font-weight:bold;
            float:left;
        }
        /*a:visited{
        text-decoration:none;
        float:left;
        padding:3px 5px 0px 5px;
        width:100px;
        }*/

        #nav{
            width:600px;
            height:30px;
            border-bottom:0px;
            padding:0px 5px;
            position:fixed;
            z-index:1;
            left: 320px;
            top: 87px;
        }
        a:hover{
            color:red;
            /*float:center;*/
            padding:6px 0px 0px 0px;
            width:88px;
            text-decoration:none;
        }
        .menu1{
            width:120px;
            height:auto;
            margin:6px 4px 0px 0px;
            padding:6px 0px 0px 0px;
            cursor:hand;
            filter:Alpha(opacity=70);
            -moz-opacity:0.7;
        }
        .menu2{
            width:120px;
            height:28px;
            margin:6px 4px 0px 0px;
            padding:6px 0px 0px 0px;
            overflow-y:hidden;
            cursor:hand;
        }
        .tuijian li{
            float: left;
            width: 25%;
            padding-left: 10px;
            padding-top: 20px;

        }
        .tuijian li span{
            font-size: 16px;
            padding-left: 40px;
            color:black;
        }
        .tuijian li img{
            height:200px;
            width: 200px;
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

        <div class="daohang4tan"><a href="{{url('personal_center')}}">个人中心</a><a href="#">添加修改简历</a><a href="#">查看招聘信息</a></div>
        <div class="daohang5tan"><a href="#">网站简介</a><a href="#">组织结构</a><a href="#">发展历程</a></div>
    </div>
</div>
<!--容器-->
<div class="rongqi" style="border:0px solid red;width:1024px;top:20px;height:530px;position:relative;margin:0 auto;cursor:default;">
    <!--头部-->
    <div id="nav2">
        <div class="header" style="width:100%;height:80px;border:0px solid white;position:absolute;cursor:default;background:#FFF8DC;top:40px;">
            <!--搜索-->
            <div class="sousuo">
                <form>
                    <input type="search" placeholder="打字员、销售员、客服…" size="60" style="border:3px solid #FF5500;height:40px;top:20px;position:absolute;">
                    <input type="submit" value="搜索" style="color:white;font-size:18px;font-weight:600;width:80px;height:40px;background:#FF5500;border:0px;left:385px;top:20px;position:absolute;cursor:pointer;">
                </form>
            </div>
        </div>
        <div style="width:300px;height:100px;border:0px solid green;position:absolute;top:40px;left:150px;">
            <img src="img/taologo2.jpg" style="width:160px;">
            <div style="background:#DEDEDE;width:1px;height:58px;margin-left:170px;margin-top:-65px;"></div>
            <p style="color:#666666;font-size:27px;margin-left:190px;margin-top:-48px;">收藏夹</p>
        </div>
    </div><!--头部-->

    <div id="nav">
        <ul>
            <li class="menu2" onMouseOver="this.className='menu1'" onMouseOut="this.className='menu2'">
                <a href="#" id="resume">简历收藏</a>
                <div class="list">
                    <a href="#" id="company">职位收藏</a><br />
                </div>
            </li>
        </ul>
    </div>

    <!--第一块-->
    <div style="border:0px solid black;width:1024px;height:700px;position:absolute;top:100px;" >
        <hr/>
        <table id="resume-save" rules=rows border="0" width="1024" align="center" >
            <thead>
            <tr height="30" align="center">
                <td></td>
                <td>姓名</td>
                <td>求职意向</td>
                <td>薪资要求</td>
                <td>手续费(元)</td>
                <td>操作</td>
            </tr>
            </thead>
            <tbody>
            @if(isset($resume_gets))
                @if(!empty($resume_gets))
                    @foreach($resume_gets as $resume)
                <tr bgcolor="#FCFCFC" height="130" align="center">
                    <td><input type="checkbox" class="check-one check" />&nbsp;&nbsp;</td>
                    <td align="left"><img src="./img/taologo.jpg" style="width:80px;height:80px;cursor:pointer;">&nbsp;
                        <span class="zhiwei"><a href="#">{{$resume->name}}</a></span></td>
                    <td>{{$resume->school}}</td>
                    <td>2015年12月1日~2015年12月31日</td>
                    <td class="qian">5.00</td>
                    <td><a href="#"><span class="delete">删除</span></a></td>
                </tr>
                    @endforeach
                @endif
            @endif
            </tbody>
        </table>
        <table rules=rows id="liebiao" border="0" width="1024" align="center">
            <thead>
            <tr height="30" align="center">
                <td></td>
                <td>公司名称</td>
                <td>工作岗位</td>
                <td>可工作时间</td>
                <td>手续费(元)</td>
                <td>操作</td>
            </tr>
            </thead>
            <tbody>
            @if(isset($resume_gets))
                @if(!empty($job_gets))
                    @foreach($job_gets as $company)
                <tr bgcolor="#FCFCFC" height="130" align="center">
                    <td><input type="checkbox" class="check-one check" />&nbsp;&nbsp;</td>
                    <td align="left"><img src="img/taologo.jpg" style="width:80px;height:80px;cursor:pointer;">&nbsp;
                        <span class="zhiwei"><a href="{{url('company',$company->companyname)}}">{{$company->companyname}}</a></span></td>
                    <td>{{$company->jobname}}</td>
                    <td>2015年12月1日~2015年12月31日</td>
                    <td class="qian">5.00</td>
                    <td><a href="{{url('job_delete',[$company->companyname,$company->jobname])}}"><span class="delete">删除</span></a></td>
                </tr>
                    @endforeach
                @endif
            @endif
            <!--<tr bgcolor="#FCFCFC" height="130" align="center">
                <td><input type="checkbox" class="check-one check" />&nbsp;&nbsp;</td>
                <td align="left"><img src="img/sofa.jpg" style="width:80px;height:80px;cursor:pointer;">&nbsp;
                    <span class="zhiwei"><a href="#">鄞州宜家家居销售员</a></span></td>
                <td>宜家集团</td>
                <td>2016年2月10日~2016年3月10日</td>
                <td class="qian">6.00</td>
                <td><span class="delete">删除</span></td>
            </tr>
            <tr bgcolor="#FCFCFC" height="130" align="center">
                <td><input type="checkbox" class="check-one check" />&nbsp;&nbsp;</td>
                <td align="left"><img src="img/milk.jpg" style="width:80px;height:80px;cursor:pointer;">&nbsp;
                    <span class="zhiwei"><a href="#">hhh牛奶促销员</a></span></td>
                <td>hhh牛奶公司</td>
                <td>2016年2月24日~2016年2月25日</td>
                <td class="qian">5.00</td>
                <td><span class="delete">删除</span></td>
            </tr>!-->
            </tbody>
        </table>


        <div style="width:1024px;height:50px;background:#DBD6D6;margin-top:20px;padding:10px;">
            <input type="checkbox" class="check-all check" style="z-index:10;position:relative;"/>&nbsp;&nbsp;全选
            <span style="margin-left:30px;cursor:pointer;position:relative;z-index:10;" class="deleteAll">删除</span>
            <span style="margin-left:800px;front-color:red;font-size:17px;"><a href="orderconfirm.html"><b>投递简历</b></a></span>

        </div>
    </div><!--第一块-->

</div><!--容器-->
<div style="border: 1px solid #E5E5E5;width: 1100px;height: 840px;margin-top: 340px;margin-left:100px;">
    <div style="border-top: 1px solid  #f1cab4;width: 1024px;height: 60px;background: #fff2e8;">
        <p style="font-size: 18px;line-height: 60px;padding-left: 40px;color: #FF5500;font-weight: bold">为我推荐</p>
    </div>
    <ul class="tuijian">
        <li ><img src="img/jiajiao.jpg" alt="英语家教"></br><span>英语家教</span></li>
        <li><img src="img/milk.jpg"></br><span>牛奶促销员</span></li>
        <li><img src="img/sofa.jpg"></br><span>鄞州宜家家居销售员</span></li>
        <li><img src="img/jiajiao.jpg"></br><span>英语家教</span></li>
        <li ><img src="img/jiajiao.jpg" alt="英语家教"></br><span>英语家教</span></li>
        <li><img src="img/milk.jpg"></br><span>牛奶促销员</span></li>
        <li><img src="img/sofa.jpg"></br><span>鄞州宜家家居销售员</span></li>
        <li><img src="img/jiajiao.jpg"></br><span>英语家教</span></li>

    </ul>
</div>
<!--底部-->
<div class="dibu" style="width:100%;height:160px;border:1px solid white;position:absolute;top:1550px;">
    <div style="width:100%;height:12px;background:#FF5500"></div>
    <div style="width:100%;height:1px;border-top:1px dashed #FF5500;margin-top:3px;"></div>
    <table style="width:80%;height:80%;text-align:center;margin-left:73px">
        <tr>
            <td rowspan=2><img src="img/taologo.jpg" style="width:170px;"></td>
            <td><a href="#">联系我们</a></td>
            <td><a href="#">加入我们</a></td>
            <td><a href="#">关注我们</a></td>
            <td rowspan=2><img src="img/erweima.jpg" style="width:110px;"></td>
        </tr>
        <tr>
            <td><a href="#">关于我们</a></td>
            <td><a href="#">友情链接</a></td>
            <td><a href="#">意见反馈</a></td>
        </tr>
    </table>
    <p style="margin-left:630px;">www.taojianzhi.com</br>网络版权归淘兼职所有</p>
</div>
</body>
</html>
