<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<h2 class="sound_only">최신글</h2>
<?php //echo latest('mainimages','free',3,100);?>
<div class="inner">
    <?php //echo latest('basic','free',4,100);?>
</div>
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="/gnu/img/main_1.jpg" alt=""></div>
            <div class="swiper-slide"></div>
            <div class="swiper-slide"></div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-scrollbar"></div>
    </div>
<section class="section py-5" id="keyword">
    <div class="container-lg">
        <h3 class="text-center display-1 mt-lg-5">Keyword</h3>
        <p class="text-center">흥미로운 이야기를 클릭해보세요!</p>
   
        <ul class="row mt-3 mt-lg-5 justify-content-center">
            <li class="col-6 col-lg-2">
                <a href="#none">
                    <img src="/gnu/img/key_1.jpg" class="b_y img-fluid opac" alt="K">
                    <span class="position-absolute">K</span>
                </a>
                <!-- <dl>
                    <dt>
                        KIROS '결정적인 순간'
                        <br>
                        결정적인 순간을 남기기 가장 좋고 편리한 방법
                    </dt>
                </dl> -->
            </li>
            <li  class="col-6 col-lg-2"> 
                <a href="#none">
                    <img src="/gnu/img/key_2.png" class="b_g img-fluid opac rounded" alt="O">
                    <span class="position-absolute tc-y">O</span>
                </a>
            </li>
            <li  class="col-4 col-lg-2">
                <a href="#none">
                    <img src="/gnu/img/key_3.png" class="b_y img-fluid opac rounded" alt="D">
                    <span class="position-absolute">D</span>
                </a>
            </li>
            <li  class="col-4 col-lg-2">
                <a href="#none">
                    <img src="/gnu/img/key_4.jpg" class="b_g img-fluid opac rounded" alt="A">
                    <span class="position-absolute tc-y">A</span>
                </a>
            </li>
            <li  class="col-4 col-lg-2">
                <a href="#none">
                    <img src="/gnu/img/key_5.PNG" class="b_y img-fluid opac rounded" alt="K">
                    <span class="position-absolute">K</span>
                </a>
            </li>
        </ul>
    </div>
</section>
<section class="section py-5" id="photo">
  <div class="container-lg">
    <div>
        <h3 class="text-lg-center display-2">Photo Studio</h3>
        <p class="text-lg-center">코닥과 함께한 사람들의 이야기를 들어보세요</p>
        <ul class="row mx-0 align-items-center">
            <li class="col-6 col-lg-4"><a href="#none"><img src="/gnu/img/ps_1.png" alt="사진1" class="img-fluid"></a></li>
            <li class="col-6 col-lg-4"><a href="#none"><img src="/gnu/img/ps_2.png" alt="사진2" class="img-fluid"></a></li>
            <li class="col-6 col-lg-4"><a href="#none"><img src="/gnu/img/ps_3.png" alt="사진3" class="img-fluid"></a></li>
            <li class="col-6 col-lg-4"><a href="#none"><img src="/gnu/img/ps_4.png" alt="사진4" class="img-fluid"></a></li>
            <li class="col-6 col-lg-4"><a href="#none"><img src="/gnu/img/ps_5.png" alt="사진5" class="img-fluid"></a></li>
            <li class="col-6 col-lg-4"><a href="#none"><img src="/gnu/img/ps_6.png" alt="사진6" class="img-fluid"></a></li>
        </ul>
    </div>
  </div>
</section>
<section class="section py-5" id="product">
    <div class="container">
        <h3 class="text-lg-right display-2">Product Package</h3>
            <p class="text-lg-right">최고의 패키지로 코닥 카메라를 만나보세요!</p>
        <div class="card position-relative">
            <div class="pak position-absolute a_1"><a href="https://www.kodakphotoprinter.co.kr/goods/goods_view.php?goodsNo=1000000006"><img src="/gnu/img/pro_1.png" alt="상품1" class="img-fluid"></a></div>
            <div class="pak position-absolute a_2"><a href="https://www.kodakphotoprinter.co.kr/goods/goods_view.php?goodsNo=1000000063"><img src="/gnu/img/pro_2.png" alt="상품2" class="img-fluid"></a></div>
            <div class="pak position-absolute a_3"><a href="https://www.kodakphotoprinter.co.kr/goods/goods_view.php?goodsNo=1000000067"><img src="/gnu/img/pro_3.png" alt="상품3" class="img-fluid"></a></div>
            <div class="pak position-absolute a_4"><a href="https://www.kodakphotoprinter.co.kr/goods/goods_view.php?goodsNo=1000000060"><img src="/gnu/img/pro_4.png" alt="상품4" class="img-fluid"></a></div>
            <div class="pak position-absolute a_5"><a href="https://www.kodakphotoprinter.co.kr/goods/goods_view.php?goodsNo=1000000068"><img src="/gnu/img/pro_5.png" alt="상품5" class="img-fluid"></a></div>
        </div>
    </div>
</section>
<section class="section bg-dark py-5" id="as">
    <div class="containter-lg">
        <h3 class="text-lg-center display-2">A/S Center</h3>
        <p class="text-lg-center">이곳으로 제품을 보내주시면 수리를 도와드립니다.</p>
        <iframe class="position-absolute"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4491.865767542454!2d126.98232313364704!3d37.24227992777218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357b423e37e9addd%3A0xb4942df6fc4c3af6!2z7ZSE66as64uJ7Iqk!5e0!3m2!1sko!2skr!4v1658473307370!5m2!1sko!2skr" width="80%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
<section class="section bg-gray py-5" id="event">
    <h3 class="text-lg-center display-2">event</h3>
</section>

<?php
include_once(G5_THEME_PATH.'/tail.php');