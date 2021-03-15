<?php $data["title"] = "Trang chủ"; ?>
<?php $is_home = true; ?>
<?php require "template-parts/layouts/header.php"; ?>
<!--Slider-->
<div>
    <div class="uk-container uk-padding-remove">
        <div class="home__slider uk-overflow-hidden">
            <div uk-slideshow="animation: push;ratio: 1224:535;">

                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                    <ul class="uk-slideshow-items">
                        <li>
                            <img src="images/photo.jpg" alt="" uk-cover>
                        </li>
                        <li>
                            <img src="images/dark.jpg" alt="" uk-cover>
                        </li>
                        <li>
                            <img src="images/light.jpg" alt="" uk-cover>
                        </li>
                    </ul>

                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

                </div>

                <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>

            </div>
        </div>
    </div>
</div>
<!--/Slider-->

<!--Về chúng tôi-->
<div class="mb-40 mb-72-m home__vechungtoi">
    <div class="uk-container uk-container-expand-right">
        <div class="uk-flex-middle uk-position-relative" uk-grid>
            <div class="uk-width-auto uk-position-z-index" uk-toggle="cls: uk-position-center-left; mode: media; media: @m">
                <div class="home__vechungtoi__box1 uk-card uk-card-default uk-card-body">
                    <div class="mb-15 mb-20-s mb-40-m">
                        <h2 class="uk-h2 uk-margin-remove home__title uk-text-uppercase">Về chúng tôi</h2>
                    </div>
                    <h4 class="uk-h4 home__vechungtoi__box1__title uk-margin-remove">Tổng Công ty Cổ phần Đầu tư quốc tế Viettel</h4>
                    <p class="uk-margin-remove home__vechungtoi__box1__desc">Năm 2006, Viettel quyết định mở rộng kinh doanh ra nước ngoài với mục tiêu tìm kiếm thị trường tiềm năng. Công ty Cổ phần Đầu tư quốc tế Viettel (nay là Tổng Công ty Đầu tư quốc tế Viettel) được thành lập tháng 10 năm 2006 với tầm nhìn và sứ mệnh đưa Viettel trở thành tập đoàn viễn thông lớn mạnh tầm quốc tế.</p>
                    <button type="button" class="uk-button footer__boxLienhe__btn uk-button-secondary uk-border-pill">Xem thêm</button>
                </div>
            </div>
            <div class="uk-width-auto home__vechungtoi__box2 uk-visible@m">

            </div>
            <div class="uk-width-expand">
                <div class="uk-cover-container">
                    <img src="images/vechungtoi/image64.png" alt="" uk-cover>
                    <canvas width="789" height="670"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Về chúng tôi-->

<div class="mb-40 mb-113-m">
    <div class="uk-container">
        <!--Biểu đồ cổ phiếu-->
        <div class="uk-card uk-card-default home__bieudocophieu__card1 mb-40 mb-101-m">
            <div class="uk-card-body">
                <div class="uk-flex-middle" uk-grid>
                    <div class="uk-width-expand">
                        <h2 class="uk-h2 uk-margin-remove home__title uk-text-uppercase">Biểu đồ cổ phiếu</h2>
                    </div>
                    <div class="uk-width-auto@m">
                        <div class="uk-inline home__bieudocophieu__card1__box1">
                            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: calendar"></span>
                            <input class="uk-input home__bieudocophieu__card1__box1__input" type="text" placeholder="Oct - Nov 2019">
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-card-body">
                <img src="images/chart.png" alt="">
            </div>
        </div>
        <!--/Biểu đồ cổ phiếu-->

        <!--Viettel trên Thế Giới-->
        <div class="mb-15 mb-20-s mb-101-m">
            <h2 class="uk-h2 uk-margin-remove home__title uk-text-uppercase uk-text-center">Viettel trên Thế Giới</h2>
        </div>
        <div class="">
            <img class="uk-width-1-1" src="images/HugeGlobal.png" alt="">
        </div>
        <!--/Viettel trên Thế Giới-->
    </div>
</div>

