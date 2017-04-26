<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?></title>

<!-- Begin Meta -->
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />
<!-- End Meta -->

<!-- Begin Styles -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flexslider.css" type="text/css">
<!-- End Styles -->

<!-- Begin Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="scripts/jquery.flexslider.js"></script>
<!-- End Scripts -->

<!-- Begin Flex Slider -->
<script type="text/javascript" charset="utf-8">
  $(window).load(function() { // enable function upon window load
    $('.flexslider').flexslider(); // call flexslider function
  });
</script>
<!-- End Flex Slider -->

<!-- Begin Toggle Menu -->
<script type="text/javascript" charset="utf-8">
  $(window).load(function() { // enable function upon window load
	$("#toggle").click(function() { // when toggle is clicked...
		$("#navigation").toggle(); // ... open or close the navigation
	});
  });
</script>
<!-- End Toggle Menu -->

<!-- Begin WP Head Function -->
<?php wp_head(); ?>
<!-- End WP Head Function -->

</head>
<body <?php body_class(); ?>>

<!-- Begin Header -->
<div id="header">
<h1 id="logo"><a href="home.html">Mike Sinkula</a></h1>
<img id="toggle" src="<?php bloginfo('template_directory'); ?>/images/img-toggle.png" width="25" height="25" alt="Toggle Menu">
</div>
<!-- End Header -->

<!-- Begin Navigation -->
<div id="navigation">
    <ul id="navigation-items">
    <li><a href="main.html">About</a></li>
    <li><a href="main.html">Portfolio</a></li>
    <li><a href="main.html">Blog</a></li>
    <li><a href="main.html">Contact</a></li>
    </ul>
</div>
<!-- End Navigation -->

<!-- Begin Content -->
<div id="middle">

    <!-- Begin Text -->
    <div id="content">
    <h2>Header Level Two</h2> 
    <img class="featured" src="<?php bloginfo('template_directory'); ?>/images/img-featured.jpg" alt="Featured Image">
<p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo.</p>
    <p>Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>
    <h3>Header Level Three</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p>   
    <ol>
       <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
       <li>Aliquam tincidunt mauris eu risus.</li>
    </ol>
    <blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p></blockquote>
    <h3>Header Level Three</h3>
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
    <ul>
       <li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
       <li><a href="#">Aliquam tincidunt mauris eu risus.</a></li>
    </ul>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p>
    </div>
    <!-- End Text -->
    
    <!-- Begin Sidebar -->
    <div id="sidebar">
    <h2>Header Level Two</h2>
    <ul>
    <li><a href="#">Lorem ipsum dolor</a></li>
    <li><a href="#">Aliquam tincidunt</a></li>
    <li><a href="#">Vestibulum auctor</a></li>
    </ul>    
    </div>
    <!-- End Sidebar -->
    
</div>
<!-- End Content -->

<!-- Begin Footer -->
<div id="footer">
<p>&copy;2014 <a href="http://www.mikesinkula.com/">Mike Sinkula</a>. All rights reserved.</p>
</div>
<!-- End Footer -->

<!-- Begin WP Footer Function -->
<?php wp_footer(); ?>
<!-- End WP Footer Function -->

</body>
</html>