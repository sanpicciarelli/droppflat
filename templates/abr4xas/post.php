    <section class="blank">
        <nav class="navigation">
            <ul class="pagination">
                <li class="active"><a href="<?php echo($blog_url); ?>"> <i class="icon-large icon-angle-left"></i> <span class="sr-only"> Back to home</span></a></li>
             </ul>
                <br class="clear">
        </nav>
    </section>  

<section class="<?php echo($post_status); ?>">
    <h1><?php echo($post_title); ?></h1>
    <p>Written by <?php echo($post_author); ?> @ <a href="<?php echo($post_category_link); ?>"><?php echo($post_category); ?></a></p>
	<?php echo($post_content); ?>

    
    
    
<a class="button button-small" href="<?php echo($blog_url); ?>">
      Back to home
</a>
    
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