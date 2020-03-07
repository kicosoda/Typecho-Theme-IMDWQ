<?php
/**
 * 追番模板
 *
 * @package custom
 */
 ?>
<?php $this->need('head.php'); ?>
<?php $this->need('sidebar.php'); ?>
<main class="is-article">
<br>
<section class="page">
<section class="me" style="text-align: center;">
        <div class="my-avatar" style="display: contents;margin: 0 auto;">
           <svg height="144px" viewBox="0 0 456 456" width="144px" xmlns="http://www.w3.org/2000/svg"><g fill="#263238"><path d="m4 232c-2.207031 0-4-1.792969-4-4 0-125.71875 102.28125-228 228-228 2.207031 0 4 1.792969 4 4s-1.792969 4-4 4c-121.3125 0-220 98.695312-220 220 0 2.207031-1.792969 4-4 4zm0 0"/><path d="m252 8h-8c-2.207031 0-4-1.792969-4-4s1.792969-4 4-4h8c2.207031 0 4 1.792969 4 4s-1.792969 4-4 4zm0 0"/><path d="m228 456c-2.207031 0-4-1.792969-4-4s1.792969-4 4-4c121.304688 0 220-98.695312 220-220 0-2.207031 1.792969-4 4-4s4 1.792969 4 4c0 125.71875-102.28125 228-228 228zm0 0"/><path d="m212 456h-8c-2.207031 0-4-1.792969-4-4s1.792969-4 4-4h8c2.207031 0 4 1.792969 4 4s-1.792969 4-4 4zm0 0"/><path d="m396 24h-32c-2.207031 0-4-1.792969-4-4s1.792969-4 4-4h32c2.207031 0 4 1.792969 4 4s-1.792969 4-4 4zm0 0"/><path d="m380 40c-2.207031 0-4-1.792969-4-4v-32c0-2.207031 1.792969-4 4-4s4 1.792969 4 4v32c0 2.207031-1.792969 4-4 4zm0 0"/><path d="m452 76h-32c-2.207031 0-4-1.792969-4-4s1.792969-4 4-4h32c2.207031 0 4 1.792969 4 4s-1.792969 4-4 4zm0 0"/><path d="m436 92c-2.207031 0-4-1.792969-4-4v-32c0-2.207031 1.792969-4 4-4s4 1.792969 4 4v32c0 2.207031-1.792969 4-4 4zm0 0"/></g><path d="m255.054688 124h-54.109376c-5.945312 0-9.816406-6.257812-7.152343-11.574219l27.054687-54.113281c2.953125-5.898438 11.359375-5.898438 14.3125 0l27.054688 54.113281c2.65625 5.316407-1.214844 11.574219-7.160156 11.574219zm0 0" fill="#ffd740"/><path d="m255.054688 128h-54.109376c-4.191406 0-8.007812-2.128906-10.210937-5.6875-2.199219-3.570312-2.398437-7.929688-.519531-11.679688l27.058594-54.113281c2.046874-4.09375 6.160156-6.632812 10.734374-6.632812 4.578126 0 8.6875 2.539062 10.726563 6.632812l27.058594 54.113281c1.871093 3.742188 1.679687 8.109376-.519531 11.671876-2.203126 3.558593-6.027344 5.695312-10.21875 5.695312zm-27.054688-70.113281c-1.542969 0-2.886719.832031-3.574219 2.210937l-27.058593 54.109375c-.902344 1.808594-.175782 3.320313.175781 3.890625.351562.566406 1.386719 1.894532 3.402343 1.894532h54.109376c2.015624 0 3.058593-1.328126 3.410156-1.894532.351562-.570312 1.070312-2.097656.167968-3.890625l-27.046874-54.109375c-.699219-1.378906-2.035157-2.210937-3.585938-2.210937zm0 0" fill="#263238"/><path d="m380 332h-64c-4.414062 0-8-3.585938-8-8v-64c0-4.414062 3.585938-8 8-8h64c4.414062 0 8 3.585938 8 8v64c0 4.414062-3.585938 8-8 8zm0 0" fill="#4db6ac"/><path d="m380 336h-64c-6.617188 0-12-5.382812-12-12v-64c0-6.617188 5.382812-12 12-12h64c6.617188 0 12 5.382812 12 12v64c0 6.617188-5.382812 12-12 12zm-64-80c-2.199219 0-4 1.800781-4 4v64c0 2.199219 1.800781 4 4 4h64c2.199219 0 4-1.800781 4-4v-64c0-2.199219-1.800781-4-4-4zm0 0" fill="#263238"/><path d="m228 376c-29.183594 0-57.457031-8.527344-81.753906-24.671875-1.839844-1.214844-2.335938-3.703125-1.117188-5.535156 1.214844-1.839844 3.695313-2.335938 5.542969-1.121094 22.984375 15.257813 49.71875 23.328125 77.328125 23.328125 27.601562 0 54.34375-8.070312 77.328125-23.335938 1.816406-1.199218 4.3125-.734374 5.542969 1.128907 1.21875 1.832031.722656 4.320312-1.128906 5.542969-24.285157 16.136718-52.558594 24.664062-81.742188 24.664062zm0 0" fill="#263238"/><path d="m84.398438 240c-2.101563 0-3.871094-1.648438-3.992188-3.785156l-.148438-2.320313c-.128906-1.949219-.257812-3.902343-.257812-5.894531 0-59.640625 35.503906-113.175781 90.449219-136.390625 2.03125-.839844 4.375.085937 5.238281 2.132813.855469 2.035156-.09375 4.386718-2.128906 5.242187-51.972656 21.953125-85.558594 72.589844-85.558594 129.015625 0 1.808594.128906 3.574219.246094 5.351562l.152344 2.433594c.128906 2.199219-1.558594 4.085938-3.765626 4.207032-.082031.007812-.152343.007812-.234374.007812zm0 0" fill="#263238"/><path d="m371.59375 240c-.074219 0-.152344 0-.21875-.007812-2.207031-.128907-3.894531-2.007813-3.773438-4.207032l.160157-2.433594c.117187-1.777343.238281-3.542968.238281-5.351562 0-56.414062-33.585938-107.054688-85.550781-129.015625-2.042969-.855469-2.992188-3.207031-2.136719-5.242187.855469-2.046876 3.214844-2.964844 5.238281-2.132813 54.945313 23.222656 90.449219 76.757813 90.449219 136.390625 0 1.992188-.136719 3.945312-.265625 5.894531l-.148437 2.320313c-.113282 2.136718-1.882813 3.785156-3.992188 3.785156zm0 0" fill="#263238"/><path d="m148 292c0 22.089844-17.910156 40-40 40s-40-17.910156-40-40 17.910156-40 40-40 40 17.910156 40 40zm0 0" fill="#40c4ff"/><path d="m108 336c-24.265625 0-44-19.742188-44-44s19.734375-44 44-44 44 19.742188 44 44-19.734375 44-44 44zm0-80c-19.847656 0-36 16.152344-36 36s16.152344 36 36 36 36-16.152344 36-36-16.152344-36-36-36zm0 0" fill="#263238"/><path d="m228 280c-13.886719 0-26.953125-5.414062-36.769531-15.230469-1.558594-1.5625-1.558594-4.097656 0-5.65625 1.5625-1.5625 4.097656-1.5625 5.65625 0 8.304687 8.3125 19.359375 12.886719 31.113281 12.886719s22.800781-4.574219 31.113281-12.886719c8.3125-8.304687 12.886719-19.351562 12.886719-31.113281 0-2.207031 1.792969-4 4-4s4 1.792969 4 4c0 13.886719-5.414062 26.953125-15.230469 36.769531-9.824219 9.816407-22.882812 15.230469-36.769531 15.230469zm0 0" fill="#263238"/><path d="m180 232.007812c-2.207031 0-4-1.792968-4-4 0-13.886718 5.40625-26.953124 15.230469-36.785156 20.273437-20.261718 53.273437-20.261718 73.539062 0 1.558594 1.5625 1.558594 4.097656 0 5.65625-1.5625 1.5625-4.097656 1.5625-5.65625 0-17.152343-17.152344-45.066406-17.160156-62.226562 0-8.3125 8.3125-12.886719 19.367188-12.886719 31.128906 0 2.207032-1.792969 4-4 4zm0 0" fill="#263238"/><path d="m180 238c-1.023438 0-2.046875-.390625-2.832031-1.167969l-12-12c-1.558594-1.558593-1.558594-4.097656 0-5.65625 1.558593-1.558593 4.097656-1.558593 5.65625 0l9.175781 9.167969 9.167969-9.167969c1.558593-1.558593 4.097656-1.558593 5.65625 0 1.558593 1.558594 1.558593 4.097657 0 5.65625l-12 12c-.785157.777344-1.808594 1.167969-2.824219 1.167969zm0 0" fill="#263238"/><path d="m288 238c-1.023438 0-2.046875-.390625-2.832031-1.167969l-9.167969-9.175781-9.167969 9.167969c-1.558593 1.558593-4.097656 1.558593-5.65625 0-1.558593-1.558594-1.558593-4.097657 0-5.65625l12-12c1.558594-1.558594 4.097657-1.558594 5.65625 0l12 12c1.558594 1.558593 1.558594 4.097656 0 5.65625-.785156.785156-1.808593 1.175781-2.832031 1.175781zm0 0" fill="#263238"/></svg>
        </div>
        <div class="my-info">
            <h1 style="margin-bottom: 0;"><?php $this->title() ?></h1>
            <p>彼女を忘れたと自分に告げる</p>
        </div>
    </section>
