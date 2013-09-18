<?php defined('SYSPATH') or die ('No direct script access.');

class Controller_Twitter extends Controller {
		
	public function before()
	{
		include_once Kohana::find_file('vendor/twitter-api-php', 'TwitterAPIExchange');		
	}
		
	public function action_index()
	{	
		$twitter_config = Kohana::$config->load('twitter-config');		
		$config = $twitter_config['tokens'];		
		$twitter = new TwitterAPIExchange($config);					
		$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
		$getfield = '?screen_name=twitter';
		$requestMethod = 'GET';		
				
		$response = $twitter->setGetfield($getfield)
                             ->buildOauth($url, $requestMethod)
                             ->performRequest();
						
		$view = View::factory('twitter/index')
			->set('response', $response);			
						
		$this->response->body($view);		
	}
}