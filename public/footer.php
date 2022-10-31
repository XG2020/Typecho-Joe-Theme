<!-- 鱼群跳跃 -->
<?php if ($this->options->JFishStatus === "top") : ?>
    <div id="j-fish-skip"></div>
<?php endif; ?>

<section class="container-fluid j-footer">
    <section class="row">
        <section class="container">
            <section class="banquan">
                <?php if ($this->options->JBanQuan) : ?>
                    <span class="info"><?php $this->options->JBanQuan() ?></span>
                <?php else : ?>
                    <span class="info">2020 - 2021 © Reach - <a href="//xggm.top">XG.孤梦</a></span>
                <?php endif; ?>
                <?php if ($this->options->JCountTime === 'on') : ?>
                    <svg viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <path d="M872 64c13.2544 0 24 10.7456 24 24 0 13.2544-10.7456 24-24 24h-104v177.456c0 67.0672-36.4912 128.8224-95.2368 161.1744l-111.0816 61.1744 111.328 61.536C731.6176 605.7328 768 667.4112 768 734.376V912h104c13.2544 0 24 10.7456 24 24 0 13.2544-10.7456 24-24 24H152c-13.2544 0-24-10.7456-24-24 0-13.2544 10.7456-24 24-24h104V734.544c0-67.0672 36.4912-128.8224 95.2368-161.1744l111.08-61.176-111.328-61.5328C292.3824 418.2656 256 356.5872 256 289.6224V112H152c-13.2544 0-24-10.7456-24-24 0-13.2544 10.7456-24 24-24h720zM512.4 539.4112l-138.0064 76.0032A136 136 0 0 0 304 734.544V912h416V734.3776a136 136 0 0 0-70.2096-119.0272l-137.3904-75.9392zM720 112H304v177.6224a136 136 0 0 0 70.2096 119.0272l137.3904 75.9392 138.0064-76.0032A136 136 0 0 0 720 289.456V112z" fill="#979797" p-id="2750"></path>
                    </svg>
                    <span class="time"><?php echo timerStop(); ?></span>
                <?php endif; ?>
            </section>	
			<?php if ($this->options->yunxing_time) : ?>
<?php
        $adContent1 = $this->options->yunxing_time;
        $adContent1Counts = explode("||", $adContent1);
        ?>
			<p class="yunxing" style="text-align: center;">站点已稳定运行：<SPAN id=span_dt_dt style="color: #2F889A;"></SPAN> <SCRIPT language=javascript>function show_date_time(){
window.setTimeout("show_date_time()", 1000);
BirthDay=new Date("<?php echo $adContent1Counts[2] ?>/<?php echo $adContent1Counts[1] ?>/<?php echo $adContent1Counts[0] ?>");
today=new Date();
timeold=(today.getTime()-BirthDay.getTime());
sectimeold=timeold/1000
secondsold=Math.floor(sectimeold);
msPerDay=24*60*60*1000
e_daysold=timeold/msPerDay
daysold=Math.floor(e_daysold);
e_hrsold=(e_daysold-daysold)*24;
hrsold=Math.floor(e_hrsold);
e_minsold=(e_hrsold-hrsold)*60;
minsold=Math.floor((e_hrsold-hrsold)*60);
seconds=Math.floor((e_minsold-minsold)*60);
span_dt_dt.innerHTML='<font style=color:#C40000>'+daysold+'</font> 天 <font style=color:#C40000>'+hrsold+'</font> 时 <font style=color:#C40000>'+minsold+'</font> 分 <font style=color:#C40000>'+seconds+'</font> 秒';
}
show_date_time();</script> </p>
<?php endif; ?>
            <section class="banquan-links">
                <?php if ($this->options->JBanQuanLinks) : ?>
                    <?php $this->options->JBanQuanLinks() ?>
                <?php else : ?>                    
                    <a target="_blank" href="<?php $this->options->feedUrl(); ?>">RSS</a>
                    <a target="_blank" href="<?php echo $this->options->siteUrl . "index.php/sitemap.xml" ?>">MAP</a>
                <?php endif; ?>
				<div class="tooltip">当前在线<?php echo online_users() ?>人<span class="tooltiptext">博主 <?php get_last_login(1); ?> 在线</span></div>              
            </section>
        </section>
    </section>
