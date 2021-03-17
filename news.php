<?php $data["title"] = "Tin tuc"; ?>
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

<div class="uk-section">
    <div class="uk-container">
        <!--Tin tức nổi bật-->
        <div class="mb-15 mb-20-s mb-25-m">
            <h2 class="uk-h2 uk-margin-remove home__title uk-text-uppercase uk-text-center">Tin tức</h2>
        </div>
        <div class="mb-40 mb-60-s mb-104-m uk-child-width-auto uk-grid-small uk-flex-center uk-grid-24-m" uk-grid>
            <div>
                <a href="" class="uk-button news__btn1 uk-active uk-button-default uk-border-pill">VTG với Báo chí</a>
            </div>
            <div>
                <a href="" class="uk-button news__btn1 uk-button-default uk-border-pill">Tin họat động</a>
            </div>
        </div>
        <div class="uk-child-width-1-2@m mb-40 mb-60-s mb-81-m uk-grid-match uk-grid-10 uk-grid-24-m" uk-grid>
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
        <div class="paginationBox uk-child-width-auto uk-flex-center uk-flex-middle uk-grid-small uk-grid-32-m" uk-grid>
            <div>
                <a href="#" class="paginationBox__link">Trang đầu</a>
            </div>
            <div>
                <ul class="uk-pagination uk-flex-center uk-flex-middle uk-grid-12" uk-margin uk-grid>
                    <li><a href="#"><span uk-pagination-previous></span></a></li>
                    <li><a href="#">1</a></li>
                    <li class="uk-active"><span>2</span></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li class="uk-disabled"><span>...</span></li>
                    <li><a href="#">234</a></li>
                    <li><a href="#"><span uk-pagination-next></span></a></li>
                </ul>
            </div>
            <div>
                <a href="#" class="paginationBox__link">Trang cuối</a>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>