<?php
/*
Header
*/
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo get_bloginfo('name') ?> <?php wp_title( '|', true, 'left' ); ?></title>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"> 
<?php wp_head(); ?>
</head>
<body>

<div class="navcontainer">
<div class="logo">
<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"></a>
</div>
		<nav class="nav"> <!-- Navigation -->
		<div id="navlinks">
			<?php   
		wp_nav_menu(   
				array ( 
					'theme_location' => 'main-menu' 
				 ) 
			); 
			
			?>
		</div>
			
		<div id="mobilenav"> <!-- Mobile navigation -->
			<a href=""><br></a>
			<?php   
		wp_nav_menu(   
				array ( 
					'theme_location' => 'main-menu' 
				 ) 
			); 
			
			?>
		</div> <!-- End mobile navigation -->
			
		<a href="javascript:void(0);" class="icon" onclick="navToggle()">
		Menu <i class="fa fa-bars"></i></a>
		</nav> <!-- End navigation -->
		</div><!-- End nav container -->
		
