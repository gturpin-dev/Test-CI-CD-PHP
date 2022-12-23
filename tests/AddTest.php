<?php

require_once 'functions.php';

use PHPUnit\Framework\TestCase;

final class AddTest extends TestCase {

	public function testAdd() {
		$this->assertEquals( 15, add( 10, 5 ) );
	}
}