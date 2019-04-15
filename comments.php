<style>
    .comment-list{ list-style: none;}
    .entry-content hr{
        width: 100%;
        margin: 40px auto;
        height: 3px;
        border: none;
        background-color: #ddd;
        background-image: repeating-linear-gradient(-45deg,#fff,#fff 4px,transparent 4px,transparent 8px);
    }
</style>
<?php
function threadedComments($comments, $options) {
    $commentClass = '';
    if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {
            $commentClass .= ' comment-by-author';
        } else {
            $commentClass .= ' comment-by-user';
        }
    }
    $commentLevelClass = $comments->levels > 0 ? ' comment-child' : ' comment-parent';
    ?>


    <li class="commentsline">
        <div class="comment even thread-even depth-1 parent" id="comment-<?php $comments->theId(); ?>">
            <div class="author-box">
                <div class="thw-autohr-bio-img">
                    <div class="thw-img-border">
                        <?php $comments->gravatar('150', ''); ?>
                    </div>
                </div>
            </div>
            <div class="comment-body">
                <div class="meta-data">
                    <span class="pull-right"     onclick="return addComment.moveForm( "comment-24", "24", "respond", "222" )">
                    <?php $comments->reply('<i class="fa fa-mail-reply-all"></i>回复'); ?>
                    </span>


                    <?php echo "<a href=\"$comments->url\" rel=\"external nofollow\" target=\"_blank\" class=\"comment-author\">$comments->author</a>"; ?>
                    <?php if(isEnabled('showCommentUA','AriaConfig')): ?>
                        <span><?php echo parseUserAgent($comments->agent); ?></span>
                    <?php endif; ?>

                    <!--                    <span class="comment-author">心跳wvv-->
                    <!--                        <span class="badge badge-info"><i class="fa fa-globe"></i> 游客</span>-->
                    <!--                    </span>-->
                    <span class="comment-date"> <?php $comments->date('Y年m月d日 H:i'); ?></span>
                </div>
                <div class="comment-content">
                    <?php showCommentContent($comments->coid); ?>
                </div>
            </div>
        </div>
        <ul class="children">
            <?php if ($comments->children) { ?>
                <div class="comment-children">
                    <?php $comments->threadedComments($options); ?>
                </div>
            <?php } ?>
        </ul>
        <!-- .children -->
    </li>




<?php } ?>

<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php commentReply($this); ?>

<div id="comments" class="comments-area thw-sept wow bounceInUp animated" style="visibility: visible; animation-name: bounceInUp;">
    <h3 class="comments-heading"><?php $this->commentsNum(_t('0 Comments'), _t('1 Comments'), _t('%d Comments')); ?> </h3>
    <?php if($this->allow('comment')): ?>
        <?php $this->comments()->to($comments); ?>
        <ul class="comments-list">
            <?php $comments->listComments(); ?>
        </ul>
    <?php endif; ?>

    <div class="pagenav text-center"></div>
</div><!-- Post comment end -->

<h3 class="title-normal thw-sept text-center wow swing animated"   style="visibility: visible; animation-name: swing;">留下你的评论</h3>
<div class="clearfix text-center" >
    <!--    *评论支持代码高亮&lt;pre class="prettyprint linenums"&gt;代码&lt;/pre&gt;-->
</div>
<div  class="respond" id="<?php $this->respondId(); ?>" >
    <form method="post" action="<?php $this->commentUrl() ?>" id="commentform" role="form">
        <?php if($this->user->hasLogin()): ?>
            <p>
                <?php _e('登录身份: '); ?>
                <a href="<?php $this->options->profileUrl(); ?>">
                    <?php $this->user->screenName(); ?>
                </a>.
                <a href="<?php $this->options->logoutUrl(); ?>" title="Logout" no-pjax>
                    <?php _e('退出'); ?>&raquo;</a>
            </p>
        <?php else: ?>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <input placeholder="（必填）昵称" type="text" name="author" id="author" tabindex="1" class="form-control" value="<?php $this->remember('author'); ?>" required />
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input placeholder="<?php echo $this->options->commentsRequireMail ? '（必填）' : '（选填）';echo '邮箱'; ?>"  tabindex="2" type="email" name="mail" id="mail" class="form-control" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?>/>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="url" name="url" id="url" class="form-control" placeholder="<?php echo $this->options->commentsRequireURL ? '（必填）' : '（选填）';echo '网站'; ?>" value="<?php $this->remember('url'); ?>" <?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?>/>
                </div>
            </div>
        </div>

        <?php endif; ?>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <textarea class="form-control  required-field" rows="5" name="text" id="text" tabindex="4" placeholder="你可以在这里输入评论内容..."><?php $this->remember('text'); ?></textarea><div id="loading" style="display: none;"><i class="fa fa-spinner fa-spin"></i> 正在提交, 请稍候...</div><div id="error" style="display: none;">#</div>
                </div>
            </div>
        </div>
        <div class="clearfix text-center">
            <button class="btn btn-1 btn-outline-success"  type="submit" id="submit" tabindex="5">发表评论</button>
        </div>
    </form>
</div>
