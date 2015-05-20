<?php
class Login extends CI_Controller
{
    function _construct(){
        parrent::_construct;
    }
public function load_form()
{
    $this->load->database();
    $data=array(
        'title'=>'Day la trang login',
        'message'=>'Nhap thong tin dang nhap'
    );
$this->load->view('user/login_view',$data);
    //$this->load->view('admin/login_view');//load view cua folder khac
   // $this->load->view('welcome_message');//load nhieu view
}
}
?>