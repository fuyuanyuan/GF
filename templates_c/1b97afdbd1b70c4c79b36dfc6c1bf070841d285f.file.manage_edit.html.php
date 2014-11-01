<?php /* Smarty version Smarty-3.1.18, created on 2014-06-15 17:52:51
         compiled from "application\views\admin\manage\manage_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:22976539d6cf3036e24-01488719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b97afdbd1b70c4c79b36dfc6c1bf070841d285f' => 
    array (
      0 => 'application\\views\\admin\\manage\\manage_edit.html',
      1 => 1402052893,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22976539d6cf3036e24-01488719',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'role' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_539d6cf312cfe0_29007262',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539d6cf312cfe0_29007262')) {function content_539d6cf312cfe0_29007262($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include 'C:\\AppServ\\www\\GF\\application\\libraries\\Smarty\\plugins\\function.base_url.php';
if (!is_callable('smarty_function_site_url')) include 'C:\\AppServ\\www\\GF\\application\\libraries\\Smarty\\plugins\\function.site_url.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 编辑管理员账号 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo smarty_function_base_url(array('url'=>'public/admin/styles/general.css'),$_smarty_tpl);?>
" rel="stylesheet" type="text/css" />
<link href="<?php echo smarty_function_base_url(array('url'=>'public/admin/styles/main.css'),$_smarty_tpl);?>
" rel="stylesheet" type="text/css" />

</head>
<body>

<h1>
<span class="action-span"><a href="<?php echo smarty_function_base_url(array('url'=>'admin/manage/showlist'),$_smarty_tpl);?>
">管理员列表</a></span>
<span class="action-span1"><a href="<?php echo smarty_function_base_url(array('url'=>'admin/welcome'),$_smarty_tpl);?>
">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 编辑管理员账号 </span>
<div style="clear:both"></div>
</h1>
<div class="main-div">
<form method="post" action="<?php echo smarty_function_site_url(array('url'=>'admin/user/edit'),$_smarty_tpl);?>
" name="theForm" onsubmit="return validate()">
  <input type='hidden' name='user_id' value="<?php echo $_smarty_tpl->tpl_vars['info']->value->mg_id;?>
">
<table width="100%" >
  <tr>
    <td class="label">管理员名称：</td>
    <td><?php echo $_smarty_tpl->tpl_vars['info']->value->mg_name;?>
<input type="hidden" name="user_name" value="<?php echo $_smarty_tpl->tpl_vars['info']->value->mg_name;?>
" /></td>
  </tr>
  <tr>
    <td class="label">管理角色：</td>
    <td>
    	<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['role']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
    		<input type="radio" value="<?php echo $_smarty_tpl->tpl_vars['value']->value->role_id;?>
" name="mg_role_id"
    			<?php if (($_smarty_tpl->tpl_vars['value']->value->role_id==$_smarty_tpl->tpl_vars['info']->value->mg_role_id)) {?>
    				checked="checked"
    			<?php }?>
    		 /><?php echo $_smarty_tpl->tpl_vars['value']->value->role_name;?>

    	<?php } ?>
    </td>
  </tr>
    
  <tr>
    <td colspan="2" align="center">
      <input type="submit" value=" 确定 " class="button" />
      <input type="reset" value=" 重置 " class="button" />
      </td>
  </tr>
</table>

</form>
</div>
<div id="footer">
	版权所有 &copy; 2012-2013 传智播客 - PHP培训 - 
</div>


</body>
</html><?php }} ?>
