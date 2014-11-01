<?php
class goods extends Admin_Controller
{
	
	public function __construct(){
		parent::__construct();
// 		$this->load->model('goods_type_model','type');
// 		$this->load->model('attribute_model','attr');
		$this->load->model('goods_model','goods');
		//上传文件类
		$this->load->library('upload');
		$this->load->library('Ciimage');
		//载入商品的品牌和分类模型
		$this->load->model('brand_model','brand');
		$this->load->model('category_model','category');
	
	}
	
	public function goodslist()
	{
		$g1 = $this->db->get_where('goods',array('del_flag'=>'1'));//显示标志为1的商品
		$goods = $g1->result();

        $this->assign('goods',$goods);

		$this->display('admin/goods/goods_list');
	}
//商品添加
	public function goodsadd()
	{
		if(!empty($_POST))
		{
			//表单验证
			@$this->load->library('form_validation');
			$this->form_validation->set_rules('goods_name','商品名','required|prep_for_form');
			$this->form_validation->set_rules('goods_sn','货号','required|prep_for_form|max_length[10]');
			$this->form_validation->set_rules('brand_id','品牌','is_natural_no_zero');
			$this->form_validation->set_rules('cate_id','分类','is_natural_no_zero');
			$this->form_validation->set_rules('shop_price','本店价格','required|numeric');
			$this->form_validation->set_rules('market_price','市场价格','required|numeric');
			$this->form_validation->set_rules('goods_jifen','积分','required|numeric');
			$this->form_validation->set_rules('goods_num','库存','required|integer');
			$this->form_validation->set_rules('yunfei','运费','numeric');
			$this->form_validation->set_rules('keywords','关键词','prep_for_form');
			$this->form_validation->set_rules('small_desc','','prep_for_form');
			if(!$this->form_validation->run())
			{
				$error = validation_errors();
				$this->assign('errors',$error);
				$this->assign('url',base_url('admin/goods/goodsadd'));
				$this->display('public/error');
				die;
			}
		
			$data = $this->input->post();
			if(isset($_POST['type']))
			{
				$data['goods_promote'] = 0|$data['type'];
				unset($data['type']);
			}
			//如果勾选免运费，则强制运费项为0。
			if(isset($data['mianyun']))
			{
				$data['yunfei']=0;
			}

			$data['create_time'] = strtotime('now');//将时间转为数值
			//获取session中的管理员id
			$data['admin_id'] = isset($_SESSION['admin']['admin_id'])?$_SESSION['admin']['admin_id']:0;
			$data['create_time'] = strtotime('now');

			 
			  $this->load->library('upload');
			  if (!$this->upload->do_upload('goods_img'))
			  {
			  	 $error = array('error' => $this->upload->display_errors());
			   	 $this->assign('errors',$error);
				 $this->assign('url',base_url('admin/goods/goodsadd'));
				 $this->display('public/error');
				 die;
			  } 
			  else
			  {
			  	 $upfile = $this->upload->data();
			   	 $data['goods_img'] = $upfile['file_name'];

				 $src = './public/upload/'.$data['goods_img'];
				 $data['goods_thumb'] = $this->thumb($src,400,533);
			  }

			$result = $this->db->insert('goods',$data);
			if($result)
			{
				redirect('admin/goods/goodslist','refresh');
			}else
			{
				$this->assign('errors','添加失败！发生未知错误！');
				$this->assign('url',base_url('admin/goods/goodslist'));
				$this->display('public/error');
			}

		}
		else
		{
			$b1 = $this->db->get('brand');
	        $brand = $b1->result();

	        $this->load->model('Category_model','cate');
	        $list = $this->cate->showCategory();

	        $this->assign('brand',$brand);
	        $this->assign('list',$list);
			$this->display('admin/goods/goods_add');
		}
			
	}
	//商品修改
	public function goodsedit()
	{
		if(!empty($_POST))
		{
			@$this->load->library('form_validation');
			$this->form_validation->set_rules('goods_name','商品名','required|prep_for_form');
			$this->form_validation->set_rules('goods_sn','货号','required|prep_for_form|max_length[10]');
			$this->form_validation->set_rules('brand_id','品牌','is_natural_no_zero');
			$this->form_validation->set_rules('cate_id','分类','is_natural_no_zero');
			$this->form_validation->set_rules('shop_price','本店价格','required|numeric');
			$this->form_validation->set_rules('market_price','市场价格','required|numeric');
			$this->form_validation->set_rules('goods_jifen','积分','required|numeric');
			$this->form_validation->set_rules('goods_num','库存','required|integer');
			$this->form_validation->set_rules('yunfei','运费','numeric');
			$this->form_validation->set_rules('keywords','关键词','prep_for_form');
			$this->form_validation->set_rules('small_desc','','prep_for_form');
			if(!$this->form_validation->run())
			{
				$error = validation_errors();
				$this->assign('errors',$error);
				$this->assign('url',base_url('admin/goods/goodslist'));
				$this->display('public/error');
				die;
			}
		//此处获取信息后，位或type的值。若是男装，则不为女装，反之亦同
			$data = $this->input->post();
			if(isset($_POST['type']))
			{
				$data['goods_promote'] = 0|$data['type'];
				unset($data['type']);
			}
			//如果勾选免运费，则强制运费项为0。
			if(isset($data['mianyun']))
			{
				$data['yunfei']=0;
			}
			
			$data['create_time'] = strtotime('now');
			$data['admin_id'] = isset($_SESSION['admin']['admin_id'])?$_SESSION['admin']['admin_id']:0;
			$data['create_time'] = strtotime('now');

			if(!$_FILES['goods_img']['error']==4) 
			{
				 $this->load->library('upload');
				 if (!$this->upload->do_upload('goods_img'))
				 {
				  	 $error = array('error' => $this->upload->display_errors());
				   	 $this->assign('errors',$error);
					 $this->assign('url',base_url('admin/goods/goodslist'));
					 $this->display('public/error');
					 die;
				  } 
			  	 else
			 	 {
				  	 $upfile = $this->upload->data();
				   	 $data['goods_img'] = $upfile['file_name'];

					$src = './public/upload/'.$data['goods_img'];
					 $data['goods_thumb'] = $this->thumb($src,400,533);
			  	 }
			  }
			$this->db->where('goods_id',$data['goods_id']);
			$result = $this->db->update('goods',$data);
			if($result)
			{
				redirect('admin/goods/goodslist','refresh');
			}else
			{
				$this->assign('errors','修改失败！发生未知错误！');
				$this->assign('url',base_url('admin/goods/goodslist'));
				$this->display('public/error');
				die;
			}
			
		}
		else
		{
			$id = $this->uri->segment(4);
			$r = $this->db->get_where('goods',array('goods_id'=>$id));
			$goodsrow = $r->row();

			$b1 = $this->db->get('brand');
	        $brand = $b1->result();

	        $this->load->model('Category_model','cate');
	        $list = $this->cate->showCategory();

	        $this->assign('brand',$brand);
	        $this->assign('list',$list);
	        $this->assign('row',$goodsrow);

			$this->display('admin/goods/goods_edit');
		}
			
	}
//商品上下架点击操作ajax操作
	public function updown()
	{
		$id = $_GET['goods_id'];
		$g1 = $this->db->get_where('goods',array('goods_id'=>$id));
		$goods = $g1->row();
		if($goods->onsale == 1)
		{
			$flags = array(
			'onsale'=>'0');
			$this->db->where_in('goods_id',$id);
			$r = $this->db->update('goods',$flags);
			if($r)
			{
				echo '1';
			}
			else
			{
				echo '0';
			}
		}
		else
		{
			$flags = array(
			'onsale'=>'1');
			$this->db->where_in('goods_id',$id);
			$r = $this->db->update('goods',$flags);
			if($r)
			{
				echo '0';
			}
		}
	}
//商品批量操作
	public function flags()
	{
		$data = $this->input->post();
		if(!isset($data['ids']))
		{
			$this->assign('errors','您没有选择任何商品！');
			$this->assign('url',base_url('admin/goods/goodslist'));
			$this->display('public/error');
			die;
		}
		if($data['type'] == 'del')
		{
			$flags = array(
			'del_flag'=>'0');
			$this->db->where_in('goods_id',$data['ids']);
			$r = $this->db->update('goods',$flags);
			if($r)
			{
				redirect('admin/goods/goodslist','refresh');
			}else
			{
				$this->assign('errors','未知错误，批量删除失败！');
				$this->assign('url',base_url('admin/goods/goodslist'));
				$this->display('public/error');
				die;
			}
		}
		elseif($data['type'] == 'nosale')
		{
			$flags = array(
			'onsale'=>'0');
			$this->db->where_in('goods_id',$data['ids']);
			$r = $this->db->update('goods',$flags);
			if($r)
			{
				redirect('admin/goods/goodslist','refresh');
			}else
			{
				$this->assign('errors','未知错误，批量下架失败！');
				$this->assign('url',base_url('admin/goods/goodslist'));
				$this->display('public/error');
				die;
			}
		}
		elseif($data['type'] == 'sale')
		{
			$flags = array(
			'onsale'=>'1');
			$this->db->where_in('goods_id',$data['ids']);
			$r = $this->db->update('goods',$flags);
			if($r)
			{
				redirect('admin/goods/goodslist','refresh');
			}else
			{
				$this->assign('errors','未知错误，批量上架失败！');
				$this->assign('url',base_url('admin/goods/goodslist'));
				$this->display('public/error');
				die;
			}
		}
		elseif($data['type'] == 'man')
		{
			$goods_promote = ($data['goods_promote']|1)&(~2);
			$flags = array(
			'goods_promote'=>$goods_promote);
			$this->db->where_in('goods_id',$data['ids']);
			$r = $this->db->update('goods',$flags);
			if($r)
			{
				redirect('admin/goods/goodslist','refresh');
			}else
			{
				$this->assign('errors','未知错误，批量男装推荐失败！');
				$this->assign('url',base_url('admin/goods/goodslist'));
				$this->display('public/error');
				die;
			}
		}
		elseif($data['type'] == 'woman')
		{
			$goods_promote = ($data['goods_promote']|2)&(~1);
			$flags = array(
			'goods_promote'=>$goods_promote);
			$this->db->where_in('goods_id',$data['ids']);
			$r = $this->db->update('goods',$flags);
			if($r)
			{
				redirect('admin/goods/goodslist','refresh');
			}else
			{
				$this->assign('errors','未知错误，批量女装推荐失败！');
				$this->assign('url',base_url('admin/goods/goodslist'));
				$this->display('public/error');
				die;
			}
		}
		elseif($data['type'] == 'nowoman')
		{
			$goods_promote = $data['goods_promote']&(~2);
			$flags = array(
			'goods_promote'=>$goods_promote);
			$this->db->where_in('goods_id',$data['ids']);
			$r = $this->db->update('goods',$flags);
			if($r)
			{
				redirect('admin/goods/goodslist','refresh');
			}else
			{
				$this->assign('errors','未知错误，批量女装取消推荐失败！');
				$this->assign('url',base_url('admin/goods/goodslist'));
				$this->display('public/error');
				die;
			}
		}
		elseif($data['type'] == 'noman')
		{
			$goods_promote = $data['goods_promote']&(~1);
			$flags = array(
			'goods_promote'=>$goods_promote);
			$this->db->where_in('goods_id',$data['ids']);
			$r = $this->db->update('goods',$flags);
			if($r)
			{
				redirect('admin/goods/goodslist','refresh');
			}else
			{
				$this->assign('errors','未知错误，批量男装取消推荐失败！');
				$this->assign('url',base_url('admin/goods/goodslist'));
				$this->display('public/error');
				die;
			}
		}
	}

//商品回收站
	public function huishou()
	{
		$id = $this->uri->segment(4);
		$flags = array('del_flag'=>'0');
		$this->db->where('goods_id',$id);
		$r = $this->db->update('goods',$flags);
		if($r)
		{
			redirect('admin/goods/goodslist','refresh');
		}
		else
		{
			$this->assign('errors','未知错误，删除商品失败！');
			$this->assign('url',base_url('admin/goods/goodslist'));
			$this->display('public/error');
			die;
		}
	}
	//商品回收站
	public function gdlist()
	{
		$g1 = $this->db->get_where('goods',array('del_flag'=>'0'));//显示标志为1的商品
		$goods = $g1->result();

        $this->assign('goods',$goods);

		$this->display('admin/goods/gd_list');
	}
	public function huifu()//恢复商品
	{
		$id = $this->uri->segment(4);
		$flags = array('del_flag'=>'1');
		$this->db->where('goods_id',$id);
		$r = $this->db->update('goods',$flags);
		if($r)
		{
			redirect('admin/goods/gdlist','refresh');
		}
		else
		{
			$this->assign('errors','未知错误，删除商品失败！');
			$this->assign('url',base_url('admin/goods/goodslist'));
			$this->display('public/error');
			die;
		}
	}
	public function del()//侧地删除
	{
		$id = $this->uri->segment(4);
		$r = $this->db->delete('goods',array('goods_id'=>$id));
		if($r)
		{
			$this->db->delete('goodsattr',array('goods_id'=>$id));
			redirect('admin/goods/gdlist','refresh');
		}
		else
		{
			$this->assign('errors','未知错误，删除商品失败！');
			$this->assign('url',base_url('admin/goods/goodslist'));
			$this->display('public/error');
			die;
		}
	}
//回收站的批量操作
	public function gdflags()
	{
		$data = $this->input->post();
		if(!isset($data['ids']))
		{
			$this->assign('errors','您没有选择任何商品！');
			$this->assign('url',base_url('admin/goods/gdlist'));
			$this->display('public/error');
			die;
		}
		if($data['type'] == 'huifu')//批量恢复
		{
			$flags = array(
			'del_flag'=>'1');
			$this->db->where_in('goods_id',$data['ids']);
			$r = $this->db->update('goods',$flags);
			if($r)
			{
				redirect('admin/goods/gdlist','refresh');
			}else
			{
				$this->assign('errors','未知错误，批量恢复失败！');
				$this->assign('url',base_url('admin/goods/gdlist'));
				$this->display('public/error');
				die;
			}
		}

		if($data['type'] == 'del')//批量侧地删除
		{
		
			$this->db->where_in('goods_id',$data['ids']);
			$r = $this->db->delete('goods');
			if($r)
			{
				redirect('admin/goods/gdlist','refresh');
			}else
			{
				$this->assign('errors','未知错误，批量删除失败！');
				$this->assign('url',base_url('admin/goods/gdlist'));
				$this->display('public/error');
				die;
			}
		}
	}

