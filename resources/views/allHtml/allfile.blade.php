<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>ingServer我的</title>
		<link rel="stylesheet" type="text/css" href="./allCss/base.css">
		<link rel="stylesheet" type="text/css" href="./allCss/myPage.css" />
		<link rel="stylesheet" type="text/css" href="./allCss/show.css" />
		<link href="./allCss/common.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="./allJs/jquery-2.1.4.js"></script>
		<script type="text/javascript" src="./allJs/moxie.js"></script>
	</head>
	<body>
		<div class="bg">
			<img class="img_bg" src="./img/show.png"/>
		</div>
		<div class="contanier"> 
			<div class="top">
					<div class="top1"><p class="top1_I">ING</p><p class="top1_S">Server</p></div>
					<div class="top2"><div class="M_top2_I"><img src="./img/gl7.jpg"></div><p class="M_top2_S">欢迎你，Dear</p> </div>
			</div>
				<div class="nav">
					<div class="nav_L"><a href="index.html"><p >HOME</p><img src="./img/left.png"></a> </div>
					<div class="nav_L"><a href="my.html"><p >MY WORK</p><img src="./img/left.png"></a> </div>
					<div class="nav_L"><p >HOT</p><img src="./img/left.png"></div>
					<div class="nav_R" id="upload"><input id="file" type="file" multiple="multiple" style="display: none;"></input><span >UPLOAD</span><img src="./img/right.png"></div>
					<div class="nav_R"><p >HELP</p><img src="./img/right.png"></div>
					<div class="nav_R"><p >ABOUT</p><img src="./img/right.png"></div>
				</div>
			<div class="show_main">
				<from class="filefrom">
					<div class="show_content">
						<input name="filegroup" class="allcheckbox" type="checkbox" onclick="boxSelect(this);"/>
						<div class="list_cols">
							<ul class="list_head">
								<li class="col first-col">
									<!--<input name="filegroup" class="allcheckbox" type="checkbox"/>-->
									<!--<span class="black">&nbsp;</span>-->
									<button class="foxfloder">新建文件夹</button>
									<span class="text">文件名</span>
								</li>
								<li class="col" style="width: 12%;">
									<span class="size">大小</span>
								</li>
								<li class="col last-col" style="width: 25%;">
									<span class="text">修改日期</span>
								</li>
							</ul>
						</div>
						<div class="grid-cols">
									<ul class="list_head" >
										<li class="col">
											<span class="black">&nbsp;</span>
											<!--<input name="filegroup" class="allcheckbox" type="checkbox"/></li>-->
										<li class="col" style="width: 20%;">
											<span class="text">已选中1个文件/文件夹</span>
										</li>
										<li class="col" style="width: 76%;">
											<button class="share">
												分享
												<img src="./img/share.png">
											</button>
											<button class="download">
												下载
												<img src="./img/download.png">
											</button>
											<button class="delete">
												删除
												<img src="./img/delete.png">
											</button>
											<button class="delete">
												重命名
											</button>
											<button class="delete">
												复制到
											</button>
											<button class="delete">
												移动到
											</button>
										</li>
									</ul>
						</div>
						
						<div>
							<ul class="list">
								<li class="fileshow_li">
									<input name="file" class="checkbox" type="checkbox" onclick="boxSelect(this)"/>
									<div class="samll_folder dir_small inline_block">
									</div>
									<div class="filename inline_block">
										<a href="photo_show.html" class="file_name">哈利波特全集</a>
										<div class="operate inline_block ">
											<a class="share" href="#"><img src="./img/share.png"></a>
											<a class="download"  href="#"><img src="./img/download.png"></a>
											<a class="menu"  href="#"><img src="./img/menu.png"></a>
										</div>
									</div>

									<div class="filesize inline_block">-</div>
									<div class="filedate inline_block"><span class="text">2016-05-26 13:22</span></div>
								</li>
								<li class="fileshow_li">
									<input name="file" class="checkbox" type="checkbox" onclick="boxSelect(this)"/>
									<div class="samll_folder dir_small inline_block">	
									</div>
									<div class="filename inline_block">
										<a href="photo_show.html"  class="file_name" >哈利波特全集</a>
										<div class="operate inline_block ">
											<a class="share" href="#"><img src="./img/share.png"></a>
											<a class="download"  href="#"><img src="./img/download.png"></a>
											<a class="menu"  href="#"><img src="./img/menu.png"></a>
										</div>
									</div>
									
									<div class="filesize inline_block">-</div>
									<div class="filedate inline_block">2016-05-26 13:22</div>
								</li>
								<li class="fileshow_li">
									<input name="file" class="checkbox" type="checkbox" onclick="boxSelect(this)"/>
									<div class="image dir_small inline_block">	
									</div>
									<div class="filename inline_block">
										<a href="photo_show.html"  class="file_name" >哈利波特全集</a>
										<div class="operate inline_block ">
											<a class="share" href="#"><img src="./img/share.png"></a>
											<a class="download"  href="#"><img src="./img/download.png"></a>
											<a class="menu"  href="#"><img src="./img/menu.png"></a>
									</div>
									</div>
									
									<div class="filesize inline_block">16KB</div>
									<div class="filedate inline_block">2016-05-26 13:22</div>
								</li>
								<li class="fileshow_li">
									<input name="file" class="checkbox"  type="checkbox" onclick="boxSelect(this)"/>
									<div class="image dir_small inline_block">	
									</div>
									<div class="filename inline_block">
										<a href="photo_show.html" class="file_name" >哈利波特全集</a>
										<div class="operate inline_block ">
											<a class="share" href="#"><img src="./img/share.png"></a>
											<a class="download"  href="#"><img src="./img/download.png"></a>
											<a class="menu"  href="#"><img src="./img/menu.png"></a>
										</div>
									</div>
									
									<div class="filesize inline_block">16KB</div>
									<div class="filedate inline_block">2016-05-26 13:22</div>
								</li>
							</ul>
							<div id="new_dir_item">
								<li class="fileshow_li">
									<input name="file" class="checkbox"  type="checkbox" onclick="boxSelect(this)"/>
									<div class="samll_folder dir_small  inline_block">	
									</div>
									<div class="filename inline_block">
										<input type="text" id="new_dir_fname" value="新建文件夹"/>
									</div>
									<div class="filesize inline_block">-</div>
									<div class="filedate inline_block">-</div>
								</li>
							</div>
						</div>
					</div>
				</from>
			</div>
			
		    <div id="uploadmain">
			    <div id="body" class="light">
			        <div id="content" class="show">
			            <div class="return_pre"><a href="#show_main">回到全部文件</a></div>
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
		</div>
		<script>
			var createfolder_url = "{{url('upload/createfolder')}}";
			var foldertype =  2;
		</script>
		<script src="./allJs/base.js"></script>
		<script src="./allJs/main.js"></script>
		<script src="./allJs/mutil.js"></script>
		<script src="./allJs/myPage.js"></script>
		<script type="text/javascript">
		 	ZXXFILE = $.extend(ZXXFILE, imgparams);
			ZXXFILE.init();
		</script>
		<script>
			var preid = -1;
			var grade = 1;
			function showFiles() {
				$.ajax({
					url: '{{url('show/files')}}',
					type: 'post',
					dataType: 'json',
					data: {
						"filegrade" : grade,
						"filepreid" : preid
					},
					success: function(data){//注册用户的信息返回到这里，data参数里
						if(data == -1){
							alert('登录超时!');
						}else if(data == -2){
							alert("参数有错误！");
						}else{
							console.log(data);
							for(var i = 0;i<data.length;i++){
								var fileli = $(updateFile("新建文件夹","12" ,currentTime(),"audio","","给我一个id"));
								if($(".list li").first().length!=0){
									fileli.insertBefore($(".list li").first());
								}else{
									$(".list").append(fileli);
								}
							}
						}
					}
				});
			}
			function showFolder() {
				$.ajax({
					url: '{{url('show/folders')}}',
					type: 'post',
					dataType: 'json',
					data: {
						"filegrade" : grade,
						"filepreid" : preid
					},
					success: function(data){//注册用户的信息返回到这里，data参数里
						if(data == -1){
							alert('登录超时!');
						}else if(data == -2){
							alert("参数有错误！");
						}else{
							$(".list").empty();
							console.log(data);
							for(var i = 0;i<data.length;i++){
								console.log(data[i]['grade']);
								var fileli = $(updatefloder(data[i]['folname'], data[i]['updatetime'], data[i]['folid'],data[i]['grade']));
								if($(".list li").first().length!=0){
									fileli.insertBefore($(".list li").first());
								}else{
									$(".list").append(fileli);
								}
							}
						}
					}
				});
			}
			showFolder();
			showFiles();
		</script>
		<script>
			function myFolder(ele) {
				preid = ele.getAttribute("id");
				grade = ele.getAttribute("data-grade").valueOf();
				grade++;
				console.log(preid);
				console.log(grade);
				showFolder();
				showFiles();
			}
		</script>
	</body>
</html>
