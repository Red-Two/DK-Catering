<?php

class Model_Comment extends Database
{
	/*
	 * Global Variables
	*/
	protected $table = "dk_comment";

	/*
	 * Insert Comment
	*/
	public function insertComment(array $input)
	{
		$db = $this->getDb()->prepare("INSERT INTO " . $this->getTable() . "(`name`, `comment`, `comment_date`) VALUES(:name, :comment, :comment_date)");

		$db->execute(array(
			":name" => $input["name"],
			":comment" => $this->checkComment($input["comment"]),
			":comment_date" => time()
		));

		$affectedRows = $db->rowCount();
	}

	/*
	 * Check Comment
	*/
	public function checkComment($comment)
	{
		if ((strlen($comment) > 250))
		{
			throw new Exception("Comment must be shorter than 250 characters!");
		}

		return $comment;
	}

	/*
	 * Accessors
	*/
	public function getTable()
	{
		return $this->table;
	}
}