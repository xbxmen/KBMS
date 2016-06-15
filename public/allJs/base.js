var folderarr=[];
var filearr = [];
//处理触发事件的统一方法
function on(node,eventType,handler){
		node = typeof node =="string"?document.getElementById(node):node;
		if(document.all){
			node.attachEvent("on"+eventType,handler);
		}else{
			node.addEventListener(eventType,handler);
		}
}
//阻止事件冒泡
function stopBubble(e){
		e = window.event||e;
		if(document.all){
			e.cancelBubble = true;
		}else{
			e.stopPropagation();
		}
}
//加载类
function addonload(func) {
	var oldonload = window.onload;
	if(typeof window.onload!='function'){
		window.onload = func;
	}else{
		window.onload = function(){
			oldonload();
			func();

		}
	}
}
//继承
function extend(subclass,superclass) {
		var F = function(){};
		F.prototype = superclass.prototype;
		subclass.prototype = new F();
		subclass.prototype.constructor = subclass;
		subclass.superclass = superclass.prototype;
		if(superclass.prototype.constructor == Object.prototype.constructor){
			superclass.prototype.constructor = superclass;
		}
}
//添加样式的类
function addClass(node,str){
	if(!new RegExp("(^|\\s+)"+str).test(node.className)){
		node.className = node.className+" "+str;
	}
}
//移除样式的类
function removeClass(node,str){
	node.className = node.className.replace(new RegExp("(^||s+)" + str),"");
}
//登陆
function addonload(func){
	var oldload = window.onload;
	if(typeof window.onload!='function'){
		window.onload = func
	}else{
		window.onload = function(){
			oldload();
			func();
		}
	}
}

//添加tip
function Addtip(parentNode,txt){
	var Aspan = document.createElement("span");
	var txtq = document.createTextNode(txt);
	console.log(txtq);
	Aspan.appendChild(txtq);
	addClass(Aspan,"tip");
	Aspan.style.width = txt.length*15+"px";
	parentNode.appendChild(Aspan);
	
	console.log(parentNode);

}
//移除tip
function Removetip(parentNode){
	var node = parentNode.getElementsByClassName("tip")[0];
	RemoveList(parentNode,node);
}
//移除tip延迟
function RemovetipDelay(pNode){
	setTimeout(function(){
			Removetip(pNode);
		},2000);
}
//移除子节点
function RemoveList(pnode,cnode){
	pnode.removeChild(cnode);
}
function currentTime()
{
	var today=new Date();
	var year = today.getFullYear();
	var month = today.getMonth()+1;
	var day = today.getDate();
	var h=today.getHours();
	var m=today.getMinutes();
//	d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate();
	// add a zero in front of numbers<10
	m=checkTime(m);
//	s=checkTime(s);
	ctime=year +"-"+month+"-"+day+" "+h+":"+m;
	return ctime;
}

function checkTime(i)
{
if (i<10) 
  {i="0" + i}
  return i
}
//界面的大小
$(document).ready(function () {
    var screenH = window.screen.availHeight;
    var screenW = window.screen.availWidth;
    $(".contanier").width(screenW);
    $(".contanier").height(screenH);
    $(".img_bg").width(screenW);
    $(".img_bg").height(screenH);
});

function push_current_file(current_type,currentfid){
	if(current_type=="1"){
		if(folderarr.indexOf(currentfid)==-1){
			folderarr.push(currentfid);
		}
	}else if(current_type=="2"){
			if(filearr.indexOf(currentfid)==-1){
				filearr.push(currentfid);
			}
			
	}
}
function remove_current_file(current_type,currentfid){
	if(current_type=="1"){
			folderarr.remove(currentfid);
	}else if(current_type=="2"){
			filearr.remove(currentfid);
	}
}

/*
* 删除文件
* */
function deleteF() {
	if(filearr.length > 0){
		console.log(filearr);
		$.ajax({
			url: deletefile_url,
			type: 'post',
			data: {
				"fileid": filearr,
			},
			success: function (data) {//注册用户的信息返回到这里，data参数里
				if (data == -1) {
					alert('登录超时!');
				} else if (data == -2) {
					alert("参数有错误！");
				} else if(data == 1) {
					alert("文件删除成功~~");
					window.location.reload();
					/*$(".allcheckbox").prop("checked",false);
					$(".grid-cols").hide();
					$(".list").empty();
					showFolder();
					showFiles();*/
				}else{
					console.log(data);
				}
			}
		});
	}
}
Array.prototype.indexOf = function(val) {
	for (var i = 0; i < this.length; i++) {
		if (this[i] == val) return i;
		}
	return -1;
};
Array.prototype.remove = function(val) {
	var index = this.indexOf(val);
	if (index > -1) {
	this.splice(index, 1);
	}
};
/*
$.ajax({
	url: checksession_url,
	type: 'post',
	success: function (data) {//注册用户的信息返回到这里，data参数里
		if (data == -1) {
			alert("您现在是非登录状态");
			window.location.href = "index.html";
		}
	}
});*/
