<!doctype html>
<html lang="en" manifest="manifest.appcache" itemscope itemtype="http://schema.org/Blog">
<head>
	<meta charset="utf-8" />
	<title><?php echo($page_title); ?> | El blog de abr4xas</title>
    <meta name="author" content="ángel cruz" />
    <?php echo($page_meta); ?>
	<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
    <link rel="author" href="https://plus.google.com/+ángelcruzj"/>
	<link rel="stylesheet" href="<?php echo($template_dir_url); ?>stylesheets/screen.css">
	<link rel="stylesheet" href="<?php echo($template_dir_url); ?>stylesheets/fonts.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="http://yandex.st/highlightjs/7.5/styles/github.min.css">
    <?php get_header(); ?>   
	<script src="http://yandex.st/highlightjs/7.5/highlight.min.js"></script>
	<script>hljs.initHighlightingOnLoad();</script>
    <script type="text/javascript">
      (function() {
        var po = document.createElement("script"); po.type = "text/javascript"; po.async = true;
        po.src = "https://apis.google.com/js/plusone.js?publisherid=114421218709488512484";
        var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(po, s);
      })();
    </script>    
</head>

<body>
    <div id="fb-root"></div>
	<section class="blank"></section>
	<section class="blank">
	<?php if ($is_home){ ?>
		<div class="flash">
            <h1>El blog de abr4xas</h1>
		</div>
	<?php }else{ ?>	
		<div class="flash">
             <h1><?php echo($page_title); ?> | El blog de abr4xas</h1>
		</div>
		<?php } ?>	
	</section>    
  
<?php if($is_home) { ?>

<?php 
	$nav =   $_SERVER["HTTP_USER_AGENT"];
 	if ($nav === 'Mozilla/5.0 (Mobile; rv:18.0) Gecko/18.0 Firefox/18.0') { ?>
    <section class="blank">
        <div class="flash error">
                <h1><i class="fa fa-bell-o"></i> Notice:</h1>
                <p>APP de la semana...</p>
                <p>¿Te gusta el Drum & bass? Esta app es para ti!! Dale clic en el boton de abajo
                para que bajes e instales esta interesante app en tu celular!! <a href="https://marketplace.firefox.com/app/dnb-player" target="_blank" class="button button-small">Get it now</a>
                </p>
        </div>
    </section>
<?php   }else{	?>
	<section class="blank">
		 <div class="flash error">
				<h1 style="text-align: center;">You should follow me on: <a href="http://twitter.com/abr4xas" target="_blank"><i class="fa fa-twitter"></i></a> <a href="http://github.com/abr4xas" target="_blank"><i class="fa fa-github-alt"></i></a> <a href="<?php echo BLOG_URL; ?>rss" target="_blank"><i class="fa fa-rss"></i></a> <a href="https://plus.google.com/+%C3%A1br4xasOrg" target="_blank" rel="publisher"><i class="fa fa-google-plus"></i></a></h1>
		</div>
	</section>
	<?php } ?>	
        <?php } // este es del is_home?>
        
        <?php echo($content); ?>
    
        <section class="blank">
                <div class="flash">
                        <p><a href="http://creativecommons.org/licenses/by-nc-sa/3.0/deed.es_ES" target="_blank">CC 3.0 (by-nc-sa)</a> <i class="fa fa-external-link"></i> You should follow me on: <a href="http://twitter.com/abr4xas" target="_blank"><i class="fa fa-twitter"></i></a> <a href="http://github.com/abr4xas" target="_blank"><i class="fa fa-github-alt"></i></a> <a href="<?php echo BLOG_URL; ?>rss" target="_blank"><i class="fa fa-rss"></i></a> <a href="https://plus.google.com/+%C3%A1br4xasOrg" target="_blank" rel="publisher"><i class="fa fa-google-plus"></i></a> With <i class="fa fa-heart"></i> <a href="https://github.com/dennisschipper/Flatby" target="_blank">Flatby</a> &amp; <a href="http://dropplets.com/" target="_blank" >Dropplets</a></p>
                </div>
        </section>    
        <?php // get_footer(); ?> 
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	  ga('create', 'UA-18333188-1', 'abr4xas.org');
	  ga('send', 'pageview');
        
        // +1 button tag
      (function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        po.src = 'https://apis.google.com/js/platform.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
      })();   
        // fb button
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));        
	</script>    

    
    
</body>
</html>