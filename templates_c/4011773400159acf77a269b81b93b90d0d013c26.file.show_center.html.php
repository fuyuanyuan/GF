<?php /* Smarty version Smarty-3.1.18, created on 2014-06-19 00:33:51
         compiled from "application\views\welcome\show_center.html" */ ?>
<?php /*%%SmartyHeaderCode:3996539d206e5bf441-49046330%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4011773400159acf77a269b81b93b90d0d013c26' => 
    array (
      0 => 'application\\views\\welcome\\show_center.html',
      1 => 1403109229,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3996539d206e5bf441-49046330',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_539d206e88a278_33295337',
  'variables' => 
  array (
    'urow' => 0,
    'ordlist' => 0,
    'orow' => 0,
    'goods' => 0,
    'grow' => 0,
    'nums' => 0,
    'addrlist' => 0,
    'arow' => 0,
    'cordlist' => 0,
    'orow2' => 0,
    'cgoods' => 0,
    'cnums' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539d206e88a278_33295337')) {function content_539d206e88a278_33295337($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include 'C:\\AppServ\\www\\GF\\application\\libraries\\Smarty\\plugins\\function.base_url.php';
?><?php echo $_smarty_tpl->getSubTemplate ("./header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<!-- // SITE HEADER -->
	
		<!-- 用户中心-->
		<div class="breadcrumb-container">
			<div class="container">
				<div class="relative">
					<ul class="bc unstyled clearfix">
						<li><a href="#">首页</a></li>
						<li class="active">用户中心</li>
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
					<div class="panel-group checkout" id="checkout-collapse">
						<font face='微软雅黑'><h2><span style="color:orange;border-botton:1px solid #ccc;"><?php echo $_smarty_tpl->tpl_vars['urow']->value->user_alias;?>
</span>　的管理中心</h2></font>
						<div class="panel panel-default">
							<div class="panel-heading">	
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#checkout-collapse" href="#checkout-collapse1">
										<span class="step">01</span>
										个人信息一览
									</a>
								</h4>
							</div>
							<div id="checkout-collapse1" class="panel-collapse collapse in">
								<div class="panel-body">
									<table class="table table-hover">
										<tr>
											<td width=150>用户ID：</th><td><?php echo $_smarty_tpl->tpl_vars['urow']->value->user_id;?>
</td><td width=150>用户名：</td><td><?php echo $_smarty_tpl->tpl_vars['urow']->value->user_name;?>
</td>
										</tr>
										<tr>
											<td width=150>用户昵称：</td><td><?php echo $_smarty_tpl->tpl_vars['urow']->value->user_alias;?>
</td><td width=150>邮箱：</td><td><?php echo $_smarty_tpl->tpl_vars['urow']->value->user_email;?>
</td>
										</tr>
										<tr>
											<td width=150>性别：</td><td><?php if ($_smarty_tpl->tpl_vars['urow']->value->user_sex==0) {?>男<?php } else { ?>女<?php }?></td><td width=150>出生年月：</td><td><?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['urow']->value->user_birthday);?>
</td>
										</tr>
										<tr>
											<td width=150>用户积分</td><td><?php echo $_smarty_tpl->tpl_vars['urow']->value->user_inte;?>
</td><td width=150>VIP等级</td><td><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['name'] = 'loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] = is_array($_loop=($_smarty_tpl->tpl_vars['urow']->value->user_inte/2000)>5 ? 5 : ceil($_smarty_tpl->tpl_vars['urow']->value->user_inte/2000)) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
public/admin/images/guan.gif"><?php endfor; endif; ?></td>
										</tr>
										<tr>
											<td width=150>密码找回问题：</td><td>********</td><td width=150>密码找回答案：</td><td>********</td>
										</tr>
										
									</table>
									<button type="button" class="btn btn-primary btn-lg" onclick="location.href='<?php echo smarty_function_base_url(array('url'=>'home/usercenter/edit'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['urow']->value->user_id;?>
'">修改个人信息</button>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#checkout-collapse" href="#checkout-collapse2">
									
									<span class="step">02</span>
									
										未完成订单
									</a>
								</h4>
							</div>
							<div id="checkout-collapse2" class="panel-collapse collapse">
								
								<div class="panel-body">
									<?php if (isset($_smarty_tpl->tpl_vars['ordlist']->value)) {?>
									<?php  $_smarty_tpl->tpl_vars['orow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['orow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ordlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['orow']->iteration=0;
 $_smarty_tpl->tpl_vars['orow']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['orow']->key => $_smarty_tpl->tpl_vars['orow']->value) {
$_smarty_tpl->tpl_vars['orow']->_loop = true;
 $_smarty_tpl->tpl_vars['orow']->iteration++;
 $_smarty_tpl->tpl_vars['orow']->index++;
?>
									<h4>订单<?php echo $_smarty_tpl->tpl_vars['orow']->iteration;?>
 </h4>
									<table class="table table-bordered">
										<tr>
											<td width=80 align='center'
											>订单号：</td><td width=180><?php echo $_smarty_tpl->tpl_vars['orow']->value->order_sn;?>
</td>
										</tr>
										<?php  $_smarty_tpl->tpl_vars['grow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['grow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods']->value[$_smarty_tpl->tpl_vars['orow']->index]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['grow']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['grow']->key => $_smarty_tpl->tpl_vars['grow']->value) {
$_smarty_tpl->tpl_vars['grow']->_loop = true;
 $_smarty_tpl->tpl_vars['grow']->index++;
?>
										<tr>
											<td rowspan='3' align='center' width=180><img src="<?php echo smarty_function_base_url(array('url'=>'public/upload/'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['grow']->value->goods_thumb;?>
" width=100 height=180/></td><td width=80>订单商品</td><td width=180><?php echo $_smarty_tpl->tpl_vars['grow']->value->goods_name;?>
</td>
										</tr>
										<tr>
											<td width=80>商品单价：</td><td><?php echo $_smarty_tpl->tpl_vars['grow']->value->shop_price;?>
</td>
											
										</tr>
										<tr><td width=80>购买数量：</td><td><?php echo $_smarty_tpl->tpl_vars['nums']->value[$_smarty_tpl->tpl_vars['orow']->index][$_smarty_tpl->tpl_vars['grow']->index];?>
</td></tr>
										<?php } ?>
										<tr>
											<td width=80 align='center'>订单总价：</td><td><?php echo $_smarty_tpl->tpl_vars['orow']->value->total;?>
</td>
										</tr>
										<?php  $_smarty_tpl->tpl_vars['arow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['arow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['addrlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['arow']->key => $_smarty_tpl->tpl_vars['arow']->value) {
$_smarty_tpl->tpl_vars['arow']->_loop = true;
?>
										<?php if ($_smarty_tpl->tpl_vars['arow']->value->addr_id==$_smarty_tpl->tpl_vars['orow']->value->addr_id) {?>
										<tr>
											<td width=80 align='center'>收货人：</td><td><?php echo $_smarty_tpl->tpl_vars['arow']->value->addr_name;?>
</td><td width=80>联系电话</td><td><?php echo $_smarty_tpl->tpl_vars['arow']->value->tel;?>
</td>
										</tr>
										<tr>
											<td width=80 align='center'>收货地址：</td><td><?php echo $_smarty_tpl->tpl_vars['arow']->value->address;?>
</td>
										</tr>
										<?php }?>
										<?php } ?>
										<tr>
											<td align='center'>
												<?php if ($_smarty_tpl->tpl_vars['orow']->value->state==1) {?><button type="button" class="btn btn-primary btn-xs" onclick="location.href='<?php echo smarty_function_base_url(array('url'=>'home/usercenter/queren'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['orow']->value->order_id;?>
/<?php echo $_smarty_tpl->tpl_vars['urow']->value->user_id;?>
'">确认收货</button>
												<?php } elseif ($_smarty_tpl->tpl_vars['orow']->value->state==0) {?><button type="button" class="btn btn-primary btn-xs" disabled>未配送

												<?php } else { ?><button type="button" class="btn btn-primary btn-xs" disabled>已完成此订单
												<?php }?>
												
											</td>
											<td>
												<?php if ($_smarty_tpl->tpl_vars['orow']->value->state==0) {?><button type="button" class="btn btn-primary btn-xs" onclick="location.href='<?php echo smarty_function_base_url(array('url'=>'home/usercenter/orddel'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['orow']->value->order_id;?>
/<?php echo $_smarty_tpl->tpl_vars['orow']->value->user_id;?>
'">取消订单</button>
												<?php } elseif ($_smarty_tpl->tpl_vars['orow']->value->state==1) {?><button type="button" class="btn btn-primary btn-xs" disabled>配送中
												<?php }?>
											</td>
										</tr>
									</table>
									<hr></hr>
									<?php } ?>
									<?php } else { ?>此用户没有订单！<?php }?>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#checkout-collapse" href="#checkout-collapse3">
									<span class="step">03</span>
										已完成订单
									</a>
								</h4>
							</div>
							<div id="checkout-collapse3" class="panel-collapse collapse">
								<div class="panel-body">
								<?php if (isset($_smarty_tpl->tpl_vars['cordlist']->value)) {?>
									<?php  $_smarty_tpl->tpl_vars['orow2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['orow2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cordlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['orow2']->iteration=0;
 $_smarty_tpl->tpl_vars['orow2']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['orow2']->key => $_smarty_tpl->tpl_vars['orow2']->value) {
$_smarty_tpl->tpl_vars['orow2']->_loop = true;
 $_smarty_tpl->tpl_vars['orow2']->iteration++;
 $_smarty_tpl->tpl_vars['orow2']->index++;
?>
									<h4>订单<?php echo $_smarty_tpl->tpl_vars['orow2']->iteration;?>
 </h4>
									<table class="table table-bordered">
										<tr>
											<td width=80 align='center'
											>订单号：</td><td width=180><?php echo $_smarty_tpl->tpl_vars['orow2']->value->order_sn;?>
</td>
										</tr>
										<?php  $_smarty_tpl->tpl_vars['grow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['grow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cgoods']->value[$_smarty_tpl->tpl_vars['orow2']->index]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['grow']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['grow']->key => $_smarty_tpl->tpl_vars['grow']->value) {
$_smarty_tpl->tpl_vars['grow']->_loop = true;
 $_smarty_tpl->tpl_vars['grow']->index++;
?>
										<tr>
											<td rowspan='3' align='center' width=180><img src="<?php echo smarty_function_base_url(array('url'=>'public/upload/'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['grow']->value->goods_thumb;?>
" width=100 height=180/></td><td width=80>订单商品</td><td width=180><?php echo $_smarty_tpl->tpl_vars['grow']->value->goods_name;?>
</td>
										</tr>
										<tr>
											<td width=80>商品单价：</td><td><?php echo $_smarty_tpl->tpl_vars['grow']->value->shop_price;?>
</td>
											
										</tr>
										<tr><td width=80>购买数量：</td><td><?php echo $_smarty_tpl->tpl_vars['cnums']->value[$_smarty_tpl->tpl_vars['orow2']->index][$_smarty_tpl->tpl_vars['grow']->index];?>
</td></tr>
										<?php } ?>
										<tr>
											<td width=80 align='center'>订单总价：</td><td><?php echo $_smarty_tpl->tpl_vars['orow2']->value->total;?>
</td>
										</tr>
										<?php  $_smarty_tpl->tpl_vars['arow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['arow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['addrlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['arow']->key => $_smarty_tpl->tpl_vars['arow']->value) {
$_smarty_tpl->tpl_vars['arow']->_loop = true;
?>
										<?php if ($_smarty_tpl->tpl_vars['arow']->value->addr_id==$_smarty_tpl->tpl_vars['orow']->value->addr_id) {?>
										<tr>
											<td width=80 align='center'>收货人：</td><td><?php echo $_smarty_tpl->tpl_vars['arow']->value->addr_name;?>
</td><td width=80>联系电话</td><td><?php echo $_smarty_tpl->tpl_vars['arow']->value->tel;?>
</td>
										</tr>
										<tr>
											<td width=80 align='center'>收货地址：</td><td><?php echo $_smarty_tpl->tpl_vars['arow']->value->address;?>
</td>
										</tr>
										<?php }?>
										<?php } ?>
										<tr>
											<td align='center'>
												<button type="button" class="btn btn-primary btn-xs" disabled>已完成此订单
											</td>
										</tr>
									</table>
									<hr></hr>
									<?php } ?>
									<?php } else { ?>此用户还没有订单！
									<?php }?>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#checkout-collapse" href="#checkout-collapse4">
										<span class="step">04</span>
										收货地址管理
									</a>
								</h4>
							</div>
							<div id="checkout-collapse4" class="panel-collapse collapse">
								<div class="panel-body">
								<?php if (!empty($_smarty_tpl->tpl_vars['addrlist']->value)) {?>
									<?php  $_smarty_tpl->tpl_vars['arow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['arow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['addrlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['arow']->key => $_smarty_tpl->tpl_vars['arow']->value) {
$_smarty_tpl->tpl_vars['arow']->_loop = true;
?>
									<table borlder=1 class="table table-hover">
										<tr>
											<td width=80>地址编号：</td><td width=400><?php echo $_smarty_tpl->tpl_vars['arow']->value->addr_id;?>
</td><td width=80>收货人：</td><td><?php echo $_smarty_tpl->tpl_vars['arow']->value->addr_name;?>
</td>
											<td><button type="button" class="btn btn-default btn-xs" onclick="location.href='<?php echo smarty_function_base_url(array('url'=>'home/usercenter/adedit'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['arow']->value->addr_id;?>
'">修改地址</button></td>
										</tr>
										<tr>
											<td width=80>收货地址：</td><td width=400><?php echo $_smarty_tpl->tpl_vars['arow']->value->address;?>
</td><td width=80>联系电话</td><td><?php echo $_smarty_tpl->tpl_vars['arow']->value->tel;?>
</td><td><button type="button" class="btn btn-default btn-xs" onclick="location.href='<?php echo smarty_function_base_url(array('url'=>'home/usercenter/addel'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['arow']->value->addr_id;?>
/<?php echo $_smarty_tpl->tpl_vars['arow']->value->user_id;?>
'">删除地址</button></td>
										</tr>

									</table>
									<?php } ?>
									<?php } else { ?>您还没有收货地址，请点击添加！<?php }?>
									<button type="button" class="btn btn-primary btn-lg" onclick="location.href='<?php echo smarty_function_base_url(array('url'=>'home/usercenter/adadd'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['urow']->value->user_id;?>
'">添加收货地址</button>
								</div>
							</div>
						</div>
					</div>
				<!-- CONTENT -->
				<br/>
				</div>
			</div>
			
		</main>
		<!-- // 用户中心 -->
			<?php echo $_smarty_tpl->getSubTemplate ("./footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
