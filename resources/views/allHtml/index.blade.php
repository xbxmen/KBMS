<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="./allCss/show.css"  rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./css/font-awesome.css"><link rel="stylesheet" href="./css/font-awesome.css">
    <link href="./allCss/index_css.css" rel="stylesheet" type="text/css">
    <link href="./allCss/common.css" rel="stylesheet" type="text/css">
    <script src="./myfocus/myfocus-2.0.1.min.js" type="text/javascript"></script>
    <script src="./myfocus/mf-pattern/mF_YSlider.js" type="text/javascript"></script>
    <link href="./myfocus/mf-pattern/mF_YSlider.css" rel="stylesheet" type="text/css"/>
    <script language="JavaScript" type="text/javascript" src="./allJs/jquery-2.1.4.js"></script>
    <script src="./allJs/mutil.js" type="text/javascript"></script>
    <script src="./allJs/base.js" type="text/javascript"></script>
    <script src="./allJs/myPage.js" type="text/javascript"></script>
    <title>INGSERVE</title>

    <script type="text/javascript">
        var myFocus;
        myFocus.set({
            id:'picBox'
//            pattern:'mF_fancy'
        })
    </script>
</head>
<body>
<div class="top">
    <div class="top1"><p class="top1_I">ING</p><p class="top1_S">Server</p></div>
    <div class="top2"><a href="login.html"> <p class="top2_I">LOG IN</p><p class="top2_S">REGISTER</p></a> </div>
</div>
<div class="nav">
    <div class="nav_L"><a href="index.html"><p >HOME</p><img src="./img/left.png"></a> </div>
    <div class="nav_L"><a href="my.html"><p >MY WORK</p><img src="./img/left.png"></a> </div>
    <div class="nav_L"><p >HOT</p><img src="./img/left.png"></div>
    <div class="nav_R" id="upload" ><input id="file" type="file" multiple="multiple" style="display: none;"></input><span >UPLOAD</span><img src="./img/right.png"></div>
    <div class="nav_R"><p >HELP</p><img src="./img/right.png"></div>
    <div class="nav_R"><p >ABOUT</p><img src="./img/right.png"></div>
</div>
<div class="ad" id="picBox">
    <div class="loading"><img src="./img/loading.gif" alt="图片加载中"/> </div>
    <div class="pic">
        <ul>
            <li><img src="./img/1a.jpg"/></li>
            <li><img src="./img/2a.jpg"/></li>
            <li><img src="./img/3a.jpg"/></li>
            <li><img src="./img/4a.jpg"/></li>
        </ul>
    </div>
</div>

<div class="result">
    <div class="S_two">
        <table class="S_ta" id="tbStu">
            <tr><th>文件</th><th>文件名</th><th>文件大小</th><th>创建时间</th></tr>
            <tr><td><img src="./img/folder.png"></td><td>xxxx</td><td>130KB</td><td>2016/4/1</td></tr>
            <tr><td><img src="./img/file_vi.png"></td><td>xxxx</td><td>130KB</td><td>2016/4/1</td></tr>
            <tr><td><img src="./img/folder.png"></td><td>xxxx</td><td>130KB</td><td>2016/4/1</td></tr>
            <tr><td><img src="./img/folder.png"></td><td>xxxx</td><td>130KB</td><td>2016/4/1</td></tr>
            <tr><td><img src="./img/folder.png"></td><td>xxxx</td><td>130KB</td><td>2016/4/1</td></tr>
            <tr><td><img src="./img/folder.png"></td><td>xxxx</td><td>130KB</td><td>2016/4/1</td></tr>
        </table>
    </div>
</div>
<div class="bottom">
    <div class="bottom_left">
        <i id="btn_sea" class="bottom_left_icon icon-search"></i>
        <form action="#"  method="post">
            <input type="text" class="search_text">
        </form>
    </div>
    <div class="bottom_right" id="btn_se"><p >Search</p></div>
</div>


</body>
</html>