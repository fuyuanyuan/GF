<?php /* Smarty version Smarty-3.1.18, created on 2014-06-12 14:29:52
         compiled from "application\views\admin\welcome\top.html" */ ?>
<?php /*%%SmartyHeaderCode:14942539948e048abd5-12673586%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f28743bbc7da704d9a6bacb9e3d473259ae36e8d' => 
    array (
      0 => 'application\\views\\admin\\welcome\\top.html',
      1 => 1402033451,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14942539948e048abd5-12673586',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'auth_role' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_539948e0580d86_49061969',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539948e0580d86_49061969')) {function content_539948e0580d86_49061969($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include 'C:\\AppServ\\www\\GF\\application\\libraries\\Smarty\\plugins\\function.base_url.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo @constant('B_CSS_DIR');?>
general.css" rel="stylesheet" type="text/css" />


<style type="text/css">
#header-div {
  background: #278296;
  border-bottom: 1px solid #FFF;
}

#logo-div {
  height: 50px;
  float: left;
}

#license-div {
  height: 50px;
  float: left;
  text-align:center;
  vertical-align:middle;
  line-height:50px;
}

#license-div a:visited, #license-div a:link {
  color: #EB8A3D;
}

#license-div a:hover {
  text-decoration: none;
  color: #EB8A3D;
}

#submenu-div {
  height: 50px;
}

#submenu-div ul {
  margin: 0;
  padding: 0;
  list-style-type: none;
}

#submenu-div li {
  float: right;
  padding: 0 10px;
  margin: 3px 0;
  border-left: 1px solid #FFF;
}

#submenu-div a:visited, #submenu-div a:link {
  color: #FFF;
  text-decoration: none;
}

#submenu-div a:hover {
  color: #F5C29A;
}

#loading-div {
  clear: right;
  text-align: right;
  display: block;
}

#menu-div {
  background: #80BDCB;
  font-weight: bold;
  height: 24px;
  line-height:24px;
}

#menu-div ul {
  margin: 0;
  padding: 0;
  list-style-type: none;
}

#menu-div li {
  float: left;
  border-right: 1px solid #192E32;
  border-left:1px solid #BBDDE5;
}

#menu-div a:visited, #menu-div a:link {
  display:block;
  padding: 0 20px;
  text-decoration: none;
  color: #335B64;
  background:#9CCBD6;
}

#menu-div a:hover {
  color: #000;
  background:#80BDCB;
}

#submenu-div a.fix-submenu{ clear:both; margin-left:5px; padding:1px 5px; *padding:3px 5px 5px; background:#DDEEF2; color:#278296;}
#submenu-div a.fix-submenu:hover{ padding:1px 5px; *padding:3px 5px 5px; background:#FFF; color:#278296;}
#menu-div li.fix-spacel{ width:30px; border-left:none;}
#menu-div li.fix-spacer{ border-right:none;}
</style>

</head>
<body>
<div id="header-div">
  <div id="logo-div" style="bgcolor:#000000;"><img src="<?php echo @constant('B_IMG_DIR');?>
ecshop_logo.gif" alt="ECSHOP - power for e-commerce" /></div>
  <div id="license-div" style="bgcolor:#000000;"></div>
  <div id="submenu-div">
    <ul>
      <li><a href="javascript:void(0);">欢迎登陆</a></li>
       <li><a href="javascript:void(0);"><?php echo $_smarty_tpl->tpl_vars['auth_role']->value;?>
</a></li>
       <li><a href="javascript:void(0);"><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</a></li>
    </ul>
    <div id="send_info" style="padding: 5px 10px 0 0; clear:right;text-align: right; color: #FF9900;width:40%;float: right;">
            <a href="index.php?act=clear_cache" target="main-frame" class="fix-submenu">清除缓存</a>
      <a href="<?php echo smarty_function_base_url(array('url'=>'admin/manage/logout'),$_smarty_tpl);?>
" target="_top" class="fix-submenu">退出</a>
    </div>
        <div id="load-div" style="padding: 5px 10px 0 0; text-align: right; color: #FF9900; display: none;width:40%;float:right;"><img src="<?php echo @constant('B_IMG_DIR');?>
top_loader.gif" width="16" height="16" alt="正在处理您的请求..." style="vertical-align: middle" /> 正在处理您的请求...</div>
  </div>
</div>
<div id="menu-div">
  <ul>
    <li class="fix-spacel">&nbsp;</li>
    <li><a href="index.php?act=main" target="main-frame">起始页</a></li>
    <li><a href="privilege.php?act=modif" target="main-frame">设置导航栏</a></li>
        <li><a href="goods.php?act=list" target="main-frame">商品列表</a></li>
        <li><a href="order.php?act=list" target="main-frame">订单列表</a></li>
        <li><a href="comment_manage.php?act=list" target="main-frame">用户评论</a></li>
        <li><a href="users.php?act=list" target="main-frame">会员列表</a></li>
        <li><a href="shop_config.php?act=list_edit" target="main-frame">商店设置</a></li>
        <li class="fix-spacer">&nbsp;</li>
  </ul>
  <br class="clear" />
</div>
</body>
</html><?php }} ?>
