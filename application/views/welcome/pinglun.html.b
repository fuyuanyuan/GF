{include file="./header.html"}
	
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
				
				<div class="col-md-4">
					<br/>
					<h3>订单名称<small>订单号码</small></h3>
					<table class="table table-striped">
						<tr><td>此处显示订单详情</td></tr>
						<tr><td>此处显示订单详情</td></tr>
						<tr><td>此处显示订单详情</td></tr>
						<tr><td>此处显示订单详情</td></tr>
						<tr><td>此处显示订单详情</td></tr>
					</table>
				</div>
				<div class='col-md-1'>
					<br/>
				</div>
				<div class='col-md-7'>
				<br/>
				<form role="form">
					<div class="form-group stylish-input">
						<label class="required" for="input2">评论标题:</label>
						<input type="text" id="input2" class="form-control" width=30% placeholder="请输入标题"/>
					</div>
					<div class="form-group stylish-input">
						<input type="radio" name="radio" class="prettyCheckable m-r" data-label="好评" checked="checked" />
						<input type="radio" name="radio" class="prettyCheckable" data-label="中评" />
						<input type="radio" name="radio" class="prettyCheckable" data-label="差评" />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<div class="rate-bar inline-middle">
                        <!-- 评价星星 -->
						<input style="display: none;" value="5" step="0.5" id="backing0" type="range">
						<div class="rateit" data-rateit-backingfld="#backing0" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false" data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5">
						</div></div>
						<span class="entry-review-count inline-middle">(请选择您的满意度)</span>
						<!-- 评价星星 -->
					</div>
					<div class="form-group">
						<textarea class="form-control" rows="6"></textarea>
					</div>
				</form>
					<button type="submit" class="btn btn-primary btn-lg">提交评论</button>&nbsp;&nbsp;&nbsp;&nbsp;
					<button type="reset" class="btn btn-primary btn-lg">重  置</button>
					<br/>
					<br/>
				</div>
				<!-- CONTENT -->

				
				</div>
			</div>
			
		</main>
		<!-- // SITE MAIN CONTENT -->
			{include file="./footer.html"}