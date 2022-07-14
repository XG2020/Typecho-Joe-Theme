<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php
if (empty($this->uid)) {
    $str = $_SERVER["REQUEST_URI"];
    if (preg_match('/\d+/', $str, $arr)) {
        $id = $arr[0];
        if ($this->user->hasLogin() && $this->user->uid == $id) {
            $lock = 0;
        } else {
            $lock = 1;
        }
        $info = userok($id);
        $this->user->uid = $id;
        $this->user->screenName = $info['screenName'];
        $this->user->mail = $info['mail'];
        $this->user->group = $info['group'];
    }
}
?>

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
    <section class="container j-index j-author">
        <section class="j-adaption">
            <div class="col-md-12">
                <!--创作中心s-->
                <header class="page-header">
                    <div style="text-align:center;padding:10px">
                        <?php $email = $this->user->mail;
                        $imgUrl = ParseAvatar($email, 1);
                        echo '<img src="' . $imgUrl . '" style="border-radius: 50px;" height="80" width="80">'; ?>
                        <div style="margin:10px;"><?php $this->user->screenName(); ?></div>
                        <div><?php dengji($this->user->uid);?></div>  
                         <div style="margin:10px;"><span style="border-radius: 3px;color: #fff;padding: 5px;background: var(--theme);font-size: 14px;">文章数：<?php echo allpostnum($this->user->uid); ?></span>
                         <span style="border-radius: 3px;color: #fff;padding: 5px;background: var(--theme);font-size: 14px;">评论量：<?php echo commentnum($this->user->uid); ?></span>
</div>                      
                        <div style="margin:10px;">
                            <svg t="1608204283958" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="3189" width="1em" height="1em"><path d="M826.46929 339.76682s19.698076 58.094327-94.090811 133.586954c0 0 55.19461-291.571526-302.170491-473.353774 0 0 99.090323 228.177717-108.089445 377.063177 0 0-78.792305-102.390001-226.677863-117.488526 0 0 61.394004 95.290694 56.394492 188.081633s-80.292159 196.880773-38.896201 328.567913c34.19666 108.789376 116.588614 214.879016 274.373206 247.775803-21.597891-54.894639-32.396836-112.589005 5.399472-261.774436 0 0 1.399863 123.587931 226.177913 255.275071 216.978811-57.494385 447.656284-264.574163 207.579728-677.733815z" p-id="3190" fill="#7a7b7c"></path></svg>
                            <?php echo allviewnum($this->user->uid); ?>                            
                        </div>
                    </div>
                </header>
            </div>

            <section class="main <?php $this->options->JListType() ?>">
                <div class="row author-page">
                    <div class="col-md-12">

                        <!--创作中心e-->
                        <section  class="j-index-article article">
                            <!-- 列表 -->
                            <?php $this->need('component/index.list.php'); ?>
                        </section>
                    </div>
            </section>
<?php $this->need('public/pagination.php'); ?>
        </section>

    </section>
    <!-- 尾部 -->
    <?php $this->need('public/footer.php'); ?>
</section>

<!-- 配置文件 -->
<?php $this->need('public/config.php'); ?>
</body>

</html>