<?php /* Smarty version Smarty-3.1.18, created on 2014-06-12 14:29:52
         compiled from "application\views\admin\welcome\main.html" */ ?>
<?php /*%%SmartyHeaderCode:14942539948e038cd13-25649543%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdd2c1d7cd974261fd87b24e14956bd9f2ae8230' => 
    array (
      0 => 'application\\views\\admin\\welcome\\main.html',
      1 => 1400848520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14942539948e038cd13-25649543',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_539948e0438b34_81755115',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539948e0438b34_81755115')) {function content_539948e0438b34_81755115($_smarty_tpl) {?><!-- $Id: start.htm 17216 2011-01-19 06:03:12Z liubo $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心</title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo @constant('B_CSS_DIR');?>
general.css" rel="stylesheet" type="text/css" />
<link href="<?php echo @constant('B_CSS_DIR');?>
main.css" rel="stylesheet" type="text/css" />
<!--
// 这里把JS用到的所有语言都赋值到这里
var process_request = "正在处理您的请求...";
var todolist_caption = "记事本";
var todolist_autosave = "自动保存";
var todolist_save = "保存";
var todolist_clear = "清除";
var todolist_confirm_save = "是否将更改保存到记事本？";
var todolist_confirm_clear = "是否清空内容？";
var expand_all = "展开";
var collapse_all = "闭合";
var shop_name_not_null = "商店名称不能为空";
var good_name_not_null = "商品名称不能为空";
var good_category_not_null = "商品分类不能为空";
var good_number_not_number = "商品数量不是数值";
var good_price_not_number = "商品价格不是数值";
//-->
</script>
</head>
<body>

<h1>
<span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"></span>
<div style="clear:both"></div>
</h1>
<!-- directory install start -->
<ul style="padding:0; margin: 0; list-style-type:none; color: #CC0000;">
 <!-- <script type="text/javascript" src="http://bbs.ecshop.com/notice.php?v=1&n=8&f=ul"></script>-->
</ul>
<!-- directory install end -->
<!-- start personal message -->
<!-- end personal message -->
<!-- start order statistics -->
<div class="list-div">
<table cellspacing='1' cellpadding='3'>
  <tr>
    <th colspan="4" class="group-title">订单统计信息</th>
  </tr>
  <tr>
    <td width="20%"><a href="order.php?act=list&composite_status=101">待发货订单:</a></td>
    <td width="30%"><strong style="color: red">4</strong></td>
    <td width="20%"><a href="order.php?act=list&composite_status=0">未确认订单:</a></td>
    <td width="30%"><strong>2</strong></td>
  </tr>
  <tr>
    <td><a href="order.php?act=list&composite_status=100">待支付订单:</a></td>
    <td><strong>3</strong></td>
    <td><a href="order.php?act=list&composite_status=102">已成交订单数:</a></td>
    <td><strong>3</strong></td>
  </tr>
  <tr>
    <td><a href="goods_booking.php?act=list_all">新缺货登记:</a></td>
    <td><strong>2</strong></td>
    <td><a href="user_account.php?act=list&process_type=1&is_paid=0">退款申请:</a></td>
    <td><strong>0</strong></td>
  </tr>
  <tr>
    <td><a href="order.php?act=list&composite_status=6">部分发货订单:</a></td>
    <td><strong>1</strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</div>
<!-- end order statistics -->
<br />
<!-- start goods statistics -->
<div class="list-div">
<table cellspacing='1' cellpadding='3'>
  <tr>
    <th colspan="4" class="group-title">实体商品统计信息</th>
  </tr>
  <tr>
    <td width="20%">商品总数:</td>
    <td width="30%"><strong>20</strong></td>
    <td width="20%"><a href="goods.php?act=list&stock_warning=1">库存警告商品数:</a></td>
    <td width="30%"><strong style="color: red">7</strong></td>
  </tr>
  <tr>
    <td><a href="goods.php?act=list&amp;intro_type=is_new">新品推荐数:</a></td>
    <td><strong>11</strong></td>
    <td><a href="goods.php?act=list&amp;intro_type=is_best">精品推荐数:</a></td>
    <td><strong>10</strong></td>
  </tr>
  <tr>
    <td><a href="goods.php?act=list&amp;intro_type=is_hot">热销商品数:</a></td>
    <td><strong>11</strong></td>
    <td><a href="goods.php?act=list&amp;intro_type=is_promote">促销商品数:</a></td>
    <td><strong>2</strong></td>
  </tr>
</table>
</div>
<br />
<!-- Virtual Card -->
<div class="list-div">
<table cellspacing='1' cellpadding='3'>
  <tr>
    <th colspan="4" class="group-title">虚拟卡商品统计</th>
  </tr>
  <tr>
    <td width="20%">商品总数:</td>
    <td width="30%"><strong>6</strong></td>
    <td width="20%"><a href="goods.php?act=list&amp;stock_warning=1&amp;extension_code=virtual_card">库存警告商品数:</a></td>
    <td width="30%"><strong style="color: red">2</strong></td>
  </tr>
  <tr>
    <td><a href="goods.php?act=list&amp;intro_type=is_new&amp;extension_code=virtual_card">新品推荐数:</a></td>
    <td><strong>1</strong></td>
    <td><a href="goods.php?act=list&amp;intro_type=is_best&amp;extension_code=virtual_card">精品推荐数:</a></td>
    <td><strong>4</strong></td>
  </tr>
  <tr>
    <td><a href="goods.php?act=list&amp;intro_type=is_hot&amp;extension_code=virtual_card">热销商品数:</a></td>
    <td><strong>6</strong></td>
    <td><a href="goods.php?act=list&amp;intro_type=is_promote&amp;extension_code=virtual_card">促销商品数:</a></td>
    <td><strong>0</strong></td>
  </tr>
</table>
</div>
<!-- end order statistics -->
<br />
<!-- start access statistics -->
<div class="list-div">
<table cellspacing='1' cellpadding='3'>
  <tr>
    <th colspan="4" class="group-title">访问统计</th>
  </tr>
  <tr>
    <td width="20%">今日访问:</td>
    <td width="30%"><strong>1</strong></td>
    <td width="20%">在线人数:</td>
    <td width="30%"><strong>2</strong></td>
  </tr>
  <tr>
    <td><a href="user_msg.php?act=list_all">最新留言:</a></td>
    <td><strong>1</strong></td>
    <td><a href="comment_manage.php?act=list">未审核评论:</a></td>
    <td><strong>1</strong></td>
  </tr>
</table>
</div>
<!-- end access statistics -->
<br />
<!-- start system information -->
<div class="list-div">
<table cellspacing='1' cellpadding='3'>
  <tr>
    <th colspan="4" class="group-title">系统信息</th>
  </tr>
  <tr>
    <td width="20%">服务器操作系统:</td>
    <td width="30%">WINNT (127.0.0.1)</td>
    <td width="20%">Web 服务器:</td>
    <td width="30%">Apache/2.2.25 (Win32) PHP/5.3.28</td>
  </tr>
  <tr>
    <td>PHP 版本:</td>
    <td>5.3.28</td>
    <td>MySQL 版本:</td>
    <td>5.5.24</td>
  </tr>
  <tr>
    <td>安全模式:</td>
    <td>否</td>
    <td>安全模式GID:</td>
    <td>否</td>
  </tr>
  <tr>
    <td>Socket 支持:</td>
    <td>是</td>
    <td>时区设置:</td>
    <td>asia/shanghai</td>
  </tr>
  <tr>
    <td>GD 版本:</td>
    <td>GD2 ( JPEG GIF PNG)</td>
    <td>Zlib 支持:</td>
    <td>是</td>
  </tr>
  <tr>
    <td>IP 库版本:</td>
    <td>20071024</td>
    <td>文件上传的最大大小:</td>
    <td>2M</td>
  </tr>
  <tr>
    <td>ECShop 版本:</td>
    <td>v2.7.3 RELEASE 20121106</td>
    <td>安装日期:</td>
    <td>2014-04-14</td>
  </tr>
  <tr>
    <td>编码:</td>
    <td>UTF-8</td>
    <td></td>
    <td></td>
  </tr>
</table>
</div>
</body>
</html><?php }} ?>
