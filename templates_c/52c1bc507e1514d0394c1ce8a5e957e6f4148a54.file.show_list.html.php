<?php /* Smarty version Smarty-3.1.18, created on 2014-06-12 16:14:54
         compiled from "application\views\admin\category\show_list.html" */ ?>
<?php /*%%SmartyHeaderCode:243645399617e098bc3-37568352%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52c1bc507e1514d0394c1ce8a5e957e6f4148a54' => 
    array (
      0 => 'application\\views\\admin\\category\\show_list.html',
      1 => 1401345270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '243645399617e098bc3-37568352',
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
  'unifunc' => 'content_5399617e275533_37599646',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5399617e275533_37599646')) {function content_5399617e275533_37599646($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include 'C:\\AppServ\\www\\GF\\application\\libraries\\Smarty\\plugins\\function.base_url.php';
?><html xmlns="http://www.w3.org/1999/xhtml"><head>
    <title>GF_SHOP 管理中心 - 商品分类 </title>
    <meta name="robots" content="noindex, nofollow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="<?php echo @constant('B_CSS_DIR');?>
general.css" rel="stylesheet" type="text/css">
    <link href="<?php echo @constant('B_CSS_DIR');?>
main.css" rel="stylesheet" type="text/css">
</head>
<body style="cursor: auto;">

<h1>
    <span class="action-span"><a href="<?php echo smarty_function_base_url(array('url'=>'admin/category/add'),$_smarty_tpl);?>
">添加分类</a></span>
    <span class="action-span1"><a href="#">GF_SHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 商品分类 </span>
    <div style="clear:both"></div>
</h1>

<form method="post" action="" name="listForm">
    <!-- start ad position list -->
    <div class="list-div" id="listDiv">

        <table width="100%" cellspacing="1" cellpadding="2" id="list-table">
            <tbody><tr>
                <th>分类名称</th>
                <th>商品数量</th>
                <th>排序</th>
                <th>操作</th>
            </tr>
            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
            <tr align="center" class="0" id="0_6">
                <td align="left" style="background-color: rgb(255, 255, 255);" class="first-cell">
                    <?php echo preg_replace('!^!m',str_repeat('&nbsp;&nbsp;',$_smarty_tpl->tpl_vars['row']->value['deep']),$_smarty_tpl->tpl_vars['row']->value['cat_name']);?>

                </td>
                <td width="" style="background-color: rgb(255, 255, 255);">商品数量</td>
                <td width="" align="right" style="background-color: rgb(255, 255, 255);"><?php echo $_smarty_tpl->tpl_vars['row']->value['sort_order'];?>
</td>
                <td width="" align="center" style="background-color: rgb(255, 255, 255);">
                    <a href="">转移商品</a> |
                    <a href="<?php echo smarty_function_base_url(array('url'=>'admin/category/edit'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['cat_id'];?>
">编辑</a> |
                    <a onclick=" return confirm('你确定要删除吗？');" href="<?php echo smarty_function_base_url(array('url'=>'admin/category/del'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['cat_id'];?>
">移除</a>
                </td>
            </tr>
            <?php } ?>
            </tbody></table>
    </div>
</form>

<div id="footer">
    &copy;GF_SHOP, Thank You!
</div>

</body></html><?php }} ?>
