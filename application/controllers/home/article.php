<?php

/*
 * 文章前台控制器
 */
	class Article extends Home_Controller {
		
		public function __construct() {
			parent::__construct();
			$this->load->model('article_model','art');
		}
		
		//获取下一篇文章
		public function get_next() {
			$id_arr = $this->art->get_art_next($_GET['id']);
			$max_id = $this->art->get_max_id() ? $this->art->get_max_id() : 0;
			
			if($id_arr) {
				$res = $this->art->getArtById($id_arr[0]->art_id);
				if($_GET['id'] >= $max_id[0]->art_id){
					$res['flag'] = 'ok';
				}
				echo json_encode($res);
				//     		echo json_encode($this->art->getArtById($id_arr[0]->art_id));
			}else {
				echo 0;
			}
			//     	if($id_arr) {
			//     		echo $id_arr[0]->art_id;
			//     	}else {
			//     		echo 'error';
			//     	}
		}
		
		//获取上一篇文章
		public function get_pre() {
			$id_arr = $this->art->get_art_pre($_GET['id']);
			$min_id = $this->art->get_min_id() ? $this->art->get_min_id() : 0;
			if($id_arr[0]->max) {
				$res = $this->art->getArtById($id_arr[0]->max);
				if($_GET['id'] == $min_id[1]->art_id){
					$res['flag'] = 'ok';
				}
		
				echo json_encode($res);
			}else {
				echo '0';
			}
		}
		
	}

?>