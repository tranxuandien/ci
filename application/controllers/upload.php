<?php
/**
 * Created by PhpStorm.
 * User: GOLDEN LOTUS
 * Date: 5/18/2015
 * Time: 5:30 AM
 */
class Upload extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url','form'));
    }

    public function index()
    {
        $data['error'] = '';
        $this->load->view('user/upload_view', $data);
        $this->load->library('upload');
    }
    public function up_load()
    {
        if($this->input->post("ok"))
        {
            $config['upload_path']="./uploads";
            $config['allowed_types']='gif|jpg|png';
            $config['max_size']='900';
            $config['max_high']='768';
            $config['max_width']='1024';
            $this->load->library("upload",$config);
            if($this->load->do_upload("img"))
            {
                echo 'Upload Ok';
                $check=$this->upload->data();
                echo "<pre>";
                print_r($check);
                echo "</pre>";
            }
            else
            {
                $data['errors']=$this->upload->display_errors();
                $this->load->view("user/upload_view",$data);
            }
        }
    }

}