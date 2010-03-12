<?php

class Default_Controller_Default extends SGL2_Controller_Application
{
	protected
	  $ctx	     	= null,
	  $dispatcher   = null;	
	
	public function __construct(SGL2_Context $ctx)
	{
		$this->ctx = $ctx;
		$this->dispatcher = $ctx->getEventDispatcher();
	}	
}

?>