<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>用户注册</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="../js/jquery-1.11.3.min.js" /></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $(".daohang4tan").hide();
        $(".daohang5tan").hide();
        $(".xinzijiesuan2").hide();

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

        var aInput=document.getElementsByTagName('input');
        var oName=aInput[0];
        var pwd=aInput[1];
        var pwd2=aInput[2];
        var pwd3=aInput[3];
        var aP=document.getElementsByTagName('p');
        var name_msg=aP[2];
        var pwd_msg=aP[3];
        var pwd2_msg=aP[4];
        var pwd3_msg=aP[5];
        var count=document.getElementById('count');
        var aEm=document.getElementsByTagName('em');
        var name_length=0;

        <!--匹配非法字符-->


        //用户名
        oName.onfocus=function(){
            name_msg.style.display="block";
            name_msg.innerHTML='<i class="ati"></i>5-20个字符，一个汉字为两个字符';
        }
        oName.onkeyup=function(){
            count.style.display="block";
            name_length=getLength(this.value);
            count.innerHTML=name_length+"个字符";
            if(name_length==0){
                count.style.display="none";
            }
        }
        oName.onblur=function(){
            //含有非法字符
            var re=/[^\w\u4e00-\u9fa5]/g;
            if(re.test(this.value)){
                name_msg.innerHTML='<i style="display:inline-block;width:25px;height:20px;vertical-align:middle;background:url(img/busy.png)no-repeat;"></i>含有非法字符！';
            }
            //不能为空
            else if((this.value)==""){
                name_msg.innerHTML='<i style="display:inline-block;width:25px;height:20px;vertical-align:middle;background:url(img/busy.png)no-repeat;"></i>不能为空！';
            }
            //长度超过25个字符
            else if(name_length>20){
                name_msg.innerHTML='<i style="display:inline-block;width:25px;height:20px;vertical-align:middle;background:url(img/busy.png)no-repeat;"></i>长度不能超过20个字符！';
            }
            //长度少于6个字符
            else if(name_length<5){
                name_msg.innerHTML='<i style="display:inline-block;width:25px;height:20px;vertical-align:middle;background:url(img/busy.png)no-repeat;"></i>长度不能少于5个字符！';
            }
            //OK!
            else{
                name_msg.innerHTML='<i style="display:inline-block;width:25px;height:20px;vertical-align:middle;background:url(img/check.png)no-repeat;"></i>OK！';
            }
        }
        //邮箱
        pwd.onfocus=function(){
            pwd_msg.style.display="block";
            pwd_msg.innerHTML='<i class="ati"></i>邮箱格式应为xxx@xxx.xxx';
        }
        pwd.onkeyup=function(){
        }
        pwd.onblur=function(){
            var myreg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/g;
            if(!myreg.test(this.value)){
                pwd_msg.innerHTML='<i style="display:inline-block;width:25px;height:20px;vertical-align:middle;background:url(img/busy.png)no-repeat;"></i>请输入正确的邮箱格式！';
            }
            //OK!
            else{
                pwd_msg.innerHTML='<i style="display:inline-block;width:25px;height:20px;vertical-align:middle;background:url(img/check.png)no-repeat;"></i>OK！';
            }
        }
        //密码
        pwd2.onfocus=function(){
            pwd2_msg.style.display="block";
            pwd2_msg.innerHTML='<i class="ati"></i>5-16个字符';
        }
        pwd2.onkeyup=function(){
            //大于5个字符中
            if(this.value.length>5){
                aEm[1].className="active";
                pwd3.removeAttribute("disabled");//去掉该属性
                pwd3_msg.style.display="block";

            }
            else{
                aEm[1].className="";
                pwd3.setAttribute("disabled");
                pwd3_msg.style.display="none";
            }
            //大于10个字符强
            if(this.value.length>10){
                aEm[2].className="active";
            }
            else{
                aEm[2].className="";
            }
        }
        pwd2.onblur=function(){
            var m=findStr(pwd2.value,pwd2.value[0]);

            //不能为空
            if(this.value==""){
                pwd2_msg.innerHTML='<i style="display:inline-block;width:25px;height:20px;vertical-align:middle;background:url(img/busy.png)no-repeat;"></i>不能为空！';
            }
            //不能用相同字符
            else if(m==this.value.length){
                pwd2_msg.innerHTML='<i style="display:inline-block;width:25px;height:20px;vertical-align:middle;background:url(img/busy.png)no-repeat;"></i>不能使用相同字符！';
            }
            //长度应为5-16字符
            else if(this.value.length<5||this.value.length>16){
                pwd2_msg.innerHTML='<i style="display:inline-block;width:25px;height:20px;vertical-align:middle;background:url(img/busy.png)no-repeat;"></i>长度应为5-16个字符！';
            }
            //OK
            else{
                pwd2_msg.innerHTML='<i style="display:inline-block;width:25px;height:20px;vertical-align:middle;background:url(img/check.png)no-repeat;"></i>OK！';
            }
        }

        //确认密码
        pwd3.onblur=function(){
            if(this.value!=pwd2.value){
                pwd3_msg.innerHTML='<i style="display:inline-block;width:25px;height:20px;vertical-align:middle;background:url(img/busy.png)no-repeat;"></i>两次输入密码不一致！';
            }
            else{
                pwd3_msg.innerHTML='<i style="display:inline-block;width:25px;height:20px;vertical-align:middle;background:url(img/check.png)no-repeat;"></i>OK！';
            }
        }

    });

    function getLength(str){
        <!--把双字节的变成xx-->
        return str.replace(/[^\x00-xff]/g,"xx").length;
    }

    function findStr(str,n){
        var tmp=0;
        for(var i=0;i<str.length;i++){
            if(str.charAt(i)==n){
                tmp++;
            }
        }
        return tmp;
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
        .dibu a{
            color:#3C3C3C;
            text-decoration:none;
            font-size:17px;
            font-weight:700;
            display:block;
        }
        form div{overflow:hidden;}
        form div label{float:left;}
        form div label .text{width:230px;height:26px;padding:0 2px;border:1px solid #ccc;margin-left:10px;}
        form div label b{font-weight:normal;font-size:12px;color:#ccc;display:none;margin-left:100px;}
        form div span{display:inline-block;width:80px;text-align:right;}
        .msg{margin-left:5px;color:#999;float:left;display:none;}
        .msg i{display:inline-block;width:25px;height:20px;vertical-align:middle;background:url(img/light.png)no-repeat;}
        form div em{display:inline-block;font-size:12px;text-align:center;color:#fff;vertical-align:middle;font-style:normal;width:53px;height:15px;background:#ffd099;position:relative;z-index:999;}
        form div .active{background-color:#ff6600;}
    </style>
</head>

<body>
<!--灰色导航栏-->
<div class="hui">
    <div class="daohang">
    <div class="daohang1"><a href="{{url('index')}}">首页</a></div>
    @if(Session::get('username'))
    <div style="position:absolute;margin-left:50px;"><a href="{{url('personal_center')}}">你好{{Session::get('username')}}</a></div>
    <div style="position:absolute;margin-left:130px;"><a href="{{url('logout')}}">退出登录</a></div>
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
<div class="rongqi" style="border:0px solid red;width:1024px;top:20px;height:800px;position:relative;margin:0 auto;cursor:default;">
    <!--二维码-->
    <div style="width:300px;height:100px;border:0px solid green;">
        <img src="../img/taologo.jpg" style="width:160px;">
        <div style="background:#DEDEDE;width:1px;height:58px;margin-left:170px;margin-top:-65px;"></div>
        <p style="color:#666666;font-size:27px;margin-left:185px;margin-top:-40px;">用户注册</p>
    </div>
    <!--注册-->
    <div style="width:650px;height:400px;border:1px solid white;margin-left:200px;margin-top:20px;">
        <p style="color:#8888A5;font-size:17px;font-weight:700;margin-left:30px;">邮箱注册</p>
        <div style="width:100%;height:1px;background:#CDCFD1;"></div>
        <div class="zhuce" style="border:0px solid green;width:700px;height:250px;margin-left:30px;margin-top:40px;">
            <form action="register_check" method="post">
               <input type='hidden' name='_token' value='{{csrf_token()}}'>
                <div><label><span style="font-size:16px;">用户名</span>
                        <input type="text" name="nickName" class="text"></label><p class="msg"><i class="ati"></i>5-25个字符，一个汉字为两个字符</p>
                </div>
                <div><label><span></span><b id="count">0个字符</b></label></div>
                <div style="margin-bottom:5px;"><label><span style="font-size:16px;">电子邮箱</span>
                        <input type="text" name="email" class="text"></label><p class="msg"><i class="ati"></i>请输入正确的邮箱格式</p>
                </div>
                <div style="margin-bottom:5px;"><label><span style="font-size:16px;">密码</span>
                        <input type="password"  name="password" class="text"></label><p class="msg" ><i class="ati"></i>密码由字母、数字组成</p>
                </div>
                <div style="margin:3px 0 10px 0"><label><span></span><em class="active" style="margin-left:15px;">弱</em><em>中</em><em>强</em></label></div>
                <div style="margin-bottom:5px;"><label><span style="font-size:16px;">确认密码</span>
                        <input type="password" name="checkpassword" class="text"></label><p class="msg"><i class="ati"></i>请再输入一次</p>
                </div>

                <div style="margin-bottom:5px;"><label><span style="font-size:16px;">我的身份</span><span>我是卖家</span><input type="radio" name="maijia" value="1" /><span>我是买家</span><input type="radio" name="maijia" value="2" /></label>
				</div>

                {{--<div style="margin-bottom:5px;"><label><span style="font-size:16px;">验证码</span></label>--}}
                    {{--&nbsp&nbsp&nbsp<input type="text" name="name"/><a href="#" alt="看不清？"><img src="../php/yanzheng.php" style="cursor:hand" onclick="this.src='../php/yanzheng.php?'+new Date().getTime();" alt="看不清"></a>--}}
                {{--</div>--}}

                <input type="checkbox" checked="checked" name="chkagreement" style="margin-left:93px;"/>
                <span>我已阅读并同意《淘兼职协议》</span>
                </br></br>
                <input type="submit" name="submit" value="立即注册" class="btn btn-warning" style="background:#FF4400;margin-left:93px;">
                <span>已有帐号？</span>
                <a href="/login">去登录</a>
            </form>
        </div>

  @if($errors->any())
<ul class='alert alert-danger'>
@foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
</ul>
@endif
    </div>



    <!--底部-->
    <div class="dibu" style="width:100%;height:140px;border:1px solid white;position:absolute;top:550px;">
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
