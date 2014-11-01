<?php /* Smarty version Smarty-3.1.18, created on 2014-06-12 14:29:52
         compiled from "application\views\admin\welcome\menu.html" */ ?>
<?php /*%%SmartyHeaderCode:14942539948e048ea58-09682936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90f909b1867c5925ac4282cde2715e30ed416f0c' => 
    array (
      0 => 'application\\views\\admin\\welcome\\menu.html',
      1 => 1402292647,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14942539948e048ea58-09682936',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'main_auth' => 0,
    'value' => 0,
    'son_auth' => 0,
    'vv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_539948e06154a2_03013863',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539948e06154a2_03013863')) {function content_539948e06154a2_03013863($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include 'C:\\AppServ\\www\\GF\\application\\libraries\\Smarty\\plugins\\function.base_url.php';
?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP Menu</title>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<link type="text/css" rel="stylesheet" href="<?php echo @constant('B_CSS_DIR');?>
general.css">
<style type="text/css">
body {
	background: #80BDCB;
}

#tabbar-div {
	background: #278296;
	padding-left: 10px;
	height: 21px;
	padding-top: 0px;
}

#tabbar-div p {
	margin: 1px 0 0 0;
}

.tab-front {
	background: #80BDCB;
	line-height: 20px;
	font-weight: bold;
	padding: 4px 15px 4px 18px;
	border-right: 2px solid #335b64;
	cursor: hand;
	cursor: pointer;
}

.tab-back {
	color: #F4FAFB;
	line-height: 20px;
	padding: 4px 15px 4px 18px;
	cursor: hand;
	cursor: pointer;
}

.tab-hover {
	color: #F4FAFB;
	line-height: 20px;
	padding: 4px 15px 4px 18px;
	cursor: hand;
	cursor: pointer;
	background: #2F9DB5;
}

#top-div {
	padding: 3px 0 2px;
	background: #BBDDE5;
	margin: 5px;
	text-align: center;
}

#main-div {
	border: 1px solid #345C65;
	padding: 5px;
	margin: 5px;
	background: #FFF;
}

#menu-list {
	padding: 0;
	margin: 0;
}

#menu-list ul {
	padding: 0;
	margin: 0;
	list-style-type: none;
	color: #335B64;
}

#menu-list li {
	padding-left: 16px;
	line-height: 16px;
	cursor: hand;
	cursor: pointer;
}

#main-div a:visited,#menu-list a:link,#menu-list a:hover {
	color: #335B64 text-decoration:  none;
}

#menu-list a:active {
	color: #EB8A3D;
}

.explode {
	background: url(<?php echo @constant('B_IMG_DIR');?>
menu_minus.gif) no-repeat 0px 3px;
	font-weight: bold;
}

.collapse {
	background: url(<?php echo @constant('B_IMG_DIR');?>
menu_plus.gif) no-repeat 0px 3px;
	font-weight: bold;
}

.menu-item {
	background: url(<?php echo @constant('B_IMG_DIR');?>
menu_arrow.gif) no-repeat 0px 3px;
	font-weight: normal;
}

#help-title {
	font-size: 14px;
	color: #000080;
	margin: 5px 0;
	padding: 0px;
}

#help-content {
	margin: 0;
	padding: 0;
}

.tips {
	color: #CC0000;
}

.link {
	color: #000099;
}
</style>

</head>
<body style="cursor: auto;">
	<div id="tabbar-div">
		<p>
			<span style="float: right; padding: 3px 5px;"><a
				href="javascript:toggleCollapse();"><img width="9" height="9"
					border="0" alt="闭合" src="<?php echo @constant('B_IMG_DIR');?>
menu_minus.gif" id="toggleImg"></a></span>
			<span id="menu-tab" class="tab-front">菜单</span>
		</p>
	</div>
	<div id="main-div">
		<div id="menu-list">
			<ul id="menu-ul">
				<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['main_auth']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
				<li name="menu" key="02_cat_and_goods" class="explode">
				<?php echo $_smarty_tpl->tpl_vars['value']->value->auth_name;?>

					<ul>
						<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['son_auth']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>
						<?php if (($_smarty_tpl->tpl_vars['vv']->value->auth_pid==$_smarty_tpl->tpl_vars['value']->value->auth_id&&$_smarty_tpl->tpl_vars['vv']->value->is_show==0)) {?>
						<li class="menu-item"><a target="main-frame" href="<?php echo smarty_function_base_url(array('url'=>'admin'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['vv']->value->auth_c;?>
/<?php echo $_smarty_tpl->tpl_vars['vv']->value->auth_a;?>
"><?php echo $_smarty_tpl->tpl_vars['vv']->value->auth_name;?>
</a></li>
						<?php }?>
						<?php } ?>
					</ul>
				</li>
				<?php } ?>
			</ul>
		</div>
		<div style="display: none" id="help-div">
			<h1 id="help-title"></h1>
			<div id="help-content"></div>
		</div>
	</div>
</body>
</html><?php }} ?>
