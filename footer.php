<footer class="footer">
    <div class="container">
        <section class="row">
            <div class="col-md-12">
                <?php footer_menu(); ?>
            </div>
        </section>
        <section class="row">
            <div class="col-md-12">
                <p class="copyright">Copyright © <?php echo date("Y"); ?> <?php echo get_bloginfo('name'); ?>. All rights reserved.</p>
            </div>
        </section>
    </div>
</footer>

<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bower_dir(); ?>/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="<?php bower_dir(); ?>/lightbox2/dist/js/lightbox.min.js"></script>
<script type="text/javascript" src="<?php js_dir(); ?>/scripts.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-80551765-1', 'auto');
  ga('send', 'pageview');

</script>
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:322824,hjsv:5};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
</script>
</body>
</html>