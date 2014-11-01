<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

function smarty_function_base_url ($params, &$smarty) {
	if (! function_exists ('base_url')) {
		if (! function_exists ('get_instance')) {
			return "Can't get CI instance";
		}
		$CI =& get_instance();
		$CI->load->helper('url');
	}
	if (!isset($params['url'])) {
		return base_url();
	} else {
		return base_url($params['url']);
	}
}
