<?php defined ('SYSPATH') or die ('No direct script access.');

class Controller_Googleplus extends Controller {
	
	public function action_index()
	{
		$view = new View('googleplus/index');
		$this->response->body($view);
	}
} // End Controller_Googleplus