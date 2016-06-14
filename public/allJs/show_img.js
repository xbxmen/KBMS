function updateimg(imgsrc,fdate,fid,fgrade,pnode){
	var imgli = '<a class="timeline-content-item" href="photo_show.html?imgsrc='+imgsrc+'" onmouseout="hiddenbox(this)"'+
	'onmouseover="showbox(this)"><img src="'+imgsrc+'" /><div class="timeline-checkbox">'+
	'<input name="file" type="checkbox" class="checkbox" onclick="checkboxClick(this)" /></div></a>';
	$(pnode).append(imgli);
}
function updatebyData(upload_data){
	var timelineitem = "<div class='timeline-item'><div class='timeline-item-title'><span class='timeline-day'>"+
						upload_data+"</span><span class='timeline-icon show_img' data-time='"+upload_data+"' onclick='timelinePack(this)'></span>"+
						"<div class='timeline-checkall'><input name='filegroup'"+
						"class='allcheckbox checkbox' type='checkbox' onclick='allcheckbox(this)'/><label>全选</label>"+
						"</div></div><div class='timeline-content'></div></div>";
	$(".main_timeline").append(timelineitem);
	console.log($(".main_timeline").find(".timeline-item"));
}
addonload(updatebyData(5,4));
//鼠标在a标签上复选框出现
function showbox(obj){
	obj.getElementsByClassName("timeline-checkbox")[0].style.display = "block";
	
}
//鼠标离开a标签上复选框消失
function hiddenbox(obj){
	obj.getElementsByClassName("timeline-checkbox")[0].style.display = "none";
}
//当每个日期的全选
function allcheckbox(obj){
	var cbox = $(obj).parents(".timeline-item").find(".timeline-checkbox");
		if($(obj).context.checked){
			cbox.show();
			cbox.children(".checkbox").each(function(){
				$(this).context.checked = true;
			});
		}else{
			cbox.hide();
			cbox.children(".checkbox").each(function(){
				$(this).context.checked = false;
			});
		}
		if(hasCheck($(".checkbox"))){
			$(".grid-cols").first().fadeIn();
		}else{
			$(".grid-cols").first().fadeOut();
		}
		var isallcheck = isAllcheck($(".checkbox"));
		var all =document.getElementById("check-all");
		if(isallcheck){
			all.checked = true;
		}else{
			all.checked = false;
		}
}
//每个复选框的效果,
function checkboxClick(obj){
	if(hasCheck($(".checkbox"))){
		$(".grid-cols").first().fadeIn();
	}else{
		$(".grid-cols").first().fadeOut();
	}
	var temp = obj.parentNode.parentNode.parentNode.parentNode;
	var all = temp.getElementsByClassName("allcheckbox")[0]; 
	if(!obj.checked){
		all.checked = false;
	}else if(isAllcheck(temp.getElementsByClassName("checkbox"))){//每一组是否全选情况
		all.checked = true;
	}
	var isallcheck = isAllcheck($(".checkbox"));
	var all =document.getElementById("check-all");
	
	if(isallcheck){
		all.checked = true;
	}else{
		all.checked = false;
	}
	
}
//是否有选中的
function hasCheck(checkbox){
	var ischeck = false;
	for(var i = 0; i<checkbox.length;i++){
		if(checkbox[i].checked){
			ischeck = true;
			break;
		}
	}
	return ischeck;//返回是否有选中
}
function isAllcheck(checkbox){
	var isallcheck = true;
	for(var i = 0; i<checkbox.length;i++){
		if(!checkbox[i].checked){
			isallcheck = false;
			break;
		}
	}
	
	return isallcheck;//返回是否全选
}
//是否全选
function allcheck(obj){
	var check = document.getElementsByClassName("checkbox");
	if(obj.checked){
		for(var i = 0;i<check.length;i++){
			check[i].checked = true;
			check[i].parentNode.style.display = "block";
		}
	}else{
		for(var i = 0;i<check.length;i++){
			check[i].checked = false;
			var temp = check[i].getAttribute("class")
			if(temp.indexOf("allcheckbox")==-1){
				check[i].parentNode.style.display = "none";
			};
			document.getElementsByClassName("grid-cols")[0].style.display = "none"
		}
	}
}
//收起和放下
function timelinePack(obj){
	var ptime = obj.getAttribute('data-time');
	var pcontent = obj.parentNode;
	var content = pcontent.parentNode.getElementsByClassName("timeline-content")[0];
	if(pcontent.getElementsByClassName("show_img").length!=0){
		removeClass(obj,"show_img");
		addClass(obj,"hidden_img");
		$(content).empty();//收起是时释放当前时间的所有图片
		content.style.display = "none";

	} else if(pcontent.getElementsByClassName("hidden_img")!=0){
		removeClass(obj,"hidden_img");
		addClass(obj,"show_img");
		content.style.display = "block";
		$.ajax({
			url: photoShow_url,
			type: 'post',
			dataType: 'json',
			data:{
				"ptime" : ptime
			},
			success: function(data) {//注册用户的信息返回到这里，data参数里
				if(data == -1){
					alert('登录超时!');
				}else{
					console.log(data);
					for(var i = 0; i < data.length;i++){
						updateimg(data[i]['filepath'],"fdate","fid","fgrade",content);
					}
				}
			}
		});
	}
}