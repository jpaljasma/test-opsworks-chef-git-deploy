<?php
/** **/
    
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
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:400,300,100">
        <style type="text/css">
            * { margin: 0; padding: 0; outline: none; -webkit-font-smoothing: antialiased; }
            html, body {
                height: 100%;
                font-family: "Roboto",serif;
                color: #271b15;
            }
			.wrapper {
				width: 1140px;
				margin: 0 auto;
			}
			header {
				min-height: 200px;
			}
			h1, h2, h3 { font-weight: normal; }
			h1+h2 { margin-bottom: 20px; }
			h1 { font-size: 55px;  line-height: 68px; }
			h2 { font-size: 34px;  line-height: 47px;}
			h3 { font-size: 27px;  line-height: 40px; }
			p { font-size: 21px; line-height: 34px; font-weight: 300; }
			small { font-size: 17px; line-height: 30px; }
        </style>
	</head>
	<body>
		<div class="wrapper">
			<header></header>
			<article>
				<h1><?php echo _u8enc($content->h1); ?></h1>
				<h2>Heading 2, hardcoded in this template.</h2>
				<?php echo $content->body; ?>			
			</article>
		</div>
	</body>
</html>
