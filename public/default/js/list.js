$(function() {
	
	window.web_dir = 'HTTP://www.gf.com/GF/';
	
	//初始化
	$(document).on('ready',function() {
		//导航
		$.ajax({
			type : 'post',
			dataType : 'json',
			url : window.web_dir + 'home/goodslist/get_nav',
			data : {
				'a_id' : $('#atr_id').attr('val'),
			},
			success : function(res,status,xhr) {		
					$('#son_nav_m').html(res[0].cat_name);
					$.each(res,function(index,value) {
						if(index != 0) {
							$('#ul_nav').append('<li><a href="'+window.web_dir+'home/goodslist/show/'+value.cat_id+'">'+value.cat_name+'</a></li>');
						}
					});
			},
		});
		
		//热销
		$.ajax({
			dataType : 'json',
			url : window.web_dir + 'home/goodslist/hot_sale',
			success : function(res,status,xhr) {		
				$.each(res,function(index,value) {
					if(value.goods_name.length >= 18) {
						var name = value.goods_name.substring(0,18) + '...';
					}
					$('#sale_li').append('<li><a title="'+value.goods_name+'" href="'+window.web_dir+'home/details/show/'+value.goods_id+'">'+name+'</a></li> 　　　售价:<span style="font-size:14px;font-weight:bold;color:red;">'+value.shop_price + '</span>　　　销量:<span style="font-size:14px;font-weight:bold;color:red;">' + value.sale_num+'</span>');
				});
			},
		});
		

		
		//品牌
		$.ajax({
			dataType : 'json',
			url : window.web_dir + 'home/goodslist/get_brand',
			success : function(res,status,xhr) {
				$.each(res,function(index,value){
					$('#brand_ul').append('<li class="brand_li"><a href="javascript:void(0)">'+value.brand_name+'</a></li>');
				});
				$.each($('.brand_li'),function(index,value) {
					$(value).click(function() {
						$('.brand_li').removeClass('btn btn-primary');
						$(value).addClass('btn btn-primary');
					});
				});
			},
		});
		
		//商品列表
		$.ajax({
			dataType : 'json',
			url : window.web_dir + 'home/goodslist/get_goods_list',
			type : 'post',
			data : {
				'a_id' : $('#atr_id').attr('val'),
			},
			success : function(res,status,xhr) {
				if(res) {
					get_goods_info(res);
				};
			},
		});
		
		//判断是否为第一页
		if($('#page_pre').attr('val') == '1') {
			$('#page_pre').hide();
		}
		
		//获取总页码
		$.ajax({
			type : 'post',
			url : window.web_dir + 'home/goodslist/get_page_size',
			data : {
				'a_id' : $('#atr_id').attr('val'),
			},
			success : function(res,status,xhr) {
				//如果总页码为0页
				if(parseInt(res) == 0) {
					$('#pro_body').html('<strong>暂时没有任何商品！</strong>');
				}
				//如果总页码为1页
				if(parseInt(res) == 1) {
					$('#page_next').hide();
				} 
				//上一页
				$('#page_pre').click(function() {
					//如果总页码为2页
					if((parseInt(res) - 1) == 1) {
						$('#page_next').show();
//						$('#page_pre').attr('val',parseInt(res)+1);
					} 
					$(window).scrollTop('300');
					//将页码传入get_goods_list
					$.ajax({
						url : window.web_dir + 'home/goodslist/get_goods_list',
						type : 'post',
						data : {
							'page' :  $('#page_pre').attr('val'),
							'a_id' : $('#atr_id').attr('val'),
						},
						dataType : 'json',
						success : function(res,status,xhr) {
							if(res) {
								get_goods_info(res);
							};
						},
					});
					if($(this).attr('val') == '1') {	//=1，说明已经到首页，隐藏第一页
						$('#page_pre').hide();
						$('#page_next').attr('val',parseInt($('#page_next').attr('val')) - 1);
					}else if ($(this).attr('val') == parseInt(res) -1) {	//如果值为总页码-1，那么让下一页显示，同时让下一页页码-1，本页页码-1
						$('#page_next').show();
						$('#page_next').attr('val',parseInt($('#page_next').attr('val')) - 1);
						$('#page_pre').attr('val',parseInt($('#page_pre').attr('val')) - 1);
					}else {
						//让下一页+1，同时让上一页加1
						$(this).attr('val',parseInt($(this).attr('val')) - 1)
						$('#page_next').attr('val',parseInt($('#page_next').attr('val')) - 1);
					}
					
				});
				
				//下一页
				$('#page_next').click(function() {
					$(window).scrollTop('300');
					//如果总页码为2页
					if((parseInt(res) - 1) == 1) {
						$('#page_next').hide();
						$('#page_pre').attr('val',parseInt(res)-1);
					} 
					if($(this).attr('val') == '1') {
						//让下一页+1，同时让上一页为1,显示上一页按钮
						$(this).attr('val',parseInt($(this).attr('val')) + 1)
						$('#page_pre').attr('val',1);
						$('#page_pre').show();
					}else if ($(this).attr('val') == parseInt(res) -1) {	//如果下一页值为总页码-1，那么隐藏,同时将值改为总页码，设置上一页值为总页码-1
						$(this).attr('val',res);
						$('#page_next').hide();
						$('#page_pre').attr('val',parseInt(res)-1);
					}else {
						//让下一页+1，同时让上一页加1
						$(this).attr('val',parseInt($(this).attr('val')) + 1)
						$('#page_pre').attr('val',parseInt($('#page_pre').attr('val')) + 1);
					}
					//将页码传入get_goods_list
					$.ajax({
						type : 'post',
						url : window.web_dir + 'home/goodslist/get_goods_list',
						data : {
							'page' :  $('#page_next').attr('val'),
						},
						dataType : 'json',
						success : function(res,status,xhr) {
							if(res) {
								get_goods_info(res);
							};
						},
					});
				});
			},
		});
	
	});	
	
	
	$.each($('.price_click > li'),function(index,value) {
		$(value).click(function(e) {
			$('.price_click > li').removeClass();
			$(this).addClass('btn btn-primary');
			//点击后，获取商品列表
		});
	});
	
});



