<?php
class Controller_Urls extends Controller_Template {

	public function action_redirect()
	{
		$key = $this->param('key');
		$url = Model_URl::findByKey($key);
		if ($url) {
			Response::redirect($url->url);
		} else {
			exit('oops');
		}
	}

	public function action_add()
	{
		$url = urldecode(Input::get('url'));
		$title = urldecode(Input::get('title'));
		$public = Input::get('public', 1);

		if ($url) {
			$u = new Model_Url;
			$u->url = $url;
			$u->title = $title;
			$u->public = $public;
			$u->save();

			$json = json_encode(array(
				'url'=>'http://s.travisj.org/' . base_convert($u->id, 10, 36),
			));
		} else {
			$json = json_encode(array('error'=>'You did not provide a vaild URL.'));
		}

		if ($callback = Input::get('callback')) {
			exit($callback . '(' . $json . ');');
		} else {
			exit($json);
		}
	}

	public function action_bookmarklet()
	{
		exit("<a href=\"javascript:(
			function(global){ 
				var head = document.getElementsByTagName('head')[0];
				_my_css=document.createElement('LINK');
				_my_css.type='text/css'; 
				_my_css.rel='stylesheet';
				_my_css.href='http://localhost:8888/assets/lib/aristo/css/Aristo/jquery-ui-1.8.7.custom.css';
				head.appendChild(_my_css); 

				_my_script=document.createElement('SCRIPT');
				_my_script.type='text/javascript'; 
				_my_script.src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js'; 
				head.appendChild(_my_script); 

				_my_script=document.createElement('SCRIPT');
				_my_script.type='text/javascript'; 
				_my_script.src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js'; 
				head.appendChild(_my_script); 

				_my_script=document.createElement('SCRIPT');
				_my_script.type='text/javascript'; 
				_my_script.src='http://localhost:8888/assets/js/bookmark.js'; 
				head.appendChild(_my_script); 

				global._shrtn_host = 'localhost:8888';
			}
			)(this);\">s.travisj.org</a>");
	}
}

/* End of file urls.php */
