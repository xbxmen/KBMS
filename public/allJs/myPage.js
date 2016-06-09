var files = [];
function addfile(src,isshare,isfolder,ischeck,file_type){
	var file={
		src:src,
		isshare:isshare,
		isfolder:isfolder,
		ischeck:ischeck,
		file_type:file_type
	}
	files.push(file);
}
//模拟插入文件
addfile("等待后台给我文件1",false,true,false,"image");
addfile("等待后台给我文件2",false,true,false,"image");
addfile("等待后台给我文件3",false,false,false,"image");
addfile("等待后台给我文件4",false,false,false,"image");
addfile("等待后台给我文件5",false,false,false,"image");
addfile("等待后台给我文件5",false,false,false,"image");
console.log(files);
function shareFile(){
//	var file_list =document.getElementsByClassName("fileshow_li");
	var tip_parent = document.getElementsByClassName("show_main")[0];
	var share = document.getElementsByClassName("share");
	for(var i =0;i<share.length;i++){
		share[i].index = i;
//		var share = file_list[i].getElementsByClassName("share")[0];
		console.log(share);
		on(share[i],"click",function(e){
			console.log(this.index);
			if(files[this.index].isshare ){
				files[this.index].isshare = false;
				Addtip(tip_parent,"取消分享");
				RemovetipDelay(tip_parent);
				
			}else{
				files[this.index].isshare = true;
				Addtip(tip_parent,"分享成功");
				RemovetipDelay(tip_parent);
			}
			console.log(files[this.index].isshare);
		});
		
	}
}

//文件的相关信息
//var file ={
//	src:"等待后台给我文件",
//	isshare:true,//是否已经被分享
//	isfolder:false,//是否是文件夹
//	ischeck:false,//是否被选中
//	file_type:doc,
//}
//界面的大小
$(document).ready(function(){
			var screenH = window.screen.availHeight;
			var screenW = window.screen.availWidth;
			$(".contanier").width(screenW);
			$(".contanier").height(screenH);
			$(".img_bg").width(screenW);
			$(".img_bg").height(screenH);
});
var photos=[];

function addphoto(src,cfolder){
	var photo = {
		src :src,
		cfolder:cfolder
	};
	photos.push(photo);
	console.log(photos);
}

//浏览图片时图片旋转
$(function(){
	var photo = $('.photo_contanier');
	var currentdeg=0;
	var cd;
	$('.left_rotate').on("click",function(){
		currentdeg+=90;
		cd = "rotate("+currentdeg+"deg)"
		photo.css("-webkit-transform",cd);
	});
	$('.right_rotate').on("click",function(){
		currentdeg-=90;
		cd = "rotate("+currentdeg+"deg)"
		photo.css("-webkit-transform",cd);
	});
});
//判断是文件夹还是文件
$(function(){
		var type ='samll_folder';//这个地方应该是判断得到的是文件夹还是文件
		var addlist = "<li class='fileshow_li'><input name='file' class='checkbox' type='checkbox'/><div class='"+type+" dir_small inline_block'></div><div class='filename inline_block'><a href='#' class='file_name'>哈利波特全集</a><div class='operate inline_block '><a class='share' href='#'><img src='img/share.png'></a><a class='download'  href='#'><img src='img/download.png'></a><a class='menu'  href='#'><img src='img/menu.png'></a></div></div><div class='filesize inline_block'>16KB</div><div class='filedate inline_block'>2016-05-26 13:22</div></li>"
		$(".update").on("click",function(){
			$('.list').append(addlist); 
		});
});
//function addPhoto(){
//	var ie=navigator.appName=="Microsoft Internet Explorer" ? true : false; 
//	var path;
//	var file = document.getElementById("file");
//	if(ie){ 
//		file.click(); 
//		path=file.value;
//		addphoto(path,"img");
//	}else{
//		var a=document.createEvent("MouseEvents");//FF的处理 
//		a.initEvent("click", false, true);  
//		file.dispatchEvent(a);
//	} 
//	on(file,"change",function(){
//		path=file.value;
//		console.log(path);
//		addphoto(path,"img");
//	});
//		
//	console.log(photos);
//}
//function UpLoad(){
//	var upload = document.getElementById("upload");
//	var main_show = document.getElementsByClassName("show_main")[0];
//	var nav =document.getElementsByClassName("nav")[0];
//	var load_main = document.getElementById("main");
//	var 
//	on(upload,"click",function(){
//		main_show.style.display = "none";
//		nav.style.display"none";
//		load_main.style.display = "block";
//	});
//}

