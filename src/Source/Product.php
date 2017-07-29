<?php
namespace Source;

class Product
{
	private $db;

	public function __construct($db)
	{
		$this->db = $db;
	}

	public function list()
	{
		$query "select * from products";
		$stmt = $db->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(\PDO::FETCH_ASSOC);

	}
}