<?php /* Smarty version Smarty-3.1.18, created on 2014-06-12 16:26:01
         compiled from "application\views\admin\goods\goods_list.html" */ ?>
<?php /*%%SmartyHeaderCode:119675399641912dc40-96011225%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '966c07f1150e95639cd4543642af8a6120d9c687' => 
    array (
      0 => 'application\\views\\admin\\goods\\goods_list.html',
      1 => 1402487067,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119675399641912dc40-96011225',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'goods' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53996419335546_92993449',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53996419335546_92993449')) {function content_53996419335546_92993449($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include 'C:\\AppServ\\www\\GF\\application\\libraries\\Smarty\\plugins\\function.base_url.php';
?><html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>ECSHOP 管理中心 - 商品分类 </title>
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
<span class="action-span"><a href="<?php echo smarty_function_base_url(array('url'=>'admin/goods/goodsadd'),$_smarty_tpl);?>
">添加商品</a></span>
<span class="action-span1"><a href="#">ECSHOP 管理中心</a> </span><span class="action-span1" id="search_id"> - 商品列表 </span>
<div style="clear:both"></div>
</h1>

<form name="listForm" action="<?php echo smarty_function_base_url(array('url'=>'admin/goods/flags'),$_smarty_tpl);?>
" method="post">
<!-- start ad position list -->
<div id="listDiv" class="list-div">

<table width="100%" cellspacing="1" cellpadding="2" id="list-table">
  <tbody><tr>
  <th>ID</th>
  <th>商品名</th>
  <th>货号</th>
  <th>价格</th>
  <th>商品积分</th>
  <th>属性管理</th>
  <th>相册管理</th>
	<th>上架</th>
	<th>主分类（男装）</th>
	<th>推荐</th>
	<th>排序</th>
	<th>库存</th>
	<th>操作</th>
  </tr>
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
  <tr align="center" id="0_6" class="0">
  <td align="left" class="first-cell" style="background-color: rgb(255, 255, 255);">
	<input type="checkBox" name="ids[]" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->goods_id;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->goods_id;?>

  <input type='hidden' name='goods_promote' value='<?php echo $_smarty_tpl->tpl_vars['row']->value->goods_promote;?>
'>
	</td>
    <td width="" style="background-color: rgb(255, 255, 255);"><?php echo $_smarty_tpl->tpl_vars['row']->value->goods_name;?>
</td>
    <td width="" align="center" style="background-color: rgb(255, 255, 255);"><?php echo $_smarty_tpl->tpl_vars['row']->value->goods_sn;?>
</td>
	<td width="" align="center" style="background-color: rgb(255, 255, 255);"><?php echo $_smarty_tpl->tpl_vars['row']->value->shop_price;?>
</td>
	<td width="" align="center" style="background-color: rgb(255, 255, 255);"><?php echo $_smarty_tpl->tpl_vars['row']->value->goods_jifen;?>
</td>

  <td align="center" style="background-color: rgb(255, 255, 255);">
      <a href="javascript:void(0)" title="添加" id='tian1' onclick='onattr(<?php echo $_smarty_tpl->tpl_vars['row']->value->goods_id;?>
)'>添加</a> |
      <a title="编辑" href="javascript:void(0)" onclick='onattrb(<?php echo $_smarty_tpl->tpl_vars['row']->value->goods_id;?>
)'>编辑</a>
    </td>
  <td align="center" style="background-color: rgb(255, 255, 255);">
      <a href="<?php echo smarty_function_base_url(array('url'=>'admin/goods/add_photo'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value->goods_id;?>
" title="添加">添加</a> |
      <a title="编辑" href="<?php echo smarty_function_base_url(array('url'=>'admin/goods/mof_photo'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value->goods_id;?>
">编辑</a>
    </td>

	<td width="" align="center" style="background-color: rgb(255, 255, 255);"><a href='javascript:void(0)'><img src="<?php echo smarty_function_base_url(array('url'=>'public/admin/images'),$_smarty_tpl);?>
/<?php if ($_smarty_tpl->tpl_vars['row']->value->onsale) {?>yes<?php } else { ?>no<?php }?>.gif" onclick='sale(<?php echo $_smarty_tpl->tpl_vars['row']->value->goods_id;?>
,s<?php echo $_smarty_tpl->tpl_vars['row']->value->goods_id;?>
)' id='s<?php echo $_smarty_tpl->tpl_vars['row']->value->goods_id;?>
'/></a></td>

  <td width="" align="center" style="background-color: rgb(255, 255, 255);"><span onclick=""><img src="<?php echo smarty_function_base_url(array('url'=>'public/admin/images'),$_smarty_tpl);?>
/<?php if ($_smarty_tpl->tpl_vars['row']->value->goods_promote&1) {?>yes<?php } else { ?>no<?php }?>.gif"/></span></td>
	
  <td width="" align="center" style="background-color: rgb(255, 255, 255);"><span><img class="recom"  id="<?php echo $_smarty_tpl->tpl_vars['row']->value->goods_id;?>
" is_recom="<?php echo $_smarty_tpl->tpl_vars['row']->value->is_recom;?>
" src="<?php echo smarty_function_base_url(array('url'=>'public/admin/images'),$_smarty_tpl);?>
/<?php if (($_smarty_tpl->tpl_vars['row']->value->is_recom)) {?>yes<?php } else { ?>no<?php }?>.gif"/></span></td>

	<td width="" align="center" style="background-color: rgb(255, 255, 255);"><span onclick=""><?php echo $_smarty_tpl->tpl_vars['row']->value->sort_order;?>
</span></td>

    <td align="center" style="background-color: rgb(255, 255, 255);">
    <?php echo $_smarty_tpl->tpl_vars['row']->value->goods_num;?>
</td>
    <td align="center" style="background-color: rgb(255, 255, 255);">
      <a href="" target="_blank" title="查看"><img src="<?php echo smarty_function_base_url(array('url'=>'public/admin/images'),$_smarty_tpl);?>
/icon_view.gif" width="16" height="16" border="0"></a>
      <a href="<?php echo smarty_function_base_url(array('url'=>'admin/goods/goodsedit'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value->goods_id;?>
" title="编辑"><img src="<?php echo smarty_function_base_url(array('url'=>'public/admin/images'),$_smarty_tpl);?>
/icon_edit.gif" width="16" height="16" border="0"></a>
      <a href="<?php echo smarty_function_base_url(array('url'=>'admin/goods/huishou'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value->goods_id;?>
" onclick="confrim('您确实要把该商品放入回收站吗？')" title="回收站"><img src="<?php echo smarty_function_base_url(array('url'=>'public/admin/images'),$_smarty_tpl);?>
/icon_trash.gif" width="16" height="16" border="0"></a>
      </td>

  </tr>
  <?php } ?>
</table>

<table cellspacing="0" id="page-table">
  <tbody><tr>
    <td nowrap="true" align="right" style="background-color: rgb(255, 255, 255);">
	  <div id="turn-page">
        总计  <span id="totalRecords"><<?php ?>?php echo $total;?<?php ?>></span>
        个记录分为 <span id="totalPages"><<?php ?>?php echo $total_page;?<?php ?>></span>
        页当前第 <span id="pageCurrent"><<?php ?>?php echo $page;?<?php ?>></span>
        页，每页 
         
		</select>
        </span>
      </div>
    </td>
  </tr>
</tbody>
</table>
</div>

<div>

  <select name="type" id='sel' onchange='change()'>
    <option value='0'>请选择..</option>
    <option value='nosale'>批量下架</option>
    <option value='sale'>批量上架</option>
    <option value='del'>批量删除</option>
    <option value='woman'>批量女装显示</option>
    <option value='nowoman'>批量女装不显示</option>
    <option value='man'>批量男装显示</option>
    <option value='noman'>批量男装不显示</option>
  </select>
	  
    <input type="submit" class="button" id="sub" value=" 确定 " disabled='true'>
</div>

</form>

<div id="footer">
&copy;Ecshop, Thank You!
</div>

</body>
</html>
<script type='text/javascript'>
  function change()
  {
    var sel = document.getElementById('sel');
    var sub = document.getElementById('sub');
    if(sel.value != 0)
    {
      sub.disabled = '';
    }
    if(sel.value == 0)
    {
      sub.disabled = 'true';
    }
  }

  function onattr(id)
   {
      $.get("<?php echo smarty_function_base_url(array('url'=>'admin/goods/onattr'),$_smarty_tpl);?>
","goods_id="+id,function(msg){
        var re = msg
        if(re==1)
        {
          alert('已添加属性，如需修改，请点击编辑！');
        }
        else
        {
          window.location.href="<?php echo smarty_function_base_url(array('url'=>'admin/attribute/goodsattr'),$_smarty_tpl);?>
/"+id;
        }
      }); 
   }

  function onattrb(id)
   {
      $.get("<?php echo smarty_function_base_url(array('url'=>'admin/goods/onattr'),$_smarty_tpl);?>
","goods_id="+id,function(msg){
        var re = msg
        if(re==1)
        {
          window.location.href="<?php echo smarty_function_base_url(array('url'=>'admin/attribute/gaedit'),$_smarty_tpl);?>
/"+id;
        }
        else
        {
          alert('您还没有添加属性，不能修改');
        }
      }); 
   }

function sale(id,cid)
{
   $.get("<?php echo smarty_function_base_url(array('url'=>'admin/goods/updown'),$_smarty_tpl);?>
","goods_id="+id,function(msg){
      if(msg==1)
      {
        $(cid).attr("src","<?php echo smarty_function_base_url(array('url'=>'public/admin/images'),$_smarty_tpl);?>
/no.gif");
      }
      else
      {
        $(cid).attr("src","<?php echo smarty_function_base_url(array('url'=>'public/admin/images'),$_smarty_tpl);?>
/yes.gif");
      }
   });
}
 
 //修改推荐
 $(function() {
	 
	 $('.recom').on('click',function() {
		 var _this = $(this);
		 $.ajax({
			 type : 'post',
			 datatype : 'string',
			 url : "<?php echo smarty_function_base_url(array('url'=>'admin/goods/mof_is_recom'),$_smarty_tpl);?>
",
			 data : {
				 'goods_id' : _this.attr('id'),
				 'is_recom' :  _this.attr('is_recom'),
			 },
			 success: function(res,status,xhr) {
				 if(res == '1') {
					_this.attr('src',"<?php echo smarty_function_base_url(array('url'=>'public/admin/images'),$_smarty_tpl);?>
/yes.gif");
					_this.attr('is_recom','1');
				 }else if (res == '0') {
					 _this.attr('src',"<?php echo smarty_function_base_url(array('url'=>'public/admin/images'),$_smarty_tpl);?>
/no.gif");
					 _this.attr('is_recom','0');
				 }
			 },
		 });
	 });
	 
 });
 
 
 
 
</script><?php }} ?>
