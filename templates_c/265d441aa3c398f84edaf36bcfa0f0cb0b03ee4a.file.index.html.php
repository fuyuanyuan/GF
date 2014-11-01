<?php /* Smarty version Smarty-3.1.18, created on 2014-06-14 23:22:31
         compiled from "application\views\welcome\index.html" */ ?>
<?php /*%%SmartyHeaderCode:19038539958e0d1f433-73395246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '265d441aa3c398f84edaf36bcfa0f0cb0b03ee4a' => 
    array (
      0 => 'application\\views\\welcome\\index.html',
      1 => 1402759346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19038539958e0d1f433-73395246',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_539958e0e6b4f1_40159735',
  'variables' => 
  array (
    'maxnum' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539958e0e6b4f1_40159735')) {function content_539958e0e6b4f1_40159735($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("./header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<!-- HOMEPAGE SLIDER -->
		<div id="home-slider">
			<div class="flexslider">
	<ul class="slides">
		<!-- THE FIRST SLIDE -->
		<li>
			<!-- THE MAIN IMAGE IN THE SLIDE -->
			<img src="<?php echo @constant('IMG_DIR');?>
big/002.jpg" alt="" />
			
			<!-- THE CAPTIONS OF THE FIRST SLIDE -->
			<div class="flex-caption h6 text-bold gfc uppercase animated"
			data-animation="fadeInLeftBig"
			data-x="800"
			data-y="110"
			data-speed="600"
			data-start="1200"></div>
			
			<div class="flex-caption herotext text-bold gfc animated"
			data-animation="fadeInRightBig"
			data-x="580"
			data-y="140"
			data-speed="900"
			data-start="2000">活动介绍	</div>
			
			<div class="flex-caption h6 text-bold gfc text-center animated"
			data-animation="fadeInDown"
			data-x="639"
			data-y="260"
			data-speed="1600"
			data-start="2900">
				<br/>
				<a href="products.html" class="btn btn-primary uppercase">去看看</a>
			</div>
			
		</li>
		
		<!-- THE SECOND SLIDE -->
		<li style="background: #fa6f57;">
			<!-- THE MAIN IMAGE IN THE SLIDE -->
			<img src="<?php echo @constant('IMG_DIR');?>
transparent.png" alt="" />
			
			<div class="flex-caption super-giant gfc animated uppercase"
			data-animation="fadeInUp"
			data-x="center"
			data-y="60"
			data-speed="500"
			data-start="900">介绍</div>

			<div id="caption-left-round" class="flex-caption round gfc animated uppercase"
			data-animation="fadeInLeftBig"
			data-x="140"
			data-y="60"
			data-speed="600"
			data-start="1200"><div class="vmid"><span>介绍<br/>介绍</span></div></div>

			<div class="flex-caption round gfc animated uppercase"
			data-animation="fadeInRightBig"
			data-x="925"
			data-y="60"
			data-speed="600"
			data-start="1200"><div class="vmid"><span>介绍<br/>介绍</span></div></div>

			<div class="flex-caption h3 gfc animated uppercase"
			data-animation="fadeInDown"
			data-x="center"
			data-y="250"
			data-speed="400"
			data-start="1800"><strong class="text-bold">介绍 </strong>介绍</div>

		</li>
		
		<!-- THE SECOND SLIDE -->
		<li>
			<!-- THE MAIN IMAGE IN THE SLIDE -->
			<img src="<?php echo @constant('IMG_DIR');?>
big/003.jpg" alt="" />
			
			<div class="flex-caption herotext text-bold gfc bg-dark animated uppercase"
			data-animation="fadeInUpBig"
			data-x="760"
			data-y="60"
			data-speed="900"
			data-start="100">介绍</div>
			
			<div class="flex-caption h2 text-bold gfc bg-dark animated uppercase"
			data-animation="fadeInUpBig"
			data-x="797"
			data-y="175"
			data-speed="600"
			data-start="900">介绍</div>
			
		</li>
		
	</ul>
</div>

<script>
	jQuery(function($) {
		var $slider = $('#home-slider > .flexslider');
		$slider.find('.flex-caption').each(function() {
			var $this = $(this);
			var configs = {
				left: $this.data('x'),
				top: $this.data('y'),
				speed: $this.data('speed') + 'ms',
				delay: $this.data('start') + 'ms'
			};
			if ( configs.left == 'center' && $this.width() !== 0 ) 
			{
				configs.left = ( $slider.width() - $this.width() ) / 2;
			}
			if ( configs.top == 'center' && $this.height() !== 0 ) 
			{
				configs.top = ( $slider.height() - $this.height() ) / 2;
			}
			
			$this.data('positions', configs);
			
			$this.css({
				'left': configs.left + 'px',
				'top': configs.top + 'px',
				'animation-duration': configs.speed,
				'animation-delay': configs.delay
			});
		});
		
		$(window).on('resize', function() {
			var wW = $(window).width(),
				zoom = ( wW >= 1170 ) ? 1 : wW / 1349;
			$('.flex-caption.gfc').css('zoom', zoom);
		});
		$(window).trigger('resize');
		
		
		
		$slider.imagesLoaded(function() {
			$slider.flexslider({
				animation: 'slide',
				easing: 'easeInQuad',
				slideshow: false,
				nextText: '<i class="iconfont-angle-right"></i>',
				prevText: '<i class="iconfont-angle-left"></i>',
				start: function() {
					flex_fix_pos(1);
				},
				before: function(slider) {
					// initial caption animation for next show
					$slider.find('.slides li .animation-done').each(function() {
						$(this).removeClass('animation-done');
						var animation = $(this).attr('data-animation');
						$(this).removeClass(animation);
					});
					
					flex_fix_pos(slider.animatingTo + 1);
				},
				after: function() {
					// run caption animation
					$slider.find('.flex-active-slide .animated').each(function() {
						var animation = $(this).attr('data-animation');
						$(this).addClass('animation-done').addClass(animation);
					});
				}
			});
		});
		
		
		function flex_fix_pos(i) {
			$slider.find('.slides > li:eq(' + i + ') .gfc').each(function() {
				var $this = $(this),
					pos = $(this).data('positions');
					
				if ( pos.left == 'center' )
				{
					pos.left = ( $slider.width() - $this.width() ) / 2;
					$this.css('left', pos.left + 'px');
					$this.data('positions', pos);
				}
				if ( pos.top == 'center' )
				{
					pos.top = ( $slider.height() - $this.height() ) / 2;
					$this.css('left', pos.top + 'px');
					$this.data('positions', pos);
				}
			});
		}
	});
</script>		</div>
		<!-- // HOMEPAGE SLIDER -->
		
		<!-- SITE MAIN CONTENT -->
		<main id="main-content" role="main">
			
			<!-- PROMO BOXES -->
			<section class="section promos">
				<div class="container">
					<div class="row">
					
						<div class="col-md-4">
							<div class="promo accent-background first-child first-row animated" data-animation="fadeInLeft">
								<div class="inner text-center">
									<h1 class="uppercase text-semibold">
										<a href="#">
											<span class="inverse-color">醒目</span> 	活动？ <span class="inverse-color">介绍</span>
										</a>
									</h1>
									<h5 class="uppercase">小标题</h5>
								</div>
							</div>
						</div>
					
						<div class="col-md-4">
							<div class="promo inverse-background first-row animated" data-animation="fadeInDown" style="background: url('<?php echo @constant('IMG_DIR');?>
demo/P2200214.jpg') no-repeat; background-size: 100%;">
								<div class="inner text-center np">
									<div class="ribbon">
										<h6 class="nmb">标题1</h6>
										<h5 class="text-semibold uppercase nmb">标题2</h5>
										<div class="space10"></div>
										<a href="products.html" class="with-icon prepend-icon"><i class="iconfont-caret-right"></i><span> 去看看</span></a>
									</div>
								</div>
							</div>
						</div>
					
						<div class="col-md-4">
							<div class="promo inverse-background first-row animated" data-animation="fadeInRight">
								<div class="inner text-center">
									<h1 class="uppercase text-bold">
										<a href="#">
											活动<span class="inverse-color">介绍</span>
										</a>
									</h1>
									<h5 class="uppercase">小标题</h5>
								</div>
							</div>
						</div>
					
					</div>
				</div>
			</section>
			<!-- // PROMO BOXES -->
			
			<!-- FEATURED PRODUCTS -->
			<section class="section featured visible-items-4">
				<div class="container">
					<div class="row">
						<header class="section-header clearfix col-sm-offset-3 col-sm-6">
							<h3 class="section-title">最新上架</h3>
							<p class="section-teaser">最新上架新品大促~抢到就是赚到~</p>
						</header>
						
						<div class="clearfix"></div>
						
<!-- BEGIN CAROUSEL -->
						<div id="featured-products" class="add-cart" data-product=".product" data-thumbnail=".entry-media .thumb" data-title=".entry-title > a" data-url=".entry-title > a" data-price=".entry-price > .price">
						
							<div class="owl-controls clickable outside">
								<div class="owl-buttons">
									<div class="owl-prev"><i class="iconfont-angle-left"></i></div>
									<div class="owl-next"><i class="iconfont-angle-right"></i></div>
								</div>
							</div>
							
							<div class="owl-carousel owl-theme" data-visible-items="4" data-navigation="true" data-lazyload="true">
								<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['maxnum']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['maxnum']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
								<div class="product data-product-car<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" data-product-id="">
									<div class="entry-media">
										<img src="<?php echo @constant('IMG_DIR');?>
/AjaxLoader2.gif" alt="" class="new_thumb<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
 lazyOwl thumb" />
										<div class="hover">
											<a href="" class="entry-url go_url<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" target="_blank"></a>
											<ul class="icons unstyled">
												<li>
													<div class="circle ribbon ribbon-sale">最新</div>
												</li>
												<li>
													<a href="###" class="circle new_img<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" data-toggle="lightbox"><i class="iconfont-search"></i></a>
												</li>
											</ul>
											<div class="rate-bar">
												<input type="range" value="4.5" step="0.5" id="backing<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" />
												<div class="rateit" data-rateit-backingfld="#backing<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
											</div>
										</div>
									</div>
									<div class="entry-main">
										<h5 class="entry-title">
											<a title="" class="new_title<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" href="#" target="_blank">加载中...</a>
										</h5>
										<div class="entry-price">
											<s class="entry-discount new_market_price<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"></s>
											<strong class="accent-color price new_shop_price<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"></strong>
										</div>
									</div>
								</div>
								<?php }} ?>					
							</div>
								
						</div>
						<!-- // END CAROUSEL -->
						
					</div>
				</div>
			</section>
			<!-- // FEATURED PRODUCTS -->
			
			<!-- NEW ARRIVAL PRODUCTS -->
			<section class="section new-arrivals visible-items-5">
				<div class="container">
					<div class="row">
						<header class="section-header clearfix col-sm-offset-3 col-sm-6">
							<h3 class="section-title">商家推荐</h3>
							<p class="section-teaser">呕血推荐，热泪甩卖~亲们...</p>
						</header>
						
						<div class="clearfix"></div>
						
						<!-- BEGIN CAROUSEL -->
						<div id="new-arrivals-products" class="add-cart" data-product=".product" data-thumbnail=".entry-media .thumb" data-title=".entry-title > a" data-url=".entry-title > a" data-price=".entry-price > .price">
						
							<div class="owl-controls clickable outside">
								<div class="owl-buttons">
									<div class="owl-prev"><i class="iconfont-angle-left"></i></div>
									<div class="owl-next"><i class="iconfont-angle-right"></i></div>
								</div>
							</div>
							
							<div class="owl-carousel owl-theme" data-visible-items="5" data-navigation="true" data-lazyload="true">
								<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['maxnum']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['maxnum']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
								<div class="product data-product-re-car<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" data-product-id="">
									<div class="entry-media">
										<img src="<?php echo @constant('IMG_DIR');?>
/AjaxLoader2.gif" alt="" class="com_thumb<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
 lazyOwl thumb" />
										<div class="hover">
											<a href="" class="entry-url com_url<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" target="_blank"></a>
											<ul class="icons unstyled">
												<li>
													<div class="circle ribbon ribbon-sale">推荐</div>
												</li>
												<li>
													<a href="###" class="circle com_img<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" data-toggle="lightbox"><i class="iconfont-search"></i></a>
												</li>
											</ul>
											<div class="rate-bar">
												<input type="range" value="4.5" step="0.5" id="backing<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" />
												<div class="rateit" data-rateit-backingfld="#backing<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
											</div>
										</div>
									</div>
									<div class="entry-main">
										<h5 class="entry-title">
											<a title="" class="com_title<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" href="#" target="_blank">加载中...</a>
										</h5>
										<div class="entry-price">
											<s class="entry-discount com_market_price<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"></s>
											<strong class="accent-color price com_shop_price<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"></strong>
										</div>
									</div>
								</div>
								<?php }} ?>					
								</div>
								
							
						</div>
						<!-- // END CAROUSEL -->
						
					</div>
				</div>
			</section>
			<!-- // NEW ARRIVAL PRODUCTS -->
			
		</main>
		<!-- // SITE MAIN CONTENT -->
		
		
		
		<?php echo $_smarty_tpl->getSubTemplate ("./footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
