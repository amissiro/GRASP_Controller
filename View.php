<?php

/**
 * Class View
 */
class View
{
	/**
	 * @var The model.
	 */
	private $model;

	/**
	 * @var The car data.
	 */
	private $carDatas;

	/**
	 * View constructor.
	 *
	 * @param Model $model   The model.
	 */
	public function __construct(Model $model)
	{
		$this->model   = $model;
		$this->carDatas = $this->model->getData();
	}

	/**
	 * Page contents.
	 *
	 * @return void
	 */
	public function pageContent()
	{
//------------------------------ HTML ------------------------------?>
		<!DOCTYPE html>
		<html>
		<body>
		<h1>Our Cars</h1>
		<?php
				foreach ($this->carDatas as $carData)
				{
					echo 'ID    : ' . $carData['id'] . '<br>';
					echo 'MAKE  : ' . $carData['make'] . '<br>';
					echo 'MODEL : ' . $carData['model'] . '<br>';

					echo '<br><br>';
				}
		?>
		</body>
		</html>
<?php //------------------------------ /HTML ------------------------------

	}
}

