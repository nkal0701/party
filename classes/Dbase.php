<?php
class Dbase 
{
	private $_host = 'mysql17.000webhost.com';
	private $_user = 'a3094581_alfred';
	private $_password = 'Squall!7';
	private $_name = 'a3094581_party';

	private $_conndb = false;
	public $_last_query = null;
	public $_affected_rows = 0;

	public $_insert_keys = array();
	public $_insert_values = array();
	public $_update_sets = array();

	public $_id;

	public function __construct() 
	{
		$this->connect();
	}

	private function connect()
	{
		try 
		{
		    // $this->_conndb = new PDO('mysql:host='.$this->_host.';dbname='.$this->_name.';charset=utf8', $this->_user, $this->_password);
		    $this->_conndb = new PDO("mysql:host=mysql17.000webhost.com; dbname=a3094581_party", "a3094581_alfred", "Squall!7");
		    $this->_conndb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    //$this->_conndb->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		    $this->_conndb->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

		    // $_select = $this->_conndb->prepare( 'USE ' . $this->_name );
		    $this->_conndb->exec( 'USE ' . $this->_name );
		    if ( $this->_conndb ) 
		    {
		    	$this->_conndb->exec( 'USE ' . $this->_name );
		    }
		    // if ( !$_select ) 
		    // {
		    // 	die('Database selection failed:<br />');
		    // }
		}
		catch(PDOException $e) 
		{
		    echo 'Database connection failed with Exception -> ';
		    echo $e->getMessage();
		}
	}

	public function close()
	{
		if ( !$this->_conndb )
		{
			die( 'Closing conection failed.' );
		}
	}

	// prepare query
	public function query( $query, $params )
	{
		try
		{ 
			$this->_last_query = $query;
            $result = $this->_conndb->prepare( $query );
            $result = $this->displayQuery( $result, $params ); 
            return $result;  
        }
        catch(PDOException $e)
        {
            //throw new Exception($e->getMessage());
            echo 'Preparing query failed with Exception -> ';
		    echo $e->getMessage();
        }
	}

	// execute query
	public function displayQuery( $result, $params )
	{
		try
		{ 
            $result->execute( $params );
            $this->_affected_rows = $result->rowCount();
            return $result;  
        }
        catch(PDOException $e)
        {
            //throw new Exception($e->getMessage());
            echo 'Executing query failed with Exception -> ';
		    echo $e->getMessage();
        }
	}

	// fetch all query
	public function fetchAll( $result )
	{
		try
		{ 
            return $result->fetchAll();  
        }
        catch(PDOException $e)
        {
            //throw new Exception($e->getMessage());
            echo 'Fetch all query failed With Exception -> ';
		    echo $e->getMessage();
        }
	}

	public function fetchOne( $result )
	{
		try
		{ 
            return $result->fetch();  
        }
        catch(PDOException $e)
        {
            //throw new Exception($e->getMessage());
            echo 'Fetch query failed With Exception -> ';
		    echo $e->getMessage();
        }
	}

	public function lastId()
	{
		return $this->_conndb->lastInsertId();
	}























	
















}