<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>ingServer我的</title>
		<link rel="stylesheet" type="text/css" href="./allCss/base.css">
		<link rel="stylesheet" type="text/css" href="./allCss/myPage.css" />
		<link rel="stylesheet" type="text/css" href="./allCss/show.css" />
		<link href="./allCss/common.css" rel="stylesheet" type="text/css">
		<style>
			.show_main{
				width: 100%;
				height: 90%;
				overflow: scroll;
			}
			.show_content{
				width: 74%;
				margin: 0 auto;
				overflow: ;
			}
			.grid-cols{
				position: relative;
				left: 0;
				top: 0;
				
			}
			.list_head{
				background-color: #dcdcdc;
			}
			.allcheckbox{
				position: relative;
				left: 0;
				top: 0;
			}
		</style>
		<script type="text/javascript" src="./allJs/jquery-2.1.4.js"></script>
		<script type="text/javascript" src="./allJs/plupload.full.min.js"></script>
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
					<div class="nav_R"><p>UPLOAD</p><img src="./img/right.png"></div>
					<div class="nav_R"><p >HELP</p><img src="./img/right.png"></div>
					<div class="nav_R"><p >ABOUT</p><img src="./img/right.png"></div>
				</div>
			<div class="show_main">
				<from class="filefrom">
					<div class="show_content">
						<input name="filegroup" class="allcheckbox" type="checkbox"/>
						<div class="grid-cols">
							<ul class="list_head" >
								<li class="col">
									<span class="black">&nbsp;</span>
									<!--<input name="filegroup" class="allcheckbox" type="checkbox"/></li>-->
								<li class="col" style="width: 20%;">
									<span class="text">已选中1个图片</span>
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
						<div class="main_timeline">
							<div class="timeline-item">
								<div class="timeline-item-title">
									<span class="timeline-day">2014-6-12</span>
									<span class="timeline-icon"></span>
									<span class="timeline-sum">4张</span>
									<div class="timeline-checkall">
										<input name="filegroup" class="allcheckbox" type="checkbox"/>
										<label>全选</label>
									</div>
								</div>
								<div class="timeline-content">
									<a class="timeline-content-item">
										<img src="./myphoto/zhangbozhi.jpg" />
										<div class="timeline-checkbox">
											<input type="checkbox" class="checkbox"/>
										</div>
									</a>
									<a class="timeline-content-item">
										<img src="./myphoto/zhangbozhi.jpg" />
										<div class="timeline-checkbox">
											<input type="checkbox" class="checkbox"/>
										</div>
									</a>
									<a class="timeline-content-item">
										<img src="./myphoto/zhangbozhi.jpg" />
										<div class="timeline-checkbox">
											<input type="checkbox" class="checkbox"/>
										</div>
									</a>
									<a class="timeline-content-item">
										<img src="./myphoto/zhangbozhi.jpg" />
										<div class="timeline-checkbox">
											<input type="checkbox" class="checkbox"/>
										</div>
									</a>
								</div>
							</div>
						</div>
						
					</div>
				</from>
			</div>
		
		</div>	
		<script src="./allJs/base.js"></script>
		<script src="./allJs/main.js"></script>
		<script src="./allJs/mutil.js"></script>
		<script src="./allJs/myPage.js"></script>
	</body>
</html>
