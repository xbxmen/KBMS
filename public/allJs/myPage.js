var files = [];
function addfile(src, isshare, isfolder, ischeck, file_type) {
    var file = {
        src: src,
        isshare: isshare,
        isfolder: isfolder,
        ischeck: ischeck,
        file_type: file_type
    }
    files.push(file);
}
//模拟插入文件
addfile("等待后台给我文件1", false, true, false, "image");
addfile("等待后台给我文件2", false, true, false, "image");
addfile("等待后台给我文件3", false, false, false, "image");
addfile("等待后台给我文件4", false, false, false, "image");
addfile("等待后台给我文件5", false, false, false, "image");
addfile("等待后台给我文件5", false, false, false, "image");
console.log(files);
function shareFile() {
//	var file_list =document.getElementsByClassName("fileshow_li");
    var tip_parent = document.getElementsByClassName("show_main")[0];
    var share = document.getElementsByClassName("share");
    for (var i = 0; i < share.length; i++) {
        share[i].index = i;
//		var share = file_list[i].getElementsByClassName("share")[0];
        console.log(share);
        on(share[i], "click", function (e) {
            console.log(this.index);
            if (files[this.index].isshare) {
                files[this.index].isshare = false;
                Addtip(tip_parent, "取消分享");
                RemovetipDelay(tip_parent);

            } else {
                files[this.index].isshare = true;
                Addtip(tip_parent, "分享成功");
                RemovetipDelay(tip_parent);
            }
            console.log(files[this.index].isshare);
        });

    }
}


var photos = [];

function addphoto(src, cfolder) {
    var photo = {
        src: src,
        cfolder: cfolder
    };
    photos.push(photo);
    console.log(photos);
}

//浏览图片时图片旋转
$(function () {
    var photo = $('.photo_contanier');
    var currentdeg = 0;
    var cd;
    $('.left_rotate').on("click", function () {
        currentdeg += 90;
        cd = "rotate(" + currentdeg + "deg)"
        photo.css("-webkit-transform", cd);
    });
    $('.right_rotate').on("click", function () {
        currentdeg -= 90;
        cd = "rotate(" + currentdeg + "deg)"
        photo.css("-webkit-transform", cd);
    });
});
//判断是文件夹还是文件
$(function () {
    var type = 'samll_folder';//这个地方应该是判断得到的是文件夹还是文件
    var addlist = "<li class='fileshow_li'><input name='file' class='checkbox' type='checkbox'/><div class='" + type + " dir_small inline_block'></div><div class='filename inline_block'><a href='#' class='file_name'>哈利波特全集</a><div class='operate inline_block '><a class='share' href='#'><img src='img/share.png'></a><a class='download'  href='#'><img src='img/download.png'></a><a class='menu'  href='#'><img src='img/menu.png'></a></div></div><div class='filesize inline_block'>16KB</div><div class='filedate inline_block'>2016-05-26 13:22</div></li>"
    $(".update").on("click", function () {
        $('.list').append(addlist);
    });
});


$(function () {
    //点击UPLOAD出现上传界面
    $("#upload").on('click', function () {
        $(".show_main").css("display", "none");
        $(".nav").css("display", "none");
        $("#uploadmain").css("display", "block");
        console.log("hello")
    });
    //点击回到图片回到图显示图片的界面
    $(".return_pre").on("click", function () {
        if (confirm("确定退出上传？")) {
            $("#uploadmain").css("display", "none");
            $(".show_main").css("display", "block");
            $(".nav").css("display", "block");

        }

    });
});

var file_type;
//根据选择的不同的文件类型来到不同的页面
$(function () {
    $('.column').on('click', function (e) {
        var _this = $(this);
        file_type = _this.attr("data-txt");
        var h = file_type + ".html"
        window.location.href = h;
        e.stopPropagation();
    });

});

