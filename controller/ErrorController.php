<?php

class ErrorController extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function notFound()
	{
		$this->views->getView($this, "error");
	}
}

$notFound = new ErrorController();
$notFound->notFound();
