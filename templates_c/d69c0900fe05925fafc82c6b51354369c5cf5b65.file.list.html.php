<?php /* Smarty version Smarty-3.1.18, created on 2014-06-19 09:16:56
         compiled from "application\views\admin\reply\list.html" */ ?>
<?php /*%%SmartyHeaderCode:1325453a23a0872f103-64945267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd69c0900fe05925fafc82c6b51354369c5cf5b65' => 
    array (
      0 => 'application\\views\\admin\\reply\\list.html',
      1 => 1403140582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1325453a23a0872f103-64945267',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'relist' => 0,
    'rrow' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53a23a087dedb0_12272122',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a23a087dedb0_12272122')) {function content_53a23a087dedb0_12272122($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include 'C:\\AppServ\\www\\GF\\application\\libraries\\Smarty\\plugins\\function.base_url.php';
?><html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>ECSHOP 管理中心 - 评论列表 </title>
<meta content="noindex, nofollow" name="robots">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<link type="text/css" rel="stylesheet" href="<?php echo smarty_function_base_url(array('url'=>'public/admin/styles/general.css'),$_smarty_tpl);?>
">
<link type="text/css" rel="stylesheet" href="<?php echo smarty_function_base_url(array('url'=>'public/admin/styles/main.css'),$_smarty_tpl);?>
">
<script type='text/javascript' src='<?php echo smarty_function_base_url(array('url'=>'public/admin/js/jquery.js'),$_smarty_tpl);?>
'></script>
</head>
<body style="cursor: auto;">

<h1>
<span class="action-span"><a href="<?php echo smarty_function_base_url(array('url'=>'admin/pinglun/show'),$_smarty_tpl);?>
">返回评论列表</a></span>
<span class="action-span1"><a href="#">ECSHOP 管理中心</a> </span><span class="action-span1" id="search_id"> - 评论列表 </span>
<div style="clear:both"></div>
</h1>

<!-- start ad position list -->
<div id="listDiv" class="list-div">

<table width="100%" cellspacing="1" cellpadding="2" id="list-table">
  <tbody><tr>
  <th>ID</th>
  <th>所属评论id</th>
  <th>管理员名称</th>
  <th>回复内容</th>
  <th>回复时间</th>
	<th>操作</th>
  </tr>
<?php  $_smarty_tpl->tpl_vars['rrow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rrow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['relist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rrow']->key => $_smarty_tpl->tpl_vars['rrow']->value) {
$_smarty_tpl->tpl_vars['rrow']->_loop = true;
?>
  <tr id="0_6" class="0">
    <td align="center"><?php echo $_smarty_tpl->tpl_vars['rrow']->value->reply_id;?>
</td>
    <td align="center"><?php echo $_smarty_tpl->tpl_vars['rrow']->value->comment_id;?>
</td>
    <td align="center"><?php echo $_smarty_tpl->tpl_vars['rrow']->value->manager_name;?>
</td>
    <td align="center"><?php echo $_smarty_tpl->tpl_vars['rrow']->value->rep_content;?>
</td>
    <td align="center" width=100><?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['rrow']->value->rep_time);?>
</td>
    
    <td align="center" width=60>
      <a href="<?php echo smarty_function_base_url(array('url'=>'admin/reply/edit'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['rrow']->value->comment_id;?>
/<?php echo $_smarty_tpl->tpl_vars['rrow']->value->reply_id;?>
" title="编辑"><img src="<?php echo smarty_function_base_url(array('url'=>'public/admin/images'),$_smarty_tpl);?>
/icon_edit.gif" width="16" height="16" border="0"></a>
      <a href="<?php echo smarty_function_base_url(array('url'=>'admin/reply/del'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['rrow']->value->reply_id;?>
" onclick="confrim('您确实要把该商品放入回收站吗？')" title="回收站"><img src="<?php echo smarty_function_base_url(array('url'=>'public/admin/images'),$_smarty_tpl);?>
/icon_trash.gif" width="16" height="16" border="0"></a>
      </td>
  </tr>
  <?php } ?>
</table>

<table cellspacing="0" id="page-table">
  <tbody><tr>
    <td nowrap="true" align="right" style="background-color: rgb(255, 255, 255);">
	  <div id="turn-page">
        总计  <span id="totalRecords"><<?php ?>?php echo $total;?<?php ?>></span>
        个记录分为 <span id="totalPages"><<?php ?>?php echo $total_page;?<?php ?>></span>
        页当前第 <span id="pageCurrent"><<?php ?>?php echo $page;?<?php ?>></span>
        页，每页 
         
		</select>
        </span>
      </div>
    </td>
  </tr>
</tbody>
</table>
</div>

<div id="footer">
&copy;Ecshop, Thank You!
</div>

</body>
</html>
<?php }} ?>
