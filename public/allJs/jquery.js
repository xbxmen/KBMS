/**
 * Created by 95688 on 2016/6/3.
 */
$(function(){

    var ori_content = '';
    var cur_id = null;
    var num = 5;

    $('#switch_qlogin').click(function(){
        $('#switch_login').removeClass("switch_btn_focus").addClass('switch_btn');
        $('#switch_qlogin').removeClass("switch_btn").addClass('switch_btn_focus');
        $('#switch_bottom').animate({left:'0px',width:'70px'});
        $('#qlogin').css('display','none');
        $('#web_qr_login').css('display','block');

    });
    $('#switch_login').click(function(){

        $('#switch_login').removeClass("switch_btn").addClass('switch_btn_focus');
        $('#switch_qlogin').removeClass("switch_btn_focus").addClass('switch_btn');
        $('#switch_bottom').animate({left:'154px',width:'70px'});

        $('#qlogin').css('display','block');
        $('#web_qr_login').css('display','none');
    });



    $("#tbStu tr:nth-child(even)").addClass("trOdd");

    $("#tbStu3 tr:nth-child(even)").addClass("trOdd3");

    $("#tbStu4 tr:nth-child(even)").addClass("trOdd4");

    $("#tbStu5 tr:nth-child(even)").addClass("trOdd5");

    $("#tbStu6 tr:nth-child(even)").addClass("trOdd6")



    $(".N_left_top").click(function () {
        if ($(".N_left_two").is(":visible")){
            $(".top_right img").attr("src","./img/jj.png");
            $(".N_left").css("transition","width 0.7s");
            $(".N_left").css("width","50px");

            $(".N_right").css("width","60%");
            $(".N_left_two").css("display","none");
        }else{
            $(".top_right img").attr("src","./img/kk.png");
            $(".N_left").css("width","250px");
            $(".N_right").css("width","45%");
            $(".N_left_two").css("display","block");

        }
    })

    $(".p_icon").click(function () {
        if ($(".more").is(":visible")){
            $(".more").css("display","none");
        }else {
            $(".more").css("display","block");
        }
    })

    $("#new").click(function(){
        $(".build").css("display","block");
        $(".more").css("display","none");
    })
    $("#new2").click(function(){
        $(".build").css("display","block");
        $(".more").css("display","none");
    })

    $("#p1").click(function () {
        if ($(".more_N").is(":visible")){
            $(".more_N").css("display","none");
        }else {
            $(".more_N").css("display","block");
            $(".more_N").css("top","-245px");
        }
    })

    $("#p2").click(function () {
        if ($(".more_N").is(":visible")){
            $(".more_N").css("display","none");
        }else {
            $(".more_N").css("display","block");
            $(".more_N").css("top","-215px");
        }
    })

    $("#p3").click(function () {
        if ($(".more_N").is(":visible")){
            $(".more_N").css("display","none");
        }else {
            $(".more_N").css("display","block");
            $(".more_N").css("top","-185px");
        }
    })

    // var top=$(".more_N").position().top;
    $("#delete").click(function () {
        //var m =$(".more_N").style;
        //console.log(m);
        var top=$(".more_N").css('top');
        console.log(top);
        if (top=="-245px"){
            $("#p1").remove();
            $(".more_N").css("display","none");
        }else  if (top=="-215px"){
            $("#p2").remove();
            $(".more_N").css("display","none");
        }else {
            $("#p3").remove();
            $(".more_N").css("display","none");
        }
    })

    function clickEvent(){
            $(this).css("background-color","#c5e7ff");
            $(this).nextAll().css("background-color","#ffffff");
            $(this).prevAll().css("background-color","#ffffff");

            var this_id = $(this).attr("id");
            cur_id = this_id;
            var o =$("#"+this_id+" p")[0].innerHTML;
            ori_content = o;
            $(".right_bottom p")[0].innerHTML = o;
            $(".text_area")[0].value = o;

            if ($(".edit_text").is(":visible")){
                $(".right_bottom").css("display","block");
                //$(".right_bottom p").text();
                $(".edit_text").css("display","none");
                $("#"+cur_id+" .N_two p")[0].innerHTML = ori_content;
            }
    }

    $(".List").click(clickEvent);

    $("#edit").click(function(){
        var  i =$(".right_bottom p")[0].innerHTML;
        $(".edit_text").css("display","block");
        console.log(i)
        $(".text_area")[0].value = i;
        $(".right_bottom").css("display","none");

    });





    $("#save").click(function () {
                if ($(".edit_text").is(":visible")){
                    var s =$(".text_area").val();
                    $(".right_bottom").css("display","block");
                    $(".right_bottom p")[0].innerHTML = s;
                    $(".edit_text").css("display","none");
                    $("#"+cur_id+" .N_two p")[0].innerHTML = s;
                    ori_content = '';
                }
            });


    $("#rebuild").click(function(){
        $(".right_bottom").css("display","none");
        $(".edit_text").css("display","block");
        $(".text_area").val('');
        $("#ul").html('<li id="N'+num+'" class="List">'+
                        '<div class="middle_header">'+
                            '<div class="N_one"> <i class="h_icon icon-file">&nbsp;&nbsp;</i><span>新笔记1</span></div>'+
                        '<div class="N_two" id="N_two_text"><p></p></div>'+
                        '<div class="N_three">2016/6/6 18:06</div>'+
                        '</div>'+
                        '</li>'+$("#ul").html());

        $(".List").click(clickEvent);
        $('#N'+num).click();
        $("#edit").click();
        num++;
    });

});

