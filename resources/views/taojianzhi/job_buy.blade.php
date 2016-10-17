<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="GBK">
    <title>岗位查看</title>
<script type="text/javascript" src="js/jquery-1.11.3.min.js" /></script>
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

            $(".n1tan").show();
            $(".n2tan").hide();
            $(".n3tan").hide();

            $("#n1").click(function(){
                $(".n2tan").hide();
                $(".n3tan").hide();
                $(".n1tan").show();
                $("#n1").css({"background":"white","color":"#FF5500","border-top":"2px solid #FF5500"});
                $("#n2").css({"background":"#E5E5E5","color":"black","border-top":"1px solid #E5E5E5"});
                $("#n3").css({"background":"#E5E5E5","color":"black","border-top":"1px solid #E5E5E5"});

            });
            $("#n2").click(function(){
                $(".n1tan").hide();
                $(".n3tan").hide();
                $(".n2tan").show();
                $("#n2").css({"background":"white","color":"#FF5500","border-top":"2px solid #FF5500"});
                $("#n1").css({"background":"#E5E5E5","color":"black","border-top":"1px solid #E5E5E5"});
                $("#n3").css({"background":"#E5E5E5","color":"black","border-top":"1px solid #E5E5E5"});
            });
            $("#n3").click(function(){
                $(".n2tan").hide();
                $(".n1tan").hide();
                $(".n3tan").show();
                $("#n3").css({"background":"white","color":"#FF5500","border-top":"2px solid #FF5500"});
                $("#n1").css({"background":"#E5E5E5","color":"black","border-top":"1px solid #E5E5E5"});
                $("#n2").css({"background":"#E5E5E5","color":"black","border-top":"1px solid #E5E5E5"});
            });
        });
    </script>
    <style type="text/css">
        a{
            text-decoration: none;
        }
        a:hover{
            text-decoration: underline;
        }
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


ul{
    margin-top:-40px;
    padding: 0;
}
li{
    list-style: none;
}
.nav{
    height: 50px;
    background:#f6f6f6;
    border: 1px solid #E5E5E5;
}
.nav li{
    float: left;
}

#n1{
    width:120px;
    border-right: 1px solid #E5E5E5;
    text-align: center;
    line-height: 50px;
    font-size: 18px;
    background: #ffffff;
    color: #FF5500;
    border-top: 2px solid #FF5500;

}
        #n2{
            width:120px;
            border-right: 1px solid #E5E5E5;
            text-align: center;
            line-height: 50px;
            font-size: 18px;

        }
        #n3{
            width:120px;
            border-right: 1px solid #E5E5E5;
            text-align: center;
            line-height: 50px;
            font-size: 18px;

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
        .smalltu{
            margin-top: 20px;
            margin-left: 20px;
        }
        .smalltu li{
            float:left;
            padding-right: 10px;;
        }
        .smalltu li:hover{
            border:3px #000000 solid;
            width:70px;
            height: 80px;
            margin-right: 10px;
        }
       .fx{
           width: 15px;
           height: 15px;
           margin-left: 20px;
           margin-top: 20px;

       }
        .shoucang{
            width: 15px;
            height: 15px;
            margin-left: 40px;
            margin-top: 20px;

     }
        .jubao{
            float: right;
            margin-top: 20px;
            color: gray;
        }
       .jiage{
           width: 500px;
           height: 60px;
           background:  #FFF2E8;
       }
        .jiage span{
          padding-top: 20px;
            padding-left: 10px;
            position: absolute;
        }
        </style>
</head>
<body>
<!--灰色导航栏-->
<div class="hui">
    <div class="daohang">
        <div class="daohang1"><a href="{{url('index')}}">首页</a></div>
        <div class="daohang2"><a href="{{url('login')}}">登录</a></div>
        <div class="daohang3"><a href="{{url('register')}}">注册</a></div>
        <div class="daohang4"><a href="#">我的淘兼职</a></div>
        <div class="daohang5"><a href="#">关于我们</a></div>

        <div class="daohang5tan"><a href="#">网站简介</a><a href="#">组织结构</a><a href="#">发展历程</a></div>
    </div>
</div>
<div class="rongqi" style="border:0px solid red;width:1024px;top:60px;height:1100px;position:relative;margin:0 auto;cursor:default;">
    <!--头部-->
