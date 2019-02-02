
<?php
/**
 *  由心而发，简单的
 *
 * <a href="https://github.com/H-rafael/Typecho-Theme-Simple" target="_blank">Github</a> | <a href="http://qqexit.com/" target="_blank">Home</a>
 *
 * @package Simple
 * @author  Kiln
 * @version 1.2.0
 * @link http://qqexit.com/index.php/archives/23/
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<main class="meowblog">
    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10 ml-auto mr-auto">                                    <div class="post-single">
                        <div class="entry-header single-entry-header">
                            <h2 class="entry-title wow swing  animated animated" style="visibility: visible; animation-name: swing;"><?php $this->title() ?></h2>
                            <div class="post-meta author-box wow bounceInRight animated" style="visibility: visible; animation-name: bounceInRight;">
                                <div class="thw-autohr-bio-img">
                                    <div class="thw-img-border">
                                        <img src="<?php echo $this->options->avatarUrl ? $this->options->avatarUrl : __TYPECHO_GRAVATAR_PREFIX__ . md5( strtolower( trim( $this->author->mail ) ) ) . '?d=mp&r=g&s=120;' ?>" class="img-fluid" alt="<?php $this->options->title(); ?>">
                                    </div>
                                </div>
                                <div class="post-meta-content">
                                    <span class="list-post-date"><i class="fa fa-calendar"></i> Post on <?php $this->date('Y-m-d'); ?></span>
                                    <span class="post-author"><i class="fa fa-user-circle"></i> <?php $this->options->title(); ?></span>
                                    <span class="post-author"><i class="fa fa-comments-o"></i> <a href="#comments"><?php $this->commentsNum(_t('0 Comments'), _t('1 Comments'), _t('%d Comments')); ?></a></span>
                                    <span class="list-post-views"><i class="fa fa-street-view"></i> <?php getPostView($this); ?> Views</span>
                                </div>
                            </div>
                        </div>

                        <div class="entry-content wow bounceInLeft animated" style="visibility: visible; animation-name: bounceInLeft;">
                            <?php $this->content(); ?>
                        </div>
                    </div>
                    <div class="post-footer clearfix wow bounceInDown animated" style="visibility: visible; animation-name: bounceInDown;">
                        <div class="post-tags">
                            <div class="article-categories"></div>
                        </div>
                    </div>

                    <div class="thw-author-box author-box thw-sept wow rollIn animated" style="visibility: visible; animation-name: rollIn;">
                        <div class="thw-autohr-bio-img">
                            <div class="thw-img-border">
                                <img src="<?php echo $this->options->avatarUrl ? $this->options->avatarUrl : __TYPECHO_GRAVATAR_PREFIX__ . md5( strtolower( trim( $this->author->mail ) ) ) . '?d=mp&r=g&s=120;' ?>" class="img-fluid" alt="<?php $this->options->title(); ?>">
                            </div>
                        </div>
                        <div class="author-info">
                            <h4><?php $this->options->title(); ?></h4>
                            <p>雪夜红墙你曾说过喜欢，我曾说过，喜欢是不够的，而且最后证明确实是不够的，但至少你曾说过喜欢，我很喜欢。 日后你来看我或我来看你，或他山云雾之中再见，都是人生欢愉事。 我喜欢你，你喜欢我，这就很好。 红墙白雪你说曾说过喜欢，我依然喜欢。 红墙白雪，要你喜欢。渔得鱼心满意足,樵得樵眼笑眉</p>
                        </div>
                    </div>
                    <nav class="post-navigation thw-sept wow bounceInUp animated" style="visibility: visible; animation-name: bounceInUp;">
                        <?php theNextPrev($this); ?>

<!--                        <div class="post-previous">-->
<!--                            <a href="https://mkm.st/289.html" rel="next">-->
<!--                                <span><i class="fa fa-angle-left"></i> Previous Post</span>-->
<!--                                <h4>lolimeow主题这样滴排版好像会好看些额…</h4>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="post-next">-->
<!--                            <a href="https://mkm.st/274.html" rel="prev">-->
<!--                                <span>Next Post <i class="fa fa-angle-right"></i></span>-->
<!--                                <h4>其实Lolimeow主题的seo能力挺强的</h4>-->
<!--                            </a>-->
<!--                        </div>-->



                    </nav>
                    <?php $this->need('comments.php'); ?>
                </div>
<!--                <div class="row wow fadeInUp animated animated" style="visibility: visible; animation-name: fadeInUp;">-->
<!--                    <div class="col-lg-12">-->
<!--                        <h3 class="title-normal thw-sept text-center">相关推荐</h3>	 </div>-->
<!--                    <div class="col-md-4"><div class="card card-blog"><div class="card-header card-header-image"><a href="https://mkm.st/289.html"><img class="img img-raised" src="https://moguos.oss-cn-shenzhen.aliyuncs.com/lolimeow/assets/images/rand/rand (6).jpg" alt="lolimeow主题这样滴排版好像会好看些额..."></a></div><div class="card-body"><h4 class="card-title"><a href="https://mkm.st/289.html" title="lolimeow主题这样滴排版好像会好看些额…">lolimeow主题这样滴排版好像会…</a></h4></div></div></div><div class="col-md-4"><div class="card card-blog"><div class="card-header card-header-image"><a href="https://mkm.st/274.html"><img class="img img-raised" src="https://moguos.oss-cn-shenzhen.aliyuncs.com/lolimeow/assets/images/rand/rand (7).jpg" alt="其实Lolimeow主题的seo能力挺强的"></a></div><div class="card-body"><h4 class="card-title"><a href="https://mkm.st/274.html" title="其实Lolimeow主题的seo能力挺强的">其实Lolimeow主题的seo能力挺强的</a></h4></div></div></div><div class="col-md-4"><div class="card card-blog"><div class="card-header card-header-image"><a href="https://mkm.st/270.html"><img class="img img-raised" src="https://moguos.oss-cn-shenzhen.aliyuncs.com/lolimeow/assets/images/rand/rand (5).jpg" alt="个人笔记本"></a></div><div class="card-body"><h4 class="card-title"><a href="https://mkm.st/270.html" title="密码保护：个人笔记本">密码保护：个人笔记本</a></h4></div></div></div>-->
<!--                </div>-->
            </div>
        </div>
    </div>
</main>

<?php $this->need('footer.php'); ?>