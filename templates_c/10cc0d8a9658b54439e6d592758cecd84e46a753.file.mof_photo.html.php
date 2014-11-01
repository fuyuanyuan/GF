<?php /* Smarty version Smarty-3.1.18, created on 2014-06-19 09:56:09
         compiled from "application\views\admin\goods\mof_photo.html" */ ?>
<?php /*%%SmartyHeaderCode:2940753a24339d563b0-86020413%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10cc0d8a9658b54439e6d592758cecd84e46a753' => 
    array (
      0 => 'application\\views\\admin\\goods\\mof_photo.html',
      1 => 1402498223,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2940753a24339d563b0-86020413',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'p_info' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53a24339e86eb8_03862434',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a24339e86eb8_03862434')) {function content_53a24339e86eb8_03862434($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include 'C:\\AppServ\\www\\GF\\application\\libraries\\Smarty\\plugins\\function.base_url.php';
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
    <span id="general-tab" class="tab-front">修改相册</span>
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
                
                <tr>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['p_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
                	<td>
                		<img src="<?php echo smarty_function_base_url(array('url'=>'public/upload'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['value']->value->thumb_url;?>
" style="display:block" />
                		<input class="del<?php echo $_smarty_tpl->tpl_vars['info']->value[0]->goods_id;?>
" type="button" value="删除" pid="<?php echo $_smarty_tpl->tpl_vars['info']->value[0]->goods_id;?>
" oid="<?php echo $_smarty_tpl->tpl_vars['value']->value->img_id;?>
" />
                	</td>
              <?php } ?>
                	</tr>
              
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
                
               $.each($('input[class^=del]'),function(index,value) {
	   				$(value).click(function(){
						$.ajax({
							url : "<?php echo smarty_function_base_url(array('url'=>'admin/goods/del_photo'),$_smarty_tpl);?>
",
							type : 'post',
							data : {
								'g_id' : $(value).attr('pid'),
								'o_id' : $(value).attr('oid'),
							},
							success : function(response,status,xhr) {
								if(response == '1') {
									$(value).prev().attr('src',"<?php echo smarty_function_base_url(array('url'=>'public/admin/images/ok.jpg'),$_smarty_tpl);?>
");
									$(value).hide();
								}
							},
						});
               });
                //删除图片

					
				});
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
