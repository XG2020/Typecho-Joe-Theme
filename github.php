<?php

/**
 * Github
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
    <style type="text/css">.hide{display:none}.text-center{text-align:center}.row-sm>div{padding-right:10px;padding-left:10px}.panel{margin-bottom:20px;background-color:#fff;border:1px solid transparent;border-radius:4px;-webkit-box-shadow:0 1px 1px rgba(0,0,0,.05);box-shadow:0 1px 1px rgba(0,0,0,.05)}.panel-body:after,.panel-body:before,.row:after,.row:before{display:table;content:" "}.panel-body:after,.row:after{clear:both}.panel-body a{color:#58666e;word-wrap:break-word;word-break:break-all}.b-light{border-color:rgba(237,241,242,.6)}.bg-light{color:#58666e;background-color:#edf1f2}.bg-info{color:#dcf2f8;background-color:#23b7e5}.bg-dark{color:#a6a8b1;background-color:#3a3f51}.bg-black{color:#7793a7;background-color:#1c2b36}.bg-success{color:#c6efd0;background-color:#27c24c}.bg-success .text-muted{color:#9ee4af!important}.bg-warning{color:#fffefa;background-color:#fad733}.bg-primary{color:#f4f3f9;background-color:#7266ba}.bg-danger{color:#fff;background-color:#f05050}.font-thin{font-weight:300}.panel-body{padding:15px;position:relative}.github_language{position:absolute;font-size:20px;color:rgba(255,255,255,.5);bottom:6px;right:14px}.clear{display:block;overflow:hidden}.text-ellipsis{display:block;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.m-sm{margin:10px}.small,small{font-size:13px}.text-muted{color:#a0a0a0}.btn{display:inline-block;padding:6px 12px;margin-bottom:0;font-size:14px;line-height:1.42857143;text-align:center;white-space:nowrap;vertical-align:middle;-ms-touch-action:manipulation;touch-action:manipulation;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-image:none;border:1px solid transparent;font-weight:500;border-radius:2px;outline:0!important}.btn-rounded{padding-right:15px;padding-left:15px;border-radius:50px}.bg-info .lter,.bg-info.lter{background-color:#55c3e6}.bg-light .lter,.bg-light.lter{background-color:#f9f9f9}.bg-light .lter:hover{background-color:#fff}.panel-body a:hover{color:#222}.bg-light .lter,.bg-light.lter{background-color:#f6f8f8}.bg-light .bg,.bg-light.bg{background-color:#edf1f2}.bg-dark{color:#a6a8b1;background-color:#3a3f51}.bg-dark .lter,.bg-dark.lter{background-color:#54596a}.bg-dark .bg,.bg-dark.bg{background-color:#3a3f51}.bg-dark a{color:#c1c3c9}.bg-dark a:hover{color:#fff}.bg-dark .text-muted{color:#8b8e99!important}.bg-black{color:#7793a7;background-color:#1c2b36}.bg-black .lter,.bg-black.lter{background-color:#314554}.bg-black .bg,.bg-black.bg{background-color:#1c2b36}.bg-black a{color:#96abbb}.bg-black a:hover{color:#fff}.bg-black .text-muted{color:#5c798f!important}.bg-primary{color:#f4f3f9;background-color:#7266ba}.bg-primary .lter,.bg-primary.lter{background-color:#958dc6}.bg-primary .bg,.bg-primary.bg{background-color:#7266ba}.bg-primary a{color:#fff}.bg-primary a:hover{color:#fff}.bg-primary .text-muted{color:#d6d3e6!important}.bg-success{color:#c6efd0;background-color:#27c24c}.bg-success .lter,.bg-success.lter{background-color:#48d46a}.bg-success .bg,.bg-success.bg{background-color:#27c24c}.bg-success a{color:#eefaf1}.bg-success a:hover{color:#fff}.bg-success .text-muted{color:#9ee4af!important}.bg-info{color:#dcf2f8;background-color:#23b7e5}.bg-info .lter,.bg-info.lter{background-color:#55c3e6}.bg-info .bg,.bg-info.bg{background-color:#23b7e5}.bg-info a{color:#fff}.bg-info a:hover{color:#fff}.bg-info .text-muted{color:#b0e1f1!important}.bg-warning{color:#fffefa;background-color:#fad733}.bg-warning .lter,.bg-warning.lter{background-color:#f7de69}.bg-warning .bg,.bg-warning.bg{background-color:#fad733}.bg-warning a{color:#fff}.bg-warning a:hover{color:#fff}.bg-warning .text-muted{color:#fbf2cb!important}.bg-danger{color:#fff;background-color:#f05050}.bg-danger .lter,.bg-danger.lter{background-color:#f18282}.bg-danger .bg,.bg-danger.bg{background-color:#f05050}.bg-danger a{color:#fff}.bg-danger a:hover{color:#fff}.bg-danger .text-muted{color:#e6e6e6!important}.bg-info a:hover{color:#fff}.bg-success .lter,.bg-success.lter{background-color:#48d46a}.btn-success:active,.btn-success:focus,.btn-success:hover{color:#fff!important;background-color:#23ad44;border-color:#20a03f}.btn{font-weight:500;border-radius:2px;outline:0!important}.btn-primary{color:#fff!important;background-color:#7266ba;border-color:#7266ba}.btn-primary:active,.btn-primary:focus,.btn-primary:hover{color:#fff!important;background-color:#6254b2;border-color:#5a4daa}.btn-primary:active{background-image:none}.btn-primary[disabled],.btn-primary[disabled]:active,.btn-primary[disabled]:focus,.btn-primary[disabled]:hover{background-color:#7266ba;border-color:#7266ba}.btn-success{color:#fff!important;background-color:#27c24c;border-color:#27c24c}.btn-success:active,.btn-success:focus,.btn-success:hover{color:#fff!important;border-color:#20a03f}.btn-success:active{background-image:none}.btn-success[disabled],.btn-success[disabled]:active,.btn-success[disabled]:focus,.btn-success[disabled]:hover{background-color:#27c24c;border-color:#27c24c}.btn-info{color:#fff!important;background-color:#23b7e5;border-color:#23b7e5}.btn-info:active,.btn-info:focus,.btn-info:hover{color:#fff!important;background-color:#19a9d5;border-color:#189ec8}.btn-info:active{background-image:none}.btn-info[disabled],.btn-info[disabled]:active,.btn-info[disabled]:focus,.btn-info[disabled]:hover{background-color:#23b7e5;border-color:#23b7e5}.btn-warning{color:#fff!important;background-color:#fad733;border-color:#fad733}.btn-warning:active,.btn-warning:focus,.btn-warning:hover{color:#fff!important;background-color:#f9d21a;border-color:#f9cf0b}.btn-warning:active{background-image:none}.btn-warning[disabled],.btn-warning[disabled]:active,.btn-warning[disabled]:focus,.btn-warning[disabled]:hover{background-color:#fad733;border-color:#fad733}.btn-danger{color:#fff!important;background-color:#f05050;border-color:#f05050}.btn-danger:active,.btn-danger:focus,.btn-danger:hover{color:#fff!important;background-color:#ee3939;border-color:#ed2a2a}.btn-danger:active{background-image:none}.btn-danger[disabled],.btn-danger[disabled]:active,.btn-danger[disabled]:focus,.btn-danger[disabled]:hover{background-color:#f05050;border-color:#f05050}.btn-dark{color:#fff!important;background-color:#3a3f51;border-color:#3a3f51}.btn-dark:active,.btn-dark:focus,.btn-dark:hover{color:#fff!important;background-color:#2f3342;border-color:#292d39}.btn-dark:active{background-image:none}.btn-dark[disabled],.btn-dark[disabled]:active,.btn-dark[disabled]:focus,.btn-dark[disabled]:hover{background-color:#3a3f51;border-color:#3a3f51}.btn-black{color:#fff!important;background-color:#1c2b36;border-color:#1c2b36}.btn-black:active,.btn-black:focus,.btn-black:hover{color:#fff!important;background-color:#131e25;border-color:#0e161b}.btn-black:active{background-image:none}.btn-black[disabled],.btn-black[disabled]:active,.btn-black[disabled]:focus,.btn-black[disabled]:hover{background-color:#1c2b36;border-color:#1c2b36}.block{display:block}.banner{margin-bottom: 10px}</style>
    <!-- 主体 -->
    <section class="container j-index">
        <section class="j-adaption">
            <section class="main <?php $this->options->JListType() ?>">
                <?php
                $githubUser = $this->fields->github;
                if ($githubUser == "" || $githubUser == null){
                    $githubUser = 'XG2020';
                }
                
                function curl_get($url, $cookie) {//url为必传、若无cookie则传空字符串
                  if (empty($url)) {
                         return false;
                     }
                
                     $ch = curl_init();//初始化curl
                     curl_setopt($ch, CURLOPT_URL,$url);//抓取指定网页
                     curl_setopt($ch, CURLOPT_HEADER, 0);//设置header
                     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//要求结果为字符串且输出到屏幕上
                	 if(strpos($url, 'https://')!== false){  //判断请求协议http或https
                     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // 跳过证书检查
                     curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);  // 从证书中检查SSL加密算法是否存在
                	 }
                	 curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); // 模拟用户使用的浏览器
                	 if(!empty($cookie))curl_setopt($ch,CURLOPT_COOKIE,$cookie);  //设置cookie
                     $data = curl_exec($ch);//运行curl
                     curl_close($ch);
                     return $data;
                }
                
                $json = curl_get('https://api.github.com/users/'.$githubUser,'');
                $e = json_decode($json);
                ?>
                <section class="search-title">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20.24 12.24a6 6 0 0 0-8.49-8.49L5 10.5V19h8.5z"></path>
                        <line x1="16" y1="8" x2="2" y2="22"></line>
                        <line x1="17.5" y1="15" x2="9" y2="15"></line>
                    </svg>
                    <section>
                        <span class="ellipsis"><?php echo $githubUser; ?> 的 Repos</span>
                    </section>
                </section>
                <section class="j-index-article article">
                    <div class="j-card-default banner"><code class="j-typing" style="margin:0;opacity: 1;padding-left:2%;min-height: 160px;max-height: 180px;background-position: center;background-repeat: no-repeat;background-size: cover;background-color: transparent;overflow: hidden;width:100%;height: 100%;background-image: url('https://www.xggm.top/img/bg1.gif')">

                            <p class="hljs-comment">// Github Information</p>
                            <b class="hljs-title">"name"</b> ：<b class="hljs-keyword">"<?php echo $e->name; ?>"</b>,<br>
                            <b class="hljs-title">"location"</b> ： <b class="hljs-keyword">"<?php echo $e->location; ?>"</b>,<br>
                            <b class="hljs-title">"blog"</b> ： <b class="hljs-keyword">"<?php echo $e->blog; ?>"</b>,<br>
                            <b class="hljs-title">"bio"</b> ： <b class="hljs-keyword">"<?php echo $e->bio; ?>"</b>,<br>
                            <b class="hljs-title">"public_repos"</b> ：<b class="hljs-keyword">"<?php echo $e->public_repos; ?>"</b> ， <b class="hljs-title">"followers"</b> ：<b class="hljs-keyword">"<?php echo $e->followers; ?>"</b> ， <b class="hljs-title">"following"</b> ：<b class="hljs-keyword">"<?php echo $e->following; ?>"</b>
                            
                    </code></div>
                    <small class="text-muted letterspacing github_tips"></small>

                    <div class="github_page">
                        <div class="loading-nav text-center">
                            <div class="spinner-border" role="status">
                                <span class="sr-only"></span>
                            </div>
                        </div>
                        <nav class="alert alert-warning hide text-center" role="alert">
                            <p class="infinite-scroll-request">加载失败！尝试重新加载</p>
                        </nav>
                    </div>
                </section>
                <script type="text/javascript">
                    const githubItemTemple = '<div class="col-xs-12 col-sm-6 col-md-4">' +
                        '<div class="panel b-light {BG_COLOR}">\n' +
                        '        <div class="panel-body"><div class="github_language">{PROJECT_LANGUAGE}</div>' +
                        '          \n' +
                        '          <div class="clear">\n' +
                        '            <h3 class="text-ellipsis font-thin h3">{REPO_NAME}</h3>\n' +
                        '            <small class="block m-sm"><i class="iconfont icon-star m-r-xs"></i>{REPO_STARS} stars / <i class="iconfont icon-fork"></i> {REPO_FORKS} forks</small>\n' +
                        '<small class="text-ellipsis block text-muted">{REPO_DESC}</small>' +
                        '<a target="_blank" href="{REPO_URL}" class="m-sm btn btn-rounded btn-sm lter btn-{BUTTON_COLOR}"><i class="glyphicon glyphicon-hand-up"></i>访问</a>' +
                        '          </div>\n' +
                        '        </div>\n' +
                        '      </div>' +
                        '</div>';
                    function appendHtml(elem,value){
                        let node = document.createElement("div"),
                            fragment = document.createDocumentFragment(),
                            childs = null,
                            i = 0;
                        node.innerHTML = value;
                        childs = node.childNodes;
                        for( ; i < childs.length; i++){
                            fragment.appendChild(childs[i]);
                        }
                        elem.appendChild(fragment);
                        childs = null;
                        fragment = null;
                        node = null;
                    }

                    const open = function () {
                        const handleGithub = function () {
                            var repoContainer = document.querySelector('.github_page')//$('.github_page');
                            var loadingContainer = document.querySelector(".github_page .loading-nav");
                            var errorContainer = document.querySelector(".github_page .error-nav");
                            var countContainer = document.querySelector(".github_tips");
                            var colors = ["light", "info", "dark", "success", "black", "warning", "primary", "danger"];
                            let httpRequest = new XMLHttpRequest();
                            httpRequest.open('GET',"https://api.github.com/users/<?php echo $githubUser; ?>/repos?accept=application/vnd.github.v3+json&sort=updated&direction=desc&per_page=100", true);
                            httpRequest.send();
                            httpRequest.onreadystatechange = function () {
                                if (httpRequest.readyState === 4 && httpRequest.status === 200) {
                                    let json = JSON.parse(httpRequest.responseText);
                                    if (json){
                                        loadingContainer.classList.add("hide")
                                        let ul = "<div class='raw'><div class='col-md-12'><div class=\"row row-sm text-center " +
                                            "github_contain" +
                                            "\"></div></div></div>";
                                        appendHtml(repoContainer,ul)
                                        let contentContainer = document.querySelector(".github_contain");
                                        json.sort(function (a,b) {
                                            return b.stargazers_count - a.stargazers_count
                                        })
                                        let show_len = json.length > 33?33:json.length
                                        for(let i = 0;i<show_len;i++){
                                            let repo = json[i]
                                            repo.updated_at = repo.updated_at.substring(0, repo.updated_at.lastIndexOf("T"));
                                            if (repo.language == null) {
                                                repo.language = "未知";
                                            }
                                            //匹配替换
                                            let item = githubItemTemple.replace("{REPO_NAME}", repo.name)
                                                .replace("{REPO_URL}", repo.html_url)
                                                .replace("{REPO_STARS}", repo.stargazers_count)
                                                .replace("{REPO_FORKS}", repo.forks_count)
                                                .replace("{REPO_DESC}", repo.description)
                                                .replace("{BG_COLOR}", "bg-" + colors[i % 8])
                                                .replace("{BUTTON_COLOR}", colors[(i) % 8])
                                                .replace("{PROJECT_LANGUAGE}", repo.language);
                                            appendHtml(contentContainer,item)
                                        }
                                    }else {
                                        errorContainer.classList.remove("hide");
                                    }
                                }
                            };
                        };

                        return {
                            init: function () {
                                handleGithub();
                            }
                        }
                    };
                    open().init();
                </script>
            </section>
        </section>

    </section>
                        
        <!-- 尾部 -->
        <?php $this->need('public/footer.php'); ?>
    </section>
    <!-- 配置文件 -->
    <?php $this->need('public/config.php'); ?>
</body>

</html>


		

	