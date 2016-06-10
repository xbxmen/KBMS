<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="./allCss/show.css"  rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./css/font-awesome.css">
    <link href="./allCss/common.css" rel="stylesheet" type="text/css">
    <link href="./allCss/MyNote_css.css"  rel="stylesheet" type="text/css">
    <script language="JavaScript" type="text/javascript" src="./allJs/jquery-2.1.4.js"></script>
    <script src="./allJs/mutil.js" language="JavaScript" type="text/javascript"></script>
    <script src="./allJs/base.js" language="JavaScript" type="text/javascript"></script>
    <script src="./allJs/myPage.js" language="JavaScript" type="text/javascript"></script>

    <title>MyNote</title>
</head>
<body>
<div class="top">
    <div class="top1"><p class="top1_I">ING</p><p class="top1_S">Server</p></div>
    <div class="top2"><div class="M_top2_I"><img src="./img/gl7.jpg"></div><p class="M_top2_S">欢迎你,{{$username}}</p> </div>
</div>
<div class="nav">
    <div class="nav_L"><a href="index.html"><p >HOME</p><img src="./img/left.png"></a> </div>
    <div class="nav_L"><a href="my.html"><p >MY WORK</p><img src="./img/left.png"></a> </div>
    <div class="nav_L"><p >HOT</p><img src="./img/left.png"></div>
    <div class="nav_R"><input id="file" type="file" multiple="multiple" style="display: none;"><span >UPLOAD</span><img src="./img/right.png"></div>
    <div class="nav_R"><p >HELP</p><img src="./img/right.png"></div>
    <div class="nav_R"><p >ABOUT</p><img src="./img/right.png"></div>
</div>
<div class="M_left">
    <div class="one">
        <a href="#">
        <div class="hax_top"></div>
        <div class="hax_middle"><i class="middle_icon icon-lightbulb"></i><p>resource</p></div>
        <div class="hax_bottom"></div>
        </a>
    </div>
    <div class="one_M">
        <div class="hax_top_M"></div>
        <div class="hax_middle_M"></div>
        <div class="hax_bottom_M"></div>
    </div>
    <div class="two">
        <a href="search.html">
        <div class="hax_top"></div>
        <div class="hax_middle"><i class="middle_icon icon-search"></i><p>search</p></div>
        <div class="hax_bottom"></div>
        </a>
    </div>
    <div class="two_M">
        <div class="hax_top_M"></div>
        <div class="hax_middle_M"></div>
        <div class="hax_bottom_M"></div>
    </div>
    <div class="three">
        <a href="doc.html">
            <div class="hax_top"></div>
            <div class="hax_middle"><i class="middle_icon icon-inbox"></i><p>file</p></div>
            <div class="hax_bottom"></div>
        </a>

    </div>
    <div class="three_M">
        <div class="hax_top_M"></div>
        <div class="hax_middle_M"></div>
        <div class="hax_bottom_M"></div>
    </div>
    <div class="four">
        <div class="hax_top"></div>
        <div class="hax_middle"><p style="color: #f2f2f2;font-size: 40px;text-align: center;line-height: 55px;">ING</p></div>
        <div class="hax_bottom"></div>
    </div>
    <div class="five">
        <a href="audio.html">
            <div class="hax_top"></div>
            <div class="hax_middle"><i class="M_icon_I icon-music"><p style="color: #f2f2f2;font-size: 20px;text-align: center;line-height: 20px;" >audio</p></i></div>
            <div class="hax_bottom"></div>
        </a>

    </div>
    <div class="six">
        <div class="hax_top"></div>
        <div class="hax_middle"></div>
        <div class="hax_bottom"></div>
    </div>
    <div class="seven">
    	 <a href="photo.html">
        <div class="hax_top"></div>
        <div class="hax_middle"><i class="middle_icon icon-github-alt"></i><p>pictures</p></div>
        <div class="hax_bottom"></div>
    </div>
    <div class="seven_M">
        <div class="hax_top_M"></div>
        <div class="hax_middle_M"></div>
        <div class="hax_bottom_M"></div>
    </div>
    <div class="eight">
        <div class="hax_top"></div>
        <div class="hax_middle"></div>
        <div class="hax_bottom"></div>
    </div>
    <div class="eight_M">
        <div class="hax_top_M"></div>
        <div class="hax_middle_M"></div>
        <div class="hax_bottom_M"></div>
    </div>
    <div class="nine">
        <a href="video.html">
            <div class="hax_top"></div>
            <div class="hax_middle"><i class="M_icon_I icon-desktop"><p style="color: #f2f2f2;font-size: 20px;text-align: center;line-height: 20px;" >video</p></i> </div>
            <div class="hax_bottom"></div>
        </a>

    </div>

</div>
<div class="M_right">
<div class="yi">
    <div class="gon_top"></div>
    <div class="gon_middle"></div>
    <div class="gon_bottom"></div>
</div>
    <div class="er">
        <div class="gon_top2" ></div>
        <div class="gon_middle2" ></div>
        <div class="gon_bottom2"></div>
    </div>
   <div class="san">
           <a href="note.html">
               <div class="gon_top3" ></div>
               <div class="gon_middle3" ><i class="gon_icon icon-folder-open-alt"></i> </div>
               <div class="gon_bottom3"></div>
           </a>
       </div>
    <div class="si">
    <div class="gon_top4" ></div>
    <div class="gon_middle4" ></div>
    <div class="gon_bottom4"></div>
</div>
    <div class="wu">
        <div class="gon_top5" ></div>
        <div class="gon_middle5" ></div>
        <div class="gon_bottom5"></div>
    </div>
    <div class="liu">
        <div class="gon_top6" ></div>
        <div class="gon_middle6" ></div>
        <div class="gon_bottom6"></div>
    </div>
    <!--<div class=qi>-->
        <!--<div class="gon_top7" ></div>-->
        <!--<div class="gon_middle7" ></div>-->
        <!--<div class="gon_bottom7"></div>-->
    <!--</div>-->


</div>
<div id="uploadmain">
    <div id="body" class="light">
        <div id="content" class="show">
            <div class="return_pre"><a href="#show_main">回到图片</a></div>
            <div class="demo">
                <form id="uploadForm" action="upload.php" method="post" enctype="multipart/form-data">
                    <div class="upload_box">
                        <div class="upload_main">
                            <div class="upload_choose">
                                <input id="fileImage" type="file" size="30" name="fileselect[]" multiple />
                                <span id="fileDragArea" class="upload_drag_area">或者将图片拖到此处</span>
                            </div>
                            <div id="preview" class="upload_preview"></div>
                        </div>
                        <div class="upload_submit">
                            <button type="button" id="fileSubmit" class="upload_submit_btn">确认上传图片</button>
                        </div>
                        <div id="uploadInf" class="upload_inf"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>