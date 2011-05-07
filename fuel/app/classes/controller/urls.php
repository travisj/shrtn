<?php
class Controller_Urls extends Controller_Template {

	public function action_redirect()
	{
		$key = $this->param('key');
		if (is_numeric($key)) { 
			$url = Model_URl::find($key);
		} else {
			$url = Model_URl::findByKey($key);
		}
		if ($url) {
			Response::redirect($url->url);
		} else {
			exit('oops');
		}
	}

	public function action_add()
	{
		$url = urldecode(Input::get('url'));

		if ($url) {
			$u = new Model_Url;
			$u->url = $url;
			$u->save();

			$json = json_encode(array('id'=>$u->id));
		} else {
			$json = json_encode(array('error'=>'You did not provide a vaild URL.'));
		}

		if ($callback = Input::get('callback')) {
			exit($callback . '(' . $json . ');');
		} else {
			exit($json);
		}
	}
}

/* End of file urls.php */
