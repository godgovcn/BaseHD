<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="span8" id="main" role="main">
    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
        <center>
            <h3 itemprop="name headline">
                <a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
            </h3>
        </center>
        <div class="well" itemprop="articleBody">
            <?php $this->content(); ?>
        </div>
    </article>

    <hr>
    
    <?php $this->need('comments.php'); ?>
</div>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>