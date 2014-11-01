<?php /* Smarty version Smarty-3.1.18, created on 2014-06-19 09:16:53
         compiled from "application\views\admin\reply\add.html" */ ?>
<?php /*%%SmartyHeaderCode:2573953a23a0555d868-58763410%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76e33c62497537f821c87d84c69c530a7a14e849' => 
    array (
      0 => 'application\\views\\admin\\reply\\add.html',
      1 => 1403140582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2573953a23a0555d868-58763410',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cid' => 0,
    'sid' => 0,
    'sname' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53a23a055ced07_46679597',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a23a055ced07_46679597')) {function content_53a23a055ced07_46679597($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include 'C:\\AppServ\\www\\GF\\application\\libraries\\Smarty\\plugins\\function.base_url.php';
?><html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>ECSHOP 管理中心 - 添加评论 </title>
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
<span class="action-span"><a href="<?php echo smarty_function_base_url(array('url'=>'admin/reply/show'),$_smarty_tpl);?>
">回复列表</a></span>
<span class="action-span1"><a href="<?php echo smarty_function_base_url(array('url'=>'admin/welcome'),$_smarty_tpl);?>
">ECSHOP 管理中心</a> </span><span class="action-span1" id="search_id"> - 添加</span>
<div style="clear:both"></div>
</h1>
<div class="main-div">
  <form name="theForm" method="post" action="<?php echo smarty_function_base_url(array('url'=>'admin/reply/add'),$_smarty_tpl);?>
">
    <input type="hidden" size="10" value="<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
" name="comment_id">
    <input type="hidden" size="10" value="<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
" name="manager_id">
    <input type="hidden" size="10" value="<?php echo $_smarty_tpl->tpl_vars['sname']->value;?>
" name="manager_name">
  <table width="100%" id="general-table">
      <tbody>
        <tr>
        <td class="label">所属评论id</td>
        <td>
          <?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
   
        </td>
      </tr>
      <tr>
        <td class="label">管理员ID</td>
        <td>
          <?php echo $_smarty_tpl->tpl_vars['sid']->value;?>

        </td>
      </tr>
      <tr>
        <td class="label">管理员</td>
        <td>
          <?php echo $_smarty_tpl->tpl_vars['sname']->value;?>

		    </td>
      </tr>
     <tr>
        <td class="label">评论内容：</td>
        <td>
           <textarea name='rep_content'></textarea>
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
