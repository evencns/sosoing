<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

class  Login extends CI_Controller {

	function  index(){
	
		$this->load->view("myform.html");
	}

	function dologin(){
		$this->load->model("UserModel");
		$uname=$_POST['username'];
		$user = $this->UserModel->user_check($uname);
		
		if($user){
						
			$pwd = md5($_POST['password']);

			if($user[0]->password == $pwd){
				$this->load->library('session');
				$uid= array('uid'=>$user[0]->uid);
				$this->session->set_userdata($uid);
				//echo "您的ID:". $this->session->userdata('uid');
				if($this->session->userdata('uid')){
						echo  $uname,'欢迎您！进入<a href="home">用户中心</a> </br>';
						echo  '<a href="login/loginout">安全退出</a>';
				}else{
					
						echo "请重新登录";
					}
				}else{
			
						echo "密码输入错误";
				}
			
		}else {
		
			echo "您貌似没有在本站注册";
		}
	
	}

	 function  loginout(){

		$this->load->library('session');
		$this->session->unset_userdata('uid');
   }

	function home(){
	
		$this->load->view("sosohome.html");
	}
}


