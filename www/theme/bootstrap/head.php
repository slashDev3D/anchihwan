<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

switch(substr($_SERVER['SCRIPT_FILENAME'], strlen(G5_PATH)))
{
	case '/bbs/register.php':
	case '/bbs/register_form.php':
	case '/bbs/register_result.php':
	case '/plugin/social/register_member.php':
		include_once(G5_THEME_PATH.'/head.def.php');
		return;
		break;
}

include_once(G5_THEME_PATH.'/head.def.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');

include_once(G5_THEME_PATH.'/functions.php');

// 메뉴 계산 (/head.php 응용)
$sql = " select *
			from {$g5['menu_table']}
			where me_use = '1'
			  and length(me_code) = '2'
			order by me_order, me_id ";
$result = sql_query($sql, false);
$gnb_zindex = 999; // gnb_1dli z-index 값 설정용
$menu_datas = array();

for ($i=0; $row=sql_fetch_array($result); $i++) {
	$menu_datas[$i] = $row;

	$sql2 = " select *
				from {$g5['menu_table']}
				where me_use = '1'
				  and length(me_code) = '4'
				  and substring(me_code, 1, 2) = '{$row['me_code']}'
				order by me_order, me_id ";
	$result2 = sql_query($sql2);
	for ($k=0; $row2=sql_fetch_array($result2); $k++) {
		$menu_datas[$i]['sub'][$k] = $row2;
	}

}

get_active_menu($menu_datas);

$g5['sidebar']['right'] = !defined('_INDEX_')&&is_file(G5_PATH.'/sidebar.right.php') ? true : false;
?>
<div class="header">
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
            <?php $i++;}   //end foreach $row
            if ($i == 0) {  ?>
            <li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
        <?php } ?>
    </div>
    <a class="header--brand" href="<?php echo G5_URL; ?>">
        <p class="font-special">안치환</p>
    </a>
    <ul class="hd_login">        
                <?php if ($is_member) {  ?>
                    <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a></li>
                    <span></span>
                    <li><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a></li>
                <?php if ($is_admin) {  ?>
                    <span></span>
                    <li class="tnb_admin"><a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>">관리자</a></li>
                <?php }  ?>
                <?php } else {  ?>
                    <li><a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a></li>
                    <span></span>
                    <li><a href="<?php echo G5_BBS_URL ?>/login.php">로그인</a></li>
                <?php }  ?>
    </ul>
</div>

<main role="main" class="container">

	<?php if($g5['sidebar']['right']) { ?>
		<div class="row">
			<div class="col-lg-9">
	<?php } ?>