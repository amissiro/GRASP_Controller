<?php

/**
 * Class Model
 */
class Model
{
	/**
	 * The server name.
	 */
	const SERVER_NAME = 'localhost';

	/**
	 * The username name.
	 */
	const USER_NAME = 'root';

	/**
	 * The password.
	 */
	const PASSWORD = '190186az';

	/**
	 * The database name.
	 */
	const DATABASE = 'cars';

	/**
	 * The user query.
	 */
	const QUERY_STRING = "SELECT * FROM cars";

	/**
	 * Gets the data .
	 *
	 * @return array   The table data.
	 */
	public function getData()
	{
		$sqlConnection = $this->createSQLConnection();
		$query         = $this->query($sqlConnection);

		return $this->getDataFromTable($query);
	}

	/**
	 * Creates the mysql connection.
	 *
	 * @return mysqli   The mysql connection.
	 */
	private function createSQLConnection()
	{
		$sqlConnection = new mysqli(self::SERVER_NAME, self::USER_NAME, self::PASSWORD, self::DATABASE);

		if ($sqlConnection->connect_error)
		{
			die("Connection failed: " . $sqlConnection->connect_error);
		}

		return $sqlConnection;
	}

	/**
	 * Queries the table.
	 *
	 * @param mysqli $sqlConnection   The mysql connection.
	 *
	 * @return bool|mysqli_result   The query result.
	 */
	private function query(mysqli $sqlConnection)
	{
		return $sqlConnection->query(self::QUERY_STRING);
	}

	/**
	 * Gets the car data from the table.
	 *
	 * @param  bool|mysqli_result $queryResult The query result.
	 *
	 * @return array   The car data from the table.
	 */
	private function getDataFromTable(mysqli_result $queryResult)
	{
		$data = array();

		if ($queryResult->num_rows < 0)
		{
			return null;
		}

		while($row = $queryResult->fetch_assoc())
		{
			$id    = $row["id"];
			$make  = $row["make"];
			$model = $row["model"];

			$carData = new CarsTableData($id, $make, $model);

			array_push($data, $carData->getTableData());
		}

		return $data;
	}
}

