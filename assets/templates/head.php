<?php $template = new Template(); ?>

<head>
	<meta charset='utf-8' />
	<title><?php echo $template->getName(); echo " - "; echo $template->getPageTitle(); ?></title>

	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo $template->dataInclusion("assets/css/style.css"); ?>">
</head>