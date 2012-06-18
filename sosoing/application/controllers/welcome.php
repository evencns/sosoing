<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends My_Controller
{
    public function _init()
    {
        $this->load->database();
    }

    public function index()
    {
//        echo $this->_params->getString('a');exit;
//
//        $res = $this->db->get('ecs_goods_mall', 2, 0);
//        $list = array();
//        foreach ($res->result() as $row) {
//            $list[] = $row;
//        }

//        $this->load->view('sosohome.html');
//        $this->tpl->assign();
        $this->tpl->display('sosohome.html');
    }
}