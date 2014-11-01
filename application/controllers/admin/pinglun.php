<?php
class pinglun extends Admin_Controller
{
	public function show()
	{
		$com = $this->db->get('comment');
		$comlist = $com->result();

		$this->assign('comlist',$comlist);
		$this->display('admin/pinglun/pinglist');
	}
	public function add()
	{
		if(!empty($_POST))
		{
			$data = $this->input->post();
			$data['add_time'] = time();
			$result = $this->db->insert('comment',$data);
			if($result)
			{
				redirect('admin/pinglun/show','refresh');
			}else
			{
				$this->assign('errors','添加失败！发生未知错误！');
				$this->assign('url',base_url('admin/pinglun/add'));
				$this->display('error');
			}
		}
		else
		{
			$this->display('admin/pinglun/pingadd');
		}
		
	}
	public function edit()
	{
		if(!empty($_POST))
		{
			$data = $this->input->post();
			$data['add_time'] = time();
			$this->where('comment_id',$data['comment_id']);
			$result = $this->db->update('comment',$data);
			if($result)
			{
				redirect('admin/pinglun/show','refresh');
			}else
			{
				$this->assign('errors','修改失败！发生未知错误！');
				$this->assign('url',base_url('admin/pinglun/show'));
				$this->display('error');
			}
		}
		else
		{
			$id = $this->uri->segment(4);
			$r = $this->db->get_where('comment',array('comment_id'=>$id));
			$row = $r->result();
			$this->assign('crow',$row[0]);
			$this->display('admin/pinglun/pingedit');
		}	
	}
	public function del()
	{
		$id = $this->uri->segment(4);
		$r = $this->db->delete('comment',array('comment_id'=>$id));
		if($r)
			{
				redirect('admin/pinglun/show','refresh');
			}else
			{
				$this->assign('errors','修改失败！发生未知错误！');
				$this->assign('url',base_url('admin/pinglun/show'));
				$this->display('error');
			}
	}
}