	//商品属性ajax判断
	public function onattr()
	{
		$id = $_GET['goods_id'];
		$g1 = $this->db->get_where('goodsattr',array('goods_id'=>$id));
		$goods = $g1->result();
		if($goods)
		{
			echo '1';
		}
		else
		{
			echo '0';
		}
	}
	
	//修改推荐
	public function mof_is_recom() {
		$this->load->model('goods_model');
		if($this->goods_model->mof_is_recom($_POST)) {
			echo $_POST['is_recom'] == '1' ? '0' : '1';
		}else {
			echo 'error';
		}
	}
	
	
	public function thumb($src_file, $max_w, $max_h) {
	
		$src_info = getimagesize($src_file);
		$mime = $src_info['mime'];//image/png, image/jpeg
		$create_func = array(
				'image/png' => 'imagecreatefromPng',
				'image/jpeg' => 'imagecreatefromJpeg',
				'image/gif' => 'imagecreatefromGif'
		);
		$create = $create_func[$mime];
		$src_img = $create($src_file);//原图画布
		$thumb_img = imagecreatetruecolor($max_w, $max_h);//缩略图画布
		//计算缩略图的大小
		$src_w = imagesx($src_img);
		$src_h = imagesy($src_img);
		//比较宽缩放比例与高缩放比例的大小
		if ($src_w/$max_w > $src_h/$max_h) {
			//范围宽为标准
			$thumb_w = $max_w;
			$thumb_h = $src_h/$src_w * $thumb_w;
		} else  {
			//范围高为标准
			$thumb_h = $max_h;
			$thumb_w = $src_w/$src_h * $thumb_h;
		}
	
		//白色填充
		$white = imagecolorallocate($thumb_img, 0xff, 0xff, 0xff);
		imagefill($thumb_img, 0, 0, $white);
	
		//拷贝修改大小
		imagecopyResampled($thumb_img, $src_img, ($max_w-$thumb_w)/2, ($max_h-$thumb_h)/2, 0, 0, $thumb_w, $thumb_h, imagesx($src_img), imagesy($src_img));
	
		//保存缩略图
		$save_path = dirname($src_file);//原图片保存地址
		$ext_name = strrchr(basename($src_file), '.');
		$thumb_file = basename($src_file, $ext_name) . '_thumb' . $ext_name;
	
		$out_func = array(
				'image/png' => 'imagePng',
				'image/jpeg' => 'imageJpeg',
				'image/gif' => 'imageGif'
		);
		$out = $out_func[$mime];
		$out($thumb_img, $save_path . '/' . $thumb_file);
	
	
		imagedestroy($thumb_img);
		imagedestroy($src_img);
	
		return $thumb_file;//子目录/文件名
	
	}
	
