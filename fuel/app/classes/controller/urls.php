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
			// see if the url has already been shortened
			$u = Model_Url::findByUrl($url);
			if (!$u) {
				$props = array(
					'url' => $url,
					'title' => $title,
					'public' => $public,
					'deleted' => 0,
				);
				$u = new Model_Url($props);
				$u->save();
			}

			$base36_id = base_convert($u->id, 10, 36);
			if (Model_Url::bannedKey($base36_id)) {
				$u->deleted = 1;
				$u->save();

				$u = new Model_Url($props);
				$u->save();
			}

			$json = json_encode(array(
				'url'=>'http://s.travisj.org/' . $base36_id,
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
}

/* End of file urls.php */
