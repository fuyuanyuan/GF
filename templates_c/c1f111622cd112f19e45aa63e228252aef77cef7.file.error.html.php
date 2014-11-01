<?php /* Smarty version Smarty-3.1.18, created on 2014-06-12 13:59:58
         compiled from "application\views\public\error.html" */ ?>
<?php /*%%SmartyHeaderCode:9868539941de761497-02644779%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1f111622cd112f19e45aa63e228252aef77cef7' => 
    array (
      0 => 'application\\views\\public\\error.html',
      1 => 1401984934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9868539941de761497-02644779',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'errors' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_539941de84ba98_02802344',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539941de84ba98_02802344')) {function content_539941de84ba98_02802344($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include 'C:\\AppServ\\www\\GF\\application\\libraries\\Smarty\\plugins\\function.base_url.php';
?><html>
<head>
<title>错误提示</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta content='2;url=<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
' http-equiv='Refresh'>
<link rel="stylesheet" href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
public/admin/styles/error.css" style="text/css" />
</head>
<body>

	<div id="show_error">
		<div class="error_msg">
			<?php echo $_smarty_tpl->tpl_vars['errors']->value;?>

		</div>
		<div class="error_re">
			<p>页面将于3秒后自动返回前页面，</p>
			<p>　　　　　　您也可以直接点击<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" ><span>这里</span></a>直接返回！</p>
		</div>
	</div>

</body>
</html><?php }} ?>
