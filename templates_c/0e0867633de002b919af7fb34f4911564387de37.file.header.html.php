<?php /* Smarty version Smarty-3.1.18, created on 2014-06-18 13:31:41
         compiled from "C:\AppServ\www\GF\application\views\welcome\header.html" */ ?>
<?php /*%%SmartyHeaderCode:18539539941dccdf864-02020519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e0867633de002b919af7fb34f4911564387de37' => 
    array (
      0 => 'C:\\AppServ\\www\\GF\\application\\views\\welcome\\header.html',
      1 => 1403069499,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18539539941dccdf864-02020519',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_539941dceb4477_96658685',
  'variables' => 
  array (
    'main' => 0,
    'value' => 0,
    'sons' => 0,
    'vv' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539941dceb4477_96658685')) {function content_539941dceb4477_96658685($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include 'C:\\AppServ\\www\\GF\\application\\libraries\\Smarty\\plugins\\function.base_url.php';
?><!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7 lte9 lte8 lte7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="en-US">	<![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="en-US"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class="noIE" lang="en-US"><!--<![endif]-->
<head>
	<meta charset="UTF-8" />
	<title>网站标题</title>
	<meta name="description" content=""/>
	<meta name="keywords" content=""/>
	<!-- GENERAL CSS FILES -->
	<link rel="stylesheet" href="<?php echo @constant('CSS_DIR');?>
minified.css">
	<!-- // GENERAL CSS FILES -->
	
	<!--[if IE 8]>
		<script src="<?php echo @constant('JS_DIR');?>
respond.min.js"></script>
		<script src="<?php echo @constant('JS_DIR');?>
selectivizr-min.js"></script>
	<![endif]-->
	<!--
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	-->
	<script>window.jQuery || document.write('<script src="<?php echo @constant('JS_DIR');?>
jquery.min.js"><\/script>');</script>
	<script src="<?php echo @constant('JS_DIR');?>
modernizr.min.js"></script>

	<!-- PARTICULAR PAGES CSS FILES -->
	<link rel="stylesheet" href="<?php echo @constant('CSS_DIR');?>
owl.carousel.css">
	<link rel="stylesheet" href="<?php echo @constant('CSS_DIR');?>
owl.theme.css">
	<link rel="stylesheet" href="<?php echo @constant('CSS_DIR');?>
lightness/jquery.ui.css" >
	<link rel="stylesheet" href="<?php echo @constant('CSS_DIR');?>
jquery.nouislider.css">
	<link rel="stylesheet" href="<?php echo @constant('CSS_DIR');?>
isotope.css">
	<link rel="stylesheet" href="<?php echo @constant('CSS_DIR');?>
innerpage.css">
	<link rel="stylesheet" href="<?php echo @constant('CSS_DIR');?>
my.css">
	<link href="<?php echo @constant('CSS_DIR');?>
flexslider.css" rel="stylesheet" />
	<!-- // PARTICULAR PAGES CSS FILES -->
	<link rel="stylesheet" href="<?php echo @constant('CSS_DIR');?>
responsive.css">
</head>
<body class="home">
			
	<!-- PAGE WRAPPER -->
<div id="page-wrapper">

	<!-- SITE HEADER -->
	<header id="site-header" role="banner">
		<!-- HEADER TOP -->
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<!-- CONTACT INFO -->
						<div class="contact-info">
							<i class="iconfont-headphones round-icon"></i>
							<strong>联系电话</strong>
							<span>(营业时间)</span>
							</div>
						<!-- // CONTACT INFO -->
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<ul class="actions unstyled clearfix">
							<li>
								<!-- SEARCH BOX -->
								<div class="search-box">
									<form action="#" method="post">
										<div class="input-iconed prepend">
											<button class="input-icon"><i class="iconfont-search"></i></button>
											<label for="input-search" class="placeholder">点击搜索</label>
											<input type="text" name="q" id="input-search" class="round-input full-width" required />
										</div>
									</form>
								</div>
								<!-- // SEARCH BOX -->
							</li>
							

							
							<li>
								<div id="login_a">
									<a href="javascript:void(0);" title="点击登陆">登陆</a>
								</div>
							</li>
							
							<li>
								<div id="member">
									<a href="javascript:void(0);" >个人中心</a>
								</div>
							</li>
							
							<li>
								<div id="reg_a">
									<a href="javascript:void(0);" title="点击注册">注册</a
								></div>
							</li>
							

						</ul>
					</div>
				</div>
			</div>
			
			<!-- ADD TO CART MESSAGE -->
			<div class="cart-notification">
				<ul class="unstyled"></ul>
			</div>
			<!-- // ADD TO CART MESSAGE -->
		</div>
		<!-- // HEADER TOP -->
		<!-- MAIN HEADER -->
		<div class="main-header-wrapper">
			<div class="container">
				<div class="main-header">
					<!-- CURRENCY / LANGUAGE / USER MENU -->
					<div class="actions">
						<div class="clearfix"></div>
						<!-- USER RELATED MENU -->
						<!-- // USER RELATED MENU -->
					</div>
					<!-- // CURRENCY / LANGUAGE / USER MENU -->
					<!-- SITE LOGO -->
					<div class="logo-wrapper">
						<a href="index-2.html" class="logo" title="GFashion - Responsive e-commerce HTML Template">
							<img src="<?php echo @constant('IMG_DIR');?>
my-logo.png" alt="GFashion - Responsive e-commerce HTML Template" />
						</a>
					</div>
					<!-- // SITE LOGO -->
					<!-- SITE NAVIGATION MENU -->
					<nav id="site-menu" role="navigation">
						<ul class="main-menu hidden-sm hidden-xs">
							<li class="active">
								<a href="<?php echo smarty_function_base_url(array('url'=>'/'),$_smarty_tpl);?>
">主页</a>
							</li>
							<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['main']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
								<li>
								<a href="<?php echo smarty_function_base_url(array('url'=>'home/goodslist/show'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['value']->value->cat_id;?>
" ><?php echo $_smarty_tpl->tpl_vars['value']->value->cat_name;?>
</a>
								<div class="mega-menu" data-col-lg="3" >
									<div class="row">
										<div class="col-md-12">
											<ul class="mega-sub">
											<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>
											<?php if (($_smarty_tpl->tpl_vars['vv']->value->parent_id==$_smarty_tpl->tpl_vars['value']->value->cat_id)) {?>
												<li><a href="<?php echo smarty_function_base_url(array('url'=>'home/goodslist/show'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['vv']->value->cat_id;?>
" ><?php echo $_smarty_tpl->tpl_vars['vv']->value->cat_name;?>
</a></li>
											<?php }?>
											<?php } ?>
											</ul>
										</div>
									</div>
								</div>
								</li>
							<?php } ?>
						</ul>
						
					</nav>
					<!-- // SITE NAVIGATION MENU -->
				</div>
			</div>
		</div>
		<!-- // MAIN HEADER -->
	</header>
	<!-- // SITE HEADER -->
	
	<form id="login">
			<ol class="login_error"></ol>
			<p>
				<label for="login_user">昵　称：</label>
				<input type="text" name="login_user" id="login_user" class="text" />
				<span class="star">*</span>
			</p>
			<p>
				<label for="login_pass">密　码：</label>
				<input type="password" name="login_pass" id="login_pass" class="text" />
				<span class="star">*</span>
			</p>
			<p>
				<label>验证码：</label>
				<input type="text" name="login_code" id="login_code" class="text" />
				<span class="star">*</span>
				<img class="login_img" src="<?php echo smarty_function_base_url(array('url'=>'home/vip/code'),$_smarty_tpl);?>
" alt="验证码"  title="看不清？点击换一张"/>
			</p>
		</form>
		
		<form id="reg">
			<ol class="reg_error"></ol>
			<p>
				<label for="reg_user">昵称　　：</label>
				<input type="text" name="reg_user" id="reg_user" class="text" />
				<span class="star">*</span>
			</p>
			<p>
				<label for="reg_pass">密码　　：</label>
				<input type="password" name="reg_pass" id="reg_pass" class="text" />
				<span class="star">*</span>
			</p>
			<p>
				<label for="reg_notpass">密码确认：</label>
				<input type="password" name="reg_notpass" id="reg_notpass" class="text" />
				<span class="star">*</span>
			</p>
			<p>
				<label for="reg_email">电子邮件：</label>
				<input type="text" name="reg_email" id="reg_email" class="text" />
				<span class="star">*</span>
			</p>
			<p>
				<label>验证码　：</label>
				<input type="text" name="login_code" id="login_code" class="text" />
				<span class="star">*</span>
				<img class="login_img" src="<?php echo smarty_function_base_url(array('url'=>'home/vip/code'),$_smarty_tpl);?>
" alt="验证码"  title="看不清？点击换一张"/>
			</p>
		</form>
		
		<div id="member_info">
			<dl class="member">
				<dt></dt>
				<dd><a href="javascript:void(0)" id="my_info">个人中心</a></dd>
				<dd><a href="javascript:void(0)" id="logout">退出</a></dd>
			</dl>
		</div>
			
		<div id="loading">客官请稍后...</div><?php }} ?>
