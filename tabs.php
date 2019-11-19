<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController
{

	/**
	* The test value
	*/
	const MY_ATTRIBUT = 'test';

	/**
	* The super test attribute
	*/
	public $myAttribute;

	/**
	* @Route("/")
	*/
	public function number()
	{
		$number = random_int(0, 100);

		return new Response(
			'<html><body><p>Lucky number: ' . $number . '</p></body></html>'
		);
	}

	/**
	* Set the tree configured as up.
	* Return true if no errors occured, else otherwise.
	*/
	public function setTreeToUp(string $size, bool $isOld): bool
	{
		$isOk = false;

		// Process
		if (true) {
			echo 'test';
		}

		return $isOk;
	}

}
