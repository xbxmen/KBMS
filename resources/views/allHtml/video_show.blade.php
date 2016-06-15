<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>视频展示</title>
		<link rel="stylesheet" type="text/css" href="./allCss/base.css">
		<link rel="stylesheet" type="text/css" href="./allCss/myPage.css" />
		<link rel="stylesheet" type="text/css" href="./allCss/show.css" />
		<link href="./allCss/common.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="./allJs/jquery-2.1.4.js"></script>
		<script>var checksession_url = "{{url('account/checkSession')}}";</script>
		<script src="./allJs/base.js"></script>
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
				<div class="nav_R"><input id="file" type="file" multiple="multiple" style="display: none;" /><span >UPLOAD</span><img src="./img/right.png"></div>
				<div class="nav_R"><p >HELP</p><img src="./img/right.png"></div>
				<div class="nav_R"><p >ABOUT</p><img src="./img/right.png"></div>
			</div>
			<div class="show_main">
				<div class="media_content">
					<h3 id="video_name">哈利波特.mp4</h3>
					<div id="myvideo">
						<video id="video_control" controls="controls" src="./myvideo/张杰-一念之间.mp4" poster="./img/logo.PNG" width="600px" height="345px">
						  	<source src="./myvideo/张杰-一念之间.mp4" id="source" type="video/mp4" />
							Your browser does not support the audio element.
						</video>
					</div>
					<div id="video_control">
						<button class="share">
						分享
						<img src="./img/share.png">
					</button>
					<button class="download">
						下载
						<img src="./img/download.png">
					</button>
					</div>
					
				</div>
			</div>
		</div>
	</body>
	<script>
		var AVsrc = GetQueryString('avsrc');
		var AVname = GetQueryString('avname');
		$("#video_name").html(AVname);
		$("#video_control").attr("src",AVsrc);
		$("#source").attr("src",AVsrc);
		function GetQueryString(name)
		{
			var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
			var r = window.location.search.substr(1).match(reg);
			if(r!=null)return  unescape(r[2]); return null;
		}
	</script>
</html>
