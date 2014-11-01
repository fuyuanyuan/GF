<?php /* Smarty version Smarty-3.1.18, created on 2014-06-12 17:13:49
         compiled from "application\views\admin\goods\add_photo.html" */ ?>
<?php /*%%SmartyHeaderCode:385953996f4d38f554-02744022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5d6ff56528449c4c456c7c1be0f6f437ac004d7' => 
    array (
      0 => 'application\\views\\admin\\goods\\add_photo.html',
      1 => 1402486561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '385953996f4d38f554-02744022',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53996f4d45e604_05863613',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53996f4d45e604_05863613')) {function content_53996f4d45e604_05863613($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include 'C:\\AppServ\\www\\GF\\application\\libraries\\Smarty\\plugins\\function.base_url.php';
?><html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>ECSHOP 管理中心 - 添加新商品 </title>
<meta content="noindex, nofollow" name="robots">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<link type="text/css" rel="stylesheet" href="<?php echo smarty_function_base_url(array('url'=>'public/admin/styles/general.css'),$_smarty_tpl);?>
">
<link type="text/css" rel="stylesheet" href="<?php echo smarty_function_base_url(array('url'=>'public/admin/styles/main.css'),$_smarty_tpl);?>
">
<script type='text/javascript' src='<?php echo smarty_function_base_url(array('url'=>'public/admin/js/jquery.js'),$_smarty_tpl);?>
'></script>
<link rel="stylesheet" href="<?php echo dirname(@constant('B_CSS_DIR'));?>
/kindeditor/themes/simple/simple.css" />
</head>
<body style="cursor: auto;">

<h1>
<span class="action-span"><a href="<?php echo smarty_function_base_url(array('url'=>'admin/goods/goodslist'),$_smarty_tpl);?>
">商品列表</a></span>
<span class="action-span1"><a href="#">ECSHOP 管理中心</a> </span><span class="action-span1" id="search_id"> - 添加新商品 </span>
<div style="clear:both"></div>
</h1>

<!-- start goods form -->
<div class="tab-div">
    <!-- tab bar -->
    <div id="tabbar-div">
      <p>
    <span id="general-tab" class="tab-front">添加相册</span>
      </p>
    </div>

    <!-- tab body -->
    <div id="tabbody-div">
    <h3 style="text-align:left;text-indent:20px;">产品名称：<span style="color:orange"><?php echo $_smarty_tpl->tpl_vars['info']->value[0]->goods_name;?>
</span> </h3>
      <form name="theForm" method="post" enctype="multipart/form-data" action="<?php echo smarty_function_base_url(array('url'=>'admin/goods/add_photo'),$_smarty_tpl);?>
">
        <!-- 通用信息 -->
        <input type="hidden" name="goods_id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value[0]->goods_id;?>
" /> 
       <table width="90%" align="center" id="gallery-table" >
                <!--  -->
                <tbody>
                <tr><td>&nbsp;</td></tr>
                <tr>
                    <td>
                        <a href="javascript:;" onclick="addImg(this)">[+]</a>
                        图片描述 <input type="text" name="img_desc[]" size="20">
                        上传文件 <input type="file" name="img_url[]">
                        <input type="text" size="40" value="或者输入外部图片链接地址" style="color:#aaa;"  name="img_file[]">
                    </td>
                </tr>
                </tbody></table>
                  <script type="text/javascript">
                /**
                 * 添加图片域
                 */
                function addImg(obj)
                {
                    var src = obj.parentNode.parentNode;
                    var idx = rowindex(src);

                    var tbl = document.getElementById('gallery-table');
                    var row = tbl.insertRow(idx + 1);
                    var cell = row.insertCell(-1);
                    cell.innerHTML = src.cells[0].innerHTML.replace(/(.*)(addImg)(.*)(\[)(\+)/i, "$1removeImg$3$4-");
                }
                /**
                 * 删除
                 */
                function removeImg(obj)
                {
                    var row = rowindex(obj.parentNode.parentNode);
                    var tbl = document.getElementById('gallery-table');
                    tbl.deleteRow(row);
                }
            </script>

		<script type="text/javascript" src="<?php echo smarty_function_base_url(array('url'=>'public/admin/js/utils.js'),$_smarty_tpl);?>
"></script>
		<script type="text/javascript" src="<?php echo smarty_function_base_url(array('url'=>'public/admin/js/tab.js'),$_smarty_tpl);?>
"></script>

		<div class="button-div">
          <input type="submit" value=" 确定 " class="button">
          <input type="reset" value=" 重置 " class="button">
        </div>
<!-- end goods form -->
<div id="footer">
&copy;Ecshop, Thank You!
</div>
</body></html><?php }} ?>
