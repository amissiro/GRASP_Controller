<?php

/**
 * Class Controller
 */
class Controller
{
	/**
	 * @var The model.
	 */
	private $model;

	/**
	 * @var The view.
	 */
	private $view;

	/**
	 * Controller constructor.
	 */
	public function __construct()
	{
		$this->model = new Model();
		$this->view  = new View($this->model);
	}

	/**
	 * Creates the page.
	 */
	public function createPage()
	{
	   $this->view->pageContent();
	}
}
