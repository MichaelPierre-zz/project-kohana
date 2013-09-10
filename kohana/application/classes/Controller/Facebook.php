<?php defined('SYSPATH') or die('No direct script access.'); 

class Controller_Facebook extends Controller {	
	
	public function action_index()
	{
		$view = new View('facebook/index');
		$this->response->body($view);
	}
}