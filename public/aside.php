<div class="j-aside">

    <?php if ($this->options->JAuthorStatus !== 'off') : ?>	
	<?php /* 登录了 */ if ($this->user->hasLogin()): ?>
        <div class="aside aside-user">
            <?php if ($this->user->bgimg !== "" && $this->user->bgimg !== null && $this->options->JasideBg === "on") : ?>
                <?php  echo ('<style>.j-aside .aside-user::before{background: url(')?><?php echo($this->user->bgimg); ?><?php  echo (') no-repeat;background-size: cover;}</style>') ?>
            <?php endif; ?>
            <div class="user">
                <img src="<?php ParseAvatar($this->user->mail); ?>"/>
                <a style="color:var(--theme);" href="<?php echo getUserPermalink($this->user->uid); ?>"><?php $this->user->screenName(); ?><?php dengji($this->user->uid);?></a>
                <!--个性签名-->
                <p style="font-size:14px;" class="desc j-aside-motto"><?php echo($this->user->sign); ?></p><br>
                <!--访问量-->				
				<div style="border-radius: 3px;color: #fff;padding: 5px;background: var(--theme);font-size: 14px;"><?php echo allviewnum($this->user->uid); ?></div>                                
            </div>
            <div class="webinfo">
                <div class="item" title="累计文章数">
                    <span class="num"><?php echo allpostnum($this->user->uid); ?></span>
                    <span>文章数</span>
                </div>
                <div class="item" title="累计评论数">
                    <span class="num"><?php echo commentnum($this->user->uid); ?></span>
                    <span>评论量</span>
                </div>
            </div>
			<?php $this->widget('Widget_Contents_Post_Recent@aside565', 'pageSize=' . $this->options->JAuthorStatus)->to($hot); ?>
            <?php if ($hot->have()) : ?>
                <ul class="articles">
                    <?php while ($hot->next()) : ?>
                        <li title="<?php $hot->title(); ?>">
                            <a href="<?php $hot->permalink(); ?>"><?php $hot->title(); ?></a>
                            <svg t="1599802830077" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                <path d="M448.12 320.331a30.118 30.118 0 0 1-42.616-42.586L552.568 130.68a213.685 213.685 0 0 1 302.2 0l38.552 38.551a213.685 213.685 0 0 1 0 302.2L746.255 618.497a30.118 30.118 0 0 1-42.586-42.616l147.034-147.035a153.45 153.45 0 0 0 0-217.028l-38.55-38.55a153.45 153.45 0 0 0-216.998 0L448.12 320.33zM575.88 703.67a30.118 30.118 0 0 1 42.616 42.586L471.432 893.32a213.685 213.685 0 0 1-302.2 0l-38.552-38.551a213.685 213.685 0 0 1 0-302.2l147.065-147.065a30.118 30.118 0 0 1 42.586 42.616L173.297 595.125a153.45 153.45 0 0 0 0 217.027l38.55 38.551a153.45 153.45 0 0 0 216.998 0L575.88 703.64z m-234.256-63.88L639.79 341.624a30.118 30.118 0 0 1 42.587 42.587L384.21 682.376a30.118 30.118 0 0 1-42.587-42.587z" p-id="7351"></path>
                            </svg>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>		
		<?php else:?>
        <div class="aside aside-user">
                <?php if ($this->author->bgimg !== "" && $this->author->bgimg !== null && $this->options->JasideBg === "on") : ?>
                    <?php  echo ('<style>.j-aside .aside-user::before{background: url(')?><?php echo($this->author->bgimg); ?><?php  echo (') no-repeat;background-size: cover;}</style>') ?>
                <?php endif; ?>
            <div class="user">
                <img src="<?php ParseAvatar($this->author->mail); ?>"/>
                <a style="color:var(--theme);" href="<?php echo getUserPermalink($this->author->uid); ?>"><?php $this->author->screenName(); ?><?php dengji($this->author->uid);?></a>
                <!--个性签名-->
                <p style="font-size:14px;" class="desc j-aside-motto"><?php echo($this->author->sign); ?></p><br>  
				<!--访问量-->				
				<div style="border-radius: 3px;color: #fff;padding: 5px;background: var(--theme);font-size: 14px;"><?php echo allviewnum($this->author->uid); ?></div>                 			
            </div>
            <?php Typecho_Widget::widget('Widget_Stat')->to($quantity); ?>
            <div class="webinfo">
                <div class="item" title="累计文章数">
                    <span class="num"><?php echo number_format($quantity->publishedPostsNum); ?></span>
                    <span>文章数</span>
                </div>
                <div class="item" title="累计评论数">
                    <span class="num"><?php echo number_format($quantity->publishedCommentsNum); ?></span>
                    <span>评论量</span>
                </div>
            </div>
            <?php $this->widget('Widget_Contents_Post_Recent@aside565', 'pageSize=' . $this->options->JAuthorStatus)->to($hot); ?>
            <?php if ($hot->have()) : ?>
                <ul class="articles">
                    <?php while ($hot->next()) : ?>
                        <li title="<?php $hot->title(); ?>">
                            <a href="<?php $hot->permalink(); ?>"><?php $hot->title(); ?></a>
                            <svg t="1599802830077" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                <path d="M448.12 320.331a30.118 30.118 0 0 1-42.616-42.586L552.568 130.68a213.685 213.685 0 0 1 302.2 0l38.552 38.551a213.685 213.685 0 0 1 0 302.2L746.255 618.497a30.118 30.118 0 0 1-42.586-42.616l147.034-147.035a153.45 153.45 0 0 0 0-217.028l-38.55-38.55a153.45 153.45 0 0 0-216.998 0L448.12 320.33zM575.88 703.67a30.118 30.118 0 0 1 42.616 42.586L471.432 893.32a213.685 213.685 0 0 1-302.2 0l-38.552-38.551a213.685 213.685 0 0 1 0-302.2l147.065-147.065a30.118 30.118 0 0 1 42.586 42.616L173.297 595.125a153.45 153.45 0 0 0 0 217.027l38.55 38.551a153.45 153.45 0 0 0 216.998 0L575.88 703.64z m-234.256-63.88L639.79 341.624a30.118 30.118 0 0 1 42.587 42.587L384.21 682.376a30.118 30.118 0 0 1-42.587-42.587z" p-id="7351"></path>
                            </svg>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
    <?php endif; ?>
