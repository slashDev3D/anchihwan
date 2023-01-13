<?php
    include_once('./_common.php');
    define('_INDEX_', true);
    include_once(G5_PATH.'/head.php');
?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./publish/css/public.css">
    <link rel="stylesheet" href="./publish/css/main.css">
    <div class="main">
        <div class="s1">
            <div class="s1--bg"></div>
            <div class="s1--title">
                <div class="s1--title-wrap">
                    <p>AN CHI HWAN</p>
                    <p class="font-special">안치환 홈페이지에 <br>방문해주셔서 감사합니다.</p>
                </div>
            </div>
            <div class="s1--arrowDown"></div>
        </div>
        <div class="s2">
            <div class="s2--img">
                <div class="s2--imgBox"><img src="./publish/img/main_s2_bg.png" alt=""></div>
            </div>
            <div class="s2--text">
                <div class="s2--textBox">
                    <div class="s2--text01">About</div>
                    <div class="s2--text02">우리 시대의 진정한 가객,</div>
                    <div class="s2--text03">안치환</div>
                    <span class="s2--text-line"></span>
                    <div class="s2--text04">1980년대 중반 대학시절, 민주화 과정에서 시위주도 혐의로 감옥에 간 선배를 생각하며 만든 <b>'솔아, 푸르른 솔아'</b>를 시작으로 지금까지 우리의 삶을 깊은 시선으로 바라보며 변함없는 열정으로 노래하는 싱어송라이터, 이 시대 많은 이들의 단단한 정서적 지지를 이끌어 오고 있는 한국의 대표적 뮤지션이다.</div>
                    <div class="s2--text05"><a href="http://anchihwan.com/about.php">더보기<span class="material-symbols-outlined">chevron_right</span></a></div>
                </div>
            </div>
        </div>
        <div class="s3">
            <div class="s3--wrap">
                <div class="s3--title main--subTitle">안치환 갤러리</div>
                <?php// echo latest('gallery_tomain', 'gallery', 5, 23); ?>
                <?php echo latest('gallery_tomain', "gallery", 5, 23); ?>
                <!-- <div class="s3--gallery">
                    <div class="s3--gallery-wrap">
                        <a href="" class="s3--gallery-item">
                            <div class="s3--gallery-thumb">
                                <div class="s3--gallery-thumbImg" style="background-image:url()"></div>
                                <div class="s3--gallery-thumbFilter"></div>
                            </div>
                            <div class="s3--gallery-text">
                                <p>제목들어감</p>
                            </div>
                        </a>
                        <a href="" class="s3--gallery-item">
                            <div class="s3--gallery-thumb">
                                <div class="s3--gallery-thumbImg" style="background-image:url()"></div>
                                <div class="s3--gallery-thumbFilter"></div>
                            </div>
                            <div class="s3--gallery-text">
                                <p>제목들어감</p>
                            </div>
                        </a>
                        <a href="" class="s3--gallery-item">
                            <div class="s3--gallery-thumb">
                                <div class="s3--gallery-thumbImg" style="background-image:url()"></div>
                                <div class="s3--gallery-thumbFilter"></div>
                            </div>
                            <div class="s3--gallery-text">
                                <p>제목들어감</p>
                            </div>
                        </a>
                        <a href="" class="s3--gallery-item">
                            <div class="s3--gallery-thumb">
                                <div class="s3--gallery-thumbImg" style="background-image:url()"></div>
                                <div class="s3--gallery-thumbFilter"></div>
                            </div>
                            <div class="s3--gallery-text">
                                <p>제목들어감</p>
                            </div>
                        </a>
                        <a href="" class="s3--gallery-item">
                            <div class="s3--gallery-thumb">
                                <div class="s3--gallery-thumbImg" style="background-image:url()"></div>
                                <div class="s3--gallery-thumbFilter"></div>
                            </div>
                            <div class="s3--gallery-text">
                                <p>제목들어감</p>
                            </div>
                        </a>
                        <a href="" class="s3--gallery-goLink">
                            <div class="s3--gallery-goLink-text">
                                <div class="s3--gallery-goLink-text01">More View</div>
                                <div class="s3--gallery-goLink-text02 main--goLink">더보기<span class="material-symbols-outlined">chevron_right</span></div>
                            </div>
                        </a>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="s4">
            <div class="s4--wrap">
                <div class="s4--head">
                    <div class="s4--title">
                        <div class="s4--title-text">
                            <div class="s4--title-text01 main--subTitle">안치환에게 보내는 메세지</div>
                            <a href="/bbs/board.php?bo_table=free" class="s4--title-text02"><p class="main--goLink">더보기<span class="material-symbols-outlined">chevron_right</span></p></a>
                        </div>
                    </div>
                    <div class="s4--swiper-button">
                        <div class="s4--swiper-button-prev"><span></span></div>
                        <div class="s4--swiper-button-next"><span></span></div>
                    </div>
                </div>
                <div class="s4--body">
                    <?php echo latest('board_tomain', 'free', 10, 23); ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="./publish/components/component.js"></script>
    <script src="./publish/js/main.js"></script>
<?php
include_once(G5_PATH.'/tail.php');