<?php
/**
 *图片上传的工具类
 */
class Ciupload{

    //设置工具类的相关属性
    private $allow_types;   //允许上传的文件类型
    private $max_size;      //允许上传的最大文件尺寸。
    private $path;          //上传目录的位置
    private $error;         //保存出错信息。
    private $errors=array();

    //构造方法，初始化类的信息
    public function __construct($param=array()){
        $this->allow_types = isset($param['types']) ? $param['types']: array('image/jpeg', 'image/pjpeg', 'image/png', 'image/x-png', 'image/gif');//$GLOBALS['config']['tool']['allow_type'];
        $this->max_size = isset($param['max_size']) ? $param['max_size'] :200000;// $GLOBALS['config']['tool']['upload_max_size'];
        $this->path = isset($param['path']) ? $param['path'] : './public/upload/';//$GLOBALS['config']['tool']['path'];
    }
    /**
     *图片上传的方法
     *@param $file array 需要上传文件的基本信息
     *@param $prefix $string 上传文件的保存临时文件的前缀。
     *@return $string 返回保存后文件的名称以及子目录
     */
    public function upload($file,$prefix=''){
        //先判断文件是否存在
        if($file==''){
            $this->error = "未选择商品的上传图片";
            return false;
        }
        //首先是要判断上传是否出错
        if($file['error']!=0){
            switch($file['error']){
                case 1:
                    $this->error = '文件过大，超过了php配置的限制';
                    break;
                case 2:
                    $this->error = "文件过大，超出了form表单的限制";
                    break;
                case 3:
                    $this->error = "出现错误，文件未上传完毕";
                    break;
                case 4:
                    $this->error = "文件未上传";
                    break;
                case 6:
                    $this->error = "上传文件，未找到上传的临时目录。";
                    break;
                case 7:
                    $this->error = "临时文件写入失败";
                    break;
            }
            return false;
        }
        //判断文件的类型是不是允许的类型
        //var_dump($file['type'],$this->allow_types);

        if(!in_array($file['type'],$this->allow_types)){
            $this->error = '不能上传该类型的文件,允许的文件类型有：'.implode("|",$this->allow_types);
            return false;
        }
        //判断文件的大小是否合法
        if($file['size']>$this->max_size){
            $this->error = '文件过大，允许上传的文件大小为：'.$this->max_size;
            return false;
        }
        //移动后的文件的命名，使用一个函数uniqIDL来生成唯一的文件名。
        $new_file = uniqid($prefix).strrchr($file['name'],'.');
        //确定子目录
        $sub_path = date('Ymd');
        //先判断子目录是否存在，不存在就创建一个子目录
        if(!is_dir($this->path.$sub_path)){
            mkdir($this->path.$sub_path);
        }
        //移动临时文件
        //move_uploaded_file(参数一，参数二)，参数一：是临时文件的原始地址，包括原始目录以及文件名，参数二：保存到的新地址，也包括文件名。
        if(move_uploaded_file($file['tmp_name'],$this->path.$sub_path.'/'.$new_file)){
            //移动成功
            return $sub_path.'/'.$new_file;
        }else{
            //移动失败
            $this->error = "移动文件失败";
        }
    }
    //
    public function __get($pname){
        return $this->$pname;
    }
    /**
     * 上传多个文件
     *
     * @param $files
     * @param $prefix
     *
     * @return array，所有图片的上传结果。
     */
    public function multiUpload($files,$prefix=''){
        foreach($files['error'] as $k=>$v){
            $file['name'] = $files['name'][$k];
            $file['type'] = $files['type'][$k];
            $file['tmp_name'] = $files['tmp_name'][$k];
            $file['size'] = $files['size'][$k];
            $file['error'] = $files['error'][$k];
            //将每上传一个文件就存放到数组的一个元素中。
            $gallery[$k] = $this->upload($file,$prefix);
            if(!$gallery[$k]){
                $this->errors[$k] = $this->error;
            }
        }
        return $gallery;
    }
}