<?php endif; ?>
<!--互动读者-->
<?php if ($this->options->JactiveUsers): ?>
        <section class="aside aside-hunter-authors aside-count">
            <h3 class="aside-title">
                <svg class="icon" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" >            
        <g transform="translate(0.000000, 1.000000)" fill="var(--main)">
            <path d="M10.926,3.121 C10.926,4.801 9.617,8.012 8.004,8.012 C6.391,8.012 5.081,4.801 5.081,3.121 C5.081,1.441 6.391,0.081 8.004,0.081 C9.617,0.081 10.926,1.441 10.926,3.121 L10.926,3.121 Z" class="si-glyph-fill"></path>
            <path d="M9.033,11.796 L11.426,9.375 L12.705,10.71 L14.348,9.048 C13.717,8.398 12.943,8.05 11.679,8.05 C10.825,9.206 7.99,9.503 7.99,9.503 C7.99,9.503 5.091,9.218 4.237,8.076 C0.144,8.076 0.02,13.986 0.02,13.986 L11.12,13.986 L9.033,11.796 L9.033,11.796 Z" class="si-glyph-fill"></path>
            <path d="M15.094,9.801 L12.713,12.182 L11.297,10.765 L10.372,11.689 L12.714,14.03 L16.02,10.726 L15.094,9.801 Z" class="si-glyph-fill"></path>
        </g></svg><span><?php _e('互动读者'); ?></span></h3>
            <div class="hunter-cont">
                <ul class="hunter-authors">
                    
                        <?php
                        $period = time() - 2592000; // 单位: 秒, 时间范围: 30天
                        $counts = Typecho_Db::get()->fetchAll(Typecho_Db::get()
                            ->select('COUNT(author) AS cnt', 'author', 'max(authorId) authorId', 'max(mail) mail')
                            ->from('table.comments')
                            ->where('created > ?', $period)
                            ->where('status = ?', 'approved')
                            ->where('type = ?', 'comment')
                            ->group('author')
                            ->order('cnt', Typecho_Db::SORT_DESC)
                            ->limit('4')
                        );
                        $mostactive = ''; 
 
                        $viphonor = autoCdnUrl('assets/img/authen.svg');
                        foreach ($counts as $count) {                   
                            $imgUrl = ParseAvatar($count['mail'],1);
                            if ($count['authorId'] == '0') {
                                $c_url = '<li><div class="item"><div class="hunter-avatar"><div class="vatar"><img src="' . $imgUrl . '"></div></div><div class="item-main"><div>' . $count['author'] . '';
                            } else {
                                $c_url = '<li><div class="item"><div class="hunter-avatar"><a href="' . $this->options->siteUrl . 'index.php/author/' . $count['authorId'] . '" ><div class="vatar"><img src="' . $imgUrl . '"><img class="va_v_honor" src="' . $viphonor . '" title="注册用户"></div></a></div><div class="item-main">' . $count['author'] . '';
                            }
                            echo '' . $c_url . '';
                            dengji1($count['mail']);
                            $allpostnum = allpostnum($count['authorId']);
                            echo ' <h4>评论 ' . $count['cnt'] . ' 次 | <i>文章 '.$allpostnum.' 篇</i>';
                            echo ' </h4></div></div></li>';
                        } ?>
                </ul>
            </div>
        </section>
		<?php endif; ?>
    <!-- 广告1 -->
    <?php if ($this->options->JADContent1) : ?>
        <?php
        $adContent1 = $this->options->JADContent1;
        $adContent1Counts = explode("||", $adContent1);
        ?>
        <a class="aside aside-ad" rel="external nofollow" href="<?php echo $adContent1Counts[1] ?>">
            <img src="<?php echo $adContent1Counts[0] ?>">
        </a>
    <?php endif; ?>
	
    <!-- 天气 -->
    <?php if ($this->options->JWether) : ?>
        <div class="aside aside-wether">
        <div id="he-plugin-standard"></div> <script> WIDGET = {"CONFIG":{"layout":"2","width":250,"height":270,"background":"1","dataColor":"FFFFFF","borderRadius":"0","key":"<?php $this->options->JWether(); ?>"}} </script> <script src="https://xggm.top/tq/cs.js"></script>
        </div>
    <?php endif; ?>

    <!-- 自定义 -->
    <?php if ($this->options->JAsideCustom) : ?>
        <div class="aside aside-custom">
            <?php $this->options->JAsideCustom(); ?>
        </div>
    <?php endif; ?>

    <!-- ip信息 -->
    <?php if ($this->options->JAsideVisitor) : ?>
        <div class="aside aside-visitor">
            <img class="lazyload" src="<?php echo GetLazyLoad() ?>" data-original="<?php $this->options->JAsideVisitor() ?>" alt="IP信息">
        </div>
    <?php endif; ?>    
	
    <!-- 人生倒计时 -->
    <?php if ($this->options->JCountDownStatus === "on") : ?>
        <div class="aside aside-count">
            <h3><svg class="icon" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" >    
        <g id="Icon-Set-Filled" sketch:type="MSLayerGroup" transform="translate(-362.000000, -361.000000)" fill="var(--main)">
            <path d="M385,378 L378,378 C377.447,378 377,377.553 377,377 L377,369 C377,368.447 377.447,368 378,368 C378.553,368 379,368.447 379,369 L379,376 L385,376 C385.553,376 386,376.448 386,377 C386,377.553 385.553,378 385,378 L385,378 Z M392,377 C392,369.269 385.732,363 378,363 C370.268,363 364,369.269 364,377 C364,382.303 366.949,386.915 371.296,389.291 L368,393 L371,393 L373.685,390.315 C375.045,390.756 376.493,391 378,391 C379.507,391 380.955,390.756 382.315,390.315 L385,393 L388,393 L384.705,389.291 C389.051,386.915 392,382.303 392,377 L392,377 Z M389,361 L387,361 L387,363 L389,363 C390.657,363 392,364.343 392,366 L392,368 L394,368 L394,366 C394,363.238 391.762,361 389,361 L389,361 Z M364,366 C364,364.343 365.343,363 367,363 L369,363 L369,361 L367,361 C364.238,361 362,363.238 362,366 L362,368 L364,368 L364,366 L364,366 Z" id="alarm" sketch:type="MSShapeGroup"></path>
        </g></svg><span>人生倒计时</span></h3>
            <div class="content">
                <div class="item" id="dayProgress">
                    <div class="title">今日已经过去<span></span>小时</div>
                    <div class="progress">
                        <div class="progress-bar">
                            <div class="progress-inner progress-inner-1"></div>
                        </div>
                        <div class="progress-percentage"></div>
                    </div>
                </div>
                <div class="item" id="weekProgress">
                    <div class="title">这周已经过去<span></span>天</div>
                    <div class="progress">
                        <div class="progress-bar">
                            <div class="progress-inner progress-inner-2"></div>
                        </div>
                        <div class="progress-percentage"></div>
                    </div>
                </div>
                <div class="item" id="monthProgress">
                    <div class="title">本月已经过去<span></span>天</div>
                    <div class="progress">
                        <div class="progress-bar">
                            <div class="progress-inner progress-inner-3"></div>
                        </div>
                        <div class="progress-percentage"></div>
                    </div>
                </div>
                <div class="item" id="yearProgress">
                    <div class="title">今年已经过去<span></span>个月</div>
                    <div class="progress">
                        <div class="progress-bar">
                            <div class="progress-inner progress-inner-4"></div>
                        </div>
                        <div class="progress-percentage"></div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <!-- 热门文章 -->
    <?php if ($this->options->JAsideHotNumber !== 'off') : ?>
        <div class="aside aside-hot">
            <h3><svg class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <path d="M512 938.666667A426.666667 426.666667 0 0 1 85.333333 512a421.12 421.12 0 0 1 131.2-306.133333 58.88 58.88 0 0 1 42.666667-16.64c33.28 1.066667 58.026667 28.16 84.266667 56.96 7.893333 8.533333 19.626667 21.333333 28.373333 29.013333a542.933333 542.933333 0 0 0 24.533333-61.866667c18.133333-52.266667 35.413333-101.76 75.306667-121.6C526.72 64 583.253333 129.706667 654.933333 213.333333c16.213333 18.773333 38.613333 44.8 53.546667 59.52 1.706667-4.48 3.2-8.96 4.48-12.373333 8.533333-24.32 18.986667-54.613333 51.2-61.653333a57.813333 57.813333 0 0 1 55.68 20.053333A426.666667 426.666667 0 0 1 512 938.666667zM260.693333 282.453333A336.64 336.64 0 0 0 170.666667 512a341.333333 341.333333 0 1 0 614.826666-203.733333 90.24 90.24 0 0 1-42.666666 50.56 68.266667 68.266667 0 0 1-53.546667 1.706666c-25.6-9.173333-51.626667-38.4-99.2-93.226666a826.666667 826.666667 0 0 0-87.253333-91.733334 507.733333 507.733333 0 0 0-26.24 64c-18.133333 52.266667-35.413333 101.76-75.946667 119.253334-48.853333 21.333333-88.32-21.333333-120.106667-56.96-5.76-4.693333-13.226667-13.013333-19.84-19.413334z" p-id="14764"></path>
                    <path d="M512 810.666667a298.666667 298.666667 0 0 1-298.666667-298.666667 42.666667 42.666667 0 0 1 85.333334 0 213.333333 213.333333 0 0 0 213.333333 213.333333 42.666667 42.666667 0 0 1 0 85.333334z" p-id="14765"></path>
                </svg><span>热门文章</span></h3>
            <?php $this->widget('Widget_Post_hot@asidehot@hot', 'pageSize=' . $this->options->JAsideHotNumber)->to($hot); ?>
            <?php if ($hot->have()) : ?>
                <ul>
                    <?php $i = 1; ?>
                    <?php while ($hot->next()) : ?>
                        <li>
                            <a href="<?php $hot->permalink(); ?>" title="<?php $hot->title(); ?>">
                                <img class="lazyload" src="<?php echo GetLazyLoad() ?>" data-original="<?php GetRandomThumbnail($hot); ?>">
                                <div class="info">
                                    <p><?php $hot->title(); ?></p>
                                    <span><?php GetPostViews($hot); ?> 阅读 - <?php $hot->date('m/d'); ?></span>
                                </div>
                                <div class="tip"><?php echo $i; ?></div>
                            </a>
                        </li>
                        <?php $i++; ?>
                    <?php endwhile; ?>
                </ul>
            <?php else : ?>
                <p class="empty">暂无内容</p>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <!-- 微博热搜 -->
    <?php if ($this->options->JRanking !== 'off') : ?>
        <?php
        $ranking = $this->options->JRanking;
        $rankingStr = explode("$", $ranking);
        ?>
        <div class="aside aside-ranking">
            <h3><svg t="1609208304108" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <path d="M939.855405 202.777641H832.417563v-78.366426A124.320931 124.320931 0 0 0 708.367484 0H315.271381a124.411215 124.411215 0 0 0-124.05008 124.411215v78.366426H83.873744A84.144595 84.144595 0 0 0 0 286.922236c0 123.14724 82.248633 199.437136 194.561806 232.481044a321.862105 321.862105 0 0 0 281.414918 273.469935v158.899665H308.680656a36.11356 36.11356 0 0 0 0 72.22712h406.277552a36.11356 36.11356 0 0 0 0-72.22712H547.662141v-158.899665a321.681538 321.681538 0 0 0 281.414918-273.469935c112.313172-33.043908 194.65209-109.333804 194.652089-232.481044a84.144595 84.144595 0 0 0-83.873743-84.144595zM67.442074 286.922236A16.612238 16.612238 0 0 1 83.873744 270.851702h107.347557v175.602186C118.542761 415.305943 67.442074 370.976547 67.442074 286.922236z m444.377358 440.314583a254.14918 254.14918 0 0 1-252.794921-253.968612V124.411215a56.69829 56.69829 0 0 1 56.24687-56.69829h393.096103a56.69829 56.69829 0 0 1 56.608005 56.69829v348.856992a254.14918 254.14918 0 0 1-252.794921 253.968612z m320.598131-280.782931V270.851702h107.437842a16.612238 16.612238 0 0 1 16.341386 16.43167c0 83.693176-51.100688 128.022571-123.779228 159.170516z" p-id="15686"></path>
                    <path d="M696.540293 469.476283a33.675895 33.675895 0 0 0-43.426556 19.772174 153.482631 153.482631 0 0 1-92.540999 90.283901 33.856463 33.856463 0 0 0 11.014636 65.816963 32.953624 32.953624 0 0 0 10.924352-1.805678 218.938459 218.938459 0 0 0 133.710457-130.640804A33.856463 33.856463 0 0 0 696.540293 469.476283zM517.417034 157.906542l-2.437665 2.708517a163.955563 163.955563 0 0 1-33.856463 27.08517 183.998589 183.998589 0 0 1-39.8152 16.341386l-6.410157 1.62511v64.914125l10.743784-3.069653a180.567801 180.567801 0 0 0 55.253747-25.911479v223.272086h64.282137v-306.965262z" p-id="15687"></path>
                </svg><?php echo $rankingStr[0] ?></h3>
            <ul class="list">
                <?php
                if($rankingStr[1]==="bilibili"){
                    if($rankingStr[2]==="video"){
                        $result = GetRequest("https://api.bilibili.com/x/web-interface/ranking/v2?rid=0&type=all", "get");
                    }else{
                        $result = GetRequest("https://api.bilibili.com/x/web-interface/popular?ps=10&pn=1", "get");
                    }
                    $res = json_decode($result, true);
                    if ($res['code'] === 0) {
                        for ($i = 0; $i < count($res['data']['list']); $i++) {
                            if ($i < 9) {
                                echo
                                    "<li title=" . $res['data']['list'][$i]['title'] . ">
                                        <span>" . ($i + 1) . "</span>
                                        <a target='_blank' href=" . $res['data']['list'][$i]['short_link'] . ">" . $res['data']['list'][$i]['title'] . "</a>
                                    </li>";
                            }
                        }
                    } else {
                        echo "<li>获取失败！</li>";
                    }
                }elseif($rankingStr[1]==="bilibili_fan"){
                    $result = GetRequest("https://api.bilibili.com/pgc/web/rank/list?day=3&season_type=1", "get");
                    $res = json_decode($result, true);
                    if ($res['code'] === 0) {
                        for ($i = 0; $i < count($res['result']['list']); $i++) {
                            if ($i < 9) {
                                echo
                                    "<li title=" . $res['result']['list'][$i]['title'] . ">
                                        <span>" . ($i + 1) . "</span>
                                        <a target='_blank' href=" . $res['result']['list'][$i]['url'] . ">" . $res['result']['list'][$i]['title'] . "</a>
                                    </li>";
                            }
                        }
                    } else {
                        echo "<li>获取失败！</li>";
                    }
                }else{
                    $result = GetRequest("https://the.top/api/v1/item/" . $rankingStr[1] . "?limit=10", "get");
                    $res = json_decode($result, true);
                    if ($res['code'] === 0) {
                        for ($i = 0; $i < count($res['data']); $i++) {
                            if ($i < 9) {
                                echo
                                    "<li title=" . $res['data'][$i]['title'] . ">
                                        <span>" . ($i + 1) . "</span>
                                        <a target='_blank' href=" . $res['data'][$i]['url'] . ">" . $res['data'][$i]['title'] . "</a>
                                    </li>";
                            }
                        }
                    } else {
                        echo "<li>获取失败！</li>";
                    }
                }
                ?>
            </ul>
        </div>
    <?php endif; ?>

