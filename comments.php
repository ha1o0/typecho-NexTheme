<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="comments">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
        <h3><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></h3>

        <?php $comments->listComments(); ?>

        <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>

    <?php endif; ?>

    <?php if ($this->allow('comment')): ?>
        <div id="<?php $this->respondId(); ?>" class="respond">
            <div class="cancel-comment-reply">
                <?php $comments->cancelReply(); ?>
            </div>

            <h3 id="response"><?php _e('添加新评论'); ?></h3>
            <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
                <div class="comment-content-container">
                    <label for="textarea" class="required"><?php _e('内容'); ?></label>
                    <textarea rows="8" cols="50" name="text" id="textarea" class="textarea"
                              required><?php $this->remember('text'); ?></textarea>
                </div>
                <div class="comment-options-container">
                    <?php if ($this->user->hasLogin()): ?>
                        <div class="login-info-container"><?php _e('登录身份: '); ?><a
                                href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a
                                href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a>
                        </div>
                    <?php else: ?>
                        <div class="comment-author-info-container">
                            <div>
                                <label for="author" class="required"><?php _e('称呼'); ?></label>
                                <input type="text" name="author" id="author" class="text"
                                    value="<?php $this->remember('author'); ?>" required/>
                            </div>
                            <div>
                                <label
                                    for="mail"<?php if ($this->options->commentsRequireMail): ?> class="required"<?php endif; ?>><?php _e('Email'); ?></label>
                                <input type="email" name="mail" id="mail" class="text"
                                    value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
                            </div>
                            <div>
                                <label
                                    for="url"<?php if ($this->options->commentsRequireURL): ?> class="required"<?php endif; ?>><?php _e('网站'); ?></label>
                                <input type="url" name="url" id="url" class="text" placeholder="<?php _e('http://'); ?>"
                                    value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
                            </div>
                        </div>
                        
                    <?php endif; ?>
                    
                    <div class="submit-comment-container">
                        <button type="submit" class="submit submit-comment"><?php _e('提交评论'); ?></button>
                    </div>
                </div>
                
            </form>
        </div>
    <?php else: ?>
        <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>
</div>
