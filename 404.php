<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="span8">

    <div class="hero-unit">
        <center>
            <h2>404 - <?php _e('页面没找到'); ?></h2>
            <p><?php _e('你想查看的页面已被转移或删除了, 要不要搜索看看: '); ?></p>
            <form class="form-search" method="post">
                <div class="input-append">
                    <input type="text" name="s" class="search-query" autofocus />
                    <button type="submit" class="btn"><?php _e('搜索'); ?></button>
                </div>
            </form>
        </center>
    </div>

</div><!-- end #content-->
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>