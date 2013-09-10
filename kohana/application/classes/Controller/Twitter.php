<?php defined('SYSPATH') or die ('No direct script access.');

class Controller_Twitter extends Controller {
	
	public function action_index()
	{
		$view = new View('twitter/index');
		$this->response->body($view);
	}
}