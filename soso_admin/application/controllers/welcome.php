<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends My_Controller
{
    public function _init()
    {
        ;
    }

    public function index()
    {
        $this->tpl->display('frame/index.html');
    }

    public function main()
    {
        $this->tpl->display('frame/main.html');
    }

    public function top()
    {
        $this->tpl->display('frame/top.html');
    }

    public function menu()
    {
        $this->tpl->assign('menu', $this->_params->config->config['menu']);
        $this->tpl->display('frame/menu.html');
    }

    public function drag()
    {
        $this->tpl->display('frame/drag.html');
    }
}

