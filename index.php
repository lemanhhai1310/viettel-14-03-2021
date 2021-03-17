<?php $data["title"] = "Trang chủ"; ?>
<?php $is_home = true; ?>
<?php require "template-parts/layouts/header.php"; ?>
<!--Slider-->
<div>
    <div class="uk-container uk-padding-remove">
        <div class="home__slider uk-overflow-hidden">
            <div uk-slideshow="animation: push;ratio: 1224:535;min-height: 300;">

                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                    <ul class="uk-slideshow-items">
                        <li>
                            <img src="images/slider/image1.png" alt="" uk-cover>
                        </li>
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
                <div class="home__vechungtoi__box1 uk-card uk-card-default uk-card-body" uk-scrollspy="cls: uk-animation-slide-left-small;">
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

<!--Giá trị cốt lõi-->
<div class="mb-40 mb-97-m home__giatri">
    <div class="uk-container">
        <div class="uk-flex-middle uk-grid-81" uk-grid>
            <div class="uk-width-auto@m">
                <div class="home__giatri__box1 uk-position-relative">
                    <div class="uk-width-4-5">
                        <img src="images/giatri/img1.png" alt="">
                    </div>
                    <div class="uk-width-2-3 home__giatri__box1__img2 uk-position-bottom-right">
                        <img src="images/giatri/img2.png" alt="">
                    </div>
                </div>
            </div>
            <div class="uk-width-expand">
                <div class="mb-15 mb-20-s mb-47-m">
                    <h2 class="uk-h2 uk-margin-remove home__title uk-text-uppercase">Giá trị cốt lõi</h2>
                </div>
                <div uk-scrollspy="target: > div; cls: uk-animation-slide-right; delay: 500">
                    <?php
                    $data = array(
                        array(
                            'src' => 'images/giatri/ico1.png',
                            'title' => 'Tầm nhìn',
                            'txt' => 'Sáng tạo để phục vụ con người – Caring Innovator',
                        ),
                        array(
                            'src' => 'images/giatri/ico2.png',
                            'title' => 'Sứ mệnh',
                            'txt' => 'Aide et Action lives with the values of dignity, inclusion and integrity.Aide et Action ensures access to quality education for the most vulnerable and marginalised populations, especially children, so they can take charge of their own development and contribute to',
                        ),
                        array(
                            'src' => 'images/giatri/ico3.png',
                            'title' => 'Triết lý',
                            'txt' => 'Aide et Action lives with the values of dignity, inclusion and integrity.Aide et Action ensures access to quality education for the most vulnerable and marginalised populations, especially children, so they can take charge of their own development and contribute to peaceful and sustainable world.',
                        ),
                    );
                    foreach ($data as $k => $v): ?>
                    <div class="home__giatri__item">
                        <div class="uk-grid-small uk-grid-18-m" uk-grid>
                            <div class="uk-width-auto">
                                <div class="home__giatri__item__bg">
                                    <img src="<?= $v['src'] ?>" alt="">
                                </div>
                            </div>
                            <div class="uk-width-expand">
                                <div class="home__giatri__item__title"><?= $v['title'] ?></div>
                                <div class="home__giatri__item__txt"><?= $v['txt'] ?></div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Giá trị cốt lõi-->

<div class="mb-40 mb-113-m">
    <div class="uk-container">
        <div class="uk-child-width-1-2 uk-flex-center uk-child-width-1-5@m mb-160-m" uk-grid uk-scrollspy="target: > div; cls: uk-animation-slide-bottom-small; delay: 500">
            <?php
            $data = array(
                array(
                    'src' => 'images/icon/laptop1.png',
                    'txt' => 'Thị trường',
                    'txt1' => 'Thị trường',
                    'number' => 10,
                ),
                array(
                    'src' => 'images/icon/group1.png',
                    'txt' => 'Quy mô thị trường',
                    'txt1' => 'Triệu dân',
                    'number' => 270,
                ),
                array(
                    'src' => 'images/icon/station1.png',
                    'txt' => 'Trạm BTS',
                    'txt1' => '',
                    'number' => 5000,
                ),
                array(
                    'src' => 'images/icon/usb-cable1.png',
                    'txt' => 'Km cáp quang',
                    'txt1' => '',
                    'number' => 320000,
                ),
                array(
                    'src' => 'images/icon/followers-2.png',
                    'txt' => 'Thuê bao',
                    'txt1' => '',
                    'number' => 6,
                ),
            );
            foreach ($data as $k => $v): ?>
            <div>
                <div class="uk-text-center">
                    <span class="home__block1__box2__txt">0<?= $k+1 ?></span>
                </div>
                <div class="uk-text-center home__block1__box3">
                    <div class="uk-cover-container home__block1__box1 uk-display-inline-block uk-border-circle">
                        <canvas width="156" height="156"></canvas>
                        <div class="uk-position-cover uk-flex uk-flex-middle uk-flex-center">
                            <div>
                                <div class="home__block1__box1__bg">
                                    <img src="<?= $v['src'] ?>" alt="">
                                </div>
                                <div class="home__block1__box1__txt"><?= $v['txt'] ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-text-center">
                    <span class="home__block1__box4__txt1"><?= $v['number'] ?></span> <span class="home__block1__box4__txt2"><?= $v['txt1'] ?></span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
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

