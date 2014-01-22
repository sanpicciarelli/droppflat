    <section class="blank">
        <nav class="navigation">
            <ul class="pagination">
                <li class="active"><a href="<?php echo($blog_url); ?>"> <i class="fa fa-angle-left"></i> <span class="sr-only"> Back to home</span></a></li>
             </ul>
                <br class="clear">
        </nav>
    </section>  

<section class="<?php echo($post_status); ?>">
    <h1><?php echo ($post_title); ?></h1>
    <p>written by <?php echo($post_author); ?>, tagged in <a href="<?php echo($post_category_link); ?>"><?php echo ($post_category); ?></a></p>
	<?php echo utf8_decode(($post_content)); ?>   
    <br>
    <?php
    $banners = array(
        array('http://www.amazon.com/s/?_encoding=UTF8&camp=1789&creative=9325&field-keywords=kindle&linkCode=ur2&rh=n%3A172282%2Ck%3Akindle&tag=abr4xasorg-20&url=search-alias%3Delectronics', 'static/banner-amazon_kindle.jpg'),
        array('http://www.amazon.com/gift-cards/b/?_encoding=UTF8&camp=1789&creative=9325&linkCode=ur2&node=2238192011&tag=abr4xasorg-20', 'static/amazoncom_gift_card.jpg')
    );
    $rand = mt_rand(0, count($banners)-1);
    echo '<a href="'.$banners[$rand][0].'" target="_blank"><img src="'.$banners[$rand][1].'" style="display: table; margin: 0 auto;" /></a>';      
        
    ?>
    <br>
                <div class="progress-bar progress-bar-small">
                        <div class="progress-bar-99">
                        </div>
                </div>    
    <br>
    <!-- Place this tag where you want the +1 button to render. -->
    <div class="g-plusone"></div>
</section>
<section>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- bloio -->
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-7127443823639155"
         data-ad-slot="9038513565"
         data-ad-format="auto"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
</section>
    <section class="blank">
        <nav class="navigation">
            <ul class="pagination">
                <li class="active"><a href="<?php echo($blog_url); ?>"> <i class="fa fa-angle-left"></i> <span class="sr-only"> Back to home</span></a></li>
             </ul>
                <br class="clear">
        </nav>
    </section> 
<section>
 <div id="disqus_thread"></div>
    <script type="text/javascript">
        var disqus_shortname = 'elblogdeabr4xas';
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();     
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
    

</section>