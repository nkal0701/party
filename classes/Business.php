<?php
class Business extends Application 
{
	private $_table = 'business';

	public function getBusiness()
	{
		// $sql = "SELECT * FROM `{$this->_table}`
		// WHERE `id` = ?";
		$sql = "SELECT * FROM `business`
		WHERE `id` = ?";
		$result = $this->db->query( $sql, array('1') );
		return $this->db->fetchOne( $result );
	}

	public function getVatRate()
	{

	}

































}