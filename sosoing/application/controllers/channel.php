<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Channel extends My_Controller
{
	public function _init()
    {
        $this->load->database();
    }

    function index()
    {
        
		$this->tpl->display('channel.html');
    }

	function detail(){
	
		$this->tpl->display('detail.html');
	}
}










