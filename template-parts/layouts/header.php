<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Viettel Global - <?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">
    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/@shinsenter/defer.js/dist/defer_plus.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit-icons.min.js"></script>
    <script src="js/app.js"></script>
</head>
<body class="<?= ($is_home) ? 'isHome' : '' ?>">
<?php require "template-parts/commons/facebook_chat.php"; ?>
<section id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
    <div uk-sticky="top: 100vh;animation: uk-animation-slide-top;">
        <header class="header">
            <div class="uk-container uk-padding-remove">
                <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
                    <div class="uk-navbar-left">
                        <a href="." class="uk-navbar-item uk-logo"><img src="images/logo.png" alt=""></a>
                    </div>

                    <div class="uk-navbar-right">
                        <div class="uk-width-1-1">
                            <div class="uk-section-xsmall header__top uk-visible@m">
                                <div class="uk-flex-right@m uk-flex-middle uk-grid-12 uk-child-width-auto" uk-grid>
                                    <div>
                                        <div class="uk-position-relative uk-flex uk-flex-middle">
                                            <label class="header__top__lang uk-flex-inline uk-flex-middle">
                                                <input class="uk-checkbox header__top__lang__check uk-hidden" type="checkbox">
                                                <span class="header__top__lang__txt uk-border-pill" data-vi="VN" data-en="EN">

                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <form class="uk-search uk-search-default header__top__boxSearch">
                                            <span class="uk-search-icon-flip uk-background-norepeat uk-background-center-center" uk-search-icon data-src="images/search.png" uk-img></span>
                                            <input class="uk-search-input uk-border-pill header__top__boxSearch__input" type="search" placeholder="">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <ul class="uk-navbar-nav uk-visible@m">
                                <li class="uk-active"><a href="#">Trang chủ</a></li>
                                <li><a href="#">Về Viettel Global</a></li>
                                <li>
                                    <a href="#">Nhà đầu tư</a>
                                    <div class="uk-navbar-dropdown">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li class="uk-active"><a href="#">Công bố thông tin</a></li>
                                            <li><a href="#">Báo cáo tài chính</a></li>
                                            <li><a href="#">Thông tin cổ phiếu</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="news.php">Tin tức</a></li>
                                <li><a href="recruitment.php">Tuyển dụng</a></li>
                            </ul>
                        </div>
                    </div>

                </nav>
            </div>
        </header>
    </div>