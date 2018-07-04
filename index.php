<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <!--Top bar-->
    <div class="top-bar">
        <div class="row">
            <div class="col-md-6">
                <ul>
                    <li>Tin tức</li>
                    <li>Thư viện</li>
                    <li>Liên hệ</li>
                </ul>
            </div>
            <div class="col-md-6">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownLanguageButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ENG
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownLanguageButton">
                        <a class="dropdown-item" href="#">VN</a>
                        <a class="dropdown-item" href="#">ENG</a>
                    </div>
                </div>
                <form name="frm_search" class="frm-search" action="/" method="get">
                    <input type="text" name="s" placeholder="Search" />
                    <input type="submit" name="submit" class="hide" />
                </form>
            </div>
        </div>
    </div>
    <!--End top bar-->
    <!--Menu contact-->
    <div class="menu-contact">
        <div class="row">
            <div class="col-md-2">
                <img src="/images/logo.png" id="logo" alt="">
            </div>
            <div class="col-md-5">
                <h3>TỔ CHỨC NGÔN NGỮ VÀ VĂN HÓA TÂY BAN NHA</h3>
            </div>
            <div class="col-md-2">
                <p>Hotline</p>
                <p>(+84) 24 3726 5445</p>
            </div>
            <div class="col-md-3">
                <button><a href="/">Đăng kí</a></button>
            </div>
        </div>
    </div>
    <!--End menu contact-->
    <!--Main menu-->
    <div class="main-menu">
        <div class="row">
            <div class="col-md-12">
                <ul>
                    <li>Trang chủ</li>
                    <li>Giới thiệu</li>
                    <li>Du học Tây Ban Nha</li>
                    <li>Chương trình du học</li>
                </ul>
            </div>
        </div>
    </div>
    <!--End main menu-->
</div>
<div class="row">
    <div class="col-md-12">
        <img src="/images/background-main-menu.png" alt="">
    </div>
</div>
</body>
</html>