<?php

/**
 * 
 * “ 随风而动，随遇而安...... ” <br /> “ 环境要求：PHP 5.4 ~ 7.2 ”
 * 
 * @package JOE魔改版
 * @author XG孤梦
 * @link //xggm.top
 *
 **/

?>

<?php $this->need('public/prevent.php'); ?>
<?php $this->need('public/defend.php'); ?>

<!-- 
    *
    * 随风而动，随遇而安......
    *
 -->

<!DOCTYPE html>
<html lang="zh-CN" data-color-mode="<?php if($_COOKIE['night']=='1')echo 'dark';else echo 'light'; ?>">

<head>
    <?php $this->need('public/head.php'); ?>
</head>

<body>
    <?php $this->options->JCustomBodyStart() ?>

    <section id="joe">

        <!-- 头部 -->
        <?php $this->need('public/header.php'); ?>        

        <!-- 主体 -->
        <section class="container j-index">
            <section   class="j-adaption" >
             
                <section  class="main <?php $this->options->JListType() ?>">

                    <?php if ($this->is('index')) : ?>
                        <?php $this->need('component/index.banner.php'); ?>
                        <?php $this->need('component/index.hot.php'); ?>
                        <?php $this->need('component/index.ad.php'); ?>
                        <?php $this->need('component/index.title.php'); ?>
                    <?php else : ?>
                        <?php $this->need('component/search.title.php'); ?>
                    <?php endif; ?>

                    <section class="j-index-article article">                          
                        <!-- 置顶文章 -->                        
                        <?php if ($this->is('index')) : ?>
                            <?php $this->need('component/index.sticky.php'); ?>
                        <?php endif; ?>
                        <!-- 列表 -->
                        <?php $this->need('component/index.list.php'); ?>
                    </section>
               
                </section>
                <?php $this->need('public/pagination.php'); ?>
               
            </section>
           
            <?php if ($this->options->JIndexAsideStatus === 'on') : ?>
                <?php $this->need('public/aside.php'); ?>
            <?php endif; ?>
        </section>

        <!-- 弹幕 -->
        <?php if ($this->options->JBarragerStatus === 'on') : ?>
            <ul class="j-barrager-list">
                <?php $this->widget('Widget_Comments_Recent@index', 'ignoreAuthor=true')->to($comments); ?>
                <?php while ($comments->next()) : ?>
                    <li>
                        <span class="j-barrager-list-avatar" data-src="<?php ParseAvatar($comments->mail); ?>"></span>
                        <span class="j-barrager-list-content"><?php $comments->excerpt(); ?></span>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>

        <!-- 尾部 -->
        <?php $this->need('public/footer.php'); ?>
    </section>

    <!-- 配置文件 -->
    <?php $this->need('public/config.php'); ?>

</body>

</html>