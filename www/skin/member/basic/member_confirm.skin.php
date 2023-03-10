<?php
include_once('./_common.php');
define('_INDEX_', true);
include_once(G5_PATH.'/head.php');

if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.G5_PUBLISH_URL.'/css/member_confirm.css">', 2);
?>

<!-- 회원 비밀번호 확인 시작 { -->
<div id="mb_confirm" class="mbskin">
    <div class="mbskin-bg"></div>
    <div class="mbskin_box">
        <div class="mbskin--title"><?php echo $g5['title'] ?></div>

        <div class="mbskin--subTitle">
        <p>비밀번호를 한번 더 입력해주세요.</p>
        <?php if ($url == 'member_leave.php') { ?>
        비밀번호를 입력하시면 회원탈퇴가 완료됩니다.
        <?php }else{ ?>
        회원님의 정보를 안전하게 보호하기 위해 비밀번호를 한번 더 확인합니다.
        <?php }  ?>
        </div>

        <div class="mbskin--formBox">
            <form name="fmemberconfirm" action="<?php echo $url ?>" onsubmit="return fmemberconfirm_submit(this);" method="post">
                <input type="hidden" name="mb_id" value="<?php echo $member['mb_id'] ?>">
                <input type="hidden" name="w" value="u">
    
                <fieldset>
                    <div class="member--confirm-id">
                        <span class="confirm_id">아이디</span>
                        <span class="member_id" id="mb_confirm_id"><?php echo $member['mb_id'] ?></span>
                    </div>
                    <div class="member--confirm-pw">
                        <!-- <label for="confirm_mb_password" class="sound_only">비밀번호<strong>필수</strong></label> -->
                        <div>비밀번호</div>
                        <input type="password" name="mb_password" id="confirm_mb_password" required class="required frm_input" size="15" maxLength="20" placeholder="비밀번호를 입력하세요.">
                        <input type="submit" value="확인" id="btn_submit" class="member--confirm-submit">
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>

<script>
function fmemberconfirm_submit(f)
{
    document.getElementById("btn_submit").disabled = true;

    return true;
}
</script>
<!-- } 회원 비밀번호 확인 끝 -->
<?php
include_once(G5_PATH.'/tail.php');
