<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>

</div><!-- #container end -->
<div id="aside" style="display:none;">
    <?php echo outlogin('theme/basic'); // 외부 로그인, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>
    <?php echo poll('theme/basic'); // 설문조사, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>
</div>
</div><!-- #container_wr end -->
</div><!-- #wrapper end -->
<!-- } 콘텐츠 끝 -->

<hr>
<div id="footerPopupMemberPromise" class="footer--popup footer--popup-memberPromise">
    <div class="footer--popup-bg"></div>
    <div class="footer--popup-wrap">
        <div class="footer--popup-contents">
            <div class="footer--popup-title"><p>회원정보처리방침</p>
            <div class="footer--popup-close">
                <span></span>
            </div>
        </div>
            <div class="footer--popup-body">
                <p>
                    가. 개인정보의 수집 및 이용 목적<br>
                    ① anchihwan.com (이하 웹사이트)은 다음의 목적을 위하여 개인정보를 처리합니다. 처리하고 있는 개인정보는 다음의 목적 이외의 용도로는 이용되지 않으며, 이용 목적이 변경되는 경우에는 개인정보 보호법 제18조에 따라 별도의 동의를 받는 등 필요한 조치를 이행할 예정입니다.<br><br>
                    1. 가수 안치환 관련 서비스 제공을 위한 회원관리<br><br>
                    나. 정보주체와 법정대리인의 권리ㆍ의무 및 행사방법<br>
                    ① 정보주체(만 14세 미만인 경우에는 법정대리인을 말함)는 언제든지 개인정보 열람·정정·삭제·처리정지 요구 등의 권리를 행사할 수 있습니다.<br>
                    ② 제1항에 따른 권리 행사는 개인정보보호법 시행규칙 별지 제8호 서식에 따라 작성 후 서면, 전자우편 등을 통하여 하실 수 있으며, 기관은 이에 대해 지체 없이 조치하겠습니다.<br>
                    ③ 제1항에 따른 권리 행사는 정보주체의 법정대리인이나 위임을 받은 자 등 대리인을 통하여 하실 수 있습니다. 이 경우 개인정보 보호법 시행규칙 별지 제11호 서식에 따른 위임장을 제출하셔야 합니다.<br>
                    ④ 개인정보 열람 및 처리정지 요구는 개인정보 보호법 제35조 제5항, 제37조 제2항에 의하여 정보주체의 권리가 제한 될 수 있습니다.<br>
                    ⑤ 개인정보의 정정 및 삭제 요구는 다른 법령에서 그 개인정보가 수집 대상으로 명시되어 있는 경우에는 그 삭제를 요구할 수 없습니다.<br>
                    ⑥ 정보주체 권리에 따른 열람의 요구, 정정ㆍ삭제의 요구, 처리정지의 요구 시 열람 등 요구를 한 자가 본인이거나 정당한 대리인인지를 확인합니다.<br><br>
                    다. 수집하는 개인정보의 항목<br>
                    ① 웹사이트 회원정보(필수): 아이디, 비밀번호, 이름, 닉네임, 이메일<br><br>
                    라. 개인정보의 보유 및 이용기간<br>
                    ① 웹사이트는 법령에 따른 개인정보 보유ㆍ이용기간 또는 정보주체로부터 개인정보를 수집 시에 동의 받은 개인정보 보유ㆍ이용기간 내에서 개인정보를 처리ㆍ보유합니다.<br>
                    1. 웹사이트 회원정보<br>
                    - 수집근거: 정보주체의 동의<br>
                    - 보존기간: 회원 탈퇴 요청 전까지(1년 경과 시 재동의)<br>
                    - 보존근거: 정보주체의 동의<br><br>
                    마. 동의 거부 권리 및 동의 거부에 따른 불이익<br>
                    위 개인정보의 수집 및 이용에 대한 동의를 거부할 수 있으나, 동의를 거부할 경우 회원 가입이 제한됩니다.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- 하단 시작 { -->
<div id="ft">

    <!-- <div id="ft_wr">
        <div id="ft_link" class="ft_cnt">
            <a href="<?php echo get_pretty_url('content', 'company'); ?>">회사소개</a>
            <a href="<?php echo get_pretty_url('content', 'privacy'); ?>">개인정보처리방침</a>
            <a href="<?php echo get_pretty_url('content', 'provision'); ?>">서비스이용약관</a>
            <a href="<?php echo get_device_change_url(); ?>">모바일버전</a>
        </div>
        <div id="ft_company" class="ft_cnt">
        	<h2>사이트 정보</h2>
	        <p class="ft_info">
	        	회사명 : 회사명 / 대표 : 대표자명<br>
				주소  : OO도 OO시 OO구 OO동 123-45<br>
				사업자 등록번호  : 123-45-67890<br>
				전화 :  02-123-4567  팩스  : 02-123-4568<br>
				통신판매업신고번호 :  제 OO구 - 123호<br>
				개인정보관리책임자 :  정보책임자명<br>
			</p>
	    </div>
        <?php
        //공지사항
        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
        echo latest('theme/notice', 'notice', 4, 13);
        ?>
        
		<?php //echo visit('theme/basic'); // 접속자집계, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>
	</div>-->
        <!-- <div id="ft_catch"><img src="<?php echo G5_IMG_URL; ?>/ft_logo.png" alt="<?php echo G5_VERSION ?>"></div> -->
        <!-- <div id="ft_copy">Copyright &copy; <b>소유하신 도메인.</b> All rights reserved.</div> -->
    
    
    <button type="button" id="top_btn">
    	<i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
    </button>
    <script>
    $(function() {
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });
    });
    </script>
</div>
<div class="footer<?php if ($bo_table && strpos($base_filename,'write')===false){?> white<?}?>">
<?php echo latest('notice_tofoot', "notice", 1, 23); ?>
    <div class="footer--wrap">
        <div class="footer--left">
            <div class="footer--logo">
                <img src="/img/footer_logo_black.png" alt="">
                <img src="/img/footer_logo_white.png" alt="">
            </div>
            <div class="footer--left-text">참꽃은 [안치환과 자유]의 스케줄과 공연기획, 음반 발매 및 홍보를 진행하고 있습니다.</div>
            <p>copyright 2022. anchihwna.com all rights reserved.</p>
        </div>
        <div class="footer--right">
            <div id="footerPopupMemberPromiseShow">회원정보처리방침</div>
            <p>02. 325. 2561 | 010. 2518. 1975</p>
            <p>an_free@hanmail.net</p>
            <p>서울시 서대문구 연희로 26다길 35 [03720]</p>
        </div>
    </div>
</div>
<?php if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});

$("#footerPopupMemberPromiseShow").click(function(){
    $("#footerPopupMemberPromise").addClass("on")
})
$(".footer--popup-close").click(function(){
    $(this).closest(".footer--popup").removeClass("on")
})
$(".footer--popup-bg").click(function(){
    $(this).closest(".footer--popup").removeClass("on")
})
</script>
<?php
add_javascript('<script src="'.G5_PUBLISH_URL.'/components/component.js"></script>', 10);
include_once(G5_THEME_PATH."/tail.sub.php");