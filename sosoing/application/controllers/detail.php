<?php
class detail extends My_Controller
{

	public function _init()
    {
        $this->load->database();
    }

    function index()
    {
        $this->tpl->display('detail.html');
    }
	
}
