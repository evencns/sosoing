<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My_Controller extends CI_Controller
{
    protected $_params  = null;

    public $tpl         = null;

    public function __construct()
    {
        parent::__construct();

        if (method_exists($this, '_init')) {
            $this->_init();
        }

        $data = array(
            'user' => array('username' => 'zhangsan'),
            'abcd' => 1234
        );

		$this->load->database();
        $this->_params = new Params;

        // 初始化模板引擎
        $this->initTpl();

		$this->load->library('session');
		$uid = $this->session->userdata('uid');
		$username = $this->session->userdata('username');

        $this->tpl->assign('user', array('uid' => $uid, 'username' => $username));
    }

    public function initTpl()
    {
        require_once(APPPATH . 'Smarty/Smarty.class.php');

        $tpl = new Smarty;

        $tpl->template_dir      = APPPATH . 'views';
        $tpl->compile_dir       = APPPATH . 'compile';
        $tpl->cache_dir         = APPPATH . 'cache';
        $tpl->config_dir        = APPPATH . 'config';

        $tpl->debugging         = false;
        $tpl->caching           = false;
        $tpl->force_compile     = false;

        $tpl->left_delimiter    = '{';
        $tpl->right_delimiter   = '}';

		$tpl->assign(array(
			'URL_CSS'	=> URL_CSS,
			'URL_JS'	=> URL_JS,
			'URL_IMAGE'	=> URL_IMAGE
		));
        $this->tpl = $tpl;
    }

    /**
     * 判断当前是否处于登录状态
     *
     */
    public function isLogin()
    {
        return isset($_SESSION['user']) && $_SESSION['user'];
    }


	 /**
     * 判断当前请求是否是ajax请求
     *
     * @param   int $type   消息类型
     * @param   int $msg    消息内容
     */

   public function showMsg($type = self::MSG_SUCCESS, $msg = null, $aotoJump = true, $url = null, $timeout = 3, $isGoBack = false)
    {
//        switch ($type) {
//            case self::MSG_ERR_NOTICE :
//                break;
//            case self::MSG_ERR_ERROR :
//                break;
//            default :
//        }

        // 获取跳转地址
        if ((!$msg && !$url) || $isGoBack) {
            if ($isGoBack) {
                $url = null;
            } else {
                $url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : exit("<script>history.go(-1);</script>");
            }
        }

        echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
        echo "<html><head>";
        if ($aotoJump) {
            echo "<meta http-equiv='refresh' content='{$timeout}; url={$url}'>";
        }
        if ($aotoJump && !$url) {
            $timeout *= 1000;
            echo "<script>setTimeout('history.go(-1)', {$timeout})</script>";
        }
        echo '<style>
                html { background: #f7f7f7; }
                body {
                    background: #fff;
                    color: #333;
                    font-family: "Lucida Grande", Verdana, Arial, "Bitstream Vera Sans", sans-serif;
                    margin: 2em auto 0 auto;
                    width: 800px;
                    padding: 1em 2em;
                    -moz-border-radius: 11px;
                    -khtml-border-radius: 11px;
                    -webkit-border-radius: 11px;
                    border-radius: 11px;
                    border: 10px solid #dfdfdf;
                }
                #error-page { margin-top: 50px; }
                #error-page p {
                    text-align:left;
                    font-size: 12px;
                    line-height: 30px;
                    margin: 25px 0 0 200px;
                    color:#2d4b98;
                }
                #error-page div{ margin:25px 0 30px 200px;}
                </style>';
        echo "</head>";
        echo "<body id='error-page'>";
        echo "<p><img src='http://pub.chushan.com/images/www/messageloading.gif'><br/><br/>{$msg}</p>";
        if ($url) {
            echo "<div><a href='{$url}'>如果太慢可以点击这里</a></div>";
        }
        echo "</body></html>";
        exit;
    }

    /**
     * 判断当前请求是否是ajax请求
     *
     */
    public function isAjax()
    {
        return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
    }

    /**
     * 返回输出json
     *
     * @param   array   $array  需要json格式化输出的数组
     */
    public function makeJsonPrint(array $array = array())
    {
        exit(json_encode($array));
    }

    /**
     * 获取动作 	
     *
     */
    protected function getAction()
    {
        $params = $this->uri->rsegment_array();
        return isset($params[2]) ? $params[2] : null;
    }

    /**
     * 允许的动作
     *
     */
    protected function allowAction()
    {
        if (!isset($this->allowActionList) || !$this->allowActionList) {
            return false;
        } else {
            return in_array($this->getAction(), $this->allowActionList);
        }
    }
}

class Params
{
    public $_params         = null;
    public $_get_vars       = array();
    public $_post_vars      = array();
    public $_request_vars   = array();

    public function __construct()
    {
        $this->_init_get();
        $this->_init_post();
        $this->_init_request();
    }

    /**
     * $_GET
     */
    public function get($var = null, $default = null)
    {
        if ($var) {
            return isset($this->_get_vars[$var]) ? $this->_get_vars[$var] : $default;
        } else {
            return $this->_get_vars;
        }
    }

    /**
     * $_POST
     */
    public function post($var = null, $default = null)
    {
        if ($var) {
            return isset($this->_post_vars[$var]) ? $this->_post_vars[$var] : $default;
        } else {
            return $this->_post_vars;
        }
    }

    /**
     * $_REQUEST
     */
    public function request($var = null, $default = null)
    {
        if ($var) {
            return isset($this->_request_vars[$var]) ? $this->_request_vars[$var] : $default;
        } else {
            return $this->_request_vars;
        }
    }

    private function _init_get()
    {
        if ($_SERVER['REQUEST_URI']) {
            $list = array_slice(explode('/', $_SERVER['REQUEST_URI']), 4);
            $counter = 0;
            $var = null;
            foreach ($list as $val) {
                if ($counter % 2) {
                    $this->_get_vars[$var] = $val;
                } else {
                    $var = $val;
                }
                ++$counter;
            }
        } else {
            $this->_get_vars = array();
        }
    }

    private function _init_post()
    {
        if ($_POST) {
            $this->_post_vars = $_POST;
        } else {
            $this->_post_vars = array();
        }
    }

    private function _init_request()
    {
        $this->_request_vars = $this->_post_vars + $this->_get_vars;
    }
}