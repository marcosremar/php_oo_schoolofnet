<?php
namespace Source;

class Conn implements iConn
{
	private $dsn;
	private $user;
	private $pass;

	public function __contruct($dsn, $user, $pass)
	{
		$this->dsn = $dsn;
		$this->$user = $user;
		$this->pass = $pass;
	}

	public function connnect()
	{
		return new \PDO($this->dsn, $this->user, $this->pass);
	}

}