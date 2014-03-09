<?php include ("get_template_directory_uri(); . /functions.php"); ?>
<!doctype html>
<!--<html xmlns:fb="http://ogp.me/ns/fb#">-->
<html version="HTML+RDFa 1.1" lang="fi">
<head>
	<link href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" rel="stylesheet" />
	<script type='text/javascript' src='http://code.jquery.com/jquery-1.5.1.min.js'></script>
	<script type="text/javascript" src="http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.latest.js"></script>
	<script type="text/javascript">
//	$(document).ready(function () 
//	{
//		$("body").css("display", "none");
//	});
//	$(window).load(function() 
//	{
//		$("body").fadeIn(500);
//		$("a").click(function(event)
//		{
//			event.preventDefault();
//			linkLocation = this.href;
//			$("body").fadeOut(400, redirectPage);      
//		});
//		function redirectPage() 
//		{
//			window.location = linkLocation;
//		}
//	});
	</script>
	<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-26575834-1']);
	_gaq.push(['_setDomainName', 'none']);
	_gaq.push(['_setAllowLinker', true]);
	_gaq.push(['_trackPageview']);
	(function() 
	{
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
	</script>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width,maximum-scale=0.8" />
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" />
	<title><?php
        /*
         * Print the <title> tag based on what is being viewed.
         */
        global $page, $paged;

        wp_title( '|', true, 'right' );

        // Add the blog name.
        bloginfo( 'name' );

        ?></title>
	<!--<link href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" rel="stylesheet" />-->
	<?php if (is_page())
	{ 
		?><style type="text/css">
		.post-date {display: none}
		.post-author {display: none}
		.post-category {display: none}
		</style><?php
	}; ?>
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php echo bloginfo('rss2_url'); ?>">
	<script type="text/javascript">
		if( $(window).width() > 1000)
		{
			$(window).scroll(function(){
			var scrollPos = $(document).scrollTop();
			$("#bg").css("top", -scrollPos/3+"px");
//			$("#corner-like").css("top", 244-scrollPos/-1.2+"px");
//			$("#corner-plus").css("top", 175-scrollPos/-1.2+"px");
			}); 
			$(document).ready(function(){
  			$('.slideshow').cycle({
			fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
			});
			});
		}
	</script>
	<meta property="fb:admins" content="271968572836525" />
</head>
<body>
	<?php // get_template_part( 'includes/introvideo' ); ?>
	<table border="0" cellspacing="0" cellpadding="0" width="100%"><tr><td>
		<div id="bg"></div>
		<!--<div id="corner-plus">
			<a href="https://plus.google.com/100914801467131682589" rel="publisher">
                                <img src="http://www.vappugospel.vg/2013/wp-content/themes/vg2013/images/googleplus.png" alt="VG @ Google Plus" width="51">
			</a>
		</div>-->
		<img src="<?php echo get_template_directory_uri(); ?>/images/bg_compass.png" alt="VG-kompassi" id="bg_compass" />
	        <div id="corner-like">
			<div style="text-align: center; background: rgba(212, 44, 27, 0.77); font-family: arial; color: #FFF; padding: 13px 13px 13px; margin-top: 0px; border-radius: 4px; ">
			<iframe src="http://www.facebook.com/plugins/like.php?locale=fi_FI&href=http%3A%2F%2Fwww.facebook.com%2FVappugospel&amp;send=false&amp;layout=box_count&amp;width=60&amp;show_faces=false&amp;action=like&amp;colorscheme=dark&amp;font=verdana&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height: 64px; padding-top: 5px; width: 97px;" allowTransparency="true"></iframe></div>
		        <script>
			// window.fbAsyncInit = function() {
    			// isLoaded = true;  
			//  (function(d, s, id) {
		        //  var js, fjs = d.getElementsByTagName(s)[0];
		        //  if (d.getElementById(id)) return;
		        //  js = d.createElement(s); js.id = id;
		        //  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=492446507456362";
		        //  fjs.parentNode.insertBefore(js, fjs);
		        //  }(document, 'script', 'facebook-jssdk'));
			// }
			</script>
		        <!--<fb:like href="http://facebook.com/Vappugospel" send="false" layout="box_count" width="450" show_faces="false" font="arial"></fb:like>-->
	        </div>

		<a href="<?php echo home_url(); ?>"><img id="header" src="<?php echo get_template_directory_uri(); ?>/images/header.png" /></a>
		<div id="container">
			<div id="right-column" class="shadow">
				<?php 
				if (has_post_thumbnail()) 
				{
					$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
					echo get_the_post_thumbnail($post->ID, 'thumbnail-standard');
					echo '<div id="download-image-link"><a href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >';
					echo 'Lataa kuva painolaatuisena vapaasti käytettäväksi klikkaamalla tästä';
					echo '</a></div>';
				}
				if (is_category())
				{
					$category_image_url_standard = apply_filters( 'taxonomy-images-queried-term-image-url', '', array('image_size' => 'thumbnail-standard'));
					$category_image_url_full = apply_filters( 'taxonomy-images-queried-term-image-url', '', array('image_size' => 'full'));					
					echo '<img src="' . $category_image_url_standard . '" class="wp-post-image" />';
					echo '<div id="download-image-link"><a href="' . $category_image_url_full . '" title="Lataa kuva painolaatuisena vapaasti käytettävästi klikkaamalla tästä." >';
					echo 'Lataa kuva painolaatuisena vapaasti käytettäväksi klikkaamalla tästä</a></div>';
				}
				?>
				<div class="post">
					<?php // the loop ?>
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
						<div id="fb-root"></div>
						<script>(function(d, s, id) 
							{
							var js, fjs = d.getElementsByTagName(s)[0];
							if (d.getElementById(id)) return;
							js = d.createElement(s); js.id = id;
							js.src = "//connect.facebook.net/fi_FI/all.js#xfbml=1&appId=458177144220217";
							fjs.parentNode.insertBefore(js, fjs);
							}
						(document, 'script', 'facebook-jssdk'));</script>
						<div id="fb-comments"><fb:comments href="<?php the_permalink()?>" width="600" num_posts="3"></fb:comments></div><?php
					} ?>
				</div>
				<?php //get_template_part("includes/ostaliput"); ?>
			</div>
			<div id="left-column">
				<div id="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'navigation', 'container_class' => 'navigation' ) ); ?>
				</div>
				<!--<div id="ads">
					<div class="slideshow" id="partners">
					<a href="http://www.jari-pekka.fi/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/logos/jari-pekka_vg2013.png" width="250" /></a>
					<a href="http://www.valkealanapteekki.fi/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/logos/valkealan_apteekki_vg2013.png" width="250" /></a>
					<a href="http://visitkouvola.fi/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/logos/kouvola_vg2013.png" width="250" /></a>
					<a href="http://www.finnspring.fi/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/logos/finnspring_vg2013.png" width="250" /></a>
					<a href="http://www.kouvolanlakritsi.fi/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/logos/kouvolan_lakritsi_vg2013.png" width="250" /></a>
					<a href="http://www.kouvolansanomat.fi/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/logos/kouvolan_sanomat_vg2013.png" width="250" /></a>
					</div>
				</div>-->
				<?php if (is_category() || is_home() || is_front_page())
				{ ?><a href="http://www.finnspring.fi/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/ads/hiilijalanjalki.png" id="finnspring" style="padding-top: 80px; padding-left: 55px; opacity: 1.0; width: 200px; height: auto;" /></a>
				<?php } ?>
			</div>
		</div>
	</td></tr><tr><td>
		<img id="footer" src="<?php echo get_template_directory_uri(); ?>/images/footer.png" />
	</td></tr></table>
	<?php wp_footer(); ?>
	<div xmlns="http://www.w3.org/1999/xhtml"
		  xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
		  xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#"
		  xmlns:xsd="http://www.w3.org/2001/XMLSchema#"
		  xmlns:gr="http://purl.org/goodrelations/v1#"
		  xmlns:foaf="http://xmlns.com/foaf/0.1/"
		  xmlns:vcard="http://www.w3.org/2006/vcard/ns#">
 
		  <div typeof="gr:BusinessEntity" about="#company">
		    <div property="gr:legalName" content="VG 2013"></div>
		    <div rel="vcard:adr">
		      <div typeof="vcard:Address">
		        <div property="vcard:country-name" content="Finland"></div>
		        <div property="vcard:locality" content="Kouvola"></div>
		        <div property="vcard:postal-code" content="45100"></div>
		        <div property="vcard:street-address" content="Kouvolan jäähalli, Topinkuja 1, 45720 Kouvola"></div>
		      </div>
		    </div>
		    <div rel="foaf:logo" resource="http://vappugospel.vg/2013/wp-content/themes/vg2013/images/favicon.png"></div>
		    <div rel="foaf:page" resource=""></div>
		  </div>
		</div>
	</div>

	<!-- Twitter feed component begins -->
	<!--<div id="twitter"></div>-->
	<script type="text/javascript">
	// Get the tweets using Twitter JSon API
	//$.getJSON("http://search.twitter.com/search.json?callback=?&rpp=10&q=%23vgkouvola", function(data) {
	//$.each(data.results, function(i, item)
	//{
	//	//$("#twitter").append('asdf');
	//	$("#twitter").append(item.text + ' (' + item.from_user + ' @ Twitter)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
	// });      
	// });
	</script>
	<!-- Twitter feed component ends -->
</body>
</html>
