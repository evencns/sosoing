<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
class Util
{
    /**
     * 检测用户名是否符合规则
     *
     * @param   string  $username   给出的用户名
     * @return  bool
     */
    public static function isUsername($username = '')
    {
        // 允许出现的字符有：a-z、A-Z、0-9、_、@
        // 允许的长度：6-18
        $rule = '#^[\x{4E00}-\x{9FA5}a-zA-Z_@0-9]+$#u';
        if (preg_match($rule, $username)) {
			if (strlen($username) < 6) {
				return 1;
			} elseif (strlen($username) > 16) {
				return 2;
			} else {
				return true;
			}
		} else {
			return 3;	
		}
    }

    /**
     * 检测邮箱是否有效
     *
     * @param   string  $email  给出的邮箱
     * @return  bool
     */
    public static function isEmail($email)
    {
        $rule = '#^\w+@\w+\.\w+$#';
		
        return (bool) preg_match($rule, $email);
    }

}