<div style="width:300px;height:100px;border:0px solid green;position:absolute;">
<img src="http://localhost:8000/img/taologo.jpg" style="width:160px;">
<div style="background:#DEDEDE;width:1px;height:58px;margin-left:170px;margin-top:-65px;"></div>
<p style="color:#666666;font-size:27px;margin-left:190px;margin-top:-48px;">职位查看</p>
</div><!--头部-->


    <div class="middle"style="border: 0px solid blue;width:1024px;height:1080px;top:80px;position:absolute;">
       <div style="margin-left: 10px;top:10px;position: absolute;">
           <img src="http://localhost:8000/img/zhunbei.jpg" width="390px;"height="390px">
           <ul class="smalltu">
               <li><img src="http://localhost:8000/img/weilai.jpg" width="80px;"height="80px"></li>
               <li><img src="http://localhost:8000/img/weilai.jpg" width="80px;"height="80px"></li>
               <li><img src="http://localhost:8000/img/weilai.jpg" width="80px;"height="80px"></li>
               <li><img src="http://localhost:8000/img/weilai.jpg" width="80px;"height="80px"></li>
           </ul>
           <img src="http://localhost:8000/img/fx.png"class="fx">
           <span style="color: gray">分享</span>
           <img src="http://localhost:8000/img/shoucang.png"class="shoucang">
           <span ><a href="#"style="color: gray">收藏职位</a>（200人气）</span>
           <span class="jubao">举报</span>
       </div>
       <div style="float:right;right:80px;position: absolute;top:-10px;border:0px solid red;">
           <p style="font-size: 22px;color:black" ><b>{{$outputs->company_name}}发布的职位</b></p>
           <div class="jiage">
               <span>价格</span>
               <span style="color: red;padding-left: 80px;font-size: 25px;text-align: center;line-height: 20px;"><b>&yen{{$outputs->price}}</b></span>
               <span style="padding-left:370px;padding-top: 10px">52</span>
               <span style="padding-left:350px;padding-top: 30px">累计评论</span>
               <span style="padding-left:450px;padding-top: 10px">2</span>
               <span style="padding-left:430px;padding-top: 30px">交易成功</span>
           </div>
           <div style="margin-top: 30px;">
               <p>工作岗位：{{$outputs->name}}</p>
           <p >工资：{{$outputs->salary}}</p>
           <p >招聘人数：{{$outputs->number}}</p>
           <p >工作地：{{$outputs->address}}</p>
           <p>工作时间：{{$outputs->time}}</p>

           <!--<p>我申请的时间：</p>
           <div style="width:350px;height:50px;margin-left:120px;margin-top:-40px;border:0px solid red;">
           <select>
           <option value="n1">2016</option>
           <option value="n2">2017</option>
           </select>
           <span>年</span>

           <select>
           <option value="a1">1</option>
           <option value="a2">2</option>
           <option value="a3">3</option>
           <option value="a4">4</option>
           <option value="a5">5</option>
           <option value="a6">6</option>
           <option value="a7">7</option>
           <option value="a8">8</option>
           <option value="a9">9</option>
           <option value="a10">10</option>
           <option value="a11">11</option>
           <option value="a12">12</option>
           </select>
           <span>月</span>
            <select>
           <option value="b1">1</option>
           <option value="b2">2</option>
           <option value="b3">3</option>
           <option value="b4">4</option>
           <option value="b5">5</option>
           <option value="b6">6</option>
           <option value="b7">7</option>
           <option value="b8">8</option>
           <option value="b9">9</option>
           <option value="b10">10</option>
           <option value="b11">11</option>
           <option value="b12">12</option>
           <option value="b13">13</option>
           <option value="b14">14</option>
           <option value="b15">15</option>
           <option value="b16">16</option>
           <option value="b17">17</option>
           <option value="b18">18</option>
           <option value="b19">19</option>
           <option value="b20">20</option>
           <option value="b21">21</option>
           <option value="b22">22</option>
           <option value="b23">23</option>
           <option value="b24">24</option>
           <option value="b25">25</option>
           <option value="b26">26</option>
           <option value="b27">27</option>
           <option value="b28">28</option>
           <option value="b29">29</option>
           <option value="b30">30</option>
           <option value="b31">31</option>
           </select>
           <span>日</span>
           <span>~</span>
           <br>
            <select>
           <option value="m1">2016</option>
           <option value="m2">2017</option>
           </select>
           <span>年</span>

           <select>
           <option value="c1">1</option>
           <option value="c2">2</option>
           <option value="c3">3</option>
           <option value="c4">4</option>
           <option value="c5">5</option>
           <option value="c6">6</option>
           <option value="c7">7</option>
           <option value="c8">8</option>
           <option value="c9">9</option>
           <option value="c10">10</option>
           <option value="c11">11</option>
           <option value="c12">12</option>
           </select>
           <span>月</span>
            <select>
           <option value="m1">1</option>
           <option value="m2">2</option>
           <option value="m3">3</option>
           <option value="m4">4</option>
           <option value="m5">5</option>
           <option value="m6">6</option>
           <option value="m7">7</option>
           <option value="m8">8</option>
           <option value="m9">9</option>
           <option value="m10">10</option>
           <option value="m11">11</option>
           <option value="m12">12</option>
           <option value="m13">13</option>
           <option value="m14">14</option>
           <option value="m15">15</option>
           <option value="m16">16</option>
           <option value="m17">17</option>
           <option value="m18">18</option>
           <option value="m19">19</option>
           <option value="m20">20</option>
           <option value="m21">21</option>
           <option value="m22">22</option>
           <option value="m23">23</option>
           <option value="m24">24</option>
           <option value="m25">25</option>
           <option value="m26">26</option>
           <option value="m27">27</option>
           <option value="m28">28</option>
           <option value="m29">29</option>
           <option value="m30">30</option>
           <option value="m31">31</option>
           </select>
           <span>日</span>
           <br>
           <span>每周</span>
           <input name="week" type="checkbox" value="" />一
           <input name="week" type="checkbox" value="" />二
           <input name="week" type="checkbox" value="" />三
           <input name="week" type="checkbox" value="" />四
           <input name="week" type="checkbox" value="" />五
           <input name="week" type="checkbox" value="" />六
           <input name="week" type="checkbox" value="" />日
		   <br>
		   <span>每天</span>

           <select>
           <option value="s7">7:00</option>
           <option value="s8">8:00</option>
           <option value="s9">9:00</option>
           <option value="s10">10:00</option>
           <option value="s11">11:00</option>
           <option value="s12">12:00</option>
           <option value="s13">13:00</option>
           <option value="s14">14:00</option>
           <option value="s15">15:00</option>
           <option value="s16">16:00</option>
           <option value="s17">17:00</option>
           <option value="s18">18:00</option>
           <option value="s19">19:00</option>
           <option value="s20">20:00</option>
           <option value="s21">21:00</option>
           <option value="s22">22:00</option>
		   <option value="s23">23:00</option>
           <option value="s24">24:00</option>
           </select>
           <span>~</span>
           <select>
           <option value="t7">7:00</option>
           <option value="t8">8:00</option>
           <option value="t9">9:00</option>
           <option value="t10">10:00</option>
           <option value="t11">11:00</option>
           <option value="t12">12:00</option>
           <option value="t13">13:00</option>
           <option value="t14">14:00</option>
           <option value="t15">15:00</option>
           <option value="t16">16:00</option>
           <option value="t17">17:00</option>
           <option value="t18">18:00</option>
           <option value="t19">19:00</option>
           <option value="t20">20:00</option>
           <option value="t21">21:00</option>
           <option value="t22">22:00</option>
		   <option value="t23">23:00</option>
           <option value="t24">24:00</option>
           </select>
            </div>-->
          </div>
           <button style="position: absolute;top:440px;width: 150px;height: 40px;font-size: 18px;background:#FFE4D0;border:1px solid #E5511D;"><a href="orderconfirm.html" style="color:#E5511D;"><b>立即购买</b></a></button>
           <button style="position: absolute;top:440px;width: 200px;height: 40px;font-size: 18px;right: 80px;background:#F22D00;border:0px;"><a href="{{url('shopping_car')}}" style="color:white;background:url(img/gouwuche.png)left center no-repeat "><span style="padding-left: 30px;">加入购物车</span></a></button>
           <p style="margin-top: 20px;">选择支付方式：</p>
          <div style="margin-top:-10px;margin-left:0px;">
           <img src="http://localhost:8000/img/zhifu1.png">
           <span>快捷支付</span>
           <img src="http://localhost:8000/img/zhifu2.png">
           <span>信用卡支付</span>
           <img src="http://localhost:8000/img/zhifu3.png">
           <span>余额宝支付</span>
           <img src="http://localhost:8000/img/zhifu4.png">
           <span>蚂蚁花呗</span>
          </div>
       </div>

       <div style="border-top:3px solid black;top:620px;position: absolute;width: 800px;left: 50px; ">
         <ul class="nav">
             <li id="n1">职位详情</li>
             <li id="n2">累计评价<span style="color: #FF5500">&nbsp;52</span></li>
             <li id="n3">联系客服</li>
         </ul>
         <div class="n1tan" style="border: 0px solid blue;width: 800px;left: 50px;height:450px;">
             <p style="font-size: 18px;"><b>岗位职责：</b></p>
             <p>1.重视调动学生学习积极性、主动性，重点突出，讲究实效、注重启发、培养兴趣；</p>
             <p>2.辅导时从易到难，把握梯度，学生的作业认真批改、讲评；</p>
             <p>3.具有良好的师德和强烈的工作责任心;</p>
             <p style="font-size: 18px;"><b>薪资待遇：</b></p>
             <p>提供晚餐</p>

         </div>
         <div class="n3tan" style="border: 0px solid yellow;width: 800px;left: 50px;height:100px;">
             <table width="800" height="150" border="2" frame="hsides"rules="rows">
                 <tr>
                     <td>客服代表</td>
                     <td>员工编号</td>
                     <td>手机号码</td>
                     <td> QQ </td>
                 </tr>
                 <tr>
                     <td>王海</td>
                     <td>001</td>
                     <td>13545332222</td>
                     <td>456677</td>
                 </tr>
                 <tr>
                     <td>李梅</td>
                     <td>002</td>
                     <td>1543345676</td>
                     <td>6766544</td>
                 </tr>
                 <tr>
                     <td>张杰</td>
                     <td>112</td>
                     <td>15899875566</td>
                     <td>145755677</td>
                 </tr>
             </table>
         </div>
       </div>
    </div>
</div>

</body>
</html>