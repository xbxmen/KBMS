<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>图片展示</title>
		<link rel="stylesheet" type="text/css" href="./allCss/base.css">
		<link rel="stylesheet" type="text/css" href="./allCss/myPage.css" />
		<link rel="stylesheet" type="text/css" href="./allCss/show.css" />
		<link href="./allCss/common.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="./allJs/jquery-2.1.4.js"></script>
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
				<div class="nav_R"><input id="file" type="file" multiple="multiple" style="display: none;"></input><span >UPLOAD</span><img src="./img/right.png"></div>
				<div class="nav_R"><p >HELP</p><img src="./img/right.png"></div>
				<div class="nav_R"><p >ABOUT</p><img src="./img/right.png"></div>
			</div>
			<div class="show_main">
				<div class="media_content">
						<h3 id="photoinfo">
							<span class="photo_name">张柏芝.jpg4</span>
							<span class="photo_dictionary">所属文件夹：
								<span class="dictionary" data-txt ="img">img</span>
							</span>
						</h3>
						
						<div id="myphoto" >
								<div class="photo_contanier">
								</div>
							<div class="img_nav_left">
								<span class="pre_img"></span>
							</div><div class="img_nav_right">
								<span class="last_img"></span>
							
						</div>
						</div>
						
					<div id="photo_control-col">
						<ul class="my_top_ul">
							<li class="photo_operate left_rotate"><a href="#"><img src="./img/leftrotate.png"></a></li>
							<li class="photo_operate right_rotate"><a href="#"><img src="./img/rightroate.png"></a></li>
							<li class="photo_operate share"><a href="#"><img src="./img/share1.png"></a></li>
							<li class="photo_operate download"><a href="#"><img src="./img/download2.png"></a></li>
							<li class="photo_operate delete"><a href="#"><img src="./img/delete1.png"></a></li>
						</ul>		
				</div>
			</div>
		</div>
		<script type="text/javascript" src="./allJs/base.js" ></script>
		<script type="text/javascript" src="./allJs/myPage.js"></script>
	</body>
</html>
