<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>购物车</title>
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
.jiesuan{
	display:block;
	margin-left:935px;
	margin-top:-27px;
	background:#DBD6D6;
	color:#FF4400;
	border:0px;
	font-size:20px;
	font-weight:600;
}
.jiesuan:hover{
	color:#FF4400;
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
<!--容器-->
<div class="rongqi" style="border:0px solid red;width:1024px;top:20px;height:530px;position:relative;margin:0 auto;cursor:default;">
<!--头部-->
<div style="width:300px;height:100px;border:0px solid green;position:absolute;">
<img src="img/taologo.jpg" style="width:160px;">
<div style="background:#DEDEDE;width:1px;height:58px;margin-left:170px;margin-top:-65px;"></div>
<p style="color:#666666;font-size:27px;margin-left:190px;margin-top:-48px;">购物车</p>
</div><!--头部-->

<!--第一块-->
<div style="border:0px solid black;width:1024px;height:700px;position:absolute;top:100px;">
<form action='shopping_car_check' method='post'>
<input type='hidden' name='_token' value='{{csrf_token()}}'/>
<table rules=rows id="liebiao" border="0" width="1024" align="center">
	<thead>
    <tr height="30" align="center">
    	<td><input type="checkbox" class="check-all check" />&nbsp;&nbsp;全选</td>
        <td>职位信息</td>
        <td>公司信息</td>
        <td>可工作时间</td>
        <td>金额（元）</td>
        <td>操作</td>
    </tr>
    </thead>
    <tbody>
    <tr bgcolor="#FCFCFC" height="130" align="center">
    	<td><input type="checkbox" name='select[1]' class="check-one check" />&nbsp;&nbsp;</td>
        <td align="left"><img src="img/coffee.jpg" style="width:80px;height:80px;cursor:pointer;">&nbsp;<span class="zhiwei">BARONET COFFEE咖啡制作师</span></td>
        <td>BARONET COFFEE</td>
        <td>2015年12月1日~2015年12月31日</td>
        <td class="qian">5.00</td>
        <td><span class="delete">删除</span></td>
    </tr>
    <tr bgcolor="#FCFCFC" height="130" align="center">
    	<td><input type="checkbox" name='select[2]' class="check-one check" />&nbsp;&nbsp;</td>
        <td align="left"><img src="img/sofa.jpg" style="width:80px;height:80px;cursor:pointer;">&nbsp;<span class="zhiwei">鄞州宜家家居销售员</span></td>
        <td>宜家集团</td>
        <td>2016年2月10日~2016年3月10日</td>
        <td class="qian">6.00</td>
        <td><span class="delete">删除</span></td>
    </tr>
    <tr bgcolor="#FCFCFC" height="130" align="center">
    	<td><input type="checkbox" name='select[3]' class="check-one check" />&nbsp;&nbsp;</td>
        <td align="left"><img src="img/milk.jpg" style="width:80px;height:80px;cursor:pointer;">&nbsp;<span class="zhiwei">hhh牛奶促销员</span></td>
        <td>hhh牛奶公司</td>
        <td>2016年2月24日~2016年2月25日</td>
        <td class="qian">5.00</td>
        <td><span class="delete">删除</span></td>
    </tr>

	</tbody>
</table>

<div style="width:1024px;height:50px;background:#DBD6D6;margin-top:20px;padding:10px;">
<input type="checkbox" class="check-all check" style="z-index:10;position:relative;"/>&nbsp;&nbsp;全选
<span style="margin-left:30px;cursor:pointer;position:relative;z-index:10;" class="deleteAll">删除</span>
<span style="margin-left:600px;">已选职位<b id="selectedTotal" style="color:#FF4400;font-size:18px;">0</b>个</span>
<span style="margin-left:30px;">合计</span>
<b id="priceTotal" style="color:#FF4400;font-size:18px;">¥0.00</b>
<input type='submit' class='jiesuan' value='结算'/>
</form>
</div>
</div><!--第一块-->

</div><!--容器-->
</body>
</html>