</section>

<!-- 鱼群跳跃 -->
<?php if ($this->options->JFishStatus === "bottom") : ?>
    <div id="j-fish-skip"></div>
<?php endif; ?>

<section class="j-actions">    
    <?php if ($this->options->JBackTopStatus === 'on') : ?>
        <section class="item" id="backToTop">
            <svg viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <path d="M725.902222 498.915556c18.204444-251.448889-93.297778-410.737778-205.368889-475.591112l-6.257777-3.982222-6.257778 3.413334c-111.502222 64.853333-224.711111 224.142222-204.8 475.591111-55.751111 53.475556-80.213333 116.622222-80.213334 204.8v15.36l179.2-35.271111c11.377778 40.391111 58.595556 69.973333 113.208889 69.973333 54.613333 0 101.262222-29.582222 112.64-68.835556l180.337778 36.408889V705.422222c-0.568889-89.884444-25.031111-153.6-82.488889-206.506666zM571.733333 392.533333c-33.564444 31.288889-87.04 28.444444-118.328889-5.12s-28.444444-87.04 5.12-117.76c33.564444-31.288889 87.04-28.444444 118.328889 5.12s28.444444 86.471111-5.12 117.76zM515.413333 761.173333c-35.84 0-64.284444 29.013333-64.284444 64.284445 0 35.84 54.044444 182.613333 64.284444 182.613333s64.284444-146.773333 64.284445-182.613333c0-35.271111-29.013333-64.284444-64.284445-64.284445z" fill="" p-id="10602"></path>
            </svg>
        </section>
    <?php endif; ?>
    <?php if ($this->options->JLogin === 'on') : ?>
        <?php if ($this->user->hasLogin()): ?>
            <div class="item active" id="onLogin">
    	        <a href="<?php $this->options->adminUrl(); ?>"><img style="width: 100%; height: 100%;border-radius: 50%" src="<?php ParseAvatar($this->user->mail); ?>"/></a>
    	    </div>
    	<?php else:?>
    	     <div class="item active" id="onLogin">
                <a style="font-weight:bold;font-size:18px;color:var(--theme)" id="toLogin" href="javascript:;">登</a>
    	    </div>
    	<?php endif; ?>
    <?php endif; ?>
    <?php if ($this->options->JGlobalThemeStatus === 'on') : ?>
        <div class="item active" id="openColorPick">
            <svg viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <path d="M509.8 986.6c-95.9 0-187.6-34.7-258.2-97.7C180.4 825.1 137.1 738.6 130 645c-7.3-93.7 22.2-185.4 82.8-258.7l0.2-0.2L471.2 46.2c7.9-10.5 20.7-16.8 34.3-16.9h0.2c13.3 0 26 6.2 34.2 16.4l263.7 336.6c0.3 0.5 1 1.1 1.4 1.4 60.9 72.2 91.2 163.3 85.3 256.4-6 93.8-47.9 180.9-118.5 245.5-71 65-164.1 101-262 101zM217.1 639.2c-0.3 1.6 0.1 3.5 0.9 6.4 8.7 36.6 37.8 101.7 134.7 126 15.9 4 31.4 6 46.2 6 52.8 0 89.8-24.6 125.4-48.6 30.4-20.3 59.1-39.6 94.6-39.6 3.7 0 7.6 0.2 11.5 0.6 50.1 5.7 106.9 24.1 143.4 39.4 1 0.3 1.9 0.5 3 0.5 1 0 1.9-0.2 2.8-0.5 1.8-0.6 3.3-2.1 4.1-3.9 41.3-98.4 23.5-210.4-46.8-291.9L512.2 147.4c-1.4-1.8-3.5-2.9-5.8-2.9s-4.5 1.2-6 2.9L281 435.9l-1.3 1.7c-0.2 0.3-0.4 0.5-0.6 1-41.8 50.6-64.8 114.2-64.7 179.1 0 0.3 0 0.5 0.1 1l2.6 20.5z" p-id="6717"></path>
            </svg>
            <div class="color-pick" id="colorPick"></div>
        </div>
    <?php endif; ?>	
    
	<div class="item active" id="openColorPick">
	<a style="font-weight:bold;font-size:18px;color:var(--theme)" id="translateLink" href="javascript:translatePage();">繁</a>
	</div>	
	<button class="read_book_button  not_read_book"   style="display: none"></button>
    <!-- <?php if ($this->options->JDayNight === 'on') : ?>
        <div class="item light" id="j-day-night">
            <svg viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <path d="M768 608c-6.7 0-13.4-2.1-19.2-6.4-14.1-10.6-17-30.7-6.4-44.8C780.1 506.7 800 446.9 800 384c0-158.8-129.2-288-288-288S224 225.2 224 384c0 62.9 19.9 122.7 57.6 172.8 10.6 14.1 7.8 34.2-6.4 44.8-14.1 10.6-34.2 7.8-44.8-6.4C184.3 533.9 160 460.9 160 384c0-194.1 157.9-352 352-352s352 157.9 352 352c0 76.9-24.3 149.9-70.4 211.2-6.3 8.4-15.9 12.8-25.6 12.8z" p-id="1779"></path>
                <path d="M384 800c-10.3 0-20.5-5-26.7-14.3l-128-192c-9.8-14.7-5.8-34.6 8.9-44.4 14.8-9.8 34.6-5.8 44.4 8.9l128 192c9.8 14.7 5.8 34.6-8.9 44.4-5.4 3.7-11.6 5.4-17.7 5.4z m256 0c-6.1 0-12.3-1.8-17.7-5.4-14.7-9.8-18.7-29.7-8.9-44.4l128-192c9.8-14.7 29.6-18.7 44.4-8.9 14.7 9.8 18.7 29.7 8.9 44.4l-128 192C660.5 795 650.3 800 640 800z m0 96H384c-17.7 0-32-14.3-32-32s14.3-32 32-32h256c17.7 0 32 14.3 32 32s-14.3 32-32 32z m0 96H384c-17.7 0-32-14.3-32-32s14.3-32 32-32h256c17.7 0 32 14.3 32 32s-14.3 32-32 32zM512 544c-4.8 0-9.7-1.1-14.3-3.4-15.8-7.9-22.2-27.1-14.3-42.9l40.8-81.7H448c-11.1 0-21.4-5.8-27.2-15.2s-6.4-21.2-1.4-31.1l64-128c7.9-15.8 27.1-22.2 42.9-14.3 15.8 7.9 22.2 27.1 14.3 42.9L499.8 352H576c11.1 0 21.4 5.8 27.2 15.2s6.4 21.2 1.4 31.1l-64 128C535 537.5 523.7 544 512 544z" p-id="1780"></path>
            </svg>
        </div>
    <?php endif; ?> -->
