<?php /* Smarty version Smarty-3.1.18, created on 2014-06-12 16:26:25
         compiled from "application\views\admin\goods\gd_list.html" */ ?>
<?php /*%%SmartyHeaderCode:103915399643185f2c2-29429386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e647babf6e0df24c815f466fbb9e9cfda05a244c' => 
    array (
      0 => 'application\\views\\admin\\goods\\gd_list.html',
      1 => 1402055622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103915399643185f2c2-29429386',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'goods' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_539964319b6f17_69238346',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539964319b6f17_69238346')) {function content_539964319b6f17_69238346($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include 'C:\\AppServ\\www\\GF\\application\\libraries\\Smarty\\plugins\\function.base_url.php';
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
<span class="action-span1"><a href="#">ECSHOP 管理中心</a> </span><span class="action-span1" id="search_id"> - 商品回收站 </span>
<div style="clear:both"></div>
</h1>

<form name="listForm" action="<?php echo smarty_function_base_url(array('url'=>'admin/goods/gdflags'),$_smarty_tpl);?>
" method="post">
<!-- start ad position list -->
<div id="listDiv" class="list-div">

<table width="100%" cellspacing="1" cellpadding="2" id="list-table">
  <tbody><tr>
  <th>ID</th>
  <th>商品名</th>
  <th>货号</th>
  <th>价格</th>
  <th>商品积分</th>
	<th>上架</th>
	<th>男装</th>
	<th>女装</th>
	<th>排序</th>
	<th>库存</th>
	<th>操作</th>
  </tr>
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
  <tr align="center" id="0_6" class="0">
  <td align="left" class="first-cell" style="background-color: rgb(255, 255, 255);">
	<input type="checkBox" name="ids[]" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->goods_id;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->goods_id;?>

  <input type='hidden' name='goods_promote' value='<?php echo $_smarty_tpl->tpl_vars['row']->value->goods_promote;?>
'>
	</td>
    <td width="" style="background-color: rgb(255, 255, 255);"><?php echo $_smarty_tpl->tpl_vars['row']->value->goods_name;?>
</td>
    <td width="" align="center" style="background-color: rgb(255, 255, 255);"><?php echo $_smarty_tpl->tpl_vars['row']->value->goods_sn;?>
</td>
	<td width="" align="center" style="background-color: rgb(255, 255, 255);"><?php echo $_smarty_tpl->tpl_vars['row']->value->shop_price;?>
</td>
	<td width="" align="center" style="background-color: rgb(255, 255, 255);"><?php echo $_smarty_tpl->tpl_vars['row']->value->goods_jifen;?>
</td>

	<td width="" align="center" style="background-color: rgb(255, 255, 255);"><span onclick=""><img src="<?php echo smarty_function_base_url(array('url'=>'public/admin/images'),$_smarty_tpl);?>
/<?php if ($_smarty_tpl->tpl_vars['row']->value->onsale) {?>yes<?php } else { ?>no<?php }?>.gif"/></span></td>

  <td width="" align="center" style="background-color: rgb(255, 255, 255);"><span onclick=""><img src="<?php echo smarty_function_base_url(array('url'=>'public/admin/images'),$_smarty_tpl);?>
/<?php if ($_smarty_tpl->tpl_vars['row']->value->goods_promote&1) {?>yes<?php } else { ?>no<?php }?>.gif"/></span></td>
	
  <td width="" align="center" style="background-color: rgb(255, 255, 255);"><span onclick=""><img src="<?php echo smarty_function_base_url(array('url'=>'public/admin/images'),$_smarty_tpl);?>
/<?php if ($_smarty_tpl->tpl_vars['row']->value->goods_promote&2) {?>yes<?php } else { ?>no<?php }?>.gif"/></span></td>

	<td width="" align="center" style="background-color: rgb(255, 255, 255);"><span onclick=""><?php echo $_smarty_tpl->tpl_vars['row']->value->sort_order;?>
</span></td>

    <td align="center" style="background-color: rgb(255, 255, 255);">
    <?php echo $_smarty_tpl->tpl_vars['row']->value->goods_num;?>
</td>
    <td align="center" style="background-color: rgb(255, 255, 255);">
      <a href="<?php echo smarty_function_base_url(array('url'=>'admin/goods/huifu'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value->goods_id;?>
" target="_blank" title="恢复">恢复</a>|

      <a href="<?php echo smarty_function_base_url(array('url'=>'admin/goods/del'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value->goods_id;?>
" onclick="confrim('您确实要把该商品放入回收站吗？')" title="回收站">彻底删除</a>
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

<div>

  <select name="type" id='sel' onchange='change()'>
    <option value='0'>请选择..</option>
    <option value='del'>批量彻底删除</option>
    <option value='huifu'>批量恢复</option>
  </select>
	  
    <input type="submit" class="button" id="sub" value=" 确定 " disabled='true'>
</div>

</form>

<div id="footer">
&copy;Ecshop, Thank You!
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
