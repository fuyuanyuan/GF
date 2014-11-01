<?php if (!defined('BASEPATH')) exit('No direct access allowed.');
/*
 * 上传的参数配置
 */
$config['upload_path'] = './public/upload/';    //使用的相对入口文件的路径
$config['allowed_types'] = 'gif|png|jpg|jpeg';   //允许上传的文件类型，以上参数是必须的
$config['file_name'] = uniqid('ori_');