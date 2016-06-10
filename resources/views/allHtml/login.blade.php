<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="./allCss/common.css" rel="stylesheet" type="text/css">
    <link href="./allCss/login_css.css" rel="stylesheet" type="text/css">
    <script language="JavaScript" type="text/javascript" src="./allJs/jquery-2.1.4.js"></script>
    <script type="text/javascript" src="./allJs/jquery.js"></script>
    <title>LOG IN</title>
</head>
<body>
<div class="top">
    <div class="top1"><p class="top1_I">ING</p><p class="top1_S">Server</p></div>
    <!--<div class="top2"><a href="login.html"> <p class="top2_I">LOG IN</p><p class="top2_S">REGISTER</p></a> </div>-->
</div>
<div class="nav">
    <div class="nav_L"><a href="index.html"><p >HOME</p><img src="./img/left.png"></a> </div>
    <div class="nav_L"><a href="my.html"><p >MY WORK</p><img src="./img/left.png"></a> </div>
    <div class="nav_L"><p >HOT</p><img src="./img/left.png"></div>
    <div class="nav_R"><input id="file" type="file" multiple="multiple" style="display: none;"/><span >UPLOAD</span><img src="./img/right.png"></div>
    <div class="nav_R"><p >HELP</p><img src="./img/right.png"></div>
    <div class="nav_R"><p >ABOUT</p><img src="./img/right.png"></div>
</div>
<div class="main">
    <img src="./img/login.png">
</div>
<div class="login" style="margin-top:4px;">
    <div class="header">
        <div class="switch" id="switch"><a class="switch_btn_focus" id="switch_qlogin" tabindex="7">快速登录</a>
            <a class="switch_btn" id="switch_login"  tabindex="8">快速注册</a><div class="switch_bottom" id="switch_bottom" style="position: absolute; width: 64px; left: 0px;"></div>
        </div>
    </div>
    <div class="web_qr_login" id="web_qr_login" style="display: block; height: 235px;">
        <!--登录-->
        <div class="web_login" id="web_login">
            <div class="login-box">
                <div class="login_form">
                    <form action="#" name="loginform" accept-charset="utf-8" id="login_form" class="loginForm" method="POST"><input type="hidden" name="did" value="0"/>
                        <input type="hidden" name="to" value="log"/>
                        <div class="uinArea" id="uinArea">
                            <label class="input-tips" for="u">帐号：</label>
                            <div class="inputOuter" id="uArea">
                                <input type="text" id="u" name="account" class="inputstyle"/>
                            </div>
                        </div>
                        <div class="pwdArea" id="pwdArea">
                            <label class="input-tips" for="p">密码：</label>
                            <div class="inputOuter" id="pArea">
                                <input type="password" id="p" name="password" class="inputstyle"/>
                            </div>
                        </div>
                    </form>
                    <div style="padding-left:30px;margin-top:50px;"><input type="button" value="登 录" style="width:150px;" class="button_blue" onclick="login()"/></div>
                </div>
            </div>
        </div>
        <!--登录end-->
    </div>
    <!--注册-->
    <div class="qlogin" id="qlogin" style="display: none; ">
        <div class="web_login"><form name="form2" id="regUser" accept-charset="utf-8"  action="#" method="post">
            <input type="hidden" name="to" value="reg"/>
            <input type="hidden" name="did" value="0"/>
            <ul class="reg_form" id="reg-ul">
                <div id="userCue" class="cue">快速注册请注意格式</div>
                <li>
                    <label for="account"  class="input-tips2">账号：</label>
                    <div class="inputOuter2">
                        <input type="text" id="account" name="account" maxlength="16" class="inputstyle2"/>
                    </div>
                </li>
                <li>
                    <label for="password" class="input-tips2">密码：</label>
                    <div class="inputOuter2">
                        <input type="password" id="password"  name="password" maxlength="16" class="inputstyle2"/>
                    </div>
                </li>
                <li>
                    <label for="repass" class="input-tips2">重复密码：</label>
                    <div class="inputOuter2">
                        <input type="password" id="repass"  name="repass" maxlength="16" class="inputstyle2"/>
                    </div>
                </li>
                <li>
                    <label for="username" class="input-tips2">昵称：</label>
                    <div class="inputOuter2">
                        <input type="text" id="username" name="username" maxlength="10" class="inputstyle2"/>
                    </div>
                </li>
                <li>
                    <div class="inputArea">
                        <input type="button" id="reg"  style="margin-top:10px;margin-left:85px;" class="button_blue" value="同意协议并注册" onclick="sign_up()"/> <a href="#" class="zcxy" target="_blank">注册协议</a>
                    </div>
                </li><div class="cl"></div>
            </ul></form>
        </div>
    </div>
    <!--注册end-->
</div>
    <script>
        function login() {
            var acc = $("#u").val();
            var pass = $("#p").val();
            if(acc != "" && pass != ""){
                $.ajax({
                    url: '{{url('account/login')}}',
                    type: 'post',
                    data: {
                        "account" : acc,
                        "password" : pass,
                    },
                    success: function(data){//注册用户的信息返回到这里，data参数里
                        console.log(data);
                        if (data == 1) {
                            alert('登录成功!');
                            window.location.href = "{{url('index.html')}}";
                        } else {
                            alert(data);
                        }
                    }
                });
            }else{
                alert("账号密码不能为空！！");
            }
        }
        
        /*
        * 注册
        * */
        function  sign_up() {
            var account = $("#account").val();
            var password = $("#password").val();
            var repass  = $("#repass").val();
            var username  = $("#username").val();
            if(account != "" && password != "" && repass != ""){
                $.ajax({
                    url: '{{url('account/register')}}',
                    type: 'post',
                    data: {
                        "account" : account,
                        "password" : password,
                        "repass" : repass,
                        "username" : username
                    },
                    success: function(data){//注册用户的信息返回到这里，data参数里
                        console.log(data);
                        if (data == 1) {
                            alert('注册成功!');
                        } else {
                            alert(data);
                        }
                    }
                });
            }else{
                alert("账号或密码不能为空！！");
            }
        }
    </script>

</body>
</html>