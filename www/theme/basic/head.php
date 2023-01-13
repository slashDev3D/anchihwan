<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<?php 
$base_filename = basename($_SERVER['PHP_SELF']);
if(strpos($base_filename,'about') !== false){}
?>
<!-- 상단 시작 { -->
<div id="hd" class="headerComponents">
    <h1 id="hd_h1"><?php echo $g5['title'] ?></h1>
    <div id="skip_to_container"><a href="#container">본문 바로가기</a></div>

    <?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>
    <div class="header<?php if(!defined('_INDEX_') && $base_filename !== 'about.php'){ echo " white"; } ?><? if($base_filename == 'register_form.php'){ echo " gray";} ?>">
    <div class="header--wrap">
        <!-- <div class="header--menu">
            <div class="header--menu-item"><a href="">안치환</a></div>
            <div class="header--menu-item"><a href="">엘범</a></div>
            <div class="header--menu-item"><a href="">콘서트</a></div>
            <div class="header--menu-item"><a href="">Now.안치환</a></div>
            <div class="header--menu-item"><a href="">팬 메세지</a></div>
            <div class="header--menu-item"><a href="">공지사항</a></div>
            <div class="header--menu-item"><a href="">갤러리</a></div>
        </div> -->

        <!-- <div id="gnb_1dul"> -->
        <div class="header--menu">
            <div class="header--menu-item gnb_mnal"><button type="button" class="gnb_menu_btn" title="전체메뉴"><i class="fa fa-bars" aria-hidden="true"></i><span class="sound_only">전체메뉴열기</span></button></div>
            <?php
			$menu_datas = get_menu_db(0, true);
			$gnb_zindex = 999; // gnb_1dli z-index 값 설정용
            $i = 0;
            foreach( $menu_datas as $row ){
                if( empty($row) ) continue;
                $add_class = (isset($row['sub']) && $row['sub']) ? 'gnb_al_li_plus' : '';
            ?>
            <div class="header--menu-item<?php echo $add_class; ?>" style="z-index:<?php echo $gnb_zindex--; ?>">
                    <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class=""><?php echo $row['me_name'] ?></a>
                    <?php
                    $k = 0;
                    foreach( (array) $row['sub'] as $row2 ){

                        if( empty($row2) ) continue; 

                        if($k == 0)
                            echo '<span class="bg">하위분류</span><div class="gnb_2dul"><ul class="gnb_2dul_box">'.PHP_EOL;
                    ?>
                        <li class="gnb_2dli"><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>" class="gnb_2da"><?php echo $row2['me_name'] ?></a></li>
                    <?php
                    $k++;
                    }   //end foreach $row2

                    if($k > 0)
                        echo '</ul></div>'.PHP_EOL;
                    ?>
            </div>
            <?php
            $i++;
            }   //end foreach $row

            if ($i == 0) {  ?>
                <li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
            <?php } ?>
        </div>

        <div class="header--mobileWrap">
            <div class="header--mobile-member">
                <?php if ($is_member) {  ?>
                    <a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a>
                    <span></span>
                    <a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a>
                    <?php if ($is_admin) {  ?>
                        <span></span>
                        <a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>">관리자모드</a>
                    <?php }  ?>
                <?php } else {  ?>
                    <a href="<?php echo G5_BBS_URL ?>/login.php">로그인</a>
                    <span></span>
                    <a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a>
                <?php } ?>
            </div>
            <div class="header--mobile-menuWrap">
                <?php
                    $menu_datas = get_menu_db(0, true);
                    $gnb_zindex = 999;
                    $i = 0;
                    foreach( $menu_datas as $row ){
                        if( empty($row) ) continue;
                        $add_class = (isset($row['sub']) && $row['sub']) ? 'gnb_al_li_plus' : '';
                    ?>
                    <div class="header--menu-item<?php echo $add_class; ?>" style="z-index:<?php echo $gnb_zindex--; ?>">
                        <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class=""><?php echo $row['me_name'] ?></a>
                        <?php
                        $k = 0;
                        foreach( (array) $row['sub'] as $row2 ){
    
                            if( empty($row2) ) continue; 
    
                            if($k == 0)
                                echo '<span class="bg">하위분류</span><div class="gnb_2dul"><ul class="gnb_2dul_box">'.PHP_EOL;
                        ?>
                            <li class="gnb_2dli"><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>" class="gnb_2da"><?php echo $row2['me_name'] ?></a></li>
                        <?php
                        $k++;
                        }   //end foreach $row2
    
                        if($k > 0)
                            echo '</ul></div>'.PHP_EOL;
                        ?>
                    </div>
                    <?php
                    $i++;
                    }   //end foreach $row
                    if ($i == 0) {  ?>
                    <li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
                <?php } ?>
            </div>
        
        </div>


        <div class="header--brand">
            <a href="/" class="font-special">
                <img class="type_b" src="/img/ach_logo_b.png" alt="">
                <img class="type_w" src="/img/ach_logo_w.png" alt="">
            </a>
        </div>
        <div class="header--member">
            <?php if ($is_member) {  ?>
                <a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a>
                <span></span>
                <a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a>
                <?php if ($is_admin) {  ?>
                    <span></span>
                    <a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>">관리자모드</a>
                <?php }  ?>
            <?php } else {  ?>
                <a href="<?php echo G5_BBS_URL ?>/login.php">로그인</a>
                <span></span>
                <a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a>
            <?php } ?>
        </div>
        <div class="header--ham">
            <div id="headerHamBtn" class="header--ham-button">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    </div>
    <script>
    
    // $(function(){
    //     $(".gnb_menu_btn").click(function(){
    //         $("#gnb_all, #gnb_all_bg").show();
    //     });
    //     $(".gnb_close_btn, #gnb_all_bg").click(function(){
    //         $("#gnb_all, #gnb_all_bg").hide();
    //     });
    // });


    $("#headerHamBtn").click(function(){
        if($(this).hasClass("on")){
            $(this).removeClass("on")
            $(".header--mobileWrap").removeClass("on")
        } else {
            $(this).addClass("on")
            $(".header--mobileWrap").addClass("on")
        }
    })
    </script>
</div>
<!-- } 상단 끝 -->


<hr>
<!-- <div class="" style="background-image:url()"><?php echo $board['bo_subject']; ?></div>
<a href="<?php echo G5_BBS_URL; ?>/write.php?bo_table=<?php echo $bo_table;?>">글쓰기 </a> -->

<!-- 콘텐츠 시작 { -->
<div id="wrapper">
    <div id="container_wr">
   
    <div id="container" class="<? if($bo_table){ echo "board--container"; } ?>">
    <?php if ($bo_table && strpos($base_filename,'write')===false  ) { ?>
        <div class="board--titleBnr">
            <div class="board--title-bg board--title-bg-<?echo $bo_table?>" data-bo="<?echo $bo_table?>"></div>
            <div class="board--titleBnr-text">
                <div class="board--titleBnr-text01"><?php echo $board['bo_subject'] ?></div>
                <div class="board--titleBnr-text02"><?php echo $board['bo_content_head'] ?></div>
                <?php if ($is_admin || $bo_table == 'free') {  ?>
                <div class="board--titleBnr-text03"><a href="<?php echo G5_BBS_URL; ?>/write.php?bo_table=<?php echo $bo_table;?>"><p>작성하기</p><span class="material-symbols-outlined">chevron_right</span></a></div>
                <?php } ?>
            </div>
        </div>
    <?php } ?>