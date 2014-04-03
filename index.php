<?php include ("get_template_directory_uri(); . /functions.php"); ?>
<!doctype html>
<head>

  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/main.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/bxslider/jquery.bxslider.min.js"></script>
  
  <link href="<?php echo get_template_directory_uri(); ?>/lib/bxslider/jquery.bxslider.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css" />
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" type="image/png" />
  
  <title><?php global $page, $paged; wp_title('|', true, 'right'); bloginfo('name');  ?></title>
  <meta charset="utf-8">
  
  <script>
    function scrollToAnchor(aid)
    {
      var aTag = $("a[name='"+ aid +"']");
      $('html,body').animate({scrollTop: aTag.offset().top},'slow');
    }
    if($(window).width() > 1000)
		{
			$(window).scroll(function()
			{
			  var scrollPos = $(document).scrollTop();
			  $("#bg").css("top", -scrollPos/3+"px");
			});
		}
  </script>
  
</head>

<body>

  <div id="bg"></div>
  <div id="wrapper">
  
    <a href="<?php echo site_url(); ?>">
      <span id="page-title">Tom Himanen,</span>
      <span id="status-title">ihminen</span>
    </a>
    
    <div id="navi">
      <a href data-slide-index="0">eurovaalit </a>
      <a href data-slide-index="1">cv </a>
      <a href data-slide-index="2">projektit </a>
      <a href data-slide-index="3">yhteys </a>
      <span onclick="scrollToAnchor('blog');">blogi</span>
    </div><!-- #navi -->
    
    <div id="slider">
      <ul class="bxslider">
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/slides/vaaliteesit.jpg" /></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/slides/cv.jpg" /></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/slides/projektit.jpg" /></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/slides/yhteys.jpg" /></li>
      </ul>
    </div>
    
    <a name="blog"> 
    <div id="posts">
      <!-- The loop starts here -->
      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
      <?php get_template_part( 'includes/loop' , 'index'); ?>
      <?php endwhile; ?>
      <?php get_template_part( 'includes/pagination'); ?>
      <?php else : ?>
      <p><?php _e( 'Kaipaamaasi sivua ei löytynyt.', 'themify' ); ?></p>
      <?php endif; ?>
      
      <?php if (!is_page() && is_singular())
      {
        // Comments could be put here.
      } ?>
      
    </div><!-- #posts -->
  </div><!-- #wrapper -->

  <?php wp_footer(); ?>
   
  <script type="text/javascript">
    $(document).ready(function()
    {      
      $('.bxslider').bxSlider(
      {
        mode: "fade",
        pagerCustom: "#navi",
        controls: false
      });
    });
  </script>
  
</body>
