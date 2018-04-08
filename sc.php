<?php

namespace Model;

class SC{

	/*public function __get($name)
	{
		return $this->field_values[$name];
	}

	public function __set($name, $value)
	{
		$this->field_values[$name] = $value;
	}

	public function __isset($name)
	{
		return isset($this->field_values[$name]);
	}

	public function save()
	{
		$data = array();
		if(file_exists(self::FILENAME))
		{
			$data = unserialize(file_get_contents(self::FILENAME));
		}
		$data[$this->field_values['id']] = $this->field_values;
		file_put_contents(self::FILENAME, serialize($data));
		$this->isStoredRecord = true;
	}

	public static function getAll()
	{
		$return = array();
		if(file_exists(self::FILENAME))
		{
			$data = unserialize(file_get_contents(self::FILENAME));
			foreach($data as $id => $model)
			{
				$return[$id] = new SC($model);
			}
		}
		return $return;
	}
/*
	public function delete()
	{
		$data = array();
		if(file_exists(self::FILENAME))
		{
			$data = unserialize(file_get_contents(self::FILENAME));
			unset($data[$this->id]);
		}
		$this->field_values = array();
		file_put_contents(self::FILENAME, serialize($data));
		$this->isStoredRecord = false;
	}

	public function __toString()
	{
		return $this->id . '-' . $this->name;
	}*/
}
