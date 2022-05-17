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
                <?php   
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                ?>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="">
                            <?php if($image[0]){ ?>
                            <img width="165" height="42" class="lazyload" src="<?=$image[0]?>" alt="SKF Ngọc Anh" title="SKF Ngọc Anh">
                            <?php } ?>
                        </a>
                        <ul class="nav navbar-nav visible-xs search-mobile">
                            <li class="cart">
                                
                                <a href="" data-toggle="collapse" data-target="#bs-navbar-collapse-search" aria-expanded="false"><img class="lazyload" src="./assets/assets/imgs/icon-search-white.png" style="height:24px;width:24px" alt="Tìm kiếm"></a>
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
    </header>