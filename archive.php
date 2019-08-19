<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="span8" id="main" role="main">
    <div class="alert alert-info"><?php $this->archiveTitle(array(
                                        'category'  =>  _t('分类 %s 下的文章'),
                                        'search'    =>  _t('包含关键字 %s 的文章'),
                                        'tag'       =>  _t('标签 %s 下的文章'),
                                        'author'    =>  _t('%s 发布的文章')
                                    ), '', ''); ?>
    </div>
    <?php if ($this->have()) : ?>
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
    <?php else : ?>
    <article>
        <div class="alert alert-error">
            <?php _e('没有找到内容'); ?>
        </div>
    </article>
    <?php endif; ?>

    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div><!-- end #main -->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>