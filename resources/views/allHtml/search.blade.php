<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/font-awesome.css"><link rel="stylesheet" href="./css/font-awesome.css">
    <script language="JavaScript" type="text/javascript" src="./allJs/jquery-2.1.4.js"></script>
    <script type="text/javascript" src="./allJs/jquery.js"></script>
    <link href="./allCss/common.css" rel="stylesheet" type="text/css">
    <link href="./allCss/search_css.css"  rel="stylesheet" type="text/css">
    <title>Search</title>
</head>
<body>
<div class="top">
    <div class="top1"><p class="top1_I">ING</p><p class="top1_S">Server</p></div>
    <div class="top2"><div class="M_top2_I"><img src="./img/gl7.jpg"></div><p class="M_top2_S">欢迎你,{{session('username')}}</p> </div>
    <div class="change"><p>LOG OUT</p></div>
</div>
<div class="nav">
    <div class="nav_L"><a href="index.html"><p >HOME</p><img src="./img/left.png"></a> </div>
    <div class="nav_L"><a href="my.html"><p >MY WORK</p><img src="./img/left.png"></a> </div>
    <div class="nav_L"><p >HOT</p><img src="./img/left.png"></div>
    <div class="nav_R"><input id="file" type="file" multiple="multiple" style="display: none;" /><span >UPLOAD</span><img src="./img/right.png"></div>
    <div class="nav_R"><p >HELP</p><img src="./img/right.png"></div>
    <div class="nav_R"><p >ABOUT</p><img src="./img/right.png"></div>
</div>
<div class="main">
    <img src="./img/search.png">
</div>
<div class="S_main">
    <div class="S_note">
        <div class="S_one"><h1>笔记本1名字</h1><br><h3>笔记1标题</h3><br><p>部分笔记1内容显示</p></div>
        <div class="S_one"><h1>笔记本2名字</h1><br><h3>笔记2标题</h3><br><p>部分笔记2内容显示</p></div>
        <div class="S_one"><h1>笔记本3名字</h1><br><h3>笔记3标题</h3><br><p>部分笔记3内容显示</p></div>
    </div>
    <div class="S_resource">
        <div class="S_two">
           <table class="S_ta" id="tbStu">
               <tr><th>文件</th><th>文件名</th><th>文件大小</th><th>创建时间</th></tr>
              <tr><td><img src="./img/folder.png"></td><td>xxxx</td><td>130KB</td><td>2016/4/1</td></tr>
               <tr><td><img src="./img/file_vi.png"></td><td>xxxx</td><td>130KB</td><td>2016/4/1</td></tr>
               <tr><td><img src="./img/folder.png"></td><td>xxxx</td><td>130KB</td><td>2016/4/1</td></tr>
               <tr><td><img src="./img/folder.png"></td><td>xxxx</td><td>130KB</td><td>2016/4/1</td></tr>
           </table>
        </div>
    </div>
    <div class="S_file">
        <div class="S_three">
            <table class="S_ta" id="tbStu3">
                <tr><th>文件</th><th>文件名</th><th>文件大小</th><th>创建时间</th></tr>
                <tr><td><img src="./img/folder.png"></td><td>xxxx</td><td>130KB</td><td>2016/4/1</td></tr>
                <tr><td><img src="./img/folder.png"></td><td>xxxx</td><td>130KB</td><td>2016/4/1</td></tr>
                <tr><td><img src="./img/folder.png"></td><td>xxxx</td><td>130KB</td><td>2016/4/1</td></tr>
            </table>
        </div>
    </div>
    <div class="S_music">
        <div class="S_four">
            <table class="S_ta" id="tbStu4">
                <tr><th>文件</th><th>文件名</th><th>文件大小</th><th>创建时间</th></tr>
                <tr><td><img src="./img/show_audio.png"></td><td>xxxx</td><td>130KB</td><td>2016/4/1</td></tr>
                <tr><td><img src="./img/show_audio.png"></td><td>xxxx</td><td>130KB</td><td>2016/4/1</td></tr>
                <tr><td><img src="./img/show_audio.png"></td><td>xxxx</td><td>130KB</td><td>2016/4/1</td></tr>
            </table>
        </div>
    </div>
    <div class="S_picture">
        <div class="S_five">
            <table class="S_ta" id="tbStu5">
                <tr><th>文件</th><th>文件名</th><th>文件大小</th><th>创建时间</th></tr>
                <tr><td><img src="./img/photo.png"></td><td>xxxx</td><td>130KB</td><td>2016/4/1</td></tr>
                <tr><td><img src="./img/photo.png"></td><td>xxxx</td><td>130KB</td><td>2016/4/1</td></tr>
                <tr><td><img src="./img/photo.png"></td><td>xxxx</td><td>130KB</td><td>2016/4/1</td></tr>
            </table>
        </div>
    </div>
    <div class="S_video">
        <div class="S_six">
            <table class="S_ta" id="tbStu6">
                <tr><th>文件</th><th>文件名</th><th>文件大小</th><th>创建时间</th></tr>
                <tr><td><img src="./img/file_vi.png"></td><td>xxxx</td><td>130KB</td><td>2016/4/1</td></tr>
                <tr><td><img src="./img/file_vi.png"></td><td>xxxx</td><td>130KB</td><td>2016/4/1</td></tr>
                <tr><td><img src="./img/file_vi.png"></td><td>xxxx</td><td>130KB</td><td>2016/4/1</td></tr>
            </table>
        </div>
    </div>
</div>


<div class="S_bottom">
    <div class="S_bottom_left">
        <i id="S_btn_sea" class="S_bottom_left_icon icon-search"></i>
        <form action="#"  method="post">
            <input type="text" class="S_search_text">
        </form>
    </div>
    <div class="S_bottom_right" id="S_btn_se"><p >Search</p></div>
</div>
<div class="rad">
    <input type="radio" name="searchby" value="note" checked>note
    <input type="radio" name="searchby" value="resource" />resource
    <input type="radio" name="searchby" value="file" >file
    <input type="radio" name="searchby" value="music" >music
    <input type="radio" name="searchby" value="pictures">pictures
    <input type="radio" name="searchby" value="video">video
    <!--<input type="radio" name="searchby" value="all">all-->
</div>

</body>
</html>