<?php /* Smarty version Smarty-3.1.18, created on 2014-06-15 12:27:44
         compiled from "application\views\welcome\center\adedit.html" */ ?>
<?php /*%%SmartyHeaderCode:1342539d20c0596fe5-58829545%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e939d5ceea522941867dbbfa18ee7b8090f0fab0' => 
    array (
      0 => 'application\\views\\welcome\\center\\adedit.html',
      1 => 1402747069,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1342539d20c0596fe5-58829545',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_539d20c065a514_39755036',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539d20c065a514_39755036')) {function content_539d20c065a514_39755036($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include 'C:\\AppServ\\www\\GF\\application\\libraries\\Smarty\\plugins\\function.base_url.php';
if (!is_callable('smarty_function_site_url')) include 'C:\\AppServ\\www\\GF\\application\\libraries\\Smarty\\plugins\\function.site_url.php';
?><!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7 lte9 lte8 lte7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="en-US">	<![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="en-US"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class="noIE" lang="en-US"><!--<![endif]-->
<head>
	<meta charset="UTF-8" />
	<title>GFashion</title>
	<meta name="description" content=""/>
	<meta name="keywords" content=""/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="<?php echo smarty_function_base_url(array('url'=>'public/default/css/minified.css'),$_smarty_tpl);?>
">

	<!-- PARTICULAR PAGES CSS FILES -->
	<link rel="stylesheet" href="<?php echo smarty_function_base_url(array('url'=>'public/default/css/innerpage.css'),$_smarty_tpl);?>
">
	<link rel="stylesheet" href="<?php echo smarty_function_base_url(array('url'=>'public/default/css/owl.carousel.css'),$_smarty_tpl);?>
">
	<link rel="stylesheet" href="<?php echo smarty_function_base_url(array('url'=>'public/default/css/owl.theme.css'),$_smarty_tpl);?>
">
	<!-- // PARTICULAR PAGES CSS FILES -->
	<link rel="stylesheet" href="<?php echo smarty_function_base_url(array('url'=>'public/default/css/responsive.css'),$_smarty_tpl);?>
">
	<!-- js -->
	<script src="<?php echo smarty_function_base_url(array('url'=>'public/default/js/jquery.min.js'),$_smarty_tpl);?>
"></script>
	<script src="<?php echo smarty_function_base_url(array('url'=>'public/default/js/modernizr.min.js'),$_smarty_tpl);?>
"></script>	
	<!--js -->
</head>
<body>
			
	<!-- PAGE WRAPPER -->
<div id="page-wrapper">

	<!-- SITE HEADER -->
	<header id="site-header" role="banner">
		<!-- HEADER TOP -->
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-7">
						<!-- CONTACT INFO -->
						<div class="contact-info">
							<i class="iconfont-headphones round-icon"></i>
							<strong>+444 (100) 1234</strong>
							<span>(Mon- Fri: 09.00 - 21.00)</span>
							</div>
						<!-- // CONTACT INFO -->
					</div>
					<div class="col-xs-12 col-sm-6 col-md-5">
						<ul class="actions unstyled clearfix">
							<li>
								<!-- SEARCH BOX -->
								<div class="search-box">
									<form action="#" method="post">
										<div class="input-iconed prepend">
											<button class="input-icon"><i class="iconfont-search"></i></button>
											<input type="text" name="q" id="input-search" class="round-input full-width" required />
										</div>
									</form>
								</div>
								<!-- // SEARCH BOX -->
							</li>
							<li data-toggle="sub-header" data-target="#sub-social">
							
							</li>
							
						</ul>
					</div>
				</div>
			</div>
		
		</div>
		<!-- // HEADER TOP -->
		<!-- MAIN HEADER -->
		<div class="main-header-wrapper">
			<div class="container">
				<div class="main-header">
					
					<!-- SITE LOGO -->
					<div class="logo-wrapper">
						<a href="index-2.html" class="logo" title="GFashion - Responsive e-commerce HTML Template">
							<img src="<?php echo smarty_function_base_url(array('url'=>'public/default/img/logo.png'),$_smarty_tpl);?>
" alt="GFashion - Responsive e-commerce HTML Template" />
						</a>
					</div>
					<!-- // SITE LOGO -->
					<!-- SITE NAVIGATION MENU -->
					<nav id="site-menu" role="navigation">
						<ul class="main-menu hidden-sm hidden-xs">
							<li class="active">
								<a href="index.html">首页</a>
							</li>
							<li>
								<a href="products.html">女人衣柜</a>
							</li>
							<li>
								<a href="products.html">潮流男装</a>
							</li>
							<li>
								<a href="components.html">火爆促销</a>
							</li>
							<li>
								<a href="store-locator.html">服饰周边</a>
							</li>
							<li>
								<a href="contact-us.html">关于我们</a>
							</li>
							<li>
								<a href="#">Buy Me!</a>
							</li>
						</ul>

					</nav>
					<!-- // SITE NAVIGATION MENU -->
				</div>
			</div>
		</div>
		<!-- // MAIN HEADER -->
	</header>
	<!-- // SITE HEADER -->
	
		<!-- BREADCRUMB -->
		<div class="breadcrumb-container">
			<div class="container">
				<div class="relative">
					<ul class="bc unstyled clearfix">
						<li><a href="#">首页</a></li>
						<li class="active">用户评论</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- // BREADCRUMB -->
		
		<!-- SITE MAIN CONTENT -->
		<main id="main-content" role="main">
				
			<div class="container">
				<div class="row">

				<!-- CONTENT -->
				
				<div class="col-md-1">
					
				</div>
				<div class='col-md-8'>
<h3>收货地址修改 &nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-primary btn-xs" onclick="location.href='<?php echo smarty_function_base_url(array('url'=>'home/usercenter/show'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value->user_id;?>
'">返回</button></h3>
<form method="post" action="<?php echo smarty_function_site_url(array('url'=>'home/usercenter/adedit'),$_smarty_tpl);?>
" name="theForm" onsubmit="return validate()">
   <input type='hidden' name='addr_id' value='<?php echo $_smarty_tpl->tpl_vars['row']->value->addr_id;?>
'>
   <input type="hidden" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->user_id;?>
"/>
<table width="100%" align='center' class='table table-hover'>
  <tr>
    <td>收货人名称:</td>
    <td><input type="text" name="addr_name" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->addr_name;?>
" /></td>
  </tr>
  <tr>
    <td>收货地址:</td>
    <td><input type="text" name="address" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->address;?>
" size='70'/></td>
  </tr>
  <tr>
    <td>联系电话:</td>
    <td><input type="text" name="tel" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->tel;?>
" /></td>
  </tr>
 
   <tr>
    <td align='center'>
      <input type="submit" value=" 确定 " class="btn btn-primary btn-lg" />
  	</td>
  	<td>
      <input type="reset" value=" 重置 " class="btn btn-primary btn-lg" />
    </td>
  </tr>
</table>
</form>
	</div>
				
				<!-- CONTENT -->

				
				</div>
			</div>
			
		</main>
		<!-- // SITE MAIN CONTENT -->
		
		<!-- SITE FOOTER -->
	<footer class="page-footer">
		
		<!-- WIDGET AREA -->
		<div class="widgets">
		
			<!-- FIRST ROW -->
			<div class="section">
				<div class="container">
					<div class="row">
						
						<div class="col-xs-12 col-sm-6 col-md-4">
							<section class="widget widget-text">
								<h5 class="widget-title">关于我们</h5>
								<div class="widget-content">
									<p>
									关于我们。。。。。。。。。。。。。。。。。。。New arrivals
									</p>
								</div>
							</section>
						</div>
						
						<div class="col-xs-12 col-sm-6 col-md-5">
							<section class="widget widget-text">
								<h5 class="widget-title">营业时间</h5>
								<div class="widget-content">
									<p>周一至周五:-------------------------9.00 to 18.00</p>
									<p>周六:--------------------------------10.00 to 16.00</p>
									<p>周日:----------------------------------10.00 to 16.00</p>
									<p>请广大用户在营业时间内进行购买，非营业时间内下单，将于次日进行处理，为您购物带来不便，还请见谅。</p>
								</div>
							</section>
						</div>
						
						<div class="space40 visible-sm clearfix"></div>
						
						<div class="col-xs-12 col-sm-6 col-md-3">
							<section class="widget widget-menu">
								<h5 class="widget-title">文章信息</h5>
								<div class="widget-content">
									<ul class="menu iconed-menu unstyled">
										<li><a href="#"><i class="iconfont-circle-blank menu-icon"></i>Affiliate</a></li>
										<li><a href="#"><i class="iconfont-circle-blank menu-icon"></i>Shipping</a></li>
										<li><a href="#"><i class="iconfont-circle-blank menu-icon"></i>Shop support</a></li>
										<li><a href="#"><i class="iconfont-circle-blank menu-icon"></i>Customer Service</a></li>
										<li><a href="#"><i class="iconfont-circle-blank menu-icon"></i>Payment & Return</a></li>
										<li><a href="#"><i class="iconfont-circle-blank menu-icon"></i>Terms & Conditions</a></li>
									</ul>
								</div>
							</section>
						</div>
						
						
					</div>
				</div>
			</div>
			<!-- // FIRST ROW -->
			
					
		</div>
		<!-- // WIDGET AREA -->
		
		<div class="footer-sub">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<div class="footer-links center-xs clearfix">
							<ul class="unstyled">
								<li><a href="#">网站地图</a></li>
								<li><a href="#">疑难解答</a></li>
								<li><a href="#">人才招聘</a></li>
								<li><a href="#">关于我们</a></li>
							</ul>
						</div>
						<div class="space10"></div>
						<div class="copyright center-xs">
							<p>© 2013 Gfashion Demo Store. All Rights Reserved.</p>
						</div>
					</div>
					
					<div class="space40 visible-xs"></div>
					
					<div class="col-xs-12 col-sm-6 center-xs">
						<div class="pull-right">
							<div class="vmid">
								<span class="uppercase">Payment Accept&emsp;</span>
								<a href="#"><img src="<?php echo @constant('IMG_DIR');?>
visacard.png" alt="" width="40" /></a>
								<a href="#"><img src="<?php echo @constant('IMG_DIR');?>
mastercard.png" alt="" width="40" /></a>
								<a href="#"><img src="<?php echo @constant('IMG_DIR');?>
paypal.png" alt="" width="40" /></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	<!-- // SITE FOOTER -->
		
		
</div>
<!-- // PAGE WRAPPER -->
<!-- Essential Javascripts -->
<script src="<?php echo smarty_function_base_url(array('url'=>'public/default/js/minified.js'),$_smarty_tpl);?>
"></script>
<!-- // Essential Javascripts -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-27646173-3', 'themina.net');
  ga('send', 'pageview');

</script>

	
</body>
</html><?php }} ?>
