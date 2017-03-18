<!DOCTYPE html>
<html>
<head lang="en">
<meta charset="utf-8">
<title>简历填写</title>
<script type="text/javascript" src="js/jquery-1.11.3.min.js" /></script><script type="text/javascript" src="js/PCASClass.js"></script>
<script language="javascript" type="text/javascript" src="js/My97DatePicker/WdatePicker.js"></script>
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

        });


var subsmallclass=new Array();
subsmallclass[0]=new Array("浙江省","杭州");
subsmallclass[1]=new Array("浙江省","绍兴");
subsmallclass[2]=new Array("浙江省","宁波");
subsmallclass[3]=new Array("浙江省","嘉兴");
subsmallclass[4]=new Array("浙江省","湖州");
subsmallclass[5]=new Array("浙江省","温州");
subsmallclass[6]=new Array("浙江省","金华");
subsmallclass[7]=new Array("浙江省","舟山");
subsmallclass[8]=new Array("浙江省","丽水");
subsmallclass[9]=new Array("江苏省","南京");
subsmallclass[10]=new Array("江苏省","苏州");
subsmallclass[11]=new Array("江苏省","无锡");
subsmallclass[12]=new Array("江苏省","常州");
subsmallclass[13]=new Array("江苏省","镇江");
subsmallclass[14]=new Array("江苏省","南通");
subsmallclass[15]=new Array("江苏省","扬州");
subsmallclass[16]=new Array("河北省","石家庄");
subsmallclass[17]=new Array("河北省","保定");
subsmallclass[18]=new Array("河北省","昌州");
subsmallclass[19]=new Array("河北省","承德");
subsmallclass[20]=new Array("河北省","定州");
subsmallclass[21]=new Array("河北省","衡水");
subsmallclass[22]=new Array("河北省","秦皇岛");
subsmallclass[23]=new Array("河北省","唐山");
subsmallclass[24]=new Array("河北省","张家口");
subsmallclass[25]=new Array("河北省","邢台");
subsmallclass[26]=new Array("河北省","赵县");
subsmallclass[27]=new Array("河南省","郑州");
subsmallclass[28]=new Array("河南省","安阳");
subsmallclass[29]=new Array("河南省","开封");
subsmallclass[30]=new Array("河南省","洛阳");
subsmallclass[31]=new Array("河南省","南阳");
subsmallclass[32]=new Array("河南省","平顶山");
subsmallclass[33]=new Array("河南省","信阳");
subsmallclass[34]=new Array("河南省","许昌");
subsmallclass[35]=new Array("河南省","周口");
subsmallclass[36]=new Array("河南省","新乡");
subsmallclass[37]=new Array("河南省","三门峡");




function addsmallclass(bigclassvalue,smallclassvalue){
    document.getElementById("smclassname").length=0;
    document.getElementById("smclassname").options[0]=new Option("请选择城市","")
    for (var i=0;i<subsmallclass.length;i++){
        if (subsmallclass[i][0]==bigclassvalue){
            document.getElementById("smclassname").options[document.getElementById("smclassname").length]=new Option(subsmallclass[i][1],subsmallclass[i][1]);
        }
    }
    for (var J=0;J<document.getElementById("smclassname").length;J++){
        if (document.getElementById("smclassname").options[J].value==smallclassvalue){
            document.getElementById("smclassname").options[J].selected=true;
        }
    }
}

function isDate(dateStr)
{
    var datePat = /^(\d{4})(\-)(\d{1,2})(\-)(\d{1,2})$/;
    var matchArray = dateStr.match(datePat);
    if (matchArray == null) return false;
    var month = matchArray[3];
    var day = matchArray[5];
    var year = matchArray[1];
    if (month < 1 || month > 12) return false;
    if (day < 1 || day > 31) return false;
    if ((month==4 || month==6 || month==9 || month==11) && day==31) return false;
    if (month == 2)
    {
        var isleap = (year % 4 == 0 && (year % 100 != 0 || year % 400 == 0));
        if (day > 29 || (day==29 && !isleap)) return false;
    }
    return true;
}

