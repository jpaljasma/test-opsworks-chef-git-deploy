<?php
	
	function _u8enc($s) {
		return htmlentities($s, ENT_COMPAT, 'utf-8');
	}
	
	if(!isset($content)) {
		$content = new stdClass();
		$content->title = 'Theme Title';
		$content->h1 = 'Theme H1';
		$content->body = '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent placerat bibendum aliquam. Nam vehicula lacinia magna, rutrum suscipit felis dapibus nec. Sed et fringilla neque. Proin dignissim venenatis eleifend. Aenean ut eros vitae orci gravida consequat. In hac habitasse platea dictumst. Mauris sollicitudin odio vitae tempus vehicula. Donec vitae dui faucibus, tempor leo non, fermentum ligula. Vivamus urna orci, fringilla eget sagittis nec, cursus nec libero. Duis justo quam, fermentum eget malesuada ut, vehicula in justo. Curabitur laoreet quam quam, a interdum purus bibendum nec.</p>';
	}
	
?><!DOCTYPE html>
<html>
	<head>
		<title><?php echo _u8enc($content->title); ?></title>
	</head>
	<body>
		<h1><?php echo _u8enc($content->h1); ?></h1>
		<?php echo $content->body; ?>
	</body>
</html>
