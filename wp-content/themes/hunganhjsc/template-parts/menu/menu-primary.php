<?php

global $nanoCategoryHelper;

$menuLocations = get_nav_menu_locations();

$menuId = $menuLocations['headerMenuLocation'];

$menu = $nanoCategoryHelper::nav_menu_object_tree(wp_get_nav_menu_items($menuId));
if ($menu) :
?>
    <ul class="nav navbar-nav">
        <?php foreach ($menu as $menuItem) : ?>
            <?php $imgMenu = get_field('loai_menu', $menuItem); print_r($imgMenu) ?>
            <li class="dropdown menu-pc <?= $menuItem->children ? 'menu-pc' : '' ?>">
                <a href="<?= $menuItem->url ?>" class="<?= $menuItem->children ? 'dropdown-toggle' : '' ?>">
                    <?= $menuItem->title ?>
                    <?php if ($menuItem->children) : ?>
                        <span class="caret"></span>
                    <?php endif ?>
                </a>
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
            <li class="menu-mobile">
                <a href="<?= $menuItem->url ?>"><?= $menuItem->title ?></a>
            </li>
        <?php endforeach ?>
        <li class="menu-mobile">
            <a href="<?= wc_get_cart_url() ?>"><?= 'Giỏ hàng' ?></a>
        </li>
    </ul>
<?php endif ?>

<ul class="nav navbar-nav navbar-right hidden-xs">
    <li class="dropdown form-search">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <img class="lazyload" src="/wp-content/themes/hunganhjsc/assets/imgs/icon-search.png" alt="Tìm kiếm" style="height:auto; width:24px"></a>
        <div class="dropdown-menu">
            <form action="<?= home_url() ?>" class="form-search">
                <div class="input-group d-flex align-item-center">
                    <input type="hidden" name="post_type[]" value="post">
                    <input type="hidden" name="post_type[]" value="product">
                    <input type="text" name="s" value="<?= isset($_GET['s']) && $_GET['s'] ? $_GET['s'] : '' ?>" class="form-control" placeholder="Nhập tên SP cần tìm">
                    <button type="submit" class=" btn btn-link">
                        <img class="lazyload" src="/wp-content/themes/hunganhjsc/assets/imgs/icon-search.png" alt="Tìm kiếm" style="height:auto; width:24px">
                    </button>
                </div>
            </form>
        </div>
    </li>
    <li class="cart">
        <?php echo do_shortcode('[woo_cart_button]') ?>
    </li>
</ul>