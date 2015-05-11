CREATE TABLE IF NOT EXISTS `dk_comment` (
	`id` int(10) unsigned NOT NULL,
	`name` varchar(50) NOT NULL,
	`comment` varchar(250) NOT NULL,
	`comment_date` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;