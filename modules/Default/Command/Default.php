<?php

class Default_Command_Default extends SGL2_Command_Abstract
{
	protected
	  $registry	   	= null,
	  $dispatcher   = null;	
	
	public function __construct(SGL2_Registry $registry)
	{
		$this->registry = $registry;
		$this->dispatcher = $registry->getEventDispatcher();
	}
	
	public function validate(SGL2_Request $request)
	{
		return true;
	}
		
	public function execute(SGL2_Request $request, SGL2_Response $response)
	{
		
	}
}

?>