$(function(){
	//点击UPLOAD出现上传界面
	$("#upload").on('click',function(){
		$(".show_main").css("display","none");
		$(".nav").css("display","none");
		$("#uploadmain").css("display","block");
		console.log("hello")
	});
	//点击回到图片回到图显示图片的界面
	$(".return_pre").on("click",function(){
		if(confirm("确定退出上传？")){
			$("#uploadmain").css("display","none");
			$(".show_main").css("display","block");
			$(".nav").css("display","block");
			
		}
		
	});
});

var file_type;
//根据选择的不同的文件类型来到不同的页面
$(function(){
		$('.column').on('click', function(e){
			var _this = $(this);
			file_type= _this.attr("data-txt");
			var h = file_type+".html"
			window.location.href=h;
			e.stopPropagation();
		});
		
});

//实现图片文件上传

var imgparams = {
   
   filter: function(files) {
        var arrFiles = [];
        for (var i = 0, file; file = files[i]; i++) {
            if (file.type.indexOf("image") == 0) {
                if (file.size >= 512000) {
                    alert('您这张"'+ file.name +'"图片大小过大，应小于500k');    
                } else {
                    arrFiles.push(file);    
                }           
            } else {
                alert('文件"' + file.name + '"不是图片。');    
            }
        }
        return arrFiles;
    },
    onSelect: function(files) {
        var html = '', i = 0;
        $("#preview").html('<div class="upload_loading"></div>');
        var funAppendImage = function() {
            file = files[i];
            if (file) {
                var reader = new FileReader()
                reader.onload = function(e) {
                    html = html + '<div id="uploadList_'+ i +'" class="upload_append_list"><p><strong>' + file.name + '</strong>'+ 
                        '<a href="javascript:" class="upload_delete" title="删除" data-index="'+ i +'">删除</a><br />' +
                        '<img id="uploadImage_' + i + '" src="' + e.target.result + '" class="upload_image" /></p>'+ 
                        '<span id="uploadProgress_' + i + '" class="upload_progress"></span>' +
                    '</div>';
                    
                    i++;
                    console.log(file);
                    funAppendImage();
                }
                reader.readAsDataURL(file);
            } else {
                $("#preview").html(html);
                if (html) {
                    //删除方法
                    $(".upload_delete").click(function() {
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
        $("#uploadInf").append("<p>上传成功，图片地址是：" + response + "</p>");
    },
    onFailure: function(file) {
        $("#uploadInf").append("<p>图片" + file.name + "上传失败！</p>");  
        $("#uploadImage_" + file.index).css("opacity", 0.2);
    },
    onComplete: function() {
        //提交按钮隐藏
        $("#fileSubmit").hide();
        //file控件value置空
        $("#fileImage").val("");
        $("#uploadInf").append("<p>当前图片全部上传完毕，可继续添加上传。</p>");
    }
};
//ZXXFILE = $.extend(ZXXFILE, params);

var videoparams ={
	 filter: function(files) {
        var arrFiles = [];
        for (var i = 0, file; file = files[i]; i++) {
            if (file.type.indexOf("video") == 0) {

                    arrFiles.push(file);             
            } else {
                alert('文件"' + file.name + '"不是视频。');    
            }
        }
        return arrFiles;
    },
     onSelect: function(files) {
        var html = '', i = 0;
        $("#preview").html('<div class="upload_loading"></div>');
        var funAppendImage = function() {
            var file = files[i];
            if (file) {
                var reader = new FileReader()
                reader.onload = function(e) {
                    html = html + '<div id="uploadList_'+ i +'" class="upload_append_list"><p><strong>' + file.name + '</strong>'+ 
                        '<a href="javascript:" class="upload_delete" title="删除" data-index="'+ i +'">删除</a><br />' +

                        '<span id="uploadProgress_' + i + '" class="upload_progress"></span>' +
                    '</div>';
                    
                    i++;
                    console.log(file);
                    funAppendImage();
                }
                reader.readAsDataURL(file);
            } else {
                $("#preview").html(html);
                if (html) {
                    //删除方法
                    $(".upload_delete").click(function() {
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
        $("#uploadInf").append("<p>上传成功，视频地址是：" + response + "</p>");
    },
    onFailure: function(file) {
        $("#uploadInf").append("<p>视频" + file.name + "上传失败！</p>");  
//      $("#uploadImage_" + file.index).css("opacity", 0.2);
    },
    onComplete: function() {
        //提交按钮隐藏
        $("#fileSubmit").hide();
        //file控件value置空
        $("#fileImage").val("");
        $("#uploadInf").append("<p>当前视频全部上传完毕，可继续添加上传。</p>");
    }
};
var audioparams ={
	 filter: function(files) {
        var arrFiles = [];
        for (var i = 0, file; file = files[i]; i++) {
            if (file.type.indexOf("audio") == 0) {

                    arrFiles.push(file);             
            } else {
                alert('文件"' + file.name + '"不是音频。');    
            }
        }
        return arrFiles;
    },
     onSelect: function(files) {
        var html = '', i = 0;
        $("#preview").html('<div class="upload_loading"></div>');
        var funAppendImage = function() {
            file = files[i];
            if (file) {
                var reader = new FileReader()
                reader.onload = function(e) {
                    html = html + '<div id="uploadList_'+ i +'" class="upload_append_list"><p><strong>' + file.name + '</strong>'+ 
                        '<a href="javascript:" class="upload_delete" title="删除" data-index="'+ i +'">删除</a><br />' +

                        '<span id="uploadProgress_' + i + '" class="upload_progress"></span>' +
                    '</div>';
                    
                    i++;
                    console.log(file);
                    funAppendImage();
                }
                reader.readAsDataURL(file);
            } else {
                $("#preview").html(html);
                if (html) {
                    //删除方法
                    $(".upload_delete").click(function() {
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
        $("#uploadInf").append("<p>上传成功，音频地址是：" + response + "</p>");
    },
    onFailure: function(file) {
        $("#uploadInf").append("<p>音频" + file.name + "上传失败！</p>");  
//      $("#uploadImage_" + file.index).css("opacity", 0.2);
    },
    onComplete: function() {
        //提交按钮隐藏
        $("#fileSubmit").hide();
        //file控件value置空
        $("#fileImage").val("");
        $("#uploadInf").append("<p>当前音频全部上传完毕，可继续添加上传。</p>");
    }
};
var textparams ={
	 filter: function(files) {
        var arrFiles = [];
        for (var i = 0, file; file = files[i]; i++) {
            if (file.type.indexOf("text") == 0||file.type.indexOf("application") == 0) {
                    arrFiles.push(file);             
            } else {
                alert('文件"' + file.name + '"不是文档。');    
            }
        }
        return arrFiles;
    },
         onSelect: function(files) {
        var html = '', i = 0;
        $("#preview").html('<div class="upload_loading"></div>');
        var funAppendImage = function() {
            var file = files[i];
            if (file) {
                var reader = new FileReader()
                reader.onload = function(e) {
                    html = html + '<div id="uploadList_'+ i +'" class="upload_append_list"><p><strong>' + file.name + '</strong>'+
                        '<a href="javascript:" class="upload_delete" title="删除" data-index="'+ i +'">删除</a><br />' +

                        '<span id="uploadProgress_' + i + '" class="upload_progress"></span>' +
                    '</div>';

                    i++;
                    console.log(file);
                    funAppendImage();
                }
                reader.readAsDataURL(file);
            } else {
                $("#preview").html(html);
                if (html) {
                    //删除方法
                    $(".upload_delete").click(function() {
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
        $("#uploadInf").append("<p>上传成功，文档地址是：" + response + "</p>");
    },
    onFailure: function(file) {
        $("#uploadInf").append("<p>文档" + file.name + "上传失败！</p>");  
//      $("#uploadImage_" + file.index).css("opacity", 0.2);
    },
    onComplete: function() {
        //提交按钮隐藏
        $("#fileSubmit").hide();
        //file控件value置空
        $("#fileImage").val("");
        $("#uploadInf").append("<p>当前文档全部上传完毕，可继续添加上传。</p>");
    }
};

   
addonload(shareFile());
