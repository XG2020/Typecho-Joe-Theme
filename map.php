<?php

/**
 * 足迹
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
			<div style="background:#353535;padding: 15px;border-radius: 10px;">

<iframe width="100%" scrolling="no" height="680" align="middle" frameborder="no"
                src="https://www.xggm.top/map/" hspace="0" vspace="0" marginheight="0"
                marginwidth="0" name="tv">
                </iframe>
				
				</div>
            </section>
        </section>
                        
        <!-- 尾部 -->
        <?php $this->need('public/footer.php'); ?>
    </section>
    <!-- 配置文件 -->
    <?php $this->need('public/config.php'); ?>
</body>

</html>


		

	