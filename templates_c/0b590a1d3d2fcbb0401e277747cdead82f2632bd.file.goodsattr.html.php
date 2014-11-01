<?php /* Smarty version Smarty-3.1.18, created on 2014-06-12 17:11:40
         compiled from "application\views\admin\attr\goodsattr.html" */ ?>
<?php /*%%SmartyHeaderCode:1642653996ecc9a48a3-87256574%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b590a1d3d2fcbb0401e277747cdead82f2632bd' => 
    array (
      0 => 'application\\views\\admin\\attr\\goodsattr.html',
      1 => 1401376739,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1642653996ecc9a48a3-87256574',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'goods_id' => 0,
    'list' => 0,
    'attr' => 0,
    'option' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53996eccab5fe3_83758023',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53996eccab5fe3_83758023')) {function content_53996eccab5fe3_83758023($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include 'C:\\AppServ\\www\\GF\\application\\libraries\\Smarty\\plugins\\function.base_url.php';
?><html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>ECSHOP 管理中心 - 添加属性 </title>
<meta content="noindex, nofollow" name="robots">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<link type="text/css" rel="stylesheet" href="<?php echo smarty_function_base_url(array('url'=>'public/admin/styles/general.css'),$_smarty_tpl);?>
">
<link type="text/css" rel="stylesheet" href="<?php echo smarty_function_base_url(array('url'=>'public/admin/styles/main.css'),$_smarty_tpl);?>
">
</head>
<body style="cursor: auto;">

<h1>
<span class="action-span"><a href="<?php echo smarty_function_base_url(array('url'=>'admin/attribute/attrlist'),$_smarty_tpl);?>
">商品属性</a></span>
<span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span class="action-span1" id="search_id"> - 添加属性 </span>
<div style="clear:both"></div>
</h1>
<div class="main-div">
  <form onsubmit="" name="theForm" method="post" action="<?php echo smarty_function_base_url(array('url'=>'admin/attribute/goodsattradd'),$_smarty_tpl);?>
">
        <input type='hidden' name='goods_id' value='<?php echo $_smarty_tpl->tpl_vars['goods_id']->value;?>
'>
 <table width="90%" align="center">
      <tr>
        <td class="label">属性名</td>
      <td>属性值</td>
        </tr>
      <?php  $_smarty_tpl->tpl_vars['attr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attr']->key => $_smarty_tpl->tpl_vars['attr']->value) {
$_smarty_tpl->tpl_vars['attr']->_loop = true;
?>
      <tr>
        <td class="label"><?php echo $_smarty_tpl->tpl_vars['attr']->value->attr_name;?>
</td>
      <td>
        <?php if ($_smarty_tpl->tpl_vars['attr']->value->attr_type=='text') {?>
        <input type="text" size="40" value="" name="attr_value[<?php echo $_smarty_tpl->tpl_vars['attr']->value->attr_id;?>
]">
        <?php } elseif ($_smarty_tpl->tpl_vars['attr']->value->attr_type=='select') {?>
        <select name="attr_value[<?php echo $_smarty_tpl->tpl_vars['attr']->value->attr_id;?>
]">
          <?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = explode('|',$_smarty_tpl->tpl_vars['attr']->value->attr_values); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['option']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value;?>
</option>
          <?php } ?>
        </select>
        <?php } else { ?>
          <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = explode('|',$_smarty_tpl->tpl_vars['attr']->value->attr_values); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
          <input type='radio' name='attr_value[<?php echo $_smarty_tpl->tpl_vars['attr']->value->attr_id;?>
]' value='<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['v']->value;?>

          <?php } ?>
        <?php }?>
      </td>
        </tr>
      <?php } ?>
    </table>
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
</body></html><?php }} ?>
