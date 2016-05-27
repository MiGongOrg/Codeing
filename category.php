<?php get_header(); 
/**
 * Template Name:分类页面
 *
 * @package Migong.org
 * @subpackage Ming
 * @since coding 1.0
 */
?>

<div class="row">
  <!-- 分类文章循环 -->
  <?php get_template_part( 'loop', 'category' ); ?>
  <!-- 底部分页 -->
</div>
<footer>
<?php pagination($query_string); ?>
<?php get_footer(); ?>