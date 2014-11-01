<?php /* Smarty version Smarty-3.1.18, created on 2014-06-15 11:47:30
         compiled from "application\views\admin\auth\add.html" */ ?>
<?php /*%%SmartyHeaderCode:31520539d1752a653f1-51496753%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0034cd54b9f784e6f324fc771f3c09cdb64a722' => 
    array (
      0 => 'application\\views\\admin\\auth\\add.html',
      1 => 1402291266,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31520539d1752a653f1-51496753',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'auths' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_539d1752b67137_37679951',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539d1752b67137_37679951')) {function content_539d1752b67137_37679951($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include 'C:\\AppServ\\www\\GF\\application\\libraries\\Smarty\\plugins\\function.base_url.php';
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
<span class="action-span"><a href="<?php echo smarty_function_base_url(array('url'=>'admin/auth/showlist'),$_smarty_tpl);?>
">权限列表</a></span>
<span class="action-span1"><a href="#">GF_SHOP 管理中心</a> </span><span class="action-span1" id="search_id"> - 添加新权限</span>
<div style="clear:both"></div>
</h1>
<script src="<?php echo @constant('B_JS_DIR');?>
utils.js" type="text/javascript"></script><script src="<?php echo @constant('B_JS_DIR');?>
selectzone.js" type="text/javascript"></script><script src="<?php echo @constant('B_JS_DIR');?>
validator.js" type="text/javascript"></script><!-- start goods form -->
<div class="tab-div">
  <div id="tabbar-div" class="tab-front">
    <p>
      <span id="general-tab" class="tab-back">权限详情</span>
    </p>
  </div>

  <div id="tabbody-div">
    <form name="theForm"  method="post" action="<?php echo smarty_function_base_url(array('url'=>'admin/auth/add'),$_smarty_tpl);?>
">
    <table width="90%" id="general-table" style="display: table;">
      <tbody><tr>
        <td class="narrow-label">权限名称</td>
        <td><input type="text" value="" maxlength="60" size="40" name="auth_name"><span class="require-field">*</span></td>
      </tr>          
      <tr>
        <td class="narrow-label">所属类别</td>
        <td>
			<select name="auth_pid" id="auth_select">
				<option value="0">--添加为主类--</option>
				<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['auths']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value->auth_id;?>
"><?php echo str_repeat('　　',$_smarty_tpl->tpl_vars['value']->value->auth_level);?>
<?php echo $_smarty_tpl->tpl_vars['value']->value->auth_name;?>
</option>
				<?php } ?>
			</select>
        </td>
      </tr>
      <tr>
        <td class="narrow-label">控制器名</td>
        <td><input type="text" value="" maxlength="60" name="auth_c" id="auth_c"><span class="require-field">*</span></td>
      </tr>
      <tr>
        <td class="narrow-label">方法名</td>
        <td><input type="text" value="" maxlength="60" name="auth_a" id="auth_a"><span class="require-field">*</span></td>
      </tr>
      <tr>
        <td class="narrow-label">是否菜单栏展示</td>
        <td>
        	<input type="radio" name="is_show" value="0" checked="checked" />是
        	<input type="radio" name="is_show" value="1" />否
        	<span class="require-field">修改，删除操作请不要展示*</span>
        </td>
      </tr>
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