<!-- 云标签 -->
    <?php if ($this->options->J3DTagStatus === 'on') : ?>
        <div class="aside aside-cloud">
            <h3><svg class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <path d="M898.048 556.544L547.84 916.992c-43.008 44.032-112.64 44.032-155.648 0l-272.384-280.576c-43.008-44.032-43.008-116.224 0-160.256l350.208-360.96c26.624-28.672 31.744-41.472 59.904-41.472H885.76c28.16 0 50.688 23.552 50.688 52.224v366.592c0 28.672-15.872 40.448-38.4 64zM158.72 596.48l272.384 280.576c21.504 22.016 56.32 22.016 77.824 0l38.4-39.936-349.696-361.472-39.424 40.448c-20.992 22.528-20.992 58.368 0.512 80.384z m727.04-444.416c0-14.336-11.264-26.112-25.6-26.112h-305.152c-13.824 0-33.792 16.384-46.592 29.184l-271.36 280.576 349.696 360.96 272.384-280.576c13.824-14.336 26.624-35.328 26.624-49.664V152.064z m-275.456 270.336c-42.496-43.52-42.496-114.688 0-158.208 42.496-44.032 111.104-44.032 153.6 0 42.496 43.52 42.496 114.688 0 158.208s-111.616 43.52-153.6 0z m115.2-118.784c-20.992-22.016-55.808-22.016-76.8 0s-20.992 57.344 0 79.36c20.992 22.016 55.808 22.016 76.8 0s20.992-57.344 0-79.36z" p-id="25822"></path>
                </svg><span>标签云</span></h3>
            <?php $this->widget('Widget_Metas_Tag_Cloud', array('sort' => 'count', 'ignoreZeroCount' => true, 'desc' => true, 'limit' => 50))->to($tags); ?>
            <?php if ($tags->have()) : ?>
                <div class="cloud" id="cloud"></div>
                <ul id="cloudList">
                    <?php while ($tags->next()) : ?>
                        <li data-url="<?php $tags->permalink(); ?>" data-label="<?php $tags->name(); ?>"></li>
                    <?php endwhile; ?>
                </ul>
            <?php else : ?>
                <p class="empty">暂无标签</p>
            <?php endif; ?>
        </div>
    <?php endif; ?>
    <!-- 最新回复 -->
    <?php if ($this->options->JAsideReplyStatus !== 'off') : ?>
        <div class="aside aside-reply">
            <h3><svg  class="icon" viewBox="0 0 31 32" version="1.1" xmlns="http://www.w3.org/2000/svg" >                 
        <g id="Icon-Set-Filled" sketch:type="MSLayerGroup" transform="translate(-259.000000, -257.000000)" fill="var(--main)">
            <path d="M265.5,267 C266.329,267 267,267.672 267,268.5 C267,269.329 266.329,270 265.5,270 C264.671,270 264,269.329 264,268.5 C264,267.672 264.671,267 265.5,267 L265.5,267 Z M271.5,267 C272.329,267 273,267.672 273,268.5 C273,269.329 272.329,270 271.5,270 C270.671,270 270,269.329 270,268.5 C270,267.672 270.671,267 271.5,267 L271.5,267 Z M277.5,267 C278.329,267 279,267.672 279,268.5 C279,269.329 278.329,270 277.5,270 C276.671,270 276,269.329 276,268.5 C276,267.672 276.671,267 277.5,267 L277.5,267 Z M268.637,279.736 C269.414,279.863 271.181,280 272,280 C279.18,280 284,274.657 284,268.375 C284,262.093 277.977,257 272,257 C264.811,257 259,262.093 259,268.375 C259,272.015 260.387,275.104 263,277.329 L263,283 L268.637,279.736 L268.637,279.736 Z M285.949,266.139 L286,267 C286.008,267.817 286,267.742 286,268.5 C286,276.475 279.716,282 271,282 L268,282 C270.38,284.328 273.149,285.75 277,285.75 C277.819,285.75 278.618,285.676 279.395,285.549 L285,289 L285,283.329 C288.04,281.246 290,278.015 290,274.375 C290,271.131 288.439,268.211 285.949,266.139 L285.949,266.139 Z" id="comments" sketch:type="MSShapeGroup"></path>
        </g></svg><span>最新回复</span></h3>
            <?php $this->widget('Widget_Comments_Recent@ok88', 'ignoreAuthor=true&pageSize=5')->to($comments); ?>
            <?php if ($comments->have()) : ?>
                <ol class="list" id="asideReply">
                    <?php while ($comments->next()) : ?>
                        <li>
                            <div class="user">
                                <img src="<?php ParseAvatar($comments->mail); ?>">
                                <div class="info">
                                    <div class="name"><?php $comments->author(false); ?><?php dengji1($comments->mail);?>	</div>							
                                    <span><?php $comments->date('Y-m-d'); ?></span>
                                </div>
                            </div>
                            <div class="reply">
                                <a title="<?php $comments->excerpt(); ?>" href="<?php $comments->permalink(); ?>"><?php echo ParseReply($comments->content); ?></a>
                            </div>
                        </li>
                    <?php endwhile; ?>
                </ol>
            <?php else : ?>
                <p class="empty">暂无回复</p>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <!-- 广告2 -->
    <?php if ($this->options->JADContent2) : ?>
        <?php
        $adContent2 = $this->options->JADContent2;
        $adContent2Counts = explode("||", $adContent2);
        ?>
        <a class="aside aside-ad" rel="external nofollow" href="<?php echo $adContent2Counts[1] ?>" title="广告">
            <img src="<?php echo $adContent2Counts[0] ?>">
            <div class="j-ad">广告</div>
        </a>
    <?php endif; ?>

    
</div>