//重复请求商品信息
function get_goods_info(res) {
				//将prudocut值大于value的隐藏	
				if (res.length < $("div[status^='product_is_none']").length) {
					var num = $("div[status^='product_is_none']").length - res.length;
					var arr = new Array(num);
					$.each(arr,function(index,value) {
						var foo = $("div[status^='product_is_none']").length - index;
						$('div[status=product_is_none'+foo+']').addClass('to_display');
					});
				}else {
					$("div[status^='product_is_none']").removeClass('to_display');
				}
				$.each(res,function(index,value) {
					//注入信息
					if(value['goods_name'].length > 18) {
						value['goods_name_thumb'] = value['goods_name'].substring(0,18) + '...';
					};
					$('.list_title' + (index +1)).html(value['goods_name_thumb']);
					$('.list_title' + (index +1)).attr('title',value.goods_name);
					$('.list_title' + (index +1)).attr('href',window.web_dir +'/home/details/show/' + value.goods_id);
					$('.list_market_price' + (index + 1)).html('$ ' + value.market_price);
					$('.list_shop_price' + (index + 1)).html('$ ' + value.shop_price);
					$('.list_img' + (index + 1)).attr('href',window.web_dir +'/public/upload/' + value.goods_img);
					//用于购物车图片展示
					$('.list_thumb' + (index + 1)).attr('data-src',window.web_dir +'/public/upload/' + value.goods_img);
					$('.list_thumb' + (index + 1)).attr('src',window.web_dir +'/public/upload/' + value.goods_thumb);
					//链接
					$('.list_url' + (index + 1)).attr('href',window.web_dir +'/home/details/show/' + value.goods_id);
				});
}