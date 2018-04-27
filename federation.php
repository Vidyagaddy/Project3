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
		$returnObject = array('status' => 'open');
		
		
		return Format::forge($returnObject)->to_json();
	}
	public function action_allstatus(){
        $content = View::forge('federation/allstatus');
		return $content;
	}
	public function action_listing(){
        $attrs = Attractions::getAttractions();
        $attrsArray = array();
        foreach($attrs as $attr){
            $attrArray = array('id' => $attr['attrID'], 'name' => $attr['title'], 'state' => $attr['state']);
            array_push($attrsArray,$attrArray);
        }
        return Format::forge($attrsArray)->to_json();
	}
	
	public function action_attraction($attrID){
        $attrs = Attractions::getAttractions();
        foreach($attrs as $attr){
            if($attrID == $attr['attrID']){
            $attrArray = array('id' => $attr['attrID'], 'name' => $attr['title'], 'desc' => $attr['description'],'state' => $attr['state']);
            }
        }
        return Format::forge($attrArray)->to_json();
	}
	
	public function action_attrimage($attrID){
        $attrs = Attractions::getAttractions();
        foreach($attrs as $attr){
            if($attrID == $attr['attrID']){
               $response = Response::forge(file_get_contents(Asset::get_file($attr['image'], 'img')));
		
            }
        }
        $response->set_header('Content-Type', 'image/jpeg');
		return $response;
	}
	
}?>
