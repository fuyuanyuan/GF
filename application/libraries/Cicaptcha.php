<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
// 验证码类
class Cicaptcha {
	private $_str = 'abcdefghkmnstwxyABCDEFGHKMNQSTWXY34567';
	private $_code = '';
	private $_img;
	private $_width;
	private $_height;
	private $_font;
	private $_code_len;
	
	public function run($len = 4) {
		$this->init ( $len );
		$this->makeCode ();
		$this->setCode ();
		$this->imgPut ();
	}
	
	// 初始话
	private function init($codelen) {
		$this->_code_len = $codelen;
		$num = mt_rand ( 1, 5 );
		$this->_font = FCPATH . 'public/ttf/3.OTF';
		$imgdir = FCPATH . 'public/captcha/captcha.png';
		$imginfoarr = getimagesize ( $imgdir );
		$this->_width = $imginfoarr [0];
		$this->_height = $imginfoarr [1];
		$this->_img = imagecreatefrompng ( $imgdir );
	}
	
	// 创建随机
	private function makeCode() {
		$str_len = strlen ( $this->_str ) - 1;
		for($i = 0; $i < $this->_code_len; ++ $i) {
			$this->_code .= $this->_str [mt_rand ( 0, $str_len )];
		}
	}
	
	// 填充验证码
	private function setCode() {
		$x = $this->_width / $this->_code_len;
		$y = $this->_height / 1.2;
		for($i = 0; $i < $this->_code_len; ++ $i) {
			$font_color = imagecolorallocate ( $this->_img, mt_rand(200,255),  mt_rand(200,255), mt_rand(200,255) );
			imagettftext ( $this->_img, 25, mt_rand ( - 20, 20 ), $x * $i + $this->_width / 10, $y, $font_color, $this->_font, $this->_code [$i] );
		}
	}
	
	// 输出图像
	private function imgPut() {
		header ( 'Content-Type:image/jpeg' );
		imagejpeg ( $this->_img );
		imagedestroy ( $this->_img );
	}
	
	// 获取验证码值
	public function getCode() {
		return strtolower($this->_code);
	}
}

?>