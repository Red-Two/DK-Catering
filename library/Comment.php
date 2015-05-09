<?php

class Comment extends MySQL
{
	/*
	 * Insert Comment
	*/
	public function insertComment(array $input)
	{
		var_dump($this->db);
		$this->getDb()->query('hi');
		$db = $this->db->prepare("INSERT INTO (`name`, `comment`, `comment_date`) VALUES(:name, :comment, :comment_date)");

		$db->execute(array(
			":name" => $input["name"],
			":comment" => $this->checkComment($input["input"]),
			":comment_date" => time()
		));
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
}