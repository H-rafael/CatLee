
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name=viewport content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1">
    <meta http-equiv=X-UA-Compatible content="ie=edge">
    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header("generator=&commentReply="); ?>
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?> - <?php $this->options->description(); ?></title>
    <link href="<?php $this->options->themeUrl('assets/vendor/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
    <link type="text/css" href="<?php $this->options->themeUrl('assets/css/themes.min.css'); ?>" rel="stylesheet">
    <link type="text/css" href="<?php $this->options->themeUrl('assets/css/animate.min.css'); ?>" rel="stylesheet">
    <link type="text/css" href="<?php $this->options->themeUrl('assets/css/style.css?ver=1.5'); ?>" rel="stylesheet">
    <script src="<?php $this->options->themeUrl('assets/vendor/jquery/jquery.min.js'); ?>"></script>
</head>
<body>
<header class="header-global">
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
        <div class="container">
            <a class="navbar-brand mr-lg-5" href="<?php $this->options->siteUrl(); ?>">
                <img src="<?php $this->options->themeUrl('assets/img/catlee.png'); ?>" alt="<?php $this->options->title() ?>" class="headerlogo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbar_global">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="<?php $this->options->siteUrl(); ?>">
                                <img src="<?php $this->options->themeUrl('assets/img/catlee.png'); ?>" alt="<?php $this->options->title(); ?>" class="headerlogo">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>

                <ul class="navbar-nav navbar-nav-hover align-items-lg-center ml-lg-auto">
                    <?php $slugs = getPermalinkFromSlug();showNav(0,$slugs);?>

<!--                    --><?php //showNav(1,$slugs); ?>


<!--                    <li class="nav-item active">-->
<!--                        <a href="<?php $this->options->siteUrl(); ?>/" class="nav-link">-->
<!--                            首页-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li class="nav-item dropdown">-->
<!--                        <a href="#" data-toggle="dropdown" class="dropdown-toggle  nav-link" aria-haspopup="true">-->
<!--                            喵分享-->
<!--                        </a>-->
<!--                        <ul class="dropdown-menu">-->
<!--                            <li class="nav-item">-->
<!--                                <a href="<?php $this->options->siteUrl(); ?>/wordpress" class="dropdown-item">-->
<!--                                    WordPress-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a href="<?php $this->options->siteUrl(); ?>/whmcs" class="dropdown-item">-->
<!--                                    Whmcs-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a href="<?php $this->options->siteUrl(); ?>/html" class="dropdown-item">-->
<!--                                    HTML&#038;JS-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a href="<?php $this->options->siteUrl(); ?>/share" class="dropdown-item">-->
<!--                                    喵搬运-->
<!--                                </a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a href="<?php $this->options->siteUrl(); ?>/meownotes" class="nav-link">-->
<!--                            喵笔记生态圈-->
<!--                        </a>-->
<!--                    </li>-->
                    <li class="nav-item">
                        <a href="#search" class="nav-link">
                            <i class="fa fa-search">
                            </i>
                            Search
                        </a>
                    </li>
                </ul>
                <div id="search">
                            <span class="close">
                                X
                            </span>
                    <form role="search" id="searchform" method="get" action="<?php $this->options->siteUrl(); ?>/">
                        <input type="search" name="s" value="" placeholder="输入搜索关键词..." />
                    </form>
                </div>
            </div>
        </div>
    </nav>
</header>


<style>
    #image_header {
        background: url(
            <?php
                    if($this->is('post') || $this->is('page') || $this->is('single'))
                        if($this->fields->thumbnail)
                            $this->fields->thumbnail();
                        else
                            echo getThumbnail();
                    else
                        getBackground();
                ?>
            ) 50% center / cover no-repeat fixed rgb(255, 255, 255);
    }
</style>

<section class="section-profile-cover section-blog-cover section-shaped my-0 " id="image_header">
    <div class="shape shape-style-1 shape-primary alpha-4">
                <span>
                </span><span>
                </span><span>
                </span><span>
                </span><span>
                </span><span>
                </span><span>
                </span>
    </div>
    <div class="separator separator-bottom separator-skew">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none">
            <polygon class="fill-white" points="2560 0 2560 100 0 100">
            </polygon>
        </svg>
    </div>
</section>