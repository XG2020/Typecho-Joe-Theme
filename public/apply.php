<?php $this->comments()->to($comments); ?>
<div id="comments" class="j-comment" data-respondId="<?php $this->respondId() ?>">
    <div class="title">申请表</div>
    <?php if ($this->allow('comment')) : ?>
        <div id="<?php $this->respondId(); ?>" class="respond">
            <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form">
                <div class="head">
                    <?php if ($this->user->hasLogin()) : ?>
                        <div class="head-item">
                            <input id="comment-nick" type="text" value="<?php $this->user->screenName(); ?>" autocomplete="off" name="author" maxlength="16" placeholder="申请者昵称：请输入昵称（必填）" />
                        </div>
                        <div class="head-item">
                            <input id="comment-mail" type="text" value="<?php $this->user->mail(); ?>" autocomplete="off" name="mail" placeholder="绑定的邮箱：请输入邮箱（必填）" />
                        </div>
                    <?php else : ?>
                        <div class="head-item">
                            <input id="comment-nick" type="text" value="<?php $this->remember('author'); ?>" autocomplete="off" name="author" maxlength="16" placeholder="申请者昵称：请输入昵称（必填）" />
                        </div>
                        <div class="head-item">
                            <input id="comment-mail" type="text" value="<?php $this->remember('mail'); ?>" autocomplete="off" name="mail" placeholder="绑定的邮箱：请输入邮箱（必填）" />
                        </div>
                    <?php endif; ?>
                </div>
                <div class="content" id="commentTypeContent">
                    <textarea class="OwO-textarea" name="text" autocomplete="off" id="comment-content" rows="5" placeholder="请填写申请理由~"></textarea>
                </div>
                <div class="foot">
                    <div class="OwO"></div>					 
                    <div class="right">
                        <?php $comments->cancelReply("<span data-parent='" . $this->respondId . "'>取消</span>"); ?>
                        <button type="submit">提交申请</button>
                    </div>
                </div>
            </form>
        </div>
        <?php if ($comments->have()) : ?>
           
        <?php endif; ?>
    <?php else : ?>
        <div class="close">申请通道暂时关闭</div>
    <?php endif; ?>
</div>