<?php
namespace Model;
class Login extends \Orm\Model{
    protected static $table_name = 'login';
    const FILENAME = "login.model";

	private $field_values = array();

	private $isStoredRecord = false;

	public function __construct($username = null)
	{
		if($username !== null)
		{
			if(is_array($username))
			{
				$this->field_values = $username;
				$this->isStoredRecord = true;
			}
			elseif(file_exists(self::FILENAME))
			{
				$data = unserialize(file_get_contents(self::FILENAME));
				if(isset($data[$username]))
				{
					$this->field_values = $data[$username];
					$this->isStoredRecord = true;
				}
			}
		}
	}
    public static function checkUsername($username){
        if($username == 'vgaddy' || $username == 'zach' || $username == 'ct310' || $username == 'Bob'){
            return true;
        }
        else { return false; }
    }
    public static function resetPassword($username, $password){
        $query = DB::update('gaddvi');
        $query -> table('login');
        $query -> where('username',$username);
        $query -> set('hash', md5($password));
        $query -> execute();
        }
    }
