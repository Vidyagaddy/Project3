<?php
use Model\SC;
use Model\Login;
use Model\Attractions;
class Controller_Federation extends Controller
{
	/**
	 * Shows a list of all federation items
	 */
//		INDEX PAGE		//
    
	public function action_status()
	{
		$returnObject = array('status' => 'closed');
		
		
		return Format::forge($returnObject)->to_json();
	}
	public function action_allstatus(){
        $content = View::forge('federation/allstatus');
		return $content;
	}
	public function action_listing(){}
	
	public function action_attraction($attrID){}
	
	public function action_image($attrID){}
	
}?>
