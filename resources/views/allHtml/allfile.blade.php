<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Upload_File</title>
		<link rel="stylesheet" type="text/css" href="./allCss/base.css">
		<link rel="stylesheet" type="text/css" href="./allCss/myPage.css" />
		<link rel="stylesheet" type="text/css" href="./allCss/show.css" />
		<link href="./allCss/common.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="./css/font-awesome.css">
		<script type="text/javascript" src="./allJs/jquery-2.1.4.js"></script>
		
	</head>
	<body>
		<div class="bg">
			<img class="img_bg" src="./img/show.png"/>
		</div>
		<div class="contanier"> 
			<div class="top">
					<div class="top1"><p class="top1_I">ING</p><p class="top1_S">Server</p></div>
					<div class="top2"><div class="M_top2_I"><img src="./img/gl7.jpg"></div><p class="M_top2_S">欢迎你,{{session('username')}}</p> </div>
			</div>
				<div class="nav">
					<div class="nav_L"><a href="index.html"><p >HOME</p><img src="./img/left.png"></a> </div>
					<div class="nav_L"><a href="my.html"><p >MY WORK</p><img src="./img/left.png"></a> </div>
					<div class="nav_L"><p >HOT</p><img src="./img/left.png"></div>
					<div class="nav_R" id="upload"><input type="file" multiple="multiple" style="display: none;"></input><span >UPLOAD</span><img src="./img/right.png"></div>
					<div class="nav_R"><p >HELP</p><img src="./img/right.png"></div>
					<div class="nav_R"><p >ABOUT</p><img src="./img/right.png"></div>
				</div>
			<div class="show_main">
				<from class="filefrom">
					<div class="show_content">
						<input name="filegroup" class="allcheckbox" type="checkbox" onclick="boxSelect(this);"/>
						<div class="list_cols">
						<input class="foxfloder" type="button" value="新建文件夹">
							<ul class="list_head">
								<li class="col first-col">
									<!--<input name="filegroup" class="allcheckbox" type="checkbox"/>-->
									<!--<span class="black">&nbsp;</span>-->
									<button class="return" onclick="BackPre()" id="back"><img src="./img/return.png"/></button>
									<button class="foxfloder">新建文件夹</button>
									<span class="text">文件名</span>
								</li>
								<li class="col chen" style="width: 12%;">
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
											<button class="delete" id="delete" onclick="deleteFF()">
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
							</ul>
							<div id="new_dir_item">
								<li class="fileshow_li">
									<input  type="checkbox"/>
									<div class="samll_folder dir_small  inline_block">	
									</div>
									<div class="filename inline_block">
										<input type="text" id="new_dir_fname" class="juan"  value="新建文件夹"/>
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
			            <div class="return_pre"><a href="#show_main"><i class="w_icon icon-double-angle-left"></i></a></div>
			            <div class="demo">
			                <form id="uploadForm" action="upload.php" method="post" enctype="multipart/form-data">
			                    <div class="upload_box">
			                        <div class="upload_main">
			                            <div class="upload_choose">
			                                <a href="#" class="file">选择文件<input  class="up_input" id="fileImage" type="file" size="30" name="fileselect[]" multiple /></a>

			                            </div>
			                            <div id="preview" class="upload_preview"></div>
			                        </div>
			                        <div class="upload_submit">
			                            <input type="button" id="fileSubmit" class="upload_submit_btn" value="确认上传"></input>
			                        </div>
			                       <!--<p id="load0">NAN%</p>-->
			                       <div id="load0"> 
									  <div class="load-bar"> 
									    <div id="load-bar-inner" data-loading="0"> <span id="counter"></span> </div> 
									  </div> 
								  
									</div> 
			                    </div>
			                </form>
			            </div>
			        </div>       
			    </div>
			</div>
		</div>
		<script>
			var createfolder_url = "{{url('file/createfolder')}}";
			var deletefolder_url = "{{url('file/deletefolder')}}";
			var deletefile_url = "{{url('file/deletefile')}}";

			var preid = "{{session('preid')}}";
			var grade = "{{session('grade')}}";
			var foldertype = 2;

			console.log(preid);
			console.log(grade);
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
						}else{
							console.log(data);
							for(var i = 0;i<data.length;i++){
								var fileli = $(updateFile(data[i]['filehead'],data[i]['filesize'] ,data[i]['updatetime'],mytype(data[i]['filetype']),data[i]['filepath'],data[i]['fid'],data[i]['filegrade']));
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
						}else{
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
			$(".list").empty();
			console.log(preid);
			console.log(grade);
			showFolder();
			showFiles();
		</script>
		<script>
			/*
			* 获取单个文件夹里面的东西
			* */
			function myFolder(ele) {
				$(".list").empty();
				preid = ele.getAttribute("id");
				grade = ele.getAttribute("data-grade").valueOf();
				grade++;
				console.log(preid);
				console.log(grade);
				showFolder();
				showFiles();
			}
			/*
			*返回上一级
			* */
			function BackPre() {
				if(grade ==  1){
					preid = -1;
					$(".list").empty();
					showFolder();
					showFiles();
				}else{
					$.ajax({
						url: '{{url('show/BackPre')}}',
						type: 'post',
						dataType: 'json',
						data: {
							"myid" : preid,
							"mygrade" : grade
						},
						success: function(data) {//注册用户的信息返回到这里，data参数里
							if(data == -1){
								alert('登录超时!');
							}else{
								console.log(data['folpreid']);
								grade--;
								if(grade == 1){
									preid = -1;
								}else{
									preid = data['folpreid'];
								}
								$(".list").empty();
								showFolder();
								showFiles();
							}
						}
					});
				}
			}

		</script>
	</body>
</html>
