<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php Typecho\Widget::widget(Widget\Stat::class)->to($stat); ?>
<div class="toggle-right-sidebar toggle sidebar-toggle">
    <span class="toggle-line"></span>
    <span class="toggle-line"></span>
    <span class="toggle-line"></span>
</div>

<div class="right-sidebar" id="secondary" role="complementary">
    <div class="site-overview-wrap sidebar-panel right-sidebar-panel">
        <div class="site-author animated">
            <img class="site-author-image" src="<?php $this->options->logo(); ?>" loading="lazy">
            <div class="site-author-name"><?php $this->options->title(); ?></div>
            <div class="site-description">
            <?php if ($this->options->description): $this->options->description(); ?>
            <?php else: $this->options->summary(); ?>
            <?php endif ?>
            </div>
        </div>
        <div class="site-state-wrap animated">
            <nav class="site-state">
                <div class="site-state-item site-state-posts">
                    <a>
                        <span class="site-state-item-count"><?php $stat->publishedPostsNum(); ?></span>
                        <span class="site-state-item-name">日志</span>
                    </a>
                </div>
                <div class="site-state-item site-state-categories">
                    <a>
                        <span class="site-state-item-count"><?php $stat->categoriesNum(); ?></span>
                        <span class="site-state-item-name">分类</span>
                    </a>
                </div>
                <div class="site-state-item site-state-tags">
                    <a>
                        <span class="site-state-item-count"><?php $stat->tagsNum(); ?></span>
                        <span class="site-state-item-name">标签</span>
                    </a>
                </div>
            </nav>
        </div>
        <div class="links-of-author animated">
            <?php if ($this->options->socialTwitter): ?>
            <span class="links-of-author-item">
                <a href="<?php $this->options->socialTwitter(); ?>" target="_blank" class="exturl" title="X → <?php $this->options->socialTwitter(); ?>">
                    <i class="iconfont">&#xe88a;</i>
                </a>
            </span>
            <?php endif ?>
            <?php if ($this->options->socialEMailTo): ?>
            <span class="links-of-author-item">
                <a href="mailto:<?php $this->options->socialEMailTo(); ?>" target="_blank" class="exturl" title="E-Mail → mailto:<?php $this->options->socialEMailTo(); ?>">
                    <i class="iconfont">&#xe600;</i>
                </a>
            </span>
            <?php endif ?>
            <?php if ($this->options->socialWeibo): ?>
            <span class="links-of-author-item">
                <a href="<?php $this->options->socialWeibo(); ?>" target="_blank" class="exturl" title="Weibo → <?php $this->options->socialWeibo(); ?>">
                    <i class="iconfont">&#xe88b;</i>
                </a>
            </span>
            <?php endif ?>
            <?php if ($this->options->socialGitHub): ?>
            <span class="links-of-author-item">
                <a href="<?php $this->options->socialGitHub(); ?>" target="_blank" class="exturl" title="Github → <?php $this->options->socialGitHub(); ?>">
                    <i class="iconfont">&#xe888;</i>
                </a>
            </span>
            <?php endif ?>
            <?php if ($this->options->socialYouTube): ?>
            <span class="links-of-author-item">
                <a href="<?php $this->options->socialYouTube(); ?>" target="_blank" class="exturl" title="Youtube → <?php $this->options->socialYouTube(); ?>">
                    <i class="iconfont">&#xe639;</i>
                </a>
            </span>
            <?php endif ?>
            <?php if ($this->options->socialBilibili): ?>
            <span class="links-of-author-item">
                <a href="<?php $this->options->socialBilibili(); ?>" target="_blank" class="exturl" title="Bilibili → <?php $this->options->socialBilibili(); ?>">
                    <i class="iconfont">&#xe623;</i>
                </a>
            </span>
            <?php endif ?>
            <?php if ($this->options->socialFacebook): ?>
            <span class="links-of-author-item">
                <a href="<?php $this->options->socialFacebook(); ?>" target="_blank" class="exturl" title="Facebook → <?php $this->options->socialFacebook(); ?>">
                    <i class="iconfont">&#xe621;</i>
                </a>
            </span>
            <?php endif ?>
        </div>
        <div class="cc-license animated">
            <a href="https://creativecommons.org/licenses/by-nc-sa/4.0/" target="_blank" class="exturl cc-opacity" title="">
                <img src="https://cdnjs.cloudflare.com/ajax/libs/creativecommons-vocabulary/2020.11.3/assets/license_badges/small/by_nc_sa.svg" alt="Creative Commons" loading="lazy">
            </a>
        </div>
    </div>
</div>
<!-- end #sidebar -->
