<?php /* Smarty version Smarty-3.1.18, created on 2014-06-12 14:29:51
         compiled from "application\views\admin\welcome\index.html" */ ?>
<?php /*%%SmartyHeaderCode:8181539948dfcfacb6-70424287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8112a532be14ff8ae27ddd7bd2d5bb13c8ab7e52' => 
    array (
      0 => 'application\\views\\admin\\welcome\\index.html',
      1 => 1400903738,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8181539948dfcfacb6-70424287',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_539948dfd876d0_67789025',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539948dfd876d0_67789025')) {function content_539948dfd876d0_67789025($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include 'C:\\AppServ\\www\\GF\\application\\libraries\\Smarty\\plugins\\function.base_url.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>后台</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="Text/Javascript" language="JavaScript">
<!--

if (window.top != window)
{ 
  window.top.location.href = document.location.href;
}

//-->
</script>

<frameset rows="76,*" framespacing="0" border="0">
  <frame src="<?php echo smarty_function_base_url(array('url'=>'admin/welcome/top'),$_smarty_tpl);?>
" id="header-frame" name="header-frame" frameborder="no" scrolling="no">
  <frameset cols="180, 10, *" framespacing="0" border="0" id="frame-body">
    <frame src="<?php echo smarty_function_base_url(array('url'=>'admin/welcome/menu'),$_smarty_tpl);?>
" id="menu-frame" name="menu-frame" frameborder="no" scrolling="yes">
    <frame src="<?php echo smarty_function_base_url(array('url'=>'admin/welcome/drag'),$_smarty_tpl);?>
" id="drag-frame" name="drag-frame" frameborder="no" scrolling="no">
    <frame src="<?php echo smarty_function_base_url(array('url'=>'admin/welcome/main'),$_smarty_tpl);?>
" id="main-frame" name="main-frame" frameborder="no" scrolling="yes">
  </frameset>
</frameset>
  <frameset rows="0, 0" framespacing="0" border="0">
 
  </frameset>
</head>
<body>
</body>
</html><?php }} ?>
