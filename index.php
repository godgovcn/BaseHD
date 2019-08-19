<?php

/**
 * 使用Bootstrap 2 仿官主题，甚至可以兼容个IE6的Typecho主题
 * 
 * @package BaseHD
 * @author FireUnicornser
 * @version 1.0
 * @link https://github.com/FireUnicornser/BaseHD
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div class="span8">
  <?php while ($this->next()) : ?>
  <article itemscope itemtype="http://schema.org/BlogPosting">
    <h3 itemprop="name headline"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h3>
    <ul class="breadcrumb">
      <li itemprop="author" itemscope itemtype="http://schema.org/Person"><?php _e('作者: '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>
      <span class="divider">|</span>
      <li><?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></li>
      <span class="divider">|</span>
      <li><?php _e('分类: '); ?><?php $this->category(','); ?></li>
      <span class="divider">|</span>
      <li itemprop="interactionCount"><a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></li>
    </ul>
    <div itemprop="articleBody">
      <?php $this->content('- 阅读剩余部分 -'); ?>
    </div>
    <hr style="margin-top:30px;">
  </article>
  <?php endwhile; ?>
</div>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>