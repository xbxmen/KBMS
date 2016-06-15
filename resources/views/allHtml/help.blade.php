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
		<script type="text/javascript" src="./allJs/plupload.full.min.js"></script>
		<script type="text/javascript" src="./allJs/moxie.js"></script>
		<style>
		body{
			overflow: scroll;
		}
		.show_main{
				box-shadow: 0 3px 9px rgba(0,0,0,0.4);
				width: 60%;
		}
		.help_title{
		font-size: 17px;
		color: #003333;
		background-color: #dcdcdc;
		line-height: 30px;
		}
		.helpcontent{
			height: 60px;
			margin-left: 2em;
			font: normal normal normal 14px/2 Arial,Helvetica,sans-serif;
		}
		.help{
			padding-top: 20px;
		}
		.help em{
			font-size: 17px;
			color: #008080;
			margin: 3px;
			
		}
		.helplist{
			margin: 10px 25px;
		}

		</style>
	</head>
	<body>
		<!--<div class="bg">
			<img class="img_bg" src="./img/show.png"/>
		</div>-->
		<div class="contanier">
			<div class="top">
				<div class="top1"><p class="top1_I">ING</p><p class="top1_S">Server</p></div>
				<div class="top2"><div class="M_top2_I"><img src="./img/gl7.jpg"></div><p class="M_top2_S">欢迎您,{{session('username')}}</p> </div>
				<div class="change"><p>LOG OUT</p></div>
			</div>
			<div class="nav">
				<div class="nav_L"><a href="index.html"><p >HOME</p><img src="./img/left.png"></a> </div>
				<div class="nav_L"><a href="my.html"><p >MY WORK</p><img src="./img/left.png"></a> </div>
				<div class="nav_L"><p >HOT</p><img src="./img/left.png"></div>
				<div class="nav_R"><p>UPLOAD</p><img src="./img/right.png"></div>
				<div class="nav_R"><a href="help.html"><p >HELP</p><img src="./img/right.png"></a></div>
				<div class="nav_R"><p >ABOUT</p><img src="./img/right.png"></div>
			</div>
			<div class="show_main">
				<div class="help_list">
					<ul class="helplist">
						<li class="help">
							<h2 class="help_title">
								<em>1</em> INGSERVER是什么？
							</h2>
							<p class="helpcontent">
								INGSERVER是一款云服务软件。通过INGSERVER，您可以将照片、文档、音乐、通讯录数据在各类设备中使用，在众多朋友圈里分享与交流。
								您也可以新建笔记，收藏笔记，查看笔记，存储笔记
							</p>
						</li>
						<li class="help">
							<h2 class="help_title">
								<em>2</em> 云笔记模块有哪些功能
							</h2>
							<p class="helpcontent">
								云笔记包括创建笔记本和笔记、管理笔记本和笔记、智能检索笔记内容等功能。对笔记本的管理功能包括：创建笔记本、删除笔记
								本、重命名、刷新笔记本等；对笔记的管理功能包括：编辑、保存、删除、新建等四大功能，按时间顺序排列。一个笔记
								本可包括多个笔记内容。并且添加智能检索功能，可快速准确找到笔记。方便、快捷，高效。
							</p>
						</li>
						<li class="help">
							<h2 class="help_title">
								<em>3</em>INGSERVER与百度云的区别？？
							</h2>
							<p class="helpcontent">
								百度云只是实现云存储，而我们是云存储和创建笔记的集合
							</p>
						</li>
						<li class="help">
							<h2 class="help_title">
								<em>4</em> INGSERVER与维知笔记的区别？？
							</h2>
							<p class="helpcontent">
								为知笔记是管理笔记的利器，而我们是不仅实现了管理笔记创建笔记，还实现了百度云的相关
							</p>
						</li>
						<li class="help">
							<h2 class="help_title">
								<em>5</em>INGSERVER文件的批量上传？
							</h2>
							<p class="helpcontent">
								由于技术原因,可以支持小文件的批量上传。
							</p>
						</li>
						<li class="help">
							<h2 class="help_title">
								<em>6</em>大文件怎么上传
							</h2>
							<p class="helpcontent">
								技术实现使用XMlhttprequest实现。在不重新加载页面的情况下更新网页。在页面已加载后从服务器请求数据，在页面已加载后从服务器接收数据，在后台向服务器发送数据。
							</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</body>
</html>