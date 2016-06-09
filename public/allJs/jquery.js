/**
 * Created by 95688 on 2016/6/3.
 */
$(function(){

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
            $(".top_right img").attr("src","../img/jj.png");
            $(".N_left").css("transition","width 0.7s");
            $(".N_left").css("width","50px");

            $(".N_right").css("width","60%");
            $(".N_left_two").css("display","none");
        }else{
            $(".top_right img").attr("src","../img/kk.png");
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


    //var button="<input type='text' width='50px' height='20px'  >";
    //$("#again").click(function () {
    //    $("#s1").append(button);
    //    $("#s11").css("display","none");
    //})

    //$(".N_middle li :eq(0)").click(function(){
    //    $("#slidebar").animate({
    //        top:"4px"
    //    },300)
    //})
    //$("li :eq(1)").click(function(){
    //    $("#slidebar").animate({
    //        top:"160px"
    //    },300)
    //})
    //$("li :eq(2)").click(function(){
    //    $("#slidebar").animate({
    //        top:"231px"
    //    },300)
    //})
    //
    //$("li :eq(3)").click(function(){
    //    $("#slidebar").animate({
    //        top:"478px"
    //    },300)
    //})
    //
    //$("li :eq(4)").click(function(){
    //    $("#slidebar").animate({
    //        top:"345px"
    //    },300)
    //})
    //
    //
    //$("#N1").click(function(){
    //    $("#slidebar").animate({
    //        top:"4px"
    //    },300)
    //})
    //$("#N2").click(function(){
    //    $("#slidebar").animate({
    //        top:"160px"
    //    },300)
    //})

    $("#N1").click(function(){
        $(this).css("background-color","#c5e7ff");
        $(this).nextAll().css("background-color","#ffffff");
        $(this).prevAll().css("background-color","#ffffff");
    })
    $("#N2").click(function(){
        $(this).css("background-color","#c5e7ff");
        $(this).nextAll().css("background-color","#ffffff");
        $(this).prevAll().css("background-color","#ffffff");
    })
    $("#N3").click(function(){
        $(this).css("background-color","#c5e7ff");
        $(this).nextAll().css("background-color","#ffffff");
        $(this).prevAll().css("background-color","#ffffff");
    })
    $("#N4").click(function(){
        $(this).css("background-color","#c5e7ff");
        $(this).nextAll().css("background-color","#ffffff");
        $(this).prevAll().css("background-color","#ffffff");
    })
});

