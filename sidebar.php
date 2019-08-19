<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="span3 offset1" role="complementary">
  <div class="well">
    <ul class="nav nav-list">
      <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentPosts', $this->options->sidebarBlock)) : ?>
      <li class="nav-header"> <?php _e('最新文章'); ?></li>
      <?php $this->widget('Widget_Contents_Post_Recent')
          ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
      <?php endif; ?>

      <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentComments', $this->options->sidebarBlock)) : ?>
      <li class="divider"></li>
      <li class="nav-header"> <?php _e('最近回复'); ?></li>
      <?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
      <?php while ($comments->next()) : ?>
      <li>
        <a href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?>: <?php $comments->excerpt(20, '...'); ?></a>
      </li>
      <?php endwhile; ?>
      <?php endif; ?>

      <?php if (!empty($this->options->sidebarBlock) && in_array('ShowCategory', $this->options->sidebarBlock)) : ?>
      <li class="divider"></li>
      <li class="nav-header"> <?php _e('分类'); ?></li>

      <?php $this->widget('Widget_Metas_Category_List')
          ->parse('<li><a href="{permalink}">{name}</a></li>'); ?>
      <?php endif; ?>

      <?php if (!empty($this->options->sidebarBlock) && in_array('ShowArchive', $this->options->sidebarBlock)) : ?>
      <li class="divider"></li>
      <li class="nav-header"> <?php _e('归档'); ?></li>
      <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')
          ->parse('<li><a href="{permalink}">{date}</a></li>'); ?>
      <?php endif; ?>

      <?php if (!empty($this->options->sidebarBlock) && in_array('ShowOther', $this->options->sidebarBlock)) : ?>
      <li class="divider"></li>
      <li class="nav-header"> <?php _e('其它'); ?></li>
      <?php if ($this->user->hasLogin()) : ?>
      <li class="last"><a href="<?php $this->options->adminUrl(); ?>"><?php _e('进入后台'); ?> (<?php $this->user->screenName(); ?>)</a></li>
      <li><a href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出'); ?></a></li>
      <?php else : ?>
      <li class="last"><a href="<?php $this->options->adminUrl('login.php'); ?>"><?php _e('登录'); ?></a></li>
      <?php endif; ?>
      <li><a href="<?php $this->options->feedUrl(); ?>"><?php _e('文章 RSS'); ?></a></li>
      <li><a href="<?php $this->options->commentsFeedUrl(); ?>"><?php _e('评论 RSS'); ?></a></li>
      <li><a href="http://www.typecho.org">Typecho</a></li>
      <?php endif; ?>
    </ul>
  </div>
</div>