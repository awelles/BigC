<?php
class Template
{
    private $Vars = array();
 
    private $file;
 
    public function __construct( $template, $varsArray=null )
    {
        $this->file = $template;
        
        if ((!is_null($varsArray))&&(is_array($varsArray))){
        	$this->setVars($varsArray);
        }               
    }

    public function set($var, $val)
    {
        $this->Vars[$var] = $val;
    }
    
    public function setVars($varsArray) {
 		foreach( $varsArray as $var=>$val ){
 			$this->set($var, $val);
 		}
 	}
  	 
    public function render()
    {				
        extract($this->Vars);
        ob_start();
		require($this->file);
        return ob_get_clean();
    }
}
