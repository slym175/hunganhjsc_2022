<?php

global $nanoCategoryHelper;

$menuLocations = get_nav_menu_locations();

$menuId = $menuLocations['headerMenuLocation'];

$menu = $nanoCategoryHelper::nav_menu_object_tree(wp_get_nav_menu_items($menuId));
if ($menu) :
?>

    <ul class="nav navbar-nav">

        <?php foreach ($menu as $menuItem) : ?>
            <?php $imgMenu = get_field('loai_menu',$menuItem) ?>
            <li class="dropdown <?= $menuItem->children ? 'menu-pc' : '' ?>">
                <a href="<?= $menuItem->url ?>" class="<?= $menuItem->children ? 'dropdown-toggle' : '' ?>"><?= $menuItem->title ?></a>
                <?php if ($menuItem->children) : ?>
                    <ul class="dropdown-menu pcats" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
                        <?php foreach ($menuItem->children as $menuItem2) : ?>
                            <li>
                                <a itemprop="url" href="<?= $menuItem2->url ?>" title="<?= $menuItem2->title ?>">
                                <?php $image = get_field('menu_icon',$menuItem2) ?>
                                <?= wp_get_attachment_image($image,'small-thumbnail',true,array('class'=> 'width:30px')) ?>
                                    <span class="tt"><?= $menuItem2->title ?></span>
                                    <span class="stt" itemprop="name"><?= $menuItem2->title ?></span>
                                </a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                <?php endif ?>
            </li>
        <?php endforeach ?>

        <!-- <li class="dropdown menu-pc ">
        <a href="https://ngocanh.com/san-pham" class="dropdown-toggle">Sản phẩm <span class="caret"></span></a>
        <ul class="dropdown-menu pcats" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
            <li>
                <a itemprop="url" href="https://ngocanh.com/san-pham/vong-bi-skf" title="Vòng bi SKF">
                    <img width="52" height="52" class="lazyload" src="https://ngocanh.com/public/uploads/images/5435/vongbi-skf-55x55c.jpg" alt="Vòng bi SKF" title="Vòng bi SKF">
                    <span class="tt">Vòng bi SKF</span>
                    <span class="stt" itemprop="name">Vòng bi SKF chính hãng</span>
                </a>
            </li>
            <li>
                <a itemprop="url" href="https://ngocanh.com/san-pham/goi-do-skf" title="Gối đỡ SKF">
                    <img width="52" height="52" class="lazyload" src="https://ngocanh.com/public/uploads/images/100/goi-do-skf-55x55c.jpg" alt="Gối đỡ SKF" title="Gối đỡ SKF">
                    <span class="tt">Gối đỡ SKF</span>
                    <span class="stt" itemprop="name">Gối đỡ SKF chính hãng</span>
                </a>
            </li>
            <li>
                <a itemprop="url" href="https://ngocanh.com/san-pham/mo-boi-tron-SKF" title="Mỡ bôi trơn SKF">
                    <img width="52" height="52" class="lazyload" src="https://ngocanh.com/public/uploads/images/103/mo-skf-55x55c.jpg" alt="Mỡ bôi trơn SKF" title="Mỡ bôi trơn SKF">
                    <span class="tt">Mỡ bôi trơn SKF</span>
                    <span class="stt" itemprop="name">Mỡ bôi trơn SKF chính hãng</span>
                </a>
            </li>
            <li>
                <a itemprop="url" href="/day-dai-SKF-chinh-hang.html" title="Dây đai SKF">
                    <img width="52" height="52" class="lazyload" src="https://ngocanh.com/public/uploads/images/1363/day-dai-skf-55x55c.jpg" alt="Dây đai SKF" title="Dây đai SKF">
                    <span class="tt">Dây đai SKF</span>
                    <span class="stt" itemprop="name">Dây đai SKF chính hãng</span>
                </a>
            </li>
            <li>
                <a itemprop="url" href="https://ngocanh.com/san-pham/phot-chan-skf" title="Phớt chặn dầu SKF">
                    <img width="52" height="52" class="lazyload" src="https://ngocanh.com/public/uploads/images/1364/phot-skf-55x55c.jpg" alt="Phớt chặn dầu SKF" title="Phớt chặn dầu SKF">
                    <span class="tt">Phớt chặn dầu SKF</span>
                    <span class="stt" itemprop="name">Phớt chặn dầu SKF chính hãng</span>
                </a>
            </li>
            <li>
                <a itemprop="url" href="https://ngocanh.com/san-pham/dung-cu-skf" title="Dụng cụ bảo trì SKF">
                    <img width="52" height="52" class="lazyload" src="https://ngocanh.com/public/uploads/images/1365/dung-cu-skf-55x55c.jpg" alt="Dụng cụ bảo trì SKF" title="Dụng cụ bảo trì SKF">
                    <span class="tt">Dụng cụ bảo trì SKF</span>
                    <span class="stt" itemprop="name">Dụng cụ bảo trì SKF chính hãng</span>
                </a>
            </li>
            <li>
                <a itemprop="url" href="/xich-tai-skf.html" title="Xích tải SKF">
                    <img width="52" height="52" class="lazyload" src="https://ngocanh.com/public/uploads/images/5432/xich-tai-skf-55x55c.jpg" alt="Xích tải SKF" title="Xích tải SKF">
                    <span class="tt">Xích tải SKF</span>
                    <span class="stt" itemprop="name">Xích tải SKF Chính hãng</span>
                </a>
            </li>
            <li>
                <a itemprop="url" href="/san-pham/vong-bi-xe-may.html" title="Vòng bi xe máy">
                    <img width="52" height="52" class="lazyload" src="https://ngocanh.com/public/uploads/images/5433/vong-bi-xe-may-55x55c.jpg" alt="Vòng bi xe máy" title="Vòng bi xe máy">
                    <span class="tt">Vòng bi xe máy</span>
                    <span class="stt" itemprop="name">Vòng bi xe máy SKF chính hãng</span>
                </a>
            </li>
            <li>
                <a itemprop="url" href="/san-pham/vong-bi-xe-tai.html" title="Vòng bi xe tải">
                    <img width="52" height="52" class="lazyload" src="https://ngocanh.com/public/uploads/images/5434/vong-bi-xe-tai-skf-55x55c.jpg" alt="Vòng bi xe tải" title="Vòng bi xe tải">
                    <span class="tt">Vòng bi xe tải</span>
                    <span class="stt" itemprop="name">Vòng bi xe tải SKF chính hãng</span>
                </a>
            </li>
        </ul>
    </li>
    <li class=" menu-mobile ">
        <a href="https://ngocanh.com/san-pham">Sản phẩm</a>
    </li>

     <li class="dropdown menu-news menu-pc ">
        <a href="https://ngocanh.com/tai-lieu-vong-bi" class="dropdown-toggle">Tài liệu <span class="caret"></span></a>
        <ul class="dropdown-menu pcats" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
            <li>
                <a itemprop="url" href="https://ngocanh.com/tai-lieu-vong-bi/Tin-tuc-chung-SKF" title="Tin tức chung SKF">
                    <img width="28" height="28" class="lazyload" alt="Tin tức chung SKF" src="https://ngocanh.com/public/uploads/images/4867/newspaper-55x55c.jpg" />
                    <span class="tt">Tin tức chung SKF</span>
                    <span class="stt" itemprop="name">Tin tức chung về SKF</span>
                </a>
            </li>
            <li>
                <a itemprop="url" href="https://ngocanh.com/tai-lieu-vong-bi/Tu-van-Review" title="Tư vấn - Review">
                    <img width="28" height="28" class="lazyload" alt="Tư vấn - Review" src="https://ngocanh.com/public/uploads/images/4869/good-review-55x55c.jpg" />
                    <span class="tt">Tư vấn - Review</span>
                    <span class="stt" itemprop="name">Lựa chọn các sản phẩm SKF chính hãng</span>
                </a>
            </li>
            <li>
                <a itemprop="url" href="https://ngocanh.com/tai-lieu-vong-bi/Video-san-pham" title="Video sản phẩm">
                    <img width="28" height="28" class="lazyload" alt="Video sản phẩm" src="https://ngocanh.com/public/uploads/images/4868/play-button-55x55c.jpg" />
                    <span class="tt">Video sản phẩm</span>
                    <span class="stt" itemprop="name">Video sản phẩm SKF chính hãng</span>
                </a>
            </li> 
        </ul>
    </li>
    <li class="menu-mobile ">
        <a href="https://ngocanh.com/tai-lieu-vong-bi">Tài liệu</a>
    </li>

    <li class="menu-download ">
        <a href="https://ngocanh.com/catalogue">Catalogue</a>
    </li>

    <li class="menu-mobile ">
        <a href="/dai-ly-uy-quyen-vong-bi-skf.html">Đại lý uỷ quyền SKF</a>
    </li>

    <li class="">
        <a rel="nofollow" href="https://ngocanh.com/lien-he">Liên hệ</a>
    </li>


    <li class="menu-mobile ">
        <a href="/gio-hang">Giỏ hàng</a>
    </li> -->
    </ul>
<?php endif ?>

<ul class="nav navbar-nav navbar-right hidden-xs">
    <li class="dropdown form-search">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img class="lazyload" src="https://ngocanh.com/public/assets/imgs/icon-search.png" alt="Tìm kiếm" style="height:24px;width:24px"></a>
        <div class="dropdown-menu">
            <form action="https://ngocanh.com/tim-kiem.html" class="form-search">
                <div class="input-group">
                    <input type="text" name="q" value="" class="form-control" placeholder="Nhập tên SP cần tìm">
                    <span class="input-group-btn">
                        <button class=" btn btn-link">
                            <img class="lazyload" src="https://ngocanh.com/public/assets/imgs/icon-search.png" alt="Tìm kiếm" style="height:24px;width:24px">
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </li>
    <li class="cart">
        <?php $string = wc_get_cart_url (); ?>
        <a href="<?= $string ?>" rel="nofollow"><img class="lazyload" src="https://ngocanh.com/public/assets/imgs/icons/cart.svg" style="height:24px;width:24px" alt="Giỏ hàng"><span id="cart-count">0</span></a>
    </li>
</ul>