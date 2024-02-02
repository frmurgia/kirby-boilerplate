<?php

namespace Kirby\Toolkit;

use Kirby\Exception\Exception;
use Kirby\Exception\InvalidArgumentException;

class ComponentTest extends TestCase
{
	public function tearDown(): void
	{
		Component::$types  = [];
		Component::$mixins = [];
	}

	public function testProp()
	{
		Component::$types = [
			'test' => [
				'props' => [
					'prop' => function ($prop) {
						return $prop;
					}
				]
			]
		];

		$component = new Component('test', ['prop' => 'prop value']);

		$this->assertSame('prop value', $component->prop());
		$this->assertSame('prop value', $component->prop);
	}

	public function testPropWithDefaultValue()
	{
		Component::$types = [
			'test' => [
				'props' => [
					'prop' => function ($prop = 'default value') {
						return $prop;
					}
				]
			]
		];

		$component = new Component('test');

		$this->assertSame('default value', $component->prop());
		$this->assertSame('default value', $component->prop);
	}

	public function testPropWithFixedValue()
	{
		Component::$types = [
			'test' => [
				'props' => [
					'prop' => 'test'
				]
			]
		];

		$component = new Component('test');

		$this->assertSame('test', $component->prop());
		$this->assertSame('test', $component->prop);
	}

	public function testAttrs()
	{
		Component::$types = [
			'test' => []
		];

		$component = new Component('test', ['foo' => 'bar']);

		$this->assertSame('bar', $component->foo());
		$this->assertSame('bar', $component->foo);
	}

	public function testComputed()
	{
		Component::$types = [
			'test' => [
				'computed' => [
					'prop' => function () {
						return 'computed prop';
					}
				]
			]
		];

		$component = new Component('test');

		$this->assertSame('computed prop', $component->prop());
		$this->assertSame('computed prop', $component->prop);
	}

	public function testComputedFromProp()
	{
		Component::$types = [
			'test' => [
				'props' => [
					'prop' => function ($prop) {
						return $prop;
					}
				],
				'computed' => [
					'prop' => function () {
						return 'computed: ' . $this->prop;
					}
				]
			]
		];

		$component = new Component('test', ['prop' => 'prop value']);

		$this->assertSame('computed: prop value', $component->prop());
	}

	public function testMethod()
	{
		Component::$types = [
			'test' => [
				'methods' => [
					'say' => function () {
						return 'hello world';
					}
				]
			]
		];

		$component = new Component('test');

		$this->assertSame('hello world', $component->say());
	}

	public function testPropsInMethods()
	{
		Component::$types = [
			'test' => [
				'props' => [
					'message' => function ($message) {
						return $message;
					}
				],
				'methods' => [
					'say' => function () {
						return $this->message;
					}
				]
			]
		];

		$component = new Component('test', ['message' => 'hello world']);

		$this->assertSame('hello world', $component->say());
	}

	public function testComputedPropsInMethods()
	{
		Component::$types = [
			'test' => [
				'props' => [
					'message' => function ($message) {
						return $message;
					}
				],
				'computed' => [
					'message' => function () {
						return strtoupper($this->message);
					},
				],
				'methods' => [
					'say' => function () {
						return $this->message;
					}
				]
			]
		];

		$component = new Component('test', ['message' => 'hello world']);

		$this->assertSame('HELLO WORLD', $component->say());
	}

	public function testToArray()
	{
		Component::$types = [
			'test' => [
				'props' => [
					'message' => function ($message) {
						return $message;
					}
				],
				'computed' => [
					'message' => function () {
						return strtoupper($this->message);
					},
				],
				'methods' => [
					'say' => function () {
						return $this->message;
					}
				]
			]
		];

		$component = new Component('test', ['message' => 'hello world']);
		$expected  = ['message' => 'HELLO WORLD'];

		$this->assertSame($expected, $component->toArray());
		$this->assertSame($expected, $component->__debugInfo());
	}

	public function testCustomToArray()
	{
		Component::$types = [
			'test' => [
				'toArray' => function () {
					return [
						'foo' => 'bar'
					];
				}
			]
		];

		$component = new Component('test');

		$this->assertSame(['foo' => 'bar'], $component->toArray());
	}

	public function testInvalidType()
	{
		$this->expectException(InvalidArgumentException::class);
		$this->expectExceptionMessage('Undefined component type: test');

		new Component('test');
	}

	public function testLoadInvalidFile()
	{
		Component::$types = ['foo' => 'bar'];
		$this->expectException(Exception::class);
		$this->expectExceptionMessage('Component definition bar does not exist');

		Component::load('foo');
	}

	public function testMixins()
	{
		Component::$mixins = [
			'test' => [
				'computed' => [
					'message' => function () {
						return strtoupper($this->message);
					}
				]
			]
		];

		Component::$types = [
			'test' => [
				'mixins' => ['test'],
				'props' => [
					'message' => function ($message) {
						return $message;
					}
				]
			]
		];

		$component = new Component('test', ['message' => 'hello world']);

		$this->assertSame('HELLO WORLD', $component->message());
		$this->assertSame('HELLO WORLD', $component->message);
	}
}
