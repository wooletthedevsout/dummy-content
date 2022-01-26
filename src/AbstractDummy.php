<?php 

namespace Wooletthedevsout\Dummy\Content;

abstract class AbstractDummy implements DummyInterface
{
	protected $topic;

	public function __construct(object $config)
	{
		$this->topic = $this->getTopic($config);
	}

	public function getTopic(object $object)
	{
		$reflection = new \ReflectionClass($this);
		$topic = $reflection->getShortName();

		return $object[$topic];
	}

	public static function add()
	{
		$instance = new self;
		$c = $instance->topic['count'];

		for($i = 0; $i < $c; $i++) {
			$item = $this->process($this->getData());
		}
	}
}