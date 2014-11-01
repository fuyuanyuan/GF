<?php /* Smarty version Smarty-3.1.18, created on 2014-06-15 11:57:14
         compiled from "application\views\admin\pinglun\pingedit.html" */ ?>
<?php /*%%SmartyHeaderCode:15016539d199af1a049-44144267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fb2895796c2320234003023f844bc81f66f24bb' => 
    array (
      0 => 'application\\views\\admin\\pinglun\\pingedit.html',
      1 => 1402803801,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15016539d199af1a049-44144267',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'crow' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_539d199b08b761_67938052',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539d199b08b761_67938052')) {function content_539d199b08b761_67938052($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include 'C:\\AppServ\\www\\GF\\application\\libraries\\Smarty\\plugins\\function.base_url.php';
?><html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>ECSHOP 管理中心 - 修改评论 </title>
<meta content="noindex, nofollow" name="robots">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<link type="text/css" rel="stylesheet" href="<?php echo smarty_function_base_url(array('url'=>'public/admin/styles/general.css'),$_smarty_tpl);?>
">
<link type="text/css" rel="stylesheet" href="<?php echo smarty_function_base_url(array('url'=>'public/admin/styles/main.css'),$_smarty_tpl);?>
">
<script type='text/javascript' src="<?php echo smarty_function_base_url(array('url'=>'public/admin/js/jquery.js'),$_smarty_tpl);?>
"></script>
</head>
<body style="cursor: auto;">

<h1>
<span class="action-span"><a href="<?php echo smarty_function_base_url(array('url'=>'admin/pinglun/show'),$_smarty_tpl);?>
">评论列表</a></span>
<span class="action-span1"><a href="<?php echo smarty_function_base_url(array('url'=>'admin/welcome'),$_smarty_tpl);?>
">ECSHOP 管理中心</a> </span><span class="action-span1" id="search_id"> - 修改评论</span>
<div style="clear:both"></div>
</h1>
<div class="main-div">
  <form name="theForm" method="post" action="<?php echo smarty_function_base_url(array('url'=>'admin/pinglun/add'),$_smarty_tpl);?>
">
  <table width="100%" id="general-table">
      <tbody>
        <tr>
        <td class="label">所属商品id</td>
        <td>
          <input type="text" size="10" value="<?php echo $_smarty_tpl->tpl_vars['crow']->value->goods_id;?>
" name="goods_id">
          <span class="require-field">*</span>        
        </td>
      </tr>
      <tr>
        <td class="label">用户id</td>
        <td>
          <input type="text" size="10" value="<?php echo $_smarty_tpl->tpl_vars['crow']->value->user_id;?>
" name="user_id">
          <span class="require-field">*</span>        
        </td>
      </tr>
      <tr>
        <td class="label">用户名：</td>
        <td>
           <input type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['crow']->value->user_name;?>
" name="user_name">
		    </td>
      </tr>
      <tr>
        <td class="label">评价等级</td>
       <td>
        <input type="text" size="10" value="<?php echo $_smarty_tpl->tpl_vars['crow']->value->comment_xing;?>
" name="comment_xing"><span>共5级，1,2,3,4,5</span>
        </td>
      </tr>
      <tr>
         <td class="label">满意度</td>
          <td>
             <select name="comment_rank">
              <option value="0" <?php if ($_smarty_tpl->tpl_vars['crow']->value->comment_rank==0) {?>selected<?php }?>>好评</option>
              <option value="1" <?php if ($_smarty_tpl->tpl_vars['crow']->value->comment_rank==1) {?>selected<?php }?>>中评</option>
              <option value="2" <?php if ($_smarty_tpl->tpl_vars['crow']->value->comment_rank==2) {?>selected<?php }?>>差评</option>
             </select><span class="require-field">*</span>
          </td>
      </tr>
     <tr>
        <td class="label">评论内容：</td>
        <td>
           <textarea name='content'><?php echo $_smarty_tpl->tpl_vars['crow']->value->content;?>
</textarea>
        </td>
      </tr>
      <tr>
        <td colspan="2">
        <div class="button-div">
          <input type="submit" class="button" value=" 确定 ">
          <input type="reset" class="button" value=" 重置 ">
        </div>
        </td>
      </tr>
      </tbody></table>
  </form>
</div>
<div id="footer">
  版权所有 &copy; 2012-2013 传智播客 - PHP培训 - 
</div>
</body></html>
<?php }} ?>
