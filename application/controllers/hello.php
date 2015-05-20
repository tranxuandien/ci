<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Hello extends CI_Controller {

public function index($id=0,$message='') {
echo 'Da nhan duoc gia tri truyen vao:ID='.$id.'AND Message:'.$message;
}
    public function other()
    {
        echo 'ban dang o mot ung dung khac';
    }
}
?>