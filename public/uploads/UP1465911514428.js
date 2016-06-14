/*
 * 
 * Created by 赵晓帅
 * Date: 2016/1/28
 * Time: 11:41
 * 
 */
var jiegou = 1;
var username = '',
	password = ''; //用户名 密码

var myclass = 'star',
	mytype = '35',
	mycai = 'kantie',
	mytitle = 'TFBOYS'; //种类    名称   菜单选项

var photoname = 'a.JPG'; //照片的名字

var cengci01 = '', //star_7
	cengci02 = '', //star_7_7
	cengci03 = ''; //star_7_7_7

var cc01_all_page, cc01_cur_page = '1'; //分页浏览    
var cc02_all_page, cc02_cur_page = '1'; //分页浏览    
var cc03_all_page, cc03_cur_page = '1'; //分页浏览    
var luntan = {
	/******
	 登录
	********/
	login: function() {
		username = $("#username").val();
		password = $("#password").val();
		if (username != '' && password != '') {
			$.ajax({
				type: "post",
				url: "../model/pq_login.php",
				data: {
					username: username,
					password: password
				},
				success: function(data) {
					var datainfo = eval("(" + data + ")");
					deal_login(datainfo);
				}
			});
		} else {
			return false;
		}

		function deal_login(data) {
			if (data['statue'] == undefined) {
				alert("WOho!~~You Succeed~~");
				luntan.setCookie("username", username, 3600 * 0.5);
				window.location.href = "../view/main.html";
			} else if (data['statue'] == -1) {
				alert("抱歉，账户号密码不能为空~");
			} else if (data['statue'] == 1) {
				alert("哇哦  您输入的账号或者密码不正确~~");
			}
		}
	},
	/*
	 注册
	 */

	register: function() {
		usernamesign = $("#usernamesignup").val();
		passwordsign = $("#passwordsignup").val();
		passwordconfir = $("#passwordsignup_confirm").val();
		email = $("#emailsignup").val();

		console.log()
		if (usernamesign != '' && passwordsign != '' && passwordconfir != '' && email != '') {
			if (passwordsign != passwordconfir) {
				alert("woops~ Your passowrd is not same!");
			} else {
				$.ajax({
					type: "post",
					url: "../model/pq_register.php",
					data: {
						username: usernamesign,
						password: passwordsign,
						email: email
					},
					success: function(data) {
						var datainfo = eval("(" + data + ")");
						console.log(datainfo);
						deal_register(datainfo);
					}
				});

				function deal_register(data) {
					if (data['statue'] == 1) {
						alert("Yeah~ you are succed!");
					} else if (data['statue'] == -1) {
						alert("抱歉，账户号 密码 不合法哦~");
					} else if (data['statue'] == -2) {
						alert("服务器忙哦~");
					} else if (data['statue'] == -3) {
						alert("哇哦  您输入的账号已经存在啦~~");
					}
				}
			}
		}
	},
	/*
	发表 帖子 
	*/
	fabiao: function() {
		
		type = myclass + "_" + mytype;
		title = $("#timu").val();
		content = $("#bianji").val();
		author = username;
		photo = '';
		$("#timu").val(" ");
		$("#bianji").val(""); 
		if($("#up_photo").val()!=""){
			$.ajax({
				type: "post",
				url: "../model/pq_photo.php",
				data: $("#my_photo").serializeArray(),
				success: function(data) {
					datainfo = eval("(" + data + ")");
					console.log(datainfo);
				}
			});
		}
		if (type != '' && title != '' && content != '') {
			$.ajax({
				type: "get",
				url: "../model/pq_fabiao.php",
				data: {
					type: type,
					title: title,
					content: content,
					photo: photo,
					author: author
				},
				success: function(data) {
					datainfo = eval("(" + data + ")");
					deal_fabiao(datainfo);
				}

			});

			function deal_fabiao(data) {
				if (data['statue'] == 1) {
					alert("Yeah~ you are succeed! \n TO Insert into  " + mytitle);
				} else if (data['statue'] == -1) {
					alert("Sorry 出错了哦~");
				} else if (data['statue'] == -2) {
					alert("服务器忙哦~");
				}
			}
		} else {
			alert("Sorry~ You must draw something!~~");
		}

	},
	/*
	 跟帖  回复楼主
	 * */
	huifu: function() {
		author = username;
		content = $("#gt_content").val();
		photo = username + photoname;
		if (author != '' && content != '' && photo != '') {
			$.ajax({
				type: "get",
				url: "../model/pq_huifu.php",
				data: {
					cengci02: cengci02,
					author: author,
					photo: photo,
					content: content
				},
				success: function(data) {
					$("#gt_content").val(" ");
					datainfo = eval("(" + data + ")");
					deal_huifu(datainfo);
				}
			});
		} else {
			alert("WoHo``Your message is not allowed!`~`");
		}

		function deal_huifu(datainfo) {
			if (datainfo['statue'] == 1) {
				alert("Yeah~ you are succeed!");
			} else if (datainfo['statue'] == -1) {
				alert("Sorry 出错了哦~");
			} else if (datainfo['statue'] == -2) {
				alert("服务器忙哦~");
			}
		}
	},

	/*
	 * 获取贴吧 全部的帖子 
	 */
	huoqu: function() {
		luntan.delall();
		var length = 0;
		cengci01 = myclass + "_" + mytype;
		if (jiegou == 1) {
			page = cc01_cur_page;
		} else if (jiegou == 2) {
			page == cc02_cur_page;
		}
		$.ajax({
			type: "get",
			url: "../model/pq_length.php",
			data: {
				forclass: cengci01,
			},
			success: function(data) {
				var datainfo = eval("(" + data + ")");
				console.log(datainfo);
				luntan.fenye(datainfo['statue']);
			}
		});

		$.ajax({
			type: "get",
			url: "../model/pq_sousuo.php",
			data: {
				forclass: cengci01,
				page: page
			},
			success: function(data) {
				var datainfo = eval("(" + data + ")");
				deal_huoqu(datainfo);
			}
		});


		function deal_huoqu(datainfo) {
			if (datainfo['statue'] == undefined) {
				if (datainfo.length == undefined) {
					if (mycai == "kantie") {
						all_tiezinum = document.createElement("label");
						all_title = document.createElement("label");
						all_author = document.createElement("label");
						all_time = document.createElement("label");
						all_tiezinum.id = "tiezinum";
						all_title.id = "title";
						all_author.id = "author";
						all_time.id = "time";

						all_tiezinum.innerHTML = datainfo['tiezinum'];
						all_title.innerHTML = datainfo['title'];
						all_author.innerHTML = datainfo['author'];
						all_time.innerHTML = datainfo['time'];
						all_title.onclick = function() {
							jiegou = 2;
							cengci02 = $(this).parents("li").attr("id");
							luntan.tiezi();
							$("#tiezi").css('display', 'none');
							$("#gentie").css('display', 'block');
						}
						all_li = document.createElement("li");
						all_li.appendChild(all_tiezinum);
						all_li.appendChild(all_title);
						all_li.appendChild(all_author);
						all_li.appendChild(all_time);
						all_li.id = cengci01 + "_" + datainfo['id'];
						$("#myall").append(all_li);
					} else {

					}
				} else if (datainfo.length > 1) {
					if (mycai == "kantie") {
						for (i = 0; i < datainfo.length; i++) {
							all_tiezinum = document.createElement("label");
							all_title = document.createElement("label");
							all_author = document.createElement("label");
							all_time = document.createElement("label");
							all_tiezinum.id = "tiezinum";
							all_title.id = "title";
							all_author.id = "author";
							all_time.id = "time";

	
							all_tiezinum.innerHTML = datainfo[i]['tiezinum'];
							all_title.innerHTML = datainfo[i]['title'];
							all_author.innerHTML = datainfo[i]['author'];
							all_time.innerHTML = datainfo[i]['time'];
							all_title.onclick = function() {
								jiegou = 2;
								cengci02 = $(this).parents("li").attr("id");
								luntan.tiezi();
								$("#tiezi").css('display', 'none');
								$("#gentie").css('display', 'block');
							}
							all_li = document.createElement("li");
							all_li.appendChild(all_tiezinum);
							all_li.appendChild(all_title);
							all_li.appendChild(all_author);
							all_li.appendChild(all_time);
							all_li.id = cengci01 + "_" + datainfo[i]['id'];
							$("#myall").append(all_li);
						}
					} else {

					}
				}
			} else if (datainfo['statue'] == -2) {
				alert("WO!OH! This is nothing Here!");
			}
		}
	},
	/*
	 * 删除贴吧 全部的内容 
	 */
	delall: function() {
		$("#myall li").remove();
		$("#myfenye li").remove();
	},
	/*
	 获取某个帖子的内容
	 * */
	tiezi: function() {
		luntan.delall();
		$.ajax({
			type: "get",
			url: "../model/pq_table.php",
			data: {
				cengci02: cengci02
			}
		});
		$.ajax({
			type: "get",
			url: "../model/pq_length.php",
			data: {
				forclass: cengci02,
			},
			success: function(data) {
				var datainfo = eval("(" + data + ")");
				console.log(datainfo);
				luntan.fenye(datainfo['statue'] + 1);
			}
		});
		$.ajax({
			type: "get",
			url: "../model/pq_tiezi.php",
			data: {
				cengci02: cengci02,
				page: page
			},
			success: function(data) {
				var datainfo = eval("(" + data + ")");
				deal_tiezi(datainfo);
			}
		});

		function deal_tiezi(datainfo) {
			if (datainfo['statue'] == undefined) {
				if (datainfo.length == undefined) {
					if (mycai == "kantie") {
						all_title = document.createElement("label");
						all_zannum = document.createElement("label");
						all_content = document.createElement("label");
						all_author = document.createElement("label");
						all_time = document.createElement("label");
					
						all_photo = document.createElement("img");
						all_photo.id = "photo";
						all_photo.src = "../photo/"+datainfo['photo'];

						all_title.id = "title";
						all_zannum.id = "zannum";
						all_content.id = "content";
						all_author.id = "author";
						all_time.id = "time";

						all_title.innerHTML = datainfo['title'];
						all_zannum.innerHTML = datainfo['zannum'];
						all_content.innerHTML = datainfo['content'];
						all_author.innerHTML = datainfo['author'];
						all_time.innerHTML = datainfo['time'];

						all_li = document.createElement("li");
						all_li.appendChild(all_zannum);
						all_li.appendChild(all_title);
						all_li.appendChild(all_author);
						all_li.appendChild(all_time);
						all_li.appendChild(all_content);
						all_li.appendChild(all_photo);
						all_li.id = cengci01 + "_" + datainfo['id'];
						$("#myall").append(all_li);
					} else {

					}
				} else if (datainfo.length > 1) {
					if (mycai == "kantie") {
						for (i = 0; i < datainfo.length; i++) {
							if (i == 0) {
								all_title = document.createElement("label");
								all_zannum = document.createElement("label");
								all_content = document.createElement("label");
								all_author = document.createElement("label");
								all_time = document.createElement("label");
							
								all_photo = document.createElement("img");
								all_photo.id = "photo";
								all_photo.src = "../photo/"+datainfo[i]['photo'];
	
								all_title.id = "title";
								all_zannum.id = "zannum";
								all_content.id = "content";
								all_author.id = "author";
								all_time.id = "time";

								all_title.innerHTML = datainfo[i]['title'];
								all_zannum.innerHTML = datainfo[i]['zannum'];
								all_content.innerHTML = datainfo[i]['content'];
								all_author.innerHTML = datainfo[i]['author'];
								all_time.innerHTML = datainfo[i]['time'];

								all_li = document.createElement("li");
								all_li.appendChild(all_zannum);
								all_li.appendChild(all_title);
								all_li.appendChild(all_author);
								all_li.appendChild(all_time);
								all_li.appendChild(all_content);
								all_li.appendChild(all_photo);
								all_li.id = cengci01 + "_" + datainfo[i]['id'];
								$("#myall").append(all_li);
							} else {
								all_zannum = document.createElement("label");
								all_content = document.createElement("label");
								all_author = document.createElement("label");
								all_time = document.createElement("label");
								all_photo = document.createElement("img");
								all_photo.id = "photo";
								all_photo.src = "../photo/"+datainfo[i]['photo'];
								all_content.id = "content";
								all_zannum.id = "zannum";
								all_author.id = "author";
								all_time.id = "time";

								all_zannum.innerHTML = datainfo[i]['zannum'];
								all_content.innerHTML = datainfo[i]['content'];
								all_author.innerHTML = datainfo[i]['author'];
								all_time.innerHTML = datainfo[i]['time'];

								all_li = document.createElement("li");
								all_li.appendChild(all_zannum);
								all_li.appendChild(all_author);
								all_li.appendChild(all_time);
								all_li.appendChild(all_content);
								all_li.appendChild(all_photo);	
								all_li.id = cengci01 + "_" + datainfo[i]['id'];
								$("#myall").append(all_li);
							}
						}
					} else {

					}
				}
			} else if (datainfo['statue'] == -2) {
				alert("WO!OH! This is nothing Here!");
			}
		}
	},

	/*
	 * 分页功能
	 * */
	fenye: function(length) {
		if (jiegou == 1) {
			if (length < 10) {
				cc01_all_page = 1;
			} else {
				cc01_all_page = (length / 10) + 1;
				console.log("................" + cc01_all_page);
			}
			$p_li = document.createElement("li");
			$p_label = document.createElement("label");
			$p_label.id = '<<';
			$p_label.innerHTML = "<<";
			$p_li.appendChild($p_label);
			$("#myfenye").append($p_li);
			console.log("cc01_all_page    0000" + cc01_all_page);
			for (i = 1; i <= cc01_all_page; i++) {
				$p_li = document.createElement("li");
				$p_label = document.createElement("label");
				$p_label.id = i;
				$p_label.innerHTML = i;
				$p_label.onclick = function() {
					$("#" + cc01_cur_page).removeClass("fenye");
					cc01_cur_page = $(this).attr("id");
					$(this).addClass("fenye");
					luntan.fensou();
				}
				$p_li.appendChild($p_label);
				$("#myfenye").append($p_li);
			}
			$p_li = document.createElement("li");
			$p_label = document.createElement("label");
			$p_label.id = '>>';
			$p_label.innerHTML = ">>";
			$p_li.appendChild($p_label);
			$("#myfenye").append($p_li);
		} else if (jiegou == 2) {
			if (length < 10) {
				cc02_all_page = 1;
			} else {
				cc02_all_page = (length / 10) + 1;
			}
			$p_li = document.createElement("li");
			$p_label = document.createElement("label");
			$p_label.id = '<<';
			$p_label.innerHTML = "<<";
			$p_li.appendChild($p_label);
			$("#myfenye").append($p_li);

			for (i = 1; i <= cc02_all_page; i++) {
				$p_li = document.createElement("li");
				$p_label = document.createElement("label");
				$p_label.id = i;
				$p_label.innerHTML = i;
				$p_label.onclick = function() {
					$("#" + cc02_cur_page).removeClass("fenye");
					cc02_cur_page = $(this).attr("id");
					$(this).addClass("fenye");
					luntan.fensou();
				}
				$p_li.appendChild($p_label);
				$("#myfenye").append($p_li);
			}
			$p_li = document.createElement("li");
			$p_label = document.createElement("label");
			$p_label.id = '>>';
			$p_label.innerHTML = ">>";
			$p_li.appendChild($p_label);
			$("#myfenye").append($p_li);
		}
	},


	/*
	 分页搜索
	 * */

	fensou: function() {
		luntan.delsom();
		fs = '';
		if (jiegou == 1) {
			cengci01 = myclass + "_" + mytype;
			fs = cengci01;
			page = cc01_cur_page;
			$.ajax({
				type: "get",
				url: "../model/pq_sousuo.php",
				data: {
					forclass: fs,
					page: page
				},
				success: function(data) {
					var datainfo = eval("(" + data + ")");
					deal_fensou(datainfo);
				}
			});

		} else if (jiegou == 2) {
			fs = cengci02;
			page = cc02_cur_page;

			$.ajax({
				type: "get",
				url: "../model/pq_tiezi.php",
				data: {
					cengci02: fs,
					page: page
				},
				success: function(data) {
					var datainfo = eval("(" + data + ")");
					deal_tiezi(datainfo);
				}
			});
		}

		function deal_tiezi(datainfo) {
			if (datainfo['statue'] == undefined) {
				if (datainfo.length == undefined) {
					if (mycai == "kantie") {
						all_title = document.createElement("label");
						all_zannum = document.createElement("label");
						all_content = document.createElement("label");
						all_author = document.createElement("label");
						all_time = document.createElement("label");
						
						all_photo = document.createElement("img");
						all_photo.id = "photo";
						all_photo.src = "../photo/"+datainfo['photo'];


						all_title.id = "title";
						all_zannum.id = "zannum";
						all_content.id = "content";
						all_author.id = "author";
						all_time.id = "time";

						all_title.innerHTML = datainfo['title'];
						all_zannum.innerHTML = datainfo['zannum'];
						all_content.innerHTML = datainfo['content'];
						all_author.innerHTML = datainfo['author'];
						all_time.innerHTML = datainfo['time'];

						all_li = document.createElement("li");
						all_li.appendChild(all_zannum);
						all_li.appendChild(all_title);
						all_li.appendChild(all_author);
						all_li.appendChild(all_time);
						all_li.appendChild(all_content);
						all_li.appendChild(all_photo);
						all_li.id = cengci01 + "_" + datainfo['id'];
						$("#myall").append(all_li);
					} else {

					}
				} else if (datainfo.length > 1) {
					if (mycai == "kantie") {
						for (i = 0; i < datainfo.length; i++) {
							if (i == 0) {
								all_title = document.createElement("label");
								all_zannum = document.createElement("label");
								all_content = document.createElement("label");
								all_author = document.createElement("label");
								all_time = document.createElement("label");

								all_photo = document.createElement("img");
								all_photo.id = "photo";
								all_photo.src = "../photo/"+datainfo[i]['photo'];

								all_title.id = "title";
								all_zannum.id = "zannum";
								all_content.id = "content";
								all_author.id = "author";
								all_time.id = "time";

								all_title.innerHTML = datainfo[i]['title'];
								all_zannum.innerHTML = datainfo[i]['zannum'];
								all_content.innerHTML = datainfo[i]['content'];
								all_author.innerHTML = datainfo[i]['author'];
								all_time.innerHTML = datainfo[i]['time'];

								all_li = document.createElement("li");
								all_li.appendChild(all_zannum);
								all_li.appendChild(all_title);
								all_li.appendChild(all_author);
								all_li.appendChild(all_time);
								all_li.appendChild(all_content);
								all_li.appendChild(all_photo);
								all_li.id = cengci01 + "_" + datainfo[i]['id'];
								$("#myall").append(all_li);
							} else {
								all_zannum = document.createElement("label");
								all_content = document.createElement("label");
								all_author = document.createElement("label");
								all_time = document.createElement("label");
								
								all_photo = document.createElement("img");
								all_photo.id = "photo";
								all_photo.src = "../photo/"+datainfo[i]['photo'];

								all_content.id = "content";
								all_zannum.id = "zannum";
								all_author.id = "author";
								all_time.id = "time";

								all_zannum.innerHTML = datainfo[i]['zannum'];
								all_content.innerHTML = datainfo[i]['content'];
								all_author.innerHTML = datainfo[i]['author'];
								all_time.innerHTML = datainfo[i]['time'];

								all_li = document.createElement("li");
								all_li.appendChild(all_zannum);
								all_li.appendChild(all_author);
								all_li.appendChild(all_time);
								all_li.appendChild(all_content);
								all_li.appendChild(all_photo);
								all_li.id = cengci01 + "_" + datainfo[i]['id'];
								$("#myall").append(all_li);
							}
						}
					} else {

					}
				}
			} else if (datainfo['statue'] == -2) {
				alert("WO!OH! This is nothing Here!");
			}
		}

		function deal_fensou(datainfo) {
			if (datainfo['statue'] == undefined) {
				if (datainfo.length == undefined) {
					if (mycai == "kantie") {
						all_tiezinum = document.createElement("label");
						all_title = document.createElement("label");
						all_author = document.createElement("label");
						all_time = document.createElement("label");
						all_tiezinum.id = "tiezinum";
						all_title.id = "title";
						all_author.id = "author";
						all_time.id = "time";


						all_tiezinum.innerHTML = datainfo['tiezinum'];
						all_title.innerHTML = datainfo['title'];
						all_author.innerHTML = datainfo['author'];
						all_time.innerHTML = datainfo['time'];
						all_title.onclick = function() {
							jiegou = 2;
							cengci02 = $(this).parents("li").attr("id");
							luntan.tiezi();
							$("#tiezi").css('display', 'none');
							$("#gentie").css('display', 'block');
						}
						all_li = document.createElement("li");
						all_li.appendChild(all_tiezinum);
						all_li.appendChild(all_title);
						all_li.appendChild(all_author);
						all_li.appendChild(all_time);
						all_li.id = cengci01 + "_" + datainfo['id'];
						$("#myall").append(all_li);
					} else {

					}

				} else if (datainfo.length > 1) {
					if (mycai == "kantie") {
						for (i = 0; i < datainfo.length; i++) {
							all_tiezinum = document.createElement("label");
							all_title = document.createElement("label");
							all_author = document.createElement("label");
							all_time = document.createElement("label");
							all_tiezinum.id = "tiezinum";
							all_title.id = "title";
							all_author.id = "author";
							all_time.id = "time";

							all_tiezinum.innerHTML = datainfo[i]['tiezinum'];
							all_title.innerHTML = datainfo[i]['title'];
							all_author.innerHTML = datainfo[i]['author'];
							all_time.innerHTML = datainfo[i]['time'];
							all_title.onclick = function() {
								jiegou = 2;
								cengci02 = $(this).parents("li").attr("id");
								luntan.tiezi();
								$("#tiezi").css('display', 'none');
								$("#gentie").css('display', 'block');
							}
							all_li = document.createElement("li");
							all_li.appendChild(all_tiezinum);
							all_li.appendChild(all_title);
							all_li.appendChild(all_author);
							all_li.appendChild(all_time);
							all_li.id = cengci01 + "_" + datainfo[i]['id'];
							$("#myall").append(all_li);
						}
					} else {

					}
				}
			}
		}
	},
	delsom: function() {
		$("#myall li").remove();
	},
	/*
	 搜索栏 搜索
	 * */
	search: function() {
		luntan.del_sear();
		sear = $("#to_search").val();
		if (sear != "") {
			$.ajax({
				type: "get",
				url: "../model/pq_search.php",
				data: {
					forclass: cengci01,
					sear: sear
				},
				success: function(data) {
					datainfo = eval("(" + data + ")");
					deal_sear(datainfo);
				}
			});

			function deal_sear(datainfo) {
				if (datainfo['statue'] == undefined) {
					if (datainfo.length == undefined) {
						all_tiezinum = document.createElement("label");
						all_title = document.createElement("label");
						all_author = document.createElement("label");
						all_time = document.createElement("label");
						all_tiezinum.id = "tiezinum";
						all_title.id = "title";
						all_author.id = "author";
						all_time.id = "time";

						all_tiezinum.innerHTML = datainfo['tiezinum'];
						all_title.innerHTML = datainfo['title'];
						all_title.onclick = function() {
							jiegou = 2;
							cengci02 = $(this).parents("li").attr("id");
							luntan.tiezi();
							$("#tiezi").css('display', 'none');
							$("#gentie").css('display', 'block');
						}
						all_author.innerHTML = datainfo['author'];
						all_time.innerHTML = datainfo['time'];

						all_li = document.createElement("li");
						all_li.appendChild(all_tiezinum);
						all_li.appendChild(all_title);
						all_li.appendChild(all_author);
						all_li.appendChild(all_time);
						all_li.id = cengci01 + "_" + datainfo['id'];
						$("#my_sear").append(all_li);
					} else if (datainfo.length > 1) {
						for (i = 0; i < datainfo.length; i++) {
							all_tiezinum = document.createElement("label");
							all_title = document.createElement("label");
							all_author = document.createElement("label");
							all_time = document.createElement("label");
							all_tiezinum.id = "tiezinum";
							all_title.id = "title";
							all_author.id = "author";
							all_time.id = "time";


							all_tiezinum.innerHTML = datainfo[i]['tiezinum'];
							all_title.innerHTML = datainfo[i]['title'];
							all_author.innerHTML = datainfo[i]['author'];
							all_time.innerHTML = datainfo[i]['time'];
							all_title.onclick = function() {
								jiegou = 2;
								cengci02 = $(this).parents("li").attr("id");
								luntan.tiezi();
								$("#tiezi").css('display', 'none');
								$("#gentie").css('display', 'block');
							}

							all_li = document.createElement("li");
							all_li.appendChild(all_tiezinum);
							all_li.appendChild(all_title);
							all_li.appendChild(all_author);
							all_li.appendChild(all_time);
							all_li.id = cengci01 + "_" + datainfo[i]['id'];
							$("#my_sear").append(all_li);
						}
					}
				}
			}
		} else {
			alert("Woho,YOU must make something to Search~~");
		}
	},

	del_sear: function() {
		$("#my_sear li").remove();
	},

	/*
 	获取 cookie
	 * */
	getCookie: function(c_name) {
		if (document.cookie.length > 0) {
			c_start = document.cookie.indexOf(c_name + "=")
			if (c_start != -1) {
				c_start = c_start + c_name.length + 1
				c_end = document.cookie.indexOf(";", c_start)
				if (c_end == -1) c_end = document.cookie.length
				return unescape(document.cookie.substring(c_start, c_end))
			}
		}
		return ""
	},
	/*
	 设置 cookie
	 * */
	setCookie: function(c_name, value, expiredays) {
		var exdate = new Date()
		exdate.setDate(exdate.getDate() + expiredays)
		document.cookie = c_name + "=" + escape(value) +
			((expiredays == null) ? "" : ";expires=" + exdate.toGMTString())
	},
	/*
	 检查cookie
	 * */
	checkCookie: function() {
		username = getCookie('username')
		if (username != null && username != "") {
			alert('Welcome again ' + username + '!')
		} else {
			username = prompt('Please enter your name:', "")
			if (username != null && username != "") {
				setCookie('username', username, 365)
			}
		}
	}
}
window.onload = function() {
	/*
	 **********
	 横菜单 改变
	 ********** 
	 * */
	document.getElementById("kantie").onclick = function() {
		nav_id = $(".nav_click_current").attr("id");
		console.log("nav_id     " + nav_id);
		if (nav_id != undefined) {
			if ($(this).id != nav_id) {
				$("#" + nav_id).removeClass("nav_click_current");
			}
		}
		$(this).addClass("nav_click_current");
		mycai = $(this).attr("id");
	}
	document.getElementById("tupian").onclick = function() {
		nav_id = $(".nav_click_current").attr("id");
		console.log("nav_id     " + nav_id);
		if (nav_id != undefined) {
			if ($(this).id != nav_id) {
				$("#" + nav_id).removeClass("nav_click_current");
				$(this).addClass("nav_click_current");
				mycai = $(this).id;
			}
		} else {
			$(this).addClass("nav_click_current");
			mycai = $(this).attr("id");
			console.log(mycai);
		}
	}

	document.getElementById("tuijian").onclick = function() {
		nav_id = $(".nav_click_current").attr("id");
		console.log("nav_id     " + nav_id);
		if (nav_id != undefined) {
			if ($(this).id != nav_id) {
				$("#" + nav_id).removeClass("nav_click_current");
				$(this).addClass("nav_click_current");
				mycai = $(this).id;
			}
		} else {
			$(this).addClass("nav_click_current");
			mycai = $(this).attr("id");
			console.log(mycai);
		}
	}
	document.getElementById("geren").onclick = function() {
		nav_id = $(".nav_click_current").attr("id");
		console.log("nav_id     " + nav_id);
		if (nav_id != undefined) {
			if ($(this).id != nav_id) {
				$("#" + nav_id).removeClass("nav_click_current");
				$(this).addClass("nav_click_current");
				mycai = $(this).id;
			}
		} else {
			$(this).addClass("nav_click_current");
			mycai = $(this).attr("id");
			console.log(mycai);
		}
	}

	document.getElementById("bazhu").onclick = function() {
		nav_id = $(".nav_click_current").attr("id");
		console.log("nav_id     " + nav_id);
		if (nav_id != undefined) {
			if ($(this).id != nav_id) {
				$("#" + nav_id).removeClass("nav_click_current");
				$(this).addClass("nav_click_current");
				mycai = $(this).id;
			}
		} else {
			$(this).addClass("nav_click_current");
			mycai = $(this).attr("id");
			console.log(mycai);
		}
	}
}