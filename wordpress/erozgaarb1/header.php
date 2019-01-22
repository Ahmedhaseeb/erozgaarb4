<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="assets/img/favicon.ico">
<?php if(is_single()): ?>
<title><?php  


echo get_the_title();

echo " / ";
echo bloginfo('title'); ?></title>

<?php else: ?>
<title><?php bloginfo('title'); ?></title>

<?php endif; ?>

<!-- Bootstrap CSS And JS
==================-->
<?php  
    $styleSheetUrl = get_template_directory_uri();;
?>

<link href="<?php echo $styleSheetUrl; ?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<!-- Bootstrap END -->
<link href="<?php echo $styleSheetUrl; ?>/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />

<link href="<?php echo $styleSheetUrl; ?>/style.css" rel="stylesheet" />


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<?php wp_head(); ?>
    
</head>
<body>

    <!-- HEADER
    ====================================== -->
    <header class="site-header" role="banner">
        <!-- NAVBAR
        =================-->
        <div class="navbar-wrapper">
    		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        		<div class="container">
                	<div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    	<a class="navbar-brand" href="/_"><img src="<?php echo $styleSheetUrl; ?>/assets/img/logo.png" width="35" alt="The Programmings"/> </a>
                    </div> <!-- navbar header -->
                    <div class="navbar-collapse collapse">
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'primary',
                            // 'add_li_class' => 'nav-item',
                            'menu_id'        => 'primary-menu',
                            'container' => 'ul',
                            'menu_class' => 'nav navbar-nav navbar-right',
                            // 'container_class' => 'collapse navbar-collapse',
                            // 'sort_column' => 'menu_order'
                            ) );
                        ?>
                    	<!-- <ul class="nav navbar-nav navbar-right">
                        	<li><a href="">Home</a></li>
                            <li class="active"><a href="blog.html">Blog</a></li>
                            <li><a href="blog.html">Resources</a></li>
                            <li><a href="blog.html">Contact</a></li>
                        </ul> -->
                    </div>
                    	
       			</div> <!-- Container -->
          		    
            </div>  <!-- navbar -->  
         
        </div> <!-- NAVBAR-WRAPPER -->

    </header>