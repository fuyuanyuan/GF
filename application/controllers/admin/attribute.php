<?php
class attribute extends Admin_Controller
{
	public function attrlist()
	{
		$attr = $this->db->get('attr');
		$attrlist = $attr->result();
		$this->assign('list',$attrlist);
		$this->display('admin/attr/attr_list');
	}
	public function attradd()
	{
		if(!empty($_POST))
		{
			@$this->load->library('form_validation');
			$this->form_validation->set_rules('attr_name','属性名称','required|max_length[12]|prep_for_form');
			$this->form_validation->set_rules('attr_type','属性类型','is_natural_no_zero');
			$this->form_validation->set_rules('attr_values','属性值列表','max_length[80]|prep_for_form');
			if(!$this->form_validation->run())
			{
				$error = validation_errors();
				$this->assign('errors',$error);
				$this->assign('url',base_url('admin/attribute/attradd'));
				$this->display('error');
				die;
			}

			$data = $this->input->post();
			$result = $this->db->insert('attr',$data);
			if($this->db->affected_rows())
			{
				redirect('admin/attribute/attrlist','refresh');
			}else
			{
				$this->assign('errors','添加失败！发生未知错误！');
				$this->assign('url',base_url('admin/attribute/attradd'));
				$this->display('error');
			}
		}
		else
		{
			$this->display('admin/attr/attr_add');
		}
		
	}
	public function attredit()
	{
		if(!empty($_POST))
		{
			@$this->load->library('form_validation');
			$this->form_validation->set_rules('attr_name','属性名称','required|max_length[12]|prep_for_form');
			$this->form_validation->set_rules('attr_type','属性类型','is_natural_no_zero');
			$this->form_validation->set_rules('attr_values','属性值列表','max_length[80]|prep_for_form');
			if(!$this->form_validation->run())
			{
				$error = validation_errors();
				$this->assign('errors',$error);
				$this->assign('url',base_url('admin/attribute/attrlist'));
				$this->display('error');
				die;
			}

			$data = $this->input->post();
			if($data['attr_type']==1)
			{
				$data['attr_values']='';
			}
			$this->db->where('attr_id',$data['attr_id']);
			$result = $this->db->update('attr',$data);
			if($result)
			{
				redirect('admin/attribute/attrlist','refresh');
			}else
			{
				$this->assign('errors','修改失败！发生未知错误！');
				$this->assign('url',base_url('admin/attribute/attrlist'));
				$this->display('error');
			}
		}
		else
		{
			$id = $this->uri->segment(4);
			$r = $this->db->get_where('attr',array('attr_id'=>$id));
			$row = $r->row();
			$this->assign('row',$row);
			$this->display('admin/attr/attr_edit');
		}
	}
	public function attrdel()
	{
		$id = $this->uri->segment(4);
		$result = $this->db->delete('attr',array('attr_id'=>$id));
		if($result)
		{
			redirect('admin/attribute/attrlist','refresh');
		}else
		{
			$this->assign('errors','删除失败！发生未知错误！');
			$this->assign('url',base_url('admin/attribute/attrlist'));
			$this->display('error');
		}
	}
	public function goodsattr()
	{
		$goods_id = $this->uri->segment(4);
		$attr = $this->db->get('attr');
		$attrlist = $attr->result();
		$this->assign('list',$attrlist);
		$this->assign('goods_id',$goods_id);
		$this->display('admin/attr/goodsattr');
	}
	public function goodsattradd()
	{
		@$this->load->library('form_validation');
		$this->form_validation->set_rules('attr_value','属性','prep_for_form');
		if(!$this->form_validation->run())
		{
			$error = validation_errors();
			$this->assign('errors',$error);
			$this->assign('url',base_url('admin/attribute/attrlist'));
			$this->display('error');
			die;
		}

		$data = $this->input->post();
		$data1 = $data['attr_value'];
		foreach($data1 as $k=>$v)
		{
			$ga['goods_id'] = $data['goods_id'];
			$ga['attr_id'] = $k;
			$ga['value'] = $v;
			$result = $this->db->insert('goodsattr',$ga);
		}
		if($result)
		{
			redirect('admin/goods/goodslist','refresh');
		}else
		{
			$this->assign('errors','添加失败！发生未知错误！');
			$this->assign('url',base_url('admin/attribute/attrlist'));
			$this->display('error');
		}
	}
	public function gaedit()
	{
		if(!empty($_POST))
		{
			@$this->load->library('form_validation');
			$this->form_validation->set_rules('attr_value','属性','prep_for_form');
			if(!$this->form_validation->run())
			{
				$error = validation_errors();
				$this->assign('errors',$error);
				$this->assign('url',base_url('admin/attribute/attrlist'));
				$this->display('error');
				die;
			}

			$data = $this->input->post();
			$data1 = $data['attr_value'];
			foreach($data1 as $k=>$v)
			{
				$ga['value'] = $v;
				$this->db->where('goods_id',$data['goods_id']);
				$this->db->where('attr_id',$k);
				$result = $this->db->update('goodsattr',$ga);
			}
			if($result)
			{
				echo '商品列表';
			}else
			{
				$this->assign('errors','添加失败！发生未知错误！');
				$this->assign('url',base_url('admin/attribute/attrlist'));
				$this->display('error');
			}
		}
		else
		{
			$goods_id = $this->uri->segment(4);
			$ga1 = $this->db->get_where('goodsattr',array('goods_id'=>$goods_id));
			$ga = $ga1->result();
			$this->assign('ga',$ga);

			$attr = $this->db->get('attr');
			$attrlist = $attr->result();
			$this->assign('list',$attrlist);
			$this->assign('goods_id',$goods_id);

			$this->display('admin/attr/gaedit');	
		}
		
	}
	// public function gashow()
	// {
	// 	$goods_id = $this->uri->segment(4);
	// 	$ga1 = $this->db->get_where('goodsattr',array('goods_id'=>$goods_id));
	// 	$ga = $ga1->result();
	// 	$this->assign('ga',$ga);
	// 	$this->display('admin/attr/gashow');

	// }

	public function cc()
	{
		$this->display('admin/attr/1');
	}
}