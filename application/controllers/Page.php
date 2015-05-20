<?php
/**
 * Created by PhpStorm.
 * User: GOLDEN LOTUS
 * Date: 5/16/2015
 * Time: 9:51 PM
 */

class Page extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->library("pagination");
    }


    public function index()
    {
        $this->load->model("Muser");
        $config['total_rows']=$this->Muser->countAll();
        $config['per_page']=1;
        $config['base_url']=base_url("index.php/page/index");
        //$config['uri_segment'] = 3;
        $this->pagination->initialize($config);
        $data['data'] = $this->Muser->listUser();
        $this->load->view('user/list_view',$data);
        //echo $this->pagination->create_links();



        /*// load thư viện cần thiết
        $this->load->library('pagination');
        $this->load->helper('url');
        // cấu hình phân trang
        $config['base_url'] = base_url('index.php/book'); // xác định trang phân trang
        $config['total_rows'] = $this->Book_Model->count_all(); // xác định tổng số record
        $config['per_page'] = 5; // xác định số record ở mỗi trang
        $config['uri_segment'] = 2; // xác định segment chứa page number
        $this->pagination->initialize($config);

        $data['data'] = $this->Book_Model->list_all($config['per_page'],$this->uri->segment(2));
        $this->load->view('book/index',$data);*/
    }
}
?>