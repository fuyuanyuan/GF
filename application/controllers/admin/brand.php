<?php if (!defined('BASEPATH')) exit('No direct access allowed.');
/*
 * 商品品牌控制器
 *
 */
class Brand extends Admin_Controller{

    //构造方法
    public function __construct(){
        //调用父类的构造方法
        parent::__construct();
        //初始化加载一些类文件
        $this->load->model('brand_model','brand');
        //上传文件类
        $this->load->library('upload');
    }
    //展示页面
    public function show_list(){
        $pagesize = 2;
        //获取总记录数
        $total = $this->brand->countBrand();
        $config=array(
            'total' =>$total,
            'listRows'=>$pagesize,
            'pa' => '',
        );
        $this->load->library('cipage',$config);
        $limit = $this->cipage->limit;
        $data = $this->brand->show_brand($limit);
        $pagelist  = $this->cipage->fpage(array(3,4,5,6,7,8));
        $this->assign('links',$pagelist);
        $this->assign('data',$data);
        $this->display('admin/brand/show_list');
    }

    //显示添加的页面
    public function add(){
        if(empty($_POST)){
            //显示添加表单
            $this->display('admin/brand/add');
        }else{
            //处理表单数据
            //1.设置验证规则
            $this->form_validation->set_rules('brand_name','品牌名称','required');
            if($this->form_validation->run()==false){
                //未通过验证
                $data['message'] =validation_errors();
                $data['url'] = site_url('admin/brand/add');
                $data['wait'] = 3;
                $this->assign('data',$data);
                $this->display('admin/message');
            }else{
                //通过验证,1.处理图片上传
                //文件上传类中有一个do_upload有一个很重要的方法，返回值bool
                if($this->upload->do_upload('brand_logo')){
                    //成功，获取图片的信息,主要是文件名
                    $fileinfo = $this->upload->data(); //返回一个数组
                    $data['brand_logo'] = $fileinfo['file_name'];
                    //2.收集表单数据
                    $data['brand_name'] = $this->input->post('brand_name');
                    $data['brand_desc'] = $this->input->post('brand_desc');
                    $data['brand_url'] = $this->input->post('brand_url');
                    $data['sort_order'] = $this->input->post('sort_order');
                    $data['is_show'] = $this->input->post('is_show');
                    //3.调用brand模型来处理数据
                    if($this->brand->add_brand($data)){
                        //插入成功，直接跳转
                        redirect('admin/brand/show_list','refresh');

                    }else{
                        //插入失败,显示失败信息
                        $data['message']= '添加品牌失败。';
                        $data['url'] = 'admin/brand/add';
                        $data['wait'] = 3;
                        $this->assign('data',$data);
                        $this->display('admin/message');
                    }
                }else{
                    //失败，显示错误提示
                    $data['message'] =$this->upload->display_errors();
                    $data['url'] = site_url('admin/brand/add');
                    $data['wait'] = 3;
                    $this->assign('data',$data);
                    $this->display('admin/message');
                }
            }
        }
    }

    //显示编辑的页面
    public function edit($bid=0){
        if(empty($_POST)){
            //显示编辑表单
            $data = $this->brand->getBrandById($bid);
            //var_dump($data);
            $this->assign('data',$data);
            $this->display('admin/brand/edit');
        }else{
            //处理编辑的数据
            $this->form_validation->set_rules('brand_name','品牌名称','required');
            $brand_id = $this->input->post('brand_id');
            if($this->form_validation->run()!=false){
                //1.判断有没有文件上传
                if($_FILES['brand_logo']['error']>0){
                    //没有上传文件
                    $data['brand_logo'] = $this->input->post('old_logo');
                }else{
                    //需要上传图片
                    if($this->upload->do_upload('brand_logo')){
                        //成功，获取图片的信息,主要是文件名
                        $fileinfo = $this->upload->data(); //返回一个数组
                        $data['brand_logo'] = $fileinfo['file_name'];
                        //删除上传目录中的图片文件
                        @unlink(base_url.'public/upload/'.$this->input->post('old_logo'));
                    }
                }
                //收集表单数据
                $data['brand_name'] = $this->input->post('brand_name');
                $data['brand_desc'] = $this->input->post('brand_desc');
                $data['brand_url'] = $this->input->post('brand_url');
                $data['sort_order'] = $this->input->post('sort_order');
                $data['is_show'] = $this->input->post('is_show');
                if($this->brand->upd_brand($brand_id,$data)){
                    //表示修改成功，直接跳转
                    redirect('admin/brand/show_list');

                }else{
                    //修改失败，提示失败信息
                    $data['message'] ='修改失败。';
                    $data['url'] = site_url('admin/brand/edit/'.$brand_id);
                    $data['wait'] = 3;
                    $this->assign('data',$data);
                    $this->display('admin/message');
                }

            }else{
                $data['message'] =validation_errors();
                $data['url'] = site_url('admin/brand/edit/'.$this->input->post('brand_id'));
                $data['wait'] = 3;
                $this->assign('data',$data);
                $this->display('admin/message');
            }
        }
    }
    //删除品牌信息方法
    public function del($bid=0){
        //逻辑：该品牌下是否有商品，有则不能删除，没有就删除
        if($this->brand->del_rand($bid)){
            //删除成功，直接跳转到显示。
            redirect('admin/brand/show_list');
        }else{
            //删除失败，跳转到提示页面，后返回。
            $data['message'] ='删除失败。';
            $data['url'] = site_url('admin/brand/show_list/'.$bid);
            $data['wait'] = 3;
            $this->assign('data',$data);
            $this->display('admin/message');
        }
    }

}

