<?php /* Smarty version Smarty-3.1.18, created on 2014-06-15 17:40:15
         compiled from "application\views\admin\article\add.html" */ ?>
<?php /*%%SmartyHeaderCode:30229539d69ff6d9436-67594418%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd473bf54db03f1ca7c7a9188a5522bcc5225d508' => 
    array (
      0 => 'application\\views\\admin\\article\\add.html',
      1 => 1401336734,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30229539d69ff6d9436-67594418',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_539d69ff7c78e9_05029340',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539d69ff7c78e9_05029340')) {function content_539d69ff7c78e9_05029340($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include 'C:\\AppServ\\www\\GF\\application\\libraries\\Smarty\\plugins\\function.base_url.php';
?><html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>GF_SHOP 管理中心 - 添加新文章 </title>
<meta content="noindex, nofollow" name="robots">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<link type="text/css" rel="stylesheet" href="<?php echo @constant('B_CSS_DIR');?>
general.css">
<link type="text/css" rel="stylesheet" href="<?php echo @constant('B_CSS_DIR');?>
main.css">
	<link rel="stylesheet" href="<?php echo dirname(@constant('B_CSS_DIR'));?>
/kindeditor/themes/simple/simple.css" />
	<link rel="stylesheet" href="<?php echo dirname(@constant('B_CSS_DIR'));?>
/kindeditor/plugins/code/prettify.css" />
	<script charset="utf-8" src="<?php echo dirname(@constant('B_CSS_DIR'));?>
/kindeditor/kindeditor.js"></script>
	<script charset="utf-8" src="<?php echo dirname(@constant('B_CSS_DIR'));?>
/kindeditor/lang/zh_CN.js"></script>
	<script charset="utf-8" src="<?php echo dirname(@constant('B_CSS_DIR'));?>
/kindeditor/plugins/code/prettify.js"></script>
	<script>
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="art_content"]', {
				cssPath : '<?php echo dirname(@constant('B_CSS_DIR'));?>
/kindeditor/plugins/code/prettify.css',
				uploadJson : '<?php echo dirname(@constant('B_CSS_DIR'));?>
/kindeditor/php/upload_json.php',
				fileManagerJson : '<?php echo dirname(@constant('B_CSS_DIR'));?>
/kindeditor/php/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=theForm]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=theForm]')[0].submit();
					});
				}
			});
			prettyPrint();
		});
	</script>
</head>
<body style="cursor: auto;">

<h1>
<span class="action-span"><a href="<?php echo smarty_function_base_url(array('url'=>'admin/article/show_list'),$_smarty_tpl);?>
">文章列表</a></span>
<span class="action-span1"><a href="#">GF_SHOP 管理中心</a> </span><span class="action-span1" id="search_id"> - 添加新文章 </span>
<div style="clear:both"></div>
</h1>
<script src="<?php echo @constant('B_JS_DIR');?>
utils.js" type="text/javascript"></script><script src="<?php echo @constant('B_JS_DIR');?>
selectzone.js" type="text/javascript"></script><script src="<?php echo @constant('B_JS_DIR');?>
validator.js" type="text/javascript"></script><!-- start goods form -->
<div class="tab-div">
  <div id="tabbar-div" class="tab-front">
    <p>
      <span id="general-tab" class="tab-back">文章内容</span>
    </p>
  </div>

  <div id="tabbody-div">
    <form name="theForm" enctype="multipart/form-data" method="post" action="<?php echo smarty_function_base_url(array('url'=>'admin/article/add'),$_smarty_tpl);?>
">
    <table width="90%" id="general-table" style="display: table;">
      <tbody><tr>
        <td class="narrow-label">文章标题</td>
        <td><input type="text" value="" maxlength="60" size="40" name="art_title"><span class="require-field">*</span></td>
      </tr>          
      <tr>
        <td class="narrow-label">是否显示</td>
        <td>
        <input type="radio" checked="" value="1" name="is_show"> 显示   
        <input type="radio" value="0" name="is_show"> 不显示<span class="require-field">*</span> 
        </td>
      </tr>
            <tr>
        <td class="narrow-label">文章作者</td>
        <td><input type="text" value="" maxlength="60" name="art_author"></td>
      </tr>
      <tr>
      <td class="narrow-label">文章内容</td>
      <td colspan="3">
      <textarea name="art_content" style="width:700px;height:300px;visibility:hidden;"></textarea>
      </td></tr>
    </tbody>
    </table>
  
    <div class="button-div">
      <input type="submit" class="button" value=" 确定 ">
      <input type="reset" class="button" value=" 重置 ">
    </div>
    </form>
  </div>

</div>
<!-- end goods form -->

<div id="footer">
共执行 3 个查询，用时 0.080427 秒，Gzip 已禁用，内存占用 2.431 MB<br>
版权所有 &copy; 2005-2012 上海商派网络科技有限公司，并保留所有权利。</div>
</body></html><?php }} ?>
