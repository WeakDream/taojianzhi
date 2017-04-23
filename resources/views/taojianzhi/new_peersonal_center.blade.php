<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>个人中心</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/geren.css">
    <script src="js/laydate/laydate.js"></script>
    <script type="text/javascript" src="js/jquery-1.11.3.min.js" /></script>
    <script type="text/javascript">
        $(function(){
            $(window).scroll(function(){  //只要窗口滚动,就触发下面代码
                var scrollt = document.documentElement.scrollTop + document.body.scrollTop; //获取滚动后的高度
                if( scrollt >200 ){  //判断滚动后高度超过200px,就显示
                    $("#gotop").fadeIn(400); //淡出
                }else{
                    $("#gotop").stop().fadeOut(400); //如果返回或者没有超过,就淡入.必须加上stop()停止之前动画,否则会出现闪动
                }
            });
            $("#gotop").click(function(){ //当点击标签的时候,使用animate在200毫秒的时间内,滚到顶部
                $("html,body").animate({scrollTop:"0px"},200);
            });
        });

    $(document).ready(function(){
        $(".daohang4tan").hide();
        $(".daohang5tan").hide();
        $(".jianlitan").hide();
        $(".jianlitan1").hide();
        $(".jianlitan2").hide();
        $(".jianlitan3").hide();
        $(".jianliTrigger").hide();
        $(".jianli2tan").hide();
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


        var cartTable = document.getElementById('liebiao');
        var tr = cartTable.children[1].rows;
        var checkInputs = document.getElementsByClassName('check');
        var checkAllInputs = document.getElementsByClassName('check-all');
        var selectedTotal = document.getElementById('selectedTotal');

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
                        checkInputs[j].checked = this.checked;//Ã¿¸ö¿òµÄ×´Ì¬¶¼Òª¸úÈ«Ñ¡¿òÒ»Ñù
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
            var conf = confirm('确定要拒绝吗？');
            if(conf){
                $(this).parent().parent().remove();
            }
        });

        $(".deleteAll").click(function(){
            if(selectedTotal.innerHTML!='0'){
                var conf = confirm('确定要拒绝吗？');
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

        $(".qiuzhi").click(function(){
            $(".qiuzhi2").slideToggle("slow");
            if($("#xia").attr("class")=="glyphicon glyphicon-menu-up"){
                $("#xia").attr("class","glyphicon glyphicon-menu-down");
            }
            else{
                $("#xia").attr("class","glyphicon glyphicon-menu-up");
            }
            var top=$(".shenghuo").offset().top+400;
            $(".bj").css("height",top);

        });


        $(".zhaopin").click(function(){
            $(".zhaopin2").slideToggle("slow");
            if($("#xia1").attr("class")=="glyphicon glyphicon-menu-up"){
                $("#xia1").attr("class","glyphicon glyphicon-menu-down");
            }
            else{
                $("#xia1").attr("class","glyphicon glyphicon-menu-up");
            }
            var top=$(".shenghuo").offset().top+400;
            $(".bj").css("height",top);
        });



        $(".dinggou").click(function(){
            $(".dinggou2").slideToggle("slow");
            if($("#xia3").attr("class")=="glyphicon glyphicon-menu-up"){
                $("#xia3").attr("class","glyphicon glyphicon-menu-down");
            }
            else{
                $("#xia3").attr("class","glyphicon glyphicon-menu-up");
            }
            var top=$(".shenghuo").offset().top+400;
            $(".bj").css("height",top);
        });


        $(".kefu").click(function(){
            $(".kefu2").slideToggle("slow");
            if($("#xia4").attr("class")=="glyphicon glyphicon-menu-up"){
                $("#xia4").attr("class","glyphicon glyphicon-menu-down");
            }
            else{
                $("#xia4").attr("class","glyphicon glyphicon-menu-up");
            }
            var top=$(".shenghuo").offset().top+400;
            $(".bj").css("height",top);
        });


        $(".jiaoyi").click(function(){
            $(".jiaoyi2").slideToggle("slow");
            $(".jiaoyi3").slideToggle("slow");
            if($("#xia2").attr("class")=="glyphicon glyphicon-menu-up"){
                $("#xia2").attr("class","glyphicon glyphicon-menu-down");
            }
            else{
                $("#xia2").attr("class","glyphicon glyphicon-menu-up");
            }
            var top=$(".shenghuo").offset().top+400;
            $(".bj").css("height",top);
        });


        $(".maijia").click(function(){
            $(".maijia2").slideToggle("slow");
            if($(".shang1").html()=="¡Ä"){
                $(".shang1").html("¡Å");
            }
            else{
                $(".shang1").html("¡Ä");
            }
        });


        $(".maijia1").click(function(){
            $(".maijia3").slideToggle("slow");
            if($(".shang2").html()=="¡Ä"){
                $(".shang2").html("¡Å");
            }
            else{
                $(".shang2").html("¡Ä");
            }
        });



        $(".zhongxintan").show();
        $(".fabutan").hide();
        $(".shouchangtan").hide();
        $(".qiuzhitan1").hide();
        $(".qiuzhitan2").hide();
        $(".qiuzhitan3").hide();
        $(".qiuzhitan4").hide();
        $(".zhaopintan1").hide();
        $(".zhaopintan2").hide();
        $(".zhaopintan3").hide();
        $(".zhaopintan4").hide();
        $(".qiuzhitan5").hide();

        $(".kefutan1").hide();
        $(".kefutan2").hide();
        $(".kefutan3").hide();
        $(".zijin").hide();



        $("#l1").click(function(){
            $(".fabutan").hide();
            $(".shouchangtan").hide();
            $(".qiuzhitan1").hide();
            $(".qiuzhitan2").hide();
            $(".qiuzhitan3").hide();
            $(".qiuzhitan4").hide();
            $(".zhaopintan1").hide();
            $(".zhaopintan2").hide();
            $(".zhaopintan3").hide();
            $(".zhaopintan4").hide();
            $(".qiuzhitan5").hide();
            $(".zhongxintan").show();

            $(".kefutan1").hide();
            $(".kefutan2").hide();
            $(".kefutan3").hide();
            $(".zijin").hide();
        });



        $("#l3").click(function(){
            $(".zhongxintan").hide();

            $(".qiuzhitan1").hide();
            $(".qiuzhitan2").hide();
            $(".qiuzhitan3").hide();
            $(".qiuzhitan4").hide();
            $(".zhaopintan1").hide();
            $(".zhaopintan2").hide();
            $(".zhaopintan3").hide();
            $(".zhaopintan4").hide();
            $(".qiuzhitan5").hide();
            $(".shouchangtan").show();
            ;
            $(".kefutan1").hide();
            $(".kefutan2").hide();
            $(".kefutan3").hide();
            $(".zijin").hide();
        });
        $("#l41").click(function(){
            $(".zhongxintan").hide();

            $(".qiuzhitan1").show();
            $(".qiuzhitan2").hide();
            $(".qiuzhitan3").hide();
            $(".qiuzhitan4").hide();
            $(".shouchangtan").hide();
            $(".zhaopintan1").hide();
            $(".zhaopintan2").hide();
            $(".zhaopintan3").hide();
            $(".zhaopintan4").hide();
            $(".qiuzhitan5").hide();

            $(".kefutan1").hide();
            $(".kefutan2").hide();
            $(".kefutan3").hide();
            $(".zijin").hide();
        });
        $("#l42").click(function(){
            $(".zhongxintan").hide();

            $(".qiuzhitan1").hide();
            $(".qiuzhitan2").show();
            $(".qiuzhitan3").hide();
            $(".qiuzhitan4").hide();
            $(".shouchangtan").hide();
            $(".zhaopintan1").hide();
            $(".zhaopintan2").hide();
            $(".zhaopintan3").hide();
            $(".zhaopintan4").hide();
            $(".qiuzhitan5").hide();

            $(".kefutan1").hide();
            $(".kefutan2").hide();
            $(".kefutan3").hide();
            $(".zijin").hide();
        });
        $("#l43").click(function(){
            $(".zhongxintan").hide();

            $(".qiuzhitan1").hide();
            $(".qiuzhitan2").hide();
            $(".qiuzhitan3").show();
            $(".qiuzhitan4").hide();
            $(".shouchangtan").hide();
            $(".zhaopintan1").hide();
            $(".zhaopintan2").hide();
            $(".zhaopintan3").hide();
            $(".zhaopintan4").hide();
            $(".qiuzhitan5").hide();

            $(".kefutan1").hide();
            $(".kefutan2").hide();
            $(".kefutan3").hide();
            $(".zijin").hide();
        });
        $("#l44").click(function(){
            $(".zhongxintan").hide();

            $(".qiuzhitan1").hide();
            $(".qiuzhitan2").hide();
            $(".qiuzhitan3").hide();
            $(".shouchangtan").hide();
            $(".qiuzhitan4").show();
            $(".zhaopintan1").hide();
            $(".zhaopintan2").hide();
            $(".zhaopintan3").hide();
            $(".zhaopintan4").hide();
            $(".qiuzhitan5").hide();

            $(".kefutan1").hide();
            $(".kefutan2").hide();
            $(".kefutan3").hide();
            $(".zijin").hide();
        });
        $("#l45").click(function(){
            $(".zhongxintan").hide();

            $(".qiuzhitan1").hide();
            $(".qiuzhitan2").hide();
            $(".qiuzhitan3").hide();
            $(".shouchangtan").hide();
            $(".qiuzhitan4").hide();
            $(".zhaopintan1").hide();
            $(".zhaopintan2").hide();
            $(".zhaopintan3").hide();
            $(".zhaopintan4").hide();
            $(".qiuzhitan5").show();

            $(".kefutan1").hide();
            $(".kefutan2").hide();
            $(".kefutan3").hide();
            $(".zijin").hide();
        });
        $("#l51").click(function(){
            $(".zhongxintan").hide();

            $(".qiuzhitan1").hide();
            $(".qiuzhitan2").hide();
            $(".qiuzhitan3").hide();
            $(".shouchangtan").hide();
            $(".qiuzhitan4").hide();
            $(".zhaopintan1").show();
            $(".zhaopintan2").hide();
            $(".zhaopintan3").hide();
            $(".zhaopintan4").hide();
            $(".qiuzhitan5").hide();

            $(".kefutan1").hide();
            $(".kefutan2").hide();
            $(".kefutan3").hide();
            $(".zijin").hide();
        });
        $("#l52").click(function(){
            $(".zhongxintan").hide();

            $(".qiuzhitan1").hide();
            $(".qiuzhitan2").hide();
            $(".qiuzhitan3").hide();
            $(".shouchangtan").hide();
            $(".qiuzhitan4").hide();
            $(".zhaopintan1").hide();
            $(".zhaopintan2").show();
            $(".zhaopintan3").hide();
            $(".zhaopintan4").hide();
            $(".qiuzhitan5").hide();

            $(".kefutan1").hide();
            $(".kefutan2").hide();
            $(".kefutan3").hide();
            $(".zijin").hide();
        });
        $("#l53").click(function(){
            $(".zhongxintan").hide();

            $(".qiuzhitan1").hide();
            $(".qiuzhitan2").hide();
            $(".qiuzhitan3").hide();
            $(".shouchangtan").hide();
            $(".qiuzhitan4").hide();
            $(".zhaopintan1").hide();
            $(".zhaopintan2").hide();
            $(".zhaopintan3").show();
            $(".zhaopintan4").hide();
            $(".qiuzhitan5").hide();

            $(".kefutan1").hide();
            $(".kefutan2").hide();
            $(".kefutan3").hide();
            $(".zijin").hide();
        });
        $("#l54").click(function(){
            $(".zhongxintan").hide();

            $(".qiuzhitan1").hide();
            $(".qiuzhitan2").hide();
            $(".qiuzhitan3").hide();
            $(".shouchangtan").hide();
            $(".qiuzhitan4").hide();
            $(".zhaopintan1").hide();
            $(".zhaopintan2").hide();
            $(".zhaopintan3").hide();
            $(".zhaopintan4").show();
            $(".qiuzhitan5").hide();

            $(".kefutan1").hide();
            $(".kefutan2").hide();
            $(".kefutan3").hide();
            $(".zijin").hide();
        });



        $("#171").click(function(){
            $(".kefutan1").show();
            $(".zhongxintan").hide();

            $(".qiuzhitan1").hide();
            $(".qiuzhitan2").hide();
            $(".qiuzhitan3").hide();
            $(".shouchangtan").hide();
            $(".qiuzhitan4").hide();
            $(".zhaopintan1").hide();
            $(".zhaopintan2").hide();
            $(".zhaopintan3").hide();
            $(".zhaopintan4").hide();
            $(".qiuzhitan5").hide();

            $(".kefutan2").hide();
            $(".kefutan3").hide();
            $(".zijin").hide();
        });
        $("#172").click(function(){
            $(".kefutan2").show();
            $(".zhongxintan").hide();

            $(".qiuzhitan1").hide();
            $(".qiuzhitan2").hide();
            $(".qiuzhitan3").hide();
            $(".shouchangtan").hide();
            $(".qiuzhitan4").hide();
            $(".zhaopintan1").hide();
            $(".zhaopintan2").hide();
            $(".zhaopintan3").hide();
            $(".zhaopintan4").hide();
            $(".qiuzhitan5").hide();

            $(".kefutan1").hide();
            $(".kefutan3").hide();
            $(".zijin").hide();
        });
        $("#173").click(function(){
            $(".kefutan3").show();
            $(".zhongxintan").hide();

            $(".qiuzhitan1").hide();
            $(".qiuzhitan2").hide();
            $(".qiuzhitan3").hide();
            $(".shouchangtan").hide();
            $(".qiuzhitan4").hide();
            $(".zhaopintan1").hide();
            $(".zhaopintan2").hide();
            $(".zhaopintan3").hide();
            $(".zhaopintan4").hide();
            $(".qiuzhitan5").hide();

            $(".kefutan2").hide();
            $(".kefutan1").hide();
            $(".zijin").hide();
        });
        $("#174").click(function(){
            $(".kefutan3").hide();
            $(".zhongxintan").hide();

            $(".qiuzhitan1").hide();
            $(".qiuzhitan2").hide();
            $(".qiuzhitan3").hide();
            $(".shouchangtan").hide();
            $(".qiuzhitan4").hide();
            $(".zhaopintan1").hide();
            $(".zhaopintan2").hide();
            $(".zhaopintan3").hide();
            $(".zhaopintan4").hide();
            $(".qiuzhitan5").hide();
            $(".kefutan2").hide();
            $(".kefutan1").hide();
            $(".zijin").show();
        });






        $(".m12tan").show();




        $(".m31tan").show();
        $(".m32tan").hide();
        $(".m33tan").hide();
        $(".m34tan").hide();

        $("#m31").click(function(){
            $(".m32tan").hide();
            $(".m33tan").hide();
            $(".m31tan").show();
            $(".m34tan").hide();
        });
        $("#m32").click(function(){
            $(".m31tan").hide();
            $(".m33tan").hide();
            $(".m32tan").show();
            $(".m34tan").hide();
        });
        $("#m33").click(function(){
            $(".m31tan").hide();
            $(".m32tan").hide();
            $(".m33tan").show();
            $(".m34tan").hide();
        });
        $("#m34").click(function(){
            $(".m31tan").hide();
            $(".m32tan").hide();
            $(".m34tan").show();
            $(".m33tan").hide();
        });

        $(".m41tan").show();
        $(".m42tan").hide();
        $(".m43tan").hide();

        $("#m41").click(function(){
            $(".m42tan").hide();
            $(".m43tan").hide();
            $(".m41tan").show();
        });
        $("#m42").click(function(){
            $(".m41tan").hide();
            $(".m43tan").hide();
            $(".m42tan").show();
        });
        $("#m43").click(function(){
            $(".m41tan").hide();
            $(".m42tan").hide();
            $(".m43tan").show();
        });

        $(".m511tan").show();
        $(".m512tan").hide();
        $(".m513tan").hide();
        $(".m514tan").hide();

        $("#m511").click(function(){
            $(".m512tan").hide();
            $(".m513tan").hide();
            $(".m511tan").show();
            $(".m514tan").hide();
        });
        $("#m512").click(function(){
            $(".m511tan").hide();
            $(".m513tan").hide();
            $(".m512tan").show();
            $(".m514tan").hide();
        });
        $("#m513").click(function(){
            $(".m511tan").hide();
            $(".m512tan").hide();
            $(".m513tan").show();
            $(".m514tan").hide();
        });
        $("#m514").click(function(){
            $(".m511tan").hide();
            $(".m512tan").hide();
            $(".m514tan").show();
            $(".m513tan").hide();
        });

        $(".m71tan").show();
        $(".m72tan").hide();
        $(".m73tan").hide();

        $("#m71").click(function(){
            $(".m72tan").hide();
            $(".m73tan").hide();
            $(".m71tan").show();
        });
        $("#m72").click(function(){
            $(".m71tan").hide();
            $(".m73tan").hide();
            $(".m72tan").show();
        });
        $("#m73").click(function(){
            $(".m71tan").hide();
            $(".m72tan").hide();
            $(".m73tan").show();
        });

        $(".m81tan").show();
        $(".m82tan").hide();
        $(".m83tan").hide();

        $("#m81").click(function(){
            $(".m82tan").hide();
            $(".m83tan").hide();
            $(".m81tan").show();
        });
        $("#m82").click(function(){
            $(".m81tan").hide();
            $(".m83tan").hide();
            $(".m82tan").show();
        });
        $("#m83").click(function(){
            $(".m81tan").hide();
            $(".m82tan").hide();
            $(".m83tan").show();
        });

        var input=document.getElementsByTagName('input');
        var input1=input[11];
        var input2=input[12];
        var input3=input[13];
        var input4=input[14];
        var input5=input[15];
        var input6=input[16];
        var input7=input[17];
        var input8=input[18];
        var textarea=document.getElementsByTagName('textarea');
        var textarea1=textarea[0];
        input1.onfocus=function(){
            input1.style.backgroundColor="#FEFFE3";
        }
        input2.onfocus=function(){
            input2.style.backgroundColor="#FEFFE3";
        }
        input3.onfocus=function(){
            input3.style.backgroundColor="#FEFFE3";
        }
        input4.onfocus=function(){
            input4.style.backgroundColor="#FEFFE3";
        }
        input5.onfocus=function(){
            input5.style.backgroundColor="#FEFFE3";
        }
        input6.onfocus=function(){
            input6.style.backgroundColor="#FEFFE3";
        }
        input7.onfocus=function(){
            input7.style.backgroundColor="#FEFFE3";
        }
        input8.onfocus=function(){
            input8.style.backgroundColor="#FEFFE3";
        }
        textarea1.onfocus=function(){
            textarea1.style.backgroundColor="#FEFFE3";
        }

        $("#jianli").click(function(){
            $(".jianlitan").toggle();

        });
        $("#jianli1").click(function(){
            $(".jianlitan1").toggle();

        });
        $("#jianli2").click(function(){
            $(".jianlitan2").toggle();

        });
        $("#jianli3").click(function(){
            $(".jianlitan3").toggle();

        });
        var subsmallclass=new Array();
        subsmallclass[0]=new Array("Õã½­Ê¡","º¼ÖÝ");
        subsmallclass[1]=new Array("Õã½­Ê¡","ÉÜÐË");
        subsmallclass[2]=new Array("Õã½­Ê¡","Äþ²¨");
        subsmallclass[3]=new Array("Õã½­Ê¡","¼ÎÐË");
        subsmallclass[4]=new Array("Õã½­Ê¡","ºþÖÝ");
        subsmallclass[5]=new Array("Õã½­Ê¡","ÎÂÖÝ");
        subsmallclass[6]=new Array("Õã½­Ê¡","½ð»ª");
        subsmallclass[7]=new Array("Õã½­Ê¡","ÖÛÉ½");
        subsmallclass[8]=new Array("Õã½­Ê¡","ÀöË®");
        subsmallclass[9]=new Array("½­ËÕÊ¡","ÄÏ¾©");
        subsmallclass[10]=new Array("½­ËÕÊ¡","ËÕÖÝ");
        subsmallclass[11]=new Array("½­ËÕÊ¡","ÎÞÎý");
        subsmallclass[12]=new Array("½­ËÕÊ¡","³£ÖÝ");
        subsmallclass[13]=new Array("½­ËÕÊ¡","Õò½­");
        subsmallclass[14]=new Array("½­ËÕÊ¡","ÄÏÍ¨");
        subsmallclass[15]=new Array("½­ËÕÊ¡","ÑïÖÝ");
        subsmallclass[16]=new Array("ºÓ±±Ê¡","Ê¯¼Ò×¯");
        subsmallclass[17]=new Array("ºÓ±±Ê¡","±£¶¨");
        subsmallclass[18]=new Array("ºÓ±±Ê¡","²ýÖÝ");
        subsmallclass[19]=new Array("ºÓ±±Ê¡","³ÐµÂ");
        subsmallclass[20]=new Array("ºÓ±±Ê¡","¶¨ÖÝ");
        subsmallclass[21]=new Array("ºÓ±±Ê¡","ºâË®");
        subsmallclass[22]=new Array("ºÓ±±Ê¡","ÇØ»Êµº");
        subsmallclass[23]=new Array("ºÓ±±Ê¡","ÌÆÉ½");
        subsmallclass[24]=new Array("ºÓ±±Ê¡","ÕÅ¼Ò¿Ú");
        subsmallclass[25]=new Array("ºÓ±±Ê¡","ÐÏÌ¨");
        subsmallclass[26]=new Array("ºÓ±±Ê¡","ÕÔÏØ");
        subsmallclass[27]=new Array("ºÓÄÏÊ¡","Ö£ÖÝ");
        subsmallclass[28]=new Array("ºÓÄÏÊ¡","°²Ñô");
        subsmallclass[29]=new Array("ºÓÄÏÊ¡","¿ª·â");
        subsmallclass[30]=new Array("ºÓÄÏÊ¡","ÂåÑô");
        subsmallclass[31]=new Array("ºÓÄÏÊ¡","ÄÏÑô");
        subsmallclass[32]=new Array("ºÓÄÏÊ¡","Æ½¶¥É½");
        subsmallclass[33]=new Array("ºÓÄÏÊ¡","ÐÅÑô");
        subsmallclass[34]=new Array("ºÓÄÏÊ¡","Ðí²ý");
        subsmallclass[35]=new Array("ºÓÄÏÊ¡","ÖÜ¿Ú");
        subsmallclass[36]=new Array("ºÓÄÏÊ¡","ÐÂÏç");
        subsmallclass[37]=new Array("ºÓÄÏÊ¡","ÈýÃÅÏ¿");




        function addsmallclass(bigclassvalue,smallclassvalue){
            document.getElementById("smclassname").length=0;
            document.getElementById("smclassname").options[0]=new Option("ÇëÑ¡Ôñ³ÇÊÐ","")
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
        var menuYloc = $(".jianlitan").offset().top;
        $(window).scroll(function (){
            var offsetTop = 100+$(window).scrollTop()+"px";
            $(".jianlitan").animate({top:offsetTop },{ duration:600,queue:false });
        });
        var menuYloc = $(".jianlitan1").offset().top;
        $(window).scroll(function (){
            var offsetTop = 100+$(window).scrollTop()+"px";
            $(".jianlitan1").animate({top:offsetTop },{ duration:600,queue:false });
        });
        var menuYloc = $(".jianlitan2").offset().top;
        $(window).scroll(function (){
            var offsetTop = 100+$(window).scrollTop()+"px";
            $(".jianlitan2").animate({top:offsetTop },{ duration:600,queue:false });
        });
        var menuYloc = $(".jianlitan3").offset().top;
        $(window).scroll(function (){
            var offsetTop = 100+$(window).scrollTop()+"px";
            $(".jianlitan3").animate({top:offsetTop },{ duration:600,queue:false });
        });


        function imagesSelected(myFiles) {
            for (var i = 0, f; f = myFiles[i]; i++) {
                var imageReader = new FileReader();
                imageReader.onload = (function(aFile) {
                    return function(e) {
                        var span = document.createElement('span');
                        span.innerHTML = ['<img class="images" src="', e.target.result,'" title="', aFile.name, '"/>'].join('');
                        document.getElementById('thumbs').insertBefore(span, null);
                    };
                })(f);
                imageReader.readAsDataURL(f);
            }
        }

        function dropIt(e) {
            imagesSelected(e.dataTransfer.files);
            e.stopPropagation();
            e.preventDefault();
        }

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

    <style type="text/css">
        .m31tan tr{
            border-bottom: 1px solid blue;
        }


        .m12tan tr
        {
            border-bottom: 2px solid #FF5500;
            height: 60px;
        }

        <style type="text/css">

        .jianlitan{
            margin-left: 240px;
            margin-top: -220px;;
            border: 1px solid #66CCFF;
            height: 480px;
            width: 500px;
            position:absolute;
            border-radius: 5px;
            background:white;
            overflow:auto;
            z-index:9;
            box-shadow: 10px 10px 5px #888888;
        }
        .jianlitan3{
            margin-left: 240px;
            margin-top: -220px;;
            border: 1px solid #66CCFF;
            height: 480px;
            width: 500px;
            position:absolute;
            border-radius: 5px;
            background:white;
            overflow:auto;
            z-index:9;
            box-shadow: 10px 10px 5px #888888;
        }
        .jianlitan1{
            margin-left: 240px;
            margin-top: -220px;;
            border: 1px solid #66CCFF;
            height: 480px;
            width: 500px;
            position:absolute;
            border-radius: 5px;
            background:white;
            overflow:auto;
            z-index:9;
            box-shadow: 10px 10px 5px #888888;
        }
        .jianlitan2{
            margin-left: 240px;
            margin-top: -220px;;
            border: 1px solid #66CCFF;
            height: 480px;
            width: 500px;
            position:absolute;
            border-radius: 5px;
            background:white;
            overflow:auto;
            z-index:9;
            box-shadow: 10px 10px 5px #888888;
        }
        .jianlixq{
            margin-left: 40px;
            margin-top: 10px;
        }
        .jianlixq  input{
            border-radius: 0px;
            margin-top: 10px;
            font-size: 18px;

        }
        .jianlixq select{
            margin-top: 10px;
            height: 40px;
            font-size: 18px;
        }
        .jianlixq table tr td input{
            margin-top: 10px;
            margin-left: 20px;
        }
        .search-pannel{
            position: absolute;
            top:20px;
            left: 930px;
            width: 230px;
        }
        .search-button{float:right}
        .btn-search{
            width: 60px;
            height: 40px;
            background: #f50;
            border: 1;
            cursor: pointer;
        }
        .search-common-pannel input{
            height: 39px;
            line-height: 39px;
            background: #fff;
            outline: none;
            border: 0 none;
            width: 170px;
        }
        .search-common-pannel img{
            position: absolute;
            top:10px;
            left: 6px;
            z-index: 2;
        }
        .checkbox{
            width: 15px;;
            height: 60px;
            vertical-align:middle;
            margin: auto;
        }
        .next ul{
            margin-left: 400px;
            margin-top: -15px;
            position: absolute;
        }
        .next li{
            list-style: none;
            float: left;
            border: 1px solid gray;
            margin-right: 10px;
            padding:0 5px 0 5px ;
        }
        .fukuan{
            color: #f50;
        }
        .fukuan:hover{
            cursor: pointer;
            text-decoration:underline;
            color: red;
        }
        .table, .td
        {
            border-color: #e6e6e6;
            border-style: solid;
        }
        .delete{
            cursor:pointer;
        }
        .delete:hover{
            text-decoration:underline;
            color:#FF4400;
        }
        .zhiwei{
            cursor:pointer;
        }
        .zhiwei:hover{
            color:#FF4400;
            text-decoration:underline;
        }
        #gotop{
            display:block;
            width:40px;
            height:40px;
            position:fixed;
            bottom:50px;
            right:40px;
            border-radius:10px 10px 10px 10px;
            text-decoration:none;
            display:none;
            background-color:#F5F5F5;
        }
        #gotop span{
            display:block;
            width:40px;
            color:#dddddd;
        }
        #gotop span:hover{
            color:#cccccc;
        }
        #gotop span{
            font-size:40px;
            text-align:center;
            margin-top:-15px;
        }

    </style>
