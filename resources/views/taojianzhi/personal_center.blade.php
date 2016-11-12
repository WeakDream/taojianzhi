<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <title>个人中心</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/geren.css">
    <script src="../js/laydate/laydate.js"></script>
    <script type="text/javascript" src="../js/jquery-1.11.3.min.js" /></script>
    <script type="text/javascript">
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
            if($(".shang1").html()=="∧"){
                $(".shang1").html("∨");
            }
            else{
                $(".shang1").html("∧");
            }
        });


        $(".maijia1").click(function(){
            $(".maijia3").slideToggle("slow");
            if($(".shang2").html()=="∧"){
                $(".shang2").html("∨");
            }
            else{
                $(".shang2").html("∧");
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
        $(".jiaoyitan1").hide();
        $(".jiaoyitan2").hide();
        $(".jiaoyitan3").hide();
        $(".jiaoyitan4").hide();
        $(".jiaoyitan5").hide();
        $(".jiaoyitan6").hide();
        $(".jiaoyitan7").hide();
        $(".kefutan1").hide();
        $(".kefutan2").hide();
        $(".kefutan3").hide();



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
            $(".zhongxintan").show();
            $(".jiaoyitan1").hide();
            $(".jiaoyitan2").hide();
            $(".jiaoyitan3").hide();
            $(".jiaoyitan4").hide();
            $(".jiaoyitan5").hide();
            $(".jiaoyitan6").hide();
            $(".jiaoyitan7").hide();
            $(".kefutan1").hide();
            $(".kefutan2").hide();
            $(".kefutan3").hide();
        });


        $("#l2").click(function(){
            $(".zhongxintan").hide();
            $(".shouchangtan").hide();
            $(".qiuzhitan1").hide();
            $(".qiuzhitan2").hide();
            $(".qiuzhitan3").hide();
            $(".qiuzhitan4").hide();
            $(".zhaopintan1").hide();
            $(".zhaopintan2").hide();
            $(".zhaopintan3").hide();
            $(".zhaopintan4").hide();
            $(".fabutan").show();
            $(".jiaoyitan1").hide();
            $(".jiaoyitan2").hide();
            $(".jiaoyitan3").hide();
            $(".jiaoyitan4").hide();
            $(".jiaoyitan5").hide();
            $(".jiaoyitan6").hide();
            $(".jiaoyitan7").hide();
            $(".kefutan1").hide();
            $(".kefutan2").hide();
            $(".kefutan3").hide();
        });
        $("#l3").click(function(){
            $(".zhongxintan").hide();
            $(".fabutan").hide();
            $(".qiuzhitan1").hide();
            $(".qiuzhitan2").hide();
            $(".qiuzhitan3").hide();
            $(".qiuzhitan4").hide();
            $(".zhaopintan1").hide();
            $(".zhaopintan2").hide();
            $(".zhaopintan3").hide();
            $(".zhaopintan4").hide();
            $(".shouchangtan").show();
            $(".jiaoyitan1").hide();
            $(".jiaoyitan2").hide();
            $(".jiaoyitan3").hide();
            $(".jiaoyitan4").hide();
            $(".jiaoyitan5").hide();
            $(".jiaoyitan6").hide();
            $(".jiaoyitan7").hide();
            $(".kefutan1").hide();
            $(".kefutan2").hide();
            $(".kefutan3").hide();
        });
        $("#l41").click(function(){
            $(".zhongxintan").hide();
            $(".fabutan").hide();
            $(".qiuzhitan1").show();
            $(".qiuzhitan2").hide();
            $(".qiuzhitan3").hide();
            $(".qiuzhitan4").hide();
            $(".shouchangtan").hide();
            $(".zhaopintan1").hide();
            $(".zhaopintan2").hide();
            $(".zhaopintan3").hide();
            $(".zhaopintan4").hide();
            $(".jiaoyitan1").hide();
            $(".jiaoyitan2").hide();
            $(".jiaoyitan3").hide();
            $(".jiaoyitan4").hide();
            $(".jiaoyitan5").hide();
            $(".jiaoyitan6").hide();
            $(".jiaoyitan7").hide();
            $(".kefutan1").hide();
            $(".kefutan2").hide();
            $(".kefutan3").hide();
        });
        $("#l42").click(function(){
            $(".zhongxintan").hide();
            $(".fabutan").hide();
            $(".qiuzhitan1").hide();
            $(".qiuzhitan2").show();
            $(".qiuzhitan3").hide();
            $(".qiuzhitan4").hide();
            $(".shouchangtan").hide();
            $(".zhaopintan1").hide();
            $(".zhaopintan2").hide();
            $(".zhaopintan3").hide();
            $(".zhaopintan4").hide();
            $(".jiaoyitan1").hide();
            $(".jiaoyitan2").hide();
            $(".jiaoyitan3").hide();
            $(".jiaoyitan4").hide();
            $(".jiaoyitan5").hide();
            $(".jiaoyitan6").hide();
            $(".jiaoyitan7").hide();
            $(".kefutan1").hide();
            $(".kefutan2").hide();
            $(".kefutan3").hide();
        });
        $("#l43").click(function(){
            $(".zhongxintan").hide();
            $(".fabutan").hide();
            $(".qiuzhitan1").hide();
            $(".qiuzhitan2").hide();
            $(".qiuzhitan3").show();
            $(".qiuzhitan4").hide();
            $(".shouchangtan").hide();
            $(".zhaopintan1").hide();
            $(".zhaopintan2").hide();
            $(".zhaopintan3").hide();
            $(".zhaopintan4").hide();
            $(".jiaoyitan1").hide();
            $(".jiaoyitan2").hide();
            $(".jiaoyitan3").hide();
            $(".jiaoyitan4").hide();
            $(".jiaoyitan5").hide();
            $(".jiaoyitan6").hide();
            $(".jiaoyitan7").hide();
            $(".kefutan1").hide();
            $(".kefutan2").hide();
            $(".kefutan3").hide();
        });
        $("#l44").click(function(){
            $(".zhongxintan").hide();
            $(".fabutan").hide();
            $(".qiuzhitan1").hide();
            $(".qiuzhitan2").hide();
            $(".qiuzhitan3").hide();
            $(".shouchangtan").hide();
            $(".qiuzhitan4").show();
            $(".zhaopintan1").hide();
            $(".zhaopintan2").hide();
            $(".zhaopintan3").hide();
            $(".zhaopintan4").hide();
            $(".jiaoyitan1").hide();
            $(".jiaoyitan2").hide();
            $(".jiaoyitan3").hide();
            $(".jiaoyitan4").hide();
            $(".jiaoyitan5").hide();
            $(".jiaoyitan6").hide();
            $(".jiaoyitan7").hide();
            $(".kefutan1").hide();
            $(".kefutan2").hide();
            $(".kefutan3").hide();
        });
        $("#l51").click(function(){
            $(".zhongxintan").hide();
            $(".fabutan").hide();
            $(".qiuzhitan1").hide();
            $(".qiuzhitan2").hide();
            $(".qiuzhitan3").hide();
            $(".shouchangtan").hide();
            $(".qiuzhitan4").hide();
            $(".zhaopintan1").show();
            $(".zhaopintan2").hide();
            $(".zhaopintan3").hide();
            $(".zhaopintan4").hide();
            $(".jiaoyitan1").hide();
            $(".jiaoyitan2").hide();
            $(".jiaoyitan3").hide();
            $(".jiaoyitan4").hide();
            $(".jiaoyitan5").hide();
            $(".jiaoyitan6").hide();
            $(".jiaoyitan7").hide();
            $(".kefutan1").hide();
            $(".kefutan2").hide();
            $(".kefutan3").hide();
        });
        $("#l52").click(function(){
            $(".zhongxintan").hide();
            $(".fabutan").hide();
            $(".qiuzhitan1").hide();
            $(".qiuzhitan2").hide();
            $(".qiuzhitan3").hide();
            $(".shouchangtan").hide();
            $(".qiuzhitan4").hide();
            $(".zhaopintan1").hide();
            $(".zhaopintan2").show();
            $(".zhaopintan3").hide();
            $(".zhaopintan4").hide();
            $(".jiaoyitan1").hide();
            $(".jiaoyitan2").hide();
            $(".jiaoyitan3").hide();
            $(".jiaoyitan4").hide();
            $(".jiaoyitan5").hide();
            $(".jiaoyitan6").hide();
            $(".jiaoyitan7").hide();
            $(".kefutan1").hide();
            $(".kefutan2").hide();
            $(".kefutan3").hide();
        });
        $("#l53").click(function(){
            $(".zhongxintan").hide();
            $(".fabutan").hide();
            $(".qiuzhitan1").hide();
            $(".qiuzhitan2").hide();
            $(".qiuzhitan3").hide();
            $(".shouchangtan").hide();
            $(".qiuzhitan4").hide();
            $(".zhaopintan1").hide();
            $(".zhaopintan2").hide();
            $(".zhaopintan3").show();
            $(".zhaopintan4").hide();
            $(".jiaoyitan1").hide();
            $(".jiaoyitan2").hide();
            $(".jiaoyitan3").hide();
            $(".jiaoyitan4").hide();
            $(".jiaoyitan5").hide();
            $(".jiaoyitan6").hide();
            $(".jiaoyitan7").hide();
            $(".kefutan1").hide();
            $(".kefutan2").hide();
            $(".kefutan3").hide();
        });
        $("#l54").click(function(){
            $(".zhongxintan").hide();
            $(".fabutan").hide();
            $(".qiuzhitan1").hide();
            $(".qiuzhitan2").hide();
            $(".qiuzhitan3").hide();
            $(".shouchangtan").hide();
            $(".qiuzhitan4").hide();
            $(".zhaopintan1").hide();
            $(".zhaopintan2").hide();
            $(".zhaopintan3").hide();
            $(".zhaopintan4").show();
            $(".jiaoyitan1").hide();
            $(".jiaoyitan2").hide();
            $(".jiaoyitan3").hide();
            $(".jiaoyitan4").hide();
            $(".jiaoyitan5").hide();
            $(".jiaoyitan6").hide();
            $(".jiaoyitan7").hide();
            $(".kefutan1").hide();
            $(".kefutan2").hide();
            $(".kefutan3").hide();
        });

        $("#161").click(function(){
            $(".jiaoyitan1").show();
            $(".zhongxintan").hide();
            $(".fabutan").hide();
            $(".qiuzhitan1").hide();
            $(".qiuzhitan2").hide();
            $(".qiuzhitan3").hide();
            $(".shouchangtan").hide();
            $(".qiuzhitan4").hide();
            $(".zhaopintan1").hide();
            $(".zhaopintan2").hide();
            $(".zhaopintan3").hide();
            $(".zhaopintan4").hide();
            $(".jiaoyitan2").hide();
            $(".jiaoyitan3").hide();
            $(".jiaoyitan4").hide();
            $(".jiaoyitan5").hide();
            $(".jiaoyitan6").hide();
            $(".jiaoyitan7").hide();
            $(".kefutan1").hide();
            $(".kefutan2").hide();
            $(".kefutan3").hide();
        });
        $("#162").click(function(){
            $(".jiaoyitan2").show();
            $(".zhongxintan").hide();
            $(".fabutan").hide();
            $(".qiuzhitan1").hide();
            $(".qiuzhitan2").hide();
            $(".qiuzhitan3").hide();
            $(".shouchangtan").hide();
            $(".qiuzhitan4").hide();
            $(".zhaopintan1").hide();
            $(".zhaopintan2").hide();
            $(".zhaopintan3").hide();
            $(".zhaopintan4").hide();
            $(".jiaoyitan1").hide();
            $(".jiaoyitan3").hide();
            $(".jiaoyitan4").hide();
            $(".jiaoyitan5").hide();
            $(".jiaoyitan6").hide();
            $(".jiaoyitan7").hide();
            $(".kefutan1").hide();
            $(".kefutan2").hide();
            $(".kefutan3").hide();
        });

        $("#163").click(function(){
            $(".jiaoyitan3").show();
            $(".zhongxintan").hide();
            $(".fabutan").hide();
            $(".qiuzhitan1").hide();
            $(".qiuzhitan2").hide();
            $(".qiuzhitan3").hide();
            $(".shouchangtan").hide();
            $(".qiuzhitan4").hide();
            $(".zhaopintan1").hide();
            $(".zhaopintan2").hide();
            $(".zhaopintan3").hide();
            $(".zhaopintan4").hide();
            $(".jiaoyitan1").hide();
            $(".jiaoyitan2").hide();
            $(".jiaoyitan4").hide();
            $(".jiaoyitan5").hide();
            $(".jiaoyitan6").hide();
            $(".jiaoyitan7").hide();
            $(".kefutan1").hide();
            $(".kefutan2").hide();
            $(".kefutan3").hide();
        });
        $("#164").click(function(){
            $(".jiaoyitan4").show();
            $(".zhongxintan").hide();
            $(".fabutan").hide();
            $(".qiuzhitan1").hide();
            $(".qiuzhitan2").hide();
            $(".qiuzhitan3").hide();
            $(".shouchangtan").hide();
            $(".qiuzhitan4").hide();
            $(".zhaopintan1").hide();
            $(".zhaopintan2").hide();
            $(".zhaopintan3").hide();
            $(".zhaopintan4").hide();
            $(".jiaoyitan1").hide();
            $(".jiaoyitan3").hide();
            $(".jiaoyitan2").hide();
            $(".jiaoyitan5").hide();
            $(".jiaoyitan6").hide();
            $(".jiaoyitan7").hide();
            $(".kefutan1").hide();
            $(".kefutan2").hide();
            $(".kefutan3").hide();
        });
        $("#165").click(function(){
            $(".jiaoyitan5").show();
            $(".zhongxintan").hide();
            $(".fabutan").hide();
            $(".qiuzhitan1").hide();
            $(".qiuzhitan2").hide();
            $(".qiuzhitan3").hide();
            $(".shouchangtan").hide();
            $(".qiuzhitan4").hide();
            $(".zhaopintan1").hide();
            $(".zhaopintan2").hide();
            $(".zhaopintan3").hide();
            $(".zhaopintan4").hide();
            $(".jiaoyitan1").hide();
            $(".jiaoyitan3").hide();
            $(".jiaoyitan4").hide();
            $(".jiaoyitan2").hide();
            $(".jiaoyitan6").hide();
            $(".jiaoyitan7").hide();
            $(".kefutan1").hide();
            $(".kefutan2").hide();
            $(".kefutan3").hide();
        });
        $("#166").click(function(){
            $(".jiaoyitan6").show();
            $(".zhongxintan").hide();
            $(".fabutan").hide();
            $(".qiuzhitan1").hide();
            $(".qiuzhitan2").hide();
            $(".qiuzhitan3").hide();
            $(".shouchangtan").hide();
            $(".qiuzhitan4").hide();
            $(".zhaopintan1").hide();
            $(".zhaopintan2").hide();
            $(".zhaopintan3").hide();
            $(".zhaopintan4").hide();
            $(".jiaoyitan1").hide();
            $(".jiaoyitan3").hide();
            $(".jiaoyitan4").hide();
            $(".jiaoyitan5").hide();
            $(".jiaoyitan2").hide();
            $(".jiaoyitan7").hide();
            $(".kefutan1").hide();
            $(".kefutan2").hide();
            $(".kefutan3").hide();
        });
        $("#167").click(function(){
            $(".jiaoyitan7").show();
            $(".zhongxintan").hide();
            $(".fabutan").hide();
            $(".qiuzhitan1").hide();
            $(".qiuzhitan2").hide();
            $(".qiuzhitan3").hide();
            $(".shouchangtan").hide();
            $(".qiuzhitan4").hide();
            $(".zhaopintan1").hide();
            $(".zhaopintan2").hide();
            $(".zhaopintan3").hide();
            $(".zhaopintan4").hide();
            $(".jiaoyitan1").hide();
            $(".jiaoyitan3").hide();
            $(".jiaoyitan4").hide();
            $(".jiaoyitan5").hide();
            $(".jiaoyitan6").hide();
            $(".jiaoyitan2").hide();
            $(".kefutan1").hide();
            $(".kefutan2").hide();
            $(".kefutan3").hide();
        });
        $("#171").click(function(){
            $(".kefutan1").show();
            $(".zhongxintan").hide();
            $(".fabutan").hide();
            $(".qiuzhitan1").hide();
            $(".qiuzhitan2").hide();
            $(".qiuzhitan3").hide();
            $(".shouchangtan").hide();
            $(".qiuzhitan4").hide();
            $(".zhaopintan1").hide();
            $(".zhaopintan2").hide();
            $(".zhaopintan3").hide();
            $(".zhaopintan4").hide();
            $(".jiaoyitan1").hide();
            $(".jiaoyitan2").hide();
            $(".jiaoyitan3").hide();
            $(".jiaoyitan4").hide();
            $(".jiaoyitan5").hide();
            $(".jiaoyitan6").hide();
            $(".jiaoyitan7").hide();
            $(".kefutan2").hide();
            $(".kefutan3").hide();
        });
        $("#172").click(function(){
            $(".kefutan2").show();
            $(".zhongxintan").hide();
            $(".fabutan").hide();
            $(".qiuzhitan1").hide();
            $(".qiuzhitan2").hide();
            $(".qiuzhitan3").hide();
            $(".shouchangtan").hide();
            $(".qiuzhitan4").hide();
            $(".zhaopintan1").hide();
            $(".zhaopintan2").hide();
            $(".zhaopintan3").hide();
            $(".zhaopintan4").hide();
            $(".jiaoyitan1").hide();
            $(".jiaoyitan2").hide();
            $(".jiaoyitan3").hide();
            $(".jiaoyitan4").hide();
            $(".jiaoyitan5").hide();
            $(".jiaoyitan6").hide();
            $(".jiaoyitan7").hide();
            $(".kefutan1").hide();
            $(".kefutan3").hide();
        });
        $("#173").click(function(){
            $(".kefutan3").show();
            $(".zhongxintan").hide();
            $(".fabutan").hide();
            $(".qiuzhitan1").hide();
            $(".qiuzhitan2").hide();
            $(".qiuzhitan3").hide();
            $(".shouchangtan").hide();
            $(".qiuzhitan4").hide();
            $(".zhaopintan1").hide();
            $(".zhaopintan2").hide();
            $(".zhaopintan3").hide();
            $(".zhaopintan4").hide();
            $(".jiaoyitan1").hide();
            $(".jiaoyitan2").hide();
            $(".jiaoyitan3").hide();
            $(".jiaoyitan4").hide();
            $(".jiaoyitan5").hide();
            $(".jiaoyitan6").hide();
            $(".jiaoyitan7").hide();
            $(".kefutan2").hide();
            $(".kefutan1").hide();
        });




        $(".m11tan").show();
        $(".m12tan").hide();

        $("#m11").click(function(){
            $(".m12tan").hide();
            $(".m11tan").show();
        });
        $("#m12").click(function(){
            $(".m11tan").hide();
            $(".m12tan").show();
        });


        $(".m21tan").show();
        $(".m22tan").hide();
        $(".m23tan").hide();

        $("#m21").click(function(){
            $(".m22tan").hide();
            $(".m23tan").hide();
            $(".m21tan").show();
        });
        $("#m22").click(function(){
            $(".m21tan").hide();
            $(".m23tan").hide();
            $(".m22tan").show();
        });
        $("#m23").click(function(){
            $(".m21tan").hide();
            $(".m22tan").hide();
            $(".m23tan").show();
        });



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

        $("#m41").click(function(){
            $(".m42tan").hide();
            $(".m41tan").show();
        });
        $("#m42").click(function(){
            $(".m41tan").hide();
            $(".m42tan").show();
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

    });
    </script>

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
    </style>
</head>

<body>
<!--灰色导航栏-->
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
        <div class="daohang4tan"><a href="/gerenzhongxin">个人中心</a><a href="#">添加修改简历</a><a href="#">查看招聘信息</a></div>
        <div class="daohang5tan"><a href="#">网站简介</a><a href="#">组织结构</a><a href="#">发展历程</a></div>

    </div>
</div>


<div class="chen">
    <div class="chen1" style="width:1024px;height:100%;margin:0 auto;">
        <img src="../img/taologo2.jpg" style="width:140px;margin-left: 20px;margin-top:10px;">
        <div style="font-size:20px;color:#ffffff;margin-top:-55px;margin-left: 230px;position: absolute;font-weight:600;">个人中心</div>
        <div style="font-size:18px;color:#ffffff;margin-top:-53px;margin-left: 350px;position: absolute">账户设置</div>
        <div style="font-size:18px;color:#ffffff;margin-top:-53px;margin-left: 470px;position: absolute">我的资金</div>
        <form>
            <input type="text" placeholder="搜索" style="padding-left:5px;border:1px solid #FF5500;height:28px;width:170px;top:27px;margin-left:630px;position:absolute;border-radius:2px;">
            <button style="color:white;font-size:18px;font-weight:600;width:50px;height:26px;background:#FF8c00;border:0px;left:960px;top:28px;position:absolute;cursor:pointer;border-radius:2px;"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
            <a href="#" style="text-decoration:none;border:1px solid #ffffff;height:30px;width:100px;top:25px;margin-left:900px;position:absolute;font-size:17px;color: #ffffff">&nbsp&nbsp&nbsp发布消息</a>
        </form>
    </div>
</div>


<div class="rongqi" style="border:0px solid red;width:1024px;top:20px;height:750px;position:relative;margin:0 auto;cursor:default;">
    <!--左边-->

    <div class="bj" style="position:relative;height:800px;width:200px;background: #fafafa;float:left">
        <div style="width:110px;height:40px;line-height: 33px;margin-left:50px;margin-top:10px;font-size: 18px;font-weight: 700;clear:both;border-bottom: 1px solid #eaeaea;padding-bottom: 12px;">
            <a href="#" style="text-decoration:none;color:#595757;margin-top:20px;display:block;">
                <span id="l1">个人中心</span>
            </a>
        </div>
        <ul class="zuo" style="margin-top:10px;cursor:default;list-style-type:none;">
            <li style="font-size: 16px;margin-left: 20px;">
                <a href="#"target="_self"style="text-decoration: none;color: #000000">
                    <span id="l2">我的发布</span>
                </a>
            </li>
            <li style="font-size: 16px;margin-left: 20px;margin-top: 20px;">
                <a href="#"target="_self"style="text-decoration: none;color: #000000">
                    <span id="l3">我的收藏</span>
                </a>
            </li>
            <li class="qiuzhi">
                <span style="color:#666464;">我的求职&nbsp;</span>
                <span id="xia" class="glyphicon glyphicon-menu-up" aria-hidden="true" style="opacity:0.8;"></span>
                </a>
            </li>
            <div class="qiuzhi2">
                <li style="margin-top: 10px;"id="l41">我的简历</li>
                <li style="margin-top: 10px;"id="l42">简历投递记录</li>
                <li style="margin-top: 10px;"id="l43">谁下载了我的简历</li>
                <li style="margin-top: 10px;"id="l44">工作邀请</li>
            </div>
            <li class="zhaopin">
                <span style="color:#666464;">我的招聘&nbsp;</span>
                <span id="xia1" class="glyphicon glyphicon-menu-up" aria-hidden="true" style="opacity:0.8;"></span>
                </a>
            </li>
            <div class="zhaopin2">
                <li style="margin-top: 10px;"id="l51">职位管理</li>
                <li style="margin-top: 10px;"id="l52">简历管理</li>
                <li style="margin-top: 10px;"id="l53">快速招人</li>
                <li style="margin-top: 10px;"id="l54">公司资料</li>
            </div>
            <li class="jiaoyi" >
                <span style="color:#666464;">我的交易&nbsp;</span>
                <span id="xia2" class="glyphicon glyphicon-menu-up" aria-hidden="true" style="opacity:0.8;"></span>
                </a>
            </li>
            <div class="jiaoyi2">
                <li class="maijia">买家交易&nbsp;<span class="shang1">∧</span></li>
            </div>
            <div class="maijia2">
                <li style="margin-top: 0px;" id="161">订单管理</li>
                <li style="margin-top: 10px;" id="162">评价管理</li>
                <li style="margin-top: 10px;" id="163">退款管理</li>
            </div>
            <div class="jiaoyi3">
                <li class="maijia1">卖家交易&nbsp;<span class="shang2">∧</span></li>
            </div>
            <div class="maijia3">
                <li style="margin-top: 0px;" id="164">订单管理</li>
                <li style="margin-top: 10px;" id="165">退款管理</li>
                <li style="margin-top: 10px;" id="166">提现管理</li>
                <li style="margin-top: 10px;" id="167">商机留言管理</li>
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
            </div>

        </ul>


        <div class="shenghuo" style="position:relative;width:110px;height:33px;line-height: 33px;margin-left:50px;margin-top:10px;font-size: 18px;font-weight: 700;clear:both;padding-bottom: 12px;">
            <span style="color:#595757;">生活工具</span>
        </div>
        <img src="../img/tubiao.jpg" style="margin-left:40px;margin-top:10px;">
    </div>
    <!--右部-->
    <div class="zhongxintan">
        <div style="border: 0px solid red;height: 150px;width: 100%;margin-left:40px;">
            <img src="../img/person.jpg" style="width:130px;height:130px;border-radius:65px;">
            <p style="font-size: 20px;margin-top: -80px;margin-left:180px;position: absolute;"><b>账户名字</b></p>
            <p style="margin-left: 280px;margin-top: -75px;position: absolute">消息|余额</p>
        </div>
        <div style="margin-left: 40px;font-size: 15px;margin-top: 10px;" >
            <span id="m11">最近发布信息</span>
            <span style="margin-left: 20px;"id="m12">我浏览过的信息</span>
            <div class="m11tan">
                <p style="margin-top: 50px;margin-left: 250px;"> <img src="../img/sm.png">您还没有发布消息。<a href="#"style="text-decoration: none">去发一条吧</a></p>
            </div>
            <div class="m12tan">
                <table style="font-size: 14px;height: 80px">
                    <tr >
                        <th >信息标题</th>
                        <th width="600">更新时间</th>
                        <th >操作</th>
                    </tr>
                    <tr>
                        <th colspan="3"style="text-align: center;">您没有浏览过任何信息</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>


    <div class="fabutan">
        <h3 style="color: #FF5500;margin-left: 40px;">我的发布</h3>
        <div class="fabuxq" >
            <ul>
                <li id="m21"><div align="center">最新的信息</div></li>
                <li id="m22"><div align="center">审核中的信息</div></li>
                <li id="m23"><div align="center">已删除的信息</div></li>
            </ul>
        </div>
        <div style="margin-left: 20px;margin-top:45px;border-top: 1px solid #eaeaea">
            <div class="m21tan">
                <p style="margin-top: 50px;margin-left: 250px;"> <img src="../img/sm.png"><span style="margin-left:10px;">您还没有发布消息。</span><a href="#"style="text-decoration: none；">去发一条吧</a></p>
            </div>
            <div class="m22tan">
                <table style="font-size: 14px;">
                    <tr>
                        <th >标题</th>
                        <th width="600">更新时间</th>
                        <th >操作</th>
                    </tr>
                </table>
                <img src="../img/sm.png"style="margin-top: 50px;">
                <p style="margin-left: 35px;margin-top: -30px;">说明:</p>
                <p style="font-size: 12px;"> 1.待审核:待审核中的信息除了您自己外，其他人无法看到，工作人员会在24小时内为您审核。</p>
            </div>
            <div class="m23tan">
                <table style="font-size: 14px;">
                    <tr>
                        <th >标题</th>
                        <th width="600">更新时间</th>
                        <th >操作</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="shouchangtan">
        <h3 style="color: #FF5500;margin-left: 40px;">我的收藏</h3>
        <div class="shouchangxq" >
            <ul>
                <li id="m31"><div align="center">收藏的信息</div></li>
                <li id="m32"><div align="center">谁收藏了我的信息</div></li>
                <li id="m33"><div align="center">浏览过的信息</div></li>
                <li id="m34"><div align="center">关注的店铺</div></li>
            </ul>
        </div>
        <div style="margin-left: 20px;margin-top:45px;border-top: 1px solid #eaeaea">
            <div class="m31tan">
                <table style="font-size: 14px;height: 80px;">
                    <tr>
                        <th width="357.6">信息标题</th>
                        <th width="350">更新时间</th>
                        <th >操作</th>
                    </tr>
                    <tr>
                       <!-- <th colspan="3"style="text-align: center;">您没有收藏过任何信息</th>!-->
                    </tr>
                </table>
                <form>
                    <input type="checkbox">全选
                    <input type="submit" value="删除">
                </form>
                @if(isset($saved_company))
                    @if(!empty($saved_company))
                        @foreach($saved_company as $company)
                            <table style="width: 800px;broder: 0px;">
                                <tr style="height: 40px">
                                    <td>{{$company->company_name}}</td>
                                    <td>{{$company->created_at}}</td>
                                    <td>删除</td>
                                </tr>
                            </table>
                        @endforeach
                    @endif
                @endif

            </div>
            <div class="m32tan">
                <table style="font-size: 14px;height: 80px;">
                    <tr>
                        <th width="150">收藏信息者</th>
                        <th width="450">所收藏信息</th>
                        <th width="100">收藏时间 </th>
                        <th >操作</th>
                    </tr>
                    <tr>
                        <th colspan="3"style="text-align: center;">很抱歉，您的消息还没有被收藏</th>
                    </tr>
                </table>
                <form>
                    <input type="checkbox">全选
                    <input type="submit" value="删除">
                </form>

            </div>
            <div class="m33tan">
                <table style="font-size: 14px;height: 80px;">
                    <tr>
                        <th width="600">信息标题</th>
                        <th width="100">更新时间</th>
                        <th >操作</th>
                    </tr>
                    <tr>
                        <th colspan="3"style="text-align: center;">您没有浏览过任何信息</th>
                    </tr>
                </table>
                <form>
                    <input type="checkbox">全选
                    <input type="submit" value="删除">
                </form>
            </div>
            <div class="m34tan"></div>
        </div>
    </div>

    <div class="qiuzhitan1">
        <h3 style="color: #FF5500;margin-left: 40px;">我的简历</h3>
        <p style="margin-left: 55px;font-size: 16px;margin-top:30px;">简历是求职的利器，填写简历才能尽快找到好工作！</p>
        <p style="margin-left: 55px;font-size: 16px;">去填写一份优质的简历吧，认真的人，才能让认真的企业找上你！</p>
        <p style="margin-left: 55px;font-size:18px;font-weight: 700;">请在这设计你的简历吧：</p>



        <div class="zhaopintan1">
            <h3 style="color: #FF5500;margin-left: 40px;">职位管理</h3>
            <div class="zhaopintan1xq" >
                <ul>
                    <li id="m511"><div align="center">最新信息</div></li>
                    <li id="m512"><div align="center">显示中的信息</div></li>
                    <li id="m513"><div align="center">审核中的信息</div></li>
                    <li id="m514"><div align="center">未显示的消息</div></li>
                </ul>
            </div>
            <div style="margin-left: 20px;margin-top:45px;border-top: 1px solid #eaeaea">
                <div class="m511tan">
                    <p align="center "style="margin-top: 30px;font-size: 14px;">暂时还没有消息</p>
                </div>
                <div class="m512tan">
                    <p align="center "style="margin-top: 30px;font-size: 14px;">暂时还没有显示的消息</p>
                </div>
                <div class="m513tan">
                    <p align="center "style="margin-top: 30px;font-size: 14px;">暂时还没有审核的消息</p>
                </div>
                <div class="m514tan">
                    <p align="center "style="margin-top: 30px;font-size: 14px;">暂时还没有关闭的消息</p>
                </div>
            </div>
        </div>
        <div class="zhaopintan2">
            <h3 style="color: #FF5500;margin-left: 40px;">简历管理</h3>
            <div class="zhaopintan2xq" >
                <ul>
                    <li id="m521"><div align="center">收到的简历</div></li>
                    <li id="m522"><div align="center">已下载的简历</div></li>
                    <li id="m523"><div align="center">发送的面试邀请</div></li>
                </ul>
            </div>
            <div style="margin-left: 20px;margin-top:45px;border-top: 1px solid #eaeaea">
            </div>
        </div>
        <div class="zhaopintan3">
            <h3 style="color: #FF5500;margin-left: 40px;">快速招人</h3>
        </div>
        <div class="zhaopintan4">
            <h3 style="color: #FF5500;margin-left: 40px;">公司资料</h3>
            <form action="" method="post">
                <table class="gongsi" border=0 width=90% height=700>
                    <tbody>
                    <tr>
                        <th>
                            <span><i>*</i>&nbsp;&nbsp;公司身份</span>
                        </th>
                        <td>
                            <input type="radio" name="shenfen" checked>公司直招&nbsp;&nbsp;
                            <input type="radio" name="shenfen" >职业代招(职业中介或劳务派遣公司，请勾选此项，选择后不可更改)
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span><i>*</i>&nbsp;&nbsp;公司名称</span>
                        </th>
                        <td>
                            <input type="text" size="40" placeholder="请填写营业执照上的名称。" style="height:32px;padding:3px;background:white;border:1px solid #CCCCCC;">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span><i>*</i>&nbsp;&nbsp;公司别称</span>
                        </th>
                        <td>
                            <input type="text" size="40" placeholder="公司的口头称呼，没有时填写全称。" style="height:32px;padding:3px;background:white;border:1px solid #CCCCCC;">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span><i>*</i>&nbsp;&nbsp;所属行业</span>
                        </th>
                        <td>
                            <input type="text" size="40" style="height:32px;padding:3px;background:white;border:1px solid #CCCCCC;">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span><i>*</i>&nbsp;&nbsp;公司性质</span>
                        </th>
                        <td>
                            <select size="1" style="height:32px;">
                                <option>请选择</option>
                                <option>私有</option>
                                <option>国有</option>
                                <option>股份制</option>
                                <option>外商独资/办事处</option>
                                <option>中外合资/合作</option>
                                <option>上市公司</option>
                                <option>事业单位</option>
                                <option>政府机关</option>
                                <option>非营利机构</option>
                                <option>事业单位</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span><i>*</i>&nbsp;&nbsp;公司规模</span>
                        </th>
                        <td>
                            <select size="1" style="height:32px;">
                                <option>1-49人</option>
                                <option>50-99人</option>
                                <option>100-499人</option>
                                <option>500-999人</option>
                                <option>1000人以上</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span><i>*</i>&nbsp;&nbsp;公司简介</span>
                        </th>
                        <td>
                    <textarea rows="8" cols="70" placeholder="请简单介绍您的公司，让求职者了解您的公司，提高招聘效率，如您的公司的主要业务，公司规模，公司性质，成立时间等。">
                    </textarea>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span><i>*</i>&nbsp;&nbsp;联系人</span>
                        </th>
                        <td>
                            <input type="text" size="30" style="height:32px;padding:3px;background:white;border:1px solid #CCCCCC;">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span><i>*</i>&nbsp;&nbsp;招聘电话</span>
                        </th>
                        <td>
                            <input type="text" size="30" style="height:32px;padding:3px;background:white;border:1px solid #CCCCCC;">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span>&nbsp;&nbsp;&nbsp;&nbsp;招聘邮箱</span>
                        </th>
                        <td>
                            <input type="text" size="30" style="height:32px;padding:3px;background:white;border:1px solid #CCCCCC;">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span>&nbsp;&nbsp;&nbsp;&nbsp;公司网址</span>
                        </th>
                        <td>
                            <input type="text" size="30" style="height:32px;padding:3px;background:white;border:1px solid #CCCCCC;">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span><i>*</i>&nbsp;&nbsp;公司地址</span>
                        </th>
                        <td>
                            <input type="text" size="30" style="height:32px;padding:3px;background:white;border:1px solid #CCCCCC;">
                        </td>
                    </tr>
                    </tbody>
                </table>

                <input type="submit" value="确认" style="margin-left:300px;margin-top:40px;background:#FF5500;color:white;font-size:22px;width:220px;height:50px;border:0px;border-radius:3px;">
            </form>
        </div>

        <div class="jiaoyitan1" style="height:750px;width:824px;border:0px solid blue;margin-left:200px;">
            <h3 style="color: #FF5500;margin-left: 40px;">订单管理</h3>
            <select style="margin-left:40px;margin-top:20px;width:180px;">
                <option>全部订单</option>
            </select>
            <a href="#" style="margin-left:30px;">更多筛选条件&nbsp;<span class="glyphicon glyphicon-circle-arrow-down" aria-hidden="true"></span></a>
            <table style="margin-left:40px;margin-top:20px;border:1px solid #E3E3E3;width:760px;background:#F4F4F4;height:30px;">
                <tr>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;购买商品</td>
                    <td>单价</td>
                    <td>数量</td>
                    <td>服务时间</td>
                    <td>售后</td>
                    <td>卖家</td>
                    <td>实付款</td>
                    <td>
                        <select>
                            <option>订单状态</option>
                            <option>待确认</option>
                            <option>待付款</option>
                            <option>已付款</option>
                            <option>待发货</option>
                            <option>已发货</option>
                            <option>交易关闭</option>
                            <option>交易成功</option>
                        </select>
                    </td>
                    <td>操作</td>
                </tr>
            </table>
            <img src="img/sm.png" style="margin-left:300px;margin-top:50px;">
            <div style="margin-left:340px;margin-top:-30px;">您没有交易信息。</div>
        </div>


        <div class="jiaoyitan2" style="height:750px;width:824px;border:0px solid blue;margin-left:200px;">
            <h3 style="color: #FF5500;margin-left: 40px;">评价管理</h3>
            <table style="margin-left:40px;margin-top:20px;border:1px solid #E3E3E3;background:#F4F4F4;height:40px;width:750px;padding-left:5px;">
                <tr>
                    <td>&nbsp;&nbsp;</td>
                    <td width="110">
                        <select>
                            <option>全部评价</option>
                        </select>
                    </td>
                    <td width="110">
                        <select>
                            <option>全部星级</option>
                            <option>一星</option>
                            <option>二星</option>
                            <option>三星</option>
                            <option>四星</option>
                            <option>五星</option>
                        </select>
                    </td>
                    <td>
                        <select>
                            <option>时间</option>
                            <option>最近1周</option>
                            <option>最近1个月</option>
                            <option>最近6个月</option>
                            <option>6个月前</option>
                        </select>
                    </td>
                    <td>被评价人</td>
                    <td>交易信息</td>
                    <td>操作</td>

                </tr>
            </table>
            <img src="img/sm.png" style="margin-left:300px;margin-top:50px;">
            <div style="margin-left:340px;margin-top:-30px;">您暂时没有给他人做出评价。</div>
        </div>


        <div class="jiaoyitan3" style="height:750px;width:824px;border:0px solid blue;margin-left:200px;">
            <h3 style="color: #FF5500;margin-left: 40px;">退款管理</h3>
            <div style="border:0px solid red;width:800px;height:30px;margin-left:40px;">
                <form>
                    <span>订单编号：</span>
                    <input type="text">
                    <span style="margin-left:5px;">退款编号：</span>
                    <input type="text">
                    <span style="margin-left:5px">下单时间：</span>
                    <select>
                        <option>三个月以内</option>
                        <option>三个月以前</option>
                    </select>
                    <input style="margin-left:10px;" type="submit" value="搜索">
                </form>
            </div>
            <div class="jiaoyitan31" >
                <ul>
                    <li id="m51"><div align="center">等待卖家确认</div></li>
                    <li id="m52"><div align="center">退款成功</div></li>
                    <li id="m52"><div align="center">退款拒绝</div></li>
                </ul>
            </div>
            <table style="margin-left:40px;margin-top:10px;border:1px solid #E3E3E3;background:#F4F4F4;height:40px;">
                <tr>
                    <td width="80" align="center">退款编号</td>
                    <td width="80" align="center">订单编号</td>
                    <td width="80" align="center">产品信息</td>
                    <td width="60" align="center">卖家</td>
                    <td width="120" align="center">交易金额（元）</td>
                    <td width="120" align="center">退款金额（元）</td>
                    <td width="80" align="center">申请时间</td>
                    <td width="80" align="center">退款状态</td>
                    <td width="60" align="center">操作</td>
                </tr>
            </table>
        </div>

        <div class="jiaoyitan4" style="height:750px;width:824px;border:1px solid white;margin-left:200px;">
            <h3 style="color: #FF5500;margin-left: 40px;">订单管理</h3>
            <div class="dingdan1" style="width:720px;height:26px;border-bottom:1px solid #FFDDBC;margin-top:20px;margin-left:30px;">
                <ul>
                    <li><div align="center">待确认</div><li>
                    <li><div align="center">待付款</div><li>
                    <li><div align="center">待发货</div><li>
                    <li><div align="center">已发货</div><li>
                    <li><div align="center">退款中</div><li>
                    <li><div align="center">订单关闭</div><li>
                    <li><div align="center">交易成功</div><li>
                </ul>
            </div>
            <table style="margin-left:36px;border:1px solid #E3E3E3;background:#F4F4F4;height:40px;">
                <tr>
                    <td width="122" align="center">商品</td>
                    <td width="60" align="center">单价</td>
                    <td width="60" align="center">数量</td>
                    <td width="80" align="center">服务时间</td>
                    <td width="60" align="center">售后</td>
                    <td width="60" align="center">买家</td>
                    <td width="70" align="center">实收款</td>
                    <td width="80" align="center">订单状态</td>
                    <td width="60" align="center">操作</td>
                    <td width="60" align="center">评价</td>
                </tr>
            </table>
            <img src="img/sm.png" style="margin-left:220px;margin-top:50px;">
            <div style="margin-left:260px;margin-top:-30px;">没有符合条件的订单，请尝试其他搜索条件。</div>
        </div>

        <div class="jiaoyitan5" style="height:750px;width:824px;border:1px solid blue;margin-left:200px;">
            <h3 style="color: #FF5500;margin-left: 40px;">退款管理</h3>
            <div style="border:0px solid red;width:800px;height:30px;margin-left:40px;">
                <form>
                    <span>订单编号：</span>
                    <input type="text">
                    <span style="margin-left:5px;">退款编号：</span>
                    <input type="text">
                    <span style="margin-left:5px">下单时间：</span>
                    <select>
                        <option>三个月以内</option>
                        <option>三个月以前</option>
                    </select>
                    <input style="margin-left:10px;" type="submit" value="搜索">
                </form>
            </div>
            <div class="jiaoyitan51" >
                <ul>
                    <li id="m61"><div align="center">等待卖家确认</div></li>
                    <li id="m62"><div align="center">退款成功</div></li>
                    <li id="m63"><div align="center">退款拒绝</div></li>
                </ul>
            </div>
        </div>


        <div class="kefutan1" style="height:750px;width:824px;border:0px solid blue;margin-left:200px;">
            <h3 style="color: #FF5500;margin-left: 40px;">我的申诉</h3>
            <table border="1" style="background:#F5F5F5;margin-left:40px;margin-top:20px;">
                <tr>
                    <td width="100" align="center">信息编号</td>
                    <td width="300" align="center">申诉类型</td>
                    <td width="200" align="center">提出申诉时间</td>
                    <td width="100" align="center">申诉记录</td>
                </tr>
            </table>
        </div>

        <div class="kefutan2" style="height:750px;width:824px;border:0px solid red;margin-left:200px;">
            <h3 style="color: #FF5500;margin-left: 40px;">我的投诉</h3>
            <table border="1" style="background:#F5F5F5;margin-left:40px;margin-top:20px;">
                <tr>
                    <td width="150" align="center">举报原因</td>
                    <td width="150" align="center">信息编号</td>
                    <td width="150" align="center">发起时间</td>
                    <td width="250" align="center">申诉记录</td>
                </tr>
            </table>
        </div>

        <div class="kefutan3" style="height:750px;width:824px;border:0px solid green;margin-left:200px;">
            <h3 style="color: #FF5500;margin-left: 40px;">违规记录</h3>
        </div>



    </div>

</div>

<!--下部-->
<div style="position:absolute;top:1700px;height: 60px;width:100%;border:1px solid #eaeaea;margin-top: 40px;">
    <div align="center"style="margin-top: 20px;">@Taojianzhi.com</div>
</div>
</body>
</html>