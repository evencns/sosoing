<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 用户控制器
 *
 */
class User extends My_Controller
{
    /** 允许的动作 */
    public $allowActionList = array('login', 'doLogin', 'register', 'checkpic','register','form','uregister','uindex');

		 protected function _init()
    {

        $this->load->database();
        // 用户检测
        if ($this->isLogin() || $this->allowAction()) {
            //
        } else {
            if ($this->isAjax()) {
                $this->makeJsonPrint(array('status' => 1, 'msg' => '您还没有登录呢！'));
            } else {
                exit('您还没有登陆呢');
            }
        }
    }

    /**
     * 用户中心首页
     *
     */
    public function home()
    {
        $this->load->view('sosohome.html'); // user_center.html
    }

    /**
     * 显示用户登录页面
     *
     */
    public function login()
    {
       //$this->tpl->display('login.html');
		$this->load->view('login.html');
    }

    /**
     * 用户登录
     *
     */
    public function doLogin()
	{
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        if (!$username || !$password) {
            exit;
        }

        $this->load->model('UserModel');
		
        $userInfo = $this->_params->UserModel->getUserByLoginInfo($username, md5($password));
		if ($userInfo) {
			
			$this->load->view('sosohome.html');
		} else {
			
			echo "用户名或密码错误,请重新登录";
			
		}
		//echo  $userInfo;exit;
        if ($this->isAjax())
        {
            if ($userInfo)
            {
                // 存储登录状态
                $_SESSION['uid'] = $userInfo['uid'];
                $_SESSION['username'] = $userInfo['username'];

                $info = array('status' => 0, 'data' => $userInfo);
            }
            else
            {
                $info = array('status' => 1, 'msg' => '用户名或密码不正确！');
            }
            $this->makeJsonPrint($info);
        }
        else
        {
            if ($userInfo)
            {
                // 存储登录状态
                $_SESSION['uid'] = $userInfo['uid'];
                $_SESSION['username'] = $userInfo['username'];
//                $this->showMsg();
            }
            else
            {
//                $this->showMsg();
            }
        }
    }

    /**
     * 用户退出
     *
     */
    public function logout()
    {
        foreach ($_SESSION as $key => $val) {
            unset($_SESSION[$key]);
        }

        // 设置cookie过期
        /**
            ...
        */

        $this->makeJsonPrint(array('status' => 0));
    }

    /**
     * 显示用户注册页面
     *
     */
    public function uregister()
    {
		
        $this->load->view('register.html');
    }


    /*
   	*
	* 用户注册
	*/

	public  function register(){
	    
		if(empty($_POST['submit'])){         
		echo "非法访问";
		echo "<script>location.href=register.html</script>";
		exit;
		}	
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email    = $_POST['email'];		
		
		//注册判断信息
		
		$this->load->library('Util');
		//var_dump(Util::isUsername($username));exit;
		
		if(Util::isUsername($username) === 1){	
			
			exit('用户名不能小于6位。<a href="javascript:history.back(-1);">返回</a>');
			
		 }

		 if(Util::isUsername($username) === 2){
			
			exit('用户名太长啦。<a href="javascript:history.back(-1);">返回</a>');
		 }

		 if(Util::isUsername($username) === 3){	
			
			exit('用户名格式不正确。<a href="javascript:history.back(-1);">返回</a>');
			
		 }

		if(!Util::isEmail($email)){
			exit('错误：电子邮箱格式错误。<a href="javascript:history.back(-1);">返回</a>');
		}
		
		$regdate = date("Y-m-d H:i:s");
		$data =  array(
			'username'=>"$username",	
			'password'=> md5($password),
			'email'	  => "$email",
			'regdate' => "$regdate",
		);
		//echo '<pre>';print_r($data);exit;
		
		$this->load->model('UserModel');
		$this->_params->UserModel->addUser($data);

		$uid = $this->db->insert_id();
		//$userModel= new UserModel;
		if ($uid) {
            // 存储登录状态
            // $_SESSION['uid'] = $uid;
            // $_SESSION['username'] = $username;
            exit('注册成功');
        } else {
            exit('注册失败');
			
        }
	  }
    /**
     * 检测是否已经存在了相同用户名的用户
     *
     */
    private function _checkUserExistsByUsername($username)
    {
        $userModel = new UserModel;

        return (bool) $userModel->getUserByUsername($username);
    }
	
	
	/*
	 *
	 * 验证码生成
	 */
	 
	 public function  checkpic(){
		
		$rand  ='';
		for ($i=0;$i<4;$i++){
	
		$rand.=dechex(rand(1,15));
	
		}
		$im = imagecreate(60,20);
		//设置颜色
		$bg = imagecolorallocate($im, 255, 255, 255);
		$te = imagecolorallocate($im, 0, 0, 0);
		$te1 = imagecolorallocate($im, 100, 100, 100);
		//写入图片
		imagestring($im, rand(3,6), rand(1,20), rand(1,8), $rand, $te);
		//画点
		for($i=0;$i<50;$i++){
		imagesetpixel($im,rand(1,60),rand(1,20),$te1);
		}
		//输入图片
		header ("Content-type: image/jpeg");
		imagejpeg($im);
		} 

	}