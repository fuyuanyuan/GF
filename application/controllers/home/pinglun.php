<?php
class pinglun extends Home_Controller
{
	
	public function nav() {
		//设置导航
		$this->load->model('category_model','category');
		$main = $this->category->get_main();
		$sons = $this->category->get_sons();
		$this->assign('sons',$sons);
		$this->assign('main', $main);
	}
	public function show()
	{
		$this->nav();
		$id = $this->uri->segment(4);

		$this->db->where('order_id',$id);
		$ord = $this->db->get('order');
		$orow = $ord->row();

		$gids = explode(',',$orow->gids);//分解商品id集合
		$nums = explode(',',$orow->order_num);//分解单个商品购买个数的集合
		
		foreach($gids as $v)
		{
			$grow = $this->db->get_where('goods',array('goods_id'=>$v));
			$goods[] = $grow->row();//单个订单的商品信息
		}
		$user = $this->db->get_where('user',array('user_id'=>$orow->user_id));
		$urow = $user->row();

		$this->assign('orow',$orow);
		$this->assign('nums',$nums);
		$this->assign('urow',$urow);
		$this->assign('goods',$goods);

		$this->display('welcome/pinglun');
	}
	public function insert()
	{
		$this->nav();
		$xin = $this->input->post();
		$gids = explode(',',$xin['gids']);
		unset($xin['gids']);
		foreach($gids as $gid)
		{
			$one = array();
			foreach($xin as $k=>$v)
			{
				if($gid == substr($k,-2))
				{
					$one[] = $v;
				}
			}
			$ins[] = $one;	
		}
		foreach($ins as $k=>$v)
		{
			$data['goods_id'] = $gids[$k];
			$data['user_id'] = $xin['user_id'];
			$data['user_name'] = $xin['user_name'];
			$data['comment_rank'] = $v[0];
			$data['comment_xing'] = $v[1];
			$data['content'] = $v[2];
			$data['add_time'] = time();
			$r = $this->db->insert('comment',$data);
		}
		if($r)
		{
			redirect(base_url('home/usercenter/show').'/'.$xin['user_id'],'refresh');
		}
		else
		{
			$this->assign('errors','未知错误，确认失败！');
			$this->assign('url',base_url('home/usercenter/show').'/'.$xin['user_id']);
			$this->display('error');
			die;
		}
	}
}