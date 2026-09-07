<?php
/*
 * @Descripttion:
 * @Author: 帅气的杜恒欧巴
 * @Date: 2020-12-22 13:06:02
 * @LastEditTime: 2020-12-22 13:06:22
 */
//tags http://cdn.apc.360.cn/index.php?c=WallPaper&a=getAllCategoriesV2&from=360chrome
//new http://wallpaper.apc.360.cn/index.php?c=WallPaper&a=getAppsByOrder&order=create_time&start=【0开始】&count=【加载数】&from=360chrome
//专区 http://wallpaper.apc.360.cn/index.php?c=WallPaper&a=getAppsByCategory&cid=【分类ID】&start=【0开始】&count=【加载数】&from=360chrome
$cid = preg_replace('/[^a-zA-Z0-9_-]/', '', getParam('cid', '360new'));
switch ($cid) {
    case '360new':  // 360壁纸 新图片
        $start = getRangeParam('start', 0, 0, 10000);
        $count = getRangeParam('count', 10, 1, 50);
        echojson(file_get_contents("http://wallpaper.apc.360.cn/index.php?c=WallPaper&a=getAppsByOrder&order=create_time&start={$start}&count={$count}&from=360chrome"));
        break;
    case '360tags':
        echojson(file_get_contents("http://wallpaper.apc.360.cn/index.php?c=WallPaper&a=getAllCategoriesV2&from=360chrome"));
        break;
    case 'bing':
        $start = getRangeParam('start', -1, -1, 7);
        $count = getRangeParam('count', 8, 1, 8);
        echojson(file_get_contents("http://cn.bing.com/HPImageArchive.aspx?format=js&idx={$start}&n={$count}"));
        break;
    default:
        $start = getRangeParam('start', 0, 0, 10000);
        $count = getRangeParam('count', 10, 1, 50);
        echojson(file_get_contents("http://wallpaper.apc.360.cn/index.php?c=WallPaper&a=getAppsByCategory&cid={$cid}&start={$start}&count={$count}&from=360chrome"));
}
/**
 * 获取GET或POST过来的参数
 * @param $key 键值
 * @param $default 默认值
 * @return 获取到的内容（没有则为默认值）
 */
function getParam($key, $default = '')
{
    return trim($key && is_string($key) ? (isset($_POST[$key]) ? $_POST[$key] : (isset($_GET[$key]) ? $_GET[$key] : $default)) : $default);
}
function getRangeParam($key, $default, $min, $max)
{
    $value = filter_var(getParam($key, $default), FILTER_VALIDATE_INT);
    return $value === false ? $default : max($min, min($max, $value));
}
/**
 * 输出一个json或jsonp格式的内容
 * @param $data 数组内容
 */
function echojson($data)
{
    header('Content-type: application/json');
    if (!is_string($data) || $data === '') {
        http_response_code(502);
        $data = json_encode(array('error' => 'Upstream service unavailable'));
    }
    $callback = getParam('callback');
    if ($callback != '') {
        $callback = preg_replace('/[^a-zA-Z0-9_.$]/', '', $callback);
        die($callback . '(' . $data . ')');
    } else {
        die($data);
    }
}
