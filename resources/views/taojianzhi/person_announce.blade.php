<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>发布信息</title>
    <script src="../js/laydate/laydate.js"></script>
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
		
		$("#car_type_list").dblclick(function(){
                var s_val = this.value;
                if(s_val == '') return;
                $(this).children("option[value='"+s_val+"']").remove();
                $("#car_type").append('<option value="'+s_val+'">'+s_val+'</option>');
                //以下代码作用是 将选择到的值备份到一个id为car_type_val的input中，可以进行传值
                $("#car_type_val").val($("#car_type_val").val()+s_val+"@");
            });

            $("#car_type").dblclick(function(){
                var s_val = this.value;
                if(s_val == '') return;
                $(this).children("option[value='"+s_val+"']").remove();
                $("#car_type_list").append('<option value="'+s_val+'">'+s_val+'</option>');

                var now_val = $("#car_type_val").val();
                now_val = now_val.replace(s_val+"@","");
                $("#car_type_val").val(now_val);

            });

    });


    </script>
    <style type="text/css">
        body{
            font-family:微软雅黑;
            margin:0px;
            padding:0px;
            font-size:14px;
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
        p,form,ul,dl,ol,li,dt,dd,h1,h2,h3,h4{margin:0;padding:0;list-style:none;}
        select,input{font:100% Tahoma,Helvetica,Arial,sans-serif;vertical-align:middle;}
        i{/*float:left;*/line-height:29px;vertical-align:middle;font-family:Tahoma;font-style:normal;color:#EE2200;padding-right:10px;}
        .textstyle{float:left;display:inline;height:22px;line-height:22px;padding:5px 10px;vertical-align:middle;border:1px solid;border-color:#ccc #e8e8e8 #e8e8e8 #ccc;margin-right:5px;}
        .selestyle{float:left;height:33px;padding:5px 10px;vertical-align:middle;border:1px solid;border-color:#ccc #e8e8e8 #e8e8e8 #ccc;margin-right:5px;}
        #topinfomsg{ color:#333; padding:10px 10px 10px 34px; background:#FFFBCC url(../img/psearch.gif) no-repeat 0px -173px; line-height:20px; margin:0px 10px 10px; border:1px solid #f5eddc; position:relative; }

        .fe_htmleditor .toolbar {background:#E7F3FF;padding:1px 0;height:22px;/* width:350px!important*/}
        .fe_htmleditor .toolbar button {display:inline-block;*float:left;*display:block;*zoom:1;background: none no-repeat scroll 0 0 transparent;vertical-align:top;color: #333333;cursor: pointer;height: 18px;width: 18px;border:1px solid #e7f3ff;overflow: visible;background-image:url('../img/htmleditor.png');margin:2px 0px;}
        .fe_htmleditor .toolbar button.hover {border:1px solid;border-color:#fff #999 #999 #fff}
        .fe_htmleditor .toolbar button.btnSelect {border:1px solid;border-color:#999 #fff #fff #999}
        .fe_htmleditor .toolbar .bold, .fe_htmleditor .toolbar .bold:hover {background-position: -1px -1px}
        .fe_htmleditor .toolbar .underline, .fe_htmleditor .toolbar .underline:hover {background-position: -37px -2px}
        .fe_htmleditor .toolbar .forecolor, .fe_htmleditor .toolbar .forecolor:hover {background-position: -101px -1px}
        .fe_htmleditor .toolbar .fontsize, .fe_htmleditor .toolbar .fontsize:hover {background-position: -246px -1px}
        .fe_htmleditor .editor p, .fe_htmleditor .editor div {margin:5px 0px;display:block;width:344px}

        .box_table{width:100%;margin-top:10px;font-size:14px;}
        .box_table th{width:120px;font-weight:normal;text-align:right;padding:7px 10px 7px 0;height:34px;line-height:34px;color:#585858;white-space:nowrap;vertical-align:top;}
        .box_table th span{float:right;}
        .box_table td{padding:7px 0;color:#333;vertical-align:middle;}
        .action_color{ border:1px solid #1d95f6!important; background:#feffe3  left top repeat-x;}
        .wrong_color{  border:1px solid #ff9a9a!important; background:#feffe3  left top repeat-x;}
    </style>
</head>
<body  style=" padding-right: 16px;">
<div class="hui">
    <div class="daohang">
        <div class="daohang1"><a href="{{url('index')}}">首页</a></div>
        <div class="daohang2"><a href="{{url('login')}}">登录</a></div>
        <div class="daohang3"><a href="{{url('register')}}">注册</a></div>
        <div class="daohang4"><a href="#">我的淘兼职</a></div>
        <div class="daohang5"><a href="#">关于我们</a></div>

        <div class="daohang4tan"><a href="{{url('personal_center')}}">个人中心</a><a href="#">添加修改简历</a><a href="#">查看招聘信息</a></div>
        <div class="daohang5tan"><a href="#">网站简介</a><a href="#">组织结构</a><a href="#">发展历程</a></div>
    </div>
</div>
<div class="rongqi" style="border:0px solid red;width:1024px;top:20px;height:1100px;position:relative;margin:0 auto;cursor:default;">
    <img src="../img/taologo.jpg" style="width:160px;margin-left: 150px;margin-top: 10px;">
    <div style="background:#DEDEDE;width:1px;height:58px;margin-left:330px;margin-top:-65px;"></div>
    <div style="margin-left: 350px;margin-top: -50px;font-size: 20px;">职位上架</div>
    <p style="margin-left: 160px;margin-top: 30px;font-weight: 700;">&nbsp</p>
    <div style="margin-left: 160px;border-top: 2px solid #eaeaea;background:#EAEAEA;width: 824;top:-10px;height:850px;position:relative;padding-left:200px;">
        <div >

             <input type=hidden name='_token' value='{{csrf_token()}}'>
                <br>
                <div id="topinfomsg" style="margin-left:-190px;">1、同一类别请勿发布重复信息，严禁向应聘者收费，否则删除信息，并锁定账户。<br>2、职位描述中不能包含电话、QQ、邮箱等联系方式，否则删除信息！</div>
            <form action='/person_announce_check/{{$data}}' method="post">
                <table class="box_table">
                    <tbody>
                    <tr>
                        <th>
                            <span><i>*</i>兼职名称</span>
                        </th>
                        <td>
                            <div class="contedit zidx101">
                                <input class="textstyle" name="name" id="jobName" maxlength="12" name="Title" value=""  type="text">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th><span><i>*</i>招聘人数</span></th>
                        <td>
                            <div>
                                <input type="text" name="count" id="zhaopinrenshu" value="" maxlength="3" class="textstyle"> <span class="lh34">人</span>
                            </div>
                            <span id="zhaopinrenshu_Tip"></span>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span><i>*</i>上岗时间</span>
                        </th>
                        <td id="period">
                        <span class="inputnor">
                        <input placeholder="开始日期" name="start_time" class="laydate-icon" onclick="laydate()">
                        </span>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span><i>*</i>每日工时</span>
                        </th>
                        <td>
                        <div>
          				<input type="hidden" name="work_time" value="" id="car_type_val" />
       		    			<div class="xiala" style="width:160px;height:220px;">
            				<select multiple id="car_type_list" style="width:120px;height:220px;">
            				<option value="07:00~08:00">07:00~08:00</option>
            				<option value="08:00~09:00">08:00~09:00</option>
            				<option value="09:00~10:00">09:00~10:00</option>
            				<option value="10:00~11:00">10:00~11:00</option>
            				<option value="11:00~12:00">11:00~12:00</option>
            				<option value="12:00~13:00">12:00~13:00</option>
            				<option value="13:00~14:00">13:00~14:00</option>
            				<option value="14:00~15:00">14:00~15:00</option>
            				<option value="15:00~16:00">15:00~16:00</option>
            				<option value="16:00~17:00">16:00~17:00</option>
            				<option value="17:00~18:00">17:00~18:00</option>
            				<option value="18:00~19:00">18:00~19:00</option>
            				<option value="19:00~20:00">19:00~20:00</option>
            				<option value="20:00~21:00">20:00~21:00</option>
            				<option value="21:00~22:00">21:00~22:00</option>
            				</select>
            				</div>
    						<div class="xiala2" style="margin-left:180px;margin-top:-220px;width:160px;height:220px;">
            				<select multiple id="car_type" style="width:120px;height:220px;">
            				</select>
           				    </div>
          			    </div> 
                        
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span><i>*</i>持续时间</span>
                        </th>
                        <td>
                            <div>
                                <input class="textstyle" name="during_time" maxlength="12" value=""  type="text">天
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span><i>*</i>薪资水平</span>
                        </th>
                        <td>
                            <span>
                                <input class="textstyle" id="wage" name="wage" f="{0}"  maxlength="3" type="text">
                            </span>
                            <span>
                                元/小时

                            </span>
                            <span id="probSala_Tip"></span>
                        </td>
                    </tr>
                   
                    <tr>
                        <th>
                            <span><i>*</i>工作地点</span>
                        </th>
                        <td>
                            <div style="position:relative;float:left;display:inline;vertical-align:middle;z-index:81;">
                                <input type="text" name="place" class="textstyle" value="" except="" maxlength="10">
                            </div>
                            <span id="goblianxiren_Tip"></span>
                        </td>
                    </tr>
                    
                    <tr>
                        <th>
                            <span><i>*</i>岗位职责</span>
                        </th>
                        <td>
                            <div >

<textarea name="duty" style="width:400px;height:78px;border:0px;font-size:19px; " >
</textarea>
                            </div><!--框-->
                        </td>
                    </tr>
                    
                    <tr>
                        <th>
                            <span><i>*</i>招聘要求</span>
                        </th>
                        <td>
                            <div >

<textarea name="requirement" style="width:400px;height:78px;border:0px;font-size:19px; " >
</textarea>
                            </div><!--框-->
                        </td>
                    </tr>
                   
                    </tbody>
                </table>
                <br>
                <p style="margin-left: 120px;"><input type="submit" value="提交"style="border:0px;border-radius:5px;background-color: #FF5500;height: 40px;width: 170px;font-size: 20px;color: #ffffff"></p>
            </form>
        </div>
    </div>
</div>


</body>
</html>