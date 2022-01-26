<?php 

namespace Wooletthedevsout\Dummy\Content;

interface DummyInterface
{
	public static function add() : null;

	public function process(array $data) : null;
}