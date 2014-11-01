<?php /* Smarty version Smarty-3.1.18, created on 2014-06-15 11:48:56
         compiled from "application\views\admin\role\rolelist.html" */ ?>
<?php /*%%SmartyHeaderCode:23142539d17a88b3502-07523102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b87c94750d6d35a1083b3041493c98610a60125' => 
    array (
      0 => 'application\\views\\admin\\role\\rolelist.html',
      1 => 1402292860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23142539d17a88b3502-07523102',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rolelist' => 0,
    'num_li' => 0,
    'row' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_539d17a8a3ddd5_16847394',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539d17a8a3ddd5_16847394')) {function content_539d17a8a3ddd5_16847394($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include 'C:\\AppServ\\www\\GF\\application\\libraries\\Smarty\\plugins\\function.base_url.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:\\AppServ\\www\\GF\\application\\libraries\\Smarty\\plugins\\modifier.truncate.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
	<link href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
public/admin/styles/general.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
public/admin/styles/jpage.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
public/admin/styles/main.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="<?php echo @constant('B_JS_DIR');?>
jquery.js"></script>
	<script type="text/javascript" src="<?php echo @constant('B_JS_DIR');?>
jPages.js"></script>
	<script type="text/javascript" src="<?php echo @constant('B_JS_DIR');?>
jquery.ui.js"></script>
	<script type="text/javascript" src="<?php echo @constant('B_JS_DIR');?>
jquery.validate.js"></script>
	<script type="text/javascript" src="<?php echo @constant('B_JS_DIR');?>
jquery.form.js"></script>
	<script type="text/javascript" src="<?php echo @constant('B_JS_DIR');?>
my.js"></script>
</head>
<body>
<h1>
<span class="action-span"><a href="<?php echo smarty_function_base_url(array('url'=>'admin/role/add'),$_smarty_tpl);?>
">添加新角色</a></span>
	<span class="action-span1"><a href="">SHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 角色列表 </span>
	<div style="clear:both"></div>
</h1>



         


<form method="post" action="<?php echo smarty_function_base_url(array('url'=>'admin/user/stops'),$_smarty_tpl);?>
" name="listForm" onsubmit="return confirmSubmit(this)">
  <!-- start goods list -->
	<div class="list-div" id="listDiv">
		<table cellpadding="3" cellspacing="1">
			<tbody>
				<tr>
					<th>编号</th>
					<th>角色名称</th>
					<th>控制器-方法名</th>
					<th>操作</th>
				</tr>
				<tr></tr>
				<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rolelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['row']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['row']->index++;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['num_li']->value+$_smarty_tpl->tpl_vars['row']->index;?>
</td>
					<td class="first-cell"><?php echo $_smarty_tpl->tpl_vars['row']->value->role_name;?>
</td>
					<td align="center"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['row']->value->role_auth_ac,80,"...","utf-8");?>
</td>
					<td align="center">
					<a title="查看" target="_blank" href="<?php echo smarty_function_base_url(array('url'=>'admin/role/detail'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value->role_id;?>
"><img width="16" height="16" border="0" src="<?php echo @constant('B_IMG_DIR');?>
icon_view.gif"></a>
						<a href="<?php echo smarty_function_base_url(array('url'=>'admin/role/mof_role'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value->role_id;?>
" title="编辑"><img src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
public/admin/images/icon_edit.gif" width="16" height="16" border="0"></a>
						 <a title="移除" onclick="return confirm('注意：该操作不能撤销！是否确认？')" href="<?php echo smarty_function_base_url(array('url'=>'admin/role/del_role'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value->role_id;?>
"><img width="16" height="16" border="0" src="<?php echo @constant('B_IMG_DIR');?>
icon_drop.gif"></a>
					</td>
				</tr>
				<?php } ?>
	
  </tbody>
 </table>
<!-- end goods list -->

	<!-- 分页 -->
	<table id="page-table" cellspacing="0">
		<tbody>
			<tr>
				<td align="right" nowrap="true" style="background-color: rgb(255, 255, 255);">
					<!-- $Id: page.htm 14216 2008-03-10 02:27:21Z testyang $ -->
					<div id="turn-page">
						<?php echo $_smarty_tpl->tpl_vars['page']->value;?>

					</div>
				</td>
			</tr>
		</tbody>
	</table>
</div>


</form>

<div id="footer">
	版权所有 &copy; 2012-2013 传智播客 - PHP培训 - 
</div>

</body>
</html><?php }} ?>
