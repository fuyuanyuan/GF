<?php
class reply extends Admin_Controller
{
	public function show()
	{
		$rep = $this->db->get('reply');
		$relist = $rep->result();

		$this->assign('relist',$relist);
		$this->display('admin/reply/list');
	}
	public function add()
	{
		if(!empty($_POST))
		{
			$data = $this->input->post();
			$data['rep_time'] = time();
			$result = $this->db->insert('reply',$data);
			if($result)
			{
				redirect('admin/reply/show','refresh');
			}else
			{
				$this->assign('errors','添加失败！发生未知错误！');
				$this->assign('url',base_url('admin/reply/add'));
				$this->display('error');
			}
		}
		else
		{
			$comment_id = $this->uri->segment(4);
			$this->assign('sname',$this->session->userdata('name'));
			$this->assign('sid',$this->session->userdata('id'));
			$this->assign('cid',$comment_id);
			$this->display('admin/reply/add');
		}
		
	}
		public function edit()
	{
		if(!empty($_POST))
		{
			$data = $this->input->post();
			$data['rep_time'] = time();
			$id = $data['reply_id'];
			unset($data['reply_id']);
			$this->db->where('reply_id',$id);
			$result = $this->db->update('reply',$data);
			if($result)
			{
				redirect('admin/reply/show','refresh');
			}else
			{
				$this->assign('errors','添加失败！发生未知错误！');
				$this->assign('url',base_url('admin/reply/show'));
				$this->display('error');
			}
		}
		else
		{
			$comment_id = $this->uri->segment(4);
			$reply_id = $this->uri->segment(5);
			$r = $this->db->get_where('reply',array('reply_id'=>$reply_id));
			$row = $r->row();
			$this->assign('sname',$this->session->userdata('name'));
			$this->assign('sid',$this->session->userdata('id'));
			$this->assign('cid',$comment_id);
			$this->assign('rid',$reply_id);
			$this->assign('row',$row);
			$this->display('admin/reply/edit');
		}
		
	}
	public function del()
	{
		$id = $this->uri->segment(4);
		$r = $this->db->delete('reply',array('reply_id'=>$id));
		if($r)
			{
				redirect('admin/reply/show','refresh');
			}else
			{
				$this->assign('errors','修改失败！发生未知错误！');
				$this->assign('url',base_url('admin/reply/show'));
				$this->display('error');
			}
	}
}