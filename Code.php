<?php get_header(); 
/**
 * Template Name:Code
 *
 * @package Migong.org
 * @subpackage Ming
 * @since coding 1.0
 */
?>
<div class="row">
  <?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
  <?php the_content(); ?>
  <?php else : ?>
  <div class="col-xs-12 preview">
    没有找到你想要的页面！
  </div>
  <?php endif; ?>
</div>
<footer>
  <blockquote>
    <p>学习 Canvas 从注释开始，在这里你可以：阅读、修改、创作！</p>
    <footer>示例代码来源于网络！</footer>
  </blockquote>
<?php get_footer(); ?>