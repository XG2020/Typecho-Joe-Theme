<?php
require_once('MkEncrypt.php');
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 
$passwd = $this->fields->passwd;
MkEncrypt($passwd);//设置密码
?>

<?php

/**
 * 视频
 * 
 * @package custom 
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
<html lang="en" data-color-mode="<?php if($_COOKIE['night']=='1')echo 'dark';else echo 'light'; ?>">

<head>
    <?php $this->need('public/head.php'); ?>
</head>

<body>
    <?php $this->options->JCustomBodyStart() ?>

    <section id="joe">
        <!-- 头部 -->
        <?php $this->need('public/header.php'); ?>

        <!-- 主体 -->
        <section class="container j-post">
            <section class="j-adaption">
                <?php $this->need('component/video.api.php'); ?>
            </section>
        </section>

        <!-- 尾部 -->
        <?php $this->need('public/footer.php'); ?>
    </section>
    <!-- 配置文件 -->
    <?php $this->need('public/config.php'); ?>
</body>

</html>