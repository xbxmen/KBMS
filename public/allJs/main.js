var folderarr=[];
var filearr = [];
function selectAll(beCheckobj){ 
	allcheckBoxs=document.getElementsByName("file"); 
	var check_all=document.getElementsByName("filegroup"); 
	var currentfid,current_type;
	if(beCheckobj.checked){ 
		for(i=0;i<allcheckBoxs.length;i++){ 
			allcheckBoxs[i].checked = true;
			currentfid = allcheckBoxs[i].parentNode.getElementsByClassName("file_name")[0].id;
			current_type = allcheckBoxs[i].getAttribute("data-type");
			push_current_file(current_type,currentfid);
		} 
	}
	else{
		for(i=0;i<allcheckBoxs.length;i++){ 
			allcheckBoxs[i].checked = false; 
			currentfid = allcheckBoxs[i].parentNode.getElementsByClassName("file_name")[0].id;
			current_type = allcheckBoxs[i].getAttribute("data-type");
			remove_current_file(current_type,currentfid);
		} 
	}
} 
function hasCheck(checkbox,grid_list){
	var ischeck = false;
	var allcheck = true;
	for(var i = 0; i<checkbox.length;i++){
		if(checkbox[i].checked){
			ischeck = true;
		}
		if(!checkbox[i].checked){//有一个没有选中就不是全选效果
			allcheck = false;
		}
	}
	if(ischeck){
		grid_list.style.display = "block";//当有被选择时
	}else{
		grid_list.style.display = "none";	//当没有被选择
	}
	return allcheck;//返回是否全选
}

function push_current_file(current_type,currentfid){
	if(current_type=="folder"){
		folderarr.push(currentfid);
	}else{
			filearr.push(currentfid);
	}
}
function remove_current_file(current_type,currentfid){
	if(current_type=="folder"){
			folderarr.remove(currentfid);
	}else{
			filearr.remove(currentfid);
	}
}
function boxSelect(obj){
	console.log(obj);
	var allcheckbox = document.getElementsByClassName("allcheckbox")[0];//全选框
	var checkbox = document.getElementsByClassName("checkbox");//选一个的框
	var grid_list = document.getElementsByClassName("grid-cols")[0];//当有被选中时出现的效果
	var allcheck;//用于判断是否全选
	var currentf = obj.parentNode.getElementsByClassName("file_name")[0];
	var currentfid = currentf.id;
	var current_type = obj.getAttribute("data-type");
	
	allcheck = hasCheck(checkbox,grid_list);
	if(obj.checked){
		push_current_file(current_type,currentfid);
	}else{
		remove_current_file(current_type,currentfid);
	}
	if(obj.getAttribute("class")=="checkbox"){
		if(!allcheck){//当没有全选时
			allcheckbox.checked = false;
		}else{
			allcheckbox.checked = true; 
			
		}
	}
	if(obj.getAttribute("class")=="allcheckbox"){
		selectAll(obj);
		allcheck = hasCheck(checkbox,grid_list);
	}
	console.log(folderarr);
	console.log(filearr);
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
function li_share(){
	var fileshow_li = document.getElementsByClassName("fileshow_li");
//	var operate = document.getElementsByClassName("operate");
	for(var i = 0;i<fileshow_li.length;i++){
		fileshow_li[i].index = i;
		on(fileshow_li[i],"mouseover",function(){
			if(this.getElementsByClassName("operate")[0]){
				this.getElementsByClassName("operate")[0].style.visibility ="visible";
			}	
		});
		on(fileshow_li[i],"mouseout",function(){
			if(this.getElementsByClassName("operate")[0])
				this.getElementsByClassName("operate")[0].style.visibility ="hidden";
		});
	}
}
function visible(parent){
	parent.getElementsByClassName("operate")[0].style.visibility ="visible";
}
function myhidden(parent){
	parent.getElementsByClassName("operate")[0].style.visibility ="hidden";
}
addonload(li_share());
//addonload(boxSelect());
 