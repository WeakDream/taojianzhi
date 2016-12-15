<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>发布信息</title>
    <script src="../js/laydate/laydate.js"></script>
    <script type="text/javascript" src="../js/jquery-1.11.3.min.js" ></script>
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
        .file {
            position: relative;
            display: inline-block;
            background-image: url(../img/upload.png);
            border: 1px solid #99D3F5;
            border-radius: 4px;
            padding: 4px 12px;
            overflow: hidden;
            color: #1E88C7;
            text-decoration: none;
            text-indent: 0;
            line-height: 20px;
        }
        .file input {
            position: absolute;
            font-size: 50px;
            right: 0;
            top: 0;
            opacity: 0;
        }
        .file:hover {
            background: #AADFFD;
            border-color: #78C3F3;
            color: #004974;
            text-decoration: none;
        }
        p,form,ul,dl,ol,li,dt,dd,h1,h2,h3,h4{margin:0;padding:0;list-style:none;}
        select,input{font:100% Tahoma,Helvetica,Arial,sans-serif;vertical-align:middle;}
        i{/*float:left;*/line-height:29px;vertical-align:middle;font-family:Tahoma;font-style:normal;color:#EE2200;padding-right:10px;}
        .textstyle{float:left;display:inline;height:22px;line-height:22px;padding:5px 10px;vertical-align:middle;border:1px solid;border-color:#ccc #e8e8e8 #e8e8e8 #ccc;margin-right:5px;}
        .selestyle{float:left;height:33px;padding:5px 10px;vertical-align:middle;border:1px solid;border-color:#ccc #e8e8e8 #e8e8e8 #ccc;margin-right:5px;}


        .box_table{width:100%;margin-top:10px;font-size:14px;}
        .box_table th{width:120px;font-weight:normal;text-align:right;padding:7px 10px 7px 0;height:34px;line-height:34px;color:#585858;white-space:nowrap;vertical-align:top;}
        .box_table th span{float:right;}
        .box_table td{padding:7px 0;color:#333;vertical-align:middle;}
        .action_color{ border:1px solid #1d95f6!important; background:#feffe3  left top repeat-x;}
        .wrong_color{  border:1px solid #ff9a9a!important; background:#feffe3  left top repeat-x;}

        .contedit{position:relative;float:left;display:inline;vertical-align:middle;}
        .zidx101{/*z-index:9001;*/z-index:101;}.zidx91{z-index:91;}.zidx92{z-index:92;}.zidx93{z-index:93;}.zidx81{z-index:81;}.zidx82{z-index:82;}.zidx83{z-index:83;}.zidx84{z-index:84;}.zidx85{z-index:85;}.zidx86{z-index:86;}.zidx71{z-index:71;}.zidx61{z-index:61;}.zidx51{z-index:51;}.zidx41{z-index:41;}.zidx31{z-index:31;}.zidx21{z-index:21;}.zidx11{z-index:11;}.zidx01{z-index:1;}.zidx9999{z-index:9000;}
        .zidx99999{z-index: 9999}
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
    <div style="margin-left: 350px;margin-top: -50px;font-size: 20px;">免费发布信息</div>
    <p style="margin-left: 160px;margin-top: 30px;font-weight: 700;">&nbsp</p>
    <div style="margin-left: 160px;border-top: 2px solid #eaeaea;width: 824;top:-10px;height:750px;position:relative;">
        <div >
            <p style="line-height:16px;padding:0 0 15px 15px;padding-top: 41px;"><span style="color: red;font:bold 16px "宋体"; margin: 0 5px 0 7px;">第一次发布兼职信息，请填写公司信息。</span></p>
            <form action="company_announce_check" method="post" enctype="multipart/form-data">
            <input type=hidden name='_token' value='{{csrf_token()}}'>
                <table class="box_table">
                    <tbody>
                    <tr>
                        <th>
                            <span><i>*</i>公司名称</span>
                        </th>
                        <td>
                            <div class="contedit zidx91">
                                <input class="textstyle" name="companyName" id="companyName" type="text" style="width:310px;">
                                <span id="txtCompName_Tip"></span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span><i>*</i>公司别称</span>
                        </th>
                        <td>
                            <div class="contedit zidx81">
                                <input class="textstyle" name="AliasName" id="txtAliasName" type="text" style="width: 175px">
                                <span id="txtAliasName_Tip"></span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span><i>*</i>公司简介</span>
                        </th>
                        <td>
                            <div class="contedit zidx01">
                                <textarea name="intro" style="width: 300px;height: 100px;line-height:26px;border:1px solid #C8C8C8;padding:5px 10px;margin-top:-1px;vertical-align:top;resize:none;overflow:auto;" name="txtCompIntro" id="txtCompIntro"></textarea>
                                <br><span id="txtCompIntro_Tip" style="height:30px"></span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span><i>*</i>发布的岗位</span>
                        </th>
                        <td>
                            <div class="contedit zidx81">
                                <input class="textstyle" name="name" id="txtAliasName" type="text" style="width: 175px">
                                <span id="txtAliasName_Tip"></span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span><i>*</i>工作天数</span>
                        </th>
                        <td>
                            <div class="contedit zidx81">
                                <input class="time" name="time" id="txtAliasName" type="text" style="width: 175px">
                                <span id="txtAliasName_Tip"></span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span><i>*</i>工作类型</span>
                        </th>
                        <td>
                            <div class="contedit zidx81">
                                <input class="type" name="type" id="txtAliasName" type="text" style="width: 175px">
                                <span id="txtAliasName_Tip"></span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span><i>*</i>招聘人数</span>
                        </th>
                        <td>
                            <div class="contedit zidx81">
                                <input class="number" name="number" id="txtAliasName" type="text" style="width: 175px">
                                <span id="txtAliasName_Tip"></span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span><i>*</i>薪水</span>
                        </th>
                        <td>
                            <div class="contedit zidx81">
                                <input class="salary" name="salary" id="txtAliasName" type="text" style="width: 175px">
                                <span id="txtAliasName_Tip"></span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span><i>*</i>联系人&nbsp;&nbsp;&nbsp;</span>
                        </th>
                        <td>
                            <div class="contedit zidx41">
                                <input class="textstyle" name="Contacts" id="txtContacts" type="text" value=""style="width:168px;">
                                <span id="txtContacts_Tip"></span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span><i>*</i>联系电话</span>
                        </th>
                        <td>
                            <div class="contedit zidx41">
                                <input class="textstyle" name="phone" id="txtPhone" type="text" value="" "style="width:168px;">
                                <span id="txtPhone_Tip"></span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span><i>*</i>所在地区</span>
                        </th>
                        <td>
                        <span>
					   <select class="selestyle" id="jobCity" name="jobCityName"style="color:#C7C7C7;">
                           <option selected>杭州</option>
                       </select>
                         </span>
                         <span>
					   <select class="selestyle" id="jobArea" name="jobAreaName"style="color:#C7C7C7;">
                           <option>请选择区域</option>
                       </select>
                         </span>
                            <span id="addresscityid_Tip"></span>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span><i>*</i>详细地址</span>
                        </th>
                        <td>
                            <div class="contedit zidx81">
                                <input class="textstyle c99" name="CompanyAddr" id="txtCompAddr" type="text" value="详细地址，如二号大街1111" style="color:#C7C7C7;width:343px;" >
                            </div>
                            <span id="txtCompAddr_Tip"></span>
                        </td>
                    </tr>
                    <tr id="lasttr">
                        <th>
                            <span>公司图片</span>
                        </th>
                        <td>
                            <div>
                                <a href="javascript:;" class="file" >&nbsp;图片上传<input type="file" name="myfile" id=""></a>
                                <span id="upload_Tip"></span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>&nbsp;</th>
                        <td>
                            <div >
                                <i></i>
                                <p>所有职位不允许向应聘者收取任何押金或费用。如有投诉，核实后将锁定账号删除信息！</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>&nbsp;</th>
                        <td>
                            <input type="submit" name="save" value="下一步"style="width:156px;float:left;display:inline;border:none;font-size:22px;background-color: #FF5500;height:48px;line-height:48px;cursor:pointer;color:#fff;padding:0 2px 4px 0;background-color: #FF5500;"onclick="save(this)">
                        </td>
                    </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</div>


</body>
</html>