<!DOCTYPE html>
<html lang="en" ng-app="noteApp">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/font-awesome.css">
    <link href="./allCss/common.css" rel="stylesheet" type="text/css">
    <link href="./allCss/Nnote_css.css" rel="stylesheet" type="text/css">
    <script language="JavaScript" type="text/javascript" src="./allJs/jquery-2.1.4.js"></script>
    <script language="JavaScript" src="js/angular.min.js"></script>
    <script language="JavaScript" src="allJs/note.js"></script>
    <script>var checksession_url = "{{url('account/checkSession')}}";</script>
    <script src="./allJs/base.js" language="JavaScript" type="text/javascript"></script>
    <title>my_note</title>
</head>
<body>
<div class="top">
    <div class="top1"><p class="top1_I">ING</p><p class="top1_S">Server</p></div>
    <div class="top2"><div class="M_top2_I"><img src="./img/gl7.jpg"></div><p class="M_top2_S">欢迎你,{{session('username')}}</p> </div>
</div>
<div class="nav">
    <div class="nav_L"><a href="index.html"><p >HOME</p><img src="./img/left.png"></a> </div>
    <div class="nav_L"><a href="my.html"><p >MY WORK</p><img src="./img/left.png"></a> </div>
    <div class="nav_L"><p >HOT</p><img src="./img/left.png"></div>
    <div class="nav_R"><input id="file" type="file" multiple="multiple" style="display: none;" /><span >UPLOAD</span><img src="./img/right.png"></div>
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
                <!--form action="#"  method="post"-->
                    <input type="text" class="N_search_text_more">
                <!--/form-->
            </div>
            <div class="N_left_two" ng-controller="noteBookController">
                <p ng-click="recentNote()">近期笔记</p>
                <!--form action="#"  method="post"-->
                    <input type="text" class="N_search_text">
                <!--/form-->
                <p>文件夹</p><span><i class="p_icon icon-tags"></i> </span>
                <div class="note_nav" >
                    <ul id="my_ul" >
                        <li id="p@{{$index + 1}}" ng-repeat="book in noteBooks" ng-click="changeNoteBookId(book.folid)">
                            <i class="pp_icon icon-file">&nbsp;</i> <span id="s11" ng-click="getNote(book.folid)" style="color: #3c3837;float: left;position: absolute;z-index: 1;margin-left: -105px;overflow: hidden">@{{book.folname}}</span><span><i ng-init="initNoteBookMenuClick()" ng-click="changeNoteBookId(book.folid)" class="ppp_icon icon-tag" id="T@{{$index + 1}}"></i> </span>
                        </li>
                        
                        <!--li id="p2" >
                           <i class="pp_icon icon-file">&nbsp;</i><span style="color: #3c3837;float: left;position: absolute;z-index: 1;margin-left: -105px;overflow: hidden;">我的笔记2</span><span><i class="ppp_icon icon-tag" id="T2"></i> </span>
                        </li>
                        <li id="p3">
                           <i class="pp_icon icon-file">&nbsp;</i><span style="color: #3c3837;float: left;position: absolute;z-index: 1;margin-left: -105px;overflow: hidden;">我的笔记3</span><span><i class="ppp_icon icon-tag" id="T3"></i> </span>
                        </li>
                        <li id="new">
                            <i class="pp_icon_more icon-plus-sign">&nbsp;</i><span  style="color: #3c84af;float: left;position: absolute;z-index: 1;margin-left: -105px;overflow: hidden;">新建文件夹</span><span> </span>
                        </li-->
                    </ul>
                    <div class="build" ng-controller="noteBookController">
                        <i class="pp_icon icon-file">&nbsp;</i><span>
                            <!--form action="#"  method="post"></form-->
                                <input type="text" class="N_text" ng-click="newNoteBook()"/><button></button>
                            </span><i class="ppp_icon_p icon-tag"></i> </span>
                    </div>
                </div>

            </div>
        </div>
        <div class="more" id="more_over">
            <ul ng-controller="noteBookController">
                <li><p>刷新</p></li>
                <li id="new2" ><p>新建文件夹</p></li>
            </ul>
        </div>
        <div class="more_N">
            <ul ng-controller="noteBookController">
                <li id="again"><p>重命名</p></li>
                <li id="delete" ng-click="deleteNoteBook()"><p>删除</p></li>
            </ul>
        </div>

    </div>
    <div class="N_middle" >
    
        <ul id="ul" ng-controller="noteBookController">
            <li id="@{{note.nid}}" class="List" ng-repeat="note in notes" ng-click="updateNote(note.nid, note.notehead, note.notebody)">
                <div class="middle_header">
                    <div class="N_one"> <i class="h_icon icon-file">&nbsp;&nbsp;</i><span>@{{note.notehead}}</span></div>
                    <div class="N_two" id="N_two_text"><p>@{{note.notebody}}</p></div>
                    <div class="N_three">@{{note.createtime}}</div>
                </div>
            </li>
            <!--li id="N2" class="List">
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
            </li-->
        </ul>
    </div>
    <div class="N_right" ng-controller="noteController">
        <div class="right_top"><span>标题：</span><!--span>@{{$root.curNoteTitle}}</span--><input id="noteTitleInput" ng-model="$root.curNoteTitle"></input></div>
        <div class="right_bottom"><p>@{{$root.curNoteContent}}</p></div>
          <form method="post" action="#">
                    <div class="edit_text">
                        <textarea name="#" class="text_area" cols="85px" rows="400px" ng-model="$root.curNoteContent"></textarea>
                    </div>
                </form>
                 <div class="right_last">
                            <input type="button" value="编辑" style="width: 80px;height: 40px" class="btn_last" id="edit" ng-click="clickEdit()">
                            <input type="button" value="保存" style="width: 80px;height: 40px" class="btn_last" id="save" ng-click="clickSave()">
                            <input type="button" value="新建" style="width: 80px;height: 40px" class="btn_last" id="rebuild" ng-click="clickNewNote()">
                            <input type="button" value="删除" style="width: 80px;height: 40px" class="btn_last" id="moit" ng-click="clickDeleteNote()">
                 </div>
    </div>
</div>
<div id="layer">
    <div class="demo">
        <div class="ad_ag">
        <p><i class="alt_ag">~重命名~</i></p>
        <ul class="load_cont_ag">
            <form action="#" ng-controller="noteBookController">
                <li class="l_tit_ag">新的名字<input type="text"  id='mname' class="load_input_ag" ng-model="name" ></li>
                <li><div style="padding-left:5px;margin-top:5px;"><input type="button" value="submit" style="width:100px;" class="button_blue_ag" ng-click="modifyNoteBookName(name)"/></div></li>
            </form>
        </ul>
    </div>
    <div id="dell">
        <img src="./img/close.png">
    </div>
    </div>
</div>


</body>
<script src="./allJs/jquery.js" language="JavaScript" type="text/javascript"></script>
</html>