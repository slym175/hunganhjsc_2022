<!DOCTYPE html>
<html lang="vi">

<head>
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name=viewport content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=yes" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Saira:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <?php wp_head() ?>
</head>

<body>
    <header>
        <div class="hdr-top">

            <nav class="navbar navbar-default navbar-pc" data-spy="affix" data-offset-top="64">
                <div class="tbg"></div>
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="https://ngocanh.com"><img width="165" height="42" class="lazyload" src="https://ngocanh.com/public/assets/logo.png?v=2.5.9" alt="SKF Ngọc Anh" title="SKF Ngọc Anh"></a>
                        <ul class="nav navbar-nav visible-xs search-mobile">
                            <li class="cart">
                                <a href="#" data-toggle="collapse" data-target="#bs-navbar-collapse-search" aria-expanded="false"><img class="lazyload" src="./assets/assets/imgs/icon-search-white.png" style="height:24px;width:24px" alt="Tìm kiếm"></a>
                            </li>
                        </ul>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <?php echo get_template_part('template-parts/menu/menu', 'primary') ?>
                    </div>

                    <div class="collapse navbar-collapse search" id="bs-navbar-collapse-search">
                        <form action="https://ngocanh.com/tim-kiem.html" class="form-search">
                            <div class="input-group">
                                <input type="text" name="q" value="" class="form-control" placeholder="Nhập tên SP cần tìm">
                                <span class="input-group-btn">
                                    <button class=" btn btn-link">
                                        <img class="lazyload" src="https://ngocanh.com/public/assets/assets/imgs/icon-search-white.png?v=2.5.9" alt="Tìm kiếm" style="height:24px;width:24px">
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </nav>


            <nav class="nav-mobile hidden">
            </nav>
        </div>

        <div class="hdr-btm">
            <div id="carousel-example-generic" class="carousel slide lazy-load" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="item active ">
                        <a href="san-pham/vong-bi-skf.html" title="Vòng bi SKF chính hãng">
                            <img src="<?php echo get_theme_file_uri('/assets/imgs/vong-bi-skf.jpg') ?>" width="1905" height="477" class="lazyload img-full" alt="Vòng bi SKF chính hãng">
                        </a>
                    </div>
                    <div class="item ">
                        <a href="san-pham/mo-boi-tron-SKF.html" title="Mỡ SKF chính hãng">
                            <img src="<?php echo get_theme_file_uri('/assets/imgs/mo-boi-tron-skf.jpg') ?>" width="1905" height="477" class="lazyload img-full" alt="Mỡ SKF chính hãng">
                        </a>
                    </div>
                    <div class="item ">
                        <a href="san-pham/goi-do-skf.html" title="Gối đỡ SKF chính hãng">
                            <img src="<?php echo get_theme_file_uri('/assets/imgs/goi-do-skf.jpg') ?>" width="1905" height="477" class="lazyload img-full" alt="Gối đỡ SKF chính hãng">
                        </a>
                    </div>
                    <div class="item ">
                        <a href="san-pham/dung-cu-skf.html" title="Dụng cụ SKF chính hãng">
                            <img src="<?php echo get_theme_file_uri('/assets/imgs/dung-cu-bao-tri.jpg') ?>" width="1905" height="477" class="lazyload img-full" alt="Dụng cụ SKF chính hãng">
                        </a>
                    </div>
                    <div class="item ">
                        <a href="san-pham/phot-chan-skf.html" title="Phớt chặn SKF chính hãng">
                            <img src="<?php echo get_theme_file_uri('/assets/imgs/phot-chan-dau-skf.jpg') ?>" width="1905" height="477" class="lazyload img-full" alt="Phớt chặn SKF chính hãng">
                        </a>
                    </div>
                    <div class="item ">
                        <a href="dai-ly-uy-quyen-vong-bi-skf.html" title="Đại lý ủy quyền vòng bi SKF chính hãng">
                            <img src="<?php echo get_theme_file_uri('/assets/imgs/dai-ly-uy-quyen-skf.jpg') ?>" width="1905" height="477" class="lazyload img-full" alt="Đại lý ủy quyền vòng bi SKF chính hãng">
                        </a>
                    </div>
                    <div class="item ">
                        <a href="tai-lieu-vong-bi/SKF-Authenticate.html" title="Kiểm tra vòng bi SKF giả (Fake)">
                            <img src="<?php echo get_theme_file_uri('/assets/imgs/skf-authenticate.jpg') ?>" width="1905" height="477" class="lazyload img-full" alt="Kiểm tra vòng bi SKF giả (Fake)">
                        </a>
                    </div>
                    <div class="item ">
                        <a href="bao-gia-vong-bi-skf-chinh-hang.html" title="Giao hàng tận nơi 24/7">
                            <img src="<?php echo get_theme_file_uri('/assets/imgs/giao-hang-toan-quoc.jpg') ?>" width="1905" height="477" class="lazyload img-full" alt="Giao hàng tận nơi 24/7">
                        </a>
                    </div>
                </div>

                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </header>