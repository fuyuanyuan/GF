<?php /* Smarty version Smarty-3.1.18, created on 2014-06-12 21:20:44
         compiled from "application\views\admin\article\show_list.html" */ ?>
<?php /*%%SmartyHeaderCode:290665399a92c5a7f79-77453707%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b0f76beaebd68615284610048c3fd155362b610' => 
    array (
      0 => 'application\\views\\admin\\article\\show_list.html',
      1 => 1401336522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '290665399a92c5a7f79-77453707',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'samrty' => 0,
    'art_list' => 0,
    'art' => 0,
    'links' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5399a92c824b80_34511799',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5399a92c824b80_34511799')) {function content_5399a92c824b80_34511799($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include 'C:\\AppServ\\www\\GF\\application\\libraries\\Smarty\\plugins\\function.base_url.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:\\AppServ\\www\\GF\\application\\libraries\\Smarty\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\AppServ\\www\\GF\\application\\libraries\\Smarty\\plugins\\modifier.date_format.php';
?><html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>GF_SHOP 管理中心 - 文章列表 </title>
<meta content="noindex, nofollow" name="robots">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<link type="text/css" rel="stylesheet" href="<?php echo @constant('B_CSS_DIR');?>
general.css">
<link type="text/css" rel="stylesheet" href="<?php echo @constant('B_CSS_DIR');?>
main.css">
<link rel="stylesheet" href="<?php echo dirname(@constant('B_CSS_DIR'));?>
/kindeditor/themes/simple/simple.css" />

</head>
<body>
<h1>
<span class="action-span"><a href="<?php echo smarty_function_base_url(array('url'=>'admin/article/add'),$_smarty_tpl);?>
">添加新文章</a></span>
<span class="action-span1"><a href="index.php?act=main">GF_SHOP 管理中心</a> </span><span class="action-span1" id="search_id"> - 文章列表 </span>
<div style="clear:both"></div>
</h1>
<script src="<?php echo $_smarty_tpl->tpl_vars['samrty']->value['const']['B_JS_DIR'];?>
utils.js" type="text/javascript"></script><script src="js/listtable.js" type="text/javascript"></script><div class="form-div">
  <form name="searchForm" action="javascript:searchArticle()">
    <img width="26" height="22" border="0" alt="SEARCH" src="<?php echo @constant('B_IMG_DIR');?>
icon_search.gif">
    文章标题<input type="text" id="keyword" name="keyword">
    <input type="submit" class="button" value=" 搜索 ">
  </form>
</div>

<form name="listForm" action="article.php?act=batch_remove" method="POST">
<!-- start cat list -->
<div id="listDiv" class="list-div">
    <table cellspacing="1" cellpadding="3" id="list-table">
  <tbody><tr>
    <th><input type="checkbox" onclick="listTable.selectAll(this, &quot;checkboxes&quot;)">
      <a href="javascript:listTable.sort('article_id'); ">编号</a><img src="<?php echo @constant('B_IMG_DIR');?>
sort_desc.gif"></th>
    <th><a href="javascript:listTable.sort('title'); ">文章标题</a></th>
    <th><a href="javascript:listTable.sort('cat_id'); ">文章内容</a></th>
    <th><a href="javascript:listTable.sort('cat_id'); ">作者</a></th>
    <th><a href="javascript:listTable.sort('is_open'); ">是否显示</a></th>
    <th><a href="javascript:listTable.sort('add_time'); ">添加日期</a></th>
    <th>操作</th>
  </tr>
      <?php if (isset($_smarty_tpl->tpl_vars['art_list']->value)) {?>
      <?php  $_smarty_tpl->tpl_vars['art'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['art']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['art_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['art']->key => $_smarty_tpl->tpl_vars['art']->value) {
$_smarty_tpl->tpl_vars['art']->_loop = true;
?>
    <tr>
    <td style="background-color: rgb(255, 255, 255);"><span><input type="checkbox" value="35" name="checkboxes[]"><?php echo $_smarty_tpl->tpl_vars['art']->value->art_id;?>
</span></td>
    <td class="first-cell" style="background-color: rgb(255, 255, 255);">
    <span onclick="javascript:listTable.edit(this, 'edit_title', 35)"><?php echo $_smarty_tpl->tpl_vars['art']->value->art_title;?>
</span></td>
    <td align="left" style="background-color: rgb(255, 255, 255);"><span><!--  --><?php echo smarty_modifier_truncate(htmlspecialchars($_smarty_tpl->tpl_vars['art']->value->art_content),35,'...','utf-8');?>
<!--  --></span></td>
    <td align="center" style="background-color: rgb(255, 255, 255);"><span><?php echo $_smarty_tpl->tpl_vars['art']->value->art_author;?>
</span></td>
    <td align="center" style="background-color: rgb(255, 255, 255);"><span>
    <img onclick="listTable.toggle(this, 'toggle_show', 35)"
    <?php if ($_smarty_tpl->tpl_vars['art']->value->is_show=='0') {?>
        src="<?php echo @constant('B_IMG_DIR');?>
no.gif" 
    <?php } else { ?>
        src="<?php echo @constant('B_IMG_DIR');?>
yes.gif" 
    <?php }?>
    /></span></td>
    <td align="center" style="background-color: rgb(255, 255, 255);"><span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['art']->value->art_time,'%Y-%m-%d %H:%M:%S');?>
</span></td>
    <td nowrap="true" align="center" style="background-color: rgb(255, 255, 255);">
    <span>
        <a title="查看" target="_blank" href="<?php echo smarty_function_base_url(array('url'=>'admin/article/forword'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['art']->value->art_id;?>
"><img width="16" height="16" border="0" src="<?php echo @constant('B_IMG_DIR');?>
icon_view.gif"></a>&nbsp;
      <a title="编辑" href="<?php echo smarty_function_base_url(array('url'=>'admin/article/editArt'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['art']->value->art_id;?>
"><img width="16" height="16" border="0" src="<?php echo @constant('B_IMG_DIR');?>
icon_edit.gif"></a>&nbsp;
      <a title="移除" onclick="return confirm('您确认要删除这篇文章吗？')" href="<?php echo smarty_function_base_url(array('url'=>'admin/article/delArt'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['art']->value->art_id;?>
"><img width="16" height="16" border="0" src="<?php echo @constant('B_IMG_DIR');?>
icon_drop.gif"></a>
    </span>
    </td>
   </tr>
      <?php } ?>
      <?php }?>
   <tr>
         <td nowrap="true" align="right" colspan="8">      <!-- $Id: page.htm 14216 2008-03-10 02:27:21Z testyang $ -->
            <div id="turn-page">
                <?php if (isset($_smarty_tpl->tpl_vars['links']->value)) {?>
                 <?php echo $_smarty_tpl->tpl_vars['links']->value;?>

                 <?php }?>
            </div>
        </td>
  </tr>
</tbody></table>

</div>

<div>
  <input type="hidden" value="batch" name="act">
  <select onchange="changeAction()" id="selAction" name="type">
    <option value="">请选择...</option>
    <option value="button_remove">批量删除</option>
    <option value="button_hide">批量隐藏</option>
    <option value="button_show">批量显示</option>
    <option value="move_to">转移到分类</option>
  </select>
  <select style="display:none" name="target_cat">
    <option value="0">请选择...</option>
    <option cat_type="1" value="11">手机促销</option><option cat_type="2" value="1">系统分类</option><option cat_type="3" value="2">&nbsp;&nbsp;&nbsp;&nbsp;网店信息</option><option cat_type="4" value="3">&nbsp;&nbsp;&nbsp;&nbsp;网店帮助分类</option><option cat_type="5" value="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;新手上路 </option><option cat_type="5" value="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;手机常识 </option><option cat_type="5" value="7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;配送与支付 </option><option cat_type="5" value="8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;服务保证 </option><option cat_type="5" value="9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;联系我们 </option><option cat_type="5" value="10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;会员中心</option><option cat_type="1" value="12">站内快讯</option><option cat_type="1" value="4">3G资讯</option>  </select>

  <input type="submit" disabled="true" class="button" name="btnSubmit" id="btnSubmit" value=" 确定 ">
</div>
</form>
<div id="footer">
共执行 3 个查询，用时 0.016830 秒，Gzip 已禁用，内存占用 2.430 MB<br>
版权所有 &copy; 2005-2012 上海商派网络科技有限公司，并保留所有权利。</div>
</body></html><?php }} ?>
