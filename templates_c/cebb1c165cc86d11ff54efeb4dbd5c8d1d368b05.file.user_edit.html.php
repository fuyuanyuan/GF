<?php /* Smarty version Smarty-3.1.18, created on 2014-06-15 15:29:50
         compiled from "application\views\admin\user\user_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:12956539d4b6e227c50-68080353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cebb1c165cc86d11ff54efeb4dbd5c8d1d368b05' => 
    array (
      0 => 'application\\views\\admin\\user\\user_edit.html',
      1 => 1401192556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12956539d4b6e227c50-68080353',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_539d4b6e302886_49169565',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539d4b6e302886_49169565')) {function content_539d4b6e302886_49169565($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include 'C:\\AppServ\\www\\GF\\application\\libraries\\Smarty\\plugins\\function.base_url.php';
if (!is_callable('smarty_function_site_url')) include 'C:\\AppServ\\www\\GF\\application\\libraries\\Smarty\\plugins\\function.site_url.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 编辑会员账号 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo smarty_function_base_url(array('url'=>'public/admin/styles/general.css'),$_smarty_tpl);?>
" rel="stylesheet" type="text/css" />
<link href="<?php echo smarty_function_base_url(array('url'=>'public/admin/styles/main.css'),$_smarty_tpl);?>
" rel="stylesheet" type="text/css" />

</head>
<body onload='guan()'>

<h1>
<span class="action-span"><a href="<?php echo smarty_function_base_url(array('url'=>'admin/user/userlist'),$_smarty_tpl);?>
">会员列表</a></span>
<span class="action-span1"><a href="<?php echo smarty_function_base_url(array('url'=>'admin/welcome'),$_smarty_tpl);?>
">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 编辑会员账号 </span>
<div style="clear:both"></div>
</h1>
<div class="main-div">
<form method="post" action="<?php echo smarty_function_site_url(array('url'=>'admin/user/edit'),$_smarty_tpl);?>
" name="theForm" onsubmit="return validate()">
  <input type='hidden' name='user_id' value="<?php echo $_smarty_tpl->tpl_vars['row']->value->user_id;?>
">
<table width="100%" >
  <tr>
    <td class="label">会员名称:</td>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value->user_name;?>
<input type="hidden" name="user_name" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->user_name;?>
" /></td>
  </tr>
  <tr>
    <td class="label">会员昵称:</td>
    <td><input type="text" name="user_alias" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->user_alias;?>
" /></td>
  </tr>
   <tr>
    <td class="label">性别:</td>
    <td><?php if ($_smarty_tpl->tpl_vars['row']->value->user_sex==0) {?><input type="radio" name="user_sex" value="0" checked>&nbsp;男&nbsp;<input type="radio" name="user_sex" value="1">&nbsp;女&nbsp;<?php } else { ?><input type="radio" name="user_sex" value="0">&nbsp;男&nbsp;<input type="radio" name="user_sex" value="1" checked>&nbsp;女&nbsp;<?php }?></td>
  </tr>
  <tr>
    <td class="label">出生日期:</td>
    <td><input type='text' name='user_birthday' value='<?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['row']->value->user_birthday);?>
'></td>
  </tr>
  <tr>
    <td class="label"><img src="<?php echo smarty_function_base_url(array('url'=>'public/admin/images/notice.gif'),$_smarty_tpl);?>
" width="16" height="16" border="0"> 等级积分:</td>
    <td><input type='text' name='user_inte' value='<?php echo $_smarty_tpl->tpl_vars['row']->value->user_inte;?>
' onblur='guan()' id='vip1'><span class="notice-span" style="display:block"  id="noticeRankPoints">等级积分是一种累计的积分，系统根据该积分来判定用户的会员等级（购物金额一元赠送一个积分）。</span></td>
  </tr>
   <tr>
    <td class="label">会员等级:</td>
    <td id='vip2'>&nbsp;&nbsp;</td>
  </tr>
  </tr>
  
    <tr>
    <td class="label">邮件地址:</td>
    <td><input type="text" name="user_email" maxlength="60" size="40" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->user_email;?>
" /><span class="require-field">*</span></td>
  </tr>
    
 <div></div>

  <tr>
    <td class="label">新密码:</td>
    <td><input type="password" name="user_pass" maxlength="20" size="20" id='cc2' onblur='check()'/><div  class="require-field" id='span1' style="display:none;">两次密码输入不同，请检查！</div></td>
  </tr>
  <tr>
    <td class="label">确认密码:</td>
    <td><input type="password" name="repass" maxlength="20" size="20" id='cc1' onblur='check()'/><span class="require-field">*</span></td>
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
</html>
<script type='text/javascript'>
  function check()
  {
    var pass1 = document.getElementById('cc1');
    var pass2 = document.getElementById('cc2');
    if(pass1.value!=pass2.value)
    {
        var sp1 = document.getElementById('span1');
        sp1.style.display = 'block';
    }
    if(pass1.value==pass2.value)
    {
        var sp1 = document.getElementById('span1');
        sp1.style.display = 'none';
    }

  }
  function guan()
  {
      var vip1 = document.getElementById('vip1');
      var vip2 = document.getElementById('vip2');
      removeAllChild();
      var score = Math.ceil(vip1.value/2000);
      if(vip1.value>10000)
      {
        score = 5;
      }
      for(var i=0;i<score;i++)
      {
        vip2.innerHTML += '<img src="<?php echo smarty_function_base_url(array('url'=>'public/admin/images/guan.gif'),$_smarty_tpl);?>
">';
      }
     vip2.innerHTML += '<span class="notice-span">每加一级加一个皇冠</span>';
  }

  function removeAllChild()
  {
      var vip2 = document.getElementById("vip2");
      while(vip2.lastChild) //当div下还存在末尾节点时 循环继续
      {
        vip2.removeChild(vip2.lastChild) 
      }
  }
</script><?php }} ?>
