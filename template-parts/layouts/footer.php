<footer class="footer uk-position-relative uk-background-norepeat uk-background-cover uk-background-center-center" data-src="images/footer/bg1.jpeg" uk-img>
    <div class="footer__overlay uk-position-cover"></div>
    <div class="uk-section footer__section1 uk-position-relative">
        <div class="uk-container">
            <div class="uk-card uk-card-default uk-card-body footer__card1 mb-30 mb-64-m footer__boxLienhe__body">
                <div class="uk-grid-15 uk-grid-96-m" uk-grid>
                    <div class="uk-width-auto@m">
                        <h2 class="uk-h2 uk-margin-remove home__title uk-text-center uk-text-left@m">Liên hệ</h2>
                    </div>
                    <div class="uk-width-expand">
                        <form class="uk-grid-small uk-grid-48-m footer__boxLienhe__grid1" uk-grid>
                            <div class="uk-width-1-2@s">
                                <input class="uk-input uk-border-pill footer__boxLienhe__input" type="text" placeholder="*Họ và tên">
                            </div>
                            <div class="uk-width-1-2@s">
                                <input class="uk-input uk-border-pill footer__boxLienhe__input" type="tel" placeholder="*Số điện thoại">
                            </div>
                            <div class="uk-width-1-2@s">
                                <input class="uk-input uk-border-pill footer__boxLienhe__input" type="email" placeholder="*Địa chỉ email">
                            </div>
                            <div class="uk-width-1-2@s">
                                <div class="uk-text-right">
                                    <button type="button" class="uk-button footer__boxLienhe__btn uk-button-secondary uk-border-pill">Gửi</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="uk-grid-small uk-grid-128-m uk-flex-bottom uk-light" uk-grid>
                <div class="uk-width-2-5@m">
                    <figure class="mb-15 mb-35-m footer__boxLogo uk-text-center uk-text-left@m">
                        <img src="images/footer/logo.png" alt="">
                    </figure>
                    <div class="mb-20 mb-40-m footer__boxDiachi">
                        <div class="footer__boxDiachi__name">TỔNG CÔNG TY CP ĐẦU TƯ QUỐC TẾ VIETTEL</div>
                        <div class="footer__boxDiachi__desc">Tầng 39 Tòa nhà Keangnam Landmark, lô E6, khu đô thị mới Cầu Giấy, Phường Mễ Trì, Nam Từ Liêm, Hà Nội</div>
                    </div>
                    <div class="footer__boxLienket">
                        <h4 class="uk-h4 footer__boxLienket__title mb-15 mb-20-m">Liên kết website</h4>
                        <ul class="uk-list footer__boxLienket__list">
                            <li><a href="">Tập đoàn Viễn thông Quân đội Viettel</a></li>
                            <li><a href="">Tổng công ty Viễn thông Viettel</a></li>
                        </ul>
                    </div>
                </div>
                <div class="uk-width-expand">
                    <div uk-grid>
                        <div class="uk-width-1-3@m">
                            <h3 class="uk-h3 footer__title mb-20 mb-45-m">Liên kết</h3>
                            <ul class="uk-list footer__menu">
                                <li><a href="">Giới thiệu</a></li>
                                <li><a href="">Quan hệ cổ đông</a></li>
                                <li><a href="">Thị trường</a></li>
                                <li><a href="">Tin tức</a></li>
                                <li><a href="">Thư viện</a></li>
                            </ul>
                        </div>
                        <div class="uk-width-expand">
                            <div class="uk-child-width-auto mb-20 mb-39-m uk-flex-middle uk-flex-center uk-grid-16" uk-grid>
                                <div>
                                    <div class="footer__brand">
                                        <img src="images/footer/viettel-global.png" alt="">
                                    </div>
                                </div>
                                <div>
                                    <span class="footer__boxLienket__title">Viettel Global</span>
                                </div>
                            </div>
                            <div class="uk-flex-center" uk-grid>
                                <div class="uk-width-1-2 uk-width-2-5@m">
                                    <div class="uk-child-width-1-1@m uk-grid-small uk-grid-20-m" uk-grid>
                                        <?php
                                        $data = array(
                                            array(
                                                'src' => 'images/footer/viettel-global.png',
                                                'txt' => 'Bitel',
                                            ),
                                            array(
                                                'src' => 'images/footer/mytel.png',
                                                'txt' => 'Mytel',
                                            ),
                                            array(
                                                'src' => 'images/footer/halotel.png',
                                                'txt' => 'Halotel',
                                            ),
                                            array(
                                                'src' => 'images/footer/natcom.png',
                                                'txt' => 'Natcom',
                                            ),
                                            array(
                                                'src' => 'images/footer/lumitel.png',
                                                'txt' => 'Lumitel',
                                            ),
                                        );
                                        foreach ($data as $k => $v): ?>
                                            <div>
                                                <div class="uk-child-width-auto uk-flex-middle uk-grid-16 footer__brand__item" uk-grid>
                                                    <div class="uk-width-auto">
                                                        <div class="footer__brand">
                                                            <img src="<?= $v['src'] ?>" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="uk-width-expand">
                                                        <span class="footer__brand__txt"><a href=""><?= $v['txt'] ?></a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <div class="uk-width-1-2 uk-width-2-5@m">
                                    <div class="uk-child-width-1-1@m uk-grid-small uk-grid-20-m" uk-grid>
                                        <?php
                                        $data = array(
                                            array(
                                                'src' => 'images/footer/nexttel.png',
                                                'txt' => 'Nexttel',
                                            ),
                                            array(
                                                'src' => 'images/footer/Metfone.png',
                                                'txt' => 'Metfone',
                                            ),
                                            array(
                                                'src' => 'images/footer/telemor.png',
                                                'txt' => 'Telemor',
                                            ),
                                            array(
                                                'src' => 'images/footer/viettel-global.png',
                                                'txt' => 'Movitel',
                                            ),
                                            array(
                                                'src' => 'images/footer/unitel.png',
                                                'txt' => 'Unitel',
                                            ),
                                        );
                                        foreach ($data as $k => $v): ?>
                                            <div>
                                                <div class="uk-child-width-auto uk-flex-middle uk-grid-16 footer__brand__item" uk-grid>
                                                    <div class="uk-width-auto">
                                                        <div class="footer__brand">
                                                            <img src="<?= $v['src'] ?>" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="uk-width-expand">
                                                        <span class="footer__brand__txt"><a href=""><?= $v['txt'] ?></a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="footer__divider">
            <div class="uk-text-center">
                <span class="footer__copyright">@Viettel Global</span>
            </div>
        </div>
    </div>
</footer>
</section>
</body>
</html>