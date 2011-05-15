<?php

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 * 
 * @package  app
 * @extends  Controller
 */
class Controller_Welcome extends Controller {

	/**
	 * The index action.
	 * 
	 * @access  public
	 * @return  void
	 */
	public function action_index()
	{
		$data = array();
		//$this->response->body = View::factory('welcome/index');
		$data['urls'] = Model_Url::find('all', array(
			'where' => array('public', 1),
			'limit' => 20,
			'order_by' => array('id' => 'desc'),
		));

		$data['bookmarklet'] = file_get_contents(APPPATH . '../../public/assets/js/bookmarklet.js');

		$this->response->body = View::factory('welcome/info', $data);
	}

	/**
	 * The 404 action for the application.
	 * 
	 * @access  public
	 * @return  void
	 */
	public function action_404()
	{
		$messages = array('Aw, crap!', 'Bloody Hell!', 'Uh Oh!', 'Nope, not here.', 'Huh?');
		$data['title'] = $messages[array_rand($messages)];

		// Set a HTTP 404 output header
		$this->response->status = 404;
		$this->response->body = View::factory('welcome/404', $data);
	}
}

/* End of file welcome.php */
