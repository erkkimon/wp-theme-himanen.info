
<?php include ("get_template_directory_uri(); . /functions.php"); ?>
<!DOCTYPE html>

<html lang="en">

  <head>
  
    <meta charset="utf-8">
    <meta name="viewport"               content="width=device-width, initial-scale=1.0">
    <meta name="author"                 content="Tom Himanen">
    <meta name="description"            content="Hoitamalla hommasi tehokkaasti luot itsellesi vapaa-aikaa tai lisää tuloja – tai sekä että.">
    
    <meta property="article:title"      content="Tom Himanen, elämäntapaduunari 2.0" /> 
    <meta property="article:publisher"  content="https://www.facebook.com/tomhimanen" /> 
    <meta property="og:image"           content="<?php echo get_template_directory_uri(); ?>/img/bg.jpg" /> 
    <meta property="og:type"            content="website" />
    <meta property="og:url"             content="http://tomhimanen.info" />
    <meta property="og:description"     content="Hoitamalla hommasi tehokkaasti luot itsellesi vapaa-aikaa tai lisää tuloja – tai sekä että." />
    
    <meta name="twitter:title"          content="Tom Himanen, elämäntapaduunari 2.0" />
    <meta name="twitter:card"           content="summary" />
    <meta name="twitter:url"            content="http://himanen.info" />
    <meta name="twitter:image"          content="<?php echo get_template_directory_uri(); ?>/img/bg.jpg" />
    <meta name="twitter:description"    content="Hoitamalla hommasi tehokkaasti luot itsellesi vapaa-aikaa tai lisää tuloja – tai sekä että." />
    
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">
    
    <title>Tom Himanen, elämäntapaduunari 2.0</title>

    <!-- Bootstrap core CSS -->
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/lib/jasny-bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="http://yandex.st/highlightjs/8.0/styles/default.min.css">
    <script src="http://yandex.st/highlightjs/8.0/highlight.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  </head>

  <body>
    <div id="bg"></div>
  
    <div class="navmenu navmenu-default navmenu-fixed-left offcanvas">
      <a class="navmenu-brand" href="#">Personal Raineri</a>
      <ul class="nav navmenu-nav">
        <li><a onclick="scrollToAnchor('projects');">Projektit</a></li>
        <li><a onclick="scrollToAnchor('cv');">Curriculum Vitae</a></li>
        <li><a onclick="scrollToAnchor('contact');">Yhteystiedot</a></li>
      </ul>
    </div>

    <div class="navbar navbar-default navbar-fixed-top">
      <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".navmenu" data-canvas="body">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="likebutton-placeholder">
        <iframe></iframe>
      </div> 
    </div>

    <!-- Welcomer -->
    <div id="home" class="home">
      <div id="slogan"></div>
    </div>
    
    <!-- Desktop navigation -->
    <div id="desktop-nav" class="pad-section shadow">
      <div class="container">
        <div class="likebutton-placeholder">
          <iframe></iframe>
        </div> 
        <ul class="desktop-nav">
          <?php if(is_home())
          { ?>
            <b style="color: red">!!! SITE UNDER CONSTRUCTION !!! &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
            <li><a onclick="scrollToAnchor('projects');">Projektit</a> |</li>
            <li><a onclick="scrollToAnchor('cv');">Curriculum Vitae</a> |</li>
            <li><a onclick="scrollToAnchor('contact');">Yhteystiedot |</a></li>
            <li><a href="<?php echo home_url(); ?>/category/blog">Blogi</a></li><?php
          } ?>
          <?php if(!is_home())
          { ?>
            <b style="color: red">!!! SITE UNDER CONSTRUCTION !!! &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
            <li><a href="<?php echo home_url(); ?>/category/blog/monarchy-2.0/">Monarchy 2.0 |</a></li>
            <li><a href="<?php echo home_url(); ?>/category/blog/maailma-2.0/">Maailma 2.0 |</a></li>
            <li><a href="<?php echo home_url(); ?>/category/blog/efektiivisyys-2.0/">Efektiivisyys 2.0 |</a></li>
            <li><a href="<?php echo home_url(); ?>/category/blog"><font size="-4">Kaikki |</font></a></li>
            <li><a href="<?php echo home_url(); ?>"><font size="-4">Kuka on Himanen?</font></a></li>
          } ?>
        </ul>
      </div>
    </div>
    
    <?php if(!is_home())
    { ?>
    <!-- Blogi -->
    <div id="services" class="pad-section">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-xs-12">
                  <?php if (have_posts()) : ?>
                  <?php while (have_posts()) : the_post(); ?>
                  <?php get_template_part( 'includes/loop' , 'index'); ?>
                  <?php endwhile; ?>
                  <?php get_template_part( 'includes/pagination'); ?>
                  <?php else : ?>
                  <p><?php _e( 'Kaipaamaasi sivua ei löytynyt.', 'themify' ); ?></p>
                  <?php endif; ?>
          </div>
        </div>
        <hr />
      </div>
    </div><?php
    } 
    else
    { ?>
    
    <!-- Projektit -->
    <div id="services" class="pad-section">
      <div class="container">
        <h1 name="projects">Projektit</h2>
        <div class="row">
          <div class="col-sm-12 col-xs-12">
            <p>Jos minulla on visio, toteutan sen. Usein uusi visio johtaa projektin syntymiseen.
            Osaan projekteista olen osallistunut yrittäjänä, osaan palkollisena ja osaan pro bonona.
            Projektien onnistumisen ytimessä on aina osaava ja motivoitunut tiimi, joka pelaa vahvuuksillaan.</p>
            
            <p>Kesällä 2013 aloitin mentorina Espoon kristillisen koulun avaruustutkimusprojektissa.
            Vuoden 2013&ndash;2014 tutkimusprojektin tavoitteena on kasvattaa sieni ISS-avaruusasemalla
            maan kiertoradalla. Sienen istuttaa, kastelee sekä observoi oppilaiden rakentama ja
            ohjelmoima robotti. Tehtävänäni on opettaa oppilaille tarvittavat teknilliset taidot ja
            tukea ongelmanratkaisussa. Kirjoitan tällä hetkellä avaruustutkimuksen tekemisestä kirjaa.</p>
            
            <p>Kesästä 2013 lähtien arkeeni on kuulunut 
            <a href="http://personalraineri.fi" target="_new">Personal Travis</a> -mobiilisovelluksen 
            kehittäminen. Kesällä 2014 kehitystiimiin liittyi voimaharjoittelun asiantuntija sekä
            kovanaamainen koodari. Suosittelen sovelluksen testaamista, sillä beta-vaiheessa sen
            voi ladata ilmaiseksi Android-puhelimiin.</p>
            
            <p>Menneistä tietoteknisistä projekteista mieleenpainuvimpiin kuuluu Linux From Scratchin
            eli oman Linux-pohjaisen käyttöjärjestelmän rakentaminen Raspberry Pille, joka on 
            luottokortin kokoinen tietokone.</p>
            
            <p>Taloudellisesti merkittävin projektini oli Suomen suurin vappufestari VG,
            joka teki uuden kävijäennätyksensä johtaessani festarin järjestämistä. 
            Musiikkipuolella pitkäaikaisin projektini on raff reggae -bändi 
            <a href="http://triol.it" target="_new">trioLIT,</a> jossa soitan rumpuja.
            trioLIT tosin on enemmän elämäntapa kuin yhtye, joten voidaan puhua projektin sijaan
            prosessista.</p>
          </div>
        </div>
        <hr />
      </div>
    </div>
    
    <!-- Curriculum Vitae -->
    <div id="services" class="pad-section">
      <div class="container">
        <h1 name="cv">Curriculum Vitae</h2>
        <div class="row">
          <div class="col-sm-6 col-xs-12">
            <h3>International Space Station Project Team Mentor</h3>
            <p>Espoo Christian School, Espoo (Aug 2013 –)</p>
          </div>
          <div class="col-sm-6 col-xs-12">
            <h3>Stagiaire to MEP Sari Essayah</h3>
            <p>European Parliament, Brussels (Jun 2013 – Jul 2013)</p>
          </div>
          <div class="col-sm-6 col-xs-12">
            <h3>ICT Teacher, Active Citizenship Teacher</h3>
            <p>Espoo Christian School, Espoo (Aug 2011 –)</p>
          </div>
          <div class="col-sm-6 col-xs-12">
            <h3>Journalist</h3>
            <p>Fida International, Helsinki (Mar 2011 – Aug 2012)</p>
          </div>
          <div class="col-sm-6 col-xs-12">
            <h3>Cook's assistant</h3>
            <p>Espoo Christian School, Espoo (Feb 2012 – Mar 2012)</p>
          </div>
          <div class="col-sm-6 col-xs-12">
            <h3>Caretaker</h3>
            <p>Public Employment Office, Kouvola (Jul 2010 – Dec 2011)</p>
          </div>
          <div class="col-sm-6 col-xs-12">
            <h3>Project Manager</h3>
            <p>VG Festival / GSK ry, Kouvola (Jun 2009 – Jul 2011)</p>
          </div>
          <div class="col-sm-6 col-xs-12">
            <h3>Paperboy</h3>
            <p>Itella Oy, Kouvola (Oct 2007 – Feb 2009)</p>
          </div>
        </div>
        <hr />
      </div>
    </div>
    
    <!-- Yhteystiedot -->
    <div id="services" class="pad-section">
      <div class="container">
        <h1 name="contact">Yhteystiedot</h2>
        <div class="row">
          <div class="col-sm-3 col-xs-6">
            <h3>Twitter</h3>
            </p>@Tom Himanen<p>
          </div>
          <div class="col-sm-3 col-xs-6">
            <h3>IRC</h3>
            </p>Erkkimon @ freenode<p>
          </div>
          <div class="col-sm-3 col-xs-6">
            <h3>Sähköposti</h3>
            <script>
              var azejumo = ['<','t','/','h','c','s','n','i','@','o','"','m','n','r','>','f',':','"','l','@','e','i','i','a','n','m',' ','i','o','n','m','a','t','l','e','m','a','h','l','n',' ','.','"','a','a','o','i','o','>','a','e','.','o','m','n','<','e','"','m','h','a','f','f','s','=','t','=','i'];
              var ujgktvv = [0,16,65,20,34,37,56,44,51,63,32,18,58,4,67,30,15,40,45,19,25,53,11,43,29,42,33,28,17,24,22,55,13,12,5,9,1,3,35,26,2,59,8,66,23,14,60,31,47,10,57,27,49,54,61,64,41,46,50,52,36,62,6,38,7,48,39,21];var wlsjjqf= new Array();for(var i=0;i<ujgktvv.length;i++){wlsjjqf[ujgktvv[i]] = azejumo[i]; }
              for(var i=0;i<wlsjjqf.length;i++){document.write(wlsjjqf[i]);}
            </script>
          </div>
          <div class="col-sm-3 col-xs-6">
            <h3>Github</h3>
            </p>Erkkimon<p>
          </div>
        </div>
        <hr />
      </div>
    </div><?php
    } ?>
    
    <?php wp_footer(); ?>
    
    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/lib/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
    
    <!-- Additional JavaScript -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/lib/iframetracker/jquery.iframetracker-1.3.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/lib/dynamic-like-button-switcher/dynamic-like-button-switcher.js"></script>
    
    <!-- Google Analytics tracking code -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-44992450-1', 'auto');
      ga('send', 'pageview');
    </script>
    
  </body>
</html>