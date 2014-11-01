<?php /* Smarty version Smarty-3.1.18, created on 2014-06-12 16:26:45
         compiled from "application\views\admin\goods\goods_add.html" */ ?>
<?php /*%%SmartyHeaderCode:1453953996445ae8350-45231638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '227d7c575d47ddacf08252a71ccf41d630c1e377' => 
    array (
      0 => 'application\\views\\admin\\goods\\goods_add.html',
      1 => 1402395978,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1453953996445ae8350-45231638',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'brow' => 0,
    'brand' => 0,
    'one' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53996445c53825_17427990',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53996445c53825_17427990')) {function content_53996445c53825_17427990($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include 'C:\\AppServ\\www\\GF\\application\\libraries\\Smarty\\plugins\\function.base_url.php';
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
			var editor1 = K.create('textarea[name="goods_desc"]', {
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
    <span id="general-tab" class="tab-front">通用信息</span>
		<span id="detail-tab" class="tab-back">详细描述</span>
		<span id="mix-tab" class="tab-back">其他信息</span>
      </p>
    </div>

    <!-- tab body -->
    <div id="tabbody-div">
      <form name="theForm" method="post" enctype="multipart/form-data" action="<?php echo smarty_function_base_url(array('url'=>'admin/goods/goodsadd'),$_smarty_tpl);?>
">
        <!-- 通用信息 -->
        <table width="90%" align="center" id="general-table" style="display: table;">
          <tbody><tr>
            <td class="label">商品名称：</td>
            <td>
			<input type="text" size="30" style="float:left;color:;" value="" name="goods_name">
            <span class="require-field">*</span></td>
          </tr>
          <tr>
            <td class="label">
            商品货号： </td>
            <td>
			<input type="text" onblur="" size="20" value="" name="goods_sn"><br>
            <span id="noticeGoodsSN" style="display:block" class="notice-span">如果您不输入商品货号，系统将自动生成一个唯一的货号。</span></td>
          </tr>
          <tr>
            <td class="label">商品分类：</td>
            <td>
			   <select onchange="" name="cate_id">
            <option value="0">顶级分类</option>
            <?php  $_smarty_tpl->tpl_vars['brow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['brow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['brow']->key => $_smarty_tpl->tpl_vars['brow']->value) {
$_smarty_tpl->tpl_vars['brow']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['brow']->value['cat_id'];?>
">
            <?php echo preg_replace('!^!m',str_repeat('&nbsp;&nbsp;',$_smarty_tpl->tpl_vars['brow']->value["deep"]),$_smarty_tpl->tpl_vars['brow']->value['cat_name']);?>

            </option>
            <?php } ?>
        </select>
			</select><span class="require-field">*</span>
		    </td>
          </tr>
          <tr>
            <td class="label">商品品牌：</td>
            <td>
			<select onchange="" name="brand_id">
			<option value="0">请选择...</option>
      <?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['one']->value->brand_id;?>
"><?php echo $_smarty_tpl->tpl_vars['one']->value->brand_name;?>
</option><?php } ?>
			</select>
            </td>
          </tr>

          <tr>
            <td class="label">本店售价：</td>
            <td>
			         <input type="text" size="20" value="" name="shop_price">
            <span class="require-field">*</span></td>
          </tr>          

          <tr>
            <td class="label">市场售价：</td>
            <td>
			<input type="text" size="20" value="" name="market_price">
            </td>
          </tr>

          <tr>
            <td class="label">商品积分：</td>
            <td>
             <input type="text" size="20" value="" name="goods_jifen"><span>单个商品积分不要超过100</span>
            </td>
          </tr>

		<tr>
			<td class="label">是否首页推荐：</td>
			<td>
			 <input type="radio" name="is_recom" value="1"  checked="checked" /> 是
			 <input type="radio" name="is_recom" value="0"  /> 否
			 </td>
		</tr>

          <tr>
            <td class="label">上传商品图片：</td>
            <td>
              <input type="file" size="35" name="goods_img">
            </td>
          </tr>  

		</table>

        <!-- 商品描述 -->
        <table width="90%" style="display: none;" id="detail-table">
          <tbody><tr>
            <td>
				 <textarea name="goods_desc" style="width:700px;height:300px;visibility:hidden;"></textarea>
			</td>
          </tr>
        </tbody></table>

        <!-- 其他信息 -->
        <table width="90%" align="center" style="display: none;" id="mix-table">
        <tbody>
          <tr>
            <td class="label"> 商品库存数量：</td>
            <td><input type="text" size="20" value="" name="goods_num"><br>
			</td>
          </tr>
          <tr id="alone_sale_1">
            <td id="alone_sale_2" class="label">上架：</td>
            <td id="alone_sale_3">
			<input type="checkbox" checked="checked" value="1" name="onsale"> 打勾表示允许销售，否则不允许销售。</td>
          </tr>
          <tr id="alone_sale_1">
            <td id="alone_sale_2" class="label">是否免运费：</td>
            <td id="alone_sale_3">
              <input type="checkbox" value="1" name="mianyun"> 打勾表示免运费，否则不免运费。</td>
          </tr>
          <tr>
            <td class="label">商品运费：</td>
            <td><input type="text" size="20" value="" name="yunfei"><span>若免运费，后台会自动删除此项数据</span></td>
          </tr>

          <tr>
            <td class="label">商品关键词：</td>
            <td><input type="text" size="40" value="" name="keywords"> 用空格分隔</td>
          </tr>
          <tr>
            <td class="label">商品简单描述：</td>
            <td><textarea rows="3" cols="40" name="small_desc"></textarea></td>
          </tr>
        </tbody></table>

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
