<!DOCTYPE html>
<html>
	<head>
		<!--.............................................................................................
			web design blueprint template created by "Anam Ahmed"
			||	anam.ahmed.a@gmail.com
			||	http://anam.co/
			||	Project:	<projectname>
			>>Technology used:
			CSS crush:			http://the-echoplex.net/csscrush/
			960 Grid System: 	http://960.gs
			Eric Meyer's reset: http://meyerweb.com/eric/
			Prefixfree:			http://leaverou.github.com/prefixfree/
			jquery:				http://jquery.org/
			Browser Detector:	http://bastianallgeier.com/css_browser_selector/
			HTML5 shiv:			http://code.google.com/p/html5shiv/
			Selectvizr:			http://selectivizr.com/
			Twitter bootstrap:	http://twitter.github.com/bootstrap/
			Flexslider			http://www.woothemes.com/flexslider/
			jQuery lightbox		http://leandrovieira.com
		...............................................................................................-->	
		
		<?php
		/*----------------Some php staffs-------------*/
		//some plugins
		require("css_browser_selector.php");
		//CSS CRUSH : preprocessor
		require_once 'csscrush/CssCrush.php';
		$style_css = CssCrush::file(dirname($_SERVER['PHP_SELF']).'/css/style.css' ); // if error occurs, change this line
		//an integrated less compiler
		/*//....................................................
		require 'lessc.inc.php';
		try {
    	lessc::ccompile('style.less', 'style_out.css');
		} catch (exception $ex) {
   		exit('lessc fatal error:<br />'.$ex->getMessage());
		}
		//......................................................*/
		//OTHER PHP STAFFS HERE:
		?>
		<!--...................................the title and icon.......................................-->
		<link rel="SHORTCUT ICON" href="images/icon.jpg"/>
		<title>Anam's Blueprint</title>
		<!--...................................meta tags................................................-->
		<meta name="description" content="Designed by Anam Ahmed" />
		<meta name="keywords" content="Anam ahmed,anam's work" />
		<meta name="distribution" content="global" />
		<meta name="revisit" content="10 days" />
		<meta name="revisit-after" content="10 days" />
		<meta name="resource-type" content="document" />
		<meta name="audience" content="all" />
		<meta name="rating" content="general" />
		<meta name="robots" content="all" />
		<meta name="robots" content="index, follow" />
		<meta name="author" content="Anam Ahmed" />
		<meta name="language" content="en" />
		<meta name="country" content="BD" />
		<!--.......................................CSS...................................................-->
		<!--.........960 GS..........-->
		<!--<link rel="stylesheet" href="css/960/960.css">-->
		<!--<link rel="stylesheet" href="css/960/960_12_col.css">-->
		<!--<link rel="stylesheet" href="css/960/960_16_col.css">-->
		<!--<link rel="stylesheet" href="css/960/960_24_col.css">-->
		<!--.........reset...........-->
		<link rel="stylesheet" href="css/reset.css">
		<!--........f  o  n  t  s............-->
				
		<!--.....main stylesheet.....-->
		<!--less-->
		<!--<link rel="stylesheet" href="style_out.css">-->
		<!--<link rel="stylesheet" href="css/style.css">-->
		<!--html5 fix for IE-->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<![endif]-->
		<link rel="stylesheet" href="<?php echo $style_css; ?>" />
		<!--.............................Plugin CSS ................................-->
		<!--<link rel="stylesheet" href="css/flexslider.css">-->
		<!--<link rel="stylesheet" href="css/jquery.lightbox-0.5.css">-->
		<!--..........js.............-->
		<!--..prefixfree [not needed]-->
		<!--<script src="js/prefixfree.min.js" type="text/javascript"></script>-->
		<!--........jquery...........--> 
		<script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
		<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script-->
		<!--[if (gte IE 6)&(lte IE 8)]>
  		<script type="text/javascript" src="js/selectivizr.js"></script>
  		<noscript><link rel="stylesheet" href="css/ie-fallback.css" /></noscript>
		<![endif]--> 
		<!--<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js" type="text/javascript"></script>-->
		<!--<script src="js/jquery.easing.js" type="text/javascript"></script>-->
		<!--<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>-->
		<!--<script src="js/jquery.lightbox-0.5.min.js" type="text/javascript"></script>-->
		<!--..........................twitter bootstrap ....................
		<script src="bootstrap/bootstrap.min.js" type="text/javascript"></script>
		<link rel="stylesheet" href="bootstrap/bootstrap-responsive.min.css">
		<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
		-->
			
		<!--......................Head Ends.................................................................-->
	</head>
	<body class="<?php echo css_browser_selector() ?>">
	<!--......................................the content goes here...........................................-->
	
	<!--...........................................page end.................................................-->
	<script type="text/javascript" src="js/functions.js"></script>
	</body>
</html>