</head>

<body>
<a id="gotop" href="#">
    <span><p style="color:#000000;font-size:15px;">返回顶部</p></span>
</a>
<!--»ÒÉ«µ¼º½À¸-->
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
        <div class="daohang4tan"><a href="#">个人中心</a><a href="#">添加修改简历</a><a href="#">查看招聘信息</a></div>
        <div class="daohang5tan"><a href="#">网站简介</a><a href="#">组织结构</a><a href="#">发展历程</a></div>

    </div>
</div>


<div class="chen">
    <div class="chen1" style="width:1024px;height:100%;margin:0 auto;">
        <img src="img/taologo2.jpg" style="width:140px;margin-left: 20px;margin-top:10px;">
        <div style="font-size:20px;color:#ffffff;margin-top:-55px;margin-left: 230px;position: absolute;font-weight:600;">个人中心</div>
        <div style="font-size:18px;color:#ffffff;margin-top:-53px;margin-left: 350px;position: absolute">账户设置</div>
        <div class="search-pannel">
            <form>
                <div class="search-button">
                    <button class="btn-search" type="submit">搜索</button>
                </div>
                <div class="search-common-pannel">
                    <input type="text">
                </div>
            </form>
        </div>
        <a href="zhanshi.html" style="text-decoration:none;border:1px solid #ffffff;height:30px;width:100px;top:25px;margin-left:900px;position:absolute;font-size:17px;color: #ffffff">&nbsp我要卖时间</a>
    </div>
