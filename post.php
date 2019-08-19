<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="span8" id="main" role="main">
  <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
    <center>
      <h3 itemprop="name headline">
        <a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
      </h3>
    </center>
    <ul class="breadcrumb">
      <li itemprop="author" itemscope itemtype="http://schema.org/Person"><?php _e('作者: '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>
      <span class="divider">|</span>
      <li><?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></li>
      <span class="divider">|</span>
      <li><?php _e('分类: '); ?><?php $this->category(','); ?></li>
    </ul>
    <div class="well" itemprop="articleBody">
      <?php $this->content(); ?>
    </div>
    <p itemprop="keywords" class="tags"><?php _e('标签: '); ?><?php $this->tags(', ', true, '没有标签'); ?></p>
  </article>

  <hr>

  <?php $this->need('comments.php'); ?>
  
  <hr>
  
  <ul class="pager">
    <?php $this->thePrev('<li class="next">%s</li>', '<li class="next disabled"><a>到底了</a></li>'); ?>
    <?php $this->theNext('<li class="previous">%s</li>', '<li class="previous disabled"><a>到顶了</a></li>'); ?>
  </ul>

</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>