//实现图片文件上传
var imgparams = {
    filter: function (files) {
        var arrFiles = [];
        for (var i = 0, file; file = files[i]; i++) {
            arrFiles.push(file);
        }
        return arrFiles;
    },
    onSelect: function (files) {
        var html = '', i = 0;
        $("#preview").html('<div class="upload_loading"></div>');
        var funAppendImage = function () {
            var file = files[i];
            if (file) {
                html = html + '<div id="uploadList_' + i + '" class="upload_append_list"><p><strong>' + file.name + '</strong>' +
                    '<a href="javascript:" class="upload_delete" title="删除" data-index="' + i + '">删除</a><br />' +
                    '<span id="uploadProgress_' + i + '" class="upload_progress"></span>' +
                    '</div>';
                i++;
                console.log(file);
                funAppendImage();
            } else {
                $("#preview").html(html);
                if (html) {
                    //删除方法
                    $(".upload_delete").click(function () {
                        ZXXFILE.funDeleteFile(files[parseInt($(this).attr("data-index"))]);
                        return false;
                    });
                    //提交按钮显示
                    $("#fileSubmit").show();
                } else {
                    //提交按钮隐藏
                    $("#fileSubmit").hide();
                }
            }
        };
        funAppendImage();
    },
    onSuccess: function(file, response) {
    		$(".list").append(updateFile(file.name,file.size,currentTime(),"image","我也不知道文件夹是啥",response));
               $("#uploadInf").append("<p>上传成功，图片地址是：" + response + "</p>");
    },
    onFailure: function (file) {
        $("#uploadInf").append("<p>图片" + file.name + "上传失败！</p>");
        $("#uploadImage_" + file.index).css("opacity", 0.2);
    },
    onComplete: function () {
        //提交按钮隐藏
        $("#fileSubmit").hide();
        //file控件value置空
        $("#fileImage").val("");
        $("#uploadInf").append("<p>当前图片全部上传完毕，可继续添加上传。</p>");
    }
};
//文件上传成功后文档视图页面增加一行//a的跳转还没有写
function updatefloder(fname,fdate,fid,fgrade){
	var flist ="<li class='fileshow_li' onmouseover='visible(this)' onmouseout='myhidden(this)'><input name='file' class='checkbox' type='checkbox'/><div class='samll_folder dir_small inline_block'></div>"
     +"<div class='filename inline_block'><p id='"+fid+"' class='file_name' onclick='myFolder(this)'  data-grade='"+fgrade+"'>"+fname+"</p><div class='operate inline_block '>"
	+"<a class='share' href='#'><img src='./img/share.png'></a><a class='download'  href='#'><img src='./img/download.png'></a>"
	+"<a class='menu'  href='#'><img src='./img/menu.png'></a></div></div><div class='filesize inline_block'>-"
	+"</div><div class='filedate inline_block'><span class='text'>"+fdate+"</span></div></li>";
    return flist;
}
function updateFile(fname,fsize,fdate,ftype,filesrc,fid,fgrade){
	var flist ="<li class='fileshow_li' onmouseover='visible(this)' onmouseout='myhidden(this)'><input name='file' class='checkbox' type='checkbox'/><div class='"+ftype+" dir_small inline_block'></div>"
     +"<div class='filename inline_block'><p id='"+fid+"' class='file_name' data-grade='"+fgrade+"'>"+fname+"</p><div class='operate inline_block '>"
	+"<a class='share' href='#'><img src='./img/share.png'></a><a class='download'  href='#'><img src='./img/download.png'></a>"
	+"<a class='menu'  href='#'><img src='./img/menu.png'></a></div></div><div class='filesize inline_block'>"
	+fsize+"</div><div class='filedate inline_block'><span class='text'>"+fdate+"</span></div></li>";
//	var ful = document.getElementsByClassName("list")[0];
//	ful.append(flist);
    return flist;
}

function fokfloder() {
    var fokbutton = $(".foxfloder");
    var new_dir = $("#new_dir_item");
    var list = $(".list");
    fokbutton.on('click', function (e) {
        var fileli = $(updatefloder("新建文件夹", currentTime(), "给我一个id","1"));
//        var fileli = $(updateFile("新建文件夹","12" ,currentTime(),"audio","","给我一个id"));
        if($(".list li").first().length!=0){
        	fileli.insertBefore($(".list li").first());
        }else{
        	$(".list").append(fileli);
        }
        new_dir.css({"display": "block", "top": "41px"});
		
    });

    var fname = $("#new_dir_fname");
    //按回车键命名成功
    fname.keydown(function (e) {
        var filenamea = document.getElementsByClassName("file_name")[0];
        keydownMsg(e, filenamea, new_dir);
    });
}
function keydownMsg(evt, filenamea, new_dir) {
    evt = (evt) ? evt : ((window.event) ? window.event : "")
    var keyCode = evt.keyCode ? evt.keyCode : (evt.which ? evt.which : evt.charCode);
    if (keyCode == 13) {
        var fname = document.getElementById("new_dir_fname").value;
        console.log(fname);//回车键弹出文本框信息
        filenamea.firstChild.nodeValue = fname;
        console.log(filenamea.firstChild.nodeValue);
        new_dir.css({"display": "none"});
        document.getElementById("new_dir_fname").value = "新建文件夹";
        $.ajax({
            url: createfolder_url,
            type: 'post',
            data: {
                "foldername": fname,
                "foldergrade": grade,
                "folderpreid": preid,
                "foldertype": foldertype
            },
            success: function (data) {//注册用户的信息返回到这里，data参数里
                if (data == -1) {
                    alert('登录超时!');
                } else if (data == -2) {
                    alert("参数有错误！");
                } else if(data == 1){
                    alert('创建成功~~');
                }else if(data == -3){
                    alert("文件名不可重复~");
                    $(".list li").first().remove();
                }
            }
        });
    }
}
addonload(shareFile());
addonload(fokfloder());