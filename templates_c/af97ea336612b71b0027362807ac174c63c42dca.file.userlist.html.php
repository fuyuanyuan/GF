<?php /* Smarty version Smarty-3.1.18, created on 2014-06-12 21:20:51
         compiled from "application\views\admin\user\userlist.html" */ ?>
<?php /*%%SmartyHeaderCode:108575399a933d5e4c7-82453606%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af97ea336612b71b0027362807ac174c63c42dca' => 
    array (
      0 => 'application\\views\\admin\\user\\userlist.html',
      1 => 1401289663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108575399a933d5e4c7-82453606',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'intro_type' => 0,
    'userlist' => 0,
    'row' => 0,
    'num_li' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5399a9340cf7e5_92808658',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5399a9340cf7e5_92808658')) {function content_5399a9340cf7e5_92808658($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include 'C:\\AppServ\\www\\GF\\application\\libraries\\Smarty\\plugins\\function.base_url.php';
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
	<span class="action-span1"><a href="">SHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 会员列表 </span>
	<div style="clear:both"></div>
</h1>

<div class="form-div">
  <form action="<?php echo smarty_function_base_url(array('url'=>'admin/user/userlist'),$_smarty_tpl);?>
"  name="searchForm" method="post">
    <img src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
public/admin/images/icon_search.gif" width="26" height="22" border="0" alt="SEARCH">
  
    <!-- 已禁用 -->
    <select name="intro_type" class="intro_type">
		<option value="0" 
			<?php if (($_smarty_tpl->tpl_vars['intro_type']->value=='0')) {?>
				selected = "selected"
			<?php }?>
		>全部</option>
		<option value="1" 			
		<?php if (($_smarty_tpl->tpl_vars['intro_type']->value=='1')) {?>
				selected = "selected"
		<?php }?>
		>已禁用用户</option>
		<option value="2"
			<?php if (($_smarty_tpl->tpl_vars['intro_type']->value=='2')) {?>
				selected = "selected"
			<?php }?>
		>正常用户</option>
	</select>
         
	<!-- 关键字 -->
		关键字 <input type="text" name="keyword" size="15">
		<input type="submit" value=" 搜索 " class="button" name="send">
  </form>
</div>

<form method="post" action="<?php echo smarty_function_base_url(array('url'=>'admin/user/stops'),$_smarty_tpl);?>
" name="listForm" onsubmit="return confirmSubmit(this)">
  <!-- start goods list -->
	<div class="list-div" id="listDiv">
		<table cellpadding="3" cellspacing="1">
			<tbody>
				<tr>
					<th><input type="checkbox" class="mainBox">编号</th>
					<th>用户名</th>
					<th>用户昵称</th>
					<th>性别</th>
					<th>出生年月</th>
					<th>积分</th>
					<th>vip等级</th>
					<th>邮箱</th>
					<th>注册时间</th>
					<th>是否禁用</th>
					<th>操作</th>
				</tr>
				<tr></tr>
				<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['row']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['row']->index++;
?>
				<tr>
					<td><input type="checkbox" name="ids[]" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->user_id;?>
"><?php echo $_smarty_tpl->tpl_vars['num_li']->value+$_smarty_tpl->tpl_vars['row']->index;?>
</td>
					<td class="first-cell"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['row']->value->user_name)===null||$tmp==='' ? '未填写' : $tmp);?>
</td>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['row']->value->user_alias;?>
</td>
					<td align="center"><?php if ($_smarty_tpl->tpl_vars['row']->value->user_sex==0) {?>男<?php } else { ?>女<?php }?></td>
					<td align="center"><?php if (($_smarty_tpl->tpl_vars['row']->value->user_birthday==0)) {?>未填写<?php } else { ?><?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['row']->value->user_birthday);?>
<?php }?></td>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['row']->value->user_inte;?>
</td>
					<td align="center"><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['name'] = 'loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] = is_array($_loop=($_smarty_tpl->tpl_vars['row']->value->user_inte/2000)>5 ? 5 : ceil($_smarty_tpl->tpl_vars['row']->value->user_inte/2000)) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total']);
?> <img src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
public/admin/images/guan.gif" onclick=""><?php endfor; endif; ?></td>
					<td align="center"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['row']->value->user_email)===null||$tmp==='' ? '未填写' : $tmp);?>
</td>
					<td align="center"><?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['row']->value->user_reg_time);?>
</td>
					<td align="center">
						<?php if ($_smarty_tpl->tpl_vars['row']->value->user_flag==0) {?><a href="<?php echo smarty_function_base_url(array('url'=>'admin/user/stop'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value->user_id;?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value->user_flag;?>
" title="未禁用，禁用此用户"><img src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
public/admin/images/no.gif" ></a>
						<?php } else { ?><a href="<?php echo smarty_function_base_url(array('url'=>'admin/user/restop'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value->user_id;?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value->user_flag;?>
" title="已禁用，恢复用户权限"><img src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
public/admin/images/yes.gif"></a><?php }?>
					</td>
					<td align="center">
						<a href="<?php echo smarty_function_base_url(array('url'=>'admin/user/detail'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value->user_id;?>
" target="_blank" title="查看"><img src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
public/admin/images/icon_view.gif" width="16" height="16" border="0"></a>
						<a href="<?php echo smarty_function_base_url(array('url'=>'admin/user/edit'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value->user_id;?>
" title="编辑"><img src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
public/admin/images/icon_edit.gif" width="16" height="16" border="0"></a>
						
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

<div>
	<select name="type" id='sel' onchange="change()" >
		<option value="0">请选择...</option>
		<option value="stop">批量禁用</option>
		<option value="restop">批量恢复</option>
	</select>
    <input type="submit" value=" 确定 " id="sub" class="button" disabled="true">
</div>
</form>

<div id="footer">
	版权所有 &copy; 2012-2013 传智播客 - PHP培训 - 
</div>

</body>
</html>
<script type='text/javascript'>
	function change()
	{
		var sel = document.getElementById('sel');
		var sub = document.getElementById('sub');
		if(sel.value != 0)
		{
			sub.disabled = '';
		}
		if(sel.value == 0)
		{
			sub.disabled = 'true';
		}
	}
</script><?php }} ?>
