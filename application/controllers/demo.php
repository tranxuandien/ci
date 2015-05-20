<?php
class Demo extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper("url");
        $this->load->library("session");
    }
    public function index(){
        $data=array(
            "username"=>"lololo",
            "email"=>"gl@gmail.com",
            "website"=>"nt.com",
            "gender"=>"Male"
        );
        $this->session->set_userdata($data);
        redirect(base_url()."index.php/demo/index2");
    }
    public function index2()
    {
        $user=$this->session->userdata("username");
        $email=$this->session->userdata("email");
        $website=$this->session->userdata("website");
        $gender=$this->session->userdata("gender");
        echo $user.'--'.$gender;
        $data=$this->session->all_userdata();
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
    public function index3(){
        $this->session->sess_destroy();
        echo "Huy session thanh cong.";
    }
}