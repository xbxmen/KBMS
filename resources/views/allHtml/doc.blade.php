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
	</head>
	<body>
		<div class="bg">
			<img class="img_bg" src="./img/doc_bg.png"/>
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
				<div class="nav_R" id="upload" ><input id="file" type="file" multiple="multiple" style="display: none;"></input><span >UPLOAD</span><img src="./img/right.png"></div>
				<div class="nav_R"><p >HELP</p><img src="./img/right.png"></div>
				<div class="nav_R"><p >ABOUT</p><img src="./img/right.png"></div>
			</div>
			<div class="show_main">
				<from class="filefrom">
					<div class="show_content">
						<input name="filegroup" class="allcheckbox" type="checkbox"/>
						<div class="list_cols">
							<ul class="list_head">
								<li class="col first-col">
									<!--<input name="filegroup" class="allcheckbox" type="checkbox"/>-->
									<span class="black">&nbsp;</span>
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
										<input name="file" class="checkbox" type="checkbox"/>
										<div class="samll_folder dir_small inline_block">	
										</div>
										<div class="filename inline_block">
											<a href="#" class="file_name">哈利波特全集</a>
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
										<input name="file" class="checkbox" type="checkbox"/>
										<div class="samll_folder dir_small inline_block">	
										</div>
										<div class="filename inline_block">
											<a href="#"  class="file_name" >哈利波特全集</a>
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
										<input name="file" class="checkbox" type="checkbox"/>
										<div class="doc_file dir_small inline_block">	
										</div>
										<div class="filename inline_block">
											<a href="#"  class="file_name" >哈利波特全集</a>
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
										<input name="file" class="checkbox"  type="checkbox"/>
										<div class="doc_file dir_small inline_block">	
										</div>
										<div class="filename inline_block">
											<a href="#" class="file_name" >哈利波特全集</a>
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
										<input name="file" class="checkbox"  type="checkbox"/>
										<div class="doc_file dir_small inline_block">	
										</div>
										<div class="filename inline_block">
											<a href="#" class="file_name">哈利波特全集</a>
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
										<input name="file" class="checkbox"  type="checkbox"/>
										<div class="doc_file dir_small inline_block">	
										</div>
										<div class="filename inline_block">
											<a href="#" class="file_name">哈利波特全集</a>
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
							</div>
					</div>
				</from>
			</div>
			<div id="uploadmain">
			    <div id="body" class="light">
			        <div id="content" class="show">
			            <div class="return_pre"><a href="#show_main">回到文档</a></div>
			            <div class="demo">
			                <form id="uploadForm" action="upload.php" method="post" enctype="multipart/form-data">
			                    <div class="upload_box">
			                        <div class="upload_main">
			                            <div class="upload_choose">
			                                <input id="fileImage" type="file" size="30" name="fileselect[]" multiple />
			                                <span id="fileDragArea" class="upload_drag_area">或者将文档拖到此处</span>
			                            </div>
			                            <div id="preview" class="upload_preview"></div>
			                        </div>
			                        <div class="upload_submit">
			                            <button type="button" id="fileSubmit" class="upload_submit_btn">确认上传文档</button>
			                        </div>
			                        <div id="uploadInf" class="upload_inf"></div>
			                    </div>
			                </form>
			            </div>
			        </div>       
			    </div>
			</div>
		</div>	
		<script src="./allJs/base.js"></script>
		<script src="./allJs/main.js"></script>
		<script type="text/javascript" src="./allJs/mutil.js"></script>
		<script src="./allJs/myPage.js"></script>
		<script type="text/javascript">
		 	ZXXFILE = $.extend(ZXXFILE, textparams);
			ZXXFILE.init();
		</script>
		<script>
			$.ajax({
				url: '{{url('show/doc')}}',
				type: 'post',
				processData:false,
				contentType:false,
				data: form,
				success: function(data){//注册用户的信息返回到这里，data参数里
					console.log(data);
					if(data == 1){
						alert('登录成功!');
					}
					else
						alert(data);
				}
			});
		</script>
	</body>
</html>
