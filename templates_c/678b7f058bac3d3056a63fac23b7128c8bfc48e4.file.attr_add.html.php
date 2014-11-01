<?php /* Smarty version Smarty-3.1.18, created on 2014-06-15 16:48:20
         compiled from "application\views\admin\attr\attr_add.html" */ ?>
<?php /*%%SmartyHeaderCode:6770539d5dd4dbe556-08504010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '678b7f058bac3d3056a63fac23b7128c8bfc48e4' => 
    array (
      0 => 'application\\views\\admin\\attr\\attr_add.html',
      1 => 1401368047,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6770539d5dd4dbe556-08504010',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_539d5dd4e52c71_45852673',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539d5dd4e52c71_45852673')) {function content_539d5dd4e52c71_45852673($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include 'C:\\AppServ\\www\\GF\\application\\libraries\\Smarty\\plugins\\function.base_url.php';
?><html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>ECSHOP 管理中心 - 添加属性 </title>
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
<span class="action-span"><a href="<?php echo smarty_function_base_url(array('url'=>'admin/attribute/attrlist'),$_smarty_tpl);?>
">商品属性</a></span>
<span class="action-span1"><a href="<?php echo smarty_function_base_url(array('url'=>'admin/welcome'),$_smarty_tpl);?>
">ECSHOP 管理中心</a> </span><span class="action-span1" id="search_id"> - 添加属性 </span>
<div style="clear:both"></div>
</h1>
<div class="main-div">
  <form onsubmit="" name="theForm" method="post" action="<?php echo smarty_function_base_url(array('url'=>'admin/attribute/attradd'),$_smarty_tpl);?>
">
  <table width="100%" id="general-table">
      <tbody><tr>
        <td class="label">属性名称：</td>
        <td>
          <input type="text" size="30" value="" name="attr_name">
          <span class="require-field">*</span>        </td>
      </tr>
      <tr>
        <td class="label">所属商品类型：</td>
        <td>
          <select name="attr_type" onchange="wenben()">
          <option value="0">请选择...</option>
            <option value="1">文本框</option><option value="2">下拉列表</option><option value="3">单选</option>
			</select> <span class="require-field">*</span>
		</td>
      </tr>

	  <tr>
        <td class="label">可选值：</td>
        <td>
          <input type="text" size="30" value="" name="attr_values" id="kexuan">
          <span class="require-field">*</span>
		  <span id="noticeAttrType" style="display:block" class="notice-span">
			当属性类型为下拉列表或单选时，需要预设值，采用|分割例如：GSM|3G|4G
		  </span>
		  </td>
      </tr>
      
      <tr>
        <td class="label">是否上架</td>
        <td>
          <input type="radio" value="1" name="is_filter"> 是          
          <input type="radio" value="0" checked="checked"  name="is_filter"> 否        
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
<script type='text/javascript'>
function wenben()
{
  if($("select").val() == 1)
  {
    $("#kexuan").attr("disabled",'true');
  }
  else
  {
    $("#kexuan").removeAttr('disabled');
  }

}
</script><?php }} ?>
