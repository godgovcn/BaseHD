<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html lang="zh">

<head>
  <meta charset="<?php $this->options->charset(); ?>">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
          ), '', ' - '); ?><?php $this->options->title(); ?>
  </title>

  <!-- Le styles -->
  <link rel="stylesheet" href="<?php $this->options->themeUrl('./css/bootstrap.css'); ?>">
  <link rel="stylesheet" href="<?php $this->options->themeUrl('./css/bootstrap-basehd.css'); ?>">

  <!--[if lte IE 6]>
    <link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('./css/bootstrap-ie6.css'); ?>">
    <![endif]-->

  <!--[if lte IE 7]>
    <link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('./css/ie.css'); ?>">
    <![endif]-->

  <style type="text/css">
    body {
      padding-top: 60px;
      padding-bottom: 40px;
    }
  </style>

  <link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('./css/bootstrap-responsive.min.css'); ?>">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
      <script type="text/javascript" src="<?php $this->options->themeUrl('./js/html5shiv.min.js'); ?>"></script>
    <![endif]-->

  <?php $this->header(); ?>
</head>

<body>
  <header>
    <div class="container">
      <div class="row">
        <div class="span7">
          <?php if ($this->options->logoUrl) : ?>
          <h1 id="logo" href="<?php $this->options->siteUrl(); ?>">
            <img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>" />
          </h1>
          <?php else : ?>
          <h1 id="logo" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></h1>
          <p class="lead"><?php $this->options->description() ?></p>
          <?php endif; ?>
        </div>
        <div class="span5 hidden-phone" style="margin-top:30px">
          <form class="form-search pull-right" id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
            <div class="input-append">
              <input type="text" id="s" name="s" class="span2 search-query" placeholder="<?php _e('输入关键字搜索'); ?>" />
              <button type="submit" class="btn"><i class="icon-search"></i></button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="span12">
          <ul class="nav nav-tabs">
            <li <?php if ($this->is('index')) : ?> class="active" <?php endif; ?>>
              <a href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
            </li>

            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php while ($pages->next()) : ?>
            <li <?php if ($this->is('page', $pages->slug)) : ?> class="active" <?php endif; ?>>
              <a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
            </li>
            <?php endwhile; ?>
          </ul>
        </div>
      </div>
    </div>
  </header>

  <main>
    <div class="container">
      <div class="row">