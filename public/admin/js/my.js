$(function() {

	window.web_dir = 'HTTP://www.gf.com/GF/';
	
	$('#send').click(function() {
		$('#login').submit();
	});
	
	//登陆信息验证
	$('#login').validate({
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
					url : window.web_dir + 'admin/manage/checkCode',
					type : 'POST',
				},
			},
		},
		messages : {
			login_user : {
				required : '用户名不能为空！',
				rangelength : jQuery.format('用户名必须在{0}位到为{1}之间！'),
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
		submitHandler : function(form) {
			$(form).ajaxSubmit({
				url : window.web_dir + 'admin/manage/login',
				type : 'POST',
				beforeSubmit : function() {
					//展示loading
					$('#loading').dialog('open');
					//禁止提交按钮
					// $('#login').parent().find('button').eq(1).button('disable');
				},
				success : function(ResponsText,statusText) {
					if(ResponsText == 'true') {	//成功
						$('#loading').css('background','url(../public/admin/images/success.gif) no-repeat 20px center').html('登陆成功！');
						//跳转到后台首页
						window.location.href = window.web_dir + "admin/welcome";
						//1s后，关闭窗口
						setTimeout(function() {
							$('#loading').dialog('close');
							$('#login').resetForm();
							$('#login span.star').html('*').removeClass('succ');
							//还原loading
							$('#loading').html('领导请稍后...').css('background','url(../public/admin/images/loading.gif) no-repeat 20px center');
						},1000);
					}else {	//失败
						$('#loading').css('background','url(../public/admin/images/close.gif) no-repeat 20px center').html('用户名或者密码错误，请重试！').dialog('option','width',300);
						$('input[name=login_pass]').val('');
						$('#login span.star').html('*').removeClass('succ');
						setTimeout(function() {
							$('#loading').dialog('close');
							//还原loading
							$('#loading').html('领导请稍后...').css('background','url(../public/admin/images/loading.gif) no-repeat 20px center').dialog('option','width',160);
						},2000);
					}
				},
				error : function(event,errorType,errorText) {
					// alert(errorType + '--' + errorText);
					$('#loading').css('background','url(../public/admin/images/close.gif) no-repeat 20px center').html('服务器错误，请联系管理员！').dialog('option','width',300);
					setTimeout(function() {
						$('#loading').dialog('close');
					},1000);
				},
			});
		},
	});
	
		//初始化loading
	$('#loading').dialog({
		width : 160,
		height: 50,
		resizable :false,
		modal : true,
		autoOpen :  false,
	}).parent().find('.ui-widget-header').hide();	
	
	//增加一个用户名的验证
	$.validator.addMethod('my_user',function(value,element){
		var tel = /^[\w\-\u4e00-\u9fa5]{2,30}$/;
		return this.optional(element) || (tel.test(value));
	},'请输入正确的用户名！');
	
	//点击图片更新
	$('img.login_img').click(function() {
		$(this).get(0).src = $(this).get(0).src+ '?tm=' + Math.random(); 
	});
	
	//点击选中所有checkbox
	$('#listDiv .mainBox').on('change',function() {
		var sta = this.checked;
		var boxs = $('input[type=checkbox]');
		$.each(boxs,function(index,value) {
			value.checked = sta;
		});
	});
	
	//鼠标放置表格，显示浅背景
	$('tr').hover(function() {
		$(this).css('background','lightblue');
	},function() {
		$(this).css('background','#fff');
	});
	
	
	//增加一个onload事件
//	window.onload = function() {
//		user_list('window.web_diradmin/user/userlist/1');
//
//	};
	
//	function user_list(page_num) {
//		//利用ajax获取数据
//		$.ajax({
//			type : 'get',
//			data : {
//				num : page_num,
//			},
//			url : 'window.web_diradmin/user/get_list_data',
//			success : function(Response,status,xhr) {
//				//获取json数据
//				//转化json为js对象
//				eval("var user_data="+Response);
//				
//				var info = '<table cellpadding="3" cellspacing="1">';
//				info += '<tbody>';
//				info += '<tr>';
//				info += '<th><input type="checkbox">编号</th>';
//				info += '<th>用户名</th>';
//				info += '<th>用户昵称</th>';
//				info += '<th>性别</th>';
//				info += '<th>出生年月</th>';
//				info += '<th>积分</th>';
//				info += '<th>vip等级</th>';
//				info += '<th>邮箱</th>';
//				info += '<th>注册时间</th>';
//				info += '<th>是否禁用</th>';
//				info += '<th>收货管理</th>';
//				info += '<th>操作</th>';
//				info += '</tr>';
//				info += '<tr></tr>';
//				for(var i = 0; i < user_data.length-1; ++i) {
//					info += '<tr>';
//					info += '<td><input type="checkbox" name="checkboxes[]" value="">'+user_data[i].user_id+'</td>';
//					info += '<td class="first-cell">'+user_data[i].user_name+'</td>';
//					info += '<td align="center">'+user_data[i].user_alias+'</td>';
//					info += '<td align="center">'+user_data[i].user_sex+'</td>';
//					info += '<td align="center">'+user_data[i].user_birthday+'</td>';
//					info += '<td align="center">'+user_data[i].user_inte+'</td>';
//					info += '<td align="center"><img src="window.web_dirpublic/admin/images/guan.gif" onclick="">'+user_data[i].user_vip+'</td>';
//					info += '<td align="center">'+user_data[i].user_email+'</td>';
//					info += '<td align="center">'+user_data[i].user_reg_time+'</td>';
//					if(user_data[i].user_flag){
//						info += '<td align="center"><img src="window.web_dirpublic/admin/images/yes.gif" onclick=""></td>';
//					}else {
//						info += '<td align="center"><img src="window.web_dirpublic/admin/images/no.gif" onclick=""></td>';
//					}
//					
//					info += '<td align="center"><a href="{base_url url=\'admin/user/address\'}">点击管理地址</a></td>';
//					info += '<td align="center">';
//					info += '<a href="" target="_blank" title="查看"><img src="window.web_dirpublic/images/icon_view.gif" width="16" height="16" border="0"></a>';
//					info += '<a href="{base_url url=\'admin/user/edit\'}/" title="编辑"><img src="window.web_dirpublic/admin/images/icon_edit.gif" width="16" height="16" border="0"></a>';
//					info += '<a href="javascript:;" onclick="listTable.remove(32, \'你去顶？\')" title="禁用此用户"><img src="window.web_dirpublic/admin/images/icon_trash.gif" width="16" height="16" border="0"></a>';
//					info += '<a href="{base_url url=\'admin/user/address\'}" title="收货地址管理"><img src="window.web_dirpublic/admin/images/icon_docs.gif" width="16" height="16" border="0"></a>  ';        
//					info += '</td>';
//					info += '</tr>';
//				}
//				info += '</tbody>';
//				info += '</table>';
//				$('#listDiv').html(info);
//				$('#turn-page').html(user_data[user_data.length-1]);
//				//分页点击
//				$('#turn-page .page').click(function(e) {
//					user_list(this.href);
//					e.preventDefault();
//				});
//			},
//		});
//
//	}
	
	
	//当为主类时，不能添加控制器，方法名
	if($('#auth_select').val() == 0) {
		$('#auth_c').attr('disabled','disabled').css('border','1px solid red').val('');
		$('#auth_a').attr('disabled','disabled').css('border','1px solid red').val('');
	}
	$('#auth_select').on('change',function() {
		if($(this).val() == '0') {
			$('#auth_c').attr('disabled','disabled').css('border','1px solid red').val('');
			$('#auth_a').attr('disabled','disabled').css('border','1px solid red').val('');
			$('#auth_level').val('0');
		}else {
			$('#auth_c').removeAttr('disabled').css('border','1px solid blue');
			$('#auth_a').removeAttr('disabled').css('border','1px solid blue');
		}
	});
	
	//添加角色，点击选择权限
	$('input[val^=id]').on('change',function() {
		var val = $(this).attr('val').substr(2);
		var ch = this.checked;
		$.each($('input[val='+val+']'),function(index,value) {
			value.checked = ch;
		});
	});

	
	
});