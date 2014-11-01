<?php /* Smarty version Smarty-3.1.18, created on 2014-06-14 20:14:13
         compiled from "application\views\admin\order\ordlist.html" */ ?>
<?php /*%%SmartyHeaderCode:13049539c3b43bea548-50610881%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a55883bc294181d30e2416b7f39ec35b3ac6cce' => 
    array (
      0 => 'application\\views\\admin\\order\\ordlist.html',
      1 => 1402748037,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13049539c3b43bea548-50610881',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_539c3b43cd0cf6_61440529',
  'variables' => 
  array (
    'ordlist' => 0,
    'orow' => 0,
    'addr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539c3b43cd0cf6_61440529')) {function content_539c3b43cd0cf6_61440529($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include 'C:\\AppServ\\www\\GF\\application\\libraries\\Smarty\\plugins\\function.base_url.php';
?><html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>ECSHOP 管理中心 - 商品分类 </title>
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
<span class="action-span"><a href="<?php echo smarty_function_base_url(array('url'=>'admin/order/add'),$_smarty_tpl);?>
">添加订单</a></span>
<span class="action-span1"><a href="#">ECSHOP 管理中心</a> </span><span class="action-span1" id="search_id"> - 订单列表 </span>
<div style="clear:both"></div>
</h1>

<!-- start ad position list -->
<div id="listDiv" class="list-div">

<table width="100%" cellspacing="1" cellpadding="2" id="list-table">
  <tbody><tr>
  <th>ID</th>
  <th>订单号</th>
  <th>商品编号</th>
  <th>订单总价</th>
  <th>收货人</th>
  <th>收货地址</th>
	<th>电话</th>
  <th>下单时间</th>
	<th>订单状态</th>
	<th>操作</th>
  </tr>
<?php  $_smarty_tpl->tpl_vars['orow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['orow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ordlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['orow']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['orow']->key => $_smarty_tpl->tpl_vars['orow']->value) {
$_smarty_tpl->tpl_vars['orow']->_loop = true;
 $_smarty_tpl->tpl_vars['orow']->index++;
?>
  <tr align="center" id="0_6" class="0">
    <td align="center"><?php echo $_smarty_tpl->tpl_vars['orow']->value->order_id;?>
</td>
    <td align="center"><?php echo $_smarty_tpl->tpl_vars['orow']->value->order_sn;?>
</td>
    <td align="center"><?php echo $_smarty_tpl->tpl_vars['orow']->value->gids;?>
</td>
    <td align="center"><?php echo $_smarty_tpl->tpl_vars['orow']->value->total;?>
</td>
    <td align="center"><?php echo $_smarty_tpl->tpl_vars['addr']->value[$_smarty_tpl->tpl_vars['orow']->index]->addr_name;?>
</td>
    <td align="center"><?php echo $_smarty_tpl->tpl_vars['addr']->value[$_smarty_tpl->tpl_vars['orow']->index]->address;?>
</td>
    <td align="center"><?php echo $_smarty_tpl->tpl_vars['addr']->value[$_smarty_tpl->tpl_vars['orow']->index]->tel;?>
</td>
    <td align="center"><?php echo $_smarty_tpl->tpl_vars['orow']->value->ordtime;?>
</td>
    <td align="center"><?php if ($_smarty_tpl->tpl_vars['orow']->value->state==0) {?>未配送<button type="button" onclick="location.href='<?php echo smarty_function_base_url(array('url'=>'admin/order/pei'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['orow']->value->order_id;?>
'">点击配送</button><?php } elseif ($_smarty_tpl->tpl_vars['orow']->value->state==1) {?>配送中<?php } else { ?>已完成<?php }?></td>
    <td align="center" style="background-color: rgb(255, 255, 255);">
      <a href="<?php echo smarty_function_base_url(array('url'=>'admin/order/edit'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['orow']->value->order_id;?>
" title="编辑"><img src="<?php echo smarty_function_base_url(array('url'=>'public/admin/images'),$_smarty_tpl);?>
/icon_edit.gif" width="16" height="16" border="0"></a>
      <a href="<?php echo smarty_function_base_url(array('url'=>'admin/order/del'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['orow']->value->order_id;?>
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
