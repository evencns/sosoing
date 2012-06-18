<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class I extends My_Controller
{
    public function _init()
    {
        $this->load->database();
    }

    public function a()
    {
	phpinfo();
	exit;
    }
}