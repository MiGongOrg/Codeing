<?php

  //开启自定义主题菜单
  if (function_exists('register_nav_menus')) {
    register_nav_menus( array(
      'header_menu' => __('topNav'),
      'right_menu' => 'rightNav'
    ));
  }
  // register_nav_menus();

  //评论function
  function aurelius_comment($comment, $args, $depth){
    $GLOBALS['comment'] = $comment; ?>
    <li class="comment" id="li-comment-<?php comment_ID(); ?>">
      <div class="col-xs-12">
      <!-- 头像 -->
      <div class="col-xs-12 col-sm-2 text-center">
        <?php if (function_exists('get_avatar') && get_option('show_avatars')) { echo get_avatar($comment, 27); } ?>
        <!-- 评论者名称 -->
        <p><?php printf(__('%s'), get_comment_author_link()); ?></p>
      </div>

      <div class="col-xs-12 col-sm-10" id="comment-<?php comment_ID(); ?>">
        <!-- 评论内容 -->
        <p>
          <?php if ($comment->comment_approved == '0') : ?>
          <em>你的评论正在审核，稍后会显示出来！</em><br />
          <?php endif; ?>
          <?php comment_text(); ?>
        </p>
        <!-- 评论时间 -->
        <p>
          <?php echo get_comment_time('Y-m-d H:i'); ?> <?php comment_reply_link(array_merge( $args, array('reply_text' => '回复','depth' => $depth, 'max_depth' => $args['max_depth']))) ?>&nbsp;&nbsp;&nbsp;<?php edit_comment_link('修改'); ?>
        </p>
      </div>
    </div>
  <?php }

  /*底部分页*/

  function pagination($query_string){
    global $posts_per_page, $paged;
      $my_query = new WP_Query($query_string ."&posts_per_page=-1");
      $total_posts = $my_query->post_count;
    if(empty($paged))$paged = 1;
      $prev = $paged - 1;
      $next = $paged + 1;
      $range = 3; // only edit this if you want to show more page-links
      $showitems = ($range * 2)+1;
      $pages = ceil($total_posts/$posts_per_page);
    if(1 != $pages){
      echo "<nav><ul class='pagination'>";
      echo ($paged > 2 && $paged+$range+1 > $pages && $showitems < $pages)? "<li><a href='".get_pagenum_link(1)."' rel='nofollow'>最前</a></li>":"";
      echo ($paged > 1 && $showitems < $pages)? "<li><a href='".get_pagenum_link($prev)."' aria-label='Previous' rel='nofollow'><span aria-hidden='true'>&laquo;</span></a></li>":"";

    for ($i=1; $i <= $pages; $i++){
    if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
      echo ($paged == $i)? "<li class='active'><a href='#'>".$i."</a></li>":"<li><a href='".get_pagenum_link($i)."' class='inactive' rel='nofollow'>".$i."</a></li>";
      }
    }
    echo ($paged < $pages && $showitems < $pages) ? "<li><a href='".get_pagenum_link($next)."' aria-label='Next' rel='nofollow'><span aria-hidden='true'>&raquo;</span></a></li>" :"";
    echo ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) ? "<li><a href='".get_pagenum_link($pages)."' rel='nofollow'>最后</a></li>":"";
    echo "</ul></nav>\n";
    }
  }
  /**
  * WordPress 添加面包屑导航 
  * http://www.wpdaxue.com/wordpress-add-a-breadcrumb.html
  */
  function cmp_breadcrumbs() {
    $delimiter = '&nbsp / &nbsp'; // 分隔符
    $before = '<span class="current">'; // 在当前链接前插入
    $after = '</span>'; // 在当前链接后插入
    if ( !is_home() && !is_front_page() || is_paged() ) {
      echo '<div itemscope itemtype="" id="crumbs">'.__( '' , 'cmp' );
      global $post;
      $homeLink = home_url();
      echo ' <a itemprop="breadcrumb" href="' . $homeLink . '">' . __( 'Home' , 'cmp' ) . '</a> ' . $delimiter . ' ';
      if ( is_category() ) { // 分类 存档
        global $wp_query;
        $cat_obj = $wp_query->get_queried_object();
        $thisCat = $cat_obj->term_id;
        $thisCat = get_category($thisCat);
        $parentCat = get_category($thisCat->parent);
        if ($thisCat->parent != 0){
            $cat_code = get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' ');
            echo $cat_code = str_replace ('<a','<a itemprop="breadcrumb"', $cat_code );
        }
        echo $before . '' . single_cat_title('', false) . '' . $after;
      } elseif ( is_day() ) { // 天 存档
        echo '<a itemprop="breadcrumb" href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
        echo '<a itemprop="breadcrumb"  href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
        echo $before . get_the_time('d') . $after;
      } elseif ( is_month() ) { // 月 存档
        echo '<a itemprop="breadcrumb" href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
        echo $before . get_the_time('F') . $after;
      } elseif ( is_year() ) { // 年 存档
        echo $before . get_the_time('Y') . $after;
      } elseif ( is_single() && !is_attachment() ) { // 文章
          if ( get_post_type() != 'post' ) { // 自定义文章类型
            $post_type = get_post_type_object(get_post_type());
            $slug = $post_type->rewrite;
            echo '<a itemprop="breadcrumb" href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a> ' . $delimiter . ' ';
            echo $before . get_the_title() . $after;
          } else { // 文章 post
            $cat = get_the_category(); $cat = $cat[0];
            $cat_code = get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
            echo $cat_code = str_replace ('<a','<a itemprop="breadcrumb"', $cat_code );
            echo $before . get_the_title() . $after;
          }
      } elseif ( !is_single() && !is_page() && get_post_type() != 'post' ) {
        $post_type = get_post_type_object(get_post_type());
        echo $before . $post_type->labels->singular_name . $after;
      } elseif ( is_attachment() ) { // 附件
        $parent = get_post($post->post_parent);
        $cat = get_the_category($parent->ID); $cat = $cat[0];
        echo '<a itemprop="breadcrumb" href="' . get_permalink($parent) . '">' . $parent->post_title . '</a> ' . $delimiter . ' ';
        echo $before . get_the_title() . $after;
      } elseif ( is_page() && !$post->post_parent ) { // 页面
        echo $before . get_the_title() . $after;
      } elseif ( is_page() && $post->post_parent ) { // 父级页面
        $parent_id  = $post->post_parent;
        $breadcrumbs = array();
        while ($parent_id) {
            $page = get_page($parent_id);
            $breadcrumbs[] = '<a itemprop="breadcrumb" href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
            $parent_id  = $page->post_parent;
        }
        $breadcrumbs = array_reverse($breadcrumbs);
        foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
        echo $before . get_the_title() . $after;
      } elseif ( is_search() ) { // 搜索结果
        echo $before ;
        printf( __( 'Search Results for: %s', 'cmp' ),  get_search_query() );
        echo  $after;
      } elseif ( is_tag() ) { //标签 存档
        echo $before;
        printf( __( 'Tag Archives: %s', 'cmp' ), single_tag_title( '', false ) );
        echo  $after;
      } elseif ( is_author() ) { // 作者存档
        global $author;
        $userdata = get_userdata($author);
        echo $before ;
        printf( __( 'Author Archives: %s', 'cmp' ),  $userdata->display_name );
        echo  $after;
      } elseif ( is_404() ) { // 404 页面
        echo $before;
        _e( 'Not Found', 'cmp' );
        echo  $after;
      }

      if ( get_query_var('paged') ) { // 分页
        if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() )
          echo sprintf( __( '( Page %s )', 'cmp' ), get_query_var('paged') );
      }
      echo '</div>';
    }
  }
  //gravatar 头像缓存

  function get_ssl_avatar($avatar) {
    $avatar = preg_replace('/.*\/avatar\/(.*)\?s=([\d]+)&.*/','<img src="https://secure.gravatar.com/avatar/$1?s=$2" class="avatar avatar-$2" height="$2" width="$2">',$avatar);
    return $avatar;
  }
  add_filter('get_avatar', 'get_ssl_avatar');


  function clear_zal_cache() {
    update_option('zww_archives_list', ''); // 清空 zww_archives_list
  }

  add_action('save_post', 'clear_zal_cache'); // 新发表文章/修改文章时


  //分类数量，使用方法：http://www.ludou.org/wordpress-get-category-count.html
  function wt_get_category_count($input = '') {
    global $wpdb;
    if($input == '') {
      $category = get_the_category();
      return $category[0]->category_count;
    }
    elseif(is_numeric($input)) {
      $SQL = "SELECT $wpdb->term_taxonomy.count FROM $wpdb->terms, $wpdb->term_taxonomy WHERE $wpdb->terms.term_id=$wpdb->term_taxonomy.term_id AND $wpdb->term_taxonomy.term_id=$input";
      return $wpdb->get_var($SQL);
    }
    else {
      $SQL = "SELECT $wpdb->term_taxonomy.count FROM $wpdb->terms, $wpdb->term_taxonomy WHERE $wpdb->terms.term_id=$wpdb->term_taxonomy.term_id AND $wpdb->terms.slug='$input'";
      return $wpdb->get_var($SQL);
    }
  }
?>