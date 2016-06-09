<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="../js/jquery-2.2.4.min.js"></script>
</head>
<body>
<form id="myform" enctype="multipart/form-data">
    <input type="text" name="filename" id="username"><br>
    <input type="file" name="file1"><br>
    <input type="file" name="file2"><br>
</form>
<input type="button" id="login" value="submit" onclick="login()">
<BR>
</body>

<script>
    function login() {
        var form = new FormData($("#myform")[0])
        console.log(form);
        $.ajax({
            url: '{{url('upload/file')}}',
            type: 'post',
            processData:false,
            contentType:false,
            data: form,
            success: function(data){//注册用户的信息返回到这里，data参数里
                console.log(data);
                if(data == 1){
                    alert('登录成功!');
                }
                else
                    alert(data);
            }
        });
    }

</script>
</html>