</script>
<style type="text/css">
    body{
        font-family:微软雅黑;
        margin:0px;
        padding:0px;
        background-color:#FFF8DC;
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
    .jianlixq{
        margin-left: 180px;
        margin-top: 20px;
    }
    .jianlixq  input{
        border-radius: 0px;
        margin-top: 20px;
        font-size: 18px;

    }
    .jianlixq select{
        margin-top: 20px;
        height: 40px;
        font-size: 18px;
    }
    .jianlixq table tr td input{
        margin-top: 10px;
        margin-left: 20px;
    }
    <!--
    td,input {
        font-family: Verdana, Arial, Helvetica, sans-serif;
        font-size: 12px;
    }
    -->
</style>
</head>
<body>
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

        <div class="daohang4tan"><a href="{{url('personal_resume')}}">个人信息</a><a href="#">添加修改简历</a><a href="#">查看招聘信息</a></div>
        <div class="daohang5tan"><a href="#">网站简介</a><a href="#">组织结构</a><a href="#">发展历程</a></div>
    </div>
</div>
<div class="rongqi" style="border:0px solid red;width:1024px;top:20px;height:1300px;position:relative;margin:0 auto;cursor:default;">
    <img src="img/taologo2.jpg" style="width:160px;margin-left: 150px;margin-top: 10px;">
    <div style="margin-left: 350px;margin-top: -50px;font-size: 20px;">你正在创建简历...</div>
    <form  method="post" action="complate_resume" enctype="multipart/form-data">
        <p style="margin-left: 160px;margin-top: 30px;font-weight: 700;font-size: 20px;">基本信息</p>
        <div style="margin-left: 160px;border-top: 2px solid #eaeaea;width: 824px;top:-10px;height:750px;position:relative;">
            <div class="jianlixq">
                &nbsp姓&nbsp&nbsp&nbsp&nbsp名：<input  type="text" style="width: 100px;height: 30px;" name="user_name">
                <input type="radio"name="sex" value="0">男
                <input type="radio"name="sex" value="1">女
                <div style="width:970px; margin:10px auto;">出生日期：<input id="d421" class="Wdate" type="text" onfocus="WdatePicker({skin:'whyGreen',maxDate:'%y-%M-%d'})" name="user_brith"/></div>
                &nbsp选择你的头像：<input type="file" style="width:970px; margin:10px auto;" name="user_head">
                &nbsp籍 &nbsp  &nbsp贯：
                <select id="Province" name="Province"></select>
       		    <select id="City" name="City"></select>
                <select id="Area" name="Area"></select>
                <script type="text/javascript">

              new PCAS("Province","City","Area","浙江省","杭州市","江干区")
               </script>
                <br>
                &nbsp学 &nbsp  &nbsp历：<select name=xueli>
                <option>高中以下</option>
                <option>高中</option>
                <option>中专/技校</option>
                <option>大专</option>
                <option>本科</option>
                <option>研究生</option>
                <option>硕士</option>
                <option>博士</option>
            </select>
                <br>
                {{--我的身份：<input type="radio"name=reg checked>在校学生--}}
                {{--<input type="radio"name=reg>社会人才--}}
                <br>
                {{--电子邮箱：<input type="text"style="height: 30px;">--}}
                {{--<br>--}}
                {{--手机号码：<input type="text"style="height: 30px;">--}}
                {{--<br>--}}
                {{--验证手机：<input type="text"style="height: 30px;width: 80px;">--}}
                {{--<a href="#"style="text-decoration:none;margin-left: 20px;">免费获取</a>--}}
                <br>
                空余时间：
                <table border="1"style="margin-left: 90px;border-color: #eaeaea;" cellpadding="0" cellspacing="0" style="border-collapse:collapse;"width="450" height="140">
                    <tr>
                        <th>&nbsp</th>
                        <th>星期一</th>
                        <th>星期二</th>
                        <th>星期三</th>
                        <th>星期四</th>
                        <th>星期五</th>
                        <th>星期六</th>
                        <th>星期日</th>
                    </tr>
                    <tr>
                        <th>上午</th>
                        <td ><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                    </tr>
                    <tr>
                        <th>下午</th>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                    </tr>
                </table>
                <br>
                自我介绍：<br>
                <textarea cols=60 rows=5 style="margin-left:90px;margin-top:-10px;sition: absolute" placeholder="说出你的亮点吧" name="user_introduction"></textarea>
            </div>
        </div>
        <p style="margin-left: 160px;margin-top: 30px;font-weight: 700;font-size: 20px;">求职意向</p>
        <div style="margin-left: 160px;border-top: 2px solid #eaeaea;width: 824px;top:-10px;height:550px;position:relative;margin-top: 25px;">
            <div class="jianlixq">
            简历标题：
            <input type="text"style="height: 30px;"placeholder="例：求职淘宝客服" name="resume_title">
            <br>
            职位类别：
            <input type="text"style="height: 30px;"placeholder="请输入"><br>
            期望薪资：<input type="text"style="height: 30px;width: 100px;">元/小时
            <br>
            求职地区：
                {{--<input type="text"style="height: 30px;width: 100px;"placeholder="请输入城市">--}}
                <select id="EProvince" name="EProvince"></select>
                <select id="ECity" name="ECity"></select>
                <select id="EArea" name="EArea"></select>
                <script type="text/javascript">

                    new PCAS("EProvince","ECity","EArea","浙江省","杭州市","江干区")
                </script>
            {{--<input type="text"style="height: 30px;width: 100px;"placeholder="请输入区域">--}}
            {{--<input type="text"style="height: 30px;width: 100px;"placeholder="请输入商圈">--}}
            <br>
            <p style="margin-left: 100px;"><input type="submit" value="保存并提交" style="background-color: #FF5500;height: 40px;width: 150px;font-size: 20px;color: #ffffff"></p>
            </div>
        </div>
    </form>



    </br>
    </br>
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
        <p style="margin-left:550px;">www.taojianzhi.com</br>网络版权归淘兼职所有</p>
    </div><!--底部-->

  
</body>
</html>