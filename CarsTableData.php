<?php

/**
 * Class CarsTableData.
 */
class CarsTableData
{
	/**
	 * @var The car id.
	 */
	private $id;

	/**
	 * @var The car make.
	 */
	private $make;

	/**
	 * @var The car model.
	 */
	private $model;

	/**
	 * CarsTableData constructor.
	 *
	 * @param int    $id      The car id.
	 * @param string $make    The car make.
	 * @param string $model   The car model.
	 */
	public function __construct($id, $make, $model)
	{
		$this->id    = $id;
		$this->make  = $make;
		$this->model = $model;
	}

	/**
	 * Gets car data.
	 *
	 * @return array   The car data.
	 */
	public function getTableData()
	{
		return array('id' => $this->id, 'make' => $this->make, 'model' => $this->model);
	}
}