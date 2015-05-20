<?php
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function index()
    {
        //$query = $this->db->query("SELECT * FROM USER order By id");
        //$this->db->select("id,username,level");//lua chon truong de select
        //$this->db->order_by("id","desc");//desc la sap xep cac ban ghi theo thu tu nho dan
        //$this->db->limit(4,3);Lay 4 ban ghi bat dau tu ban ghi thu 3
        //$this->db->where("id","3");
        //$this->db->select_max("username");
        $query = $this->db->get("user");//lay toan bo data cua 1 bang user
        $data = $query->result_array();//lay toan bo record
        //$data = $query->row_array();//lay chi mot ban ghi dau tien
        //ngoai ra con co
        /*
         * $this->db->limit();
         * $this->db->join();
         * $this->db->like();
         * $this->db->select_min();
         * $this->db->select_max();
         * */

        echo "<pre>";
        print_r($data);
        //echo $data;
        echo "</pre>";
    }
    public function index2(){
        $data=array(
            "id"=>"7",
            "username"=>"tranhung",
            "password"=>"khongcogi",
            "level"=>"2"
        );
        $this->db->insert("user",$data);
    }
    public function index3(){
        $data=array(
            "username"=>"tuntun",
            "password"=>"haynhi"
        );//so luong truong trong array co the thay doi
        $this->db->where("id","7");
        if($this->db->update("user",$data))
        {
            echo "Cap nhat thong tin thanh cong";
        }
        else
        {
            echo "cap nhat that bai";
        }
    }
    public function index4()
    {
        $this->db->where("id","3");
        if($this->db->delete("user"))
        {
            echo "da xoa thanh cong";
        }
        else
        {
            echo "Xoa thatt bai";
        }
    }
    public function index5()
    {
        $this->load->model("Muser");
        $data['data']=$this->Muser->listUser();
        $this->load->view("user/list_view",$data);
    }

}
    ?>