</div>


<div class="rongqi" style="border:0px solid red;width:1024px;top:20px;height:750px;position:relative;margin:0 auto;cursor:default;">
    <!--×ó±ß-->

    <div class="bj" style="position:relative;height:800px;width:200px;background: #fafafa;float:left">
        <div style="width:110px;height:40px;line-height: 33px;margin-left:50px;margin-top:10px;font-size: 18px;font-weight: 700;clear:both;border-bottom: 1px solid #eaeaea;padding-bottom: 12px;">
            <a href="#" style="text-decoration:none;color:#595757;margin-top:20px;display:block;">
                <span id="l1">个人中心</span>
            </a>
        </div>
        <ul class="zuo" style="margin-top:10px;cursor:default;list-style-type:none;">

            <li style="font-size: 16px;margin-left: 20px;margin-top: 20px;">
                <span id="l3"><a href="{{url('save')}}"><font color="#666464">我的收藏</font></a></span>
                </a>
            </li>
            <!--<li class="zhaopin">
                <!--<span ><a href="gouwuche.html"><font color="#666464">我的购物车</font></a></span>
                </a>
            </li>!-->
            <li class="qiuzhi">
                <span style="color:#666464;">我的兼职&nbsp;</span>
                <span id="xia" class="glyphicon glyphicon-menu-up" aria-hidden="true" style="opacity:0.8;"></span>
                </a>
            </li>
            <div class="qiuzhi2">
                <li style="margin-top: 10px;"id="l41"><a href="zhanshi.html"><font color="#666464">我的时间表</font></a></li>
                <li style="margin-top: 10px;"id="l44">我发布的消息</li>
                <li style="margin-top: 10px;"id="l45">我收到的消息</li>
                <li style="margin-top: 10px;"id="l42">我的购买记录</li>
                <li style="margin-top: 10px;"id="l43">谁留下了脚印</li>
            </div>
            <li class="kefu" >
                <span style="color:#666464;">客服中心&nbsp;</span>
                <span id="xia4" class="glyphicon glyphicon-menu-up" aria-hidden="true" style="opacity:0.8;"></span>
                </a>
            </li>
            <div class="kefu2">
                <li style="margin-top: 10px;" id="171">我的申诉</li>
                <li style="margin-top: 10px;" id="172">我的投诉</li>
                <li style="margin-top: 10px;" id="173">违规记录</li>
                <li style="margin-top: 10px;" id="174">我的资金</li>
            </div>

        </ul>


        <div class="shenghuo" style="position:relative;width:110px;height:33px;line-height: 33px;margin-left:50px;margin-top:30px;font-size: 18px;font-weight: 700;clear:both;padding-bottom: 12px;">
            <span style="color:#595757;">生活工具</span>
        </div>
        <img src="img/tubiao.jpg" style="margin-left:40px;margin-top:10px;">
    </div>
    <!--ÓÒ²¿-->
    <div class="zhongxintan">
        <div style="border: 0px solid red;height: 150px;width: 100%;margin-left:40px;">
            <img src="img/person.jpg" style="width:130px;height:130px;border-radius:65px;">
            <p style="font-size: 20px;margin-top: -80px;margin-left:180px;position: absolute;"><b>账户名字{{Session::get('username')}}</b></p>
            <p style="margin-left: 400px;margin-top: -75px;position: absolute">消息|余额</p>
        </div>
        <div style="margin-left: 40px;font-size: 15px;margin-top: 10px;" >
            <!--<span id="m11">最近发布信息</span>!-->
            <span style="margin-left: 20px;"id="m12">我浏览过的信息(普通用户只能查看五条信息)</span>
            <span style="margin-left: 300px;"id="m12">开通会员查看的更多</span>
            <!--<div class="m11tan">
                <p style="margin-top: 50px;margin-left: 250px;"> <img src="img/sm.png">您还没有发布消息。<a href="#"style="text-decoration: none">去发一条吧</a></p>
            </div>!-->
            <div class="buy">
                @if(isset($results))
                    <p></p>
                    @foreach($results as $result)
                        <p style="font-size: 20px">您在{{$result->created_at}}购买了{{$result->company}}的{{$result->job}}岗位</p>
                    @endforeach
                @endif

            </div>
            <div class="m12tan">
                <table style="font-size: 14px;height: 80px">
                    <tr style="background-color: #FF5500;">
                        <th width="200px"></th>
                        <th width="500px" style="font-size: 18px;color: white">信息标题</th>
                        <th width="600" style="font-size: 18px;color: white">更新时间</th>
                        <th width="600px" style="font-size: 18px;color: white">操作</th>
                    </tr>

                    @if(isset($logs))
                        @if(!empty($logs))
                            @foreach($logs as $log)
                                <tr >
                                    <th width="200px"></th>
                                    <th width="500px"><a href="{{url('company',$log->company_name)}}">{{$log->company_name}}</a></th>
                                    <th width="600px">{{$log->updated_at}}</th>
                                    <th><a href="{{url("logs_delete",$log->company_name)}}"><span style="display: inline-block;background-color: #FF5500;color: white;width: 70px;height: 25px">&nbsp购买岗位</span></a> &nbsp&nbsp
                                        <!--<button style="background-color: #FF5500;color: white">删除记录</button></th>!-->
                                        <a href="{{url("logs_delete",$log->company_name)}}"><span style="display: inline-block;background-color: #FF5500;color: white;width: 70px;height: 25px">&nbsp删除记录</span></a>
                                </tr>
                            @endforeach
                        @endif
                    @endif
                    @if(empty($logs))
                        <tr>
                            <th colspan="3"style="text-align: center;">您没有浏览过任何信息</th>
                        </tr>
                    @endif
                </table>
            </div>
        </div>
    </div>
    <!--我的购买情况-->
    <div class="qiuzhitan2">
        <h3 style="color: #FF5500;margin-left: 40px;"><b>我的购买清单</b></h3>
        <table rules=rows id="liebiao" border="0" width="850" align="center"style="margin-top: 20px;margin-left: 30px;">
            <thead>
            <tr height="30" align="center">

                <td>投递职位</td>
                <td>公司名称</td>
                <td>投递反馈</td>
                <td>投递时间</td>

            </tr>
            </thead>
            <tbody>
            <tr bgcolor="#FCFCFC" height="60" align="center">

                <td >传单派发</td>
                <td>杭州天进教育培训学校</td>
                <td>待付款</td>
                <td>2016年4月2日</td>

            </tr>
            <tr bgcolor="#FCFCFC" height="60" align="center">

                <td>家教</td>
                <td>浙江益得资产管理有限公司</td>
                <td>待审核</td>
                <td>2016年3月2日</td>

            </tr>
            <tr bgcolor="#FCFCFC" height="60" align="center">

                <td>服务员</td>
                <td>杭州青玉糕点有限公司</td>
                <td>完成交易</td>
                <td>2016年4月12日</td>

            </tr>
            <tr bgcolor="#FCFCFC" height="60" align="center">

                <td>客服</td>
                <td>杭州昱高贸易有限公司</td>
                <td>被婉拒</td>
                <td>2016年4月7日</td>

            </tr>
            </tbody>
        </table>
        <div style="width:850px;height:50px;background:#DBD6D6;margin-top:20px;padding:10px;margin-left: 30px;">
            <div class="next" style="margin-top:20px;">
                <ul>
                    <li>上一页</li>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    <li>...</li>
                    <li>下一页</li>
                </ul>
            </div>
        </div>
    </div>
    <!--谁留下了脚印。-->
    <div class="qiuzhitan3">
        <h3 style="color: #FF5500;margin-left: 40px;"><b>谁访问了我的简历</b></h3>
        <div style="border: 1px solid #eaeaea;height:275px;width: 780px;margin-top: 40px;margin-left: 40px;border-radius: 5px;">
            <dl style="height: 40px;width: 100%;background: #eaeaea;">
                <dd style="margin-left: 20px;font-weight: 700;font-size: 18px;margin-top:10px;position: absolute"></dd>
                <dd style="margin-left: 550px;margin-top:10px;position: absolute">最近1天被访问<b style="color: orange">0</b>次，共被访问了<b style="color: orange">5</b>次</dd>
            </dl>
            <dl style="border:1px solid #eaeaea;width:780px;height:40px;position:absolute;top:100px;" >
                <dd style="margin-left: 20px;margin-top:10px;position: absolute;color:gray;">公司</dd>
                <dd style="margin-left: 450px;margin-top:10px;position: absolute;color:gray;">时间</dd>

            </dl>
            <dl style="border:1px solid #eaeaea;width:780px;height:40px;position:absolute;top:140px;">
                <dd style="margin-left: 20px;margin-top:10px;position: absolute">深圳市新近果科技有限公司</dd>
                <dd style="margin-left:450px;margin-top:10px;position: absolute">2015-12-02</dd>

            </dl>
            <dl style="border:1px solid #eaeaea;width:780px;height:40px;position:absolute;top:180px;">
                <dd style="margin-left: 20px;margin-top:10px;position: absolute">上海达旭市场研究有限公司</dd>
                <dd style="margin-left: 450px;margin-top:10px;position: absolute">2015-12-01</dd>

            </dl>
            <dl style="border:1px solid #eaeaea;width:780px;height:40px;position:absolute;top:220px;">
                <dd style="margin-left: 20px;margin-top:10px;position: absolute">杭州泉秀文化创意有限公司</dd>
                <dd style="margin-left: 450px;margin-top:10px;position: absolute">2015-11-11</dd>

            </dl>
            <dl style="border:1px solid #eaeaea;width:780px;height:40px;position:absolute;top:260px;">
                <dd style="margin-left: 20px;margin-top:10px;position: absolute">苏州井水商贸有限公司</dd>
                <dd style="margin-left: 450px;margin-top:10px;position: absolute">2015-11-01</dd>

            </dl>
            <dl style="border:1px solid #eaeaea;width:780px;height:40px;position:absolute;top:300px;">
                <dd style="margin-left: 20px;margin-top:10px;position: absolute">杭州腾通广告策划有限公司</dd>
                <dd style="margin-left: 450px;margin-top:10px;position: absolute">2015-10-21</dd>

            </dl>
        </div>
    </div>
    <!--发布的消息。-->
    <div class="qiuzhitan4">
        <h3 style="color: #FF5500;margin-left: 40px;"><b>发布的消息</b></h3>
        <div class="qiuzhitan4xq" >
            <ul>
                <li id="m41"><div align="center">作为卖家</div></li>
                <li id="m42"><div align="center">作为买家</div></li>
                <li id="m43"><div align="center">已通过</div></li>
            </ul>
        </div>
        <div style="margin-left: 20px;margin-top:45px;border-top: 1px solid #eaeaea">
            <div class="m41tan">
                <div style="border: 1px solid #eaeaea;width: 780px;height:210px;border-radius: 5px;">
                    <p style="margin-left: 25px;font-size: 13px;position: absolute;"><b>兼职职位</b><b style="margin-left: 250px;position: absolute;">公司名称 </b><b style="margin-left: 540px;">发布的时间</b></p>
                    <dl style="border:1px solid #eaeaea;width:780px;height:40px;position:absolute;top:130px;">

                        <dd style="margin-left: 25px;position: absolute;top:10px;">淘宝客服</dd>
                        <dd style="margin-left: 320px;position: absolute;top:10px;">阿里巴巴</dd>
                        <dd style="margin-left: 600px;position: absolute;top:10px;">2015-05-05</dd>

                    </dl>
                    <dl style="border:1px solid #eaeaea;width:780px;height:40px;position:absolute;top:170px;">

                        <dd style="margin-left: 25px;position: absolute;top:10px;">图书馆小时工</dd>
                        <dd style="margin-left: 320px;position: absolute;top:10px;">北京盛丰有限公司</dd>
                        <dd style="margin-left: 600px;position: absolute;top:10px;">2015-03-22</dd>

                    </dl>
                    <dl style="border:1px solid#eaeaea;width:780px;height:40px;position:absolute;top:210px;">

                        <dd style="margin-left: 25px;position: absolute;top:10px;">派发传单</dd>
                        <dd style="margin-left: 320px;position: absolute;top:10px;">杭州文辉博库有限公司</dd>
                        <dd style="margin-left: 600px;position: absolute;top:10px;">2015-11-05</dd>

                    </dl>
                </div>
            </div>

            <div class="m42tan">
                <div style="border: 1px solid #eaeaea;width: 780px;height:210px;border-radius: 5px;" >
                    <p style="margin-left: 25px;font-size: 13px;position: absolute;"><b>兼职职位</b><b style="margin-left: 250px;position: absolute;">公司名称 </b><b style="margin-left: 540px;">发布的时间</b></p>
                    <dl style="border:1px solid #eaeaea;width:780px;height:40px;position:absolute;top:130px;">

                        <dd style="margin-left: 25px;position: absolute;top:10px;">超市收营员</dd>
                        <dd style="margin-left: 320px;position: absolute;top:10px;">深圳市新近果科技有限公司</dd>
                        <dd style="margin-left: 600px;position: absolute;top:10px;">2015-05-05</dd>

                    </dl>
                    <dl style="border:1px solid #eaeaea;width:780px;height:40px;position:absolute;top:170px;">

                        <dd style="margin-left: 25px;position: absolute;top:10px;">服务员</dd>
                        <dd style="margin-left: 320px;position: absolute;top:10px;">北京盛丰有限公司</dd>
                        <dd style="margin-left: 600px;position: absolute;top:10px;">2015-03-22</dd>

                    </dl>
                    <dl style="border:1px solid#eaeaea;width:780px;height:40px;position:absolute;top:210px;">

                        <dd style="margin-left: 25px;position: absolute;top:10px;">派发传单</dd>
                        <dd style="margin-left: 320px;position: absolute;top:10px;">杭州文辉博库有限公司</dd>
                        <dd style="margin-left: 600px;position: absolute;top:10px;">2015-11-05</dd>

                    </dl>

                </div>
            </div>

            <div class="m43tan">
                <div style="border: 1px solid #eaeaea;width: 780px;height:210px;border-radius: 5px;">
                    <p style="margin-left: 25px;font-size: 13px;position: absolute;"><b>兼职职位</b><b style="margin-left: 250px;position: absolute;">公司名称 </b><b style="margin-left: 540px;">通过的时间</b></p>
                    <dl style="border:1px solid #eaeaea;width:780px;height:40px;position:absolute;top:130px;">

                        <dd style="margin-left: 25px;position: absolute;top:10px;">英语家教</dd>
                        <dd style="margin-left: 320px;position: absolute;top:10px;">杭州培训机构</dd>
                        <dd style="margin-left: 600px;position: absolute;top:10px;">2015-05-05</dd>

                    </dl>
                    <dl style="border:1px solid #eaeaea;width:780px;height:40px;position:absolute;top:170px;">

                        <dd style="margin-left: 25px;position: absolute;top:10px;">前台</dd>
                        <dd style="margin-left: 320px;position: absolute;top:10px;">北京盛丰有限公司</dd>
                        <dd style="margin-left: 600px;position: absolute;top:10px;">2015-03-22</dd>

                    </dl>
                    <dl style="border:1px solid#eaeaea;width:780px;height:40px;position:absolute;top:210px;">

                        <dd style="margin-left: 25px;position: absolute;top:10px;">派发传单</dd>
                        <dd style="margin-left: 320px;position: absolute;top:10px;">杭州文辉博库有限公司</dd>
                        <dd style="margin-left: 600px;position: absolute;top:10px;">2015-11-05</dd>

                    </dl>

                </div>
            </div>
        </div>
    </div>


    <!--收到的消息。-->
    <div class="qiuzhitan5">
        <h3 style="color: #FF5500;margin-left: 40px;"><b>收到的消息</b></h3>
        <div class="qiuzhitan4xq" >
            <ul>
                <li id="m81"><div align="center">未查看</div></li>
                <li id="m82"><div align="center">已查看</div></li>
                <li id="m83"><div align="center">已通过</div></li>
            </ul>
        </div>
        <div style="margin-left: 200px;margin-top:45px;border-top: 1px solid #eaeaea">
            <div class="m81tan">
                <div style="border: 1px solid #eaeaea;width: 780px;height:210px;border-radius: 5px;">
                    <p style="margin-left: 25px;font-size: 13px;position: absolute;"><b>兼职职位</b><b style="margin-left: 250px;position: absolute;">公司名称 </b><b style="margin-left: 540px;">收到的时间</b></p>
                    <dl style="border:1px solid #eaeaea;width:780px;height:40px;position:absolute;top:130px;">

                        <dd style="margin-left: 25px;position: absolute;top:10px;">淘宝客服</dd>
                        <dd style="margin-left: 320px;position: absolute;top:10px;">阿里巴巴</dd>
                        <dd style="margin-left: 600px;position: absolute;top:10px;">2015-05-05</dd>

                    </dl>
                    <dl style="border:1px solid #eaeaea;width:780px;height:40px;position:absolute;top:170px;">

                        <dd style="margin-left: 25px;position: absolute;top:10px;">图书馆小时工</dd>
                        <dd style="margin-left: 320px;position: absolute;top:10px;">北京盛丰有限公司</dd>
                        <dd style="margin-left: 600px;position: absolute;top:10px;">2015-03-22</dd>

                    </dl>
                    <dl style="border:1px solid#eaeaea;width:780px;height:40px;position:absolute;top:210px;">

                        <dd style="margin-left: 25px;position: absolute;top:10px;">派发传单</dd>
                        <dd style="margin-left: 320px;position: absolute;top:10px;">杭州文辉博库有限公司</dd>
                        <dd style="margin-left: 600px;position: absolute;top:10px;">2015-11-05</dd>

                    </dl>
                </div>
            </div>

            <div class="m82tan">
                <div style="border: 1px solid #eaeaea;width: 780px;height:210px;border-radius: 5px;" >
                    <p style="margin-left: 25px;font-size: 13px;position: absolute;"><b>兼职职位</b><b style="margin-left: 250px;position: absolute;">公司名称 </b><b style="margin-left: 540px;">收到的时间</b></p>
                    <dl style="border:1px solid #eaeaea;width:780px;height:40px;position:absolute;top:130px;">

                        <dd style="margin-left: 25px;position: absolute;top:10px;">超市收营员</dd>
                        <dd style="margin-left: 320px;position: absolute;top:10px;">深圳市新近果科技有限公司</dd>
                        <dd style="margin-left: 600px;position: absolute;top:10px;">2015-05-05</dd>

                    </dl>
                    <dl style="border:1px solid #eaeaea;width:780px;height:40px;position:absolute;top:170px;">

                        <dd style="margin-left: 25px;position: absolute;top:10px;">服务员</dd>
                        <dd style="margin-left: 320px;position: absolute;top:10px;">北京盛丰有限公司</dd>
                        <dd style="margin-left: 600px;position: absolute;top:10px;">2015-03-22</dd>

                    </dl>
                    <dl style="border:1px solid#eaeaea;width:780px;height:40px;position:absolute;top:210px;">

                        <dd style="margin-left: 25px;position: absolute;top:10px;">派发传单</dd>
                        <dd style="margin-left: 320px;position: absolute;top:10px;">杭州文辉博库有限公司</dd>
                        <dd style="margin-left: 600px;position: absolute;top:10px;">2015-11-05</dd>

                    </dl>

                </div>
            </div>

            <div class="m83tan">
                <div style="border: 1px solid #eaeaea;width: 780px;height:210px;border-radius: 5px;">
                    <p style="margin-left: 25px;font-size: 13px;position: absolute;"><b>兼职职位</b><b style="margin-left: 250px;position: absolute;">公司名称 </b><b style="margin-left: 540px;">收到的时间</b></p>
                    <dl style="border:1px solid #eaeaea;width:780px;height:40px;position:absolute;top:130px;">

                        <dd style="margin-left: 25px;position: absolute;top:10px;">英语家教</dd>
                        <dd style="margin-left: 320px;position: absolute;top:10px;">杭州培训机构</dd>
                        <dd style="margin-left: 600px;position: absolute;top:10px;">2015-05-05</dd>

                    </dl>
                    <dl style="border:1px solid #eaeaea;width:780px;height:40px;position:absolute;top:170px;">

                        <dd style="margin-left: 25px;position: absolute;top:10px;">前台</dd>
                        <dd style="margin-left: 320px;position: absolute;top:10px;">北京盛丰有限公司</dd>
                        <dd style="margin-left: 600px;position: absolute;top:10px;">2015-03-22</dd>

                    </dl>
                    <dl style="border:1px solid#eaeaea;width:780px;height:40px;position:absolute;top:210px;">

                        <dd style="margin-left: 25px;position: absolute;top:10px;">派发传单</dd>
                        <dd style="margin-left: 320px;position: absolute;top:10px;">杭州文辉博库有限公司</dd>
                        <dd style="margin-left: 600px;position: absolute;top:10px;">2015-11-05</dd>

                    </dl>

                </div>
            </div>
        </div>
    </div>

    <!--我的资金。-->
    <div class="zijin">
        <h3 style="color: #FF5500;margin-left: 40px;"><b>我的资金</b></h3>
        <p style="margin-left: 200px;margin-top:-40px;"><input type="submit"value="申请退款"style="background-color: #FF5500;height: 30px;width: 100px;font-size: 15px;color: #ffffff"></p>
        <div class="zijinxq" >
            <ul>
                <li id="m71"><div align="center">充值记录</div></li>
                <li id="m72"><div align="center">消费记录</div></li>
                <li id="m73"><div align="center">账户余额</div></li>
            </ul>
        </div>
        <div style="margin-left: 20px;margin-top:45px;border-top: 1px solid #eaeaea">
            <div class="m71tan">
                <div style="border: 1px solid #eaeaea;width: 780px;height:210px;border-radius: 5px;">
                    <p style="margin-left: 25px;font-size: 13px;position: absolute;"><b>充值金额</b><b style="margin-left: 250px;position: absolute;">充值时间 </b><b style="margin-left: 540px;">&nbsp;</b></p>
                    <dl style="border:1px solid #eaeaea;width:780px;height:40px;position:absolute;top:130px;">

                        <dd style="margin-left: 25px;position: absolute;top:10px;">¥20</dd>
                        <dd style="margin-left: 320px;position: absolute;top:10px;">2016年12月13日</dd>

                    </dl>
                    <dl style="border:1px solid #eaeaea;width:780px;height:40px;position:absolute;top:170px;">

                        <dd style="margin-left: 25px;position: absolute;top:10px;">¥10</dd>
                        <dd style="margin-left: 320px;position: absolute;top:10px;">2017年2月3日</dd>

                    </dl>
                    <dl style="border:1px solid#eaeaea;width:780px;height:40px;position:absolute;top:210px;">

                        <dd style="margin-left: 25px;position: absolute;top:10px;">¥20</dd>
                        <dd style="margin-left: 320px;position: absolute;top:10px;">2017年3月25日</dd>

                    </dl>
                </div>
            </div>

            <div class="m72tan">
                <div style="border: 1px solid #eaeaea;width: 780px;height:210px;border-radius: 5px;" >
                    <p style="margin-left: 25px;font-size: 13px;position: absolute;"><b>兼职职位</b><b style="margin-left: 250px;position: absolute;">消费金额 </b><b style="margin-left: 540px;">消费时间</b></p>
                    <dl style="border:1px solid #eaeaea;width:780px;height:40px;position:absolute;top:130px;">

                        <dd style="margin-left: 25px;position: absolute;top:10px;">超市收营员</dd>
                        <dd style="margin-left: 340px;position: absolute;top:10px;">¥10</dd>
                        <dd style="margin-left: 600px;position: absolute;top:10px;">2016年12月13日</dd>

                    </dl>
                    <dl style="border:1px solid #eaeaea;width:780px;height:40px;position:absolute;top:170px;">

                        <dd style="margin-left: 25px;position: absolute;top:10px;">服务员</dd>
                        <dd style="margin-left: 340px;position: absolute;top:10px;">¥20</dd>
                        <dd style="margin-left: 600px;position: absolute;top:10px;">2017年2月3日</dd>

                    </dl>
                    <dl style="border:1px solid#eaeaea;width:780px;height:40px;position:absolute;top:210px;">

                        <dd style="margin-left: 25px;position: absolute;top:10px;">派发传单</dd>
                        <dd style="margin-left: 340px;position: absolute;top:10px;">¥10</dd>
                        <dd style="margin-left: 600px;position: absolute;top:10px;">2017年3月25日</dd>

                    </dl>

                </div>
            </div>

            <div class="m73tan">
                <div style="border: 1px solid #eaeaea;width: 780px;height:210px;border-radius: 5px;">
                    <p style="margin-left: 25px;font-size: 13px;position: absolute;"><b>可用金额</b><b style="margin-left: 250px;position: absolute;">保证金</b><b style="margin-left: 540px;">总额</b></p>
                    <dl style="border:1px solid #eaeaea;width:780px;height:40px;position:absolute;top:130px;">

                        <dd style="margin-left: 35px;position: absolute;top:10px;">¥10</dd>
                        <dd style="margin-left: 330px;position: absolute;top:10px;">¥100</dd>
                        <dd style="margin-left: 610px;position: absolute;top:10px;">¥110</dd>

                    </dl>

                </div>
            </div>
        </div>
    </div>

    <!--底部-->
    <div class="dibu" style="width:100%;height:160px;border:1px solid white;position:absolute;top:1050px;">
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
</div>
</body>
</html>