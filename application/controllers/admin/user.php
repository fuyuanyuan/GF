<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends Admin_Controller
{
	
	public function __construct() {
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('address_model','addr');
	}
	
// 	//ajax
// 	public function get_list_data() {
// 		$page_num = substr(strrchr( $_GET['num'],'/'),-1);
// 		//获取总量
// 		$total = $this->user_model->get_total();
// 		//设置分页所在位置
// 		$page_place = 2;
// 		//获取页码
// 		$page = $this->uri->segment($page_place);
// 		//引入分页类
// 		$config_page = array(
// 				'total' => $total,
// 				'pagesize' => 2,
// 				'page' => $page_num,
// 				'page_place' => $page_place,
// 		);
// 		$this->load->library('cipage',$config_page);
// 		$limit = $this->cipage->setLimit();
// 		$all_data = $this->user_model->get_all_user($limit);
// 		$all_data[] =  $this->cipage->showPage();		//添加分页的信息
// 		echo json_encode($all_data);
// 	}
	
	//ajax
// 	public function assign_ajax() {
// 		return json_decode($_POST['ok']);
// 	}
	
	public function userlist(){
		if(isset($_POST['send'])) {		//用户点击了搜索
			$data = $this->input->post();
			if(empty($data['keyword'])) {
				switch ($data['intro_type']) {
					case '0' :
						$total = $this->user_model->get_total();
						$where = '';
						break;
					case '1' :
						$total = $this->user_model->get_total_filter(1);
						$where =array( 'user_flag' => 1);
						break;
					case '2' : 
						$total = $this->user_model->get_total_filter(0);
						$where =array( 'user_flag' => 0);
						break;
				}
			}else {
				$keyword = $data['keyword'];
				switch ($data['intro_type']) {
					case '0' :
						$total = $this->user_model->get_total_filter('1,0',$keyword);
						$where = array(
								'user_alias like'=> "%$keyword%",
						);
						break;
					case '1' :
						$total = $this->user_model->get_total_filter(1,$keyword);
// 						$where = " user_name like '%{$data['keyword']}%' AND user_flag = 1";
						$where = array(
								'user_alias like'=> "%$keyword%",
								'user_flag' => 1
						);
						break;
					case '2' :
						$total = $this->user_model->get_total_filter(0,$keyword);
// 						$where =	" user_name like '%{$data['keyword']}%' AND user_flag = 0";
						$where = array(
								'user_alias like'=> "%$keyword%",
								'user_flag' => 0
						);
						break;
				}
			}
			$this->assign('intro_type', $data['intro_type']);
		}else {
		
			//获取总量
			$total = $this->user_model->get_total();
			$where = '';
			$this->assign('intro_type','0');
		}
		//设置分页所在位置
		$page_place = 4;
		//获取页码
		$page = $this->uri->segment($page_place);
		//引入分页类
		$config_page = array(
				'total' => $total,
				'pagesize' => 5,
				'page' => $page,
				'page_place' => $page_place,
		);
		$this->load->library('cipagemy',$config_page);
		$limit = $this->cipagemy->setLimit();
		$all_user =  $this->user_model->get_all_user(array('limit'=>$limit,'where'=>$where));
		//如果存在搜索词
		$this->assign('num_li', $this->cipagemy->setNum());
		$this->assign('page', $this->cipagemy->showPage());
 		$this->assign('userlist', $all_user);
		$this->display('admin/user/userlist');
	}
	
	public function address()
	{
		$total = $this->addr->get_total();
		//设置分页所在位置
		$page_place = 4;
		//获取页码
		$page = $this->uri->segment($page_place);
		//引入分页类
		$config_page = array(
				'total' => $total,
				'pagesize' => 5,
				'page' => $page,
				'page_place' => $page_place,
		);
		$this->load->library('cipagemy',$config_page);
		$limit = $this->cipagemy->setLimit();
		$data =  $this->addr->get_all_addr($limit);
		$this->assign('num_li', $this->cipagemy->setNum());
		$this->assign('page', $this->cipagemy->showPage());
		$this->assign('addr',$data);
		$this->display('admin/user/address');
	}
	
public function edit()
	{
		if(!empty($_POST))
		{
			@$this->load->library('form_validation');
			$this->form_validation->set_rules('user_alias','昵称','required|max_length[12]');
			$this->form_validation->set_rules('user_birthday','出生年月','max_length[11]');
			$this->form_validation->set_rules('user_inte','积分','required|is_natural');
			$this->form_validation->set_rules('user_email','邮箱','valid_email');
			$this->form_validation->set_rules('repass','re密码','match[user_pass]');
			if(!$this->form_validation->run())
			{
				$error = validation_errors();
				$this->assign('errors',$error);
				$this->assign('url',base_url('admin/user/userlist'));
				$this->display('public/error');
				die;
			}
			$data = $this->input->post();
			$data['user_birthday'] = strtotime($data['user_birthday']);
			if(!empty($data['user_pass']))
			{
				$data['user_pass'] = md5($data['user_pass']);
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
				redirect('admin/user/userlist','refresh');
			}else
			{
				$this->assign('errors','修改失败！发生未知错误！');
				$this->assign('url',base_url('admin/user/userlist'));
				$this->display('public/error');
			}
		}
		else
		{
			$id = $this->uri->segment(4);
			$r = $this->db->get_where('user',array('user_id'=>$id));
			$row = $r->result();
			$this->assign('row',$row[0]);
			$this->display('admin/user/user_edit');
		}
		
	}
	
	public function addr_edit()
	{
		if(!empty($_POST))
		{
			@$this->load->library('form_validation');
			$this->form_validation->set_rules('addr_name','收货人','required|max_length[20]');
			$this->form_validation->set_rules('address','地址','required');
			$this->form_validation->set_rules('tel','电话','required|is_natural');
			if(!$this->form_validation->run())
			{
				$error = validation_errors();
				$this->assign('errors',$error);
				$this->assign('url',base_url('admin/user/address'));
				$this->display('public/error');
				die;
			}
	
			$data = $this->input->post();
			$this->db->where('addr_id',$data['addr_id']);
			$result = $this->db->update('address',$data);
	
			if($result)
			{
				redirect('admin/user/userlist','refresh');
			}else
			{
				$this->assign('errors','修改失败！发生未知错误！');
				$this->assign('url',base_url('admin/user/address'));
				$this->display('public/error');
			}
		}
		else
		{
			$id = $this->uri->segment(4);
			$r = $this->db->get_where('address',array('addr_id'=>$id));
			$row = $r->result();
			$this->assign('row',$row[0]);
			$this->display('admin/user/addr_edit');
		}
	}
	
	public function stop()
	{
		$id = $this->uri->segment(4);
		$flag = $this->uri->segment(5);
		if(!$flag)
		{
			$data = array(
					'user_flag'=>'1');
			$r = $this->db->update('user',$data,array('user_id'=>$id));
			if($r)
			{
				redirect('admin/user/userlist','refresh');
			}else
			{
				echo 'shibai';
			}
		}else{
			redirect('admin/user/userlist','refresh');
		}
	}
	
	public function restop()
	{
		$id = $this->uri->segment(4);
		$flag = $this->uri->segment(5);
		if($flag)
		{
			$data = array(
					'user_flag'=>'0');
			$r = $this->db->update('user',$data,array('user_id'=>$id));
			if($r)
			{
				redirect('admin/user/userlist','refresh');
			}else
			{
				echo 'shibai';
			}
		}else{
			redirect('admin/user/userlist','refresh');
		}
	}
	
	public function stops()
	{
		$data = $this->input->post();
		if($data['type'] == 'stop')
		{
			$flags = array(
					'user_flag'=>'1');
			$this->db->where_in('user_id',$data['ids']);
			$r = $this->db->update('user',$flags);
			if($r)
			{
				redirect('admin/user/userlist','refresh');
			}else
			{
				echo 'shibai';
			}
		}
		else
		{
			$flags = array(
					'user_flag'=>'0');
			$this->db->where_in('user_id',$data['ids']);
			$r = $this->db->update('user',$flags);
			if($r)
			{
				redirect('admin/user/userlist','refresh');
			}else
			{
				echo 'shibai';
			}
		}
	
	}
	
	
	//展示会员全部信息
	public function detail() {
		$id = $this->uri->segment(4);
		if(!$this->user_model->check_id($id)) {//id错误，调回
				$this->show_error(base_url('admin/user/userlist'),'错误！非法ID！');
		}
		$one_info = $this->user_model->get_one_user($id);
		$this->assign('one_info', $one_info[0]);
		$this->display('admin/user/user_detail');
	}

}