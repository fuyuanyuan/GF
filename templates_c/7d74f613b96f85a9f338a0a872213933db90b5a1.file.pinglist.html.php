<?php /* Smarty version Smarty-3.1.18, created on 2014-06-19 09:16:47
         compiled from "application\views\admin\pinglun\pinglist.html" */ ?>
<?php /*%%SmartyHeaderCode:31233539d190bc1f8d1-55756187%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d74f613b96f85a9f338a0a872213933db90b5a1' => 
    array (
      0 => 'application\\views\\admin\\pinglun\\pinglist.html',
      1 => 1403140542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31233539d190bc1f8d1-55756187',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_539d190bda6332_09228099',
  'variables' => 
  array (
    'comlist' => 0,
    'crow' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539d190bda6332_09228099')) {function content_539d190bda6332_09228099($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include 'C:\\AppServ\\www\\GF\\application\\libraries\\Smarty\\plugins\\function.base_url.php';
?><html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>ECSHOP 管理中心 - 评论列表 </title>
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
<span class="action-span"><a href="<?php echo smarty_function_base_url(array('url'=>'admin/pinglun/add'),$_smarty_tpl);?>
">添加评论</a></span>
<span class="action-span1"><a href="#">ECSHOP 管理中心</a> </span><span class="action-span1" id="search_id"> - 评论列表 </span>
<div style="clear:both"></div>
</h1>

<!-- start ad position list -->
<div id="listDiv" class="list-div">

<table width="100%" cellspacing="1" cellpadding="2" id="list-table">
  <tbody><tr>
  <th>ID</th>
  <th>所属商品id</th>
  <th>评论人</th>
  <th>级别</th>
  <th>满意度</th>
  <th>评论内容</th>
  <th>评论时间</th>
  <th>管理员回复</th>
	<th>操作</th>
  </tr>
<?php  $_smarty_tpl->tpl_vars['crow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['crow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['crow']->key => $_smarty_tpl->tpl_vars['crow']->value) {
$_smarty_tpl->tpl_vars['crow']->_loop = true;
?>
  <tr id="0_6" class="0">
    <td align="center"><?php echo $_smarty_tpl->tpl_vars['crow']->value->comment_id;?>
</td>
    <td align="center"><?php echo $_smarty_tpl->tpl_vars['crow']->value->goods_id;?>
</td>
    <td align="center"><?php echo $_smarty_tpl->tpl_vars['crow']->value->user_name;?>
</td>
    <td align="center"><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['name'] = 'loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] = is_array($_loop=($_smarty_tpl->tpl_vars['crow']->value->comment_xing)) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total']);
?><img src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
public/default/images/xing.png"><?php endfor; endif; ?></td>
    <td><?php if ($_smarty_tpl->tpl_vars['crow']->value->comment_rank==0) {?>好评<?php } elseif ($_smarty_tpl->tpl_vars['crow']->value->comment_rank==1) {?>中评<?php } else { ?>差评<?php }?></td>
    <td><?php echo $_smarty_tpl->tpl_vars['crow']->value->content;?>
</td>
  
    <td align="center" width=100><?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['crow']->value->add_time);?>
</td>
    <td align="center" width=100><a href="<?php echo smarty_function_base_url(array('url'=>'admin/reply/add/'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['crow']->value->comment_id;?>
">点击回复</a></td>
    <td align="center" width=60>
      <a href="<?php echo smarty_function_base_url(array('url'=>'admin/pinglun/edit'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['crow']->value->comment_id;?>
" title="编辑"><img src="<?php echo smarty_function_base_url(array('url'=>'public/admin/images'),$_smarty_tpl);?>
/icon_edit.gif" width="16" height="16" border="0"></a>
      <a href="<?php echo smarty_function_base_url(array('url'=>'admin/pinglun/del'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['crow']->value->comment_id;?>
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

<div id="footer">
&copy;Ecshop, Thank You!
</div>

</body>
</html>
<?php }} ?>
