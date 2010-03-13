<?php

class Default_Controller_Default extends SGL2_Controller_Application
{
	protected
	  $registry	   	= null,
	  $dispatcher   = null;	
	
	public function __construct(SGL2_Registry $registry)
	{
		$this->registry = $registry;
		$this->dispatcher = $registry->getEventDispatcher();
	}	
}

?>