<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

switch(substr($_SERVER['SCRIPT_FILENAME'], strlen(G5_PATH)))
{
	case '/bbs/register.php':
	case '/bbs/register_form.php':
	case '/bbs/register_result.php':
	case '/plugin/social/register_member.php':
		include_once(G5_THEME_PATH."/tail.sub.php");
		return;
		break;
}
?>
		<?php if($g5['sidebar']['right']) { ?>
		</div>

		<div class="col-lg-3 mt-lg-0">
			<?php @include G5_PATH.'/sidebar.right.php'; ?>
		</div>
		<?php } ?>

</main>

<footer id="footer" class="footer--container">
    <div class="footer--wrap">
        <div class="footer--logo">
            <div class="footer--logo-img">참꽃</div>
            <div class="footer--logo-exp">참꽃은 [안치환과 자유]의 스케줄과 공연기획, 음반 발매 및 홍보를 진행하고 있습니다.</div>
        </div>
        <div class="footer--text">
            <p>02. 325. 2561<span></span>010. 2518. 1975</p>
            <p>an_free@hanmail.net</p>
            <p>서울시 서대문구 연희로 26다길 35 [03720]</p>
        </div>
    </div>
</footer>

<?php
if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>