<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="./js/jquery-2.2.4.min.js"></script>
</head>
<body>
    <form >
        <input type="text" name="account" id="username"><br>
        <input type="text" name="password" id="password">
    </form>
    <input type="button" id="login" value="submit" onclick="login()">
            <BR>
    <form >
        <input type="text" name="account" id="username"><br>
        <input type="text" name="password" id="password">
    </form>
    <input type="button" id="login" value="submit" onclick="create()">
</body>

<script>
    function login() {
        $.ajax({
            url: '{{url('account/login')}}',
            type: 'post',
            data: {
                account : $('#username').val(),
                password : $('#password').val()
            },
            success: function(data){//注册用户的信息返回到这里，data参数里
                console.log(data);
                if(data == 1){
                    alert('登录成功!');
                    window.location = "view/test";
                }
                else
                    alert(data);


            }
        });
    }

    function register() {
        $.ajax({
            url: '{{url('account/register')}}',
            type: 'post',
            data: {
                account : "123",
                password : "123",
                repass : "123",
                username : "qweqwe"
            },
            success: function(data){//注册用户的信息返回到这里，data参数里
                console.log(data);
                if (data != 1) {
                    alert(data);
                } else {
                    alert('登录成功!');
                    window.location();
                }
            }
        });
    }

    function create() {
        $.ajax({
            url: '{{url('upload/createfolder')}}',
            type: 'post',
            data: {
                filename : "123",
                filepreid : "-1",
            },
            success: function(data){//注册用户的信息返回到这里，data参数里
                console.log(data);
                if (data != 1) {
                    alert(data);
                } else {
                    alert('登录成功!');
                    window.location();
                }
            }
        });
    }
</script>
</html>