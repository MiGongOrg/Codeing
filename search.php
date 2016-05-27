<?php get_header(); 
/**
 * Template Name:搜索页面
 *
 * @package Migong.org
 * @subpackage Ming
 * @since coding 1.0
 */
?>
<div class="row">
  <?php if ( have_posts() ) : ?>
  <div>
    <?php get_template_part( 'loop', 'search' ); ?>
  </div>
  <?php else : ?>
  <div class="col-xs-12" style="margin-top: 2em;">
    <div class="jumbotron">
      <p class="h1">404</p>
      <p><?php printf( __( '未找到 "%s" 关键字的相关搜索结果', 'migong' ), '<span>' . get_search_query() . '</span>' ); ?></p>
      <p><a class="btn btn-primary btn-lg" href="<?php echo get_option('home'); ?>" role="button">返回首页</a></p>
    </div>
  </div>
  <?php endif; ?>
</div>
<footer>
<?php pagination($query_string); ?>
<?php get_footer(); ?>