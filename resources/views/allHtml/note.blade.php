<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/font-awesome.css">
    <link href="./allCss/common.css" rel="stylesheet" type="text/css">
    <link href="./allCss/Nnote_css.css" rel="stylesheet" type="text/css">
    <script language="JavaScript" type="text/javascript" src="./allJs/jquery-2.1.4.js"></script>
    <title>my_note</title>
</head>
<body>
<div class="top">
    <div class="top1"><p class="top1_I">ING</p><p class="top1_S">Server</p></div>
    <div class="top2"><div class="M_top2_I"><img src="./img/gl7.jpg"></div><p class="M_top2_S">欢迎你，Dear</p> </div>
</div>
<div class="nav">
    <div class="nav_L"><a href="index.html"><p >HOME</p><img src="./img/left.png"></a> </div>
    <div class="nav_L"><a href="my.html"><p >MY WORK</p><img src="./img/left.png"></a> </div>
    <div class="nav_L"><p >HOT</p><img src="./img/left.png"></div>
    <div class="nav_R"><input id="file" type="file" multiple="multiple" style="display: none;"></input><span >UPLOAD</span><img src="./img/right.png"></div>
    <div class="nav_R"><p >HELP</p><img src="./img/right.png"></div>
    <div class="nav_R"><p >ABOUT</p><img src="./img/right.png"></div>
</div>
<div class="N_all">
    <div class="N_left">
        <div class="N_left_top">
            <!--<div class="top_left"><img src="./img/jj.png"></div>-->
            <div class="top_right"><img src="./img/kk.png"></div>
        </div>
        <div class="N_left_bottom">
            <div class="N_left_one">
                <i class="left_icon icon-edit"></i>
                <i class="left_icon icon-search" id="se_ch"></i>
                <i class="left_icon icon-file-alt"></i>
                <form action="#"  method="post">
                    <input type="text" class="N_search_text_more">
                </form>
            </div>
            <div class="N_left_two">
                <p >近期笔记</p>
                <form action="#"  method="post">
                    <input type="text" class="N_search_text">
                </form>

                <p>文件夹</p><span><i class="p_icon icon-tags"></i> </span>
                <div class="note_nav">
                    <ul>
                        <li id="p1">
                            <i class="pp_icon icon-file">&nbsp;</i> <span id="s11" style="color: #3c3837;float: left;position: absolute;z-index: 1;margin-left: -105px;overflow: hidden">我的笔记</span><span><i class="ppp_icon icon-tag" id="T1"></i> </span>
                        </li>
                        <li id="p2" >
                           <i class="pp_icon icon-file">&nbsp;</i><span style="color: #3c3837;float: left;position: absolute;z-index: 1;margin-left: -105px;overflow: hidden;">我的笔记2</span><span><i class="ppp_icon icon-tag" id="T2"></i> </span>
                        </li>
                        <li id="p3">
                           <i class="pp_icon icon-file">&nbsp;</i><span style="color: #3c3837;float: left;position: absolute;z-index: 1;margin-left: -105px;overflow: hidden;">我的笔记3</span><span><i class="ppp_icon icon-tag" id="T3"></i> </span>
                        </li>
                        <li id="new">
                            <i class="pp_icon_more icon-plus-sign">&nbsp;</i><span  style="color: #3c84af;float: left;position: absolute;z-index: 1;margin-left: -105px;overflow: hidden;">新建文件夹</span><span> </span>
                        </li>
                    </ul>
                    <div class="build">
                        <i class="pp_icon icon-file">&nbsp;</i><span>
                            <form action="#"  method="post">
                                <input type="text" class="N_text">
                            </form></span><i class="ppp_icon_p icon-tag"></i> </span>
                    </div>
                </div>

            </div>
        </div>
        <div class="more" id="more_over">
            <ul>
                <li><p>刷新</p></li>
                <li id="new2"><p>新建文件夹</p></li>
            </ul>
        </div>
        <div class="more_N">
            <ul>
                <li id="again"><p>重命名</p></li>
                <li id="delete"><p>删除</p></li>
            </ul>
        </div>

    </div>
    <div class="N_middle">
        <ul id="ul">
            <li id="N1" class="List">
                <div class="middle_header">
                    <div class="N_one"> <i class="h_icon icon-file">&nbsp;&nbsp;</i><span>新笔记1</span></div>
                    <div class="N_two" id="N_two_text"><p>尽管有些人冲我欢笑鼓掌；有些人则漫骂指责；每个人站在他们独有的欢娱里；释放自己认为的正确；在路上，我不表达；为了这种纵容；我不断修造自己的海岸线</p></div>
                    <div class="N_three">2016/6/6 18:06</div>
                </div>
            </li>
            <li id="N2" class="List">
                <div class="middle_header">
                    <div class="N_one"> <i class="h_icon icon-file">&nbsp;&nbsp;</i><span>新笔记2</span></div>
                    <div class="N_two"><p>阿拉拉拉拉拉有些人则漫骂指责；每个人站在他们独有的欢娱里；释放自己认为的正确；在路上，我不表达；为了这种纵容；我不断修造自己的海岸线</p></div>
                    <div class="N_three">2016/6/6 18:06</div>
                </div>
            </li>
            <li id="N3"  class="List">
                <div class="middle_header">
                    <div class="N_one"> <i class="h_icon icon-file">&nbsp;&nbsp;</i><span>新笔记3</span></div>
                    <div class="N_two"><p>普金大帝和奥巴马都没有习大大帅尽管有些人冲我欢笑鼓掌；有些人则漫骂指责；每个人站在他们独有的欢娱里；释放自己认为的正确；在路上，我不表达；为了这种纵容；我不断修造自己的海岸线</p></div>
                    <div class="N_three">2016/6/6 18:06</div>
                </div>
            </li>
            <li id="N4" class="List">
                <div class="middle_header">
                    <div class="N_one"> <i class="h_icon icon-file">&nbsp;&nbsp;</i><span>新笔记4</span></div>
                    <div class="N_two"><p>拉拉拉阿拉尽管有些人冲我欢笑鼓掌；有些人则漫骂指责；每个人站在他们独有的欢娱里；释放自己认为的正确；在路上，我不表达；为了这种纵容；我不断修造自己的海岸线</p></div>
                    <div class="N_three">2016/6/6 18:06</div>
                </div>
            </li>
        </ul>
    </div>
    <div class="N_right">
        <div class="right_top"><p>标题：</p></div>
        <div class="right_bottom"><p></p></div>
          <form method="post" action="#">
                    <div class="edit_text">
                        <textarea name="#" class="text_area" cols="85px" rows="400px"></textarea>
                    </div>
                </form>
                 <div class="right_last">
                            <input type="button" value="编辑" style="width: 80px;height: 40px" class="btn_last" id="edit">
                            <input type="button" value="保存" style="width: 80px;height: 40px" class="btn_last" id="save">
                            <input type="button" value="新建" style="width: 80px;height: 40px" class="btn_last" id="rebuild">
                            <input type="button" value="删除" style="width: 80px;height: 40px" class="btn_last" id="moit">
                 </div>
    </div>
</div>



</body>
<script src="./allJs/jquery.js" language="JavaScript" type="text/javascript"></script>
</html>