<!--Lịch sử phát triển-->
<div class="mb-40 mb-146-m home__lichsu">
    <div class="uk-container uk-container-expand-right">
        <div class="uk-grid-50-m" uk-grid uk-slider="finite: true;sets: true;">
            <div class="uk-width-auto@s">
                <div class="mb-15 mb-20-s mb-24-m">
                    <h2 class="uk-h2 uk-margin-remove home__title uk-text-uppercase">Lịch sử phát triển</h2>
                </div>
                <div class="home__lichsu__txt1 mb-15 mb-20-s mb-24-m">Những cột mốc phát triển quan trọng của Viettel Global.</div>
                <div class="uk-grid-small uk-grid-19-m" uk-grid>
                    <div>
                        <a class="home__lichsu__nav" href="#" uk-slider-item="previous"><img class="uk-responsive-height uk-responsive-width" src="images/Arrow-prev.png" alt=""></a>
                    </div>
                    <div>
                        <a class="home__lichsu__nav" href="#" uk-slider-item="next"><img class="uk-responsive-height uk-responsive-width" src="images/Arrow-next.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="uk-width-expand">
                <div class="home__lichsu__box1 uk-position-relative">
                    <div class="home__lichsu__box2" uk-toggle="cls: uk-position-top; mode: media; media: @m">
                        <div class="uk-position-relative">

                            <div class="uk-slider-container" uk-toggle="cls: uk-slider-container-offset; mode: media; media: @m">
                                <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-auto@m uk-grid-small uk-grid-32-m uk-grid-match" uk-grid>
                                    <?php
                                    $data = array(
                                        array(
                                            'nam' => '2017',
                                            'txt' => '2017: Chính thức nhận giấy phép đầu tư tại Myanmar',
                                        ),
                                        array(
                                            'nam' => '2017',
                                            'txt' => '12/2016: Kỷ niệm 10 năm Viettel đầu tư ra nước ngoài',
                                        ),
                                        array(
                                            'nam' => '2017',
                                            'txt' => '10/2015: Khai trương mạng viễn thông Halotel tại Tanzania.',
                                        ),
                                        array(
                                            'nam' => '2017',
                                            'txt' => '10/2014: Khai trương dịch vụ di động tại Peru.',
                                        ),
                                        array(
                                            'nam' => '2017',
                                            'txt' => '2017: Chính thức nhận giấy phép đầu tư tại Myanmar',
                                        ),
                                        array(
                                            'nam' => '2017',
                                            'txt' => '12/2016: Kỷ niệm 10 năm Viettel đầu tư ra nước ngoài',
                                        ),
                                        array(
                                            'nam' => '2017',
                                            'txt' => '10/2015: Khai trương mạng viễn thông Halotel tại Tanzania.',
                                        ),
                                        array(
                                            'nam' => '2017',
                                            'txt' => '10/2014: Khai trương dịch vụ di động tại Peru.',
                                        ),
                                    );
                                    foreach ($data as $k => $v): ?>
                                    <li>
                                        <div class="uk-card home__lichsu__card uk-card-default uk-flex uk-flex-column">
                                            <div class="uk-card-body home__lichsu__card__body uk-flex-1">
                                                <div class="home__lichsu__txt2"><?= $v['txt'] ?></div>
                                            </div>
                                            <div class="uk-card-footer home__lichsu__card__footer">
                                                <div class="home__lichsu__txt3"><?= $v['nam'] - $k ?></div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php endforeach; ?>
                                    <li class="uk-visible@m"></li>
                                </ul>
                            </div>

                        </div>

                        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-hidden@s"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Lịch sử phát triển-->

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
                            <div class="uk-grid-small uk-grid-48-m" uk-grid uk-toggle="cls: uk-flex-middle; mode: media; media: @m">
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