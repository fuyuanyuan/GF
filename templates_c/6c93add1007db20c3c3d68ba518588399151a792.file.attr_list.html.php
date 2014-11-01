<?php /* Smarty version Smarty-3.1.18, created on 2014-06-12 14:29:57
         compiled from "application\views\admin\attr\attr_list.html" */ ?>
<?php /*%%SmartyHeaderCode:15979539948e508c5c4-60527344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c93add1007db20c3c3d68ba518588399151a792' => 
    array (
      0 => 'application\\views\\admin\\attr\\attr_list.html',
      1 => 1401529304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15979539948e508c5c4-60527344',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_539948e5163379_44105035',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539948e5163379_44105035')) {function content_539948e5163379_44105035($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include 'C:\\AppServ\\www\\GF\\application\\libraries\\Smarty\\plugins\\function.base_url.php';
?><html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>ECSHOP 管理中心 - 商品分类 </title>
<meta content="noindex, nofollow" name="robots">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<link type="text/css" rel="stylesheet" href="<?php echo smarty_function_base_url(array('url'=>'public/admin/styles/general.css'),$_smarty_tpl);?>
">
<link type="text/css" rel="stylesheet" href="<?php echo smarty_function_base_url(array('url'=>'public/admin/styles/main.css'),$_smarty_tpl);?>
">
</head>
<body style="cursor: auto;">

<h1>
<span class="action-span"><a href="<?php echo smarty_function_base_url(array('url'=>'admin/attribute/attradd'),$_smarty_tpl);?>
">添加属性</a></span>
<span class="action-span1"><a href="#">ECSHOP 管理中心</a> </span><span class="action-span1" id="search_id"> - 商品属性 </span>
<div style="clear:both"></div>
</h1>

<form name="listForm" action="" method="post">
<!-- start ad position list -->
<div id="listDiv" class="list-div">

<table width="100%" cellspacing="1" cellpadding="2" id="list-table">
  <tbody><tr>
    <th>属性ID</th>
    <th>属性名</th>
    <th>类型</th>
    <th>值列表</th>
	<th>是否上架</th>
	<th>操作</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
  <tr align="center" id="0_6" class="0">
    <td class="first-cell"><?php echo $_smarty_tpl->tpl_vars['row']->value->attr_id;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value->attr_name;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value->attr_type;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value->attr_values;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value->is_filter;?>
</td>
    <td>
      <a href="<?php echo smarty_function_base_url(array('url'=>'admin/attribute/attredit'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value->attr_id;?>
">编辑</a> |
      <a title="移除" href="<?php echo smarty_function_base_url(array('url'=>'admin/attribute/attrdel'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value->attr_id;?>
" onclick="return confirm('确定删除？');">移除</a>
    </td>
  </tr>
  <?php } ?>
</table>
</div>
</form>

<div id="footer">
&copy;Ecshop, Thank You!
</div>
<div id="footer">
  版权所有 &copy; 2012-2013 传智播客 - PHP培训 - 
</div>
</body></html><?php }} ?>
