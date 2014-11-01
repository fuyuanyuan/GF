<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * 商品列表控制器
 */
	class Car extends Home_Controller {
		
		
		//载入列表页面
		public function index() {
			$this->display('welcome/car');
		}
	}



?>