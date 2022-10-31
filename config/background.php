<!-- 移动端 -->
<?php if (isMobile()) : ?>
    <!-- 填写了背景图，则显示背景图 -->
    <?php if ($this->options->JDocumentWAPBG) : ?>
        <style>
            body::before {
                content: '';
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: url(<?php $this->options->JDocumentWAPBG() ?>);
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center 0;
                z-index: -999;
				opacity: 0.3;
            }
        </style>
    <?php else : ?>
        <!-- 没填写则显示默认的灰色 -->
        <style>
            body {
                background: var(--background);
            }
        </style>
    <?php endif; ?>
<?php else : ?>
    <!-- 如果开启了动态背景，则显示动态背景 -->
    <?php if ($this->options->JDocumentCanvasBG !== 'off') : ?>
        <script src="<?php echo autoCdnUrl('assets/background/' . $this->options->JDocumentCanvasBG); ?>"></script>
    <?php else : ?>
        <!-- 如果填写了背景图，则优先显示背景图 -->
        <?php if ($this->options->JDocumentPCBG) : ?>
            <style>
                body::before {
                    content: '';
                    position: fixed;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    background: url(<?php $this->options->JDocumentPCBG() ?>);
                    background-repeat: no-repeat;
                    background-size: cover;
                    background-position: center 0;
                    z-index: -999;
					opacity: 0.3;
                }
            </style>
        <?php else : ?>
            <!-- 没填写则显示默认的灰色 -->
            <style>
                body {
                    background: var(--background);
                }
            </style>
        <?php endif; ?>
    <?php endif; ?>
<?php endif; ?>