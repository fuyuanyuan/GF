<?php /* Smarty version Smarty-3.1.18, created on 2014-06-15 11:48:59
         compiled from "application\views\admin\role\mof_role.html" */ ?>
<?php /*%%SmartyHeaderCode:10657539d17ab61fca4-75036766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b85c36d568ea377205d53db1c5ff4ec8526aaf7d' => 
    array (
      0 => 'application\\views\\admin\\role\\mof_role.html',
      1 => 1402029262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10657539d17ab61fca4-75036766',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'main_auth' => 0,
    'v' => 0,
    'auth_ids' => 0,
    'son_auth' => 0,
    'sv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_539d17ab7778f0_93872902',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539d17ab7778f0_93872902')) {function content_539d17ab7778f0_93872902($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include 'C:\\AppServ\\www\\GF\\application\\libraries\\Smarty\\plugins\\function.base_url.php';
?><html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>GF_SHOP 管理中心 - 添加新文章 </title>
<meta content="noindex, nofollow" name="robots">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<link type="text/css" rel="stylesheet" href="<?php echo @constant('B_CSS_DIR');?>
general.css">
<link type="text/css" rel="stylesheet" href="<?php echo @constant('B_CSS_DIR');?>
main.css">
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
<span class="action-span"><a href="<?php echo smarty_function_base_url(array('url'=>'admin/role/showlist'),$_smarty_tpl);?>
">角色列表</a></span>
<span class="action-span1"><a href="#">GF_SHOP 管理中心</a> </span><span class="action-span1" id="search_id"> - 修改角色</span>
<div style="clear:both"></div>
</h1>
<script src="<?php echo @constant('B_JS_DIR');?>
utils.js" type="text/javascript"></script><script src="<?php echo @constant('B_JS_DIR');?>
selectzone.js" type="text/javascript"></script><script src="<?php echo @constant('B_JS_DIR');?>
validator.js" type="text/javascript"></script><!-- start goods form -->
<div class="tab-div">
  <div id="tabbar-div" class="tab-front">
    <p>
      <span id="general-tab" class="tab-back">角色详情</span>
    </p>
  </div>

  <div id="tabbody-div">
    <form name="theForm"  method="post" action="<?php echo smarty_function_base_url(array('url'=>'admin/role/mof_role'),$_smarty_tpl);?>
">
    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['info']->value->role_id;?>
" name="role_id" />
    <table width="90%" id="general-table" style="display: table;">
      <tbody><tr>
        <td class="narrow-label">角色名称</td>
        <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['info']->value->role_name;?>
" maxlength="60" size="40" name="role_name"><span class="require-field">*</span></td>
      </tr>
      <tr></tr><tr></tr>
      <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['main_auth']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>          
     <tr>
     	<td class="narrow-label"><input type="checkbox" name="role_auth_ids[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value->auth_id;?>
"  val="id<?php echo $_smarty_tpl->tpl_vars['v']->value->auth_id;?>
"  
     	<?php if ((in_array($_smarty_tpl->tpl_vars['v']->value->auth_id,$_smarty_tpl->tpl_vars['auth_ids']->value))) {?>
     		checked="checked"
     	<?php }?>
     	 /><?php echo $_smarty_tpl->tpl_vars['v']->value->auth_name;?>
</td>
     	<td>
     	<?php  $_smarty_tpl->tpl_vars['sv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['son_auth']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sv']->key => $_smarty_tpl->tpl_vars['sv']->value) {
$_smarty_tpl->tpl_vars['sv']->_loop = true;
?>
     	<?php if ($_smarty_tpl->tpl_vars['sv']->value->auth_pid==$_smarty_tpl->tpl_vars['v']->value->auth_id) {?>
     		<input type="checkbox" name="role_auth_ids[]" value="<?php echo $_smarty_tpl->tpl_vars['sv']->value->auth_id;?>
" val="<?php echo $_smarty_tpl->tpl_vars['v']->value->auth_id;?>
" 
     	<?php if ((in_array($_smarty_tpl->tpl_vars['sv']->value->auth_id,$_smarty_tpl->tpl_vars['auth_ids']->value))) {?>
     		checked="checked"
     	<?php }?>
     		  /><?php echo $_smarty_tpl->tpl_vars['sv']->value->auth_name;?>
　
     	<?php }?>
     	<?php }
if (!$_smarty_tpl->tpl_vars['sv']->_loop) {
?>
     		<span>没有子类数据</span>
     	<?php } ?>
     	</td>
     </tr>
	<?php }
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?>
		<span>没有任何数据</span>
	<?php } ?>
    </tbody>
    </table>
  
    <div class="button-div">
      <input type="submit" class="button" value=" 确定 ">
    </div>
    </form>
  </div>

</div>
<!-- end goods form -->

<div id="footer">
共执行 3 个查询，用时 0.080427 秒，Gzip 已禁用，内存占用 2.431 MB<br>
版权所有 &copy; 2005-2012 上海商派网络科技有限公司，并保留所有权利。</div>
</body></html><?php }} ?>
