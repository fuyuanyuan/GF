<?php /* Smarty version Smarty-3.1.18, created on 2014-06-14 23:54:37
         compiled from "application\views\welcome\goodslist.html" */ ?>
<?php /*%%SmartyHeaderCode:243575399488f3ff8a1-19650594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9181ace8ae961afeea2fdac734ab04916edc98f' => 
    array (
      0 => 'application\\views\\welcome\\goodslist.html',
      1 => 1402761248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '243575399488f3ff8a1-19650594',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5399488f58a178_94531891',
  'variables' => 
  array (
    'a_id' => 0,
    'page_size' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5399488f58a178_94531891')) {function content_5399488f58a178_94531891($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("./header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		
		<!-- BREADCRUMB -->
		<div class="breadcrumb-container">
			<div class="container">
				<div class="relative">
					<ul class="bc push-up unstyled clearfix">
						<li><a href="">Home</a></li>
						<li class="active">Products</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="div_g"></div>
		<div id="atr_id" val="<?php echo $_smarty_tpl->tpl_vars['a_id']->value;?>
"></div>
		
		<div class="container" >
			<div class="row">
				<div class="col-md-3 pull-left" >
					<div class="panel-group">
						<div class="panel panel-default">
							<div class="panel-heading">
								<div class="panel-title">
									<a href="#son_nav" data-toggle="collapse" id="son_nav_m">导航列表</a>
								</div>
							</div>
							<div class="panel-collapse collapse in" id="son_nav">
								<div class="panel-body">
									<div class="container">
										<div class="row" >
											<div class="col-md-6">
												<ul class="list_unstyle" id="ul_nav">
													
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="panel panel-default">
							<div class="panel-heading">
								<div class="panel-title">
									<a href="#hot_sale" data-toggle="collapse">热销推荐</a>
								</div>
							</div>
							<div class="panel-collapse collapse in" id="hot_sale">
								<div class="panel-body">
									<div class="container">
										<div class="row" >
											<ul id="sale_li" style="font-size:12px">
												
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="panel panel-default">
							<div class="panel-heading">
								<div class="panel-title">
									<a href="#near_look" data-toggle="collapse">最近浏览</a>
								</div>
							</div>
							<div class="panel-collapse collapse in" id="near_look">
								<div class="panel-body">
									<div class="container">
										<div class="row" >
											<ul id="near_info" style="font-size:12px">
													
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						
					</div>
				</div>
				<div class="col-md-9 pull-right">
					<div  class="panel-group">
					
						<div class="panel panel-default">
							<div class="panel-heading">
								<div class="panel-heading">
									<div class="panel-title">
										<span data-toggle="collapse">您可以通过筛选，选择合适的商品</span>
									</div>
								</div>
							</div>
							<div class="panel-collapse collapse in" >
								<div class="panel-body">
									<div class="container">
										<div class="row">
											<div class="col-md-10">
												
												<strong class="lead">价格：</strong>
												<ul class="list-unstyle list-inline to_inline price_click">
													<li class="btn btn-primary"><a href="javascript:void(0)">全部</a></li>
													<li><a href="javascript:void(0)">0-89</a></li>
													<li><a href="javascript:void(0)">90-199</a></li>
													<li><a href="javascript:void(0)">200-499</a></li>
													<li><a href="javascript:void(0)">500以上</a></li>
												</ul>
												<div class="div_g"></div>
												<strong class="lead">品牌：</strong>
												<ul class="list-unstyle list-inline to_inline brand_click" id="brand_ul">
													<li class="brand_li btn btn-primary"><a href="javascript:void(0)">全部</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	
						
					</div>
					
						
						<div class="div_g"></div>
						<div class="panel panel-default">
							<div class="panel-body" id="pro_body">
								
								<div class="products-layout grid m-t-b" >
								<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['page_size']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['page_size']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
								<!-- 单个商品 -->
								<div status="product_is_none<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" class="product product_my ">
									<div class="entry-media">
										<img src="<?php echo @constant('IMG_DIR');?>
/AjaxLoader2.gif" alt=""  class="img_my list_thumb<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"/>
										<div class="hover">
											<a href="" class="entry-url list_url<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" target="_blank"></a>
											<ul class="icons unstyled">
												<li>
													<a href="<?php echo @constant('IMG_DIR');?>
/AjaxLoader2.gif" class="circle list_img<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" data-toggle="lightbox"><i class="iconfont-search"></i></a>
												</li>
											</ul>
										</div>
									</div>
									<div class="entry-main">
										<h5 class="entry-title">
											<a title=""  href="#" target="_blank" class="small list_title<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
">请稍后...</a>
										</h5>
										<div class="entry-price">
											<s class="entry-discount list_market_price<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"></s>
											<strong class="accent-color price list_shop_price<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"></strong>
										</div>
									</div>
								</div>
									<!-- 单个商品 -->			
								<?php }} ?>
								</div>
									<div class="pager">
										<button type="button" class="btn btn-primary previous" id="page_pre" val="1">上一页</button>
										
										<button type="button" class="btn btn-primary next" id="page_next" val="1">下一页</button>
									</div>
							</div>
						</div>
					
				</div>
				<div class="div_g"></div>
			</div>
		</div>
	
		<script type="text/javascript" src="<?php echo @constant('JS_DIR');?>
list.js"></script>
		<?php echo $_smarty_tpl->getSubTemplate ("./footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
