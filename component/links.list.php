<ul class="links">
    <li>
        <!-- ！！！请保留此项！！！ -->
        <section class="item purple" style="background-image:url(https://xggm.top/img/lbg1.png);" >
            <section class="title">
                <a href="//www.xggm.top" target="_blank" style="color:#fff !important;">XG.孤梦</a>
            </section>
            <section class="content">
                <section class="desc" style="color:#fff !important;">随风而动，随遇而安......</section>
                <img src="//xggm.top/logo1.png" />
            </section>
        </section>
    </li>

    <?php if ($this->options->JFriends) : ?>
        <?php
        if (strpos($this->options->JFriends, '||') !== false) {
            $list = "";
            $color = ["deepgrey", "blue", "purple", "green", "yellow", "red", "orange", "success", "warning", "danger", "info"];
            $txt = $this->options->JFriends;
            $string_arr = explode("\r\n", $txt);
            $long = count($string_arr);
            for ($i = 0; $i < $long; $i++) {
                $list = $list . '<li><div class="item ' . $color[rand(0, 10)] . '" style="background-image:url(' . explode("||", $string_arr[$i])[4] . ');"><div class="title"><a style="color:#fff !important;" target="_blank" href="' . explode("||", $string_arr[$i])[1] . '">' . explode("||", $string_arr[$i])[0] . '</a></div><div class="content"><div class="desc" style="color:#fff !important;">' . explode("||", $string_arr[$i])[3] . '</div><img src="' . explode("||", $string_arr[$i])[2] . '" /></div></div></li>';
            }
            echo $list;
        }
        ?>
    <?php endif; ?>
</ul>