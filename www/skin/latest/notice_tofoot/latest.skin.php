<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
add_javascript('<script src="'.G5_JS_URL.'/jquery.bxslider.js"></script>', 10);
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>
<div class="footer--notice">
    <div class="footer--notice-wrap">
        <?php for ($i=0; $i<$list_count; $i++) {  
                echo "<a href=\"".get_pretty_url($bo_table, $list[$i]['wr_id'])."\">";
                echo "<p>Notice</p>";
                echo "<span></span><div>";
                echo $list[$i]['subject'];
                echo "</div></a>";
        }  ?>
        <?php if ($list_count == 0) { //게시물이 없을 때  ?>
        <div class="empty_li">게시물이 없습니다.</div>
        <?php }  ?>
    </div>
</div>
