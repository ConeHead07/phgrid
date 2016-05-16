<?php

class JqGridColModelList extends JqGridBaseObject
{
	/**
	 * 
	 * Enter description here ...
	 * @var array
	 */
	public $list = array();
	
	/**
	 * 
	 * Gibt das ColModel eines Datenfelds zur�ck
	 * @param int
	 * @return JqGridColModel
	 */
	public function item($i)
	{
		if (count($this->list) > $i) return $this->list[$i];
	}
	
	/**
	 * 
	 * Gibt das ColModel eines Datenfelds an Hand des Namens zur�ck
	 * @param string
	 * @return JqGridColModel
	 */
	public function getItem($name)
	{		
		for($i = 0; $i < count($this->list); $i++) {
			if ($this->list[$i]->name == $name) return $this->list[$i]; 
		}
		return NULL;
	}
	
	/**
	 * 
	 * Enter description here ...
	 * @param JqGridColModel
	 * @return JqGridColModelList
	 */
	public function add($colModel) 
	{
		$this->list[] = $colModel;
		return $this;
	}
	
	/**
	*
	* @param array $fields as string
	* @return JqGridColModelList
	*/
	public function addFields($fields) {
		for($i = 0; $i < count($fields); $i++) {
			$this->list[] = new JqGridColModel($fields[$i]);
		}
		return $this;
	}
	
	/**
	 * 
	 * @param array assoc pairs $field: properties as array or object
	 * @return JqGridColModelList
	 */
	public function addFieldsProperties($fields) {
		foreach($fields as $field => $properties) {
			$this->list[] = new JqGridColModel($field, $properties);
		}
		return $this;
	}
	
	public function delete($i) 
	{
		if (count($this->list) > $i) unset($this->list[$i]);
		return $this;
	}
}
