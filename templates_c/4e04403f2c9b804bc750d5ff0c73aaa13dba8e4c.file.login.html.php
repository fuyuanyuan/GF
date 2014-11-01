<?php /* Smarty version Smarty-3.1.18, created on 2014-06-12 14:29:43
         compiled from "application\views\admin\manage\login.html" */ ?>
<?php /*%%SmartyHeaderCode:12868539948d701bd95-51048076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e04403f2c9b804bc750d5ff0c73aaa13dba8e4c' => 
    array (
      0 => 'application\\views\\admin\\manage\\login.html',
      1 => 1401983814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12868539948d701bd95-51048076',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_539948d716bce5_74757478',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539948d716bce5_74757478')) {function content_539948d716bce5_74757478($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include 'C:\\AppServ\\www\\GF\\application\\libraries\\Smarty\\plugins\\function.base_url.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台登陆</title>

<script type="text/javascript" src="<?php echo @constant('B_JS_DIR');?>
jquery.js"></script>
<script type="text/javascript" src="<?php echo @constant('B_JS_DIR');?>
jquery.ui.js"></script>
<script type="text/javascript" src="<?php echo @constant('B_JS_DIR');?>
jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo @constant('B_JS_DIR');?>
jquery.form.js"></script>
<script type="text/javascript" src="<?php echo @constant('B_JS_DIR');?>
my.js"></script>
<link rel="stylesheet" style="text/css" href="<?php echo @constant('B_CSS_DIR');?>
my.css" />
<link rel="stylesheet" href="<?php echo @constant('B_CSS_DIR');?>
lightness/jquery.ui.css" >
</head>

<body>

	
	<div id="login_form">
		<form id="login">
			<ol class="login_error"></ol>
			<p>
				<label for="login_user">用户名：</label>
				<input type="text" name="login_user" id="login_user" class="text" />
				<span class="star">*</span>
			</p>
			<p>
				<label for="login_pass">密码　：</label>
				<input type="password" name="login_pass" id="login_pass" class="text" />
				<span class="star">*</span>
			</p>
			<p>
				<label>验证码：</label>
				<input type="text" name="login_code" id="login_code" class="text" />
				<span class="star">*</span>
				<img class="login_img" src="<?php echo smarty_function_base_url(array('url'=>'admin/manage/code'),$_smarty_tpl);?>
"  alt="验证码"  title="看不清？点击换一张" />
			</p>
			<input type="button" id="send" value="登陆" class="sub" />
		</form>
	</div>
	<div id="loading">领导请稍后...</div>

</body>
</html>
<?php }} ?>
