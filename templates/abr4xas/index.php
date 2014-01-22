<!doctype html>
<html lang="en" itemscope itemtype="http://schema.org/Blog">
<head>
	<meta charset="utf-8" />
	<title><?php echo utf8_decode(($page_title)); ?> | El blog de abr4xas</title>
    <meta name="author" content="ángel cruz" />
    <?php echo($page_meta); ?>
	<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;"> 
    <link rel="author" href="https://plus.google.com/+ángelcruzj"/>
    <link rel="stylesheet" href="<?php echo($template_dir_url); ?>stylesheets/style.min.css">

    <?php get_header(); ?>   
</head>

<body>
	<section class="blank"></section>
	<section class="blank">
	<?php if ($is_home){ ?>
		<div class="flash success">
            <h1>El blog de abr4xas</h1>
		</div>
	</section>        
        
	<?php }else{ ?>	
		<div class="flash success">
<?php
    $banners = array(
        array('http://www.amazon.com/s/?_encoding=UTF8&camp=1789&creative=9325&field-keywords=kindle&linkCode=ur2&rh=n%3A172282%2Ck%3Akindle&tag=abr4xasorg-20&url=search-alias%3Delectronics', 'static/banner-amazon_kindle.jpg'),
        array('http://www.amazon.com/gift-cards/b/?_encoding=UTF8&camp=1789&creative=9325&linkCode=ur2&node=2238192011&tag=abr4xasorg-20', 'static/amazoncom_gift_card.jpg'),
        array('http://amzn.to/KsLzB7', 'static/bestselling-penny_728x90._V214810979_.jpg')
    );
    $rand = mt_rand(0, count($banners)-1);
    echo '<a href="'.$banners[$rand][0].'" target="_blank"><img src="'.$banners[$rand][1].'" class="amazon"/></a>';
?>
		</div>
		<?php } ?>	
	</section>    

        
        <?php echo($content); ?>
    
        <section class="blank">
                <div class="flash">
                        <p><a href="http://creativecommons.org/licenses/by-nc-sa/3.0/deed.es_ES" target="_blank">CC 3.0 (by-nc-sa)</a> <i class="fa fa-external-link"></i> You should follow me on: <a href="http://twitter.com/abr4xas" target="_blank"><i class="fa fa-twitter"></i></a> <a href="http://github.com/abr4xas" target="_blank"><i class="fa fa-github-alt"></i></a> <a href="<?php echo BLOG_URL; ?>rss" target="_blank"><i class="fa fa-rss"></i></a> <a href="https://plus.google.com/+%C3%A1br4xasOrg" target="_blank" rel="publisher"><i class="fa fa-google-plus"></i></a> With <i class="fa fa-heart"></i> <a href="https://github.com/dennisschipper/Flatby" target="_blank">Flatby</a> &amp; <a href="http://dropplets.com/" target="_blank" >Dropplets</a></p>
                </div>
        </section>    
        <?php // get_footer(); ?> 

    <script type="text/javascript">
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
      (function() {
        var po = document.createElement("script"); po.type = "text/javascript"; po.async = true;
        po.src = "https://apis.google.com/js/plusone.js?publisherid=114421218709488512484";
        var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(po, s);
      })();      
	</script> 
</body>
</html>