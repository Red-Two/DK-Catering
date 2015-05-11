<?php require_once "library/Global.php"; ?>
<?php $comment = new Comment(); ?>

<html>
	<?php $comment->insertComment(array(
		"name" => "test",
		"comment" => "123456"
	));?>
</html>