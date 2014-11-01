<?php
class Usercenter extends Home_Controller
{
	public function __construct() {
		parent::__construct();
		if(!$_COOKIE['alias']) {
			redirect(base_url('/'));
		}
	}
	
	public function nav() {
		//设置导航
		$this->load->model('category_model','category');
		$main = $this->category->get_main();
		$sons = $this->category->get_sons();
		$this->assign('sons',$sons);
		$this->assign('main', $main);
	}
	
	public function show()//用户中心的展示
	{
		$this->nav();
		$id = $this->uri->segment(4);//

		$user = $this->db->get_where('user',array('user_id'=>$id)); 
		$urow = $user->result();

		$addr = $this->db->get_where('address',array('user_id'=>$id));
		$addrlist = $addr->result();
//未完成订单展示
		$this->db->where('user_id',$id);
		$a = array('0','1');//以订单状态未完成为sql条件
		$this->db->where_in('state',$a);
		$this->db->order_by("order_id", "desc");//倒序，最新添加的在最上面
		$ord = $this->db->get('order');
		$ordlist = $ord->result();
		foreach($ordlist as $orow)
		{
			$gids[] = explode(',',$orow->gids);//分解商品id集合
			$nums[] = explode(',',$orow->order_num);//分解单个商品购买个数的集合
		}
		if(!empty($gids))
		{
			foreach($gids as $gv)//循环商品id集合并取出商品信息
			{
			$gd = array();
			foreach($gv as $v)
			{
				$grow = $this->db->get_where('goods',array('goods_id'=>$v));
				$gd[] = $grow->row();//单个订单的商品信息
			}
			$goods[] = $gd;//多个订单的商品信息，二维数组。
			}
			//未完成订单分配
		$this->assign('goods',$goods);
		$this->assign('nums',$nums);
		$this->assign('ordlist',$ordlist);
		}
		
//已完成订单展示
		$this->db->where('user_id',$id);
		$this->db->where('state','2');
		$this->db->order_by("order_id", "desc");
		$cord = $this->db->get('order');
		$cordlist = $cord->result();
		
		foreach($cordlist as $corow)
		{
			$cgids[] = explode(',',$corow->gids);
			$cnums[] = explode(',',$corow->order_num);
		}
		if(!empty($cgids))
		{
			foreach($cgids as $cgv)
			{
				$cgd = array();
				foreach($cgv as $cv)
				{
					$cgrow = $this->db->get_where('goods',array('goods_id'=>$cv));
					$cgd[] = $cgrow->row();
				}
				$cgoods[] = $cgd;
			}
			//已完成订单分配
		$this->assign('cgoods',$cgoods);
		$this->assign('cnums',$cnums);
		$this->assign('cordlist',$cordlist);
		}


		$this->assign('urow',$urow[0]);
		$this->assign('addrlist',$addrlist);
		$this->display('welcome/show_center');
	}
	public function edit()
	{
		$this->nav();
		if(!empty($_POST))
		{
			@$this->load->library('form_validation');
			$this->form_validation->set_rules('user_alias','昵称','required|max_length[12]');
			$this->form_validation->set_rules('user_birthday','出生年月','max_length[11]');
			$this->form_validation->set_rules('user_email','邮箱','valid_email');
			$this->form_validation->set_rules('repass','re密码','match[user_pass]');
			if(!$this->form_validation->run())
			{
				$error = validation_errors();
				$this->assign('errors',$error);
				$this->assign('url',base_url('home/usercenter/show').'/'.$_POST['user_id']);
				$this->display('error');
				die;
			}
			$data = $this->input->post();
			$data['user_birthday'] = strtotime($data['user_birthday']);
			if(!empty($data['user_pass']))
			{
				$data['user_pass'] = md5($data['suer_pass']);
				unset($data['repass']);	
			}else
			{
				unset($data['user_pass']);
				unset($data['repass']);
			}
			$this->db->where('user_id',$data['user_id']);
			$result = $this->db->update('user',$data);
			if($result)
			{
				redirect('home/usercenter/show/'.$data['user_id'],'refresh');
			}else
			{
				$this->assign('errors','修改失败！发生未知错误！');
				$this->assign('url',base_url('home/usercenter/show').'/'.$data['user_id']);
				$this->display('error');
			}
		}
		else
		{
			$id = $this->uri->segment(4);
			$r = $this->db->get_where('user',array('user_id'=>$id));
			$row = $r->result();
			$this->assign('row',$row[0]);
			$this->display('welcome/edit_center');
		}
		
	}
	//地址修改
	public function adedit()
	{
		$this->nav();
		if(!empty($_POST))
		{
			$data = $this->input->post();
			@$this->load->library('form_validation');
			$this->form_validation->set_rules('addr_name','收货人','required|max_length[20]');
			$this->form_validation->set_rules('address','地址','required');
			$this->form_validation->set_rules('tel','电话','required|is_natural');
			if(!$this->form_validation->run())
			{
				$error = validation_errors();
				$this->assign('errors',$error);
				$this->assign('url',base_url('home/usercenter/show').'/'.$data['user_id']);
				$this->display('error');
				die;
			}

			$this->db->where('addr_id',$data['addr_id']);
			$result = $this->db->update('address',$data);

			if($result)
			{
				redirect('home/usercenter/show/'.$data['user_id'],'refresh');
			}else
			{
				$this->assign('errors','修改失败！发生未知错误！');
				$this->assign('url',base_url('home/usercenter/show').'/'.$data['user_id']);
				$this->display('error');
			}
		}
		else
		{
			$id = $this->uri->segment(4);
			$r = $this->db->get_where('address',array('addr_id'=>$id));
			$row = $r->result();
			$this->assign('row',$row[0]);
			$this->display('welcome/adedit');
		}
	}
	public function addel()//地址删除
	{
		$this->nav();
		$id = $this->uri->segment(4);
		$uid = $this->uri->segment(5);
		$r = $this->db->delete('address',array('addr_id'=>$id));
		if($r)
		{
			$this->db->delete('address',array('addr_id'=>$id));
			redirect(base_url('home/usercenter/show').'/'.$uid,'refresh');
		}
		else
		{
			$this->assign('errors','未知错误，删除商品失败！');
			$this->assign('url',base_url('home/usercenter/show').'/'.$uid);
			$this->display('error');
			die;
		}
	}
	public function adadd()//地址添加
	{
		$this->nav();
		if(!empty($_POST))
		{
			$data = $this->input->post();
			@$this->load->library('form_validation');
			$this->form_validation->set_rules('addr_name','收货人','required|max_length[20]');
			$this->form_validation->set_rules('address','地址','required');
			$this->form_validation->set_rules('tel','电话','required|is_natural');
			if(!$this->form_validation->run())
			{
				$error = validation_errors();
				$this->assign('errors',$error);
				$this->assign('url',base_url('home/usercenter/show').'/'.$data['user_id']);
				$this->display('error');
				die;
			}

			$result = $this->db->insert('address',$data);

			if($result)
			{
				redirect('home/usercenter/show/'.$data['user_id'],'refresh');
			}else
			{
				$this->assign('errors','修改失败！发生未知错误！');
				$this->assign('url',base_url('home/usercenter/show').'/'.$data['user_id']);
				$this->display('error');
			}
		}
		else
		{
			$uid = $this->uri->segment(4);
			$this->assign('uid',$uid);
			$this->display('welcome/adadd');
		}
	}
	public function orddel()//订单删除
	{
		$this->nav();
		$id = $this->uri->segment(4);
		$uid = $this->uri->segment(5);
		$r = $this->db->delete('order',array('order_id'=>$id));
		if($r)
		{
			redirect(base_url('home/usercenter/show').'/'.$uid,'refresh');
		}
		else
		{
			$this->assign('errors','未知错误，删除订单失败！');
			$this->assign('url',base_url('home/usercenter/show').'/'.$uid);
			$this->display('error');
			die;
		}
	}
	public function queren()//确认收货
	{
		$this->nav();
		$id = $this->uri->segment(4);
		$uid = $this->uri->segment(5);
		$data['state'] = '2';
		$this->db->where('order_id',$id);
		$r = $this->db->update('order',$data);
		if($r)
		{
			redirect(base_url('home/pinglun/show').'/'.$id,'refresh');
		}
		else
		{
			$this->assign('errors','未知错误，确认失败！');
			$this->assign('url',base_url('home/usercenter/show').'/'.$uid);
			$this->display('error');
			die;
		}
	}
	
	//添加订单
	public function in_order() {
		$ids = $order_num ='';
		if(isset($_COOKIE['p_details'])) {
			$info = unserialize($_COOKIE['p_details']);
			$user_id = $_COOKIE['u_id'];
			//根据用户id获取地址id
			$this->load->model('address_model','addr');
			$query = $this->addr->get_by_user($user_id);
			//地址id
			$addr_id = $query[0]->addr_id;
			foreach ($info as $value) {
				$ids .= $value['id'] . ',';
				$order_num .= '1,';
			}
			$data['gids'] = rtrim($ids,',');
			$data['user_id'] = $user_id;
			$data['addr_id'] = $addr_id;
			$data['order_num'] = rtrim($order_num,',');
			$data['ordtime'] = time();
			$data['state'] = 0;
			if($this->db->insert('order', $data)) {
				//清空购物车
				setcookie('p_details',null,1,'/');	
				setcookie('car_id',null,1,'/');
				echo '1';
			}else {
				echo '0';
			}
			
		}else {
			echo 'false';
		}
	}

}