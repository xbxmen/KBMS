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
				<div class="nav_R"><p>UPLOAD</p><img src="./img/right.png"></div>
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
										<div class="doc dir_small inline_block">	
										</div>
										<div class="filename inline_block">
										<img src="./img/show_doc.png">
										<a class="media" class="file_name" href="guice.pdf" target="black">哈利波特全集.pdf</a>
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
										<div class="resource dir_small inline_block">	
										</div>
										<div class="filename inline_block">
										<img src="./img/show_doc.png">
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
										<div class="resource dir_small inline_block">	
										</div>
										<div class="filename inline_block">
										<img src="./img/show_doc.png">
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
										<div class="resource dir_small inline_block">	
										</div>
										<div class="filename inline_block">
										<img src="./img/show_doc.png">
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
			
		</div>



        <script>
            var createfolder_url = "{{url('upload/createfolder')}}";
            var foldertype =  2;
        </script>
		<script src="./allJs/base.js"></script>
		<script src="./allJs/main.js"></script>
		<script type="text/javascript" src="./allJs/mutil.js"></script>
		<script src="./allJs/myPage.js"></script>
        <script>
            var preid = -1;
            var grade = 1;
            function showDoc() {
                $.ajax({
                    url: '{{url('show/doc')}}',
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
                        }
                    }
                });
            }
            showDoc();
            function showDocFolder() {
                $.ajax({
                    url: '{{url('show/docfolder')}}',
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
                        }
                    }
                });
            }
            showDocFolder();




		</script>
	</body>

	<script type="text/javascript" src="./allJs/media.js"></script>
	<script src="./allJs/jquery.js" language="JavaScript" type="text/javascript"></script>
</html>