<?php namespace Ditto\Test\Fixtures\Classes;

class A
{
	public function __construct(){

	}

	public function a()
	{
		return 'a';
	}

	public function isAwesome()
	{
		return true;
	}

	public function hasJabberwocky()
	{
		return true;
	}

	public function getThis()
	{
		return $this;
	}
}