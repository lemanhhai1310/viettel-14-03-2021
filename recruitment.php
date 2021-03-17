<?php $data["title"] = "Tuyen dung"; ?>
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
                            <img src="images/tuyendung/Rectangle13.png" alt="" uk-cover>
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

<div class="uk-section recruitment__section">
    <div class="uk-container">
        <!--viettel blobal Tuyển dụng-->
        <div class="mb-40 mb-60-s mb-138-m uk-text-center">
            <h2 class="uk-h2 home__title uk-text-uppercase uk-text-center mb-15">viettel blobal Tuyển dụng</h2>
            <div class="recruitment__txt">Nơi cập nhật tin tức tuyển dụng – Cơ hội việc làm, chế độ đãi ngộ – Chia sẻ văn hóa làm việc tại Viettel Blobal.</div>
        </div>
        <div class="uk-grid-small uk-grid-24-m uk-grid-match uk-child-width-1-2@s uk-child-width-1-3@m recruitment__grid1" uk-grid>
            <?php
            $data = array(
                array(
                    'src' => 'images/tuyendung/img1.png',
                    'title' => 'Software Engineer (Java, C/C++, MySQL)',
                    'txt1' => '',
                ),
                array(
                    'src' => 'images/tuyendung/img2.png',
                    'title' => 'Kỹ sư phát triển phần mềm Big Data',
                    'txt1' => '',
                ),
                array(
                    'src' => 'images/tuyendung/img3.png',
                    'title' => 'Data Scientist',
                    'txt1' => '',
                ),
                array(
                    'src' => 'images/tuyendung/img4.png',
                    'title' => 'Kỹ sư chính An toàn thông tin (BO)',
                    'txt1' => '',
                ),
                array(
                    'src' => 'images/tuyendung/img5.png',
                    'title' => '02 Data Engineer (Java, Scala, SQL)',
                    'txt1' => '',
                ),
                array(
                    'src' => 'images/tuyendung/img6.png',
                    'title' => '09 Backend Developers (Python, Golang)',
                    'txt1' => '',
                ),
            );
            foreach ($data as $k => $v): ?>
            <div>
                <div class="recruitment__card1 uk-overflow-hidden uk-card uk-card-default uk-flex uk-flex-column">
                    <div class="uk-cover-container">
                        <img src="<?= $v['src'] ?>" alt="" uk-cover>
                        <canvas width="392" height="231"></canvas>
                        <div class="uk-position-bottom-left recruitment__card1__soluong">
                            <span>Số lượng: 01</span>
                        </div>
                    </div>
                    <div class="uk-card-body uk-flex-1 recruitment__card1__body">
                        <div class="uk-flex uk-flex-column uk-height-1-1">
                            <div class="uk-flex-1 mb-20 mb-40-m">
                                <h4 class="uk-h4 mb-10 recruitment__card1__body__title"><a href=""><?= $v['title'] ?></a></h4>
                                <div class="recruitment__card1__body__txt1">Full Time</div>
                            </div>
                            <div>
                                <div class="uk-flex-middle uk-grid-small" uk-grid>
                                    <div class="uk-width-expand">
                                        <div class="uk-grid-8 uk-flex-middle" uk-grid>
                                            <div class="uk-width-auto">
                                                <img src="images/tuyendung/map.png" alt="">
                                            </div>
                                            <div class="uk-width-expand">
                                                <span class="recruitment__card1__body__txt2">Hanoi; Ho Chi Minh</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-auto">
                                        <span class="recruitment__card1__body__txt2">3-3-2021</span>
                                    </div>
                                </div>
                                <hr class="recruitment__card1__body__divider">
                                <div class="recruitment__card1__body__txt3">Flexible - depending on level of experience</div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-footer uk-padding-remove">
                        <a href="" class="recruitment__card1__btn1 uk-button uk-button-secondary uk-width-1-1">Ứng tuyển</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <!--/viettel blobal Tuyển dụng-->
    </div>
</div>
<div class="uk-section recruitment__section1 uk-background-muted">
    <div class="uk-container uk-container-small">
        <div class="mb-20 mb-30-s mb-47-m uk-text-center">
            <h2 class="uk-h2 home__title uk-text-uppercase uk-text-center uk-margin-remove">câu hỏi thường gặp</h2>
        </div>
        <ul class="recruitment__cauhoi" uk-accordion>
            <?php
            $data = array(
                'Hướng dẫn ứng viên nộp hồ sơ qua mạng',
                'Khi nào có thể đi làm?',
                'Cơ cấu tổ chức của Công ty như thế nào?',
            );
            foreach ($data as $k => $v): ?>
            <li class="recruitment__cauhoi__li <?= ($k==0) ? 'uk-open' : '' ?>">
                <a class="uk-accordion-title recruitment__cauhoi__title" href="#"><?= $v ?></a>
                <div class="uk-accordion-content recruitment__cauhoi__content">
                    <p>Các ứng viên quan tâm gửi hồ sơ đến Phòng Tổ chức Nhân sự Tổng Công ty qua địa chỉ E-mail: tcnsvtg@gmail.com</p>

                    <p>Hồ sơ gồm:</p>

                    <p>1. Đơn xin việc</p>

                    <p>2. CV</p>

                    <p>CV yêu cầu các thông tin như sau:</p>

                    <p>+ Thông tin cá nhân: Tên, giới tính, số chứng minh nhân dân, ngày tháng năm sinh, tình trạng hôn nhân, sức khỏe.</p>

                    <p>+ Thông tin về học vấn: Trình độ học vấn, các văn bằng chứng chỉ liên quan (yêu cầu bản scan đi kèm).</p>

                    <p>+ Thông tin kinh nghiệm làm việc: Liệt kê kinh nghiệm công tác và các vị trí công việc đảm nhiệm.</p>

                    <p>+ Ghi rõ vị trí dự tuyển, mong muốn khi làm việc, mức lương hiện tại ở đơn vị cũ (nếu có), mức lương đề nghị khi được nhận vào làm việc vị trí dự tuyển.</p>

                    <p>+ Thông tin liên lạc: Địa chỉ liên lạc, số điện thoại.</p>
                </div>
            </li>
            <?php endforeach; ?>
            <!--
            <li class="uk-open">
                <a class="uk-accordion-title" href="#">Item 1</a>
                <div class="uk-accordion-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </li>
            <li>
                <a class="uk-accordion-title" href="#">Item 2</a>
                <div class="uk-accordion-content">
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
                </div>
            </li>
            <li>
                <a class="uk-accordion-title" href="#">Item 3</a>
                <div class="uk-accordion-content">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
                </div>
            </li>
            -->
        </ul>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>