</section>

<audio id="j-hover-music" autoplay="autoplay"></audio>

<div class="j-video-preview j-modal-mask">
    <div class="container">
        <iframe src="<?php echo THEME_URL . '/player.php?url=' ?>" scrolling="no" allowfullscreen="allowfullscreen" frameborder="0"></iframe>
    </div>
    <svg class="close" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path d="M6.713 512C6.713 232.562 233.13 6.2 512 6.2c278.926 0 505.287 226.362 505.287 505.288V512A504.718 504.718 0 0 1 512 1017.287 505.116 505.116 0 0 1 6.713 512z m539.079 0l176.47-176.47a22.983 22.983 0 0 0 0-32.71l-1.082-1.081a22.983 22.983 0 0 0-32.71 0L512 478.72 335.53 301.739a22.983 22.983 0 0 0-32.71 0l-1.081 1.08a22.983 22.983 0 0 0 0 32.712l176.469 176.981-176.47 176.47a22.983 22.983 0 0 0 0 32.767l1.082 1.024a22.983 22.983 0 0 0 32.71 0L512 546.304l176.47 176.47a22.983 22.983 0 0 0 32.71 0l1.081-1.025a22.983 22.983 0 0 0 0-32.768L545.792 512z" p-id="13836"></path>
    </svg>
