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
  </script>

</head>

<body>

  <div id="bg"></div>
  <div id="wrapper">

    <a href="<?php echo site_url(); ?>" id="logo">
      <span id="page-title">Tom Himanen,</span>
      <span id="status-title">ihminen</span>
    </a>
    <div id="fb-like-top-wrapper">
      <div class="fb-like"
      data-href="https://www.facebook.com/tomhimanen"
      data-layout="button"
      data-action="like"
      data-show-faces="false"
      data-share="false"></div>
    </div>

    <?php if(is_home())
    { ?>
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
      </div><?php
    } ?>

    <a name="blog"></a>
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
      { ?>
        <div id="fb-like-bottom-wrapper">
          <div class="fb-like"
           data-href="https://www.facebook.com/tomhimanen"
           data-layout="standard"
           data-action="recommend"
           data-show-faces="false"
           data-share="false">
         </div>
        </div>
        <div id="fb-comments-wrapper">
          <div id="fb-comments"
           class="fb-comments"
           data-href="http://himanen.info"
           data-width="762" data-numposts="5"
           data-colorscheme="light">
         </div><!-- /#fb-comments -->
       </div><!-- /#fb-comments-wrapper --><?php
      } ?>

    </div><!-- #posts -->
  </div><!-- #wrapper -->

  <div id="fb-like-side-wrapper">
    <div class="fb-like"
     data-href="https://www.facebook.com/tomhimanen"
     data-layout="box_count"
     data-action="recommend"
     data-show-faces="false"
     data-share="false">
    </div>
  </div>

  <?php wp_footer(); ?>

  <!-- fb-stuff -->
  <div id="fb-root"></div>
  <script>
    (function(d, s, id)
    {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/fi_FI/all.js#xfbml=1&appId=358210697641151";
      fjs.parentNode.insertBefore(js, fjs);
    }
    (document, 'script', 'facebook-jssdk'));
  </script>
  <!-- /fb-stuff -->

</body>
