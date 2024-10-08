<?php
/**
 * NexTheme for Typecho
 *
 * @package NexTheme
 * @author ha1o0
 * @version 1.0
 * @link https://github.com/ha1o0
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div class="main" id="main" role="main">
    <?php while ($this->next()): ?>
        <article class="post-list-item fade-in-move post" itemscope itemtype="http://schema.org/BlogPosting">
            <h2 class="post-title" itemprop="name headline">
              <a class="text-with-animation" itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
            </h2>
            <ul class="post-meta">
                <li itemprop="author" itemscope itemtype="http://schema.org/Person">
                    <i class="author-icon iconfont">&#xe7ae;</i>
                    <a itemprop="name" href="<?php $this->author->permalink(); ?>"
                        rel="author"><?php $this->author(); ?>
                    </a>
                </li>
                <li>
                    <i class="author-icon iconfont">&#xe646;</i>
                    <time class="time" datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?>
                    </time>
                </li>
                <li><i class="author-icon iconfont">&#xe85c;</i><?php $this->category(','); ?></li>
                <li itemprop="interactionCount">
                    <a itemprop="discussionUrl"
                       href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a>
                </li>
            </ul>
            <div class="post-content" itemprop="articleBody">
                <p><?php $this->excerpt('180', '...'); ?></p>
            </div>
            <div class="post-button">
                <a class="btn" href="<?php $this->permalink() ?>">阅读全文 »</a>
            </div>
        </article>
    <?php endwhile; ?>

    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div><!-- end #main-->

<?php $this->need('footer.php'); ?>
