<?php /* Smarty version Smarty-3.1.18, created on 2014-06-15 15:27:32
         compiled from "application\views\welcome\artical.html" */ ?>
<?php /*%%SmartyHeaderCode:30210539d4ae4414671-80227377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44d6ad9b84cb7c067ef4ff47862365be6189dd85' => 
    array (
      0 => 'application\\views\\welcome\\artical.html',
      1 => 1401599628,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30210539d4ae4414671-80227377',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'min' => 0,
    'max' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_539d4ae44c0498_10042503',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539d4ae44c0498_10042503')) {function content_539d4ae44c0498_10042503($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("./header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<!-- BREADCRUMB -->
		<div class="breadcrumb-container">
			<div class="container">
				<div class="relative">
					<ul class="bc unstyled clearfix">
						<li><a href="#">Home</a></li>
						<li class="active">文章信息</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- // BREADCRUMB -->
		
		<!-- SITE MAIN CONTENT -->
		<main id="main-content" role="main">
		<div class="section" id="art_parent">
			<div class="container" id="art_info" style="min-height:500px;">
			
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<h3 class="section-title"><?php echo $_smarty_tpl->tpl_vars['info']->value[0]->art_title;?>
</h3>
						<small><cite class="pull-right">发布者：<?php echo $_smarty_tpl->tpl_vars['info']->value[0]->art_author;?>
　　发布时间：<?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['info']->value[0]->art_time);?>
</cite></small>
					</div>
					
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
						<hr />
						<?php echo $_smarty_tpl->tpl_vars['info']->value[0]->art_content;?>

						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="btn-group" style="display:block;">
						<?php if ($_smarty_tpl->tpl_vars['info']->value[0]->art_id!=$_smarty_tpl->tpl_vars['min']->value) {?>
						<button val="<?php echo $_smarty_tpl->tpl_vars['info']->value[0]->art_id;?>
" class="btn btn-primary pull-left" id="art_pre">上一篇</button>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['info']->value[0]->art_id!=$_smarty_tpl->tpl_vars['max']->value) {?>
						<button class="btn btn-primary pull-right" val="<?php echo $_smarty_tpl->tpl_vars['info']->value[0]->art_id;?>
" id="art_next">下一篇</button>
						<?php }?>
					</div>					
				</div>
				
			</div>
		</div>	
			
		</main>
		<!-- // SITE MAIN CONTENT -->
		<div id="art_loading" style="width:150px;height:30px;line-height:30px;background:lightblue;border:1px solid blue;text-indent:10px;position:absolute;top:500px;left:500px;display:none;">
			加载中，请稍后...
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ("./footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
