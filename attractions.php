<?php

namespace Model;

class Attractions extends \Orm\Model{
    
    protected static $_properties = array('attrID','title','description','image');
	protected static $table_name = 'attractions';
	protected static $_primary_key = array('attrID');
	
	const FILENAME = "attractions.model";

	private $field_values = array();

	private $isStoredRecord = false;

	public function __construct($attrID = null)
	{
		if($attrID !== null)
		{
			if(is_array($attrID))
			{
				$this->field_values = $attrID;
				$this->isStoredRecord = true;
			}
			elseif(file_exists(self::FILENAME))
			{
				$data = unserialize(file_get_contents(self::FILENAME));
				if(isset($data[$attrID]))
				{
					$this->field_values = $data[$attrID];
					$this->isStoredRecord = true;
				}
			}
		}
	}
	public function __toString()
	{
		return $this->attrID . '-' . $this->title;
	}
	//this method will return the courses from the database
	public static function getAttractions()
	{
		//Note: we have to use global scope ('\') while calling DB object
		$query = \DB::select('*')->from('attractions')->execute();
		return $query;
	}

	//this method saves a given course
	public static function saveAttraction($attrName, $attrDesc, $attrImage)
	{
		//Note: we have to use global scope ('\') while calling DB object
		$query = \DB::insert('attractions');

		// Set the columns and values
		$query->set(array(
			'title' => $attrName,
			'description' => $attrDesc,
			'image' => $attrImage,
		));

		$query->execute();
	}

}
