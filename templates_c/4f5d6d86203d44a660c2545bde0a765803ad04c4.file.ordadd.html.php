<?php /* Smarty version Smarty-3.1.18, created on 2014-06-14 20:05:01
         compiled from "application\views\admin\order\ordadd.html" */ ?>
<?php /*%%SmartyHeaderCode:7987539c3a6da11883-64944277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f5d6d86203d44a660c2545bde0a765803ad04c4' => 
    array (
      0 => 'application\\views\\admin\\order\\ordadd.html',
      1 => 1402747086,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7987539c3a6da11883-64944277',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_539c3a6da7eea2_06326149',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539c3a6da7eea2_06326149')) {function content_539c3a6da7eea2_06326149($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include 'C:\\AppServ\\www\\GF\\application\\libraries\\Smarty\\plugins\\function.base_url.php';
?><html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>ECSHOP 管理中心 - 添加订单 </title>
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
<span class="action-span"><a href="<?php echo smarty_function_base_url(array('url'=>'admin/order/show'),$_smarty_tpl);?>
">订单列表</a></span>
<span class="action-span1"><a href="<?php echo smarty_function_base_url(array('url'=>'admin/welcome'),$_smarty_tpl);?>
">ECSHOP 管理中心</a> </span><span class="action-span1" id="search_id"> - 添加订单</span>
<div style="clear:both"></div>
</h1>
<div class="main-div">
  <form name="theForm" method="post" action="<?php echo smarty_function_base_url(array('url'=>'admin/order/add'),$_smarty_tpl);?>
">
  <table width="100%" id="general-table">
      <tbody>
      <tr>
        <td class="label">订单号：</td>
        <td>
          <input type="text" size="30" value="" name="order_sn">
          <span class="require-field">*</span>        
        </td>
      </tr>
      <tr>
        <td class="label">所购商品编号：</td>
        <td>
           <input type="text" size="30" value="" name="gids"><span class="require-field">用逗号分隔编多个商品号</span>
		    </td>
      </tr>
      <tr>
        <td class="label">商品购买数量：</td>
        <td>
           <input type="text" size="30" value="" name="order_num"><span class="require-field">多个商品时用逗号分隔编号,顺序与商品对应</span>
        </td>
      </tr>
      <tr>
        <td class="label">订单总价：</td>
        <td>
           <input type="text" size="20" value="" name="total"><span class="require-field">*</span>
        </td>
      </tr>
      <tr>
        <td class="label">订单所属用户id：</td>
        <td>
           <input type="text" size="10" value="" name="user_id"><span class="require-field">*</span>
        </td>
      </tr>
      <tr>
        <td class="label">订单收货地址id：</td>
        <td>
           <input type="text" size="10" value="" name="addr_id"><span class="require-field">*</span>
        </td>
      </tr>
      <tr>
         <td class="label">订单状态</td>
          <td>
             <select name="state">
              <option value="0">未配送</option>
              <option value="1">配送中</option>
              <option value="2">已完成</option>
             </select><span class="require-field">*</span>
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
