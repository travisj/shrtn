<?php

class Model_Url extends Orm\Model {

	static public function findByKey($key)
	{
		return self::find('first', array(
			'where' => array('key', $key),
		));
	}
}

/* End of file url.php */
