<?php
class Core
{
	public $name = 'Alfred';
	protected $email = 'dummy@dummydomain.com';
	private $address = 'some dummy address';

	public function run()
	{
		ob_start();
		require_once(Url::getPage());
		ob_get_flush();


	}
}