<?php $data["title"] = "Media"; ?>
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
                            <img src="images/media/image72.png" alt="" uk-cover>
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
        <!--THƯ VIỆN-->
        <div class="mb-40 mb-60-s mb-123-m">
            <h2 class="uk-h2 uk-margin-remove home__title uk-text-uppercase uk-text-center">THƯ VIỆN</h2>
        </div>
        <div class="uk-grid-small uk-grid-24-m uk-child-width-1-2@s uk-child-width-1-3@m media__grid1 mb-30 mb-60-s mb-96-m" uk-grid>
            <?php
            $data = array(
                array(
                    'src' => 'images/media/img1.png',
                    'txt' => '',
                ),
                array(
                    'src' => 'images/media/img2.png',
                    'txt' => '',
                ),
                array(
                    'src' => 'images/media/img3.png',
                    'txt' => '',
                ),
                array(
                    'src' => 'images/media/img4.png',
                    'txt' => '',
                ),
                array(
                    'src' => 'images/media/img5.png',
                    'txt' => '',
                ),
                array(
                    'src' => 'images/media/img6.png',
                    'txt' => '',
                ),
                array(
                    'src' => 'images/media/img7.png',
                    'txt' => '',
                ),
                array(
                    'src' => 'images/media/img8.png',
                    'txt' => '',
                ),
                array(
                    'src' => 'images/media/img9.png',
                    'txt' => '',
                ),
            );
            foreach ($data as $k => $v): ?>
            <div>
                <div class="uk-cover-container media__box1__img mb-20 mb-32-m">
                    <img src="<?= $v['src'] ?>" alt="" uk-cover>
                    <canvas width="392" height="280"></canvas>
                </div>
                <div class="media__box1__date mb-8">20/11/2010</div>
                <div class="media__box1__title"><a href="">Viettel Global thắng thầu dự án đầu tư mạng viễn thông tại  Mozambique.</a></div>
            </div>
            <?php endforeach; ?>
        </div>

        <!--/THƯ VIỆN-->
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