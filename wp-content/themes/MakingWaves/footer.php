<?php wp_footer(); ?>

  <!-- App -->
  <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/app.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/vendor/rem.min.js"></script>

  <!-- Google Analytics -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-53067321-1', 'auto');
    ga('send', 'pageview');

  </script>
</body>
</html>