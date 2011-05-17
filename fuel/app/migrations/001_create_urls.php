<?php

namespace Fuel\Migrations;

class Create_urls {

	public function up()
	{
		\DBUtil::create_table('urls', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'title' => array('constraint'=>255, 'type'=>'varchar'),
			'url' => array('type' => 'text'),
			'public' => array('type'=>'tinyint', 'null'=>false, 'default'=>1),
			'deleted' => array('type'=>'tinyint', 'null'=>false, 'default'=>0),
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('urls');
	}
}