<div>
    <div class="uk-container">
        <!--Tin tức nổi bật-->
        <div class="mb-15 mb-20-s mb-59-m">
            <h2 class="uk-h2 uk-margin-remove home__title uk-text-uppercase uk-text-center">Tin tức nổi bật</h2>
        </div>
        <div class="uk-child-width-1-2@m mb-40 mb-60-s mb-138-m uk-grid-match uk-grid-10 uk-grid-24-m" uk-grid>
            <div>
                <?php
                $data = array(
                    array(
                        'src' => 'images/tintucnoibat/img1.png',
                        //'src' => 'https://znews-photo.zadn.vn/w960/Uploaded/ovhpaob/2021_03_15/chu_tich_quoc_hoi_1.jpg',
                        'txt' => 'Sắp bầu 3 chức danh lãnh đạo chủ chốt Nhà nước',
                        'desc' => 'Tại kỳ họp diễn ra vào cuối tháng 3, Quốc hội sẽ tiến hành quy trình kiện toàn nhân sự, miễn nhiệm và bầu Chủ tịch Quốc hội, Chủ tịch nước và Thủ tướng.',
                    ),
                );
                foreach ($data as $k => $v): ?>
                    <div class="uk-cover-container home__tintucnoibat__box1">
                        <img src="<?= $v['src'] ?>" alt="" uk-cover>
                        <canvas width="960" height="960"></canvas>
                        <div class="uk-position-cover home__tintucnoibat__box1__overlay"></div>
                        <div class="uk-position-bottom home__tintucnoibat__box1__body">
                            <div class="uk-grid-10 uk-grid-20-m" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="home__tintucnoibat__box2__boxdate">
                                        <div class="uk-text-center">
                                            <div class="home__tintucnoibat__box2__boxdate__txt1">01</div>
                                            <div class="home__tintucnoibat__box2__boxdate__txt2">03.2021</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <h5 class="home__tintucnoibat__box2__title home__tintucnoibat__box2__title--c1 uk-h5 mb-15 mb-24-m"><a href=""><?= $v['txt'] ?></a></h5>
                                    <p class="home__tintucnoibat__box2__desc home__tintucnoibat__box2__desc--c1 uk-margin-remove"><?= $v['desc'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div>
                <div class="uk-grid-match uk-grid-10 uk-grid-24-m" uk-grid>
                    <?php
                    $data = array(
                        array(
                            'src' => 'images/tintucnoibat/img2.png',
                            //'src' => 'https://znews-photo.zadn.vn/w660/Uploaded/zxgorz/2021_03_15/toa.jpg',
                            'txt' => 'Tòa lưu ý sức khỏe của bà Dương Thị Bạch Diệp',
                            'desc' => 'Bà Dương Thị Bạch Diệp cho biết sức khỏe đảm bảo dù bản thân mang một số bệnh. HĐXX yêu cầu bà Diệp bình tĩnh, nếu cảm thấy không ổn thì báo ngay để được cán bộ y tế chăm sóc.',
                        ),
                        array(
                            'src' => 'images/tintucnoibat/img3.png',
                            'txt' => 'Thông báo mời thầu “Thiết bị Công nghệ thông tin cho thị trường Campuchia”',
                            'desc' => 'Tổng Công ty CP Đầu tư Quốc tế Viettel thông báo mời tham gia gói thầu cung cấp “Thiết bị Công nghệ thông tin cho thị trường Campuchia”',
                        ),
                        array(
                            'src' => 'images/tintucnoibat/img4.png',
                            'txt' => 'Thông báo mời thầu “Thiết bị Công nghệ thông tin cho thị trường Campuchia”',
                            'desc' => 'Tổng Công ty CP Đầu tư Quốc tế Viettel thông báo mời tham gia gói thầu cung cấp “Thiết bị Công nghệ thông tin cho thị trường Campuchia”',
                        ),
                    );
                    foreach ($data as $k => $v): ?>
                        <div class="uk-width-1-1">
                            <div class="uk-grid-small uk-grid-48-m uk-flex-middle" uk-grid>
                                <div class="uk-width-1-3 uk-width-auto@m">
                                    <div class="uk-position-relative">
                                        <div class="uk-cover-container home__tintucnoibat__box2__img">
                                            <img src="<?= $v['src'] ?>" alt="" uk-cover>
                                            <canvas width="184" height="184"></canvas>
                                        </div>
                                        <div class="uk-position-top-right home__tintucnoibat__box2__boxdate home__tintucnoibat__box2__boxdate--c1">
                                            <div class="uk-text-center">
                                                <div class="home__tintucnoibat__box2__boxdate__txt1">01</div>
                                                <div class="home__tintucnoibat__box2__boxdate__txt2">03.2021</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <h5 class="home__tintucnoibat__box2__title uk-h5 mb-15 mb-31-m"><a href=""><?= $v['txt'] ?></a></h5>
                                    <p class="home__tintucnoibat__box2__desc uk-margin-remove"><?= $v['desc'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!--/Tin tức nổi bật-->

        <!--Thư viện-->
        <div class="mb-15 mb-20-s mb-54-m">
            <h2 class="uk-h2 uk-margin-remove home__title uk-text-uppercase">Thư viện</h2>
        </div>
        <div class="uk-grid-match uk-grid-10 uk-grid-24-m" uk-grid uk-scrollspy="target: .home__thuvien__box1; cls: uk-animation-scale-up; delay: 300">
            <div class="uk-width-1-4@m">
                <div class="uk-grid-match uk-grid-10 uk-grid-24-m" uk-grid>
                    <div class="uk-width-1-2 uk-width-1-1@m">
                        <div class="uk-cover-container uk-border-rounded home__thuvien__box1">
                            <img src="images/thuvien/img1.png" alt="" uk-cover>
                            <canvas width="960" height="960"></canvas>
                        </div>
                    </div>
                    <div class="uk-width-1-2 uk-width-1-1@m">
                        <div class="uk-cover-container uk-border-rounded home__thuvien__box1">
                            <img src="images/thuvien/img2.png" alt="" uk-cover>
                            <canvas width="960" height="960"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-width-expand">
                <div class="uk-cover-container uk-border-rounded home__thuvien__box1">
                    <img src="images/thuvien/img3.png" alt="" uk-cover>
                    <canvas width="960" height="960"></canvas>
                </div>
            </div>
            <div class="uk-width-1-4@m">
                <div class="uk-grid-match uk-grid-10 uk-grid-24-m" uk-grid>
                    <div class="uk-width-1-2 uk-width-1-1@m">
                        <div class="uk-cover-container uk-border-rounded home__thuvien__box1">
                            <img src="images/thuvien/img4.png" alt="" uk-cover>
                            <canvas width="960" height="960"></canvas>
                        </div>
                    </div>
                    <div class="uk-width-1-2 uk-width-1-1@m">
                        <div class="uk-cover-container uk-border-rounded home__thuvien__box1">
                            <img src="images/thuvien/img5.png" alt="" uk-cover>
                            <canvas width="960" height="960"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/Thư viện-->
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>