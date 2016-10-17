<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gbk" />
    <title>简历填写</title>
    <script src="../js/laydate/laydate.js"></script>
    <script type="text/javascript" src="../js/jquery-1.11.3.min.js" /></script>
    <script type="text/javascript">
    $(document).ready(function(){
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


    </script>
    <style type="text/css">
        body{
            font-family:微软雅黑;
            margin:0px;
            padding:0px;
        }

        .jianli{
            margin-left: 180px;
            margin-top: 20px;
        }
        .jianli input{
            border-radius: 2px;
            margin-top: 20px;
            font-size: 18px;

        }
        .jianli select{
            margin-top: 20px;
            height: 40px;
            font-size: 18px;
        }
        .jianli table tr td input{
            margin-top: 10px;
            margin-left: 20px;
        }

    </style>
</head>
<body>

<div class="rongqi" style="border:1px solid white;width:900px;top:20px;height:750px;position:relative;margin-left:-280px;cursor:default;">
    <div style="margin-left: 300px;margin-top: 0px;font-size: 20px;">你正在查看简历...</div>
    <p style="margin-left: 300px;margin-top: 30px;font-weight: 700;">基本信息</p>
    <div style="margin-left: 160px;border-top: 2px solid #eaeaea;width: 824;top:-10px;height:750px;position:relative;">
        <div class="jianli">
            <form method="post">
                &nbsp简&nbsp历&nbsp名：<input  type="text" name="J_name" value="" style="width: 100px;height: 30px;"><br>
                &nbsp姓&nbsp&nbsp&nbsp&nbsp名：<input  type="text" name="name" value="" style="width: 100px;height: 30px;">
                <input type="radio"name="sex" value="1" checked>男
                <input type="radio"name="sex" value="2">女
                <input type="radio"name="sex" value="1" >男
                <input type="radio"name="sex" value="2" checked>女
                <br>
                <div style="width:970px; margin:10px auto;">
                    出生日期：<input placeholder="请输入日期" name="date" value="" class="laydate-icon" onclick="laydate()">
                </div>
                <br>
                &nbsp籍 &nbsp  &nbsp贯：
                <select style="height: 40px;" id="bgclassname"  name="bgclassname" onchange="addsmallclass(this.options[this.selectedIndex].value)">
                    <option>请选择省</option>
                    <option value="浙江省" >浙江省</option>
                    <option value="江苏省">江苏省</option>
                    <option value="河北省">河北省</option>
                    <option value="河南省">河南省</option>
                </select>
                <select id="smclassname" name="smclassname"  >
                    <option>请选择城市</option>
                </select>
                <br>
                最高学历：<select name="xueli" >
                    <option selected>高中以下</option>
                    <option>高中</option>
                    <option>中专/技校</option>
                    <option>大专</option>
                    <option>本科</option>
                    <option>硕士</option>
                    <option>博士</option>
                    <option selected>高中以下</option>
                    <option>高中</option>
                    <option>中专/技校</option>
                    <option>大专</option>
                    <option>本科</option>
                    <option>硕士</option>
                    <option>博士</option>

                    <option >高中以下</option>
                    <option selected>高中</option>
                    <option>中专/技校</option>
                    <option>大专</option>
                    <option>本科</option>
                    <option>硕士</option>
                    <option>博士</option>

                    <option >高中以下</option>
                    <option>高中</option>
                    <option selected>中专/技校</option>
                    <option>大专</option>
                    <option>本科</option>
                    <option>硕士</option>
                    <option>博士</option>

                    <option >高中以下</option>
                    <option>高中</option>
                    <option>中专/技校</option>
                    <option selected>大专</option>
                    <option>本科</option>
                    <option>硕士</option>
                    <option>博士</option>

                    <option >高中以下</option>
                    <option>高中</option>
                    <option>中专/技校</option>
                    <option>大专</option>
                    <option selected>本科</option>
                    <option>硕士</option>
                    <option>博士</option>

                    <option selected>高中以下</option>
                    <option>高中</option>
                    <option>中专/技校</option>
                    <option>大专</option>
                    <option>本科</option>
                    <option selected>硕士</option>
                    <option>博士</option>

                    <option selected>高中以下</option>
                    <option>高中</option>
                    <option>中专/技校</option>
                    <option>大专</option>
                    <option>本科</option>
                    <option>硕士</option>
                    <option selected>博士</option>
                </select>

                <br>
                我的身份：<input type="radio"name="reg" value="1" checked>在校学生
                <input type="radio"name="reg" value="2">社会人才

                <br>
                我的身份：<input type="radio"name="reg" value="1" >在校学生
                <input type="radio"name="reg" value="2" checked>社会人才

                <br>
                电子邮箱：<input type="text" name="mail" value="" style="height: 30px;">
                <br>
                手机号码：<input type="text" name="number" value=""style="height: 30px;">
                <br><br>
                空余时间：<br><br>

                <table border="1"style="margin-left: 0px;border-color: #eaeaea;" cellpadding="0" cellspacing="0" style="border-collapse:collapse;"width="400" height="140">
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

                        <td ><input type="checkbox" name="1S" value="1" checked></td>

                        <td ><input type="checkbox" name="1S" value="1" ></td>

                        <td ><input type="checkbox" name="2S" value="1" checked></td>

                        <td ><input type="checkbox" name="2S" value="1" ></td>

                        <td ><input type="checkbox" name="3S" value="1" checked></td>

                        <td ><input type="checkbox" name="3S" value="1" ></td>

                        <td ><input type="checkbox" name="4S" value="1" checked></td>

                        <td ><input type="checkbox" name="4S" value="1" ></td>

                        <td ><input type="checkbox" name="5S" value="1" checked></td>

                        <td ><input type="checkbox" name="5S" value="1" ></td>

                        <td ><input type="checkbox" name="6S" value="1" checked></td>

                        <td ><input type="checkbox" name="6S" value="1" ></td>

                        <td ><input type="checkbox" name="7S" value="1" checked></td>

                        <td ><input type="checkbox" name="7S" value="1" ></td>
                    </tr>
                    <tr>
                        <th>下午</th>


                        <td ><input type="checkbox" name="1X" value="1" checked></td>

                        <td ><input type="checkbox" name="1X" value="1" ></td>

                        <td ><input type="checkbox" name="2X" value="1" checked></td>

                        <td ><input type="checkbox" name="2X" value="1" ></td>

                        <td ><input type="checkbox" name="3X" value="1" checked></td>

                        <td ><input type="checkbox" name="3X" value="1" ></td>

                        <td ><input type="checkbox" name="4X" value="1" checked></td>

                        <td ><input type="checkbox" name="4X" value="1" ></td>

                        <td ><input type="checkbox" name="5X" value="1" checked></td>

                        <td ><input type="checkbox" name="5X" value="1" ></td>

                        <td ><input type="checkbox" name="6X" value="1" checked></td>

                        <td ><input type="checkbox" name="6X" value="1" ></td>

                        <td ><input type="checkbox" name="7X" value="1" checked></td>

                        <td ><input type="checkbox" name="7X" value="1" ></td>

                    </tr>
                </table>

                <br>
                自我介绍：<br><br>
                <textarea cols=50 rows=5 name="intro" style="margin-left:0px;margin-top:-10px;sition: absolute" ></textarea>

        </div>
    </div>
    <p style="margin-left: 300px;margin-top:80px;position:absolute;font-weight: 700;">求职意向</p>
    <div style="margin-left: 160px;border-top: 2px solid #eaeaea;width: 824;top:100px;height:350px;position:relative;margin-top: 5px;">
        <div class="jianli">

            简历标题：
            <input type="text" name="title" style="height: 30px;"value="">
            <br>
            职位类别：
            <input type="text"name="type" style="height: 30px;" value=""><br>
            期望薪资：<input type="text" name="pay" value="" style="height: 30px;width: 100px;">元/小时
            <br>
            求职地区：<input type="text" name="city" style="height: 30px;width: 100px;"value="">
            <input type="text" name="quyu" style="height: 30px;width: 100px;"value="">
            <input type="text" name="shangquan" style="height: 30px;width: 100px;"value="">
            <br>
            <p style="margin-left: 100px;"><input type="submit" name="submit" value="保存并提交"style="background-color: #FF5500;height: 40px;width: 150px;font-size: 20px;color: #ffffff"></p>
            <p style="margin-left: 100px;"><input type="submit" name="delete" value="删除这个简历"style="background-color: #FF5500;height: 40px;width: 150px;font-size: 20px;color: #ffffff"></p>
            </form>

        </div>
    </div>
</div>
</body>
</html>

