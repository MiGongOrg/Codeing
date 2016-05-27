<?php get_header(); ?>
<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
<!-- 主体内容 -->
<!-- code & preview content -->
<div class="row">
  <div class="col-xs-12 preview">
    <div class="previewLeft">
      <iframe id="preview" scrolling="no" frameborder="0" height="100%" width="100%"></iframe>
      <!-- 自定义栏目 使用说明：Source Code -->
      <span class="codeBy" data-toggle="tooltip" data-placement="left" title="Source Code"><a href="<?php $sourcecode = get_post_meta($post->ID, 'sourcecode', true); echo $sourcecode;?>" rel="nofollow" target="_blank" title="Source Code">&lt;/&gt;</a></span>
    </div>
    <div class="previewRight">
      <span class="f11" data-toggle="modal" data-target=".f11Content" title="快捷键">F11</span>
      <textarea id="code">
<?php
    $code = get_post_meta($post->ID, 'code', true);
    echo $code;
?></textarea>
    </div>
    <span class="fullScreen" data-toggle="tooltip" data-placement="bottom" title="全屏"><i></i></span>
  </div>
  <div class="col-xs-12 description">
    <!-- 面包屑导航 -->
    <ol class="breadcrumb">
      <li><?php if(function_exists('cmp_breadcrumbs')) cmp_breadcrumbs();?></li>
    </ol>
    <div class="col-xs-12 articleContent">
      <!-- 日期，评论数 -->
      <div class="row">
          <div class="col-xs-6 text-muted">
            <span class="glyphicon glyphicon-time" aria-hidden="true"> </span> <?php the_time('Y-m-d') ?>
          </div>
          <div class="col-xs-6 text-right text-muted">
            <span class="glyphicon glyphicon-comment" aria-hidden="true"> </span> <?php comments_popup_link('0 条评论', '1 条评论', '% 条评论', '', '评论关闭'); ?><?php edit_post_link('EDIT', '  ', ''); ?>
          </div>
      </div>
      <!-- 文章内容 -->
      <article>
        <h3><?php the_title(); ?></h3>
        <!-- Post Content -->
        <?php the_content(); ?>
        <!-- Post Content End -->
      </article>
      <!-- 上一篇 下一篇 -->
      <nav>
          <ul class="pager">
              <li class="previous">
                  <?php
                    $prev_post = get_previous_post();
                    if (!empty( $prev_post )): ?>
                      <a title="<?php echo $prev_post->post_title; ?>" href="<?php echo get_permalink( $prev_post->ID ); ?>" rel="external nofollow" ><span aria-hidden="true">&larr;</span> Older</a>
                  <?php endif; ?>
              </li>
              <li class="next">
                  <?php
                    $next_post = get_next_post();
                    if (!empty( $next_post )): ?>
                      <a title="<?php echo $next_post->post_title; ?>" href="<?php echo get_permalink( $next_post->ID ); ?>" rel="external nofollow" >Newer <span aria-hidden="true">&rarr;</span></a>
                  <?php endif; ?>
              </li>
          </ul>
      </nav>
      <hr>
      <!-- 分类与标签 -->
      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <span class="text-left"><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span> <?php the_category(); ?> <span class="badge"><?php echo wt_get_category_count(); ?></span></span>
        </div>
        <div class="col-xs-12 col-sm-6 text-right">
          <span class="glyphicon glyphicon-tags" aria-hidden="true"></span> <?php the_tags('<span class="label label-default">', '</span> <span class="label label-default">' , '</span>'); ?>
        </div>
      </div>
      <hr>
      <!-- 评论 -->
      <?php comments_template(); ?>
      <!-- 评论 End -->
      <?php else : ?>
      <div class="col-xs-12">
          没有文章！
      </div>
      <?php endif; ?>
    </div>
    <hr>
    <!-- Modal -->
    <div class="modal fade f11Content" tabindex="-1" role="dialog" aria-labelledby="f11Content">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="col-xs-12 listThree" style="">
            <div class="page-header">
              <h3>编辑模式下的快捷键（兼容 Sublime 快捷键）</h3>
            </div>
            <div class="article">
              <!-- 快捷键 -->
              <?php get_template_part('key'); ?>
            </div>
            <span class="close" aria-label="Close" data-dismiss="modal"></span>
          </div>
        </div>
      </div>
    </div><!-- Modal End -->
  </div>
  </div>
  <hr>
<footer>
    <blockquote>
        <p>学习 Canvas 从注释开始，在这里你可以：阅读、修改、创作！</p>
        <footer>示例代码来源于网络！</footer>
    </blockquote>
<?php get_footer(); ?>