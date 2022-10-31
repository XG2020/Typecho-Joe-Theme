<meta charset="utf-8" />
<meta name="renderer" content="webkit" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta name="author" content="Joe魔改版" />
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
<?php if ($this->fields->sharePic || $this->options->JQQSharePic) : ?>
    <meta itemprop="image" content="<?php echo GetQQSharePic($this); ?>" />
<?php endif; ?>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, shrink-to-fit=no, viewport-fit=cover">
<!-- 解决Https下http请求被拦截-->
<!-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> -->
<!-- IE浏览器跳出 -->
<script>
    /* 判断是否是ie浏览器 */
    function detectIE() {
        var ua = window.navigator.userAgent;
        var msie = ua.indexOf('MSIE ');
        if (msie > 0) {
            return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
        }
        var trident = ua.indexOf('Trident/');
        if (trident > 0) {
            var rv = ua.indexOf('rv:');
            return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
        }
        var edge = ua.indexOf('Edge/');
        if (edge > 0) {
            return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
        }
        return false;
    }
    if (detectIE() !== false) {
        alert('当前站点不支持IE浏览器，请切换其他浏览器！')
        location.href = "https://baidu.com"
    }
</script>

<script src="<?php echo autoCdnUrl('assets/js-local/npm/jquery.min.js'); ?>"></script>
<script src="<?php echo autoCdnUrl('assets/js-local/alert.js'); ?>"></script>
<script src="<?php echo autoCdnUrl('assets/js/snow.js'); ?>"></script>
<link rel="stylesheet" type="text/css" href="<?php echo autoCdnUrl('assets/css-local/alert.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo autoCdnUrl('assets/css-local/btn.css'); ?>">
<!-- favicon图标 -->
<link rel="shortcut icon" href="<?php echo $this->options->JFavicon ? $this->options->JFavicon : 'https://xggm.top/logo1.png'; ?>" />

<!-- Typecho自有函数 -->
<?php if ($this->is('single')) : ?>
    <meta name="description" content="<?php $this->fields->desc(); ?>" />
    <meta name="keywords" content="<?php $this->fields->keywords(); ?>" />
    <?php $this->header('keywords=&description='); ?>
<?php else : ?>
    <?php $this->header(); ?>
<?php endif; ?>

<!-- 网站标题 -->
<title>
    <?php if ($this->_currentPage > 1) echo '第 ' . $this->_currentPage . ' 页 - '; ?>
    <?php $this->archiveTitle(
        array(
            'category' => '分类 %s 下的文章',
            'search' => '包含关键字 %s 的文章', 'tag' =>  '标签 %s 下的文章', 'author' => '%s 发布的文章'
        ),
        '',
        ' - '
    ); ?>
    <?php $this->options->title(); ?>
</title>

<link rel="stylesheet" type="text/css" href="<?php echo autoCdnUrl('assets/css-local/npm/bootstrap-grid.min.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo autoCdnUrl('assets/css-local/npm/jquery.fancybox.min.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo autoCdnUrl('assets/css-local/npm/animate.min.css'); ?>">

<!-- 颜色选择器 -->
<?php if ($this->options->JGlobalThemeStatus === 'on') : ?>
    <link rel="stylesheet" type="text/css" href="<?php echo autoCdnUrl('assets/css-local/npm/colpick.min.css'); ?>">
<?php endif; ?>

<!-- 代码高亮 -->
<?php if ($this->options->JCodeColor !== 'off') : ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@10.2.1/build/styles/<?php $this->options->JCodeColor() ?>.min.css">
<?php endif; ?>

<!-- 页面加载 -->
<?php if ($this->options->JPageLoading !== "off") : ?>
    <link rel="stylesheet" type="text/css" href="<?php echo autoCdnUrl('assets/css-local/npm/fakeLoader.min.css'); ?>">
<?php endif; ?>

<!-- 播放器 -->
<?php if ($this->options->JPlayer) : ?>
    <link rel="stylesheet" type="text/css" href="<?php echo autoCdnUrl('assets/css-local/npm/APlayer.min.css'); ?>">
<?php endif; ?>

<!-- 轮播图 -->
<?php if ($this->options->JIndexCarousel) : ?>
    <link rel="stylesheet" type="text/css" href="<?php echo autoCdnUrl('assets/css-local/npm/swiper.min.css'); ?>">
<?php endif; ?>

<link rel="stylesheet" href="<?php echo autoCdnUrl('assets/css/OwO.min.css'); ?>" />
<link rel="stylesheet" href="<?php echo autoCdnUrl('assets/css/joe.min.css'); ?>" />
<link rel="stylesheet" href="<?php echo autoCdnUrl('assets/css/joe.responsive.min.css'); ?>" />

<!-- joe 弹窗提示 -->
<link rel="stylesheet" type="text/css" href="<?php echo autoCdnUrl('assets/css-local/npm/joe.toast.min.css'); ?>">

<style>
    :root {
        --element: #409eff;
        cursor: <?php echo $this->options->JCursorType !== 'off' ? 'url(' . autoCdnUrl('assets/cur/') . $this->options->JCursorType . '), auto' : 'auto' ?>;
        --classA: <?php echo $this->options->JClassA ? $this->options->JClassA : '#dcdfe6' ?>;
        --classB: <?php echo $this->options->JClassB ? $this->options->JClassB : '#e4e7ed' ?>;
        --classC: <?php echo $this->options->JClassC ? $this->options->JClassC : '#ebeef5' ?>;
        --classD: <?php echo $this->options->JClassD ? $this->options->JClassD : '#f2f6fc' ?>;
        --main: <?php echo $this->options->JMainColor ? $this->options->JMainColor : '#303133' ?>;        
        --minor: <?php echo $this->options->JMinorColor ? $this->options->JMinorColor : '#38383a' ?>;
        --seat: <?php echo $this->options->JSeatColor ? $this->options->JSeatColor : '#c0c4cc' ?>;
        --success: <?php echo $this->options->JSuccessColor ? $this->options->JSuccessColor : '#67c23a' ?>;
        --warning: <?php echo $this->options->JWarningColor ? $this->options->JWarningColor : '#e6a23c' ?>;
        --danger: <?php echo $this->options->JDangerColor ? $this->options->JDangerColor : '#f56c6c' ?>;
        --info: <?php echo $this->options->JInfoColor ? $this->options->JInfoColor : '#909399' ?>;
        --radius-pc: <?php echo $this->options->JRadiusPC ?>;
        --radius-wap: <?php echo $this->options->JRadiusWap ?>;
        --text-shadow: <?php echo $this->options->JTextShadow ? $this->options->JTextShadow : '0 1px 2px rgba(0, 0, 0, 0.25)' ?>;
        --box-shadow: <?php echo $this->options->JBoxShadow ? $this->options->JBoxShadow : '0px 0px 20px -5px rgba(158, 158, 158, 0.22)' ?>;
        --background: <?php echo $this->options->JCardBackground ? $this->options->JCardBackground : '#fff' ?>;
        --swiper-theme-color: #fff !important;
    }
    

    .comment-list video{border: 0;max-height: 80%; max-width: 100%}
    .comment-list img {max-width:210px;max-height:210px;-o-object-fit: cover;object-fit: cover;}

    <?php $this->options->JCustomCSS() ?>
</style>

<?php $this->need('public/configure.php'); ?>

<?php $this->options->JCustomHeadEnd() ?>

<?php if($this -> options -> aidao_ri == '1'): ?>
<style>html {-webkit-filter: grayscale(100%);}</style>
<?php endif; ?>