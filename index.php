<?php
/**
 *  由心而发，简单的
 * <a href="https://github.com/H-rafael/Typecho-Theme-Simple" target="_blank">Github</a> | <a href="http://qqexit.com/" target="_blank">Home</a>
 * @package Simple
 * @author  Kiln
 * @version 1.2.0
 * @link http://qqexit.com/index.php/archives/23/
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
    <style>
        .paging-link-a a{
            z-index: 1;
            color: rgb(255, 255, 255);!important;
            background-color: rgb(242, 48, 81);
            border-color: rgb(242, 48, 81);
        }
    </style>

<main class="meowblog">
    <div class="main-container">
        <div class="container">
            <div class="row">
                <?php while($this->next()): ?>
                <div class="col-lg-12 col-md-12 post-standard-list3-style">
                    <div class="entry-blog blog-default wow fadeInUp">
                        <div class="entry-blog-listing clearfix">
                            <div class="post-standard-view">
                                <div class="entry-blog-list-left">
                                    <div class="entry-format">
                                        <div class="featured-image">
                                            <a href="<?php $this->permalink() ?>" title="<?php  $this->title() ?>">
                                                <img class="img-fluid" style="background-position: center center; background-size: cover;" src="<?php if($this->fields->thumbnail) $this->fields->thumbnail(); else echo getThumbnail(); ?>">
                                            </a>

                                        </div>
                                    </div>
                                </div>

                                <div class="entry-blog-list-right">
                                    <div class="post-content">
                                        <div class="post-header">
                                                    <span class="category-meta">
                                                        <a href="https://mkm.st/wordpress" title="查看所有文章 " rel="category tag">
                                                            <i class="fa fa-folder-o">
                                                            </i>
                                                            <?php $this->category(' ',true,'无'); ?>
                                                        </a>
                                                    </span>
                                            <h2 class="entry-post-title">
                                                <a href="<?php $this->permalink() ?>" title="<?php $this->sticky(); $this->title() ?>">
                                                    <?php $this->sticky(); $this->title() ?>
                                                </a>
                                            </h2>
                                        </div>
                                        <div class="post-meta author-box mb10">
                                            <div class="thw-autohr-bio-img">
                                                <div class="thw-img-border">
                                                    <img src="<?php echo $this->options->avatarUrl ? $this->options->avatarUrl : __TYPECHO_GRAVATAR_PREFIX__ . md5( strtolower( trim( $this->author->mail ) ) ) . '?d=mp&r=g&s=120;' ?>" class="img-fluid" alt="<?php $this->options->title(); ?>">
                                                </div>
                                            </div>
                                            <div class="post-meta-content">
                                                <span class="list-post-date">
                                                    <i class="fa fa-calendar"></i>
                                                    Post on  <?php $this->date('Y-m-d'); ?>
                                                </span>
                                                <span class="post-author">
                                                    <i class="fa fa-user-circle">
                                                    </i><?php $this->options->title(); ?>
                                                </span>
                                                <span class="post-author">
                                                    <i class="fa fa-comments-o"></i>
                                                    <?php $this->commentsNum(_t('0 条评论'), _t('1 条评论'), _t('%d 条评论')); ?>
                                                </span>
                                                <span class="list-post-Views">
                                                    <i class="fa fa-street-view"></i>
                                                    <?php getPostView($this); ?> Views
                                                </span>
                                            </div>
                                        </div>
                                        <div class="post-intro-text">
                                            <?php
                                            if($this->fields->previewContent)
                                                $this->fields->previewContent();
                                            else
                                                $this->excerpt(80, '...');
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
        <div class="paging wow swing ">
            <?php $this->pageNav('首页', '尾页',1,'...',array('wrapTag' => 'ul', 'wrapClass' => 'pagination justify-content-center','itemTag' => 'li','currentClass' => 'paging-link-a active')); ?>
        </div>
        <div class="container wow fadeInUp animated">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card mt40">
                        <div class="card-body">
                            <a href="https://mkm.st/links" class="btn btn-danger btn-sm justify-content-center"
                               target="_blank" data-toggle="tooltip" data-original-title="点击进入申请友情链接">
                                <span>友情关照</span>
                                <span class="badge badge-white">1</span>
                            </a>
                            <a href="http://qqexit.com" class="badge badge-secondary" style="margin-right: 15px;"
                               target="_blank">
                                什么の窑
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php  $this->need('footer.php');?>