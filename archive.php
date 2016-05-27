<?php get_header(); 
/**
 * Template Name:归档页面
 *
 * @package Migong.org
 * @subpackage Ming
 * @since coding 1.0
 */
?>
<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
<div class="row">
  <div class="col-xs-12">
    <!-- 面包屑导航 -->
    <ol class="breadcrumb">
      <li><?php if(function_exists('cmp_breadcrumbs')) cmp_breadcrumbs();?></li>
    </ol>
    <div class="col-xs-12">
      <article>
        <?php zww_archives_list(); ?>
      </article>
    </div>
    <?php comments_template(); ?>
    <?php else : ?>
      <p>没有找到你想要的页面！</p>
    <?php endif; ?>
  </div>
</div>
<?php get_footer(); ?>