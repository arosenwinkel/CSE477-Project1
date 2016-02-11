<?php

/** @file
 * @brief Empty unit testing template
 * @cond 
 * @brief Unit tests for the class 
 */
require __DIR__ . "/../../vendor/autoload.php";
class SteampunkedTest extends \PHPUnit_Framework_TestCase
{
	const SEED = 1234;
	public function test_construct() {

		$steam = new Steampunked(self::SEED);
		$this->assertInstanceOf('Steampunked\Steampunked', $steam);

		// Should work with no arguments as well.
		$steam = new Steampunked();
	}

	public function test_createGame()
	{
		$steam = new Steampunked();
		$steam->createGame(10);
		$this->assertEquals(10,$steam->getSize());
	}
}

/// @endcond
?>
