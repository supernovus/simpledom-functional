<?php

if (!defined('PHPUnit_MAIN_METHOD'))
{
	define('PHPUnit_MAIN_METHOD', 'AllTests::main');
}
 
class AllTests
{
	public static function main()
	{
		(new PHPUnit\TextUI\TestRunner)->run(self::suite());
	}
 
	public static function suite()
	{
		$suite = new PHPUnit\Framework\TestSuite();
		$suite->setName('SimpleDOM');

		foreach	(glob(dirname(__FILE__)	. '/*.php')	as $filepath)
		{
			$name =	basename($filepath,	'.php');

			if ($name != 'AllTests')
			{
				$suite->addTestFile($filepath);
			}
		}
 
		return $suite;
	}
}
 
if (PHPUnit_MAIN_METHOD	== 'AllTests::main')
{
	AllTests::main();
}