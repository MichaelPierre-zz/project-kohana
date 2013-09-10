<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Mashup extends Controller {
	
	public function action_index()
	{	
		$view = new View('mashup/index');
		$this->response->body($view);
	}	
} // End Controller_Mashup
