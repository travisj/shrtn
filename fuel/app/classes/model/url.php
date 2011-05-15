<?php

class Model_Url extends Orm\Model {

	static public function findByKey($key)
	{
		return self::find('first', array(
			'where' => array('id', base_convert($key, 36, 10)),
		));
	}
}

/* End of file url.php */
