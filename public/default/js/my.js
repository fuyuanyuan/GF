//my.js
$(function() {
	
	window.web_dir = 'HTTP://www.gf.com/GF/';
	
	//显示登陆
	$('#login_a').click(function() {
		$('#login').dialog('open');
	});
	//显示注册
	$('#reg_a').click(function() {
		$('#reg').dialog('open');
	});
	
	//判断cookie，显示
	if($.cookie('alias')) {
		var alias = $.cookie('alias');
		if (alias.length > 4) {
			alias = alias.substr(0,3) + '..';
		}
		$('#member').show().html(alias);
		$('#reg_a').hide();
		$('#login_a').hide();
	}else {
		$('#member').hide();
		$('#reg_a').show();
		$('#login_a').show();
	}
	
	//初始注册框
	$('#reg').dialog({
		autoOpen : false,
		width : 550,
		height : 450,
		modal : true,
		title : '欢迎注册本站会员',
		resizable : false,
		draggable : false,
		closeText : '关闭',
		open : function (event,ui) { 
			//锁定窗口
			$('body').eq(0).css('overflow','hidden');
		},
		close : function(event,ui) {
			$('body').eq(0).css('overflow','auto');
		},
		buttons : {
			'注册' : function() {
				$(this).submit();
			}
		},
	});
	
	
	
	//注册信息验证
	$('#reg').validate({
		//提交
		submitHandler : function(form) {
			$(form).ajaxSubmit({
				url : window.web_dir+'home/vip/reg_vip',
				type : 'POST',
				beforeSubmit : function() {
					//展示loading
					$('#loading').dialog('open');
					//禁止提交按钮
					// $('#login').parent().find('button').eq(1).button('disable');
				},
				success : function(ResponsText,statusText) {
					if(ResponsText == 'true') {	//成功
						//写入cookie，默认7天，同时更改显示
						$.cookie('alias',$('#reg_user').val(),{
							expires : 7,
							path : '/',
						});
						$('#login_a').hide();
						$('#reg_a').hide();
						var alias = $.cookie('alias');
						if (alias.length > 4) {
							alias = alias.substr(0,3) + '..';
						}
						$('#member').show().html(alias);
						//写入cookie后，获取id
						$.ajax({
							type : 'post',
							url : window.web_dir + 'home/vip/get_id',
							data : {
								'name' : $.cookie('alias'),
							},
							success : function(res,status,xhr) {
								//跳转到个人中心
								var id = res;
								$('#my_info').attr('href',window.web_dir+'home/usercenter/show' + '/' +id);
//								$('#my_info').click(function() {
//									window.location.href = window.web_dir+'home/usercenter/show' + '/' +id;
//								});
							},
						});
						$('#loading').css('background','url(public/default/images/my/success.gif) no-repeat 20px center').html('注册成功！');
						
						//1s后，关闭窗口
						setTimeout(function() {
							$('#loading').dialog('close');
							$('#reg').dialog('close');
							$('#reg').resetForm();
							$('#reg span.star').html('*').removeClass('succ');
							//还原loading
							$('#loading').html('客官请稍后...').css('background','url(public/default/images/my/loading.gif) no-repeat 20px center');
						},1000);
					}else {	//失败
						$('#loading').css('background','url(public/default/images/my/close.gif) no-repeat 20px center').html('注册失败，请重试！').dialog('option','width',300);
						$('input[name=reg_pass]').val('');
						$('input[name=reg_notpass]').val('');
						$('#reg span.star').html('*').removeClass('succ');
						setTimeout(function() {
							$('#loading').dialog('close');
							//还原loading
							$('#loading').html('客官请稍后...').css('background','url(public/default/images/my/loading.gif) no-repeat 20px center').dialog('option','width',160);
						},2000);
					}
				},
				error : function(event,errorType,errorText) {
					alert(errorType + '--' + errorText);
				},
			});
		},
		//规则
		rules : {
			reg_user : {
				required : true,
				rangelength : [2,30],
				my_user : true,
				remote : {
					url : window.web_dir+'home/vip/is_onlyone',
					type : 'POST',
				},
			},
			reg_pass : {
				required : true,
				minlength : 6,
			},
			reg_notpass : {
				equalTo : '#reg_pass',
			},
			reg_email : {
				required : true,
				my_email : true,
			},
			login_code : {
				required : true,
				minlength : 4,
				remote : {
					url : window.web_dir + 'home/vip/checkCode',
					type : 'POST',
				},
			},
		},
		messages : {
			reg_user : {
				required : '用户名不能为空！',
				rangelength : '用户名必须在{0}位到为{1}之间！',
				my_user : '用户名不能包含特殊字符！',
				remote : '该用户已经被注册！',
			},
			reg_pass : {
				required : '密码不能为空！',
				minlength : '密码不能少于{0}位！',
			},
			reg_notpass : {
				equalTo : '二次密码输入不一致！'
			},
			reg_email : {
				required : '电子邮件不能为空！',
				my_email : '请输入正确的电子邮件格式！',
			},
			login_code : {
				required : '验证码不能为空！',
				minlength : jQuery.format('验证码不能少于{0}位'),
				remote : '验证码错误！',
			},
		},
		//设置错误提示
		errorLabelContainer : 'ol.reg_error',
		wrapper : 'li',
		//错误加亮
		highlight : function(element,errorClass) {
			$(element).css('border','1px solid red');
			$(element).parent().find('.star').html('*').removeClass('succ');
		},
		//取消加亮
		unhighlight : function(element,errorClass) {
			$(element).css('border','1px solid #ccc');
			$(element).parent().find('.star').html('&nbsp').addClass('succ');
		},
		showErrors : function(errorMap,errorList) {
			var errors = this.numberOfInvalids();
			if(errors > 0) {
				$('#reg').dialog('option','height',450 + parseInt(errors) * 20);
			}else {
				$('#reg').dialog('option','height',450);
			}
			this.defaultShowErrors();	
		},
	});
	
	
	
	//初始登陆框
	$('#login').dialog({
		title : '请您输入以下信息：',
		autoOpen: false,
		modal : true,
		width:450,
		height:350,
		draggable : false,
		resizable : false,
		closeText : '关闭',
		open : function (event,ui) { 
			//锁定窗口
			$('body').eq(0).css('overflow','hidden');
		},
		close : function(event,ui) {
			$('body').eq(0).css('overflow','auto');
		},
		buttons :  {
			'登陆' : function() {
				$(this).submit();
			}
		},
	});
	//登陆信息验证
	$('#login').validate({
		//提交
		submitHandler : function(form) {
			$(form).ajaxSubmit({
				url : window.web_dir + 'home/vip/login_check',
				type : 'POST',
				beforeSubmit : function() {
					//展示loading
					$('#loading').dialog('open');
					//禁止提交按钮
					// $('#login').parent().find('button').eq(1).button('disable');
				},
				success : function(ResponsText,statusText) {
					if(ResponsText == 'true') {	//成功
						//写入cookie，默认7天，同时更改显示
						$.cookie('alias',$('#login_user').val(),{
							expires : 7,
							path : '/',
						});
						$('#login_a').hide();
						$('#reg_a').hide();
						var alias = $.cookie('alias');
						if (alias.length > 4) {
							alias = alias.substr(0,3) + '..';
						}
						$('#member').show().html(alias);
						//写入cookie后，获取id
						$.ajax({
							type : 'post',
							url : window.web_dir + 'home/vip/get_id',
							data : {
								'name' : $.cookie('alias'),
							},
							success : function(res,status,xhr) {
								//跳转到个人中心
								$('#my_info').attr('href',window.web_dir+'home/usercenter/show' + '/' +res);
//								$('#my_info').click(function() {
//									window.location.href = window.web_dir+'home/usercenter/show' + '/' +1;
//								});
							},
						});
						$('#loading').css('background','url(public/default/images/my/success.gif) no-repeat 20px center').html('登陆成功！');
						//1s后，关闭窗口
						setTimeout(function() {
							$('#loading').dialog('close');
							$('#login').dialog('close');
							$('#login').resetForm();
							$('#login span.star').html('*').removeClass('succ');
							//还原loading
							$('#loading').html('客官请稍后...').css('background','url(public/default/images/my/loading.gif) no-repeat 20px center');
						},1000);
					}else {	//失败
						$('#loading').css('background','url(public/default/images/my/close.gif) no-repeat 20px center').html('用户名或者密码错误，请重试！').dialog('option','width',300);
						$('input[name=login_pass]').val('');
						$('#login span.star').html('*').removeClass('succ');
						setTimeout(function() {
							$('#loading').dialog('close');
							//还原loading
							$('#loading').html('客官请稍后...').css('background','url(public/default/images/my/loading.gif) no-repeat 20px center').dialog('option','width',160);
						},1000);
					}
				},
				error : function(event,errorType,errorText) {
					throw newError(errorType + '--' + errorText);
				},
			});
		},
		//规则
		rules : {
			login_user : {
				required : true,
				rangelength : [2,30],
				my_user : true,
			},
			login_pass : {
				required : true,
				minlength : 6,
			},
			login_code : {
				required : true,
				minlength : 4,
				remote : {
					url : window.web_dir + 'home/vip/checkCode',
					type : 'POST',
				},
			},
		},
		messages : {
			login_user : {
				required : '用户名不能为空！',
				rangelength :jQuery.format( '用户名必须在{0}位到为{1}之间！'),
				my_user : '用户名不能包含特殊字符！',
			},
			login_pass : {
				required : '密码不能为空！',
				minlength : jQuery.format('密码不能少于{0}位！'),
			},
			login_code : {
				required : '验证码不能为空！',
				minlength : jQuery.format('验证码不能少于{0}位'),
				remote : '验证码错误！',
			},
		},
		//设置错误提示
		errorLabelContainer : 'ol.login_error',
		wrapper : 'li',
		//错误加亮
		highlight : function(element,errorClass) {
			$(element).css('border','1px solid red');
			$(element).parent().find('.star').html('*').removeClass('succ');
		},
		//取消加亮
		unhighlight : function(element,errorClass) {
			$(element).css('border','1px solid #ccc');
			$(element).parent().find('.star').html('&nbsp').addClass('succ');
		},
		showErrors : function(errorMap,errorList) {
			var errors = this.numberOfInvalids();
			if(errors > 0) {
				$('#login').dialog('option','height',350 + parseInt(errors) * 20);
			}else {
				$('#login').dialog('option','height',350);
			}
			this.defaultShowErrors();	
		},
	});
	
	//增加一个用户名的验证
	$.validator.addMethod('my_user',function(value,element){
		var tel = /^[\w\-\u4e00-\u9fa5]{2,30}$/;
		return this.optional(element) || (tel.test(value));
	},'请输入正确的用户名！');
	
	//添加邮箱的验证
	$.validator.addMethod('my_email',function(value,element) {
		var tel = /^[\w\.\-]+@[\w\-]+(.([a-zA-Z]{2,3})){1,2}$/;
		return this.optional(element) || (tel.test(value));
	},'请输入合法的邮箱');
	
	//初始化loading
	$('#loading').dialog({
		width : 160,
		height: 50,
		resizable :false,
		modal : true,
		autoOpen :  false,
	}).parent().find('.ui-widget-header').hide();
	
	//电子邮件自动补齐
	$('#reg_email').autocomplete({
		//默认选中第一个
		autoFocus : true,
		//延迟
		delay : 0,
		//数据信息
		source : function(response,request) {
			var hosts = ['@qq.com','@163.com','@126.com','@sina.com','@vip.qq.com','@yahoo.com','@gmail.com'],		//数据源
				  term = response.term,	//获取用户输入的内容
				  ix = term.indexOf('@'),	//判断用户输入是否有@符号
				  name = term, //@符号之前的结果
				  host = [],	//筛选出的数据源
				  result = [];	//最后的结果
			if(term) {	//如果用户开始输入了，
				if(ix != -1) {	//存在@
					name = term.substr(0,ix);
					host = term.substr(ix+1,term.length);
				}
				
				var findHosts = host ? $.grep(hosts,function(value,index) {
					return value.indexOf(host) != -1;
				}) : hosts;	//得到最后的域名集合，如果host有值那么，筛选出可以显示的，如果没有，显示所有
				result = $.map(findHosts,function(value,index) {
					return name + value;
				});
			}
			request(result);
			
		},
	});

	//点击图片更新
	$('img.login_img').click(function() {
			$(this).get(0).src = $(this).get(0).src + '/' + Math.random(); 
	});
	
	//页面加载后，显示购物车
		 window.car_top = $(window).innerHeight() - $('.my_car').innerHeight() + 'px';
		 window.car_left = $(window).innerWidth() - $('.my_car').innerWidth() + 'px';
		$('.my_car').attr('style','top:'+window.car_top+';left:'+window.car_left).show();
		 $(window).on('resize',function() {
			 window.car_top = $(window).innerHeight() - $('.my_car').innerHeight() + 'px';
			 window.car_left = $(window).innerWidth() - $('.my_car').innerWidth() + 'px';
			 $('.my_car').attr('style','top:'+window.car_top+';left:'+window.car_left).show();
		});
		 
		 //每次加载页面刷新购物车
		 $(window).on('ready',function() {
			 $.ajax({
				 type : 'get',
				 dataType : 'json',
				 url : window.web_dir + 'home/details/in_cookie',
			 	 success : function(res) {
			 		 	$('#car_num').html(res.total);
			 		 	$('#car_price').html(res.price);
			 	 },
			 });
		 });
		 
		 //鼠标悬浮购物车，刷新
		 $('#my_car_re').on('mouseenter',function() {
			 $.ajax({
				 type : 'get',
				 dataType : 'json',
				 url : window.web_dir + 'home/details/in_cookie',
			 	 success : function(res) {
			 		 	$('#car_num').html(res.total);
			 		 	$('#car_price').html(res.price);
			 	 },
			 });
		 });
		 
		 //添加购物车
		 $('#add_card').on('click',function() {
			 if($('#color').val() == '-- 请选择 --' || $('#size').val() == '-- 请选择 --') {
				 $('#show_info').html('请选择商品属性！').fadeIn();
				 setTimeout(function() {
					 $('#show_info').fadeOut();
				 },1000);
				 return false;
			 }
			 //判断是否存在
			 if($.cookie('car_id')) {
				 //判断是否已经存在于cookie
				 if($.cookie('car_id').indexOf($('#g_id').attr('val')) == '-1') {
					 var ids = $.cookie('car_id');
					 var g_id = $('#g_id').attr('val');
					 $.cookie('car_id',ids + ',' + g_id,{
						 expires : 7,
						 path : '/',
					 });
					 //将数据拼接为json，传值
					 var info = {'id':$('#g_id').attr('val'),'title':$('#g_title').html(),'price':$('#g_price').attr('val'),'color':$('#color').val(),'size':$('#size').val(),'img':$('#img_thumb').attr('src')};
					 $.ajax({
						 type : 'get',
						 dataType : 'json',
						 url : window.web_dir + 'home/details/in_cookie',
					 	 data : {
					 		 'info' : info,
					 	 },
					 	 success : function(res) {
					 		 	$('#car_num').html(res.total);
					 		 	$('#car_price').html(res.price);
					 	 },
					 });
					 
					 $('#show_info').html('加入购物车成功！').fadeIn();
					 setTimeout(function() {
						 $('#show_info').fadeOut();
					 },1000);
				 }else {
					 $('#show_info').html('您已经添加了该商品！').fadeIn();
					 setTimeout(function() {
						 $('#show_info').fadeOut();
					 },1000);
				 }
			 }else {
					 //获取数据，初始化写入cookie
					 $.cookie('car_id',$('#g_id').attr('val'),{
						 expires : 7,
						 path : '/',
					 });
					 //将数据拼接为json，传值
					 var info = {'id':$('#g_id').attr('val'),'title':$('#g_title').html(),'price':$('#g_price').attr('val'),'color':$('#color').val(),'size':$('#size').val(),'img':$('#img_thumb').attr('src'),'g_sn':$('#g_sn').html()};
					 $.ajax({
						 type : 'get',
						 dataType : 'json',
						 url : window.web_dir + 'home/details/in_cookie',
					 	 data : {
					 		 'info' : info,
					 	 },
					 	 success : function(res) {
					 		 	$('#car_num').html(res.total);
					 		 	$('#car_price').html(res.price);
					 	 },
					 });
					 $('#show_info').html( '加入购物车成功！').fadeIn();
				 }
				 setTimeout(function() {
					 $('#show_info').fadeOut();
				 },1000);
		 });
		 
		 //购物车查看
		 $('#pay_for').on('click',function() {
			 //请先登陆
			 if(!$.cookie('alias')) {
				 $('#login').dialog('open');
				 return false;
			 }
			 //生成订单
			 $.ajax({
				 type : 'get',
				 url : window.web_dir + 'home/usercenter/in_order',
			 	 success : function(res) {
			 		 if(res == 'false') {
			 			 //没有任何订单
			 			$('#loading').html('暂无订单！').dialog('open');
			 			setTimeout(function() {
			 				$('#loading').html('客官请稍后...').dialog('close');
			 			},500);
			 		 }else if(res == '1'){
			 			 var id = $.cookie('u_id');
			 			 //跳转
			 			window.location.href = window.web_dir+'home/usercenter/show' + '/' +id;
			 		 }else if(res == '0') {
				 			$('#loading').html('参数错误！').dialog('open');
				 			setTimeout(function() {
				 				$('#loading').html('客官请稍后...').dialog('close');
				 			},500);
			 		 }
			 	 }
			 });
		 });


		 
	//个人中心，下拉
	
	$('#member').mouseenter(function() {
		$(this).css('background','url(public/default/images/arrow2.png) no-repeat right center');
		$('#member_info').show().css('z-index','9999');
	});
	
		$('#member_info').mouseenter(function() {
			$(this).show();
			$('#member').mouseleave(function() {
				$(this).css('background','url(public/default/images/arrow.png) no-repeat right center');
				$('#member_info').hide();
			});
		}).mouseleave(function() {
			$('#member').css('background','url(public/default/images/arrow.png) no-repeat right center');
			$(this).hide();
		});

		//退出，清除cookie，跳转
		$('#logout').click(function() {
			$.removeCookie('alias',{
				path : '/',
			});
			window.location.href = window.web_dir;
		});
		
		//
		$(document).on('ready',function() {
			if($.cookie('alias')) {
			$.ajax({
				type : 'post',
				url : window.web_dir + 'home/vip/get_id',
				data : {
					'name' : $.cookie('alias'),
				},
				success : function(res,status,xhr) {
					//跳转到个人中心
					var id = res;
					$.cookie('u_id',id,{
						expires : 7,
						path : '/',
					});
					$('#my_info').attr('href',window.web_dir+'home/usercenter/show' + '/' +id);
//					$('#my_info').click(function() {
//						window.location.href = window.web_dir+'home/usercenter/show' + '/' +id;
//					});
				},
			});
			}
		});

		
		
		
		//获取文章列表
		$(window).on('ready',function() {
			$.ajax({
				type :'get',
				url : window.web_dir+'home/welcome/article',
				dataType : 'json',
				success : function(response,status,xhr) {
					var str = '';
					$.each(response,function(index,value){
						str += "<li><a href='"+window.web_dir+"home/welcome/artical/"+value.art_id+"' target='_blank'><i class='iconfont-circle-blank menu-icon'></i>"+value.art_title+"</a></li>";
					});
					$('#art_list').html(str);
				},
			});
		});
		
		//文章下一页
		$('#art_parent').on('click','#art_next',function() {
			var a_id = $(this).attr('val');
			$.ajax({
				type : 'get',
				url : window.web_dir + 'home/article/get_next',
				data : {
					id : a_id,
				},
				dataType : 'json',
				beforeSend : function() {
					$('#art_info').html(' ');
					$('#art_loading').show();
					$(window).scrollTop(300);
				},
				success : function(response,statue,xhr) {
					$('#art_loading').hide();
//					$(window).scrollTop(300);
							$('#art_info').html(art_html(response,'next'));
				},
			});
		});
		
		//文章上一页
		$('#art_info').on('click','#art_pre',function() {
			$.ajax({
				type : 'get',
				url : window.web_dir + 'home/article/get_pre',
				data : {
					id : $(this).attr('val'),
				},
				dataType : 'json',
				beforeSend : function() {
					$('#art_info').html(' ');
					$('#art_loading').show();
					$(window).scrollTop(300);
				},
				success : function(response,statue,xhr) {
						$('#art_loading').hide();
						$('#art_info').html(art_html(response,'prev'));
				},
			});
		});
		
		function art_html(response,type) {
			if(response != 0) {
				str = '<div class="row">';
				str += '<div class="col-md-6 col-md-offset-3">';
				str += '<h3 class="section-title">'+response[0].art_title+'</h3>';
				str += '<small><cite class="pull-right">发布者：'+response[0].art_author+'　　发布时间：'+response[0].art_time+'</cite></small>';
				str += '</div>';
				str += '<div class="row">';
				str += '	<div class="col-md-10 col-md-offset-1">';
				str += '<hr />';
				str += response[0].art_content;
				str += '</div>';
				str += '</div>';
				str += '</div>';
				str += '<div class="row">';
				str += '<div class="btn-group" style="display:block;">';
				if(response.flag == 'ok' && type == 'prev') {
					str += '<button class="btn btn-primary pull-right" val="'+response[0].art_id+'" id="art_next">下一篇</button>';
				}else if (response.flag == 'ok' && type == 'next') {
					str += '<button val="'+response[0].art_id+'" class="btn btn-primary pull-left" id="art_pre">上一篇</button>';
				}else {
					str += '<button val="'+response[0].art_id+'" class="btn btn-primary pull-left" id="art_pre">上一篇</button><button class="btn btn-primary pull-right" val="'+response[0].art_id+'" id="art_next">下一篇</button>';
				}
				str += '</div>';				
				str += '</div>';
				return str;
			}
		}
		
		
		//最新上架10条
		$(window).on('ready',function() {
			var info = '';
			var num = 1;
			$.ajax({
				url : window.web_dir + 'home/welcome/get_new_goods',
				dataType : 'json',
				success : function(response,status,xhr) {
					//获取json数据
					if(response) {
							$.each(response,function(index,value) {
								//注入信息
								if(value['goods_name'].length > 18) {
									value['goods_name_thumb'] = value['goods_name'].substring(0,18) + '...';
								};
								$('.new_title' + (index +1)).html(value['goods_name_thumb']);
								$('.new_title' + (index +1)).attr('title',value.goods_name);
								$('.new_title' + (index +1)).attr('href',window.web_dir +'/home/details/show/' + value.goods_id);
								$('.new_market_price' + (index + 1)).html('$ ' + value.market_price);
								$('.new_shop_price' + (index + 1)).html('$ ' + value.shop_price);
								$('.new_img' + (index + 1)).attr('href',window.web_dir +'/public/upload/' + value.goods_img);
								//用于购物车图片展示
								$('.new_thumb' + (index + 1)).attr('data-src',window.web_dir +'/public/upload/' + value.goods_img);
								$('.new_thumb' + (index + 1)).attr('src',window.web_dir +'/public/upload/' + value.goods_thumb);
								//链接
								$('.go_url' + (index + 1)).attr('href',window.web_dir +'/home/details/show/' + value.goods_id);
								//购物车
								$('.data-product-car' + (index + 1)).attr('data-product-id',value.goods_id);
							});
					}
				},
			});
		});
		
		
		//推荐10条
		$(window).on('ready',function() {
			var info = '';
			var num = 1;
			$.ajax({
				url : window.web_dir + 'home/welcome/get_recom_goods',
				dataType : 'json',
				success : function(response,status,xhr) {
					//获取json数据
					if(response) {
							$.each(response,function(index,value) {
								//注入信息
								if(value['goods_name'].length > 18) {
									value['goods_name_thumb'] = value['goods_name'].substring(0,18) + '...';
								};
								$('.com_title' + (index +1)).html(value['goods_name_thumb']);
								$('.com_title' + (index +1)).attr('title',value.goods_name);
								$('.com_title' + (index +1)).attr('href',window.web_dir +'/home/details/show/' + value.goods_id);
								$('.com_market_price' + (index + 1)).html('$ ' + value.market_price);
								$('.com_shop_price' + (index + 1)).html('$ ' + value.shop_price);
								$('.com_img' + (index + 1)).attr('href',window.web_dir +'/public/upload/' + value.goods_img);
								//用于购物车图片展示
								$('.com_thumb' + (index + 1)).attr('data-src',window.web_dir +'/public/upload/' + value.goods_img);
								$('.com_thumb' + (index + 1)).attr('src',window.web_dir +'/public/upload/' + value.goods_thumb);
								//链接
								$('.com_url' + (index + 1)).attr('href',window.web_dir +'/home/details/show/' + value.goods_id);
								//购物车
								$('.data-product-re-car' + (index + 1)).attr('data-product-id',value.goods_id);
							});
					}
				},
			});
		});
		
		//模拟点击
		$(document).on('ready',function() {
			$('#g_id').click();
		});
		
		$('#g_id').click(function() {
			//获取商品数据，注入
			$.ajax({
				url : window.web_dir + 'home/details/get_info',
				type : 'POST',
				data : {
					'g_id' : $(this).attr('val'),
				},
				dataType : 'json',
				success : function(response,status,xhr) {
						if(response) {
							$('#img_thumb,#img_thumb_dis').attr('src',window.web_dir +'public/upload/' + response[0].goods_thumb);
							$('#g_img').attr('href',window.web_dir +'public/upload/' + response[0].goods_img);
							$('#g_title').html(response[0].goods_name);
							$('#g_price').html('$ '+response[0].shop_price);
							$('#g_price').attr('val',response[0].shop_price);
							$('#g_brand').html(response[0].brand_name);
							$('#g_jifen').html(response[0].goods_jifen);
							$('#g_sn').html(response[0].goods_sn);
							$('#g_s_desc').html(response[0].small_desc);
							$('#product-description').html(response[0].goods_desc);
							//购物车id
							$('#detail-car-num').attr('data-product-id',response[0].goods_id);
						}
				},
			});
			
		});
		
		//商品相册
		$(window).on('ready',function() {
			$.ajax({
				url : window.web_dir + 'home/details/get_images',
				type : 'POST',
				data : {
					'g_id' : $('#g_id').attr('val'),
				},
				dataType : 'json',
				success : function(response,status,xhr) {
					if(response != 0) {
						var html = '';
						$.each(response,function(index,value) {
							html += '<li><a href="'+window.web_dir+'public/upload/'+value.img_url+'"><img src="'+window.web_dir+'public/upload/'+value.img_url+'" alt="" /></a></li>'; 
						});
						$('#pics').html(html);
					}
				},
			});
		});
		
		//颜色属性
		$('#color').on('click',function() {
			$.ajax({
				url : window.web_dir + 'home/details/get_attr_color',
				type : 'POST',
				data : {
					'g_id' : $('#g_id').attr('val'),
				},
				dataType : 'json',
				success : function(response,status,xhr) {
					if(response == 0) {
						$('#color').empty();
						$('#color').append('<option value="0">暂无任何选项</option>');
					}else {
						$('#color').empty();
						
						$.each(response,function(index,value) {
							$('#color').append('<option value="'+value.value+'">'+value.value+'</option>');
						});
					}
				},
			});
		});
		
		
		//颜色属性
		$('#size').on('click',function() {
			$.ajax({
				url : window.web_dir + 'home/details/get_attr_size',
				type : 'POST',
				data : {
					'g_id' : $('#g_id').attr('val'),
				},
				dataType : 'json',
				success : function(response,status,xhr) {
					if(response == 0) {
						$('#size').empty();
						$('#size').append('<option value="0">暂无任何选项</option>');
					}else {
						$('#size').empty();
						
						$.each(response,function(index,value) {
							$('#size').append('<option value="'+value.value+'">'+value.value+'</option>');
						});
					}
				},
			});
		});
		
		

		
		//商品详情，需要移植到detail单独页面
//		$(document).on('ready',function() {
//			$.ajax({
//				url : window.web_dir + 'home/details/get_info',
//				dataType : 'string',
//				success : function(response,status,xhr) {
//					alert(response);
//				},
//			});
//		});
		
		//最近浏览
		$(window).on('ready',function() {
			$.ajax({
				dataType : 'json',
				url : window.web_dir + 'home/details/ajax_lookinfo',
				success : function(res,status,xhr) {	
					$.each(res,function(index,value) {
						if(value.goods_id != null) {
							if(value.goods_name.length >= 18) {
								var name = value.goods_name.substring(0,18) + '...';
							}
							$('#near_info').append('<li><a title="'+value.goods_name+'" href="'+window.web_dir+'home/details/show/'+value.goods_id+'">'+name+'</a></li> 　　　售价:<span style="font-size:14px;font-weight:bold;color:red;">'+value.shop_price + '</span>　　　销量:<span style="font-size:14px;font-weight:bold;color:red;">' + value.sale_num+'</span>');
						}
					});
				},
			});
		});
		
		
		
		
		
		
		
		
		
		
		
		
	
});