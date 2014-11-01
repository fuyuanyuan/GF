<?php /* Smarty version Smarty-3.1.18, created on 2014-06-15 16:48:13
         compiled from "application\views\admin\brand\show_list.html" */ ?>
<?php /*%%SmartyHeaderCode:24979539d5dcd341050-41136956%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f716bf6cc47f14cc504428b3834f72bc7b09139' => 
    array (
      0 => 'application\\views\\admin\\brand\\show_list.html',
      1 => 1401806170,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24979539d5dcd341050-41136956',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'brand' => 0,
    'links' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_539d5dcd4b4223_15083319',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539d5dcd4b4223_15083319')) {function content_539d5dcd4b4223_15083319($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include 'C:\\AppServ\\www\\GF\\application\\libraries\\Smarty\\plugins\\function.base_url.php';
?><html xmlns="http://www.w3.org/1999/xhtml"><head>
    <title>GF_SHOP 管理中心 - 商品品牌 </title>
    <meta content="noindex, nofollow" name="robots">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <link type="text/css" rel="stylesheet" href="<?php echo @constant('B_CSS_DIR');?>
general.css">
    <link type="text/css" rel="stylesheet" href="<?php echo @constant('B_CSS_DIR');?>
main.css">
    <script src="<?php echo @constant('B_JS_DIR');?>
transport.js" type="text/javascript"></script>
    <script src="<?php echo @constant('B_JS_DIR');?>
common.js" type="text/javascript"></script>

</head>
<body>

<h1>
    <span class="action-span"><a href="<?php echo smarty_function_base_url(array('url'=>'admin/brand/add'),$_smarty_tpl);?>
">添加品牌</a></span>
    <span class="action-span1"><a href="index.php?act=main">GF_SHOP 管理中心</a> </span><span class="action-span1" id="search_id"> - 商品品牌 </span>
    <div style="clear:both"></div>
</h1>
<script src="<?php echo @constant('B_JS_DIR');?>
utils.js" type="text/javascript"></script>
<script src="<?php echo @constant('B_JS_DIR');?>
listtable.js" type="text/javascript"></script><!-- 品牌搜索 -->
<div class="form-div">
    <form name="searchForm" action="">
        <img width="26" height="22" border="0" alt="SEARCH" src="<?php echo @constant('B_IMG_DIR');?>
icon_search.gif">
        <input type="text" size="15" name="brand_name">
        <input type="submit" class="button" value=" 搜索 ">
    </form>
</div>

<form name="listForm" action="" method="post">
<!-- start brand list -->
<div id="listDiv" class="list-div">

    <table cellspacing="1" cellpadding="3">
        <tbody><tr>
            <th>品牌名称</th>
            <th>品牌网址</th>
            <th>品牌描述</th>
            <th>排序</th>
            <th>是否显示</th>
            <th>操作</th>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['brand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['brand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->key => $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->_loop = true;
?>
        <tr>
            <td class="first-cell" style="background-color: rgb(255, 255, 255);">
                <span style="float:right">
                    <?php if (!empty($_smarty_tpl->tpl_vars['brand']->value['brand_logo'])) {?>
                    <a target="_brank" href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
public/upload/<?php echo $_smarty_tpl->tpl_vars['brand']->value['brand_logo'];?>
"><img width="16" height="16" border="0" alt="品牌LOGO" src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
public/upload/<?php echo $_smarty_tpl->tpl_vars['brand']->value['brand_logo'];?>
"></a>
                    <?php } else { ?>
                    <a><img width="16" height="16" border="0" alt="品牌LOGO" src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
public/admin/images/picflag.gif"></a>
                    <?php }?>
                </span>
                <span onclick=""><?php echo $_smarty_tpl->tpl_vars['brand']->value['brand_name'];?>
</span>
            </td>
            <td style="background-color: rgb(255, 255, 255);"><a target="_brank" href="http://www.nokia.com.cn/"><?php echo $_smarty_tpl->tpl_vars['brand']->value['brand_url'];?>
</a></td>
            <td align="left" style="background-color: rgb(255, 255, 255);"><?php echo $_smarty_tpl->tpl_vars['brand']->value['brand_desc'];?>
</td>
            <td align="right" style="background-color: rgb(255, 255, 255);"><span onclick="javascript:listTable.edit(this, 'edit_sort_order', 1)"><?php echo $_smarty_tpl->tpl_vars['brand']->value['sort_order'];?>
</span></td>
            <td align="center" style="background-color: rgb(255, 255, 255);">
                <?php if ($_smarty_tpl->tpl_vars['brand']->value['is_show']=='1') {?>
                <img onclick="listTable.toggle(this, 'toggle_show', 1)" src="<?php echo @constant('B_IMG_DIR');?>
yes.gif">
                <?php } else { ?>
                <img onclick="listTable.toggle(this, 'toggle_show', 1)" src="<?php echo @constant('B_IMG_DIR');?>
no.gif">
                <?php }?>
            </td>
            <td align="center" style="background-color: rgb(255, 255, 255);">
                <a title="编辑" href="<?php echo smarty_function_base_url(array('url'=>'admin/brand/edit'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['brand']->value['brand_id'];?>
">编辑</a> |
                <a title="编辑" onclick="return confirm('您确定要删除吗？')" href="<?php echo smarty_function_base_url(array('url'=>'admin/brand/del'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['brand']->value['brand_id'];?>
">移除</a>
            </td>
        </tr>
        <?php } ?>
        <tr>
            <td nowrap="true" align="right" colspan="6" style="background-color: rgb(255, 255, 255);">
                <!-- $Id: page.htm 14216 2008-03-10 02:27:21Z testyang $ -->
                <div id="turn-page">
                    <?php echo $_smarty_tpl->tpl_vars['links']->value;?>

                </div>
            </td>
        </tr>
        </tbody></table>

    <!-- end brand list -->
</div>
</form>
<div id="footer">
    copyright by gf_shop thanks
</div>

</body></html><?php }} ?>