</div>
<!--- 简繁转换开始 --->

<script type="text/javascript" src="<?php autoCdnUrl('assets/js/tw_cn.js'); ?>"></script>
<script type="text/javascript">
var defaultEncoding = 0; //默认是否繁体，0-简体，1-繁体
var translateDelay = 0; //延迟时间,若不在</body>前, 要设定延迟翻译时间, 如100表示100ms,默认为0
var cookieDomain = "https://www.xggm.top/"; 
var msgToTraditionalChinese = "繁"; //默认切换为繁体时显示的中文字符
var msgToSimplifiedChinese = "简"; //默认切换为简体时显示的中文字符
var translateButtonId = "translateLink"; //默认互换id
translateInitilization();
</script>
<!--- 简繁转换结束 --->
<!--- 阅读模式开始 --->
<script>    
    //判断是否出现正文出现正文的时候出现read按钮
    var topics = document.querySelector('#markdown');
    var read_book_button = document.querySelector('.read_book_button');	
    if (topics) {
        read_book_button.style.display = 'block'        	
    }
    
    read_book_button.onclick = function () {
        //点击事情跟换类名
        var class_name = this.classList[1];
        class_name == 'read_book' ? this.className = 'read_book_button not_read_book' : this.className = 'read_book_button read_book'

        //隐藏样式
        //头
        var head = document.querySelector('.j-header');
        //右侧
        var sideBar = document.querySelector('.j-aside');
        //评价栏
        var comment_form = document.querySelector('#comments');

        //正文无关的内容                
        var footer = document.querySelector('.j-footer');          
        var related = document.querySelector('.related');		        		
				 
		
        //文章
        var read_color = document.querySelector('.main');
		var read_size = document.querySelector('.markdown');
		
        if (class_name == 'read_book') {
            head.style.display = 'block';
            sideBar.style.display = 'block';
            comment_form.style.display = 'block';                       
            footer.style.display = 'block';             
            related.style.display = 'block';                       
            read_color.style.backgroundColor= 'var(--background)';
            read_size.style.fontSize='medium';				
        } else {
            head.style.display = 'none';
            sideBar.style.display = 'none';
            comment_form.style.display = 'none';                      
            footer.style.display = 'none';              
            related.style.display = 'none';                    
            read_color.style.backgroundColor='var(--background)'; 
            read_size.style.fontSize="20px";			
        }
    }
	</script>	
	<!--- 移动端下边栏 --->
	<?php if($this -> options -> JMobiset == '1'): ?>
	<nav class="nav-shouji">
    <div class="nav-item">
        <div class="img">
            <a href="#"><img src="https://xggm.top/img/grzx.png"></a>
        </div>       
    </div>
    <div class="nav-item">
        <div class="img">
            <a href="#"><img src="https://xggm.top/img/dt.png"></a>
        </div>        
    </div>
    <a class="nav-item">
        <div class="img">
            <a href="#"><img src="https://xggm.top/img/home.png"></a>
        </div>       
    </a>
    <div class="nav-item">
        <div class="img">
             <a href="#"><img src="https://xggm.top/img/bz.png"></a>
        </div>       
    </div>
    <div class="nav-item">
        <div class="img">
            <a href="#"><img src="https://xggm.top/img/tv.png"></a>
        </div>        
    </div>
</nav>
<?php endif; ?>
<?php if($this -> options -> copying == '1'): ?>
<script type="text/javascript">
function warning(){ if(navigator.userAgent.indexOf("MSIE")>0) 
{art.dialog.swal("复制成功！","若要转载请务必保留原文链接，申明来源，谢谢合作！","success"); } 
else 
{ swal("复制成功！","若要转载请务必保留原文链接，申明来源，谢谢合作！","success"); }}
document.body.oncopy=function(){warning();}
</script>
<?php endif; ?>
<!-- 灯笼1 -->
<?php if ($this->options->denglong) : ?>
<?php
        $adContent1 = $this->options->denglong;
        $adContent1Counts = explode("||", $adContent1);
        ?>
