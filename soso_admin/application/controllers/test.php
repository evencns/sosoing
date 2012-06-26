<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends My_Controller
{
    public function test1()
    {
        $this->tpl->assign('say', 'Hello world!');
        $this->tpl->display('test.html');
    }

    public function test2()
    {
        echo 'Wahaha!';
    }
}