<?php $this->content(); ?>
<section class="paul-bangumi">
<div class="row">
<?php
$array = [1,2];
foreach ($array as $val){
$url = "https://space.bilibili.com/ajax/Bangumi/getList?mid=40065341&page=" . $val;
$content = file_get_contents($url);
$content = json_decode($content);
if($content){
$content = $content -> data -> result;
foreach($content as $item){
$image = preg_replace("/http:\/\//", "https://mirror.2890.ltd/", $item -> cover);
?>
<div class="col-6 col-s-4 col-m-4"><a class="bangumi-item" href="<?php echo $item -> share_url ?>" target="_blank" rel="nofollow" style="border-radius:.5em"><img ks-original="<?php echo $image ?>"><h4><?php echo $item -> title ?></h4></a></div>
<?php } } else{ ?><div class="col-12"><p>追番数据获取失败！</p><ul><li>当前页面正在实时获取哔哩哔哩的追番数据，请确保您能正常访问哔哩哔哩动画哦~</li></ul></div>
<?php } } unset($bid, $name, $seem, $total, $img, $width); ?>
</div>
<section class="paul-music" style="margin-top:3em" id="morebangumi"><div class="music-list"><ul class="clear"><a onclick="openbangumilist()" style="color:#67492e;text-align:center"><li>展开所有番剧</li></a></ul></div></section>
<div id="morebangumilist" class="row" style="padding-top:2em;display:none">
<?php
$array = [3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
foreach ($array as $val){
$url = "https://space.bilibili.com/ajax/Bangumi/getList?mid=40065341&page=" . $val;
$content = file_get_contents($url);
$content = json_decode($content);
if($content){
$content = $content -> data -> result;
foreach($content as $item){
$image = preg_replace("/http:\/\//", "https://mirror.2890.ltd/", $item -> cover);
?>
<div class="col-6 col-s-4 col-m-4"><a class="bangumi-item" href="<?php echo $item -> share_url ?>" target="_blank" rel="nofollow" style="border-radius:.5em"><img ks-original="<?php echo $image ?>"><h4><?php echo $item -> title ?></h4></a></div>
<?php } } else{ ?><div class="col-12"><p>追番数据获取失败！</p><ul><li>当前页面正在实时获取哔哩哔哩的追番数据，请确保您能正常访问哔哩哔哩动画哦~</li></ul></div>
<?php } } unset($bid, $name, $seem, $total, $img, $width); ?>
</div>
</section>
</section>
<?php $this->need('footer.php'); ?>