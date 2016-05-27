<?php get_header();
/**
 * 标签页面
 *
 * @package Migong.org
 * @subpackage Ming
 * @since coding 1.0
 */
?>

<div class="row">
  <!-- tag 文章循环 -->
  <?php get_template_part( 'loop', 'tag' ); ?>
  <!-- 底部分页 -->
</div>
<footer>
<?php pagination($query_string); ?>
<?php get_footer(); ?>