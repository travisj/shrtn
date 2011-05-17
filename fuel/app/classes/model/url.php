<?php

class Model_Url extends Orm\Model {

	static public function findByKey($key)
	{
		return self::find('first', array(
			'where' => array('id', base_convert($key, 36, 10)),
		));
	}

	static public function findByUrl($url)
	{
		return self::find('first', array(
			'where' => array(
				array('url'=>$url, 'deleted'=>0),
			),
		));
	}

	static public function bannedWords()
	{
		return array(
			'fuck', 'shit', 'cock', 'cunt', 'ass', 'bitch',
		);
	}

	static public function bannedKey($key)
	{
		foreach (self::bannedWords() as $word) {
			if (false !== strpos($key, $word)) {
				return true;
			}
		}
		return false;
	}
}

/* End of file url.php */
