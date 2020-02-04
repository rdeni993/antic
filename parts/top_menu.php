<?php 

 /**
 * =============================================================
 * =============================================================
 * Create Top Navigation Menu
 * =============================================================
 * =============================================================
 * 
 */

?>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
<a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<!-- This is menu controlled from WP ADMIN as Primary Menu -->

<?php
wp_nav_menu([
  'menu'            => 'primary_menu',
  'container'       => 'div',
  'container_id'    => 'bs4navbar',
  'container_class' => 'collapse navbar-collapse',
  'menu_id'         => false,
  'menu_class'      => 'navbar-nav mr-auto',
  'depth'           => 2,
  'fallback_cb'     => 'bs4navwalker::fallback',
  'walker'          => new bs4navwalker()
]);
?>

<!-- This is a search box -->
<?php get_search_form(); ?>

</nav>