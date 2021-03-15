<?php $data["title"] = "Trang chủ"; ?>
<?php $is_home = true; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-section">
    <div class="uk-container">
        <div class="mb-15 mb-20-s mb-54-m">
            <h2 class="uk-h2 uk-margin-remove home__title uk-text-uppercase">Thư viện</h2>
        </div>
        <div class="uk-grid-match uk-grid-10 uk-grid-24-m" uk-grid>
            <div class="uk-width-1-4@m">
                <div class="uk-grid-match uk-grid-10 uk-grid-24-m" uk-grid>
                    <div class="uk-width-1-2 uk-width-1-1@m">
                        <div class="uk-cover-container uk-border-rounded">
                            <img src="images/thuvien/img1.png" alt="" uk-cover>
                            <canvas width="960" height="960"></canvas>
                        </div>
                    </div>
                    <div class="uk-width-1-2 uk-width-1-1@m">
                        <div class="uk-cover-container uk-border-rounded">
                            <img src="images/thuvien/img2.png" alt="" uk-cover>
                            <canvas width="960" height="960"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-width-expand">
                <div class="uk-cover-container uk-border-rounded">
                    <img src="images/thuvien/img3.png" alt="" uk-cover>
                    <canvas width="960" height="960"></canvas>
                </div>
            </div>
            <div class="uk-width-1-4@m">
                <div class="uk-grid-match uk-grid-10 uk-grid-24-m" uk-grid>
                    <div class="uk-width-1-2 uk-width-1-1@m">
                        <div class="uk-cover-container uk-border-rounded">
                            <img src="images/thuvien/img4.png" alt="" uk-cover>
                            <canvas width="960" height="960"></canvas>
                        </div>
                    </div>
                    <div class="uk-width-1-2 uk-width-1-1@m">
                        <div class="uk-cover-container uk-border-rounded">
                            <img src="images/thuvien/img5.png" alt="" uk-cover>
                            <canvas width="960" height="960"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>