<?php /* Smarty version Smarty-3.1.18, created on 2014-06-15 12:30:42
         compiled from "application\views\welcome\edit_center.html" */ ?>
<?php /*%%SmartyHeaderCode:25152539d21726f7487-38587542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cbb19ae8e2a5343ea8242df023a2cd6f550098a' => 
    array (
      0 => 'application\\views\\welcome\\edit_center.html',
      1 => 1402806571,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25152539d21726f7487-38587542',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_539d21727938a5_18590868',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539d21727938a5_18590868')) {function content_539d21727938a5_18590868($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include 'C:\\AppServ\\www\\GF\\application\\libraries\\Smarty\\plugins\\function.base_url.php';
?><?php echo $_smarty_tpl->getSubTemplate ("./header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
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
<?php echo $_smarty_tpl->getSubTemplate ("./footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