<div class="deng-box">
<div class="deng">
<div class="xian"></div>
<div class="deng-a">
<div class="deng-b"><div class="deng-t"><?php echo $adContent1Counts[3] ?></div></div>
</div>
<div class="shui shui-a"><div class="shui-c"></div><div class="shui-b"></div></div>
</div>
</div>
<!-- 灯笼2 -->
<div class="deng-box1">
<div class="deng">
<div class="xian"></div>
<div class="deng-a">
<div class="deng-b"><div class="deng-t"><?php echo $adContent1Counts[2] ?></div></div>
</div>
<div class="shui shui-a"><div class="shui-c"></div><div class="shui-b"></div></div>
</div>
</div>
<!-- 灯笼3 -->
<div class="deng-box2">
<div class="deng">
<div class="xian"></div>
<div class="deng-a">
<div class="deng-b"><div class="deng-t"><?php echo $adContent1Counts[1] ?></div></div>
</div>
<div class="shui shui-a"><div class="shui-c"></div><div class="shui-b"></div></div>
</div>
</div>
<!-- 灯笼4 -->
<div class="deng-box3">
<div class="deng">
<div class="xian"></div>
<div class="deng-a">
<div class="deng-b"><div class="deng-t"><?php echo $adContent1Counts[0] ?></div></div>
</div>
<div class="shui shui-a"><div class="shui-c"></div><div class="shui-b"></div></div>
</div>
</div>
<?php endif; ?>
<script src="<?php echo autoCdnUrl('assets/js/codecopy.js'); ?>"></script>
<script src="<?php echo autoCdnUrl('assets/js/axios.min.js'); ?>"></script>
<script src="<?php echo autoCdnUrl('assets/js-local/img.js'); ?>"></script>
<div class="shadow" id="shadow">
    <div class="model">
        <div class="model-title">登录
            <div class="close" id="model-close">X</div>
        </div>
            <div class="content">
               <form class="" id="loginForm" stop-propagation method="post" name="login" action="<?php $this->options->loginAction() ?>">
                   <input type="hidden" name="referer" value="<?php $this->options->siteUrl(); ?>">
                    <div class="form-item">
                       <div>用户名</div>
                       <input class="username" placeholder="请输入用户名" type="text" maxlength="20" name="name" autocomplete="off" />
                    </div>
                    <div class="form-item">
                        <div>密码</div>
                        <input class="password" placeholder="请输入密码" type="password" maxlength="25" name="password" autocomplete="off" />
                    </div>
                    <p style="font-size: 10px;"><label for="remember"><input type="checkbox" name="remember" class="checkbox" value="1" id="remember" /> 下次自动登录</label></p>
                    <div class="form-item">
                         <button type="submit">登 录</button><br><br>
                        <?php if ($this->options->JScan === 'on') : ?>
                            <a href="<?php $this->options->adminUrl(); ?>">扫码登录</a>
                        <?php endif; ?>
                        <?php if ($this->options->allowRegister) : ?>
                            <a style="font-size:10px; color:var(--theme);" id="toRegister" href="<?php $this->options->adminUrl(); ?>register.php">没有账号？点击注册</a>
                        <?php endif; ?>
                    </div>
                </form>
            </div>
        
    </div>
</div>

<script type="text/javascript">
    let btn = document.getElementById('toLogin');
    let shadow = document.getElementById('shadow');
    btn.addEventListener('click', function(e) {
      shadow.className = 'shadow show'
      return false
    }, false)
    shadow.addEventListener('click', function(e) {
      let target = e.target;
      let _class = target.className;
      if(_class.includes('shadow') || _class.includes('close')) {
        shadow.className = 'shadow'
      }
      return false
    }, false)
</script>