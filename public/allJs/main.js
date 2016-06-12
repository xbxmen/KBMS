
function selectAll(beCheckobj){ 
	allcheckBoxs=document.getElementsByName("file"); 
	var check_all=document.getElementsByName("filegroup"); 
	if(beCheckobj.checked){ 
		for(i=0;i<allcheckBoxs.length;i++){ 
			allcheckBoxs[i].checked = true; 
		} 
	}
	else{
		for(i=0;i<allcheckBoxs.length;i++){ 
			allcheckBoxs[i].checked = false; 
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
function boxSelect(){
	var allcheckbox = document.getElementsByClassName("allcheckbox")[0];//全选框
	var checkbox = document.getElementsByClassName("checkbox");//选一个的框
	var grid_list = document.getElementsByClassName("grid-cols")[0];//当有被选中时出现的效果
	var allcheck;//用于判断是否全选
	var hasfloder 
	for(var i = 0; i<checkbox.length;i++){
		on(checkbox[i],"click",function(){//单选的事件
			allcheck = hasCheck(checkbox,grid_list);
			if(!allcheck){//当没有全选时
				allcheckbox.checked = false; 
			}else{
				allcheckbox.checked = true; 
			}
		});
	}
		on(allcheckbox,"click",function(){//全选效果
			selectAll(this);
			allcheck = hasCheck(checkbox,grid_list);
		});
//	}
	
}
function li_share(){
	var fileshow_li = document.getElementsByClassName("fileshow_li");
//	var operate = document.getElementsByClassName("operate");
	for(var i = 0;i<fileshow_li.length;i++){
		fileshow_li[i].index = i;
		on(fileshow_li[i],"mouseover",function(){
			if(this.getElementsByClassName("operate")[0]){
				this.getElementsByClassName("operate")[0].style.visibility ="visible";
				console.log(this.getElementsByClassName("operate")[0]);
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
	console.log(parent);
}
addonload(li_share());
addonload(boxSelect());
 