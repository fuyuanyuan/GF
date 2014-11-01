<?php /* Smarty version Smarty-3.1.18, created on 2014-06-12 16:15:36
         compiled from "application\views\admin\category\add.html" */ ?>
<?php /*%%SmartyHeaderCode:13414539961a8ceebc9-06417242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d95b18c3c0d928f938f720744fc400a20926964' => 
    array (
      0 => 'application\\views\\admin\\category\\add.html',
      1 => 1401345032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13414539961a8ceebc9-06417242',
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
  'unifunc' => 'content_539961a8db9df6_92541456',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539961a8db9df6_92541456')) {function content_539961a8db9df6_92541456($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include 'C:\\AppServ\\www\\GF\\application\\libraries\\Smarty\\plugins\\function.base_url.php';
?><html xmlns="http://www.w3.org/1999/xhtml"><head>
    <title>GF_SHOP 管理中心 - 添加分类 </title>
    <meta name="robots" content="noindex, nofollow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="<?php echo @constant('B_CSS_DIR');?>
general.css" rel="stylesheet" type="text/css">
    <link href="<?php echo @constant('B_CSS_DIR');?>
main.css" rel="stylesheet" type="text/css">
</head>
<body>

<h1>
    <span class="action-span"><a href="<?php echo smarty_function_base_url(array('url'=>'admin/category/show_list'),$_smarty_tpl);?>
">商品分类</a></span>
    <span class="action-span1"><a href="index.php?p=back&amp;c=index&amp;a=index">GF_SHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 添加分类 </span>
    <div style="clear:both"></div>
</h1>
<!-- start add new category form -->
<div class="main-div">
    <form action="<?php echo smarty_function_base_url(array('url'=>'admin/category/add'),$_smarty_tpl);?>
" method="post" name="theForm" enctype="multipart/form-data">
        <table width="100%" id="general-table">
            <tbody><tr>
                <td class="label">分类名称:</td>
                <td>
                    <input type="text" name="cat_name" maxlength="20" value="" size="27"> <font color="red">*</font>
                </td>
            </tr>
            <tr>
                <td class="label">上级分类:</td>
                <td>
                    <select name="parent_id">
                        <option value="0">顶级分类</option>
                        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['cat_id'];?>
">
                            <?php echo preg_replace('!^!m',str_repeat('&nbsp;&nbsp;',$_smarty_tpl->tpl_vars['row']->value["deep"]),$_smarty_tpl->tpl_vars['row']->value['cat_name']);?>

                        </option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="label">排序:</td>
                <td>
                    <input type="text" name="sort_order" value="30" size="15">
                </td>
            </tr>
            </tbody></table>
        <div class="button-div">
            <input type="submit" value=" 确定 ">
            <input type="reset" value=" 重置 ">
        </div>
    </form>
</div>

<div id="footer">
    &copy;GF_SHOP, Thank You!
</div>
</body></html><?php }} ?>
