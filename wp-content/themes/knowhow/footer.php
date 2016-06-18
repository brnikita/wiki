<!-- #footer-widgets -->
<?php if ( is_active_sidebar( 'st_footer_widgets' )) { ?>
<div id="footer-widgets" class="clearfix">
<!-- .ht-container -->
<div class="ht-container">

<div class="row stacked"><?php dynamic_sidebar( 'st_footer_widgets' ); ?></div>

</div>
</div>
<?php } ?>
<!-- /#footer-widgets -->

<!-- #site-footer -->
<footer id="site-footer" class="clearfix" role="contentinfo">
<div class="ht-container">

  <?php if ( has_nav_menu( 'footer-nav' ) ) { /* if menu location 'footer-nav' exists then use custom menu */ ?>
  <nav id="footer-nav" role="navigation">
    <?php wp_nav_menu( array('theme_location' => 'footer-nav', 'depth' => 1, 'container' => false, 'menu_class' => 'nav-footer clearfix' )); ?>
  </nav>
  <?php } ?>


  <small id="copyright">
  <?php if (of_get_option('st_footer_copyright')) { ?>
  <?php echo of_get_option('st_footer_copyright'); ?>
  <?php } ?>
  </small>

</div>
<!-- /.ht-container -->
</footer>
<!-- /#site-footer -->

<!-- /#site-container -->
</div>

<?php wp_footer(); ?>
<?php $currentLangCat = qtrans_getLanguage(); ?>
</body>
<script type="text/javascript">
  jQuery(document).ready(function () {
    var loc = '<?php echo $currentLangCat ?>';
    if (loc == 'ru') {
      var newMonth;
      var monthT;
      jQuery('#sidebar .widget_archive ul li').each(function( index ) {
        monthT = jQuery(this).find('a');
        monthT = monthT.text();
        var monthArr = monthT.split(' ');
        switch (monthArr[0]) {
           case 'January':
            newMonth = 'Январь';
            break;
           case 'February':
             newMonth = 'Февраль';
             break;
           case 'March':
             newMonth = 'Март';
             break;
           case 'April':
             newMonth = 'Апрель';
             break;
           case 'May':
             newMonth = 'Май';
             break;
           case 'June':
             newMonth = 'Июнь';
             break;
           case 'July':
             newMonth = 'Июль';
             break;
           case 'August':
             newMonth = 'Август';
             break;
           case 'September':
             newMonth = 'Сентябрь';
             break;
           case 'October':
             newMonth = 'Октябрь';
             break;
           case 'November':
             newMonth = 'Ноябрь';
             break;
           case 'December':
             newMonth = 'Декабрь';
             break;
        }
        jQuery(this).find('a').html(newMonth + ' ' + monthArr[1]);
      });

    }
  });
</script>
</html>
