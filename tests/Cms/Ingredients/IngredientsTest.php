<?php

namespace Kirby\Cms;

use PHPUnit\Framework\TestCase;

class IngredientsTest extends TestCase
{
	protected $ingredients;

	public function setUp(): void
	{
		$this->ingredients = Ingredients::bake([
			'a' => 'A',
			'b' => function () {
				return 'B';
			}
		]);
	}

	public function testGet()
	{
		$this->assertSame('A', $this->ingredients->a);
		$this->assertSame('B', $this->ingredients->b);
	}

	public function testCall()
	{
		$this->assertSame('A', $this->ingredients->a());
		$this->assertSame('B', $this->ingredients->b());
	}

	public function testToArray()
	{
		$expected = [
			'a' => 'A',
			'b' => 'B'
		];

		$this->assertSame($expected, $this->ingredients->toArray());
		$this->assertSame($expected, $this->ingredients->__debugInfo());
	}
}
