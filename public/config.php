<!-- 音乐播放器 -->
<?php if ($this->options->JPlayer && !isMobile()) : ?>
    <meting-js id="<?php $this->options->JPlayer(); ?>" lrc-type="1" server="netease" storage-name="meting" theme="#ebebeb" autoplay type="playlist" fixed="true" list-olded="true"></meting-js>
    <script src="<?php echo autoCdnUrl('assets/js-local/npm/APlayer.min.js'); ?>"></script>
    <script src="<?php echo autoCdnUrl('assets/js-local/npm/Meting.min.js'); ?>"></script>
<?php endif; ?>

<?php $this->footer(); ?>

<!--本地-->
<script src="<?php echo autoCdnUrl('assets/js-local/npm/jquery.min.js'); ?>"></script>
<script src="<?php echo autoCdnUrl('assets/js-local/npm/jquery.fancybox.min.js'); ?>"></script>
<script src="<?php echo autoCdnUrl('assets/js-local/npm/jquery.qrcode.min.js'); ?>"></script>
<script src="<?php echo autoCdnUrl('assets/js-local/npm/hls.min.js'); ?>"></script>
<script src="<?php echo autoCdnUrl('assets/js-local/npm/DPlayer.min.js'); ?>"></script>
<script src="<?php echo autoCdnUrl('assets/js-local/npm/smoothscroll1.min.js'); ?>"></script>
<script src="<?php echo autoCdnUrl('assets/js-local/npm/draggabilly.pkgd.js'); ?>"></script>
<script src="<?php echo autoCdnUrl('assets/js-local/npm/wow.min.js'); ?>"></script>

<!-- live2d -->
<?php if ($this->options->JLive2D !== 'off' && !isMobile()) : ?>
    <script src="https://cdn.jsdelivr.net/npm/live2d-widget@3.1.4/lib/L2Dwidget.min.js"></script>
<?php endif; ?>


<!-- 颜色选择器 -->
<?php if ($this->options->JGlobalThemeStatus === 'on') : ?>
    <script src="<?php echo autoCdnUrl('assets/js-local/npm/colpick.min.js'); ?>"></script>
<?php endif; ?>

<!-- 柱状图 -->
<?php if ($this->options->JCensusStatus === 'on') : ?>
<script src="<?php echo autoCdnUrl('assets/js-local/npm/highcharts.min.js'); ?>"></script>
<?php endif; ?>

<!-- 代码高亮 -->
<?php if ($this->options->JCodeColor !== 'off') : ?>
    <script src="<?php echo autoCdnUrl('assets/js-local/npm/highlight.min.js'); ?>"></script>
<?php endif; ?>

<!-- 页面加载 -->
<?php if ($this->options->JPageLoading !== "off") : ?>
    <script src="<?php echo autoCdnUrl('assets/js-local/npm/fakeLoader.min.js'); ?>"></script>
<?php endif; ?>

<!-- 轮播图 -->
<?php if ($this->options->JIndexCarousel) : ?>    
    <script src="<?php echo autoCdnUrl('assets/js-local/npm/swiper.min.js'); ?>"></script>
<?php endif; ?>

<!-- 平滑滚动 -->

<script src="<?php echo autoCdnUrl('assets/js-local/npm/SmoothScroll.min.js'); ?>"></script>

<!-- 图片懒加载 -->
<script src="<?php echo autoCdnUrl('assets/js-local/npm/joe.lazyload.min.js'); ?>"></script>

<!-- 弹窗提示 -->
<script src="<?php echo autoCdnUrl('assets/js-local/npm/joe.toast.min.js'); ?>"></script>

<!-- 画图 -->
<script src="<?php echo autoCdnUrl('assets/js-local/npm/sketchpad.min.js'); ?>"></script>

<!-- 鱼群跳跃 -->
<?php if ($this->options->JFishStatus !== "off") : ?>
    <script src="<?php echo autoCdnUrl('assets/js-local/npm/fish.min.js'); ?>"></script>
<?php endif; ?>

<!-- 弹幕 -->
<?php if ($this->options->JBarragerStatus === 'on') : ?>
    <script src="<?php echo autoCdnUrl('library/joe.barrager/joe.barrager.min.js'); ?>"></script>
<?php endif; ?>
<!-- 3dtag -->
<?php if ($this->options->J3DTagStatus === 'on') : ?>
    <script src="<?php echo autoCdnUrl('library/3DTag/3DTag.min.js'); ?>"></script>
<?php endif; ?>
<!-- 目录树 -->
<?php if ($this->options->JDirectoryStatus === 'on'  && !isMobile()) : ?>
    <script src="<?php echo autoCdnUrl('assets/js/jfloor.min.js'); ?>"></script>
<?php endif; ?>
    
<script src="<?php echo autoCdnUrl('assets/js/OwO.min.js'); ?>"></script>
<script src="<?php echo autoCdnUrl('assets/js/joe.config.js'); ?>"></script>

<!-- 背景 -->
<?php $this->need('config/background.php'); ?>

<!-- 鼠标点击特效 -->
<?php $this->need('config/cursor.effect.php'); ?>

<script>
    <?php
    $p = Typecho_Cookie::getPrefix();
    $q = $p . '__typecho_notice';
    $y = $p . '__typecho_notice_type';
    if (isset($_COOKIE[$y]) && ($_COOKIE[$y] == 'success' || $_COOKIE[$y] == 'notice' || $_COOKIE[$y] == 'error')) {
        if (isset($_COOKIE[$q])) { ?>
            $.toast({
                type: "warning",
                message: '<?php echo preg_replace('#\[\"(.*?)\"\]#', '$1', $_COOKIE[$q]); ?>！'
            })
    <?php
            Typecho_Cookie::delete('__typecho_notice');
            Typecho_Cookie::delete('__typecho_notice_type');
        }
    } ?>
    /* 自定义JS */
    <?php $this->options->JCustomScript() ?>
</script>

<?php $this->options->JCustomBodyEnd() ?>