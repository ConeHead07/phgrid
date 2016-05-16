<?php

/**
 * 
 * @author rybka
 * @link http://www.trirand.com/jqgridwiki/doku.php?id=wiki:custom_buttons
 * @abstract
 * <pre>
 * jQuery("#grid_id")
.navGrid('#pager',{edit:false,add:false,del:false,search:false})
.navButtonAdd('#pager',{
   caption:"Add", 
   buttonicon:"ui-icon-add", 
   onClickButton: function(){ 
     alert("Adding Row");
   }, 
   position:"last"
})
.navButtonAdd('#pager',{
   caption:"Del", 
   buttonicon:"ui-icon-del", 
   onClickButton: function(){ 
      alert("Deleting Row");
   }, 
   position:"last"
});
</pre>
 */
class JqGridNavGridButton extends JqGridBaseObject
{

	/**
	 * caption: (string) the caption of the button, can be a empty string.
	 * @param string $param
	 * @return JqGridNavGridButton
	 */
	public function set_caption($param)
	{
		$this->caption = $param; return $this;
	}
	
	
	/**
	* onClickButton: (function) action to be performed when a button is clicked. Default null.
	* @param JsFunction|string $fn
	* @return JqGridNavGridButton
	*/
	public function onClickButton($fn)
	{
		$this->onClickButton = ($fn instanceof JsFunction) ? $fn : (new JsFunction($fn));
		$param; return $this;
	}
	
	/**
	* position: (�first� or �last�) the position where the button will be added 
	* (i.e., before or after the standard buttons).
	* @param string $param
	* @return JqGridNavGridButton
	*/
	public function set_position($param)
	{
		$this->position = $param; return $this;
	}
	
	/**
	* title: (string) a tooltip for the button.
	* @param string $param
	* @return JqGridNavGridButton
	*/
	public function set_title($param)
	{
		$this->title = $param; return $this;
	}
	
	/**
	* cursor : string (default pointer) determines the cursor when we mouseover the element
	* @param string $param
	* @return JqGridNavGridButton
	*/
	public function set_cursor($param)
	{
	$this->cursor = $param; return $this;
	}
	
	/**
	*
	* id : string (optional) - if set defines the id of the button 
	* (actually the id of TD element) for future manipulation
	* @param string $param
	* @return JqGridNavGridButton
	*/
	public function set_id($param)
	{
		$this->id = $param; return $this;
	}
	
}