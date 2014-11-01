<?php /* Smarty version Smarty-3.1.18, created on 2014-06-19 10:07:48
         compiled from "application\views\welcome\details.html" */ ?>
<?php /*%%SmartyHeaderCode:29114539941dc9ab363-56832602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab0229b32bdc2e62b0e780aabc3125ac35b38701' => 
    array (
      0 => 'application\\views\\welcome\\details.html',
      1 => 1403143640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29114539941dc9ab363-56832602',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_539941dcc91667_00410597',
  'variables' => 
  array (
    'g_id' => 0,
    'pinglist' => 0,
    'prow' => 0,
    'relist' => 0,
    'k' => 0,
    'rerow' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539941dcc91667_00410597')) {function content_539941dcc91667_00410597($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include 'C:\\AppServ\\www\\GF\\application\\libraries\\Smarty\\plugins\\function.base_url.php';
?><?php echo $_smarty_tpl->getSubTemplate ("./header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<!-- BREADCRUMB -->
		<div class="breadcrumb-container">
			<div class="container">
				<div class="relative">
					<ul class="bc unstyled clearfix">
						<li><a href="#">Home</a></li>
						<li><a href="products.html">Products</a></li>
						<li class="active">Product Detail</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- // BREADCRUMB -->
		<div id="g_id" val="<?php echo $_smarty_tpl->tpl_vars['g_id']->value;?>
"></div>
		<!-- SITE MAIN CONTENT -->
		<main id="main-content" role="main">
					
			<section class="section">
				<div class="container">
					<div class="row">
						<!-- PRODUCT PREVIEW -->
						<div class="col-xs-12 col-sm-4">
							
							<div class="product-preview" >
								<div class="big-image">
									<a id="g_img" href="$smarty.const.IMG_DIR}/AjaxLoader2.gif" data-toggle="lightbox">
										<img id="img_thumb" src="<?php echo @constant('IMG_DIR');?>
/AjaxLoader2.gif" alt="" />
									</a>
								</div>
								<ul class="thumbs unstyled clearfix" id="pics">
								</ul>
							</div>
							
						</div>
						<!-- // PRODUCT PREVIEW -->
						<div class="space40 visible-xs"></div>
						<!-- PRODUCT DETAILS -->
						<div class="col-xs-12 col-sm-8">
							<section id="detail-car-num" class="product-details add-cart" data-product-id="" data-product=".product-details" data-thumbnail=".thumb" data-title=".uppercase" data-url=".g_utl" data-price=".entry-price"  >
								<img id="img_thumb_dis" class="thumb"  src="<?php echo @constant('IMG_DIR');?>
/AjaxLoader2.gif" style="display:none;"></img>
								<a class="g_utl" id="img_url_dis" href=""></a>
								<header class="entry-header">
									<h2 class="entry-title uppercase" id="g_title">请稍后..</h2>
								</header>
								<article class="entry-content">
									<figure>
										<span class="entry-price inline-middle" id="g_price" val="">请稍后...</span>
										<div class="rate-bar inline-middle">
											<input type="range" value="4.5" step="0.5" id="backing0" />
											<div class="rateit" data-rateit-backingfld="#backing0" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
										</div>
										<span class="entry-review-count inline-middle">( 2 Reviews )</span>
										
										<ul class="entry-meta unstyled">
											<li>
												<span class="key">品牌:</span>
												<span class="value" id="g_brand">请稍后..</span>
											</li>
											<li>
												<span class="key">获得积分:</span>
												<span class="value" id="g_jifen">请稍后..</span>
											</li>
											<li>
												<span class="key">货号:</span>
												<span class="value" id="g_sn">请稍后..</span>
											</li>
										</ul>
										
										<div class="clearfix"></div>
										
										<figcaption class="m-b-sm">
											<h5 class="subheader uppercase">简述:</h5>
											<p id="g_s_desc">请稍后..</p>
										</figcaption>
										
										<div class="row">
											<div class="col-xs-12 col-sm-6">
												<h5 class="subheader uppercase">颜色:</h5>
												<div class="inline-middle styled-dd">
													<select id="color">
														<option>-- 请选择 --</option>
														
													</select>
												</div>
											</div>
											<div class="space30 visible-xs"></div>
											<div class="col-xs-12 col-sm-6">
												<h5 class="subheader uppercase">尺寸:</h5>
												<div class="inline-middle styled-dd">
													<select id="size">
														<option>-- 请选择 --</option>
													</select>
												</div>
											</div>
										</div>
										<button type="button"  id="show_info" class="btn btn-primary disabled modal-dialog modal"></button>
										<ul class="inline-li li-m-r-l m-t-lg">
											<li>
												<a href="javascript:void(0);" class="btn btn-default btn-lg btn-round" id="add_card">加入购物车</a>
											</li>
										</ul>
										
									</figure>
								</article>
							</section>
						</div>
						<!-- // PRODUCT DETAILS -->
					</div>
					<div class="m-t-lg">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#product-description" data-toggle="tab">商品详情</a></li>
							<li><a href="#product-reviews" data-toggle="tab">评论</a></li>
							<li><a href="#product-shipping" data-toggle="tab">购买记录</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane fade in active" id="product-description">
									请稍后..
							</div>
							<div class="tab-pane fade in" id="product-reviews">
								<div class="comments-list">
									
								<?php  $_smarty_tpl->tpl_vars['prow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['prow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pinglist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['prow']->key => $_smarty_tpl->tpl_vars['prow']->value) {
$_smarty_tpl->tpl_vars['prow']->_loop = true;
?>
									<table class='table table-striped'>
									<tr>
										<td width=180><?php echo $_smarty_tpl->tpl_vars['prow']->value->user_name;?>
</td>
										<td width=80><?php if ($_smarty_tpl->tpl_vars['prow']->value->comment_rank==0) {?>好评<?php } elseif ($_smarty_tpl->tpl_vars['prow']->value->comment_rank==1) {?>中评<?php } else { ?>差评<?php }?></td>
						<!-- 评价星星 -->
						<td>				 
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['name'] = 'loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] = is_array($_loop=($_smarty_tpl->tpl_vars['prow']->value->comment_xing)) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
?> <img src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
public/default/images/xing.png"><?php endfor; endif; ?>
						</td>
						<!-- 评价星星 -->
										
									</tr>
									<tr>
										<td colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['prow']->value->content;?>
</td>
									</tr>
							</table>
			<!-- 管理员回复 -->
				<div class='pull-right'>
							
					<?php  $_smarty_tpl->tpl_vars['rerow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rerow']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['relist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rerow']->key => $_smarty_tpl->tpl_vars['rerow']->value) {
$_smarty_tpl->tpl_vars['rerow']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['rerow']->key;
?>
					<?php if ($_smarty_tpl->tpl_vars['prow']->value->comment_id==$_smarty_tpl->tpl_vars['k']->value) {?>
						<table class='table'>
						<tr>
							<td width=220 align='center'><?php echo $_smarty_tpl->tpl_vars['rerow']->value->manager_name;?>
&nbsp;&nbsp;&nbsp;&nbsp;回复</td>
							<td width=280 align='center'><?php echo date('Y-m-d H:m:s',$_smarty_tpl->tpl_vars['rerow']->value->rep_time);?>
</td>
						</tr>
						<tr>
							<td colspan='2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['rerow']->value->rep_content;?>
</td>
						</tr>
						</table>
					<?php }?>
					<?php } ?>
				</div>
					<!-- 管理员回复 -->
							
							<?php } ?>
								
									
								</div>
							</div>
							<div class="tab-pane fade in" id="product-shipping">
							请稍后..
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- FEATURED PRODUCTS -->
			<section class="section featured visible-items-4">
				<div class="container">
					<div class="row">
						<header class="section-header clearfix col-sm-offset-3 col-sm-6">
							<h3 class="section-title">feature products</h3>
							<p class="section-teaser">Lorem ipsum dolor sit amet, consectetur adipiscing elit ac lobortis lacus</p>
						</header>
						
						<div class="clearfix"></div>
						
						<!-- BEGIN CAROUSEL -->
						<div id="featured-products" class="add-cart" data-product=".product" data-thumbnail=".entry-media .thumb" data-title=".entry-title > a" data-url=".entry-title > a" data-price=".entry-price > .price">
						
							<div class="owl-controls clickable top">
								<div class="owl-buttons">
									<div class="owl-prev"><i class="iconfont-angle-left"></i></div>
									<div class="owl-next"><i class="iconfont-angle-right"></i></div>
								</div>
							</div>
							
							<div class="owl-carousel owl-theme" data-visible-items="4" data-navigation="true" data-lazyload="true">
								<div class="product" data-product-id="1">
									<div class="entry-media">
										<img data-src="img/products/1.jpg" alt="" class="lazyOwl thumb" />
										<div class="hover">
											<a href="#" class="entry-url"></a>
											<ul class="icons unstyled">
												<li>
													<div class="circle ribbon ribbon-sale">Sale</div>
												</li>
												<li>
													<a href="img/products/1.html" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
												</li>
												<li>
													<a href="#" class="circle add-to-cart"><i class="iconfont-shopping-cart"></i></a>
												</li>
											</ul>
											<div class="rate-bar">
												<input type="range" value="4.5" step="0.5" id="backing1" />
												<div class="rateit" data-rateit-backingfld="#backing1" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
											</div>
										</div>
									</div>
									<div class="entry-main">
										<h5 class="entry-title">
											<a href="#">Inceptos orci hac libero</a>
										</h5>
										<div class="entry-price">
											<s class="entry-discount">$ 350.00</s>
											<strong class="accent-color price">$ 250.00</strong>
										</div>
										<div class="entry-links clearfix">
											<a href="#" class="pull-left m-r">+ Add to Wishlist</a>
											<a href="#" class="pull-right">+ Add to Compare</a>
										</div>
									</div>
								</div>
								
								<div class="product" data-product-id="2">
									<div class="entry-media">
										<img data-src="img/products/2.jpg" alt="" class="lazyOwl thumb" />
										<div class="hover">
											<a href="#" class="entry-url"></a>
											<ul class="icons unstyled">
												<li>
													<a href="img/products/2.html" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
												</li>
												<li>
													<a href="#" class="circle add-to-cart" data-><i class="iconfont-shopping-cart"></i></a>
												</li>
											</ul>
											<div class="rate-bar">
												<input type="range" value="4" step="0.5" id="backing2" />
												<div class="rateit" data-rateit-backingfld="#backing2" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
											</div>
										</div>
									</div>
									<div class="entry-main">
										<h5 class="entry-title">
											<a href="#">Inceptos orci hac libero</a>
										</h5>
										<div class="entry-price">
											<strong class="price">$ 350.00</strong>
										</div>
										<div class="entry-links clearfix">
											<a href="#" class="pull-left m-r">+ Add to Wishlist</a>
											<a href="#" class="pull-right">+ Add to Compare</a>
										</div>
									</div>
								</div>
								
								<div class="product" data-product-id="3">
									<div class="entry-media">
										<img data-src="img/products/3.jpg" alt="" class="lazyOwl thumb" />
										<div class="hover">
											<a href="#" class="entry-url"></a>
											<ul class="icons unstyled">
												<li>
													<div class="circle ribbon ribbon-new">New</div>
												</li>
												<li>
													<a href="img/products/3.html" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
												</li>
												<li>
													<a href="#" class="circle add-to-cart" data-><i class="iconfont-shopping-cart"></i></a>
												</li>
											</ul>
											<div class="rate-bar">
												<input type="range" value="3.5" step="0.5" id="backing3" />
												<div class="rateit" data-rateit-backingfld="#backing3" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
											</div>
										</div>
									</div>
									<div class="entry-main">
										<h5 class="entry-title">
											<a href="#">Inceptos orci hac libero</a>
										</h5>
										<div class="entry-price">
											<strong class="price">$ 450.00</strong>
										</div>
										<div class="entry-links clearfix">
											<a href="#" class="pull-left m-r">+ Add to Wishlist</a>
											<a href="#" class="pull-right">+ Add to Compare</a>
										</div>
									</div>
								</div>
								
								<div class="product" data-product-id="4">
									<div class="entry-media">
										<img data-src="img/products/4.jpg" alt="" class="lazyOwl thumb" />
										<div class="hover">
											<a href="#" class="entry-url"></a>
											<ul class="icons unstyled">
												<li>
													<a href="img/products/4.html" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
												</li>
												<li>
													<a href="#" class="circle add-to-cart" data-><i class="iconfont-shopping-cart"></i></a>
												</li>
											</ul>
											<div class="rate-bar">
												<input type="range" value="5" step="0.5" id="backing4" />
												<div class="rateit" data-rateit-backingfld="#backing4" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
											</div>
										</div>
									</div>
									<div class="entry-main">
										<h5 class="entry-title">
											<a href="#">Inceptos orci hac libero</a>
										</h5>
										<div class="entry-price">
											<strong class="price">$ 350.00</strong>
										</div>
										<div class="entry-links clearfix">
											<a href="#" class="pull-left m-r">+ Add to Wishlist</a>
											<a href="#" class="pull-right">+ Add to Compare</a>
										</div>
									</div>
								</div>
								
								<div class="product" data-product-id="5">
									<div class="entry-media">
										<img data-src="img/products/1.jpg" alt="" class="lazyOwl thumb" />
										<div class="hover">
											<a href="#" class="entry-url"></a>
											<ul class="icons unstyled">
												<li>
													<div class="circle ribbon ribbon-sale">Sale</div>
												</li>
												<li>
													<a href="img/products/1.html" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
												</li>
												<li>
													<a href="#" class="circle add-to-cart" data-><i class="iconfont-shopping-cart"></i></a>
												</li>
											</ul>
											<div class="rate-bar">
												<input type="range" value="4.5" step="0.5" id="backing5" />
												<div class="rateit" data-rateit-backingfld="#backing5" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
											</div>
										</div>
									</div>
									<div class="entry-main">
										<h5 class="entry-title">
											<a href="#">Inceptos orci hac libero</a>
										</h5>
										<div class="entry-price">
											<s class="entry-discount">$ 350.00</s>
											<strong class="accent-color price">$ 250.00</strong>
										</div>
										<div class="entry-links clearfix">
											<a href="#" class="pull-left m-r">+ Add to Wishlist</a>
											<a href="#" class="pull-right">+ Add to Compare</a>
										</div>
									</div>
								</div>
								
								<div class="product" data-product-id="6">
									<div class="entry-media">
										<img data-src="img/products/2.jpg" alt="" class="lazyOwl thumb" />
										<div class="hover">
											<a href="#" class="entry-url"></a>
											<ul class="icons unstyled">
												<li>
													<a href="img/products/2.html" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
												</li>
												<li>
													<a href="#" class="circle add-to-cart" data-><i class="iconfont-shopping-cart"></i></a>
												</li>
											</ul>
											<div class="rate-bar">
												<input type="range" value="4" step="0.5" id="backing6" />
												<div class="rateit" data-rateit-backingfld="#backing6" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
											</div>
										</div>
									</div>
									<div class="entry-main">
										<h5 class="entry-title">
											<a href="#">Inceptos orci hac libero</a>
										</h5>
										<div class="entry-price">
											<strong class="price">$ 350.00</strong>
										</div>
										<div class="entry-links clearfix">
											<a href="#" class="pull-left m-r">+ Add to Wishlist</a>
											<a href="#" class="pull-right">+ Add to Compare</a>
										</div>
									</div>
								</div>
								
								<div class="product" data-product-id="7">
									<div class="entry-media">
										<img data-src="img/products/3.jpg" alt="" class="lazyOwl thumb" />
										<div class="hover">
											<a href="#" class="entry-url"></a>
											<ul class="icons unstyled">
												<li>
													<div class="circle ribbon ribbon-new">New</div>
												</li>
												<li>
													<a href="img/products/3.html" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
												</li>
												<li>
													<a href="#" class="circle add-to-cart" data-><i class="iconfont-shopping-cart"></i></a>
												</li>
											</ul>
											<div class="rate-bar">
												<input type="range" value="3.5" step="0.5" id="backing7" />
												<div class="rateit" data-rateit-backingfld="#backing7" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
											</div>
										</div>
									</div>
									<div class="entry-main">
										<h5 class="entry-title">
											<a href="#">Inceptos orci hac libero</a>
										</h5>
										<div class="entry-price">
											<strong class="price">$ 450.00</strong>
										</div>
										<div class="entry-links clearfix">
											<a href="#" class="pull-left m-r">+ Add to Wishlist</a>
											<a href="#" class="pull-right">+ Add to Compare</a>
										</div>
									</div>
								</div>
								
								<div class="product" data-product-id="8">
									<div class="entry-media">
										<img data-src="img/products/4.jpg" alt="" class="lazyOwl thumb" />
										<div class="hover">
											<a href="#" class="entry-url"></a>
											<ul class="icons unstyled">
												<li>
													<a href="img/products/4.html" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
												</li>
												<li>
													<a href="#" class="circle add-to-cart" data-><i class="iconfont-shopping-cart"></i></a>
												</li>
											</ul>
											<div class="rate-bar">
												<input type="range" value="5" step="0.5" id="backing8" />
												<div class="rateit" data-rateit-backingfld="#backing8" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
											</div>
										</div>
									</div>
									<div class="entry-main">
										<h5 class="entry-title">
											<a href="#">Inceptos orci hac libero</a>
										</h5>
										<div class="entry-price">
											<strong class="price">$ 350.00</strong>
										</div>
										<div class="entry-links clearfix">
											<a href="#" class="pull-left m-r">+ Add to Wishlist</a>
											<a href="#" class="pull-right">+ Add to Compare</a>
										</div>
									</div>
								</div>
							
							</div>
								
						</div>
						<!-- // END CAROUSEL -->
						
					</div>
				</div>
			</section>
			<!-- // FEATURED PRODUCTS -->
			
		</main>
		<!-- // SITE MAIN CONTENT -->
		
		<?php echo $_smarty_tpl->getSubTemplate ("./footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
