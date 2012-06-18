<?php  if (!defined('BASEPATH')) exit('No direct script access allowed'); 
class UserModel  extends CI_Model
{
	function __construct()
	{
		parent::__construct();

        $this->load->database();
	}
    /**
     * 用登陆信息检查用户是否存在
     *
     * @param   string  $username   用户名
     * @param   string  $password   密码
     * @return  bool    true-存在
     */
    public function getUserByLoginInfo($username, $password)
    {
        assert('$username');
        assert('$password');

		//echo '<pre>';print_r(get_class_methods($this->db));exit;

		$where = array(
			'username' => $username,
			'password' => $password
		);
		//echo  '<pre>';print_r($where);exit;
		$user = $this->db->get_where('sosoing_users', $where)->result();
		//echo '<pre>';print_r($user);exit;
		return $user;
    }

    /**
     * 根据用户名获取用户
     *
     * @param   string  $username   用户名
     * @return  array
     */
    public function getUserByUsername($username)
    {
        assert('$username');

        $sql = 'SELECT * FROM sosoing_users WHERE username = ?';

        return $this->getRow($sql, array($username));
    }

    function  user_check($username){
	
		$this->db->where('username',$username);
		$this->db->select('*');
		$query=$this->db->get('sosoing_users');
		return $query->result();
	}

    /**
     * 添加用户
     *
     * @param   array   $data   用户注册的数据
     * @return  int
     */
    public function addUser(array $data = array())
    {
		//$list = $this->db->get('sosoing_users', 10)->result();
		$this->db->insert('sosoing_users', $data);
		//echo '<pre>';print_r(get_class_methods($this->db));exit;
       
    }



}