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
    
    public function __toString()
	{
		return $this->username;
	}
	public static function getLogins(){
        $query = \DB::select('*')->from('logins')->execute();
		return $query;
	} 
	public static function updateStatus($test){
        if($test == 1){
            $query = \DB::update('gaddvi');
            $query -> table('migStatus');
            $query -> value('status','run');
            $query -> where('version',$test);
            
            $query -> execute();
        }
        else if($test == 2){
            $query = \DB::update('gaddvi');
            $query -> table('migStatus');
            $query -> where('version','!=',3);
            $query -> value('status','run');
            $query -> execute();
        }
        else if($test == 3){
            $query = \DB::update('gaddvi');
            $query -> table('migStatus');
            $query -> where('version','!=',-1);
            $query -> value('status','run');
            $query -> execute();
        }
        else if($test == 0){
            $query = \DB::update('gaddvi');
            $query -> table('migStatus');
            $query -> where('version', '!=',-1);
            $query -> value('status','not run');
            $query -> execute();
        }
	}
	public static function getStatus(){
        $query = \DB::select('*')->from('migStatus')->execute();
        return $query;
	}
	
	}
