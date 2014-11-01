<?php

/**
 * 图片处理工具类
 */
class Ciimage {
    /**
     * 生成缩略图
     * 补白技术缩略图
     * @param $src_file 原图片文件
     * @param $max_w 缩略图的宽
     * @param $max_h 缩略图的高
     *
     * @return 缩略图地址
     */
    public function thumb($src_file, $max_w, $max_h) {

        $src_info = getimagesize($src_file);
        $mime = $src_info['mime'];//image/png, image/jpeg
        $create_func = array(
            'image/png' => 'imagecreatefromPng',
            'image/jpeg' => 'imagecreatefromJpeg',
            'image/gif' => 'imagecreatefromGif'
        );
        $create = $create_func[$mime];
        $src_img = $create($src_file);//原图画布
        $thumb_img = imagecreatetruecolor($max_w, $max_h);//缩略图画布
        //计算缩略图的大小
        $src_w = imagesx($src_img);
        $src_h = imagesy($src_img);
        //比较宽缩放比例与高缩放比例的大小
        if ($src_w/$max_w > $src_h/$max_h) {
            //范围宽为标准
            $thumb_w = $max_w;
            $thumb_h = $src_h/$src_w * $thumb_w;
        } else  {
            //范围高为标准
            $thumb_h = $max_h;
            $thumb_w = $src_w/$src_h * $thumb_h;
        }

        //白色填充
        $white = imagecolorallocate($thumb_img, 0xff, 0xff, 0xff);
        imagefill($thumb_img, 0, 0, $white);

        //拷贝修改大小
        imagecopyResampled($thumb_img, $src_img, ($max_w-$thumb_w)/2, ($max_h-$thumb_h)/2, 0, 0, $thumb_w, $thumb_h, imagesx($src_img), imagesy($src_img));

        //保存缩略图
        $save_path = dirname($src_file);//原图片保存地址
        $ext_name = strrchr(basename($src_file), '.');
        $thumb_file = basename($src_file, $ext_name) . '_thumb' . $ext_name;

        $out_func = array(
            'image/png' => 'imagePng',
            'image/jpeg' => 'imageJpeg',
            'image/gif' => 'imageGif'
        );
        $out = $out_func[$mime];
        $out($thumb_img, $save_path . '/' . $thumb_file);


        imagedestroy($thumb_img);
        imagedestroy($src_img);

        return basename($save_path) . '/' . $thumb_file;//子目录/文件名

    }
}