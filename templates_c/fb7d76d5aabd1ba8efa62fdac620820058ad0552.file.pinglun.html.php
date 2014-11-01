<?php /* Smarty version Smarty-3.1.18, created on 2014-06-14 20:04:16
         compiled from "application\views\welcome\pinglun\pinglun.html" */ ?>
<?php /*%%SmartyHeaderCode:31422539c3a40def894-33730335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb7d76d5aabd1ba8efa62fdac620820058ad0552' => 
    array (
      0 => 'application\\views\\welcome\\pinglun\\pinglun.html',
      1 => 1402747069,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31422539c3a40def894-33730335',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'orow' => 0,
    'goods' => 0,
    'grow' => 0,
    'nums' => 0,
    'urow' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_539c3a40f186d5_61089244',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539c3a40f186d5_61089244')) {function content_539c3a40f186d5_61089244($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include 'C:\\AppServ\\www\\GF\\application\\libraries\\Smarty\\plugins\\function.base_url.php';
?><?php echo $_smarty_tpl->getSubTemplate ("../header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<!-- // SITE HEADER -->
	
		<!-- BREADCRUMB -->
		<div class="breadcrumb-container">
			<div class="container">
				<div class="relative">
					<ul class="bc unstyled clearfix">
						<li><a href="#">首页</a></li>
						<li class="active">用户评论</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- // BREADCRUMB -->
		
		<!-- SITE MAIN CONTENT -->
		<main id="main-content" role="main">
				
			<div class="container">
				<div class="row">

				<!-- CONTENT -->
				<br>
					<table class="table table-bordered">
						<tr>
							<td width=240 align='center'>订单号：</td><td><?php echo $_smarty_tpl->tpl_vars['orow']->value->order_sn;?>
</td>
						</tr>
					</table>
					<div class='col-md-6'>
						<?php  $_smarty_tpl->tpl_vars['grow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['grow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['grow']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['grow']->key => $_smarty_tpl->tpl_vars['grow']->value) {
$_smarty_tpl->tpl_vars['grow']->_loop = true;
 $_smarty_tpl->tpl_vars['grow']->index++;
?>
						<table class="table table-bordered">
							<tr>
								<td rowspan='3' align='center' width=160><img src="<?php echo smarty_function_base_url(array('url'=>'public/upload/'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['grow']->value->goods_thumb;?>
" width=100 height=160/></td><td width=50>订单商品</td><td width=180><?php echo $_smarty_tpl->tpl_vars['grow']->value->goods_name;?>
</td>
							</tr>
							<tr>
								<td width=80>商品单价：</td><td><?php echo $_smarty_tpl->tpl_vars['grow']->value->shop_price;?>
</td>			
							</tr>
							<tr>
								<td width=80>购买数量：</td><td><?php echo $_smarty_tpl->tpl_vars['nums']->value[$_smarty_tpl->tpl_vars['grow']->index];?>
</td>
							</tr>
						</table>
						<br/>
						<?php } ?>
					</div>
						
	
				<!-- 评价表单-->
				
			<div class='col-md-5'>
				<form role="form" action="<?php echo smarty_function_base_url(array('url'=>'home/pinglun/insert'),$_smarty_tpl);?>
" method='post'>
					<input type='hidden' name='gids'value='<?php echo $_smarty_tpl->tpl_vars['orow']->value->gids;?>
'>
					<input type='hidden' name='user_name'value='<?php echo $_smarty_tpl->tpl_vars['urow']->value->user_name;?>
'>
					<input type='hidden' name='user_id'value='<?php echo $_smarty_tpl->tpl_vars['orow']->value->user_id;?>
'>
					<?php  $_smarty_tpl->tpl_vars['grow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['grow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['grow']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['grow']->key => $_smarty_tpl->tpl_vars['grow']->value) {
$_smarty_tpl->tpl_vars['grow']->_loop = true;
 $_smarty_tpl->tpl_vars['grow']->index++;
?>
					<div class="form-group stylish-input">
						<input type="radio" name="rank<?php echo $_smarty_tpl->tpl_vars['grow']->value->goods_id;?>
" class="prettyCheckable m-r" data-label="好评" checked="checked" value='0' />
						<input type="radio" name="rank<?php echo $_smarty_tpl->tpl_vars['grow']->value->goods_id;?>
" class="prettyCheckable" data-label="中评" value='1' />
						<input type="radio" name="rank<?php echo $_smarty_tpl->tpl_vars['grow']->value->goods_id;?>
" class="prettyCheckable" data-label="差评" value='2' />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<div class="rate-bar inline-middle">
                        <!-- 评价星星 -->
							<input style="display: none;" value="5" step="1" id="backing0" type="range" name='xing<?php echo $_smarty_tpl->tpl_vars['grow']->value->goods_id;?>
'>
							<div class="rateit" data-rateit-backingfld="#backing0" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false" data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5">
							</div>
						</div>
						<span class="entry-review-count inline-middle">(请选择您的满意度)</span>
						<!-- 评价星星 -->
					</div>


					<div class="form-group">
						<textarea class="form-control" rows="5" name='content<?php echo $_smarty_tpl->tpl_vars['grow']->value->goods_id;?>
'></textarea>
					</div>
					<?php } ?>
				
					<center>
						<button type="submit" class="btn btn-primary btn-lg">提交评论</button>&nbsp;&nbsp;&nbsp;&nbsp;
						<button type="reset" class="btn btn-primary btn-lg">重  置</button>
						<br/>
						<br/>
					</center>
				</form>	
			</div>
					<!-- 评价表单-->

				<!-- CONTENT -->

				
				</div>
			</div>
			
		</main>
		<!-- // SITE MAIN CONTENT -->
		
		<?php echo $_smarty_tpl->getSubTemplate ("../footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<script src="<?php echo smarty_function_base_url(array('url'=>'public/default/js/minified.js'),$_smarty_tpl);?>
"></script>
<!-- // Essential Javascripts -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-27646173-3', 'themina.net');
  ga('send', 'pageview');

</script>

	<?php }} ?>
