<?php 


/**
 * 
 */
class Model 
{
	
	protected $_dbh;
	protected $_table;
	protected $_primary;

	private $_sql;
	private $_data;


	private $_select = "";
	private $_join = "";
	private $_where = "";
	private $_order = "";
	private $_limit = "";

	public function __construct()
	{
		try {
			$this->_dbh = new PDO(DB_RIVER. ':host='.DB_HOST. 'dbname='.DB_NAME, DB_USER, DB_PASSWORD);
			$this->_dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


		} catch (Exception $e) {
			echo "koneksi gagal ".$e->getMessage();
		}
	}

	

	public function __destruct()
	{
		$this->_dbh = null;
	}
}

 ?>