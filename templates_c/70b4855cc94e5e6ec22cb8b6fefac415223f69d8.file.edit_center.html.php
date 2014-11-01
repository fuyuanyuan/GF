<?php /* Smarty version Smarty-3.1.18, created on 2014-06-15 12:29:39
         compiled from "application\views\welcome\center\edit_center.html" */ ?>
<?php /*%%SmartyHeaderCode:25193539d21337db683-91261862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70b4855cc94e5e6ec22cb8b6fefac415223f69d8' => 
    array (
      0 => 'application\\views\\welcome\\center\\edit_center.html',
      1 => 1402747069,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25193539d21337db683-91261862',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_539d21338ae5b5_47104387',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539d21338ae5b5_47104387')) {function content_539d21338ae5b5_47104387($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include 'C:\\AppServ\\www\\GF\\application\\libraries\\Smarty\\plugins\\function.base_url.php';
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
<body onload='guan()'>
			
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
						<li class="active">修改个人信息</li>
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
<br>
<div class="col-md-1"></div>	
<div class="col-md-11">
<h2>个人信息修改 &nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-primary btn-xs" onclick="location.href='<?php echo smarty_function_base_url(array('url'=>'home/usercenter/show'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value->user_id;?>
'">返回</button></h2>
<form method="post" action="<?php echo smarty_function_base_url(array('url'=>'home/usercenter/edit'),$_smarty_tpl);?>
" name="theForm" onsubmit="return validate()">
  <input type='hidden' name='user_id' value="<?php echo $_smarty_tpl->tpl_vars['row']->value->user_id;?>
">
<table width="100%" class='table table-hover'>
  <tr>
    <td>会员名称:</td>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value->user_name;?>
<input type="hidden" name="user_name" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->user_name;?>
" /></td>
  </tr>
  <tr>
    <td>会员昵称:</td>
    <td><input type="text" name="user_alias" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->user_alias;?>
" /></td>
  </tr>
   <tr>
    <td>性别:</td>
    <td><?php if ($_smarty_tpl->tpl_vars['row']->value->user_sex==0) {?><input type="radio" name="user_sex" value="0" checked>&nbsp;男&nbsp;<input type="radio" name="user_sex" value="1">&nbsp;女&nbsp;<?php } else { ?><input type="radio" name="user_sex" value="0">&nbsp;男&nbsp;<input type="radio" name="user_sex" value="1" checked>&nbsp;女&nbsp;<?php }?></td>
  </tr>
  <tr>
    <td>出生日期:</td>
    <td><input type='text' name='user_birthday' value='<?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['row']->value->user_birthday);?>
'></td>
  </tr>

    <tr>
    <td>邮件地址:</td>
    <td><input type="text" name="user_email" maxlength="60" size="40" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->user_email;?>
" /><span class="require-field">*</span></td>
  </tr>
    
 <div></div>

  <tr>
    <td>新密码:</td>
    <td><input type="password" name="user_pass" maxlength="20" size="20" id='cc2' onblur='check()'/><div  class="require-field" id='span1' style="display:none;">两次密码输入不同，请检查！</div></td>
  </tr>
  <tr>
    <td>确认密码:</td>
    <td><input type="password" name="repass" maxlength="20" size="20" id='cc1' onblur='check()'/><span class="require-field">*</span></td>
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
<br>			
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
	
</body>
</html>
<script type='text/javascript'>
  function check()
  {
    var pass1 = document.getElementById('cc1');
    var pass2 = document.getElementById('cc2');
    if(pass1.value!=pass2.value)
    {
        var sp1 = document.getElementById('span1');
        sp1.style.display = 'block';
    }
    if(pass1.value==pass2.value)
    {
        var sp1 = document.getElementById('span1');
        sp1.style.display = 'none';
    }

  }
  function guan()
  {
      var vip1 = document.getElementById('vip1');
      var vip2 = document.getElementById('vip2');
      removeAllChild();
      var score = Math.ceil(vip1.value/2000);
      if(vip1.value>10000)
      {
        score = 5;
      }
      for(var i=0;i<score;i++)
      {
        vip2.innerHTML += '<img src="<?php echo smarty_function_base_url(array('url'=>'public/admin/images/guan.gif'),$_smarty_tpl);?>
">';
      }
     vip2.innerHTML += '<span class="notice-span">每加一级加一个皇冠</span>';
  }

  function removeAllChild()
  {
      var vip2 = document.getElementById("vip2");
      while(vip2.lastChild) //当div下还存在末尾节点时 循环继续
      {
        vip2.removeChild(vip2.lastChild) 
      }
  }
</script><?php }} ?>
