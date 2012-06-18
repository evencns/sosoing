<?php
/**
 * 控制器父类
 *
 */

class Controller extends My_Controller
{
    const MSG_SUCCESS       = 101;    // 正确
    const MSG_ERR_NOTICE    = 200;    // 提示
    const MSG_ERR_ERROR     = 300;    // 错误

    public function __construct()
    {
        parent::__construct();

        $this->_assignDefinedVar();

        if ($this->isLogin()) {
            $this->_assignLogin();
        }
    }

    protected function __init()
    {
        //
    }

    private function _assignDefinedVar()
    {
        $this->tpl->assign(array(
            'URL_JS'    => URL_JS,
            'URL_CSS'   => URL_CSS,
            'URL_IMAGE' => URL_IMAGE
        ));
    }

    protected function _assignLogin()
    {
        $user = array(
            'uid'       => $_SESSION['uid'],
            'username'  => $_SESSION['username']
        );
        $this->tpl->assign('user', $user);
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
     * 跳转
     *
     * @param   int $second $second秒后跳转
     */
    public function forward($second = 0)
    {
        //
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
     * 检测用户是否登录
     *
     * @return  bool
     */
    public function isLogin()
    {
        if (!isset($_SESSION['username'])) {
            $_SESSION['username'] = null;
        }

        if ($_SESSION['username']) {
            return true;
        } else {
            if (!isset($_COOKIE['username'])) {
                $_COOKIE['username'] = null;
            }

            if ($_COOKIE['username']) {
                $_SESSION['uid'] = $_COOKIE['uid'];
                $_SESSION['username'] = $_COOKIE['username'];

                return true;
            } else {
                return false;
            }
        }
    }

    /**
     * 获取动作
     *
     */
    protected function getAction()
    {
        global $action;

        return str_replace('Action', '', $action);
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