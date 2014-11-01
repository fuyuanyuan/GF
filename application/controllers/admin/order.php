<?php
class order extends Admin_Controller
{
	public function show()
	{
		$ord = $this->db->get('order');
		$ordlist = $ord->result();
		
		foreach($ordlist as $orow)
		{
			$addr = $this->db->get_where('address',array('addr_id'=>$orow->addr_id));
			$ads[] = $addr->row();//订单对应收货地址
		}
		$this->assign('ordlist',$ordlist);
		$this->assign('addr',$ads);
		$this->display('admin/order/ordlist');
	}
	public function add()
	{
		if(!empty($_POST))
		{
			@$this->load->library('form_validation');
			$this->form_validation->set_rules('order_sn','订单号','required|max_length[8]|prep_for_form');
			$this->form_validation->set_rules('gids','商品编号集合','required|prep_for_form');
			$this->form_validation->set_rules('user_id','订单所属用户','required|prep_for_form|is_natural_no_zero');
			$this->form_validation->set_rules('addr_id','订单地址','required|prep_for_form|is_natural_no_zero');
			$this->form_validation->set_rules('state','订单状态','required');
			if(!$this->form_validation->run())
			{
				$error = validation_errors();
				$this->assign('errors',$error);
				$this->assign('url',base_url('admin/order/add'));
				$this->display('error');
				die;
			}
			$data = $this->input->post();
			$data['ordtime'] = time();

			$result = $this->db->insert('order',$data);
			if($result)
			{
				redirect('admin/order/show','refresh');
			}else
			{
				$this->assign('errors','修改失败！发生未知错误！');
				$this->assign('url',base_url('admin/order/add'));
				$this->display('error');
			}
		}
		else
		{
			$this->display('admin/order/ordadd');
		}
		
	}
	public function edit()
	{
		if(!empty($_POST))
		{
			@$this->load->library('form_validation');
			$this->form_validation->set_rules('order_sn','订单号','required|max_length[8]|prep_for_form');
			$this->form_validation->set_rules('gids','商品编号集合','required|prep_for_form');
			$this->form_validation->set_rules('user_id','订单所属用户','required|prep_for_form|is_natural_no_zero');
			$this->form_validation->set_rules('addr_id','订单地址','required|prep_for_form|is_natural_no_zero');
			$this->form_validation->set_rules('state','订单状态','required');
			if(!$this->form_validation->run())
			{
				$error = validation_errors();
				$this->assign('errors',$error);
				$this->assign('url',base_url('admin/order/show'));
				$this->display('error');
				die;
			}
			$data = $this->input->post();
			$data['ordtime'] = time();

			$this->db->where('order_id',$data['order_id']);
			$result = $this->db->update('order',$data);
			if($result)
			{
				redirect('admin/order/show','refresh');
			}else
			{
				$this->assign('errors','修改失败！发生未知错误！');
				$this->assign('url',base_url('admin/order/show'));
				$this->display('error');
			}
		}
		else
		{
			$id = $this->uri->segment(4);
			$r = $this->db->get_where('order',array('order_id'=>$id));
			$row = $r->result();
			$this->assign('orow',$row[0]);
			$this->display('admin/order/ordedit');
		}
		
	}
	public function del()
	{
		$id = $this->uri->segment(4);
		$r = $this->db->delete('order',array('order_id'=>$id));
		if($r)
		{
			redirect(base_url('admin/order/show'),'refresh');
		}
		else
		{
			$this->assign('errors','未知错误，删除商品失败！');
			$this->assign('url',base_url('admin/order/show'));
			$this->display('error');
			die;
		}
	}
	public function pei()//商品配送
	{
		$id = $this->uri->segment(4);
		$data['state'] = '1';
		$this->db->where('order_id',$id);
		$r = $this->db->update('order',$data);
		if($r)
		{
			redirect(base_url('admin/order/show'),'refresh');
		}
		else
		{
			$this->assign('errors','未知错误，配送失败！');
			$this->assign('url',base_url('admin/order/show'));
			$this->display('error');
			die;
		}
	}


}