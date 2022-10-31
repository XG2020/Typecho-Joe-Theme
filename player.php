<!DOCTYPE html> 
<html lang="en" data-color-mode="<?php if($_COOKIE['night']=='1')echo 'dark';else echo 'light'; ?>">

<head>
    <meta charset="UTF-8" />
    <meta name="renderer" content="webkit" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, shrink-to-fit=no, viewport-fit=cover" />
    <link rel="shortcut icon" href="https://xggm.top/favicon.ico" />
    <link rel="stylesheet" href="<?php echo autoCdnUrl('assets/css-local/npm/plyr.min.css'); ?>" />
    <title>Joe Player</title>
    <style>
        html {
            height: 100%;
        }

        body {
            margin: 0;
            height: 100%;
        }

        .plyr {
            height: 100%;
        }

        :root {
            /* 主要色彩，更多色彩查看官方文档 */
            --plyr-color-main: #409EFF;
        }
    </style>
</head>

<body>
    <video playinline></video>
    <script src="<?php echo autoCdnUrl('assets/js-local/npm/plyr.min.js'); ?>"></script>
    <script src="<?php echo autoCdnUrl('assets/js-local/npm/hls.min.js'); ?>"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            /* 获取播放器组件 */
            const video = document.querySelector('video');
            /* 获取当前URL地址 */
            const source = '<?php echo $_GET['url'] ?>';
            /* 生成播放器组件 */
            const player = new Plyr(video, {
                settings: ['captions', 'speed'],
                i18n: {
                    speed: '速度',
                    normal: '正常',
                },
                speed: {
                    selected: 1,
                    options: [1, 1.25, 1.5, 2]
                },
            });
            /* 判断当前链接类型是否为流类型 */
            if (/\.m3u8$/.test(source)) {
                const hls = new Hls();
                hls.loadSource(source);
                hls.attachMedia(video);
            } else {
                video.src = source
            }
        })
    </script>
</body>

</html>