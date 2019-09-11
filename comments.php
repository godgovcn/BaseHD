<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php function threadedComments($comments, $options)
{
    ?>

    <li id="<?php $comments->theId(); ?>" class="media">
        <a class="pull-left" href="#">
            <?php $comments->gravatar('40', ''); ?>
        </a>
        <div class="media-body">
            <h5 class="media-heading">
                <?php $comments->author(); ?>
                <small>
                    <a href="<?php $comments->permalink(); ?>"><?php $comments->date('Y-m-d H:i'); ?></a>
                </small>
                &nbsp;
                <small>
                    <i class="icon-share-alt"></i>
                    <?php $comments->reply('回复'); ?>
                </small>
            </h5>
            <?php $comments->content(); ?>
            <?php $comments->threadedComments($options); ?>
        </div>
    </li>

<?php } ?>
<div id="comments">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()) : ?>
        <center>
            <h4><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></h4>
        </center>
        <?php $comments->listComments(); ?>
        <div class="pagination">
            <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
        </div>
    <?php endif; ?>
    <?php if ($this->allow('comment')) : ?>
        <div id="<?php $this->respondId(); ?>" class="respond">
            <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form" class="form-horizontal">
                <div class="control-group">
                    <legend><?php _e('添加新评论'); ?></legend>
                </div>

                <?php if ($this->user->hasLogin()) : ?>
                    <div class="alert alert-success">
                        <?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a> <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a>
                    </div>

                <?php else : ?>
                    <div class="control-group">
                        <label for="author" class="required control-label"><?php _e('称呼'); ?></label>
                        <div class="controls">
                            <input type="text" name="author" id="author" class="span4" value="<?php $this->remember('author'); ?>" required />
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="mail" class="control-label<?php if ($this->options->commentsRequireMail) : ?> required <?php endif; ?>"><?php _e('邮箱'); ?></label>
                        <div class="controls">
                            <input type="email" name="mail" id="mail" class="span4" value="<?php $this->remember('mail'); ?>" <?php if ($this->options->commentsRequireMail) : ?> required<?php endif; ?> />
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="url" class="control-label<?php if ($this->options->commentsRequireURL) : ?> required <?php endif; ?>"><?php _e('网站'); ?></label>
                        <div class="controls">
                            <input type="url" name="url" id="url" class="span4" placeholder="<?php _e('http://'); ?>" value="<?php $this->remember('url'); ?>" <?php if ($this->options->commentsRequireURL) : ?> required<?php endif; ?> />
                        </div>
                    </div>
                <?php endif; ?>

                <div class="control-group">
                    <label for="textarea" class="control-label required"><?php _e('内容'); ?></label>
                    <div class="controls">
                        <textarea rows="8" cols="50" name="text" id="textarea" class="span4" required><?php $this->remember('text'); ?></textarea>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <?php $comments->cancelReply(); ?>
                        <button type="submit" class="btn pull-right"><?php _e('提交评论'); ?></button>
                    </div>
                </div>
            </form>
        </div>
    <?php else : ?>
        <div class="alert">
            <center><strong><?php _e('评论已关闭'); ?></strong></center>
        </div>
    <?php endif; ?>
</div>