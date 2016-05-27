<?php
/**
 * 主循环程序文件是用于项目显示的，例如文章，分类，标签，归档乃至是搜索结果。
 * @package migong.org
 * @subpackage Ming
 * @since coding 1.0
 */
?>

<?php while ( have_posts() ) : the_post(); ?>
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
<div class="col-xs-12">
  <div class="page-header">
    <!-- title -->
    <h2>
      <a href="<?php the_permalink(); ?>" rel="bookmark">
        <?php
          $title = get_the_title();
          $trimmed_title = wp_trim_words( $title, 30);
          echo $trimmed_title;
        ?>
      </a>
      <small><?php the_category(); ?> <span class="badge"><?php echo wt_get_category_count(); ?></span></small>
    </h2>
    <!-- tags -->
    <p class="tags">
      <?php the_tags('<span class="label label-default tagsColor">', '</span> <span class="label label-default tagsColor">' , '</span>'); ?>
    </p>
  </div>
  <div class="article">
    <!-- Post Content -->
    <?php the_content(); ?>
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
<?php endwhile; // End the loop. Whew. ?>