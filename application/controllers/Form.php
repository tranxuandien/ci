<?php
/**
 * Created by PhpStorm.
 * User: GOLDEN LOTUS
 * Date: 5/17/2015
 * Time: 8:41 PM
 */

class Form extends CI_Controller{
public function __construct()
{
    parent::__construct();
    $this->load->helper(array('url','form'));
}
    public function index(){
        //$this->load->view('user/form_view');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username','Full name','required|min_length[6]');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('email','Email','required|valid_mail');
        if(($this->form_validation->run())==FALSE)//check nhung tham so tren co chinh xac
        {
           // echo "chua nhap du thong tin";
            $this->load->view('user/form_view');
        }
        else
        {
            echo "ok thong tin da day du";
        }
    }

}