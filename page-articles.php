<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;
/**
 * 归档页面
 *
 * @package custom
 */
?>

<?php $this->need('header.php'); ?>
<section class="archive-section content-wrap">
    <main class="main main-content">
      <div class="total-posts">很好! 目前共计<span style="font-weight:600;margin:0 3px;">
        <?php Typecho_Widget::widget('Widget_Stat')->to($stat)->publishedPostsNum(); ?></span>篇文章，继续加油呀~
      </div>
      <article id="arc" class="post">
        <div id="archives" class="archive-list">
          <?php  $this->widget('Widget_Contents_Post_Recent', 'pageSize=100000')->to($archives);
            $year=0; $mon=0; $i=0; $j=0;$output="";
            while($archives->next()):
                $year_tmp = date('Y',$archives->created);
                $mon_tmp = date('m',$archives->created);
                $y=$year; $m=$mon;
                if ($year != $year_tmp) {
                  $year = $year_tmp;
                  $output .= '<div class="archive-year archive-item">'. $year .'</div>';
                }
                $output .= '<div class="archive-item"><a class="meta" href="'.$archives->permalink .'"><time>'.date('m/d',$archives->created).'</time>'. $archives->title .'</a></div>';
            endwhile;
            echo $output;
          ?>
        </div>
      </article>
    </main>
</section>
<?php $this->need('footer.php'); ?>
