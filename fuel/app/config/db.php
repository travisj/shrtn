<?php
/**
 * Fuel
 *
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.0
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2011 Fuel Development Team
 * @link       http://fuelphp.com
 */

return array(
	'active' => Config::get('environment'),

	'dev' => array(
		'type'			=> 'mysql',
		'connection'	=> array(
			'hostname'   => '127.0.0.1',
			'database'   => 'shrtn',
			'username'   => 'root',
			'password'   => 'root',
			'persistent' => false,
		),
		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => false,
		'profiling'    => false,
	),

	'production' => array(
		'type'			=> 'mysql',
		'connection'	=> array(
			'hostname'   => 'localhost:/tmp/mysql/willia.sock',
			'database'   => 'willia',
			'username'   => 'ursula',
			'password'   => '7lvyn61F',
			'persistent' => false,
		),
		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => false,
		'profiling'    => false,
	),

	'production-tunnel' => array(
		'type'			=> 'mysql',
		'connection'	=> array(
			'hostname'   => '127.0.0.1',
			'database'   => 'willia',
			'username'   => 'ursula',
			'password'   => '7lvyn61F',
			'persistent' => false,
			'port'			 => 3307,
		),
		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => false,
		'profiling'    => false,
	),

	'test' => array(
		'type'			=> 'mysql',
		'connection'	=> array(
			'hostname'   => 'localhost',
			'database'   => 'fuel_test',
			'username'   => 'root',
			'password'   => '',
			'persistent' => false,
		),
		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => false,
		'profiling'    => false,
	),

	'qa' => array(
		'type'			=> 'mysql',
		'connection'	=> array(
			'hostname'   => 'localhost',
			'database'   => 'fuel_qa',
			'username'   => 'root',
			'password'   => '',
			'persistent' => false,
		),
		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => false,
		'profiling'    => false,
	),

	'redis' => array(
		'default' => array(
			'hostname'	=> '127.0.0.1',
			'port'		=> 6379,
		)
	),

);

/* End of file db.php */