	//添加相册
	public function add_photo() {
		if(!empty($_POST)) {
			//写入相册
			//添加商品相册
			$this->load->library('Ciupload');
			$galleries = $this->ciupload->multiUpload($_FILES['img_url'],'goods_gallery_');
			foreach($galleries as $k=>$v){
				if($v){
					$gall_data['goods_id']=$_POST['goods_id'];
					$gall_data['img_url']=$v;
					$gall_data['thumb_url']=$this->ciimage->thumb('./public/upload/'.$v,300,300);
					$gall_data['img_desc']=$_POST['img_desc'][$k];
					$this->db->insert('galary',$gall_data);
				}
			}
			redirect('admin/goods/goodslist');
		}
		//验证id
		$id = $this->uri->segment(4);
		if(!$this->goods->is_one($id)) {
			$this->show_error(base_url('admin/goods/goodslist'), '非法操作！');
		}
		//获取产品名称
		$info = $this->goods->get_info_one($id);
		$this->assign('info', $info);
		$this->display('admin/goods/add_photo');
	}
	
	
	//修改商品相册
	public function mof_photo() {
		if(!empty($_POST)) {
			
		}
		//验证id
		$id = $this->uri->segment(4);
		if(!$this->goods->is_one($id)) {
			$this->show_error(base_url('admin/goods/goodslist'), '非法操作！');
		}
		//获取产品名称
		$info = $this->goods->get_info_one($id);
		//获取相册信息
		$p_info = $this->goods->get_photo_id($id);

		$this->assign('p_info', $p_info);
		$this->assign('info', $info);
		$this->display('admin/goods/mof_photo');
	}
	
	//删除相册图片
	public function del_photo() {
			$data = $_POST;
			if($this->db->delete('gf_galary',array('goods_id'=>$data['g_id'],'img_id'=>$data['o_id']))) {
				echo '1';
			}else {
				echo '0';
			}
	}
	
	
}